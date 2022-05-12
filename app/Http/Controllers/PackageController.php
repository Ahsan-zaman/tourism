<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Package;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('packages.index', [
            'packages' => Package::latest()->withTrashed()->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('packages.create')->with([
            'categories' => Category::latest()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => [ 'required', 'string', 'max:255' ],
            'content' => [ 'required', 'string', 'max:25555' ],
            'price' => [ 'required', 'numeric' ],
            'thumb' => [ 'required', 'file', 'mimes:jpeg,jpg,png,webp,gif' ],
            'category_id' => [ 'required', 'integer' ]
        ]);
        // dd($request->all());
        $category = Category::findOrFail($request->category_id);
        $path = null;
        // file upload
        if($request->hasFile('thumb')){
            $file = $request->file('thumb');

            $path = "tourism/{$category->title}/";
            $path = Storage::putFile($path, $file,'public');
        }

        $category->packages()->create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'price' => $request->price,
            'thumb' => $path,
        ]);

        return redirect(route('packages.index'))->with('message', 'Package was added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        return view('packages.show')->with([
            'package' => $package
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        $package->delete();
        return redirect(route('packages.index'))->with('error', 'Package has been disabled');
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function restore(Package $package)
    {
        $package->restore();
        return redirect(route('packages.index'))->with('message', 'Package has been activated');
    }
}
