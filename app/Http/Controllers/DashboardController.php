<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $users =  User::
        when($q = $request->name, fn($query) => $query->where('name', 'LIKE', "%$q%"))
        ->when($q = $request->email, fn($query) => $query->where('email', 'LIKE', "%$q%"))
        ->latest()->withTrashed()->paginate();
        return view('dashboard')->with([
            'users' => $users
        ]);
    }
    public function block(User $user)
    {
        // dd($user);
        $user->delete();

        return back()->with('message', "{$user->name} has been blocked!");
    }
    public function unblock(User $user)
    {
        // dd($user);
        $user->restore();

        return back()->with('message', "{$user->name} active now!");
    }

    public function home()
    {
        $categories = Category::withCount('packages')
        ->with(['packages'])
        ->orderByDesc('packages_count')
        ->limit(5)
        ->get();
        // dd($categories[0]->packages[0]->thumb_url);
        return view('welcome')->with([
            'categories' => $categories
        ]);
    }
}
