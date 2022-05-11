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
    @include('misc.nav')

    <!-- Section Start -->
    <section class="section py-14" id="home">
        <div class="container m-auto">
            <div class="lg:flex justify-center">
                <div class="lg:w-2/3 mx-2">
                    <div class="text-center">
                        <h1 class="text-4xl font-semibold leading-[50px] tracking-wide text-transparent bg-clip-text bg-gradient-to-l from-pink-400 to-blue-600 mb-10">
                            Find your next travel spot to visit in the Kingdom of Saudi Arabia
                        </h1>
                        <p class="text-base text-gray-400">Our platfomr helps yuo to plan and book your trips and accomodation through our indepth packages &amp; detailed location information. So that you can enjoy your trips the most.</p>
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
                            <li data-group="android"><a class="inline-block cursor-pointer rounded-md py-3 px-5 focus:bg-blue-200 focus:text-blue-700" href="javascript:void(0)">Riyadh</a></li>
                            <li data-group="mockup"><a class="inline-block cursor-pointer rounded-md py-3 px-5 focus:bg-blue-200 focus:text-blue-700" href="javascript:void(0)">Jedddah</a></li>
                            <li data-group="personal"><a class="inline-block cursor-pointer rounded-md py-3 px-5 focus:bg-blue-200 focus:text-blue-700" href="javascript:void(0)">Dammam</a></li>
                            <li data-group="design"><a class="inline-block cursor-pointer rounded-md py-3 px-5 focus:bg-blue-200 focus:text-blue-700" href="javascript:void(0)">Madinah</a></li>
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
                        <img src="https://scth.scene7.com/is/image/scth/1920x1080-56:crop-375x280?defaultImage=1920x1080-56&wid=375&hei=280" class="rounded transition-all duration-500 group-hover:scale-105" alt="work-image">
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

    @include('misc.footer')

    <!-- Shuffle JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Shuffle/6.0.0/shuffle.min.js"></script>

    <!-- App js -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>