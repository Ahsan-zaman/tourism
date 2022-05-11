<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Tourism</title>

</head>

<body class="bg-[url('/assets/bg-pattern.png')] bg-no-repeat" cz-shortcut-listen="true">
    <!-- Navbar Start -->
    <div class="flex flex-col">
        <nav id="nav" class="py-8 md:border-b-0 border-b" role="navigation">
            <div class="container flex flex-wrap items-center md:flex-no-wrap">
                <a href="index.html" class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                    </svg>
                    <h4 class="font-bold text-lg mt-2 uppercase">Tourism</h4>
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
            </div>
        </nav>
    </div>

    <!-- Section Start -->
    <section class="section py-14" id="home">
        <div class="container m-auto">
            <div class="lg:flex justify-center">
                <div class="lg:w-2/3 mx-2">
                    <div class="text-center">
                        <h1 class="text-4xl font-semibold leading-[50px] tracking-wide text-transparent bg-clip-text bg-gradient-to-l from-pink-400 to-blue-600 mb-10">
                            Buckzo Is One Of Best Web Design &amp; Development Company
                        </h1>
                        <p class="text-base text-gray-400">We create digital assets and we're focused on Web Technologies and Design,
                            based on London, United Kingdom. We build creative &amp; professional themes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section End -->


    <!-- shuffle portfolio -->
    <section class="section">
        <div class="container m-auto">
            <div class="flex justify-center">
                <div class="w-full filters-group-wrap mb-3">
                    <div class="flex justify-center mb-5">
                        <ul class="filter-options flex flex-wrap gap-4 justify-center">
                            <li data-group="all"><a class="inline-block cursor-pointer rounded-md py-3 px-5 focus:bg-blue-200 focus:text-blue-700" href="javascript:void(0)">All</a></li>
                            <li data-group="android"><a class="inline-block cursor-pointer rounded-md py-3 px-5 focus:bg-blue-200 focus:text-blue-700" href="javascript:void(0)">Android</a></li>
                            <li data-group="mockup"><a class="inline-block cursor-pointer rounded-md py-3 px-5 focus:bg-blue-200 focus:text-blue-700" href="javascript:void(0)">Mockup</a></li>
                            <li data-group="personal"><a class="inline-block cursor-pointer rounded-md py-3 px-5 focus:bg-blue-200 focus:text-blue-700" href="javascript:void(0)">Web</a></li>
                            <li data-group="design"><a class="inline-block cursor-pointer rounded-md py-3 px-5 focus:bg-blue-200 focus:text-blue-700" href="javascript:void(0)">Design</a></li>
                        </ul>
                    </div>
                </div>
                <!--end /div-->
            </div>
            <!--end /div-->

            <div id="grid" class="md:flex justify-center shuffle" style="position: relative; overflow: hidden; height: 1689.66px; transition: height 250ms cubic-bezier(0.4, 0, 0.2, 1) 0s;">
                <div class="md:w-1/3 p-3 picture-item shuffle-item shuffle-item--visible" data-groups="[&quot;mockup&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                    <div class="relative block overflow-hidden rounded group transition-all duration-500">
                        <img src="https://assets.airtrfx.com/cdn-cgi/image/height=1080,format=auto/https://static.flynas.com/images/em/RIYADH.png" class="rounded transition-all duration-500 group-hover:scale-105" alt="work-image">
                        <a href="javascript:void(0)" class="absolute inset-3 flex items-end cursor-pointer rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80">
                            <div>
                                <p class="text-sm text-gray-400">Media, Icons</p>
                                <h6 class="text-base text-black font-medium">Open Imagination</h6>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="md:w-1/3 p-3 picture-item shuffle-item shuffle-item--visible" data-groups="[&quot;android&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(379px, 0px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                    <div class="relative block overflow-hidden rounded group transition-all duration-500">
                        <img src="https://assets.airtrfx.com/cdn-cgi/image/height=1080,format=auto/https://static.flynas.com/images/em/RIYADH.png" class="rounded transition-all duration-500 group-hover:scale-105" alt="work-image">
                        <a href="javascript:void(0)" class="absolute inset-3 flex items-end cursor-pointer rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80">
                            <div>
                                <p class="text-sm text-gray-400">Illustrations</p>
                                <h6 class="text-base text-black font-medium">Locked Steel Gate</h6>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="md:w-1/3 p-3 picture-item shuffle-item shuffle-item--visible" data-groups="[&quot;mockup&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(757px, 0px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                    <div class="relative block overflow-hidden rounded group transition-all duration-500">
                        <img src="https://assets.airtrfx.com/cdn-cgi/image/height=1080,format=auto/https://static.flynas.com/images/em/RIYADH.png" class="rounded transition-all duration-500 group-hover:scale-105" alt="work-image">
                        <a href="javascript:void(0)" class="absolute inset-3 flex items-end cursor-pointer rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80">
                            <div>
                                <p class="text-sm text-gray-400">Graphics, UI Elements</p>
                                <h6 class="text-base text-black font-medium">Mac Sunglasses</h6>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="md:w-1/3 p-3 picture-item shuffle-item shuffle-item--visible" data-groups="[&quot;android&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(0px, 142px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                    <div class="relative block overflow-hidden rounded group transition-all duration-500">
                        <img src="https://assets.airtrfx.com/cdn-cgi/image/height=1080,format=auto/https://static.flynas.com/images/em/RIYADH.png" class="rounded transition-all duration-500 group-hover:scale-105" alt="work-image">
                        <a href="javascript:void(0)" class="absolute inset-3 flex items-end cursor-pointer rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80">
                            <div>
                                <p class="text-sm text-gray-400">Icons, Illustrations</p>
                                <h6 class="text-base text-black font-medium">Morning Dew</h6>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="md:w-1/3 p-3 picture-item shuffle-item shuffle-item--visible" data-groups="[&quot;android&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(0px, 396px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                    <div class="relative block overflow-hidden rounded group transition-all duration-500">
                        <img src="https://assets.airtrfx.com/cdn-cgi/image/height=1080,format=auto/https://static.flynas.com/images/em/RIYADH.png" class="rounded transition-all duration-500 group-hover:scale-105" alt="work-image">
                        <a href="javascript:void(0)" class="absolute inset-3 flex items-end cursor-pointer rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80">
                            <div>
                                <p class="text-sm text-gray-400">UI Elements, Media</p>
                                <h6 class="text-base text-black font-medium">Console Activity</h6>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="md:w-1/3 p-3 picture-item shuffle-item shuffle-item--visible" data-groups="[&quot;personal&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(757px, 479px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                    <div class="relative block overflow-hidden rounded group transition-all duration-500">
                        <img src="https://assets.airtrfx.com/cdn-cgi/image/height=1080,format=auto/https://static.flynas.com/images/em/RIYADH.png" class="rounded transition-all duration-500 group-hover:scale-105" alt="work-image">
                        <a href="javascript:void(0)" class="absolute inset-3 flex items-end cursor-pointer rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80">
                            <div>
                                <p class="text-sm text-gray-400">Graphics</p>
                                <h6 class="text-base text-black font-medium">Sunset Bulb Glow</h6>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="md:w-1/3 p-3 picture-item shuffle-item shuffle-item--visible" data-groups="[&quot;design&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(379px, 497px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                    <div class="relative block overflow-hidden rounded group transition-all duration-500">
                        <img src="https://assets.airtrfx.com/cdn-cgi/image/height=1080,format=auto/https://static.flynas.com/images/em/RIYADH.png" class="rounded transition-all duration-500 group-hover:scale-105" alt="work-image">
                        <a href="javascript:void(0)" class="absolute inset-3 flex items-end cursor-pointer rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80">
                            <div>
                                <p class="text-sm text-gray-400">UI Elements, Media</p>
                                <h6 class="text-base text-black font-medium">Console Activity</h6>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="md:w-1/3 p-3 picture-item shuffle-item shuffle-item--visible" data-groups="[&quot;mockup&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(0px, 956px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                    <div class="relative block overflow-hidden rounded group transition-all duration-500">
                        <img src="https://assets.airtrfx.com/cdn-cgi/image/height=1080,format=auto/https://static.flynas.com/images/em/RIYADH.png" class="rounded transition-all duration-500 group-hover:scale-105" alt="work-image">
                        <a href="javascript:void(0)" class="absolute inset-3 flex items-end cursor-pointer rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80">
                            <div>
                                <p class="text-sm text-gray-400">Illustrations, Graphics</p>
                                <h6 class="text-base text-black font-medium">Shake It!</h6>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="md:w-1/3 p-3 picture-item shuffle-item shuffle-item--visible" data-groups="[&quot;personal&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(757px, 976px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                    <div class="relative block overflow-hidden rounded group transition-all duration-500">
                        <img src="https://assets.airtrfx.com/cdn-cgi/image/height=1080,format=auto/https://static.flynas.com/images/em/RIYADH.png" class="rounded transition-all duration-500 group-hover:scale-105" alt="work-image">
                        <a href="javascript:void(0)" class="absolute inset-3 flex items-end cursor-pointer rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80">
                            <div>
                                <p class="text-sm text-gray-400">Graphics</p>
                                <h6 class="text-base text-black font-medium">Sunset Bulb Glow</h6>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="md:w-1/3 p-3 picture-item shuffle-item shuffle-item--visible" data-groups="[&quot;personal&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(379px, 994px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                    <div class="relative block overflow-hidden rounded group transition-all duration-500">
                        <img src="https://assets.airtrfx.com/cdn-cgi/image/height=1080,format=auto/https://static.flynas.com/images/em/RIYADH.png" class="rounded transition-all duration-500 group-hover:scale-105" alt="work-image">
                        <a href="javascript:void(0)" class="absolute inset-3 flex items-end cursor-pointer rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80">
                            <div>
                                <p class="text-sm text-gray-400">Graphics</p>
                                <h6 class="text-base text-black font-medium">Sunset Bulb Glow</h6>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="md:w-1/3 p-3 picture-item shuffle-item shuffle-item--visible" data-groups="[&quot;android&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(0px, 1246px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                    <div class="relative block overflow-hidden rounded group transition-all duration-500">
                        <img src="https://assets.airtrfx.com/cdn-cgi/image/height=1080,format=auto/https://static.flynas.com/images/em/RIYADH.png" class="rounded transition-all duration-500 group-hover:scale-105" alt="work-image">
                        <a href="javascript:void(0)" class="absolute inset-3 flex items-end cursor-pointer rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80">
                            <div>
                                <p class="text-sm text-gray-400">UI Elements, Media</p>
                                <h6 class="text-base text-black font-medium">Console Activity</h6>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="md:w-1/3 p-3 picture-item shuffle-item shuffle-item--visible" data-groups="[&quot;mockup&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(379px, 1384px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                    <div class="relative block overflow-hidden rounded group transition-all duration-500">
                        <img src="https://assets.airtrfx.com/cdn-cgi/image/height=1080,format=auto/https://static.flynas.com/images/em/RIYADH.png" class="rounded transition-all duration-500 group-hover:scale-105" alt="work-image">
                        <a href="javascript:void(0)" class="absolute inset-3 flex items-end cursor-pointer rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80">
                            <div>
                                <p class="text-sm text-gray-400">Illustrations, Graphics</p>
                                <h6 class="text-base text-black font-medium">Shake It!</h6>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="md:w-1/3 p-3 picture-item shuffle-item shuffle-item--visible" data-groups="[&quot;design&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(757px, 1444px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                    <div class="relative block overflow-hidden rounded group transition-all duration-500">
                        <img src="https://assets.airtrfx.com/cdn-cgi/image/height=1080,format=auto/https://static.flynas.com/images/em/RIYADH.png" class="rounded transition-all duration-500 group-hover:scale-105" alt="work-image">
                        <a href="javascript:void(0)" class="absolute inset-3 flex items-end cursor-pointer rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80">
                            <div>
                                <p class="text-sm text-gray-400">Illustrations, Graphics</p>
                                <h6 class="text-base text-black font-medium">Shake It!</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!--end /div-->
            <div class="flex justify-center mt-8">
                <a href="work.html" class="py-4 px-7 rounded text-sm font-medium bg-blue-500 text-white">More Works <i class="mdi mdi-arrow-right ms-1"></i></a>
            </div>
        </div>
    </section>

    <section class="section py-10">
        <div class="container m-auto">
            <div class="grid lg:grid-cols-3 gap-8 text-center">
                <div>
                    <div class="p-5">
                        <div class="text-5xl text-blue-500">
                            <i class="pe-7s-leaf"></i>
                        </div>
                        <h4 class="uppercase text-base my-3">Branding</h4>

                        <p class="text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                    </div>
                </div>

                <div>
                    <div class="p-5">
                        <div class="text-5xl text-blue-500">
                            <i class="pe-7s-helm"></i>
                        </div>
                        <h4 class="uppercase text-base my-3">Highly customizable</h4>

                        <p class="text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                    </div>
                </div>

                <div>
                    <div class="p-5">
                        <div class="text-5xl text-blue-500">
                            <i class="pe-7s-airplay"></i>
                        </div>
                        <h4 class="uppercase text-base my-3">Responsive design</h4>

                        <p class="text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="border-t py-8">
        <div class="container m-auto">

            <div class="flex">
                <div class="w-full">
                    <div class="text-center">
                        <a class="text-6xl text-black" href="index.html"><i class="icofont-deer-head"></i></a>
                        <h4 class="font-bold text-lg mt-2 uppercase">Tourism</h4>

                        <ul class="flex justify-center mt-8 gap-3">
                            <li>
                                <a class="w-11 h-11 rounded flex items-center justify-center text-lg bg-gray-100 text-black hover:text-white hover:bg-blue-500 transition-all" href="javascript:void(0)">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 512 512"><path d="M256,32C132.33,32,32,132.33,32,256S132.33,480,256,480,480,379.78,480,256,379.67,32,256,32ZM398.22,135.25a186.36,186.36,0,0,1,44,108.38c-40.37-2.1-88.67-2.1-127.4,1.52-4.9-12.37-9.92-24.5-15.4-36.17C344.08,189.62,378.5,164.18,398.22,135.25ZM256,69.33a185.81,185.81,0,0,1,119.12,42.94c-20.3,25.66-52.15,48-91.82,64.86C261.6,137,236.63,102.47,210,75.28A187.51,187.51,0,0,1,256,69.33ZM171.53,89.75c26.95,26.83,52.27,61,74.44,101C203.85,203.62,155.55,211,104,211c-9.8,0-19.36-.35-28.81-.94A186.78,186.78,0,0,1,171.53,89.75ZM69.68,247.13c10.62.47,21.35.7,32.2.59,58.8-.7,113.52-9.92,160.54-25q6.65,13.83,12.6,28.35a115.43,115.43,0,0,0-16.69,5C194.05,283.07,143.42,326.58,116,379.2A186,186,0,0,1,69.33,256C69.33,253,69.45,250.05,69.68,247.13ZM256,442.67a185.57,185.57,0,0,1-114.45-39.32c24.85-49.23,69.18-90,125.07-115.27,5.25-2.45,12.25-4.43,20.3-6.18q10,27.64,17.85,57.4A678,678,0,0,1,322,430.42,185.06,185.06,0,0,1,256,442.67Zm100.92-29.75a672.61,672.61,0,0,0-17.39-92.05c-4-15.17-8.51-29.87-13.41-44.22,36.63-3,80.5-2.57,115.38,0A186.5,186.5,0,0,1,356.92,412.92Z"/></svg>
                                </a>
                            </li>
                            <li>
                                <a class="w-11 h-11 rounded flex items-center justify-center text-lg bg-gray-100 text-black hover:text-white hover:bg-blue-500 transition-all" href="javascript:void(0)">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 512 512"><path d="M480,257.35c0-123.7-100.3-224-224-224s-224,100.3-224,224c0,111.8,81.9,204.47,189,221.29V322.12H164.11V257.35H221V208c0-56.13,33.45-87.16,84.61-87.16,24.51,0,50.15,4.38,50.15,4.38v55.13H327.5c-27.81,0-36.51,17.26-36.51,35v42h62.12l-9.92,64.77H291V478.66C398.1,461.85,480,369.18,480,257.35Z" fill-rule="evenodd"/></svg>
                                </a>
                            </li>
                            <li>
                                <a class="w-11 h-11 rounded flex items-center justify-center text-lg bg-gray-100 text-black hover:text-white hover:bg-blue-500 transition-all" href="javascript:void(0)">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 512 512"><path d="M467.16,303.6a205.69,205.69,0,0,0,4.9-45.15c0-116.32-95.69-210.7-213.79-210.7a221.83,221.83,0,0,0-36.52,3A123.58,123.58,0,0,0,155.93,32C87.55,32,32,86.72,32,154.15A119.56,119.56,0,0,0,49,216a211.16,211.16,0,0,0-4.32,42.35c0,116.44,95.69,210.7,213.67,210.7a214,214,0,0,0,39.09-3.5A125.45,125.45,0,0,0,356.07,480C424.57,480,480,425.28,480,357.85A118,118,0,0,0,467.16,303.6ZM368,359c-9.92,13.76-24.51,24.73-43.41,32.43S283.36,403,257.69,403c-30.69,0-56.36-5.37-76.55-15.87a101,101,0,0,1-35.24-30.8c-9.11-12.83-13.66-25.66-13.66-38,0-7.7,3-14.35,8.87-19.95,5.84-5.37,13.42-8.17,22.29-8.17,7.35,0,13.65,2.1,18.79,6.42,4.9,4.08,9.1,10.15,12.48,18.08A108.09,108.09,0,0,0,207,336.15q6.32,8.22,17.86,13.65c7.82,3.62,18.2,5.48,31,5.48,17.62,0,32.09-3.73,42.94-11.08,10.74-7.12,15.88-15.75,15.88-26.25,0-8.28-2.69-14.82-8.29-19.95-5.83-5.37-13.42-9.57-22.87-12.37-9.69-3-22.87-6.18-39.21-9.56-22.17-4.67-41-10.27-56-16.57-15.28-6.42-27.65-15.4-36.76-26.48-9.22-11.32-13.77-25.55-13.77-42.24a67.86,67.86,0,0,1,14.47-42.58c9.57-12.25,23.46-21.82,41.55-28.35,17.74-6.53,38.86-9.8,62.66-9.8,19.14,0,35.83,2.22,49.83,6.42s25.91,10.15,35.36,17.38,16.34,14.93,20.77,23,6.66,16.22,6.66,24c0,7.46-2.92,14.35-8.76,20.3a29.65,29.65,0,0,1-21.94,9.1c-7.93,0-14.12-1.87-18.43-5.6-4-3.5-8.17-8.87-12.72-16.69-5.37-9.91-11.79-17.85-19.14-23.45-7.24-5.36-19.14-8.16-35.71-8.16-15.29,0-27.77,3-37,9-8.87,5.72-13.19,12.37-13.19,20.18a18.26,18.26,0,0,0,4.32,12.25,38.13,38.13,0,0,0,12.72,9.57,90.14,90.14,0,0,0,17.15,6.53c6,1.64,15.87,4.09,29.53,7.12,17.38,3.62,33.25,7.82,47.26,12.13,14.24,4.55,26.49,10,36.52,16.45a72.93,72.93,0,0,1,24.16,25.09c5.72,10,8.64,22.63,8.64,37.1A75.09,75.09,0,0,1,368,359Z"/></svg>
                                </a>
                            </li>
                            <li>
                                <a class="w-11 h-11 rounded flex items-center justify-center text-lg bg-gray-100 text-black hover:text-white hover:bg-blue-500 transition-all" href="javascript:void(0)">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 512 512"><path d="M496,109.5a201.8,201.8,0,0,1-56.55,15.3,97.51,97.51,0,0,0,43.33-53.6,197.74,197.74,0,0,1-62.56,23.5A99.14,99.14,0,0,0,348.31,64c-54.42,0-98.46,43.4-98.46,96.9a93.21,93.21,0,0,0,2.54,22.1,280.7,280.7,0,0,1-203-101.3A95.69,95.69,0,0,0,36,130.4C36,164,53.53,193.7,80,211.1A97.5,97.5,0,0,1,35.22,199v1.2c0,47,34,86.1,79,95a100.76,100.76,0,0,1-25.94,3.4,94.38,94.38,0,0,1-18.51-1.8c12.51,38.5,48.92,66.5,92.05,67.3A199.59,199.59,0,0,1,39.5,405.6,203,203,0,0,1,16,404.2,278.68,278.68,0,0,0,166.74,448c181.36,0,280.44-147.7,280.44-275.8,0-4.2-.11-8.4-.31-12.5A198.48,198.48,0,0,0,496,109.5Z"/></svg>
                                </a>
                            </li>
                            <li>
                                <a class="w-11 h-11 rounded flex items-center justify-center text-lg bg-gray-100 text-black hover:text-white hover:bg-blue-500 transition-all" href="javascript:void(0)">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 512 512"><path d="M414.73,97.1A222.14,222.14,0,0,0,256.94,32C134,32,33.92,131.58,33.87,254A220.61,220.61,0,0,0,63.65,365L32,480l118.25-30.87a223.63,223.63,0,0,0,106.6,27h.09c122.93,0,223-99.59,223.06-222A220.18,220.18,0,0,0,414.73,97.1ZM256.94,438.66h-.08a185.75,185.75,0,0,1-94.36-25.72l-6.77-4L85.56,427.26l18.73-68.09-4.41-7A183.46,183.46,0,0,1,71.53,254c0-101.73,83.21-184.5,185.48-184.5A185,185,0,0,1,442.34,254.14C442.3,355.88,359.13,438.66,256.94,438.66ZM358.63,300.47c-5.57-2.78-33-16.2-38.08-18.05s-8.83-2.78-12.54,2.78-14.4,18-17.65,21.75-6.5,4.16-12.07,1.38-23.54-8.63-44.83-27.53c-16.57-14.71-27.75-32.87-31-38.42s-.35-8.56,2.44-11.32c2.51-2.49,5.57-6.48,8.36-9.72s3.72-5.56,5.57-9.26.93-6.94-.46-9.71-12.54-30.08-17.18-41.19c-4.53-10.82-9.12-9.35-12.54-9.52-3.25-.16-7-.2-10.69-.2a20.53,20.53,0,0,0-14.86,6.94c-5.11,5.56-19.51,19-19.51,46.28s20,53.68,22.76,57.38,39.3,59.73,95.21,83.76a323.11,323.11,0,0,0,31.78,11.68c13.35,4.22,25.5,3.63,35.1,2.2,10.71-1.59,33-13.42,37.63-26.38s4.64-24.06,3.25-26.37S364.21,303.24,358.63,300.47Z" style="fill-rule:evenodd"/></svg>
                                </a>
                            </li>
                        </ul>

                        <p class="text-muted mt-8"> © <script>
                                document.write(new Date().getFullYear())
                            </script>2022 Buckzo. By MyraStudio</p>

                    </div>
                </div>
            </div>
            <!-- end row -->

        </div>
    </footer>

    <!-- Shuffle JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Shuffle/6.0.0/shuffle.min.js"></script>

    <!-- App js -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>