<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    <section id="navbar" class="font-poppins">
        <!-- ========== HEADER ========== -->
        <header class="flex flex-wrap lg:justify-start lg:flex-nowrap z-50 w-full py-7">
            <nav class="relative max-w-7xl w-full flex flex-wrap lg:grid lg:grid-cols-12 basis-full items-center px-4 md:px-6 lg:px-8 mx-auto">
                <div class="lg:col-span-2 flex items-center">
                    <!-- Logo -->
                    <a class="flex-none rounded-xl text-xl inline-block font-semibold focus:outline-hidden focus:opacity-80" href="../templates/creative-agency/index.html" aria-label="Preline">
                        <img src="{{ asset('storage/logo AWD.png') }}" alt="Logo" class="w-24" pb-4 />
                    </a>
                    <!-- End Logo -->

                    <div class="ms-1 sm:ms-2">

                    </div>
                </div>

                <!-- Button Group -->
                <div class="flex items-center gap-x-1 lg:gap-x-2 ms-auto py-1 lg:ps-6 lg:order-3 lg:col-span-2">
                    <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium text-nowrap rounded-xl border border-transparent bg-orange-theme text-white hover:bg-orange-600 focus:outline-hidden focus:bg-orange-600 transition disabled:opacity-50 disabled:pointer-events-none">
                        Faire un dévis
                    </button>

                    <div class="lg:hidden">
                        <button type="button" class="hs-collapse-toggle size-9.5 flex justify-center items-center text-sm font-semibold rounded-xl border border-gray-200 text-black hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" id="hs-pro-hcail-collapse" aria-expanded="false" aria-controls="hs-pro-hcail" aria-label="Toggle navigation" data-hs-collapse="#hs-pro-hcail">
                            <svg class="hs-collapse-open:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="3" x2="21" y1="6" y2="6" />
                                <line x1="3" x2="21" y1="12" y2="12" />
                                <line x1="3" x2="21" y1="18" y2="18" />
                            </svg>
                            <svg class="hs-collapse-open:block hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 6 6 18" />
                                <path d="m6 6 12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <!-- End Button Group -->

                <!-- Collapse -->
                <div id="hs-pro-hcail" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow lg:block lg:w-auto lg:basis-auto lg:order-2 lg:col-span-8" aria-labelledby="hs-pro-hcail-collapse">
                    <div class="flex flex-col gap-y-4 gap-x-0 mt-5 lg:flex-row lg:justify-center lg:items-center lg:gap-y-0 lg:gap-x-7 lg:mt-0">
                        <div>
                            <a class="relative inline-block text-black focus:outline-hidden before:absolute before:bottom-0.5 before:start-0 before:-z-1 before:w-full before:h-1 before:bg-orange-theme dark:text-white" href="#" aria-current="page">Acceuil</a>
                        </div>
                        <div>
                            <a class="inline-block text-black hover:text-gray-600 focus:outline-hidden focus:text-gray-600 dark:text-white dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="#">À propos</a>
                        </div>
                        <div>
                            <a class="inline-block text-black hover:text-gray-600 focus:outline-hidden focus:text-gray-600 dark:text-white dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="#">Nos services</a>
                        </div>
                        <div>
                            <a class="inline-block text-black hover:text-gray-600 focus:outline-hidden focus:text-gray-600 dark:text-white dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="#">Solutions par pays</a>
                        </div>
                        <div>
                            <a class="inline-block text-black hover:text-gray-600 focus:outline-hidden focus:text-gray-600 dark:text-white dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="#">Témoignages</a>
                        </div>
                    </div>
                </div>
                <!-- End Collapse -->
            </nav>
        </header>
        <!-- ========== END HEADER ========== -->
    </section>

     <section id="hero" class="font-poppins">
        <!-- Hero -->
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Grid -->
            <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center">
                <div>
                    <h1 class="block text-3xl font-bold text-gray-800 sm:text-4xl lg:text-6xl lg:leading-tight dark:text-white">Start your journey with <span class="text-blue-600">Preline</span></h1>
                    <p class="mt-3 text-lg text-gray-800 dark:text-neutral-400">Hand-picked professionals and expertly crafted components, designed for any kind of entrepreneur.</p>

                    <!-- Buttons -->
                    <div class="mt-7 grid gap-3 w-full sm:inline-flex">
                        <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="#">
                            Get started
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </a>
                        <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                            Contact sales team
                        </a>
                    </div>
                    <!-- End Buttons -->

                    <!-- Review -->
                    <div class="mt-6 lg:mt-10 grid grid-cols-2 gap-x-5">
                        <!-- Review -->
                        <div class="py-5">
                            <div class="flex gap-x-1">
                                <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z" fill="currentColor" />
                                </svg>
                                <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z" fill="currentColor" />
                                </svg>
                                <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z" fill="currentColor" />
                                </svg>
                                <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z" fill="currentColor" />
                                </svg>
                                <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z" fill="currentColor" />
                                </svg>
                            </div>

                            <p class="mt-3 text-sm text-gray-800 dark:text-neutral-200">
                                <span class="font-bold">4.6</span> /5 - from 12k reviews
                            </p>

                            <div class="mt-5">
                                <!-- Star -->
                                <svg class="h-auto w-16 text-gray-800 dark:text-white" width="80" height="27" viewBox="0 0 80 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.558 9.74046H11.576V12.3752H17.9632C17.6438 16.0878 14.5301 17.7245 11.6159 17.7245C7.86341 17.7245 4.58995 14.7704 4.58995 10.6586C4.58995 6.62669 7.70373 3.51291 11.6159 3.51291C14.6498 3.51291 16.4063 5.42908 16.4063 5.42908L18.2426 3.51291C18.2426 3.51291 15.8474 0.878184 11.4961 0.878184C5.94724 0.838264 1.67578 5.50892 1.67578 10.5788C1.67578 15.5289 5.70772 20.3592 11.6558 20.3592C16.8854 20.3592 20.7177 16.8063 20.7177 11.4969C20.7177 10.3792 20.558 9.74046 20.558 9.74046Z" fill="currentColor" />
                                    <path d="M27.8621 7.78442C24.1894 7.78442 21.5547 10.6587 21.5547 14.012C21.5547 17.4451 24.1096 20.3593 27.9419 20.3593C31.415 20.3593 34.2094 17.7645 34.2094 14.0918C34.1695 9.94011 30.896 7.78442 27.8621 7.78442ZM27.902 10.2994C29.6984 10.2994 31.415 11.7764 31.415 14.0918C31.415 16.4072 29.7383 17.8842 27.902 17.8842C25.906 17.8842 24.3491 16.2874 24.3491 14.0519C24.3092 11.8962 25.8661 10.2994 27.902 10.2994Z" fill="currentColor" />
                                    <path d="M41.5964 7.78442C37.9238 7.78442 35.2891 10.6587 35.2891 14.012C35.2891 17.4451 37.844 20.3593 41.6763 20.3593C45.1493 20.3593 47.9438 17.7645 47.9438 14.0918C47.9038 9.94011 44.6304 7.78442 41.5964 7.78442ZM41.6364 10.2994C43.4328 10.2994 45.1493 11.7764 45.1493 14.0918C45.1493 16.4072 43.4727 17.8842 41.6364 17.8842C39.6404 17.8842 38.0835 16.2874 38.0835 14.0519C38.0436 11.8962 39.6004 10.2994 41.6364 10.2994Z" fill="currentColor" />
                                    <path d="M55.0475 7.82434C51.6543 7.82434 49.0195 10.7784 49.0195 14.0918C49.0195 17.8443 52.0934 20.3992 54.9676 20.3992C56.764 20.3992 57.6822 19.7205 58.4407 18.8822V20.1198C58.4407 22.2754 57.1233 23.5928 55.1273 23.5928C53.2111 23.5928 52.2531 22.1557 51.8938 21.3573L49.4587 22.3553C50.297 24.1517 52.0135 26.0279 55.0874 26.0279C58.4407 26.0279 60.9956 23.9122 60.9956 19.481V8.18362H58.3608V9.26147C57.6423 8.38322 56.5245 7.82434 55.0475 7.82434ZM55.287 10.2994C56.9237 10.2994 58.6403 11.7365 58.6403 14.1317C58.6403 16.6068 56.9636 17.9241 55.2471 17.9241C53.4507 17.9241 51.774 16.4471 51.774 14.1716C51.8139 11.6966 53.5305 10.2994 55.287 10.2994Z" fill="currentColor" />
                                    <path d="M72.8136 7.78442C69.62 7.78442 66.9453 10.2994 66.9453 14.0519C66.9453 18.004 69.9393 20.3593 73.093 20.3593C75.7278 20.3593 77.4044 18.8822 78.3625 17.6048L76.1669 16.1277C75.608 17.006 74.6499 17.8443 73.093 17.8443C71.3365 17.8443 70.5381 16.8862 70.0192 15.9281L78.4423 12.4152L78.0032 11.3772C77.1649 9.46107 75.2886 7.78442 72.8136 7.78442ZM72.8934 10.2196C74.0511 10.2196 74.8495 10.8184 75.2487 11.5768L69.6599 13.9321C69.3405 12.0958 71.097 10.2196 72.8934 10.2196Z" fill="currentColor" />
                                    <path d="M62.9531 19.9999H65.7076V1.47693H62.9531V19.9999Z" fill="currentColor" />
                                </svg>
                                <!-- End Star -->
                            </div>
                        </div>
                        <!-- End Review -->

                        <!-- Review -->
                        <div class="py-5">
                            <div class="flex gap-x-1">
                                <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z" fill="currentColor" />
                                </svg>
                                <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z" fill="currentColor" />
                                </svg>
                                <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z" fill="currentColor" />
                                </svg>
                                <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z" fill="currentColor" />
                                </svg>
                                <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M49.6867 20.0305C50.2889 19.3946 49.9878 18.1228 49.0846 18.1228L33.7306 15.8972C33.4296 15.8972 33.1285 15.8972 32.8275 15.2613L25.9032 0.317944C25.6021 0 25.3011 0 25 0V42.6046C25 42.6046 25.3011 42.6046 25.6021 42.6046L39.7518 49.9173C40.3539 50.2352 41.5581 49.5994 41.2571 48.6455L38.5476 32.4303C38.5476 32.1124 38.5476 31.7944 38.8486 31.4765L49.6867 20.0305Z" fill="transparent" />
                                    <path d="M0.313299 20.0305C-0.288914 19.3946 0.0122427 18.1228 0.915411 18.1228L16.2694 15.8972C16.5704 15.8972 16.8715 15.8972 17.1725 15.2613L24.0968 0.317944C24.3979 0 24.6989 0 25 0V42.6046C25 42.6046 24.6989 42.6046 24.3979 42.6046L10.2482 49.9173C9.64609 50.2352 8.44187 49.5994 8.74292 48.6455L11.4524 32.4303C11.4524 32.1124 11.4524 31.7944 11.1514 31.4765L0.313299 20.0305Z" fill="currentColor" />
                                </svg>
                            </div>

                            <p class="mt-3 text-sm text-gray-800 dark:text-neutral-200">
                                <span class="font-bold">4.8</span> /5 - from 5k reviews
                            </p>

                            <div class="mt-5">
                                <!-- Star -->
                                <svg class="h-auto w-16 text-gray-800 dark:text-white" width="110" height="28" viewBox="0 0 110 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M66.6601 8.35107C64.8995 8.35107 63.5167 8.72875 62.1331 9.48265C62.1331 5.4582 62.1331 1.81143 62.2594 0.554199L53.8321 2.06273V2.81736L54.7124 2.94301C55.8433 3.19431 56.2224 3.82257 56.4715 5.33255C56.725 8.35107 56.5979 24.4496 56.4715 27.0912C58.7354 27.5945 61.1257 27.9722 63.5159 27.9722C70.1819 27.9722 74.2064 23.8213 74.2064 17.281C74.2064 12.1249 70.9366 8.35107 66.6601 8.35107ZM63.7672 26.5878C63.2639 26.5878 62.6342 26.5878 62.258 26.4629C62.1316 24.7023 62.0067 17.281 62.1316 10.7413C62.8862 10.4893 63.3888 10.3637 64.0185 10.3637C66.7872 10.3637 68.2965 13.6335 68.2965 17.6572C68.2957 22.6898 66.4088 26.5878 63.7672 26.5878ZM22.1363 1.0568H0V2.18838L1.25796 2.31403C2.89214 2.56533 3.52184 3.57127 3.77242 5.9608C4.15082 10.4886 4.02445 18.6646 3.77242 22.5619C3.52112 24.9522 2.89287 26.0845 1.25796 26.2087L0 26.4615V27.4674H14.2123V26.4615L12.703 26.2087C11.0681 26.0838 10.4392 24.9522 10.1879 22.5619C10.0615 20.9263 9.93583 18.2847 9.93583 15.0156L12.9543 15.1413C14.8413 15.1413 15.7208 16.6505 16.0985 18.7881H17.2308V9.86106H16.0985C15.7201 11.9993 14.8413 13.5078 12.9543 13.5078L9.93655 13.6342C9.93655 9.35773 10.0622 5.33328 10.1886 2.94374H14.59C17.9869 2.94374 19.7475 5.08125 21.0047 8.85513L22.2626 8.47745L22.1363 1.0568Z" fill="currentColor" />
                                    <path d="M29.3053 8.09998C35.5944 8.09998 38.7385 12.3764 38.7385 18.0358C38.7385 23.4439 35.2167 27.9731 28.9276 27.9731C22.6393 27.9731 19.4951 23.6959 19.4951 18.0358C19.4951 12.6277 23.0162 8.09998 29.3053 8.09998ZM28.9276 9.35793C26.1604 9.35793 25.4058 13.1311 25.4058 18.0358C25.4058 22.8149 26.6637 26.7137 29.1796 26.7137C32.0703 26.7137 32.8264 22.9405 32.8264 18.0358C32.8264 13.2567 31.5699 9.35793 28.9276 9.35793ZM75.8403 18.1622C75.8403 13.0054 79.1101 8.09998 85.5248 8.09998C90.8057 8.09998 93.3224 11.9995 93.3224 17.1555H81.6253C81.4989 21.8089 83.7628 25.2051 88.2913 25.2051C90.3038 25.2051 91.3098 24.7033 92.5685 23.8223L93.0703 24.4505C91.8124 26.2111 89.0459 27.9731 85.5248 27.9731C79.8647 27.9724 75.8403 23.9479 75.8403 18.1622ZM81.6253 15.7726L87.5366 15.6463C87.5366 13.1311 87.159 9.35793 85.0214 9.35793C82.8839 9.35793 81.7502 12.8791 81.6253 15.7726ZM108.291 9.10663C106.782 8.47693 104.77 8.09998 102.506 8.09998C97.8538 8.09998 94.9594 10.8665 94.9594 14.137C94.9594 17.4075 97.0955 18.7904 100.118 19.7971C103.261 20.9279 104.142 21.8089 104.142 23.3182C104.142 24.8275 103.01 26.2103 100.997 26.2103C98.6084 26.2103 96.8464 24.8275 95.4635 21.0536L94.5825 21.3063L94.7089 26.84C96.2181 27.4683 98.9846 27.9724 101.375 27.9724C106.28 27.9724 109.425 25.4557 109.425 21.5576C109.425 18.9161 108.041 17.4075 104.771 16.1489C101.249 14.766 99.992 13.8857 99.992 12.2501C99.992 10.6152 101.126 9.48286 102.635 9.48286C104.897 9.48286 106.407 10.8665 107.54 14.2627L108.42 14.0114L108.291 9.10663ZM55.0883 8.6033C52.9508 7.3468 49.1769 7.97433 47.1651 12.5028L47.29 8.1007L38.8642 9.73561V10.4902L39.7444 10.6159C40.8775 10.7423 41.3794 11.3705 41.5057 13.0062C41.757 16.0247 41.6314 21.3078 41.5057 23.9486C41.3794 25.4564 40.8775 26.2111 39.7444 26.3374L38.8642 26.4638V27.4697H50.5606V26.4638L49.0513 26.3374C47.7941 26.2111 47.4164 25.4564 47.29 23.9486C47.0387 21.5584 47.0387 16.7793 47.1651 13.7608C47.7933 12.8798 50.5606 12.1259 53.0757 13.7608L55.0883 8.6033Z" fill="currentColor" />
                                </svg>
                                <!-- End Star -->
                            </div>
                        </div>
                        <!-- End Review -->
                    </div>
                    <!-- End Review -->
                </div>
                <!-- End Col -->

                <div class="relative ms-4">
                    <!-- src="{{ asset('storage/imagehero.png) }}" -->
                    <img class="w-full rounded-md"   alt="Hero Image">
                    <div class="absolute inset-0 -z-1 bg-linear-to-tr from-gray-200 via-white/0 to-white/0 size-full rounded-md mt-4 -mb-4 me-4 -ms-4 lg:mt-6 lg:-mb-6 lg:me-6 lg:-ms-6 dark:from-neutral-800 dark:via-neutral-900/0 dark:to-neutral-900/0"></div>

                    <!-- SVG-->
                    <div class="absolute bottom-0 start-0">
                        <svg class="w-2/3 ms-auto h-auto text-white dark:text-neutral-900" width="630" height="451" viewBox="0 0 630 451" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="531" y="352" width="99" height="99" fill="currentColor" />
                            <rect x="140" y="352" width="106" height="99" fill="currentColor" />
                            <rect x="482" y="402" width="64" height="49" fill="currentColor" />
                            <rect x="433" y="402" width="63" height="49" fill="currentColor" />
                            <rect x="384" y="352" width="49" height="50" fill="currentColor" />
                            <rect x="531" y="328" width="50" height="50" fill="currentColor" />
                            <rect x="99" y="303" width="49" height="58" fill="currentColor" />
                            <rect x="99" y="352" width="49" height="50" fill="currentColor" />
                            <rect x="99" y="392" width="49" height="59" fill="currentColor" />
                            <rect x="44" y="402" width="66" height="49" fill="currentColor" />
                            <rect x="234" y="402" width="62" height="49" fill="currentColor" />
                            <rect x="334" y="303" width="50" height="49" fill="currentColor" />
                            <rect x="581" width="49" height="49" fill="currentColor" />
                            <rect x="581" width="49" height="64" fill="currentColor" />
                            <rect x="482" y="123" width="49" height="49" fill="currentColor" />
                            <rect x="507" y="124" width="49" height="24" fill="currentColor" />
                            <rect x="531" y="49" width="99" height="99" fill="currentColor" />
                        </svg>
                    </div>
                    <!-- End SVG-->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->
        </div>
        <!-- End Hero -->
    </section>


    <section id="feature" class="font-poppins ">

        <!-- Icon Blocks -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <!-- Title -->
            <div class="flex items-center max-w-2xl mx-auto mb-10 lg:mb-14 px-4">
                <!-- Ligne gauche (cachée sur mobile) -->
                <span class="hidden md:block flex-grow h-px bg-blue-theme"></span>
                <!-- Titre centré -->
                <h2 class="text-3xl font-bold   md:text-4xl md:leading-tight text-orange-theme dark:text-white px-2">
                    Features
                </h2>
                <!-- Ligne droite (cachée sur mobile) -->
                <span class="hidden md:block flex-grow h-px bg-blue-theme"></span>
            </div>

            <!-- End Title -->

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 items-center gap-12">
                <!-- Icon Block -->
                <div class="text-center">
                    <div class="flex justify-center items-center size-12 bg-blue-50 border border-orange-200 rounded-full mx-auto dark:bg-neutral-800 dark:border-neutral-700">
                        <svg class="shrink-0 size-5 text-orange-theme dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="10" height="14" x="3" y="8" rx="2" />
                            <path d="M5 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2h-2.4" />
                            <path d="M8 18h.01" />
                        </svg>
                    </div>
                    <div class="mt-3">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Développement web et mobile</h3>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">Nulla facilisi. Phasellus sed vestibulum augue, ut rhoncus leo.</p>
                    </div>
                </div>
                <!-- End Icon Block -->
                <!-- Icon Block -->
                <div class="text-center">
                    <div class="flex justify-center items-center size-12 bg-blue-50 border border-orange-200 rounded-full mx-auto dark:bg-neutral-800 dark:border-neutral-700">
                        <!-- <x-eos-software class="shrink-0 size-5 text-orange-theme dark:text-neutral-400" width="24" height="24" /> -->
                    </div>
                    <div class="mt-3">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Création de logiciels
                        </h3>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">Nulla facilisi. Phasellus sed vestibulum augue, ut rhoncus leo.</p>
                    </div>
                </div>
                <!-- End Icon Block -->
                <!-- Icon Block -->
                <div class="text-center">
                    <div class="flex justify-center items-center size-12 bg-blue-50 border border-orange-200 rounded-full mx-auto dark:bg-neutral-800 dark:border-neutral-700">
                        <x-hugeicons-computer-programming-01 class="shrink-0 size-5 text-orange-theme dark:text-neutral-400" width="24" height="24" />
                    </div>
                    <div class="mt-3">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Développement d'outils ERP
                        </h3>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">Nulla facilisi. Phasellus sed vestibulum augue, ut rhoncus leo.</p>
                    </div>
                </div>
                <!-- End Icon Block -->
                <!-- Icon Block -->
                <div class="text-center">
                    <div class="flex justify-center items-center size-12 bg-blue-50 border border-orange-200 rounded-full mx-auto dark:bg-neutral-800 dark:border-neutral-700">
                        <svg class="shrink-0 size-5 text-orange-theme dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="10" height="14" x="3" y="8" rx="2" />
                            <path d="M5 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2h-2.4" />
                            <path d="M8 18h.01" />
                        </svg>
                    </div>
                    <div class="mt-3">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Design et interface graphique
                        </h3>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">Nulla facilisi. Phasellus sed vestibulum augue, ut rhoncus leo.</p>
                    </div>
                </div>
                <!-- End Icon Block -->
                <!-- Icon Block -->
                <div class="text-center">
                    <div class="flex justify-center items-center size-12 bg-blue-50 border border-orange-200 rounded-full mx-auto dark:bg-neutral-800 dark:border-neutral-700">
                        <svg class="shrink-0 size-5 text-orange-theme dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="10" height="14" x="3" y="8" rx="2" />
                            <path d="M5 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2h-2.4" />
                            <path d="M8 18h.01" />
                        </svg>
                    </div>
                    <div class="mt-3">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Paiement numerique</h3>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">Responsive, and mobile-first project on the web</p>
                    </div>
                </div>
                <!-- End Icon Block -->
                <!-- Icon Block -->
                <div class="text-center">
                    <div class="flex justify-center items-center size-12 bg-blue-50 border border-orange-200 rounded-full mx-auto dark:bg-neutral-800 dark:border-neutral-700">
                        <svg class="shrink-0 size-5 text-orange-theme dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="10" height="14" x="3" y="8" rx="2" />
                            <path d="M5 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2h-2.4" />
                            <path d="M8 18h.01" />
                        </svg>
                    </div>
                    <div class="mt-3">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Service financier
                        </h3>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">Responsive, and mobile-first project on the web</p>
                    </div>
                </div>
                <!-- End Icon Block -->
            </div>
        </div>
        <!-- End Icon Blocks -->
    </section>

    <section id="vision" class="font-poppins bg-blue-50">
        <!-- Icon Blocks -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <div class="max-w-2xl mx-auto">
                <!-- Grid -->
                <div class="grid gap-12">
                    <div>
                        <h2 class="text-3xl text-orange-theme font-bold lg:text-4xl dark:text-white">
                            Our vision
                        </h2>
                        <p class="mt-3 text-gray-800 dark:text-neutral-400">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in justo nec sem ultricies tempus at non augue. Mauris laoreet ipsum neque, posuere bibendum massa auctor venenatis. Ut vel tincidunt mauris. Phasellus laoreet sem eget odio mattis auctor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur condimentum non dolor a laoreet.
                        </p>
                    </div>

                    <div class="space-y-6 lg:space-y-10">
                        <!-- Icon Block -->
                        <div class="flex gap-x-5 sm:gap-x-8">
                            <svg class="shrink-0 mt-2 size-6 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z" />
                                <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2" />
                                <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2" />
                                <path d="M10 6h4" />
                                <path d="M10 10h4" />
                                <path d="M10 14h4" />
                                <path d="M10 18h4" />
                            </svg>
                            <div class="grow">
                                <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                    Engagement pour un fort impact social
                                </h3>
                                <p class="mt-1 text-gray-600 dark:text-neutral-400">
                                    Nulla facilisi. Phasellus sed vestibulum augue, ut rhoncus leo. Pellentesque hendrerit, diam sed ornare vestibulum, lectus quam ultricies mauris, sit amet eleifend velit purus nec dui.
                                </p>
                            </div>
                        </div>
                        <!-- End Icon Block -->

                        <!-- Icon Block -->
                        <div class="flex gap-x-5 sm:gap-x-8">
                            <svg class="shrink-0 mt-2 size-6 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>
                            <div class="grow">
                                <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                    Focus sur la qualité et l'intégration du client
                                </h3>
                                <p class="mt-1 text-gray-600 dark:text-neutral-400">
                                    Nulla facilisi. Phasellus sed vestibulum augue, ut rhoncus leo. Pellentesque hendrerit, diam sed ornare vestibulum
                                </p>
                            </div>
                        </div>
                        <!-- End Icon Block -->

                        <!-- Icon Block -->
                        <div class="flex gap-x-5 sm:gap-x-8">
                            <svg class="shrink-0 mt-2 size-6 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M7 10v12" />
                                <path d="M15 5.88 14 10h5.83a2 2 0 0 1 1.92 2.56l-2.33 8A2 2 0 0 1 17.5 22H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h2.76a2 2 0 0 0 1.79-1.11L12 2h0a3.13 3.13 0 0 1 3 3.88Z" />
                            </svg>
                            <div class="grow">
                                <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                    Solutions performantes et personnalisées
                                </h3>
                                <p class="mt-1 text-gray-600 dark:text-neutral-400">
                                    Nulla facilisi. Phasellus sed vestibulum augue, ut rhoncus leo. Pellentesque hendrerit, diam sed ornare vestibulum, lectus quam ultricies mauris
                                </p>
                            </div>
                        </div>
                        <!-- End Icon Block -->

                        <!-- Icon Block -->
                        <div class="flex gap-x-5 sm:gap-x-8">
                            <svg class="shrink-0 mt-2 size-6 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M7 10v12" />
                                <path d="M15 5.88 14 10h5.83a2 2 0 0 1 1.92 2.56l-2.33 8A2 2 0 0 1 17.5 22H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h2.76a2 2 0 0 0 1.79-1.11L12 2h0a3.13 3.13 0 0 1 3 3.88Z" />
                            </svg>
                            <div class="grow">
                                <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                    Principes fondamentaux
                                </h3>
                                <p class="mt-1 text-gray-600 dark:text-neutral-400">
                                    Design ergonomique, arborescence structurée,
                                    optimisation des performances et de l'expérience utilisateur
                                </p>
                            </div>
                        </div>
                        <!-- End Icon Block -->
                    </div>
                </div>
                <!-- End Grid -->
            </div>
        </div>
        <!-- End Icon Blocks -->
    </section>

    <section id="team" class="font-poppins">
        <!-- Team -->
        <div class="max-w-5xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <!-- Title -->
            <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
                <h2 class="text-3xl font-bold md:text-4xl md:leading-tight text-orange-theme dark:text-white">Our team</h2>
                <p class="mt-1 text-gray-600 dark:text-neutral-400">Équipe pluridisciplinaire - Personnel hautement qualifié (ingénieurs
                    Polytechniciens) - Approche centrée sur le client et la qualité</p>
            </div>
            <!-- End Title -->

            <!-- Grid -->
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-8 md:gap-12">
                <div class="text-center">
                    <img class="rounded-full size-24 mx-auto" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
                    <div class="mt-2 sm:mt-4">
                        <h3 class="font-medium text-gray-800 dark:text-neutral-200">
                            David Forren
                        </h3>
                        <p class="text-sm text-gray-600 dark:text-neutral-400">
                            Founder / CEO
                        </p>
                    </div>
                </div>
                <!-- End Col -->

                <div class="text-center">
                    <img class="rounded-full size-24 mx-auto" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
                    <div class="mt-2 sm:mt-4">
                        <h3 class="font-medium text-gray-800 dark:text-neutral-200">
                            Amil Evara
                        </h3>
                        <p class="text-sm text-gray-600 dark:text-neutral-400">
                            UI/UX Designer
                        </p>
                    </div>
                </div>
                <!-- End Col -->

                <div class="text-center">
                    <img class="rounded-full size-24 mx-auto" src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
                    <div class="mt-2 sm:mt-4">
                        <h3 class="font-medium text-gray-800 dark:text-neutral-200">
                            Ebele Egbuna
                        </h3>
                        <p class="text-sm text-gray-600 dark:text-neutral-400">
                            Support Consultant
                        </p>
                    </div>
                </div>
                <!-- End Col -->

                <div class="text-center">
                    <img class="rounded-full size-24 mx-auto" src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
                    <div class="mt-2 sm:mt-4">
                        <h3 class="font-medium text-gray-800 dark:text-neutral-200">
                            Maria Powers
                        </h3>
                        <p class="text-sm text-gray-600 dark:text-neutral-400">
                            Director of sales
                        </p>
                    </div>
                </div>
                <!-- End Col -->

                <div class="text-center">
                    <img class="rounded-full size-24 mx-auto" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
                    <div class="mt-2 sm:mt-4">
                        <h3 class="font-medium text-gray-800 dark:text-neutral-200">
                            Delia Pawelke
                        </h3>
                        <p class="text-sm text-gray-600 dark:text-neutral-400">
                            Front-end Developer
                        </p>
                    </div>
                </div>
                <!-- End Col -->

                <div class="text-center">
                    <img class="rounded-full size-24 mx-auto" src="https://images.unsplash.com/photo-1624224971170-2f84fed5eb5e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
                    <div class="mt-2 sm:mt-4">
                        <h3 class="font-medium text-gray-800 dark:text-neutral-200">
                            Tom Lowry
                        </h3>
                        <p class="text-sm text-gray-600 dark:text-neutral-400">
                            UI/UX Designer
                        </p>
                    </div>
                </div>
                <!-- End Col -->

            </div>
            <!-- End Grid -->

            <!-- Card -->
            <div class="mt-12 flex justify-center">
                <div class="border border-gray-200 py-2 px-3 rounded-full dark:border-neutral-700">
                    <div class="flex items-center gap-x-3">
                        <span class="text-sm text-gray-500 dark:text-neutral-500">Want to work with us?</span>
                        <a class="inline-flex items-center gap-x-2 text-sm font-medium text-blue-600 hover:text-blue-500 focus:outline-hidden focus:text-blue-500 dark:text-blue-500 dark:hover:text-blue-600 dark:focus:text-blue-600" href="#">
                            We are hiring
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Team -->
    </section>

    <section id="customers" class="font-poppins">
        <!-- Slider -->
        <div data-hs-carousel='{
            "loadingClasses": "opacity-0",
            "dotsItemClasses": "hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer dark:border-neutral-600 dark:hs-carousel-active:bg-blue-500 dark:hs-carousel-active:border-blue-500",
            "isAutoPlay": true,
            "slidesQty": {
                "xs": 2,
                "lg": 3
            }
                
            
            }' class="relative px-4 mb-10 sm:px-6 lg:px-8 lg:mb-14">
            <!-- "isAutoPlay": true, -->
            <div class="hs-carousel w-full overflow-hidden bg-white rounded-lg dark:bg-neutral-900">
                <div class="relative min-h-24 -mx-1">
                    <!-- transition-transform duration-700 -->
                    <div class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap opacity-0 transition-transform duration-700">
                        <div class="hs-carousel-slide px-1">
                            <div class="flex justify-center items-center h-full p-6">
                                <!-- Icon Block -->
                                <svg class="w-auto h-8 mx-auto text-gray-800 dark:text-neutral-200" width="300" height="88" viewBox="0 0 227 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M155.1 50.7001C151 50.7001 147.5 51.7001 144.5 53.1001C143.4 50.9001 142.3 49.0001 142.1 47.6001C142 46.0001 141.7 45.0001 142 43.0001C142.3 41.0001 143.4 38.3001 143.4 38.0001C143.4 37.8001 143.1 36.8001 140.8 36.8001C138.5 36.8001 136.4 37.2001 136.2 37.9001C136 38.5001 135.5 39.9001 135.2 41.4001C134.8 43.5001 130.5 51.1001 128.1 55.1001C127.3 53.5001 126.6 52.2001 126.5 51.1001C126.3 49.5001 126 48.5001 126.3 46.5001C126.6 44.5001 127.7 41.8001 127.7 41.5001C127.7 41.3001 127.4 40.3001 125.1 40.3001C122.8 40.3001 120.7 40.7001 120.5 41.4001C120.3 42.0001 120 43.5001 119.5 44.9001C119 46.3001 113.3 59.0001 111.8 62.3001C111 64.0001 110.4 65.3001 109.9 66.2001C109.9 66.2001 109.9 66.3001 109.8 66.4001C109.4 67.2001 109.2 67.6001 109.2 67.6001C108.9 68.2001 108.5 68.7001 108.4 68.7001C108.3 68.7001 108 67.2001 108.4 65.1001C109.3 60.7001 111.3 53.8001 111.3 53.6001C111.3 53.5001 111.7 52.3001 110 51.7001C108.3 51.1001 107.7 52.1001 107.6 52.1001C107.5 52.1001 107.3 52.5001 107.3 52.5001C107.3 52.5001 109.2 44.8001 103.8 44.8001C100.4 44.8001 95.8001 48.5001 93.5001 51.8001C92.1001 52.6001 89.0001 54.3001 85.7001 56.1001C84.4001 56.8001 83.1001 57.5001 81.9001 58.2001C81.8001 58.1001 81.7001 58.0001 81.6001 57.9001C75.0001 50.8001 63.0001 45.8001 63.5001 36.5001C63.7001 33.1001 64.9001 24.2001 86.6001 13.3001C104.5 4.50005 118.8 6.90005 121.3 12.3001C124.8 20.1001 113.7 34.4001 95.1001 36.5001C88.0001 37.3001 84.3001 34.6001 83.4001 33.5001C82.4001 32.4001 82.3001 32.4001 81.9001 32.6001C81.3001 32.9001 81.7001 33.9001 81.9001 34.4001C82.5001 35.8001 84.7001 38.4001 88.6001 39.7001C92.0001 40.8001 100.3 41.4001 110.3 37.5001C121.5 33.2001 130.3 21.1001 127.7 11.0001C125.2 0.800058 108.1 -2.49995 92.0001 3.20005C82.4001 6.60005 72.0001 12.0001 64.6001 18.9001C55.7001 27.2001 54.3001 34.4001 54.9001 37.4001C57.0001 48.1001 71.8001 55.1001 77.7001 60.3001C77.4001 60.5001 77.1001 60.6001 76.9001 60.7001C73.9001 62.2001 62.7001 68.1001 59.8001 74.3001C56.6001 81.4001 60.3001 86.4001 62.8001 87.1001C70.4001 89.2001 78.2001 85.4001 82.4001 79.2001C86.6001 72.9001 86.1001 64.8001 84.1001 61.1001C84.1001 61.1001 84.1001 61.0001 84.0001 61.0001C84.8001 60.6001 85.6001 60.1001 86.3001 59.6001C87.8001 58.7001 89.3001 57.9001 90.6001 57.2001C89.9001 59.2001 89.3001 61.5001 89.1001 65.0001C88.8001 69.0001 90.4001 74.2001 92.6001 76.2001C93.6001 77.1001 94.7001 77.1001 95.4001 77.1001C97.9001 77.1001 99.0001 75.0001 100.3 72.5001C101.8 69.5001 103.2 66.0001 103.2 66.0001C103.2 66.0001 101.5 75.5001 106.2 75.5001C107.9 75.5001 109.6 73.3001 110.4 72.2001C110.4 72.2001 110.4 72.1001 110.5 72.0001C110.7 71.7001 110.8 71.6001 110.8 71.6001C111.5 70.4001 113 67.7001 115.3 63.2001C118.2 57.4001 121.1 50.2001 121.1 50.2001C121.1 50.2001 121.4 52.0001 122.2 54.9001C122.7 56.6001 123.8 58.5001 124.6 60.4001C123.9 61.4001 123.5 61.9001 123.5 61.9001C122.9 62.6001 122.4 63.4001 121.7 64.2001C119.4 67.0001 116.6 70.1001 116.2 71.1001C115.8 72.2001 115.9 73.0001 116.7 73.6001C117.3 74.1001 118.4 74.1001 119.6 74.1001C121.7 74.0001 123.2 73.4001 123.9 73.1001C125 72.7001 126.3 72.1001 127.6 71.2001C129.9 69.5001 131.3 67.1001 131.1 63.9001C131 62.2001 130.5 60.4001 129.8 58.8001C130 58.5001 130.2 58.2001 130.4 57.9001C134 52.6001 136.8 46.9001 136.8 46.9001C136.8 46.9001 137.1 48.7001 137.9 51.6001C138.3 53.1001 139.2 54.7001 140 56.3001C136.6 59.0001 134.5 62.2001 133.8 64.3001C132.5 68.2001 133.5 69.9001 135.5 70.3001C136.4 70.5001 137.7 70.1001 138.6 69.7001C139.8 69.3001 141.2 68.7001 142.5 67.7001C144.8 66.0001 147 63.7001 146.8 60.5001C146.7 59.1001 146.4 57.6001 145.8 56.2001C148.7 55.0001 152.4 54.3001 157.1 54.9001C167.2 56.1001 169.2 62.4001 168.9 65.1001C168.5 67.8001 166.4 69.2001 165.7 69.7001C165 70.1001 164.8 70.3001 164.8 70.6001C164.9 71.1001 165.2 71.0001 165.8 71.0001C166.6 70.9001 171.1 68.8001 171.3 64.0001C171.6 57.4001 165.7 50.6001 155.1 50.7001ZM76.9001 77.0001C73.5001 80.7001 68.9001 82.0001 66.8001 80.9001C64.6001 79.6001 65.5001 74.2001 69.6001 70.4001C72.1001 68.0001 75.3001 65.8001 77.5001 64.5001C78.0001 64.2001 78.7001 63.8001 79.6001 63.2001C79.7001 63.1001 79.8001 63.1001 79.8001 63.1001C80.0001 63.0001 80.1001 62.9001 80.3001 62.8001C81.9001 68.3001 80.5001 73.2001 76.9001 77.0001ZM101.4 60.4001C100.2 63.3001 97.8001 70.6001 96.3001 70.2001C95.0001 69.9001 94.2001 64.3001 96.0001 58.9001C96.9001 56.2001 98.9001 52.9001 100 51.6001C101.8 49.6001 103.9 48.9001 104.3 49.7001C105 50.7001 102.1 58.6001 101.4 60.4001ZM121.6 70.0001C121.1 70.3001 120.6 70.4001 120.4 70.3001C120.3 70.2001 120.6 69.9001 120.6 69.9001C120.6 69.9001 123.1 67.2001 124.1 65.9001C124.7 65.2001 125.4 64.3001 126.1 63.4001C126.1 63.5001 126.1 63.6001 126.1 63.7001C126.2 66.9001 123 69.1001 121.6 70.0001ZM137.2 66.5001C136.8 66.2001 136.9 65.4001 138.1 62.7001C138.6 61.7001 139.7 59.9001 141.6 58.2001C141.8 58.9001 142 59.5001 141.9 60.2001C141.9 64.3001 139 65.8001 137.2 66.5001Z" fill="currentColor" />
                                </svg>
                                <!-- End Icon Block -->
                            </div>
                        </div>
                        <div class="hs-carousel-slide px-1">
                            <div class="flex justify-center items-center h-full p-6">
                                <!-- Icon Block -->
                                <svg class="w-auto h-8 mx-auto text-gray-800 dark:text-neutral-200" width="106" height="36" viewBox="0 0 106 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M55.4732 9.52669C55.4732 10.6846 54.5258 11.6846 53.3153 11.6846C52.1048 11.6846 51.1574 10.7372 51.1574 9.52669C51.1574 8.31616 52.0521 7.36879 53.3153 7.36879C54.5785 7.47406 55.4732 8.42142 55.4732 9.52669ZM46.6837 13.8425C46.6837 14.053 46.6837 14.3688 46.6837 14.3688C46.6837 14.3688 45.6837 13.053 43.5258 13.053C39.9469 13.053 37.1574 15.7898 37.1574 19.5267C37.1574 23.2635 39.8942 26.0004 43.5258 26.0004C45.7363 26.0004 46.6837 24.6319 46.6837 24.6319V25.2109C46.6837 25.4741 46.8942 25.6846 47.1574 25.6846H49.789V13.3688C49.789 13.3688 47.3679 13.3688 47.1574 13.3688C46.8942 13.3688 46.6837 13.632 46.6837 13.8425ZM46.6837 21.7372C46.21 22.4741 45.21 23.1056 44.0521 23.1056C41.9469 23.1056 40.3679 21.7898 40.3679 19.5793C40.3679 17.3688 41.9995 16.053 44.0521 16.053C45.21 16.053 46.2627 16.6846 46.6837 17.4214V21.7372ZM51.789 13.3688H54.9469V25.6846H51.789V13.3688ZM98.789 13.053C96.6311 13.053 95.6311 14.3688 95.6311 14.3688V7.47406H92.4732V25.7372C92.4732 25.7372 94.8942 25.7372 95.1048 25.7372C95.3679 25.7372 95.5785 25.5267 95.5785 25.2635V24.6846C95.5785 24.6846 96.5785 26.053 98.7364 26.053C102.315 26.053 105.105 23.3162 105.105 19.5793C105.157 15.7898 102.368 13.053 98.789 13.053ZM98.2627 23.053C97.0521 23.053 96.1048 22.4214 95.6311 21.6846V17.2635C96.1048 16.632 97.1574 15.8951 98.2627 15.8951C100.368 15.8951 101.947 17.2109 101.947 19.4214C101.947 21.632 100.368 23.053 98.2627 23.053ZM90.8416 18.4214V25.7898H87.6837V18.7898C87.6837 16.7372 87.0521 15.9477 85.2627 15.9477C84.3153 15.9477 83.3153 16.4214 82.6837 17.1583V25.7372H79.5258V13.3688H81.9995C82.2627 13.3688 82.4732 13.5793 82.4732 13.8425V14.3688C83.3679 13.4214 84.6311 13.053 85.8416 13.053C87.21 13.053 88.3679 13.4214 89.2627 14.2109C90.4206 15.1583 90.8416 16.3162 90.8416 18.4214ZM71.8942 13.053C69.7364 13.053 68.7364 14.3688 68.7364 14.3688V7.47406H65.5785V25.7372C65.5785 25.7372 67.9995 25.7372 68.21 25.7372C68.4732 25.7372 68.6837 25.5267 68.6837 25.2635V24.6846C68.6837 24.6846 69.6837 26.053 71.8416 26.053C75.4206 26.053 78.21 23.3162 78.21 19.5793C78.2627 15.7898 75.4732 13.053 71.8942 13.053ZM71.3679 23.053C70.1574 23.053 69.21 22.4214 68.7364 21.6846V17.2635C69.21 16.632 70.2627 15.8951 71.3679 15.8951C73.4732 15.8951 75.0521 17.2109 75.0521 19.4214C75.0521 21.632 73.4732 23.053 71.3679 23.053ZM62.8416 13.053C63.789 13.053 64.2627 13.2109 64.2627 13.2109V16.1056C64.2627 16.1056 61.6311 15.2109 59.9995 17.1056V25.7372H56.8416V13.3688C56.8416 13.3688 59.2627 13.3688 59.4732 13.3688C59.7364 13.3688 59.9469 13.5793 59.9469 13.8425V14.3688C60.5785 13.6846 61.8942 13.053 62.8416 13.053ZM30.1574 24.6319C29.9995 24.2635 29.8416 23.7898 29.6837 23.4741C29.4206 22.8951 29.1574 22.3162 28.9469 21.7898L28.8942 21.7372C26.6311 16.8425 24.21 11.8425 21.6311 6.89511L21.5258 6.68458C21.2627 6.2109 20.9995 5.68458 20.7363 5.15827C20.4206 4.57932 20.1048 3.94774 19.5785 3.36879C18.5258 2.053 16.9995 1.31616 15.4206 1.31616C13.789 1.31616 12.3153 2.053 11.21 3.26353C10.6837 3.89511 10.3153 4.47406 9.99951 5.10564C9.73635 5.63195 9.47319 6.15827 9.21003 6.63195L9.10477 6.84248C6.57845 11.7372 4.10477 16.7372 1.84161 21.6846L1.78898 21.7372C1.57845 22.2635 1.3153 22.8425 1.05214 23.4214C0.894243 23.7898 0.736348 24.1583 0.578453 24.5793C0.1574 25.7898 -0.000494055 26.9477 0.210032 28.1056C0.578453 30.5793 2.21003 32.632 4.47319 33.5267C5.3153 33.8951 6.21003 34.053 7.10477 34.053C7.36793 34.053 7.68372 34.0004 7.94687 34.0004C9.05214 33.8951 10.1574 33.5267 11.21 32.8951C12.5785 32.1583 13.8416 31.053 15.2627 29.4741C16.6837 31.053 17.9995 32.1056 19.3153 32.8951C20.4206 33.5267 21.5258 33.8951 22.5785 34.0004C22.8416 34.053 23.1574 34.053 23.4206 34.053C24.3153 34.053 25.2627 33.8951 26.0521 33.5267C28.3679 32.632 29.9469 30.5267 30.3153 28.1056C30.6837 26.9477 30.5785 25.8425 30.1574 24.6319ZM15.3679 26.3162C13.5785 24.1056 12.4732 22.0004 12.0521 20.2109C11.8942 19.4741 11.8416 18.7898 11.9469 18.2109C11.9995 17.6846 12.21 17.2109 12.4732 16.8425C13.1048 15.9477 14.1574 15.4214 15.3679 15.4214C16.5785 15.4214 17.6837 15.9477 18.2627 16.8425C18.5258 17.2109 18.7363 17.6846 18.789 18.2109C18.8942 18.7898 18.8416 19.4741 18.6837 20.2109C18.2627 21.9477 17.1048 24.053 15.3679 26.3162ZM28.4206 27.8425C28.21 29.5267 27.0521 31.0004 25.4206 31.6846C24.6311 32.0004 23.789 32.1056 22.9469 32.0004C22.1048 31.8951 21.3153 31.632 20.4732 31.1583C19.3153 30.5267 18.1048 29.4741 16.7363 28.0004C18.8942 25.3688 20.21 22.8951 20.6837 20.7372C20.8942 19.7372 20.9469 18.7898 20.8416 17.9477C20.7363 17.1056 20.4206 16.3688 19.9469 15.7372C18.9469 14.2635 17.21 13.4214 15.3153 13.4214C13.4206 13.4214 11.6837 14.3162 10.6837 15.7372C10.21 16.3688 9.94687 17.1583 9.78898 17.9477C9.68372 18.7898 9.68372 19.7372 9.94687 20.7372C10.4206 22.8951 11.789 25.3688 13.8942 28.0004C12.5258 29.5267 11.3153 30.5267 10.1574 31.1583C9.3153 31.632 8.47319 31.8951 7.68372 32.0004C6.78898 32.1056 5.94687 31.9477 5.21003 31.6846C3.57845 31.053 2.47319 29.5267 2.21003 27.8425C2.10477 27.0004 2.1574 26.2109 2.52582 25.2635C2.63108 24.9477 2.78898 24.632 2.94687 24.2109C3.1574 23.6846 3.42056 23.1056 3.68372 22.5793L3.73635 22.5267C5.99951 17.632 8.42056 12.632 10.9469 7.78985L11.0521 7.57932C11.3153 7.10564 11.5785 6.57932 11.8416 6.053C12.1048 5.52669 12.4206 5.053 12.7363 4.63195C13.4206 3.84248 14.3679 3.42143 15.3679 3.42143C16.3679 3.42143 17.3153 3.84248 17.9995 4.63195C18.3679 5.053 18.6311 5.52669 18.8942 6.053C19.1574 6.52669 19.4206 7.053 19.6837 7.57932L19.789 7.78985C22.2627 12.6846 24.6837 17.6846 26.9469 22.5267V22.5793C27.21 23.1056 27.4206 23.6846 27.6837 24.2109C27.8416 24.5793 27.9995 24.9477 28.1048 25.2635C28.4732 26.1583 28.5785 27.0004 28.4206 27.8425Z" fill="currentColor" />
                                </svg>
                                <!-- End Icon Block -->
                            </div>
                        </div>
                        <div class="hs-carousel-slide px-1">
                            <div class="flex justify-center items-center h-full p-6">
                                <!-- Icon Block -->
                                <svg class="w-auto h-8 mx-auto text-gray-800 dark:text-neutral-200" width="140" height="47" viewBox="0 0 140 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path d="M96.2674 23.8697C93.7525 23.5204 92.7744 22.8916 92.8443 21.9136C92.984 20.1671 95.1497 19.9575 96.477 20.0274C99.0619 20.2369 99.6207 22.4725 99.6207 22.7519L102.136 22.5423C101.996 20.9355 100.669 17.7918 96.8962 17.5124C94.8004 17.3727 92.984 17.7918 91.7964 18.8397C90.8882 19.6082 90.1197 20.7958 89.98 21.9835C89.7006 25.8258 93.473 26.3847 95.8483 26.734C98.8523 27.1531 99.5509 27.5723 99.481 28.69C99.481 29.2489 99.1317 29.8078 98.7126 30.1571C98.0838 30.6461 96.8263 30.8557 95.5688 30.716C92.7046 30.4365 92.495 28.6202 92.495 28.2709L89.98 28.3407C89.98 29.8777 91.0279 32.8817 95.2894 33.3707C97.5948 33.6501 99.481 32.9515 100.459 32.2529C101.577 31.4146 102.206 30.0174 102.275 28.69C102.485 24.708 98.6427 24.219 96.2674 23.8697Z" fill="currentColor" />
                                        <path d="M110.659 30.7161C114.431 30.7161 114.152 26.4546 114.152 26.4546V17.9316H117.086V26.3847C117.086 26.3847 117.086 26.4546 117.086 26.6642C117.086 27.9217 116.946 33.3009 110.728 33.3009H110.519C104.301 33.3009 104.162 27.9915 104.162 26.6642C104.162 26.5245 104.162 26.3847 104.162 26.3847V17.9316H107.096V26.3847C107.166 26.3847 106.886 30.7161 110.659 30.7161Z" fill="currentColor" />
                                        <path d="M136.926 28.3405C136.088 29.8076 134.411 30.6459 132.595 30.6459C130.08 30.6459 128.054 29.0392 127.705 26.5242H139.93C139.93 26.1749 139.93 25.6859 139.93 25.3366C139.93 20.5861 136.717 17.5122 132.455 17.5122C128.194 17.5122 124.771 20.5162 124.771 25.3366C124.771 30.1569 128.194 33.2308 132.455 33.2308C135.11 33.2308 137.625 32.113 139.022 29.8775L136.926 28.3405ZM132.525 20.2368C134.97 20.2368 136.717 21.7737 137.136 24.2887H127.774C128.124 21.7038 130.01 20.2368 132.525 20.2368Z" fill="currentColor" />
                                        <path d="M80.9681 17.582C78.8723 17.582 76.7066 18.5601 75.7286 20.2367V17.8615H72.7944V40.2168H75.7286V30.7158C76.7066 32.4623 78.8723 33.3006 80.9681 33.3006C85.0898 33.3006 88.513 30.2966 88.513 25.4762C88.513 20.7257 85.0898 17.582 80.9681 17.582ZM80.6886 30.576C78.2435 30.576 75.6587 28.8295 75.6587 25.616C75.6587 22.4024 78.1737 20.3066 80.8284 20.3066C83.5529 20.3066 85.7186 22.3325 85.7186 25.3365C85.6487 28.4104 83.3433 30.576 80.6886 30.576Z" fill="currentColor" />
                                        <path d="M122.605 9.68799H119.67V32.9515H122.605V9.68799Z" fill="currentColor" />
                                        <path d="M64.4113 17.4424C64.3414 17.4424 64.2716 17.4424 64.2017 17.4424C64.2017 17.4424 61.6867 17.4424 59.3115 18.4204L59.5909 19.1889L60.1498 20.7957C60.9881 20.4464 62.3853 20.0272 64.2017 19.9574C64.2716 19.9574 64.3414 19.9574 64.4113 19.9574C67.6249 19.9574 67.6947 22.8915 67.6947 22.8915V23.6599L62.6648 23.5901C62.3155 23.5901 60.2895 23.5901 58.8225 24.9873C58.4732 25.3366 58.1937 25.6859 57.9841 26.1051C57.7047 26.7338 57.4951 27.4324 57.4951 28.2009C57.4951 29.1789 57.7746 30.0871 58.1937 30.8556C58.4033 31.2049 58.6827 31.5542 58.9622 31.8336C59.9402 32.7418 61.3374 33.3007 62.8744 33.3007C63.0141 33.3007 63.1538 33.3007 63.2237 33.3007C64.9702 33.2308 66.577 32.5322 67.6249 30.8556V32.9514H70.2097V23.4504C70.2796 21.0053 68.7426 17.4424 64.4113 17.4424ZM63.1538 30.9254C62.2456 30.9953 60.1498 30.5063 60.1498 28.2009C60.1498 27.5721 60.7087 26.1051 62.5251 26.1051C64.3414 26.1051 67.555 26.1051 67.555 26.1051C67.6249 28.8995 65.9482 30.7857 63.1538 30.9254Z" fill="currentColor" />
                                        <path d="M49.1118 30.3667C44.4311 30.3667 40.8682 26.5942 40.8682 21.9136C40.8682 17.233 44.501 13.3906 49.1118 13.3906C51.3473 13.3906 53.3034 14.2988 54.7704 15.696L56.5169 13.3208C54.6307 11.5743 51.976 10.5264 49.1118 10.5264C42.8243 10.5264 37.8643 15.6262 37.8643 21.9136C37.8643 28.201 42.8243 33.3008 49.1118 33.3008C51.6966 33.3008 54.002 32.4625 55.8183 31.1351L54.8403 28.4106C53.2335 29.5284 51.0678 30.3667 49.1118 30.3667Z" fill="currentColor" />
                                        <path d="M0 30.2965H3.63273V28.061H8.24351V30.2965H11.8064V12.9712H0V30.2965Z" fill="currentColor" />
                                        <path d="M18.0938 8.08105C17.5349 8.08105 17.1157 8.50022 17.1157 9.0591C17.1157 9.61798 17.5349 10.0371 18.0938 10.0371C18.6526 10.0371 19.0718 9.61798 19.0718 9.0591C19.1417 8.57008 18.6526 8.08105 18.0938 8.08105Z" fill="currentColor" />
                                        <path d="M18.0938 12.6221C17.5349 12.6221 17.1157 13.0412 17.1157 13.6001C17.1157 14.159 17.5349 14.5782 18.0938 14.5782C18.6526 14.5782 19.0718 14.159 19.0718 13.6001C19.1417 13.1111 18.6526 12.6221 18.0938 12.6221Z" fill="currentColor" />
                                        <path d="M18.0938 17.2329C17.5349 17.2329 17.1157 17.6521 17.1157 18.211C17.1157 18.7698 17.5349 19.189 18.0938 19.189C18.6526 19.189 19.0718 18.7698 19.0718 18.211C19.1417 17.6521 18.6526 17.2329 18.0938 17.2329Z" fill="currentColor" />
                                        <path d="M22.7744 8.08105C22.2155 8.08105 21.7964 8.50022 21.7964 9.0591C21.7964 9.61798 22.2155 10.0371 22.7744 10.0371C23.3333 10.0371 23.7525 9.61798 23.7525 9.0591C23.7525 8.57008 23.3333 8.08105 22.7744 8.08105Z" fill="currentColor" />
                                        <path d="M22.7744 12.6221C22.2155 12.6221 21.7964 13.0412 21.7964 13.6001C21.7964 14.159 22.2155 14.5782 22.7744 14.5782C23.3333 14.5782 23.7525 14.159 23.7525 13.6001C23.7525 13.1111 23.3333 12.6221 22.7744 12.6221Z" fill="currentColor" />
                                        <path d="M22.7744 17.2329C22.2155 17.2329 21.7964 17.6521 21.7964 18.211C21.7964 18.7698 22.2155 19.189 22.7744 19.189C23.3333 19.189 23.7525 18.7698 23.7525 18.211C23.7525 17.6521 23.3333 17.2329 22.7744 17.2329Z" fill="currentColor" />
                                        <path d="M27.3154 8.08105C26.7566 8.08105 26.3374 8.50022 26.3374 9.0591C26.3374 9.61798 26.7566 10.0371 27.3154 10.0371C27.8743 10.0371 28.2935 9.61798 28.2935 9.0591C28.2935 8.57008 27.8743 8.08105 27.3154 8.08105Z" fill="currentColor" />
                                        <path d="M27.3154 12.6221C26.7566 12.6221 26.3374 13.0412 26.3374 13.6001C26.3374 14.159 26.7566 14.5782 27.3154 14.5782C27.8743 14.5782 28.2935 14.159 28.2935 13.6001C28.2935 13.1111 27.8743 12.6221 27.3154 12.6221Z" fill="currentColor" />
                                        <path d="M27.3154 17.2329C26.7566 17.2329 26.3374 17.6521 26.3374 18.211C26.3374 18.7698 26.7566 19.189 27.3154 19.189C27.8743 19.189 28.2935 18.7698 28.2935 18.211C28.2935 17.6521 27.8743 17.2329 27.3154 17.2329Z" fill="currentColor" />
                                        <path d="M6.07776 24.2885C2.79433 24.2186 0.0697788 26.8035 -8.15348e-05 30.017C-0.0699418 33.2306 2.51489 35.9552 5.79832 36.0949C9.08176 36.1647 11.7364 33.5799 11.8762 30.2965C11.8762 27.0829 9.29134 24.3584 6.07776 24.2885ZM7.89413 32.3224H3.91209V28.3404H7.89413V32.3224Z" fill="currentColor" />
                                        <path d="M6.07776 24.2885C2.79433 24.2186 0.0697788 26.8035 -8.15348e-05 30.017C-0.0699418 33.2306 2.51489 35.9552 5.79832 36.0949C9.08176 36.1647 11.7364 33.5799 11.8762 30.2965C11.8762 27.0829 9.29134 24.3584 6.07776 24.2885ZM7.89413 32.3224H3.91209V28.3404H7.89413V32.3224Z" fill="white" fill-opacity="0.2" />
                                        <path d="M5.93812 19.1189C9.21766 19.1189 11.8762 16.4603 11.8762 13.1808C11.8762 9.90126 9.21766 7.24268 5.93812 7.24268C2.65859 7.24268 0 9.90126 0 13.1808C0 16.4603 2.65859 19.1189 5.93812 19.1189Z" fill="white" />
                                        <path d="M16.627 23.1709V35.3266H28.7826V23.1709H16.627ZM26.3375 31.9733H19.1419V30.4364H26.3375V31.9733ZM26.3375 27.9913H19.1419V26.4543H26.3375V27.9913Z" fill="currentColor" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="140" height="47" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <!-- End Icon Block -->
                            </div>
                        </div>
                        <div class="hs-carousel-slide px-1">
                            <div class="flex justify-center items-center h-full p-6">
                                <!-- Icon Block -->
                                <svg class="w-auto h-8 mx-auto text-gray-800 dark:text-neutral-200" width="140" height="47" viewBox="0 0 140 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path d="M96.2674 23.8697C93.7525 23.5204 92.7744 22.8916 92.8443 21.9136C92.984 20.1671 95.1497 19.9575 96.477 20.0274C99.0619 20.2369 99.6207 22.4725 99.6207 22.7519L102.136 22.5423C101.996 20.9355 100.669 17.7918 96.8962 17.5124C94.8004 17.3727 92.984 17.7918 91.7964 18.8397C90.8882 19.6082 90.1197 20.7958 89.98 21.9835C89.7006 25.8258 93.473 26.3847 95.8483 26.734C98.8523 27.1531 99.5509 27.5723 99.481 28.69C99.481 29.2489 99.1317 29.8078 98.7126 30.1571C98.0838 30.6461 96.8263 30.8557 95.5688 30.716C92.7046 30.4365 92.495 28.6202 92.495 28.2709L89.98 28.3407C89.98 29.8777 91.0279 32.8817 95.2894 33.3707C97.5948 33.6501 99.481 32.9515 100.459 32.2529C101.577 31.4146 102.206 30.0174 102.275 28.69C102.485 24.708 98.6427 24.219 96.2674 23.8697Z" fill="currentColor" />
                                        <path d="M110.659 30.7161C114.431 30.7161 114.152 26.4546 114.152 26.4546V17.9316H117.086V26.3847C117.086 26.3847 117.086 26.4546 117.086 26.6642C117.086 27.9217 116.946 33.3009 110.728 33.3009H110.519C104.301 33.3009 104.162 27.9915 104.162 26.6642C104.162 26.5245 104.162 26.3847 104.162 26.3847V17.9316H107.096V26.3847C107.166 26.3847 106.886 30.7161 110.659 30.7161Z" fill="currentColor" />
                                        <path d="M136.926 28.3405C136.088 29.8076 134.411 30.6459 132.595 30.6459C130.08 30.6459 128.054 29.0392 127.705 26.5242H139.93C139.93 26.1749 139.93 25.6859 139.93 25.3366C139.93 20.5861 136.717 17.5122 132.455 17.5122C128.194 17.5122 124.771 20.5162 124.771 25.3366C124.771 30.1569 128.194 33.2308 132.455 33.2308C135.11 33.2308 137.625 32.113 139.022 29.8775L136.926 28.3405ZM132.525 20.2368C134.97 20.2368 136.717 21.7737 137.136 24.2887H127.774C128.124 21.7038 130.01 20.2368 132.525 20.2368Z" fill="currentColor" />
                                        <path d="M80.9681 17.582C78.8723 17.582 76.7066 18.5601 75.7286 20.2367V17.8615H72.7944V40.2168H75.7286V30.7158C76.7066 32.4623 78.8723 33.3006 80.9681 33.3006C85.0898 33.3006 88.513 30.2966 88.513 25.4762C88.513 20.7257 85.0898 17.582 80.9681 17.582ZM80.6886 30.576C78.2435 30.576 75.6587 28.8295 75.6587 25.616C75.6587 22.4024 78.1737 20.3066 80.8284 20.3066C83.5529 20.3066 85.7186 22.3325 85.7186 25.3365C85.6487 28.4104 83.3433 30.576 80.6886 30.576Z" fill="currentColor" />
                                        <path d="M122.605 9.68799H119.67V32.9515H122.605V9.68799Z" fill="currentColor" />
                                        <path d="M64.4113 17.4424C64.3414 17.4424 64.2716 17.4424 64.2017 17.4424C64.2017 17.4424 61.6867 17.4424 59.3115 18.4204L59.5909 19.1889L60.1498 20.7957C60.9881 20.4464 62.3853 20.0272 64.2017 19.9574C64.2716 19.9574 64.3414 19.9574 64.4113 19.9574C67.6249 19.9574 67.6947 22.8915 67.6947 22.8915V23.6599L62.6648 23.5901C62.3155 23.5901 60.2895 23.5901 58.8225 24.9873C58.4732 25.3366 58.1937 25.6859 57.9841 26.1051C57.7047 26.7338 57.4951 27.4324 57.4951 28.2009C57.4951 29.1789 57.7746 30.0871 58.1937 30.8556C58.4033 31.2049 58.6827 31.5542 58.9622 31.8336C59.9402 32.7418 61.3374 33.3007 62.8744 33.3007C63.0141 33.3007 63.1538 33.3007 63.2237 33.3007C64.9702 33.2308 66.577 32.5322 67.6249 30.8556V32.9514H70.2097V23.4504C70.2796 21.0053 68.7426 17.4424 64.4113 17.4424ZM63.1538 30.9254C62.2456 30.9953 60.1498 30.5063 60.1498 28.2009C60.1498 27.5721 60.7087 26.1051 62.5251 26.1051C64.3414 26.1051 67.555 26.1051 67.555 26.1051C67.6249 28.8995 65.9482 30.7857 63.1538 30.9254Z" fill="currentColor" />
                                        <path d="M49.1118 30.3667C44.4311 30.3667 40.8682 26.5942 40.8682 21.9136C40.8682 17.233 44.501 13.3906 49.1118 13.3906C51.3473 13.3906 53.3034 14.2988 54.7704 15.696L56.5169 13.3208C54.6307 11.5743 51.976 10.5264 49.1118 10.5264C42.8243 10.5264 37.8643 15.6262 37.8643 21.9136C37.8643 28.201 42.8243 33.3008 49.1118 33.3008C51.6966 33.3008 54.002 32.4625 55.8183 31.1351L54.8403 28.4106C53.2335 29.5284 51.0678 30.3667 49.1118 30.3667Z" fill="currentColor" />
                                        <path d="M0 30.2965H3.63273V28.061H8.24351V30.2965H11.8064V12.9712H0V30.2965Z" fill="currentColor" />
                                        <path d="M18.0938 8.08105C17.5349 8.08105 17.1157 8.50022 17.1157 9.0591C17.1157 9.61798 17.5349 10.0371 18.0938 10.0371C18.6526 10.0371 19.0718 9.61798 19.0718 9.0591C19.1417 8.57008 18.6526 8.08105 18.0938 8.08105Z" fill="currentColor" />
                                        <path d="M18.0938 12.6221C17.5349 12.6221 17.1157 13.0412 17.1157 13.6001C17.1157 14.159 17.5349 14.5782 18.0938 14.5782C18.6526 14.5782 19.0718 14.159 19.0718 13.6001C19.1417 13.1111 18.6526 12.6221 18.0938 12.6221Z" fill="currentColor" />
                                        <path d="M18.0938 17.2329C17.5349 17.2329 17.1157 17.6521 17.1157 18.211C17.1157 18.7698 17.5349 19.189 18.0938 19.189C18.6526 19.189 19.0718 18.7698 19.0718 18.211C19.1417 17.6521 18.6526 17.2329 18.0938 17.2329Z" fill="currentColor" />
                                        <path d="M22.7744 8.08105C22.2155 8.08105 21.7964 8.50022 21.7964 9.0591C21.7964 9.61798 22.2155 10.0371 22.7744 10.0371C23.3333 10.0371 23.7525 9.61798 23.7525 9.0591C23.7525 8.57008 23.3333 8.08105 22.7744 8.08105Z" fill="currentColor" />
                                        <path d="M22.7744 12.6221C22.2155 12.6221 21.7964 13.0412 21.7964 13.6001C21.7964 14.159 22.2155 14.5782 22.7744 14.5782C23.3333 14.5782 23.7525 14.159 23.7525 13.6001C23.7525 13.1111 23.3333 12.6221 22.7744 12.6221Z" fill="currentColor" />
                                        <path d="M22.7744 17.2329C22.2155 17.2329 21.7964 17.6521 21.7964 18.211C21.7964 18.7698 22.2155 19.189 22.7744 19.189C23.3333 19.189 23.7525 18.7698 23.7525 18.211C23.7525 17.6521 23.3333 17.2329 22.7744 17.2329Z" fill="currentColor" />
                                        <path d="M27.3154 8.08105C26.7566 8.08105 26.3374 8.50022 26.3374 9.0591C26.3374 9.61798 26.7566 10.0371 27.3154 10.0371C27.8743 10.0371 28.2935 9.61798 28.2935 9.0591C28.2935 8.57008 27.8743 8.08105 27.3154 8.08105Z" fill="currentColor" />
                                        <path d="M27.3154 12.6221C26.7566 12.6221 26.3374 13.0412 26.3374 13.6001C26.3374 14.159 26.7566 14.5782 27.3154 14.5782C27.8743 14.5782 28.2935 14.159 28.2935 13.6001C28.2935 13.1111 27.8743 12.6221 27.3154 12.6221Z" fill="currentColor" />
                                        <path d="M27.3154 17.2329C26.7566 17.2329 26.3374 17.6521 26.3374 18.211C26.3374 18.7698 26.7566 19.189 27.3154 19.189C27.8743 19.189 28.2935 18.7698 28.2935 18.211C28.2935 17.6521 27.8743 17.2329 27.3154 17.2329Z" fill="currentColor" />
                                        <path d="M6.07776 24.2885C2.79433 24.2186 0.0697788 26.8035 -8.15348e-05 30.017C-0.0699418 33.2306 2.51489 35.9552 5.79832 36.0949C9.08176 36.1647 11.7364 33.5799 11.8762 30.2965C11.8762 27.0829 9.29134 24.3584 6.07776 24.2885ZM7.89413 32.3224H3.91209V28.3404H7.89413V32.3224Z" fill="currentColor" />
                                        <path d="M6.07776 24.2885C2.79433 24.2186 0.0697788 26.8035 -8.15348e-05 30.017C-0.0699418 33.2306 2.51489 35.9552 5.79832 36.0949C9.08176 36.1647 11.7364 33.5799 11.8762 30.2965C11.8762 27.0829 9.29134 24.3584 6.07776 24.2885ZM7.89413 32.3224H3.91209V28.3404H7.89413V32.3224Z" fill="white" fill-opacity="0.2" />
                                        <path d="M5.93812 19.1189C9.21766 19.1189 11.8762 16.4603 11.8762 13.1808C11.8762 9.90126 9.21766 7.24268 5.93812 7.24268C2.65859 7.24268 0 9.90126 0 13.1808C0 16.4603 2.65859 19.1189 5.93812 19.1189Z" fill="white" />
                                        <path d="M16.627 23.1709V35.3266H28.7826V23.1709H16.627ZM26.3375 31.9733H19.1419V30.4364H26.3375V31.9733ZM26.3375 27.9913H19.1419V26.4543H26.3375V27.9913Z" fill="currentColor" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="140" height="47" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <!-- End Icon Block -->
                            </div>
                        </div>
                        <div class="hs-carousel-slide px-1">
                            <div class="flex justify-center items-center h-full p-6">
                                <!-- Icon Block -->
                                <svg class="w-auto h-8 mx-auto text-gray-800 dark:text-neutral-200" width="140" height="47" viewBox="0 0 140 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.3991 8.15082C20.3991 9.61789 19.1416 10.8754 17.6745 10.8754C16.2075 10.8754 14.95 9.61789 14.95 8.15082C14.95 6.68375 16.2075 5.42627 17.6745 5.42627C19.1416 5.42627 20.3991 6.68375 20.3991 8.15082ZM17.6745 13.1109C16.0678 13.1109 14.8103 14.3684 14.8103 15.9752C14.8103 17.582 16.0678 18.8394 17.6745 18.8394C19.2813 18.8394 20.5388 17.582 20.5388 15.9752C20.5388 14.2985 19.2813 13.1109 17.6745 13.1109ZM17.6745 20.7257C16.0678 20.7257 14.7404 22.053 14.7404 23.6598C14.7404 25.2666 16.0678 26.5939 17.6745 26.5939C19.2813 26.5939 20.6087 25.2666 20.6087 23.6598C20.6785 22.053 19.2813 20.7257 17.6745 20.7257ZM17.6745 28.4802C16.0678 28.4802 14.8103 29.7376 14.8103 31.3444C14.8103 32.9512 16.0678 34.2087 17.6745 34.2087C19.2813 34.2087 20.5388 32.9512 20.5388 31.3444C20.5388 29.8075 19.2813 28.4802 17.6745 28.4802ZM17.6745 36.3744C16.2075 36.3744 14.95 37.6319 14.95 39.0989C14.95 40.566 16.2075 41.8235 17.6745 41.8235C19.1416 41.8235 20.3991 40.566 20.3991 39.0989C20.3991 37.6319 19.2115 36.3744 17.6745 36.3744ZM25.2195 12.7616C23.4729 12.7616 22.0059 14.2287 22.0059 15.9752C22.0059 17.7217 23.4729 19.1887 25.2195 19.1887C26.966 19.1887 28.433 17.7217 28.433 15.9752C28.433 14.2287 26.966 12.7616 25.2195 12.7616ZM25.2195 20.3764C23.4031 20.3764 21.8662 21.8434 21.8662 23.7297C21.8662 25.546 23.3332 27.083 25.2195 27.083C27.0358 27.083 28.5728 25.6159 28.5728 23.7297C28.5728 21.8434 27.0358 20.3764 25.2195 20.3764ZM25.2195 28.1309C23.4729 28.1309 22.0059 29.5979 22.0059 31.3444C22.0059 33.0909 23.4729 34.558 25.2195 34.558C26.966 34.558 28.433 33.0909 28.433 31.3444C28.433 29.5979 26.966 28.1309 25.2195 28.1309ZM32.9739 19.9572C31.0179 19.9572 29.2714 21.564 29.2714 23.6598C29.2714 25.6159 30.8781 27.3624 32.9739 27.3624C35.0698 27.3624 36.6765 25.7556 36.6765 23.6598C36.5368 21.564 34.93 19.9572 32.9739 19.9572ZM10.0598 13.4602C8.73243 13.4602 7.61466 14.578 7.61466 15.9053C7.61466 17.2327 8.73243 18.3504 10.0598 18.3504C11.3871 18.3504 12.5049 17.2327 12.5049 15.9053C12.5049 14.578 11.457 13.4602 10.0598 13.4602ZM10.0598 21.075C8.59271 21.075 7.47494 22.1927 7.47494 23.6598C7.47494 25.1269 8.59271 26.2446 10.0598 26.2446C11.5268 26.2446 12.6446 25.1269 12.6446 23.6598C12.6446 22.1927 11.5268 21.075 10.0598 21.075ZM10.0598 28.8295C8.73243 28.8295 7.61466 29.9472 7.61466 31.2746C7.61466 32.6019 8.73243 33.7197 10.0598 33.7197C11.3871 33.7197 12.5049 32.6019 12.5049 31.2746C12.5049 29.9472 11.457 28.8295 10.0598 28.8295ZM2.445 21.4941C1.18752 21.4941 0.209473 22.4722 0.209473 23.7297C0.209473 24.9871 1.18752 25.9652 2.445 25.9652C3.70249 25.9652 4.68053 24.9871 4.68053 23.7297C4.68053 22.4722 3.70249 21.4941 2.445 21.4941Z" fill="currentColor" />
                                    <path d="M64.4812 18.9092C64.2018 18.9092 63.9922 19.1886 63.9922 19.3982V38.7495C63.9922 39.0289 64.2716 39.2385 64.4812 39.2385H66.7866C67.066 39.2385 67.2756 38.9591 67.2756 38.7495V19.3982C67.2756 19.1188 66.9962 18.9092 66.7866 18.9092H64.4812Z" fill="currentColor" />
                                    <path d="M65.7389 10.7358C64.4815 10.7358 63.5034 11.7139 63.5034 12.9714C63.5034 14.2289 64.4815 15.2069 65.7389 15.2069C66.9964 15.2069 67.9745 14.2289 67.9745 12.9714C67.9745 11.7139 66.9266 10.7358 65.7389 10.7358Z" fill="currentColor" />
                                    <path d="M114.082 18.9092C113.803 18.9092 113.593 19.1886 113.593 19.3982V38.7495C113.593 39.0289 113.873 39.2385 114.082 39.2385H116.388C116.667 39.2385 116.877 38.9591 116.877 38.7495V19.3982C116.877 19.1188 116.597 18.9092 116.388 18.9092H114.082Z" fill="currentColor" />
                                    <path d="M115.2 10.7358C113.942 10.7358 112.964 11.7139 112.964 12.9714C112.964 14.2289 113.942 15.2069 115.2 15.2069C116.457 15.2069 117.435 14.2289 117.435 12.9714C117.435 11.7139 116.457 10.7358 115.2 10.7358Z" fill="currentColor" />
                                    <path d="M138.603 37.3525C138.743 37.2127 138.743 37.073 138.743 37.0031C138.743 36.8634 138.743 36.8634 138.743 36.8634C138.743 36.8634 138.743 36.7237 138.603 36.7237C138.603 36.7237 138.463 36.584 138.324 36.584C138.184 36.584 138.184 36.584 138.044 36.584H137.416V38.3305H137.695V37.7018H138.044L138.533 38.3305H138.813L138.184 37.562C138.463 37.6319 138.603 37.4922 138.603 37.3525ZM137.765 37.4922V36.8634H138.254C138.394 36.8634 138.533 36.8634 138.603 37.0031C138.743 37.0031 138.743 37.1429 138.743 37.2826C138.743 37.4223 138.743 37.562 138.603 37.562C138.463 37.562 138.324 37.7018 138.254 37.7018H137.765V37.4922Z" fill="currentColor" />
                                    <path d="M138.114 35.8853C137.276 35.8853 136.507 36.6537 136.507 37.492C136.507 38.3304 137.276 39.0988 138.114 39.0988C138.952 39.0988 139.721 38.3304 139.721 37.492C139.721 36.5839 139.022 35.8853 138.114 35.8853ZM138.114 38.9591C137.276 38.9591 136.647 38.3304 136.647 37.492C136.647 36.6537 137.276 36.025 138.114 36.025C138.952 36.025 139.581 36.6537 139.581 37.492C139.581 38.3304 138.883 38.9591 138.114 38.9591Z" fill="currentColor" />
                                    <path d="M83.6928 22.0531C83.9722 22.0531 84.1818 21.7737 84.1818 21.5641V19.2587C84.1818 18.9793 83.9024 18.7697 83.6928 18.7697H78.7327V11.3645C78.7327 11.0851 78.4533 10.8755 78.2437 10.8755H75.9383C75.6588 10.8755 75.4493 11.1549 75.4493 11.3645V18.7697H73.0042C72.7247 18.7697 72.5151 19.0491 72.5151 19.2587V21.5641C72.5151 21.8436 72.7946 22.0531 73.0042 22.0531H75.4493V33.2308C75.4493 36.6539 77.7547 38.8895 81.108 38.8895H83.5531C83.8325 38.8895 84.0421 38.61 84.0421 38.4004V36.0951C84.0421 35.8156 83.7626 35.606 83.5531 35.606H81.4573C79.8505 35.606 78.7327 34.4883 78.7327 32.7418V21.9833L83.6928 22.0531Z" fill="currentColor" />
                                    <path d="M132.735 22.0531C133.014 22.0531 133.224 21.7737 133.224 21.5641V19.2587C133.224 18.9793 132.944 18.7697 132.735 18.7697H127.775V11.3645C127.775 11.0851 127.495 10.8755 127.286 10.8755H124.98C124.701 10.8755 124.491 11.1549 124.491 11.3645V18.7697H122.046C121.767 18.7697 121.557 19.0491 121.557 19.2587V21.5641C121.557 21.8436 121.837 22.0531 122.046 22.0531H124.491V33.2308C124.491 36.6539 126.797 38.8895 130.15 38.8895H132.595C132.874 38.8895 133.084 38.61 133.084 38.4004V36.0951C133.084 35.8156 132.805 35.606 132.595 35.606H130.36C128.753 35.606 127.635 34.4883 127.635 32.7418V21.9833L132.735 22.0531Z" fill="currentColor" />
                                    <path d="M49.8106 22.053V38.5401C49.8106 38.8195 50.09 39.0291 50.2996 39.0291H52.605C52.8844 39.0291 53.094 38.7497 53.094 38.5401V22.053H58.5431C58.8226 22.053 59.0321 21.7736 59.0321 21.564V19.2586C59.0321 18.9792 58.7527 18.7696 58.5431 18.7696H53.094V14.4383C53.094 12.6918 54.3515 11.5041 55.8186 11.5041H58.5431C58.8226 11.5041 59.0321 11.2247 59.0321 11.0151V8.70973C59.0321 8.43028 58.7527 8.2207 58.5431 8.2207H55.9583C52.5351 8.2207 49.8106 11.085 49.8106 14.3684V18.7696H47.3655C47.086 18.7696 46.8765 19.049 46.8765 19.2586V21.564C46.8765 21.8435 47.1559 22.053 47.3655 22.053H49.8106Z" fill="currentColor" />
                                    <path d="M106.258 21.2148C104.442 19.2587 101.857 18.1409 99.1321 18.1409C96.5473 18.1409 93.9625 19.2587 92.3557 20.8655V8.57008C92.3557 8.29064 92.0763 8.08105 91.8667 8.08105H89.5613C89.2818 8.08105 89.0723 8.3605 89.0723 8.57008V28.8994C89.0723 36.4443 94.1022 39.7278 99.0623 39.7278C103.952 39.7278 109.052 36.3745 109.052 28.8994C109.052 25.8954 108.074 23.1709 106.258 21.2148ZM99.0623 36.584C94.1022 36.584 92.2858 32.6719 92.2858 28.9693C92.2858 24.4284 95.0104 21.4244 99.0623 21.4244C103.114 21.4244 105.839 24.4982 105.839 28.9693C105.769 32.6719 104.022 36.584 99.0623 36.584Z" fill="currentColor" />
                                </svg>
                                <!-- End Icon Block -->
                            </div>
                        </div>
                        <div class="hs-carousel-slide px-1">
                            <div class="flex justify-center items-center h-full p-6">
                                <!-- Icon Block -->
                                <svg class="w-auto h-8 mx-auto text-gray-800 dark:text-neutral-200" width="140" height="47" viewBox="0 0 140 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path d="M96.2674 23.8697C93.7525 23.5204 92.7744 22.8916 92.8443 21.9136C92.984 20.1671 95.1497 19.9575 96.477 20.0274C99.0619 20.2369 99.6207 22.4725 99.6207 22.7519L102.136 22.5423C101.996 20.9355 100.669 17.7918 96.8962 17.5124C94.8004 17.3727 92.984 17.7918 91.7964 18.8397C90.8882 19.6082 90.1197 20.7958 89.98 21.9835C89.7006 25.8258 93.473 26.3847 95.8483 26.734C98.8523 27.1531 99.5509 27.5723 99.481 28.69C99.481 29.2489 99.1317 29.8078 98.7126 30.1571C98.0838 30.6461 96.8263 30.8557 95.5688 30.716C92.7046 30.4365 92.495 28.6202 92.495 28.2709L89.98 28.3407C89.98 29.8777 91.0279 32.8817 95.2894 33.3707C97.5948 33.6501 99.481 32.9515 100.459 32.2529C101.577 31.4146 102.206 30.0174 102.275 28.69C102.485 24.708 98.6427 24.219 96.2674 23.8697Z" fill="currentColor" />
                                        <path d="M110.659 30.7161C114.431 30.7161 114.152 26.4546 114.152 26.4546V17.9316H117.086V26.3847C117.086 26.3847 117.086 26.4546 117.086 26.6642C117.086 27.9217 116.946 33.3009 110.728 33.3009H110.519C104.301 33.3009 104.162 27.9915 104.162 26.6642C104.162 26.5245 104.162 26.3847 104.162 26.3847V17.9316H107.096V26.3847C107.166 26.3847 106.886 30.7161 110.659 30.7161Z" fill="currentColor" />
                                        <path d="M136.926 28.3405C136.088 29.8076 134.411 30.6459 132.595 30.6459C130.08 30.6459 128.054 29.0392 127.705 26.5242H139.93C139.93 26.1749 139.93 25.6859 139.93 25.3366C139.93 20.5861 136.717 17.5122 132.455 17.5122C128.194 17.5122 124.771 20.5162 124.771 25.3366C124.771 30.1569 128.194 33.2308 132.455 33.2308C135.11 33.2308 137.625 32.113 139.022 29.8775L136.926 28.3405ZM132.525 20.2368C134.97 20.2368 136.717 21.7737 137.136 24.2887H127.774C128.124 21.7038 130.01 20.2368 132.525 20.2368Z" fill="currentColor" />
                                        <path d="M80.9681 17.582C78.8723 17.582 76.7066 18.5601 75.7286 20.2367V17.8615H72.7944V40.2168H75.7286V30.7158C76.7066 32.4623 78.8723 33.3006 80.9681 33.3006C85.0898 33.3006 88.513 30.2966 88.513 25.4762C88.513 20.7257 85.0898 17.582 80.9681 17.582ZM80.6886 30.576C78.2435 30.576 75.6587 28.8295 75.6587 25.616C75.6587 22.4024 78.1737 20.3066 80.8284 20.3066C83.5529 20.3066 85.7186 22.3325 85.7186 25.3365C85.6487 28.4104 83.3433 30.576 80.6886 30.576Z" fill="currentColor" />
                                        <path d="M122.605 9.68799H119.67V32.9515H122.605V9.68799Z" fill="currentColor" />
                                        <path d="M64.4113 17.4424C64.3414 17.4424 64.2716 17.4424 64.2017 17.4424C64.2017 17.4424 61.6867 17.4424 59.3115 18.4204L59.5909 19.1889L60.1498 20.7957C60.9881 20.4464 62.3853 20.0272 64.2017 19.9574C64.2716 19.9574 64.3414 19.9574 64.4113 19.9574C67.6249 19.9574 67.6947 22.8915 67.6947 22.8915V23.6599L62.6648 23.5901C62.3155 23.5901 60.2895 23.5901 58.8225 24.9873C58.4732 25.3366 58.1937 25.6859 57.9841 26.1051C57.7047 26.7338 57.4951 27.4324 57.4951 28.2009C57.4951 29.1789 57.7746 30.0871 58.1937 30.8556C58.4033 31.2049 58.6827 31.5542 58.9622 31.8336C59.9402 32.7418 61.3374 33.3007 62.8744 33.3007C63.0141 33.3007 63.1538 33.3007 63.2237 33.3007C64.9702 33.2308 66.577 32.5322 67.6249 30.8556V32.9514H70.2097V23.4504C70.2796 21.0053 68.7426 17.4424 64.4113 17.4424ZM63.1538 30.9254C62.2456 30.9953 60.1498 30.5063 60.1498 28.2009C60.1498 27.5721 60.7087 26.1051 62.5251 26.1051C64.3414 26.1051 67.555 26.1051 67.555 26.1051C67.6249 28.8995 65.9482 30.7857 63.1538 30.9254Z" fill="currentColor" />
                                        <path d="M49.1118 30.3667C44.4311 30.3667 40.8682 26.5942 40.8682 21.9136C40.8682 17.233 44.501 13.3906 49.1118 13.3906C51.3473 13.3906 53.3034 14.2988 54.7704 15.696L56.5169 13.3208C54.6307 11.5743 51.976 10.5264 49.1118 10.5264C42.8243 10.5264 37.8643 15.6262 37.8643 21.9136C37.8643 28.201 42.8243 33.3008 49.1118 33.3008C51.6966 33.3008 54.002 32.4625 55.8183 31.1351L54.8403 28.4106C53.2335 29.5284 51.0678 30.3667 49.1118 30.3667Z" fill="currentColor" />
                                        <path d="M0 30.2965H3.63273V28.061H8.24351V30.2965H11.8064V12.9712H0V30.2965Z" fill="currentColor" />
                                        <path d="M18.0938 8.08105C17.5349 8.08105 17.1157 8.50022 17.1157 9.0591C17.1157 9.61798 17.5349 10.0371 18.0938 10.0371C18.6526 10.0371 19.0718 9.61798 19.0718 9.0591C19.1417 8.57008 18.6526 8.08105 18.0938 8.08105Z" fill="currentColor" />
                                        <path d="M18.0938 12.6221C17.5349 12.6221 17.1157 13.0412 17.1157 13.6001C17.1157 14.159 17.5349 14.5782 18.0938 14.5782C18.6526 14.5782 19.0718 14.159 19.0718 13.6001C19.1417 13.1111 18.6526 12.6221 18.0938 12.6221Z" fill="currentColor" />
                                        <path d="M18.0938 17.2329C17.5349 17.2329 17.1157 17.6521 17.1157 18.211C17.1157 18.7698 17.5349 19.189 18.0938 19.189C18.6526 19.189 19.0718 18.7698 19.0718 18.211C19.1417 17.6521 18.6526 17.2329 18.0938 17.2329Z" fill="currentColor" />
                                        <path d="M22.7744 8.08105C22.2155 8.08105 21.7964 8.50022 21.7964 9.0591C21.7964 9.61798 22.2155 10.0371 22.7744 10.0371C23.3333 10.0371 23.7525 9.61798 23.7525 9.0591C23.7525 8.57008 23.3333 8.08105 22.7744 8.08105Z" fill="currentColor" />
                                        <path d="M22.7744 12.6221C22.2155 12.6221 21.7964 13.0412 21.7964 13.6001C21.7964 14.159 22.2155 14.5782 22.7744 14.5782C23.3333 14.5782 23.7525 14.159 23.7525 13.6001C23.7525 13.1111 23.3333 12.6221 22.7744 12.6221Z" fill="currentColor" />
                                        <path d="M22.7744 17.2329C22.2155 17.2329 21.7964 17.6521 21.7964 18.211C21.7964 18.7698 22.2155 19.189 22.7744 19.189C23.3333 19.189 23.7525 18.7698 23.7525 18.211C23.7525 17.6521 23.3333 17.2329 22.7744 17.2329Z" fill="currentColor" />
                                        <path d="M27.3154 8.08105C26.7566 8.08105 26.3374 8.50022 26.3374 9.0591C26.3374 9.61798 26.7566 10.0371 27.3154 10.0371C27.8743 10.0371 28.2935 9.61798 28.2935 9.0591C28.2935 8.57008 27.8743 8.08105 27.3154 8.08105Z" fill="currentColor" />
                                        <path d="M27.3154 12.6221C26.7566 12.6221 26.3374 13.0412 26.3374 13.6001C26.3374 14.159 26.7566 14.5782 27.3154 14.5782C27.8743 14.5782 28.2935 14.159 28.2935 13.6001C28.2935 13.1111 27.8743 12.6221 27.3154 12.6221Z" fill="currentColor" />
                                        <path d="M27.3154 17.2329C26.7566 17.2329 26.3374 17.6521 26.3374 18.211C26.3374 18.7698 26.7566 19.189 27.3154 19.189C27.8743 19.189 28.2935 18.7698 28.2935 18.211C28.2935 17.6521 27.8743 17.2329 27.3154 17.2329Z" fill="currentColor" />
                                        <path d="M6.07776 24.2885C2.79433 24.2186 0.0697788 26.8035 -8.15348e-05 30.017C-0.0699418 33.2306 2.51489 35.9552 5.79832 36.0949C9.08176 36.1647 11.7364 33.5799 11.8762 30.2965C11.8762 27.0829 9.29134 24.3584 6.07776 24.2885ZM7.89413 32.3224H3.91209V28.3404H7.89413V32.3224Z" fill="currentColor" />
                                        <path d="M6.07776 24.2885C2.79433 24.2186 0.0697788 26.8035 -8.15348e-05 30.017C-0.0699418 33.2306 2.51489 35.9552 5.79832 36.0949C9.08176 36.1647 11.7364 33.5799 11.8762 30.2965C11.8762 27.0829 9.29134 24.3584 6.07776 24.2885ZM7.89413 32.3224H3.91209V28.3404H7.89413V32.3224Z" fill="white" fill-opacity="0.2" />
                                        <path d="M5.93812 19.1189C9.21766 19.1189 11.8762 16.4603 11.8762 13.1808C11.8762 9.90126 9.21766 7.24268 5.93812 7.24268C2.65859 7.24268 0 9.90126 0 13.1808C0 16.4603 2.65859 19.1189 5.93812 19.1189Z" fill="white" />
                                        <path d="M16.627 23.1709V35.3266H28.7826V23.1709H16.627ZM26.3375 31.9733H19.1419V30.4364H26.3375V31.9733ZM26.3375 27.9913H19.1419V26.4543H26.3375V27.9913Z" fill="currentColor" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="140" height="47" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <!-- End Icon Block -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button type="button" class="hs-carousel-prev hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-11.5 h-full text-blue-800 hover:bg-blue-800/10 focus:outline-hidden focus:bg-blue-800/10 rounded-s-lg dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                <span class="text-2xl" aria-hidden="true">
                    <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m15 18-6-6 6-6"></path>
                    </svg>
                </span>
                <span class="sr-only">Previous</span>
            </button>
            <button type="button" class="hs-carousel-next hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-11.5 h-full text-blue-800 hover:bg-blue-800/10 focus:outline-hidden focus:bg-blue-800/10 rounded-e-lg dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                <span class="sr-only">Next</span>
                <span class="text-2xl" aria-hidden="true">
                    <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                </span>
            </button>
        </div>
        <!-- End Slider -->


    </section>

    <section id="footer" class="font-poppins">
        <!-- ========== FOOTER ========== -->
        <footer class="mt-auto bg-gray-900 w-full dark:bg-neutral-950">
            <div class="mt-auto w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 lg:pt-20 mx-auto">
                <!-- Grid -->
                <div class="grid grid-cols-3 md:grid-cols-5 lg:grid-cols-6 gap-8">
                    <div class="col-span-full lg:col-span-1">
                        <a class="flex-none text-xl font-semibold text-white focus:outline-hidden focus:opacity-80" href="#" aria-label="Brand">
                            <img src="{{ asset('storage/logo AWD.png') }}" alt="Logo" />
                        </a>
                    </div>
                    <!-- End Col -->

                    <div class="col-span-1">
                        <h4 class="font-semibold text-gray-100">Nos services</h4>

                        <div class="mt-3 grid space-y-3">
                            <p><a class="inline-flex gap-x-2 text-gray-400 hover:text-blue-theme focus:outline-hidden focus:bg-blue-theme dark:text-neutral-400 dark:hover:bg-blue-theme dark:focus:bg-blue-theme" href="#">AWDPAY (Fintech)
                                </a></p>
                            <p><a class="inline-flex gap-x-2 text-gray-400 hover:text-blue-theme focus:outline-hidden focus:bg-blue-theme dark:text-neutral-400 dark:hover:bg-blue-theme dark:focus:bg-blue-theme" href="#">Développement logiciel
                                </a></p>
                            <p><a class="inline-flex gap-x-2 text-gray-400 hover:text-blue-theme focus:outline-hidden focus:bg-blue-theme dark:text-neutral-400 dark:hover:bg-blue-theme dark:focus:bg-blue-theme" href="#">Design digital</a></p>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="col-span-2">
                        <h4 class="font-semibold text-gray-100">Entreprise</h4>

                        <div class="mt-3 grid space-y-3">
                            <p><a class="inline-flex gap-x-2 text-gray-400 hover:text-blue-theme focus:outline-hidden focus:bg-blue-theme dark:text-neutral-400 dark:hover:bg-blue-theme dark:focus:bg-blue-theme" href="#">À propos de nous</a></p>
                            <p><a class="inline-flex gap-x-2 text-gray-400 hover:text-blue-theme focus:outline-hidden focus:bg-blue-theme dark:text-neutral-400 dark:hover:bg-blue-theme dark:focus:bg-blue-theme" href="#">Solutions par pays</a></p>
                            <p><a class="inline-flex gap-x-2 text-gray-400 hover:text-blue-theme focus:outline-hidden focus:bg-blue-theme dark:text-neutral-400 dark:hover:bg-blue-theme dark:focus:bg-blue-theme" href="#">Faire un devis en -24h / Contact
                                </a></p>
                            <p><a class="inline-flex gap-x-2 text-gray-400 hover:text-blue-theme focus:outline-hidden focus:bg-blue-theme dark:text-neutral-400 dark:hover:bg-blue-theme dark:focus:bg-blue-theme" href="#">Témoignages & études de cas
                                </a></p>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="col-span-2 sm:col-span-3 md:col-span-2">
                        <h4 class="font-semibold text-gray-100">Restez à jour !</h4>

                        <form>
                            <div class="mt-4 flex flex-col items-center gap-2 sm:flex-row sm:gap-3 bg-white rounded-lg p-2 dark:bg-neutral-900">
                                <div class="w-full">
                                    <label for="hero-input" class="sr-only">Subscribe</label>
                                    <input type="text" id="hero-input" name="hero-input" class="py-2.5 sm:py-3 px-4 block w-full border-transparent rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-transparent dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter your email">
                                </div>
                                <a class="w-full sm:w-auto whitespace-nowrap p-3 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-theme text-white hover:bg-blue-600 focus:outline-hidden focus:bg-blue-600 disabled:opacity-50 disabled:pointer-events-none" href="#">
                                    Subscribe
                                </a>
                            </div>
                            <p class="mt-3 text-sm text-gray-400">
                                Lorem ipsum dolor sit amet.
                            </p>
                        </form>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Grid -->

                <div class="mt-5 sm:mt-12 grid gap-y-2 sm:gap-y-0 sm:flex sm:justify-between sm:items-center">
                    <div class="flex flex-wrap justify-between items-center gap-2">
                        <p class="text-sm text-gray-400 dark:text-neutral-400">
                            Copyright © 2025 AWD SARL.
                        </p>
                    </div>
                    <!-- End Col -->

                    <!-- Social Brands -->
                    <div>
                        <a class="size-10 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-white hover:bg-blue-theme/80 focus:outline-hidden focus:bg-blue-theme/80 disabled:opacity-50 disabled:pointer-events-none" href="https://www.facebook.com/AGENCEWEBDIGITAL/">
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg>
                        </a>
                        <a class="size-10 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-white hover:bg-blue-theme/80 focus:outline-hidden focus:bg-blue-theme/80 disabled:opacity-50 disabled:pointer-events-none" href="#">
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                            </svg>
                        </a>
                        <a class="size-10 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-white hover:bg-blue-theme/80 focus:outline-hidden focus:bg-blue-theme/80  disabled:opacity-50 disabled:pointer-events-none" href="#">
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                            </svg>
                        </a>
                        <a class="size-10 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-white hover:bg-blue-theme/80 focus:outline-hidden focus:bg-blue-theme/80  disabled:opacity-50 disabled:pointer-events-none" href="#">
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                            </svg>
                        </a>
                        <a class="size-10 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-white hover:bg-blue-theme/80 focus:outline-hidden focus:bg-blue-theme/80  disabled:opacity-50 disabled:pointer-events-none" href="#">
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111C0 9.186.756 8.43 1.68 8.43h1.682v1.68zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68v-4.21zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682H5.89zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682h4.21zm6.749 1.682c0-.926.755-1.682 1.68-1.682.925 0 1.681.756 1.681 1.681s-.756 1.681-1.68 1.681h-1.681V5.89zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68v4.21zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68 0-.925.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681h-4.21z" />
                            </svg>
                        </a>
                    </div>
                    <!-- End Social Brands -->
                </div>
            </div>
        </footer>
        <!-- ========== END FOOTER ========== -->
    </section>
    <script src="./node_modules/preline/dist/preline.js"></script>
</body>

</html>