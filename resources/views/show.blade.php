<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Laravel</title>

</head>

<body class="bg-[url('/assets/bg-pattern.png')] bg-no-repeat" cz-shortcut-listen="true">
    <!-- Navbar Start -->
    @include('misc.nav')


    <section class="section py-10">
        <div class="container m-auto">
            <div class="flex">
                <div class="lg:w-9/12 flex">
                    <div>
                        <h4 class="text-4xl font-semibold leading-10 tracking-wide text-transparent bg-clip-text bg-gradient-to-l from-pink-400 to-blue-600 underline decoration-blue-400 underline-offset-4 mb-10">
                            News and Stories
                        </h4>

                        <h4 class="text-base font-light text-gray-400">
                            Aenean sollicitudin, lorem quis bibendum auctor,
                            nisi elit consequat ipsum, nec <br>
                            sagittis sem nibh id elit. Proin gravida nibh vel velit auctor Aenean sollicitudin,
                            adipisicing elit sed lorem
                            quis bibendum auctor.</h4>
                    </div>
                </div>
            </div>

            <div class="grid lg:grid-cols-3 gap-6 my-6">
                <div class="col-span-2">
                    <div class="prose max-w-full">
                        <!-- Post-->
                        <article>
                            <div>
                                <a href="#"><img src="https://myrathemes.com/buckzo/layouts/assets/images/blog/blog-1.jpg" alt="" class="rounded"></a>
                            </div>

                            <div>
                                <h2><a href="#">Beautiful Day With Friends In
                                        Paris</a></h2>
                                <div class="flex space-x-6">
                                    <div><i class="icofont-ui-calendar"></i> Mar 03, 2020</div>
                                    <div><i class="icofont-tags"></i> <a href="#">Branding</a>, <a href="#">Design</a>
                                    </div>
                                    <div><i class="icofont-comment"></i> <a href="#">3 Comments</a></div>
                                </div>
                            </div>

                            <div>
                                <p class="my-6">Whether an identity or campaign, we make your brand visible, relevant and effective
                                    by placing
                                    the
                                    digital at the center of its ecosystem, without underestimating the power of
                                    traditional media.
                                    Whether an identity or campaign, we make your brand visible.</p>
                            </div>

                            <p class="my-6 font-bold hover:underline">
                                <a href="#">Read More <i class="mdi mdi-arrow-right"></i></a>
                            </p>

                        </article>
                        <!-- Post end-->

                        <!-- Post-->
                        <article>

                            <div>
                                <a href="#"><img src="https://myrathemes.com/buckzo/layouts/assets/images/blog/blog-3.jpg" alt="" class="rounded"></a>
                            </div>

                            <div>
                                <h2><a href="#">Nature valley with cooling
                                        environment</a></h2>
                                <div class="flex space-x-6">
                                    <div><i class="icofont-ui-calendar"></i> Mar 03, 2020</div>
                                    <div><i class="icofont-tags"></i> <a href="#">Branding</a>, <a href="#">Design</a>
                                    </div>
                                    <div><i class="icofont-comment"></i> <a href="#">3 Comments</a></div>
                                </div>
                            </div>

                            <div>
                                <p class="my-6">Whether an identity or campaign, we make your brand visible, relevant and effective
                                    by placing
                                    the
                                    digital at the center of its ecosystem, without underestimating the power of
                                    traditional media.
                                    Whether an identity or campaign, we make your brand visible.</p>
                            </div>

                            <p class="my-6 font-bold hover:underline">
                                <a href="#">Read More <i class="mdi mdi-arrow-right"></i></a>
                            </p>

                        </article>
                        <!-- Post end-->

                        <!-- Post-->
                        <article>
                            <div>
                                <a href="#"><img src="https://myrathemes.com/buckzo/layouts/assets/images/blog/blog-2.jpg" alt="" class="rounded"></a>
                            </div>

                            <div>
                                <h2 class="font-semibold text-2xl leading-10 mt-8 mb-4">
                                    <a href="#">Elegant, Simple &amp; Minimalist Blog Made With Love</a>
                                </h2>
                                <div class="flex space-x-6">
                                    <div class="flex space-x-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        <span>Mar 05, 2020</span>
                                    </div>
                                    <div><i class="icofont-tags"></i> <a href="#">Branding</a>, <a href="#">Design</a>
                                    </div>
                                    <div><i class="icofont-comment"></i> <a href="#">3 Comments</a></div>
                                </div>
                            </div>

                            <div>
                                <p class="my-6">Whether an identity or campaign, we make your brand visible, relevant and effective
                                    by placing
                                    the
                                    digital at the center of its ecosystem, without underestimating the power of
                                    traditional media.
                                    Whether an identity or campaign, we make your brand visible.</p>
                            </div>

                            <p class="my-6 font-bold hover:underline">
                                <a href="#">Read More <i class="mdi mdi-arrow-right"></i></a>
                            </p>

                        </article>
                        <!-- Post end-->



                        <!-- Post-->
                        <article>

                            <div>
                                <a href="#"><img src="https://myrathemes.com/buckzo/layouts/assets/images/blog/blog-4.jpg" alt="" class="rounded"></a>
                            </div>

                            <div>
                                <h2><a href="#">15 Best Healthy and Easy Salad
                                        Recipes</a></h2>
                                <div class="flex space-x-6">
                                    <div><i class="icofont-ui-calendar"></i> Mar 03, 2020</div>
                                    <div><i class="icofont-tags"></i> <a href="#">Branding</a>, <a href="#">Design</a>
                                    </div>
                                    <div><i class="icofont-comment"></i> <a href="#">3 Comments</a></div>
                                </div>
                            </div>

                            <div>
                                <p class="my-6">Whether an identity or campaign, we make your brand visible, relevant and effective
                                    by placing
                                    the
                                    digital at the center of its ecosystem, without underestimating the power of
                                    traditional media.
                                    Whether an identity or campaign, we make your brand visible.</p>
                            </div>

                            <p class="my-6 font-bold hover:underline">
                                <a href="#">Read More <i class="mdi mdi-arrow-right"></i></a>
                            </p>

                        </article>
                        <!-- Post end-->



                        <!-- Post-->
                        <article>

                            <div>
                                <a href="#"><img src="https://myrathemes.com/buckzo/layouts/assets/images/blog/blog-5.jpg" alt="" class="rounded"></a>
                            </div>

                            <div>
                                <h2><a href="#">Easy Homemade Candy Recipes and
                                        Ideas</a></h2>
                                <div class="flex space-x-6">
                                    <div><i class="icofont-ui-calendar"></i> Mar 03, 2020</div>
                                    <div><i class="icofont-tags"></i> <a href="#">Branding</a>, <a href="#">Design</a>
                                    </div>
                                    <div><i class="icofont-comment"></i> <a href="#">3 Comments</a></div>
                                </div>
                            </div>

                            <div>
                                <p class="my-6">Whether an identity or campaign, we make your brand visible, relevant and effective
                                    by placing
                                    the
                                    digital at the center of its ecosystem, without underestimating the power of
                                    traditional media.
                                    Whether an identity or campaign, we make your brand visible.</p>
                            </div>

                            <p class="my-6 font-bold hover:underline">
                                <a href="#">Read More <i class="mdi mdi-arrow-right"></i></a>
                            </p>

                        </article>
                        <!-- Post end-->
                    </div>

                    <!-- Pagination-->
                    <div class="flex mt-6">
                        <a href="#" class="flex items-centzer justify-center px-4 py-2 mx-1 text-gray-500 capitalize bg-white border rounded cursor-not-allowed">
                            <i class="icofont-rounded-left"></i>
                        </a>

                        <a href="#" class="hidden px-4 py-2 mx-1 transition-colors duration-200 transform border rounded sm:inline bg-gray-600 text-white">
                            1
                        </a>

                        <a href="#" class="hidden px-4 py-2 mx-1 text-gray-700 transition-colors duration-200 transform bg-white border rounded sm:inline hover:bg-gray-600 hover:text-white">
                            2
                        </a>

                        <a href="#" class="hidden px-4 py-2 mx-1 text-gray-700 transition-colors duration-200 transform bg-white border rounded sm:inline hover:bg-gray-600 hover:text-white">
                            3
                        </a>

                        <a href="#" class="hidden px-4 py-2 mx-1 text-gray-700 transition-colors duration-200 transform bg-white border rounded sm:inline hover:bg-gray-600 hover:text-white">
                            4
                        </a>

                        <a href="#" class="hidden px-4 py-2 mx-1 text-gray-700 transition-colors duration-200 transform bg-white border rounded sm:inline hover:bg-gray-600 hover:text-white">
                            5
                        </a>

                        <a href="#" class="flex items-center justify-center px-4 py-2 mx-1 text-gray-700 transition-colors duration-200 transform bg-white border rounded hover:bg-gray-600 hover:text-white">
                            <i class="icofont-rounded-right"></i>
                        </a>
                    </div>
                    <!-- Pagination end-->

                </div>

                <div class="lg:ml-8 ml-0 mt-8 col-span-1">

                    <!-- Search widget-->
                    <div class="flex bg-transparent border items-center pr-4 mb-10">
                        <!-- search input -->
                        <input type="search" class="border-0 focus:border-0 focus:ring-0 text-black bg-transparent w-full" placeholder="Search">
                        <button type="submit" class="text-xl text-black">
                            <span class="icofont-search-1"></span>
                        </button>
                    </div>

                    <!-- Categories widget-->
                    <aside class="mb-10">
                        <div class="text-base font-medium">Categories</div>
                        <div class="relative flex items-center my-5">
                            <div class="h-px bg-gray-200 w-full absolute rounded-l-full"></div>
                            <div class="h-px bg-blue-700 w-8 absolute rounded-full"></div>
                        </div>
                        <div class="space-y-5">
                            <div><a href="#">Journey</a> (40)</div>
                            <div><a href="#">Photography</a> (08)</div>
                            <div><a href="#">Lifestyle</a> (11)</div>
                            <div><a href="#">Food &amp; Drinks</a> (21)</div>
                        </div>
                    </aside>

                    <!-- Recent entries widget-->
                    <aside class="mb-10">
                        <div class="text-base font-medium">Popular Posts</div>
                        <div class="relative flex items-center my-5">
                            <div class="h-px bg-gray-200 w-full absolute rounded-l-full"></div>
                            <div class="h-px bg-blue-700 w-8 absolute rounded-full"></div>
                        </div>
                        <div>
                            <div class="flex border-b mb-4 pb-4">
                                <div class="w-16">
                                    <a href="#"><img src="assets/images/works/img10.jpg" alt=""></a>
                                </div>
                                <div class="mt-0.5 ml-4">
                                    <a href="#">Beautiful Day With Friends..</a>
                                    <span>Feb 15, 2020</span>
                                </div>
                            </div>

                            <div class="flex border-b mb-4 pb-4">
                                <div class="w-16">
                                    <a href="#"><img src="assets/images/works/img2.jpg" alt=""></a>
                                </div>
                                <div class="mt-0.5 ml-4">
                                    <a href="#">Nature valley with cooling..</a>
                                    <span>Feb 10, 2020</span>
                                </div>
                            </div>

                            <div class="flex">
                                <div class="w-16">
                                    <a href="#"><img src="assets/images/works/img3.jpg" alt=""></a>
                                </div>
                                <div class="mt-0.5 ml-4">
                                    <a href="#">15 Best Healthy and Easy Salad..</a>
                                    <span>Feb 8, 2020</span>
                                </div>
                            </div>
                        </div>
                    </aside>

                    <!-- Text widget-->
                    <aside class="mb-10">
                        <div class="text-base font-medium">Text Widget</div>
                        <div class="relative flex items-center my-5">
                            <div class="h-px bg-gray-200 w-full absolute rounded-l-full"></div>
                            <div class="h-px bg-blue-700 w-8 absolute rounded-full"></div>
                        </div>

                        <p class="text-muted text-widget-des">Exercitation photo booth stumptown tote bag Banksy,
                            elit small
                            batch
                            freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips
                            proident chillwave
                            deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade
                            swag. </p>

                    </aside>

                    <!-- Archives widget-->
                    <aside class="mb-10">
                        <div class="text-base font-medium">Archives</div>
                        <div class="relative flex items-center my-5">
                            <div class="h-px bg-gray-200 w-full absolute rounded-l-full"></div>
                            <div class="h-px bg-blue-700 w-8 absolute rounded-full"></div>
                        </div>

                        <div class="space-y-5">
                            <div><a href="#">March 2020</a> (40)</div>
                            <div><a href="#">April 2020</a> (08)</div>
                            <div><a href="#">May 2020</a> (11)</div>
                            <div><a href="#">Feb 2020</a> (21)</div>
                        </div>

                    </aside>

                    <!-- Tags widget-->
                    <aside class="mb-10">
                        <div class="text-base font-medium">Tags</div>
                        <div class="relative flex items-center my-5">
                            <div class="h-px bg-gray-200 w-full absolute rounded-l-full"></div>
                            <div class="h-px bg-blue-700 w-8 absolute rounded-full"></div>
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <a class="px-2 py-1.5 bg-gray-100 text-[10px] hover:bg-blue-500 hover:text-white uppercase rounded-sm" href="#">logo</a>
                            <a class="px-2 py-1.5 bg-gray-100 text-[10px] hover:bg-blue-500 hover:text-white uppercase rounded-sm" href="#">business</a>
                            <a class="px-2 py-1.5 bg-gray-100 text-[10px] hover:bg-blue-500 hover:text-white uppercase rounded-sm" href="#">corporate</a>
                            <a class="px-2 py-1.5 bg-gray-100 text-[10px] hover:bg-blue-500 hover:text-white uppercase rounded-sm" href="#">e-commerce</a>
                            <a class="px-2 py-1.5 bg-gray-100 text-[10px] hover:bg-blue-500 hover:text-white uppercase rounded-sm" href="#">agency</a>
                            <a class="px-2 py-1.5 bg-gray-100 text-[10px] hover:bg-blue-500 hover:text-white uppercase rounded-sm" href="#">responsive</a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    @include('misc.footer')

    <!-- App js -->
    <script src="js/app.js"></script>
</body>

</html>