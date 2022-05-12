<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Package') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form method="POST" enctype="multipart/form-data" class="grid md:grid-cols-2 p-3 gap-6 items-center my-3" action="{{ route('packages.store') }}">
                    @csrf
                    <div class="relative z-0 mb-6 w-full group">
                        <input required type="text" name="title" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-slate-500 focus:outline-none focus:ring-0 focus:border-slate-600 peer" value="{{ old('title') }}" />
                        <label for="title" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-slate-600 peer-focus:dark:text-slate-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Title</label>
                        @error('title')
                        <div class="pt-1 text-red-700 text-xs">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input required type="file" name="thumb" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-slate-500 focus:outline-none focus:ring-0 focus:border-slate-600 peer"  />
                        <label for="thumb" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-slate-600 peer-focus:dark:text-slate-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Thumbnail</label>
                        @error('thumb')
                        <div class="pt-1 text-red-700 text-xs">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <select required name="category_id" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-slate-500 focus:outline-none focus:ring-0 focus:border-slate-600 peer">
                            <option value="" hidden>Select a category</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                        <label for="category_id" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-slate-600 peer-focus:dark:text-slate-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Category</label>
                        @error('category_id')
                        <div class="pt-1 text-red-700 text-xs">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input required type="text" name="price" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-slate-500 focus:outline-none focus:ring-0 focus:border-slate-600 peer" value="{{ old('price') }}" />
                        <label for="price" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-slate-600 peer-focus:dark:text-slate-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Price</label>
                        @error('price')
                        <div class="pt-1 text-red-700 text-xs">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="relative z-0 mb-6 col-span-2 group">
                        <textarea name="content">{{old('content')}}</textarea>
                        <label for="content" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-1 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-slate-600 peer-focus:dark:text-slate-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Content</label>
                        @error('content')
                        <div class="pt-1 text-red-700 text-xs">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="flex justify-end col-span-2">
                        <button type="submit" class="transition delay-150 text-white bg-gradient-to-br to-slate-500 from-slate-700 hover:bg-gradient-to-tl focus:ring-4 focus:ring-slate-300 font-medium rounded-lg text-sm w-full sm:w-auto px-4 py-2 text-center">Create</button>
                    </div>
                </form>
            </div>
        </div>
        <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
        <script>
                CKEDITOR.replace( 'content' );
        </script>
    </div>
</x-app-layout>
