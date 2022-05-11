<div class="flex flex-col">
    <nav id="nav" class="py-8 md:border-b-0 border-b" role="navigation">
        <div class="container m-auto flex flex-wrap items-center justify-between md:flex-no-wrap">
            <a href="index.html" class="flex">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                </svg>
                <h4 class="font-bold text-lg uppercase">Tourism</h4>
            </a>
            <div class="ml-auto md:hidden">
                <button onclick="menuToggle()" class="flex items-center rounded" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
            <div id="menu" class="w-full md:w-auto h-0 transition-all ease-out duration-300 md:transition-none md:flex-grow md:flex md:items-center opacity-0 md:opacity-100">
                <ul id="ulMenu" class="flex flex-col duration-300 ease-out sm:transition-none md:flex-row ml-auto mt-5 md:mt-0">
                    <li>
                        <a class="lg:px-6 font-medium font-secondary block text-blue-500 p-3 uppercase text-sm" href="index.html" title="Home">Home</a>
                    </li>
                    <li>
                        <a class="lg:px-6 font-medium font-secondary block text-black/70 hover:text-blue-500 p-3 uppercase text-sm" href="about.html" title="About">About</a>
                    </li>
                    <li>
                        <a class="lg:px-6 font-medium font-secondary block text-black/70 hover:text-blue-500 p-3 uppercase text-sm" href="service.html" title="Service">Service</a>
                    </li>
                    <li>
                        <a class="lg:px-6 font-medium font-secondary block text-black/70 hover:text-blue-500 p-3 uppercase text-sm" href="work.html" title="Work">Work</a>
                    </li>
                    <li>
                        <a class="lg:px-6 font-medium font-secondary block text-black/70 hover:text-blue-500 p-3 uppercase text-sm" href="blog.html" title="Blog">Blog</a>
                    </li>
                    <li>
                        <a class="lg:px-6 font-medium font-secondary block text-black/70 hover:text-blue-500 p-3 uppercase text-sm" href="contact.html" title="Contact">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="ml-8 flex items-center gap-1">
                @if(auth()->check())
                <a class="font-medium font-secondary block text-black/70 hover:text-blue-500 uppercase text-sm" href="{{ route('login') }}" title="user-name">{{ auth()->user()->name }}</a>
                @else
                <a class="font-medium font-secondary block text-black/70 hover:text-blue-500 uppercase text-sm" href="{{ route('login') }}" title="Contact">Login</a>/
                <a class="font-medium font-secondary block text-black/70 hover:text-blue-500 uppercase text-sm" href="{{ route('register') }}" title="Contact">Register</a>
                @endif
            </div>
        </div>
    </nav>
</div>