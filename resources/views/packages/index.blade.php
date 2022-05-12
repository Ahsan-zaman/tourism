<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Packages') }}
            </h2>
            <a href="{{ route('packages.create') }}" class="transition delay-150 text-white bg-gradient-to-br to-slate-500 from-slate-700 hover:bg-gradient-to-tl focus:ring-4 focus:ring-slate-300 font-medium rounded-lg text-sm w-full sm:w-auto px-4 py-2 text-center">Add Package</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-display-message />
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form method="GET" class="grid md:grid-cols-2 p-3 gap-6 items-center my-3" action="{{ route('packages.store') }}">
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="title" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-slate-500 focus:outline-none focus:ring-0 focus:border-slate-600 peer" value="{{ old('title', isset($_GET['title']) ? $_GET['title'] : '') }}" />
                        <label for="date" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-slate-600 peer-focus:dark:text-slate-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Title</label>
                        @error('title')
                        <div class="pt-1 text-red-700 text-xs">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="transition delay-150 text-white bg-gradient-to-br to-slate-500 from-slate-700 hover:bg-gradient-to-tl focus:ring-4 focus:ring-slate-300 font-medium rounded-lg text-sm w-full sm:w-auto px-4 py-2 text-center">Search</button>
                    </div>
                </form>
                <div class="bg-white border-b border-gray-200 overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-slate-200">
                            <tr>
                                <th class="px-3 py-2">{{__('Date Added')}}</th>
                                <th class="px-3 py-2">{{__('Title')}}</th>
                                <th class="px-3 py-2">{{__('Status')}}</th>
                                <th class="px-3 py-2">{{__('Category')}}</th>
                                <th class="px-3 py-2">{{__('Price')}}</th>
                                <th class="px-3 py-2">{{__('Actions')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($packages->items() as $package)
                            <tr>
                                <td class="px-3 py-2 border-b text-center">{{ $package->created_at->toDayDateTimeString() }}</td>
                                <td class="px-3 py-2 border-b text-center">{{ $package->title }}</td>
                                <td class="px-3 py-2 border-b text-center">
                                    @if($package->deleted_at)
                                    <span class="px-2 py-1 text-xs bg-rose-600 text-white rounded">
                                    Disabled
                                    </span>
                                    @else
                                    <span class="px-2 py-1 text-xs bg-green-600 text-white rounded">
                                    Active
                                    </span>
                                    @endif
                                </td>
                                <td class="px-3 py-2 border-b text-center">{{ $package->category->title }}</td>
                                <td class="px-3 py-2 border-b text-center">{{ $package->price }}</td>
                                <td class="px-3 py-2 border-b text-center flex justify-center gap-1">
                                    @if($package->deleted_at)
                                    <form action="{{ route('packages.restore', $package) }}" method="post">
                                        @method('POST')
                                        @csrf
                                        <button class="block px-1 border border-green-700 text-green-700 rounded" type="submit">
                                            Enable
                                        </button>
                                    </form>
                                    @else
                                    <form action="{{ route('packages.destroy', $package) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button class="block px-1 border border-rose-700 text-rose-700 rounded" type="submit">
                                            Disable
                                        </button>
                                    </form>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="w-full px-3 py-2 pt-4">
                        {{$packages->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
