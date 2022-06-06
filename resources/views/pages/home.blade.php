@extends('layouts.web')
@section('title', 'Perfect Resume & CV Writing Service In UAE')
@section('description', 'Get Professional CV Writing Services In UAE from Perfect CV makers at affordable price.
    Perfectresume.ae do free resume assessment for successful outcome')
@section('canonical', config('app.app_url'))

@section('content')

    <style>
        .swiper-button-next:after {
            font-size: 20px;
        }

        .swiper-button-prev:after {
            font-size: 20px;
        }

        .swiper-button-next {
            margin-top: 3rem;
            color: white;
            left: 0;
            margin-left: 6rem;
        }


        .hero {
            /* position: relative;  */
            /* height: 00%; */
            /* width: 100%; */
            /* top: -540px; */
            /* display: flex; */
            /* align-items: center; */
            /* justify-content: center; */
            background-image: url('../../imgs/resume1-scaled.jpg');
            background-size: cover;
        }

        .hero::before {
            content: "";
            position: absolute;
            top: 0px;
            right: 0px;
            bottom: 0px;
            left: 0px;
            /* background-color: rgba(0,0,0,0.25); */
            background-color: rgba(216, 160, 109, 0.73);
        }


        @media(max-width:767px) {
            .swiper-button-next {
                left: auto !important;
                margin-left: 0;
            }
        }

        .swiper-button-prev {
            margin-top: 3rem;
            color: white;
        }

        @media(max-width:375px) {
            .swiper-button-next {
                margin-top: 5rem;
            }

            .swiper-button-prev {
                margin-top: 5rem;
            }
        }

    </style>

    {{-- topbar+navbar+hero --}}

    <div class=" relative">
        {{-- Topbar --}}
        <div class="container mx-auto">
            <div class=" hidden md:flex   flex-row justify-between py-6">
                <div class="text-white space-x-3">
                    <a href="javascript:void(Tawk_API.toggle())" class="border border-white p-2">
                        Live Chat
                    </a>
                    <a href="tel:{{ '+' . $web_setting->contact }}"><i
                            class=" fa fa-phone mr-2"></i>{{ '+' . $web_setting->contact }}</a>
                    <a href="mailto:{{ $web_setting->email }}"><i
                            class="fa fa-envelope mr-2 "></i>{{ $web_setting->email }}</a>
                </div>

                <div class="text-white space-x-3">
                    <a href="https://api.whatsapp.com/send/?phone={{$web_setting->contact}}&text=how+can+I+get+a+fresh+resume%3F&app_absent=0"
                        target="blank"><i class="fa fa-whatsapp"></i></a>
                    <a href="{{ $web_setting->facebook_link }}"><i class="fa fa-facebook" target="blank"></i></a>
                    <a href="https://twitter.com/PerfectResumeae"><i class="fa fa-twitter" target="blank"></i></a>
                    <a href="{{ $web_setting->instagram_link }}" target="blank"><i class="fa fa-instagram"></i></a>
                </div>
            </div>

            <div class="md:hidden flex flex-col items-center py-6 ">
                <div class="text-white space-x-3 my-2 ">
                    <a href="javascript:void(Tawk_API.toggle())" class="border border-white p-2 ">
                        Live Chat
                    </a>
                </div>
                <div class="text-white space-x-3">
                    <a href="tel:{{ '+' . $web_setting->contact }}"><i
                            class=" fa fa-phone mr-2"></i>{{ '+' . $web_setting->contact }}</a>
                </div>
                <div class="text-white space-x-3">
                    <a href="mailto:{{ $web_setting->email }}"><i
                            class="fa fa-envelope mr-2 "></i>{{ $web_setting->email }}</a>
                </div>

                <div class="text-white space-x-3">
                    <a href="https://api.whatsapp.com/send/?phone={{$web_setting->contact}}&text=how+can+I+get+a+fresh+resume%3F&app_absent=0"
                        target="blank"><i class="fa fa-whatsapp"></i></a>
                    <a href="{{ $web_setting->facebook_link }}"><i class="fa fa-facebook" target="blank"></i></a>
                    <a href="https://twitter.com/PerfectResumeae"><i class="fa fa-twitter" target="blank"></i></a>
                    <a href="{{ $web_setting->instagram_link }}" target="blank"><i class="fa fa-instagram"></i></a>
                </div>
            </div>

        </div>

        {{-- <!-- Navbar --> --}}
        <div class="container mx-auto w-full text-gray-700 ">
            <div x-data="{ open: false }"
                class="bg-white flex flex-col px-4 mx-auto lg:items-center lg:justify-between lg:flex-row  lg:px-12">
                <div class=" flex flex-row items-center justify-between">
                    <a class="flex items-center py-2 lg:py-0  px-2" href="{{ route('home') }}">
                        <img src="{{ asset('imgs/cv-writers-ireland-logo.png') }}" alt="Logo" class="h-20">
                    </a>
                    <button class="lg:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                            <path x-show="!open" fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                            <path x-show="open" fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd" style="display: none;"></path>
                        </svg>
                    </button>

                </div>
                <nav :class="{ 'flex': open, 'hidden': !open }"
                    class="flex-col flex-grow pb-4 md:pb-0 hidden lg:flex lg:justify-end lg:flex-row lg:space-x-4 xl:space-x-8 lg:h-[108px] lg:items-center">
                    <div>
                        <a href="{{ route('home') }}"
                            class="block font-semibold p-2 lg:px-2 lg:py-10 hover:bg-primary-four hover:text-white lg:h-full {{ request()->routeIs('home') ? ' bg-primary-four text-white ' : '' }}">Home</a>
                    </div>

                    <div>
                        <a href="{{ route('about') }}"
                            class="block font-semibold p-2 lg:px-2 lg:py-10 hover:bg-primary-four hover:text-white lg:h-full {{ request()->routeIs('about') ? ' bg-primary-four text-white ' : '' }}">About</a>
                    </div>
                    <div class="relative " @click.away="open = false" x-data="{ open: false }">

                        <button @click="open = !open"
                            class=" block  text-left font-semibold p-2 lg:px-2 lg:py-10 hover:bg-primary-four hover:text-white lg:h-full {{ request()->routeIs('services.one') || request()->routeIs('services.two') || request()->routeIs('services.three') || request()->routeIs('services.four') ? ' bg-primary-four text-white' : '' }}">
                            <span>Services</span>
                            <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }"
                                class="inline w-4 h-4 ml-1 transition-transform duration-200 transform md:-mt-1 rotate-0">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="hidden absolute right-0 w-full  origin-top-right rounded-md shadow-lg md:w-48 z-40"
                            :class="{ 'hidden': !open }" style="display: none;">
                            <div class="px-2 py-2 rounded-md shadow bg-white">
                                <ul>
                                    @foreach ( $services as $service )
                                    <li><a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-orange-200 focus:bg-orange-300 focus:outline-none focus:shadow-outline"
                                        href="{{ route('services.show',$service->slug) }}">{{ $service->name }}</a></li>    
                                    @endforeach
                                    {{-- <li><a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-blue-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                            href="{{ route('services.two') }}">LinkedIn Profile Writing</a></li>
                                    <li><a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-blue-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                            href="{{ route('services.three') }}">Resume Editing</a></li>
                                    <li><a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-blue-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                            href="{{ route('services.four') }}">CV Editing</a></li> --}}
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="{{ route('price') }}"
                            class="block font-semibold p-2 lg:px-2 lg:py-10 hover:bg-primary-four hover:text-white lg:h-full {{ request()->routeIs('price') ? ' bg-primary-four text-white' : '' }}">Prices</a>
                    </div>
                    <div> <a href="{{ route('samples') }}"
                            class="block font-semibold p-2 lg:px-2 lg:py-10 hover:bg-primary-four hover:text-white lg:h-full {{ request()->routeIs('samples') ? ' bg-primary-four text-white' : '' }}">Samples</a>
                    </div>
                    <div> <a href="{{ route('reviews') }}"
                            class="block font-semibold p-2 lg:px-2 lg:py-10 hover:bg-primary-four hover:text-white lg:h-full {{ request()->routeIs('reviews') ? ' bg-primary-four text-white' : '' }}">Testimonials</a>
                    </div>
                    {{-- <div> <a href="{{ route('blogs') }}"
                            class="block font-semibold p-2 lg:px-2 lg:py-10 hover:bg-primary-four hover:text-white lg:h-full {{ request()->routeIs('blogs') || request()->routeIs('blog.show') ? ' bg-primary-four text-white' : '' }}">Blog</a>
                    </div> --}}
                    <div> <a href="{{ route('contact') }}"
                            class="relative block font-semibold p-2 lg:px-2 lg:py-10 hover:bg-primary-four hover:text-white lg:h-full {{ request()->routeIs('contact') ? ' bg-primary-four text-white' : '' }}">Contact</a>
                    </div>
                    <a href="{{ route('order') }}"
                        class="relative block font-semibold p-2  lg:p-10 bg-primary-two text-white lg:h-full  "><span
                            class="lg:absolute lg:left-[22%]  lg:top-[37%] {{ request()->routeIs('blogs') || request()->routeIs('order') ? ' bg-primary-four text-white' : '' }}">Order</span></a>


                </nav>
            </div>
        </div>

        {{-- <!-- Hero --> --}}
        <div class="container mx-auto  py-12">
            <div class="flex flex-col space-y-4 my-4 max-w-screen-xl md:my-0 lg:flex-row ">
                <div class="w-full lg:py-5 px-4">
                    <div class=" space-y-4">
                        <div class="mx-2 text-center lg:text-left space-y-4">
                            <h1 class="text-2xl lg:text-4xl text-white ">
                                <p class="md:mb-2 lg:mb-4"><b class="bg-primary-one px-2">Professional CV Writing </b></p>


                                <b class="bg-primary-one px-2">Service Ireland that Brings You Closer to Your Dream Job</b>
                            </h1>
                            <p>
                                <b class="bg-white text-sm lg:text-xl px-2 font-semibold"> Get tailored CVs, cover letters,
                                    personal statements, and LinkedIn Profile writing by the experts. </b>
                            </p>
                            <p class="text-white font-semibold text-lg">
                                No more waiting, rejections, and job stress. Seek guidance from the industry professionals
                                for a bright career.

                            </p>
                            <div>
                                <a href="{{ route('order') }}" class="mt-4 pb-8 group">
                                    <span class="bg-primary-two text-white font-semibold p-2 group-hover:bg-primary-one">Get
                                        an Awesome Resume
                                        Now</span>
                                    <span
                                        class="bg-primary-one p-2 -ml-2 group-hover:bg-primary-two group-hover:text-white"><i
                                            class="fa fa-long-arrow-right"></i></span>
                                </a>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="hero  absolute -z-10  w-full h-full top-0 left-0"></div>
        {{-- bg-hero-bg-two bg-no-repeat bg-cover opacity-30  opacity-20 --}}
    </div>

    {{-- Services --}}
    <section class="container mx-auto max-w-screen-xl pb-4 -mt-8">
        <div class=" grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 px-4">
            <div class="py-16 px-8 shadow-xl bg-white">
                <p class="text-primary-two uppercase text-xl mt-6 text-center sm:text-left">
                    <strong>services</strong><br>we<br>offer
                </p>
            </div>
            <div class="py-16 px-8 shadow-xl bg-[#B8795B]">
                <p class="text-white uppercase text-2xl text-center"><i class="fa fa-file-text-o text-white py-3"
                        style="font-size: 50px;" aria-hidden="true"></i><br>RESUME
                    WRITING</p>
            </div>
            <div class="py-16 px-8 shadow-xl bg-[#b16b49]">
                <p class="text-white uppercase text-2xl text-center"><i class="fa fa-newspaper-o text-white py-3"
                        style="font-size: 50px;" aria-hidden="true"></i><br>CV<br>
                    WRITING</p>
            </div>
            <div class="py-16 px-8 shadow-xl bg-[#8D553A]">
                <p class="text-white uppercase text-2xl text-center"><i class="fa fa-list-alt text-white py-3"
                        style="font-size: 50px;" aria-hidden="true"></i><br>COVER<br>LETTER</p>
            </div>
            <div class="py-16 px-8 shadow-xl bg-[#7B4A33]">
                <p class="text-white uppercase text-2xl text-center"><i class="fa fa-files-o text-white py-3"
                        style="font-size: 50px;" aria-hidden="true"></i><br>LINKDIN<br>PROFILE</p>
            </div>

        </div>
        <div class="text-center my-8 ">
            <a href="{{ route('order') }}" class="group">
                <span class="bg-primary-two text-white font-semibold p-2 group-hover:bg-primary-one ">Order Now</span>
                <span class="bg-primary-one p-2 -ml-2 group-hover:bg-primary-two group-hover:text-white"><i
                        class="fa fa-long-arrow-right"></i></span>
            </a>
        </div>
    </section>

    {{-- Get dreams --}}
    <section class="bg-primary-two">
        <div class="container px-4 md:px-16 lg:px-24 py-5 mx-auto text-white">
            <div class="space-y-4">
                <h2 class="text-3xl">
                    <strong>How Our Best CV Writers Ireland</strong> Can Help You Get the Interview Call?
                </h2>
                <p>
                    You think your CV is perfect but from a recruiter’s perspective it can lack many things like a strong
                    personal statement, standard formatting, or other features that make the CV outstanding. How about
                    getting it checked by professional CV writers?
                </p>
                <p>
                    You might think it’s unnecessary but this is the most important thing to save yourself from rejection.
                    When you apply for your ideal job, you only have one opportunity to make it to the interview but if you
                    missed that golden chance with a poorly-structured CV, you let go the possibility. We are sure you don’t
                    want to be in this boat.
                </p>
                <p>
                    Our CV writing service Ireland is here to save you from this chaos. No matter if you’re a novice,
                    mid-level career professional or an expert looking to switch jobs, our CV consultant Ireland can make
                    the situation a win-win for you.
                </p>
                <p>
                    Our writers have hands-on experience in writing CVs for all sectors, job roles, and industries. Be it
                    for media and internet, law or accountancy firms, sales and management, medicines or pharmaceutical
                    sectors, talk to our best CV writers Ireland and get your career problems sorted.
                </p>
            </div>
        </div>
    </section>

    {{-- CV Maker --}}
    <section class="px-4 md:px-16 lg:px-24 py-5 ">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2">
            <div class="space-y-4">
                <h3 class="text-2xl py-4">
                    Why Should You Choose Our Professional CV Writers Ireland?
                </h3>
                <p><strong>Premium Quality</strong></p>
                <p>
                    A professional and experienced CV writer is hard to find. If you fortunately get it, the charges can be
                    overwhelming. But what if you get the best CV writers who are also affordable from one platform? That’s
                    what we are here to serve. Our writers can help you with a job-specific CV that will also guarantee the
                    interview call from the desired recruiter. </p>
                <p><strong>Tailored CVs</strong></p>
                <p>
                    So there’s a CV in your email and you drop it everywhere expecting to get the interview call, isn’t it?
                    With the growing competition, a general CV goes directly to the trash. But with our writer's expertise,
                    you can get a tailored resume that increases the chances of getting the interview call within a short
                    time. </p>
                <p><strong>Impeccable Formatting</strong></p>
                <p>A recruiter spends only 60 seconds on your CV. If it’s poorly formatted, they can directly reject it. A
                    well-formatted CV grabs the recruiter’s attention and reflects professionalism. Our Irish CV writers are
                    prolific in this job. They can’t only help in formatting but can also place your education, experience,
                    and skills in a way that will look appealing to HR officers.
                </p>
            </div>
            <div class="my-auto mx-auto relative">
                <img src="{{ asset('imgs/cv-writers-ireland-model-holding-page.jpg') }}" alt="logo"
                    class="w-full">
                    <img src="{{ asset('imgs/cv-writers-ireland-logo.png') }}"
                    class="w-[30%] absolute top-[30%] right-[29%]">
    
            </div>
                                       
        </div>
    </section>

    {{-- <section class="px-4 md:px-16 lg:px-24 py-5 relative">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2">
            <div class="space-y-4">
                <h3 class="text-2xl py-4">
                    Why Should You Choose Our Professional CV Writers Ireland?
                </h3>
                <p><strong>Premium Quality</strong></p>
                <p>
                    A professional and experienced CV writer is hard to find. If you fortunately get it, the charges can be
                    overwhelming. But what if you get the best CV writers who are also affordable from one platform? That’s
                    what we are here to serve. Our writers can help you with a job-specific CV that will also guarantee the
                    interview call from the desired recruiter. </p>
                <p><strong>Impeccable Formatting</strong></p>
                <p>
                    So there’s a CV in your email and you drop it everywhere expecting to get the interview call, isn’t it?
                    With the growing competition, a general CV goes directly to the trash. But with our writer's expertise,
                    you can get a tailored resume that increases the chances of getting the interview call within a short
                    time. </p>
                <p><strong>Tailored CVs</strong></p>
                <p>A recruiter spends only 60 seconds on your CV. If it’s poorly formatted, they can directly reject it. A
                    well-formatted CV grabs the recruiter’s attention and reflects professionalism. Our Irish CV writers are
                    prolific in this job. They can’t only help in formatting but can also place your education, experience,
                    and skills in a way that will look appealing to HR officers.
                </p>
            </div>
            <div class="my-auto mx-auto ">
                <img src="{{ asset('imgs/cv-writers-holding-page.jpg') }}" alt="logo" class="w-full">
            </div>
            <div>
                <img src="{{ asset('imgs/cv-writers-ireland-logo.png') }}"
                    class="w-[10%] absolute  top-[37%] right-[25%]">
            </div>
        </div>
    </section> --}}




    {{-- <!-- Senior Level Help --> --}}
    <section class="bg-primary-one">
        <div class="container px-4 md:px-16 lg:px-24 py-12 mx-auto text-white space-y-4">
            <p class="text-3xl "><strong>I’m Looking for CV Writers Dublin. Can You Help?</strong></p>
            <p>
                Yes, we can. We know professional CV writers Dublin aren’t easily available online. If you want the best
                writer, you need to dig deep on the Internet or freelancing websites. But not to worry as we have a solution
                for this query. We have experts, career professionals and writers from Dublin who can help you specifically
                in getting a job in this city. If you are concerned about the Dublin job market, you also don’t need to
                stress as our writers will write your resume following the best and current job market trends.
            </p>
            <p>
                Not only CV writing service Dublin, we also serve in Galway, Cork, Waterford, Limerick, Belfast, Kinsale,
                Sligo, and all other cities in Ireland.
            </p>
        </div>
    </section>

    {{-- Reasons --}}
    <section class="bg-primary-two py-10">
        <div class="container px-4 md:px-16 lg:px-24 py-5 mx-auto">
            <div class="text-center text-3xl text-white">
                <strong>Services</strong> We Provide
            </div>
            <div class="my-20 grid grid-cols-1 md:grid-cols-2 gap-y-8 md:gap-x-8 mx-auto">
                <div class="text-center text-white space-y-4">
                    <i class="fa fa-edit  text-primary-one border-8 bg-white p-12 rounded-full hover:bg-primary-one hover:text-white hover:scale-105"
                        style="font-size: 50px;" aria-hidden="true"></i>
                    <p class="text-2xl"><strong>CV Writing</strong></p>
                    <p class="">
                        Get one step closer to your success with a tailored CV that will help you stand out from other
                        candidates. All CVs are written by expert career professionals considering the job description you
                        want to apply for. In addition, we also provide ATS-friendly and optimized CV to ensure maximum
                        exposure to your profiles.
                    </p>
                </div>
                <div class="text-center  text-white space-y-4">
                    <i class="fa fa-file-alt text-primary-one border-8 bg-white p-12  rounded-full hover:bg-primary-one hover:text-white hover:scale-105"
                        style="font-size: 50px;" aria-hidden="true"></i>
                    {{-- class="mx-auto text-primary-one border-8 bg-white p-12 rounded-full hover:bg-primary-one hover:text-white hover:scale-105" --}}
                    {{-- <img src="{{ asset('imgs/icons8-compose-90.png') }}" class=""  style="width: 50px;"/> --}}
                    <p class="text-2xl"><strong>Resume Writing</strong></p>
                    <p class="">
                        CV and Resume both have a massive difference. A resume is a short summary of your work experience
                        and background while a CV describes your whole career in detail. But to compress your career into a
                        one-page summary is a big deal. Only experts can do it professionally. With our resume writing
                        services, we deliver neat and optimized resumes to help you win the job.
                    </p>
                </div>
                <div class="text-center text-white space-y-4">
                    <i class="fa fa-square-pen text-primary-one border-8 bg-white p-12 rounded-full hover:bg-primary-one hover:text-white hover:scale-105"
                        style="font-size: 50px;" aria-hidden="true"></i>
                    <p class="text-2xl"><strong>LinkedIn Profile Writing</strong></p>
                    <p class="">
                        If you’re searching for a job but don’t have a presence on LinkedIn, you are missing a golden
                        opportunity that can lead to your dream job. We also provide LinkedIn profile writing and editing
                        services to increase your digital presence. Our professionals can turn an old and dull profile into
                        an appealing one and can also optimize it using SEO techniques.
                    </p>
                </div>
                <div class="text-center text-white space-y-4">
                    <i class="fa fa-square-check text-primary-one border-8 bg-white p-12 rounded-full hover:bg-primary-one hover:text-white hover:scale-105"
                        style="font-size: 50px;" aria-hidden="true"></i>
                    <p class="text-2xl"><strong>Cover Letter</strong></p>
                    <p class="">
                        A strong CV with a cover letter says a lot about your interest in the job. It also describes your
                        academic background and work experience and gives you a competitive edge over other candidates. But
                        what if your cover letter isn’t appealing? Here we help you get noticed with a job-winning, easy to
                        read, and relevant cover letter to place you on top of other candidates.
                    </p>
                </div>
                <div class="text-center text-white space-y-4">
                    <i class="fa-regular fa-address-card text-primary-one border-8 bg-white p-12 px-10 rounded-full hover:bg-primary-one hover:text-white hover:scale-105"
                        style="font-size: 50px;" aria-hidden="true"></i>
                    <p class="text-2xl"><strong>Personal Statements</strong></p>
                    <p class="">
                        Personal statement is a short brief that describes your education, experience, identity, and skills.
                        It helps recruiters decide whether you’re a good fit for the job or not. That’s why it’s important
                        to get your statements crafted, edited, or proofread by experts. Our professional CV writers can
                        help you write a personal statement that’s tailored fully to your identity and job experience.
                    </p>
                </div>
                <div class="text-center text-white space-y-4">
                    <i class="fa fa-pen text-primary-one border-8 bg-white p-12 rounded-full hover:bg-primary-one hover:text-white hover:scale-105"
                        style="font-size: 50px;" aria-hidden="true"></i>

                    <p class="text-2xl"><strong>CV Editing & Proofreading</strong></p>
                    <p class="">
                        If you have written your CV and looking for an expert opinion, you can always pitch us for help. We
                        provide editing and proofreading service by the top-rated career counsellors to enhance your CV and
                        make it worth the job you want to apply for. Also, we check it for grammatical and formatting errors
                        to make it flawless.
                    </p>
                </div>
            </div>
            <div class="text-center my-8 ">
                <a href="{{ route('price') }}" class="group">
                    <span class="bg-white font-semibold p-2 group-hover:bg-primary-one group-hover:text-white">What about
                        the price</span>
                    <span class="bg-primary-one p-2 text-white -ml-2 group-hover:bg-white group-hover:text-black"><i
                            class="fa fa-long-arrow-right"></i></span>
                </a>
            </div>
        </div>
    </section>

    {{-- how works --}}
    <section class="bg-primary-one py-10">
        <div class="container px-4 md:px-16 lg:px-24 py-5 mx-auto">
            <div class="text-center text-4xl text-white pb-4">
                <strong>How</strong> it works
            </div>
    
            <div class="grid grid-cols-1 md:grid-cols-7 pb-3 my-5">
                <div class="text-white text-center mx-auto">
                    <i class="fa fa-pie-chart text-white py-3" style="font-size: 50px;" aria-hidden="true"></i>
                    <hr class="w-1/2 my-4 mx-auto">
                    <p class="text-lg font-semibold">
                        Choose a service
                    </p>
                </div>
    
                <div class="hidden md:block mx-auto">
                    <i class="fa fa-long-arrow-right text-white py-3" style="font-size: 50px;" aria-hidden="true"></i>
                </div>
    
                <div class="block md:hidden mx-auto">
                    <i class="fa fa-long-arrow-down text-white py-3" style="font-size: 50px;" aria-hidden="true"></i>
                </div>
    
                <div class="text-white text-center">
                    <i class="fa fa-file-text-o text-white py-3" style="font-size: 50px;" aria-hidden="true"></i>
                    <hr class="w-1/2 my-4 mx-auto">
                    <p class="text-lg font-semibold">
                        Fill out order form 
                    </p>
                </div>
    
                <div class="hidden md:block mx-auto">
                    <i class="fa fa-long-arrow-right text-white py-3" style="font-size: 50px;" aria-hidden="true"></i>
                </div>
    
                <div class="block md:hidden mx-auto">
                    <i class="fa fa-long-arrow-down text-white py-3" style="font-size: 50px;" aria-hidden="true"></i>
                </div>
    
                <div class="text-white text-center">
                    <i class="fa fa-comment-o text-white py-3" style="font-size: 50px;" aria-hidden="true"></i>
                    <hr class="w-1/2 my-4 mx-auto">
                    <p class="text-lg font-semibold">
                        Give us the instructions
                    </p>
                </div>
    
                <div class="hidden md:block mx-auto">
                    <i class="fa fa-long-arrow-right text-white py-3" style="font-size: 50px;" aria-hidden="true"></i>
                </div>
    
                <div class="block md:hidden mx-auto">
                    <i class="fa fa-long-arrow-down text-white py-3" style="font-size: 50px;" aria-hidden="true"></i>
                </div>
    
                <div class="text-white text-center">
                    <i class="fa fa-download text-white py-3" style="font-size: 50px;" aria-hidden="true"></i>
                    <hr class="w-1/2 my-4 mx-auto">
                    <p class="text-lg font-semibold">
                        Download your paper
                    </p>
                </div>
    
            </div>
            <hr>
            <p class="text-white text-center text-lg my-2">
                Your resume is the first interaction with your employer. Make the most of this opportunity by getting an
                interview-winning resume created by us.
            </p>
    
            <div class="text-center my-8 ">
                <a href="{{ route('order') }}" class="group">
                    <span class="bg-white font-semibold py-2 px-4 group-hover:bg-primary-two group-hover:text-white">Get
                        Started</span>
                    <span class="bg-primary-two p-2 text-white -ml-2 group-hover:bg-white group-hover:text-black"><i
                            class="fa fa-long-arrow-right"></i></span>
                </a>
            </div>
        </div>
    </section>

    {{-- CHOOSE OUR CV WRITERS --}}
    <section class="px-4 md:px-16 lg:px-24 py-5">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2">
            <div class="space-y-4">
                <h3 class="text-2xl">
                    Why Should You Choose Our CV Writers Ireland?
                </h3>
                <p>
                    We know when you search for CV writing Ireland, you come across a lot of websites that make it hard for
                    you to decide. But to make it smooth, here are some best perks of hiring us that you will love to have:
                </p>
                <ul class="tl-list md:list-disc ml-8 my-4 font-semibold space-y-2">
                    <li>Top-Rated Irish CV Writers</li>
                    <li>Tailored, Optimized & ATS-Friendly Resumes</li>
                    <li>Fast Turnaround Delivery</li>
                    <li>Best CV Templates that you won’t anywhere on the Internet</li>
                    <li>Specialist Dublin CV Writers</li>
                    <li>Tips & Techniques to Enhance Your CV</li>
                    <li>Standard Features in a CV that make it Attractive</li>
                    <li>Unique and Impactful Cover Letters</li>
                    <li>LinkedIn Profile Writing by LI Experts</li>
                </ul>
                <p>
                    That’s not enough! There are a lot of other perks you will get to know when you hire us. The best part
                    of our service is that we don’t charge a hefty amount for writing your CVs or cover letters. Instead, we
                    make it possible for you at economical rates. Even if you want CV writing service Northern Ireland, you
                    can ask us and get it done at budget-friendly pricing.
                </p>
               
            </div>
            <div class="my-auto mx-auto">
                <img src="../imgs/perfect-cv.webp" alt="logo" class="w-full">
            </div>
        </div>
    </section>


    {{-- How it works --}}
    <section class="bg-primary-one px-4 md:px-16 lg:px-24 py-5">
        <div class="text-center text-4xl text-white py-6">
            <strong>How</strong> it works
        </div>
        {{-- Modals --}}
        <div class="">
            <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-90 overflow-y-auto h-full w-full z-10" id="my-modal-1"
                data-target="7">
                <div class="relative  mx-auto p-5 border w-[90%] md:w-[32%] shadow-lg rounded-md bg-white my-4 md:my-2">
                    <img src="{{ asset('imgs/sample/x-icon.png') }}" alt="Cheap Cv"
                        class="w-5 absolute top-3 cursor-pointer " id="ok-btn-1">
                    <div class="mt-3 text-center">
                        <img src="{{ asset('imgs/sample/pr-sample-8.jpg') }}" alt="Cheap Cv" id="image"
                            class="h-full">

                    </div>
                </div>
            </div>

            <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-90 overflow-y-auto h-full w-full z-10" id="my-modal-2"
                data-target="5">
                <div class="relative  mx-auto p-5 border w-[90%] md:w-[32%] shadow-lg rounded-md bg-white my-4 md:my-2">
                    <img src="{{ asset('imgs/sample/x-icon.png') }}" alt="Cheap Cv"
                        class="w-5 absolute top-3 cursor-pointer " id="ok-btn-2">
                    <div class="mt-3 text-center">
                        <img src="{{ asset('imgs/sample/pr-sample-6.jpg') }}" alt="Cheap Cv" id="image"
                            class="h-full">

                    </div>
                </div>
            </div>

            <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-90 overflow-y-auto h-full w-full z-10" id="my-modal-3"
                data-target="0">

                {{-- Modal Content Resume --}}
                <div class="relative  mx-auto p-5 border w-[90%] md:w-[32%] shadow-lg rounded-md bg-white my-4 md:my-2 ">
                    <img src="{{ asset('imgs/sample/x-icon.png') }}" alt="Cheap Cv"
                        class="w-5 absolute top-3 cursor-pointer " id="ok-btn-3">
                    <div class="mt-3 text-center w-full ">
                        <img src="{{ asset('imgs/sample/pr-sample-1.jpg') }}" class="object-contain" alt="Cheap Cv"
                            id="image">
                    </div>
                </div>
            </div>


            <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-90 overflow-y-auto h-full w-full z-10" id="my-modal-4"
                data-target="1">
                {{-- Modal Content --}}
                <div class="relative  mx-auto p-5 border w-[90%] md:w-[32%] shadow-lg rounded-md bg-white my-4 md:my-2">
                    <img src="{{ asset('imgs/sample/x-icon.png') }}" alt="Cheap Cv"
                        class="w-5 absolute top-3 cursor-pointer " id="ok-btn-4">
                    <div class="mt-3 text-center">
                        <img src="{{ asset('imgs/sample/pr-sample-2.jpg') }}" alt="Cheap Cv" id="image"
                            class="h-full">
                    </div>
                </div>
            </div>


        </div>


        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-y-3">

            <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 cursor-pointer">
                <img class="h-80 mx-auto border-4 border-gray-300 md:rotate-[-3deg] " src="../imgs/sample-resume4.jpg"
                    alt="logo" id="open-btn-1">
            </div>
            <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 cursor-pointer">
                <img class="h-80 mx-auto border-4 border-gray-300 md:rotate-[3deg]" src="{{ asset('imgs/sample/pr-sample-6.jpg') }}" alt="logo"
                    id="open-btn-2">
            </div>
            <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 cursor-pointer">
                <img class="h-80 mx-auto border-4 border-gray-300 md:rotate-[-3deg]" src="../imgs/sample-resume2.jpg" alt="logo"
                    id="open-btn-3">
            </div>
            <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 cursor-pointer">
                <img class="h-80 mx-auto border-4 border-gray-300 md:rotate-[3deg]" src="../imgs/sample-resume1.jpg" alt="logo"
                    id="open-btn-4">
            </div>
        </div>

        <div class="text-center my-12 ">
            <a href="{{ route('samples') }}" class="group">
                <span class="bg-white font-semibold py-2 px-4 group-hover:bg-primary-two group-hover:text-white">View More
                    Samples</span>
                <span class="bg-primary-two p-2 text-white -ml-2 group-hover:bg-white group-hover:text-black"><i
                        class="fa fa-long-arrow-right"></i></span>
            </a>
        </div>

    </section>


    {{-- <!-- Boost your Resume --> --}}
    <section class="bg-primary-two">
        <div class="container px-4 md:px-16 lg:px-24 py-5 mx-auto text-white space-y-4">

            <h3 class="text:3xl md:text-4xl my-3">
                Time to Get the Most Awaited Interview Call
            </h3>
            <p class="my-4">
                It must be a long wait to hear from the desired employer. But this is not your fault. You might have
                submitted a CV that contains typos, errors, and mistakes. And that has caused the rejection. Now, you
                shouldn’t take it further.
            </p>
            <p class="my-4">
                By having your CV evaluated by the experts, you can save yourself from disappointments and regrets. We will
                highlight the errors and improve them to meet the job requirements. Not only editing, we will also add the
                keywords and make it ATS-friendly to bring your CV on top of the searches. No more rejections, delays,
                disappointments, and stress as our top-rated CV service is right here to help you out.
            </p>
            <div class="text-3xl my-3">
                <strong> From Fresh Graduate to Executives, Mid-Level Career Professionals, and Experts, We Help Everyone
                    Seek the Bright Opportunity </strong>
            </div>
            <p class="my-4">
                Many fresh graduates are conscious of hiring professional help. They hesitate and are unable to make up
                their minds. But this hesitation results in job delays and rejections. The same goes for executives and
                mid-level career professionals.
            </p>
            <p class="my-4">So, no matter who you are and to which industry you belong, our CV writing Ireland
                will take you one step further. Also, you don’t need to think a lot if you’re planning to switch your career
                as our experts can make the transition smooth for you. Whether you are someone who’s looking to make a
                career in space, tech, agriculture, medicines or law, our CV writing Dublin, Limerick, Waterford, and
                Galway, Ireland is the only thing you need. Pave your journey to success today.</p>

            {{-- <div class="text-3xl my-3">
                How can you <strong> Connect to our Resume Writers? </strong>
            </div> --}}
            <div class="text-3xl my-3 uppercase font-semibold">
                Hire Us to Get a Personalized, Well-formatted, and Impressive CV within Short Time
            </div>

            <div class=" my-8 space-x-2">
                <a href="{{ route('order') }}">
                    <span class="bg-white text-black font-semibold py-2 px-4">Order Now</span>
                    <span class="bg-primary-one p-2 text-white -ml-2"><i class="fa fa-long-arrow-right"></i></span>
                </a>
                <a href="{{ route('contact') }}">
                    <span class="bg-white text-black font-semibold py-2 px-4">Contact us</span>
                    <span class="bg-primary-one p-2 text-white -ml-2"><i class="fa fa-comment"></i></span>
                </a>
            </div>

        </div>
    </section>

    {{-- Testimonials --}}
    <section class="container px-10 md:px-16 lg:px-24 py-5 mx-auto">
        <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-1/3">
                <img class=" mx-auto"
                    src="{{ asset('imgs/cv-writing-ireland-testimonial-image-removebg-preview.png') }}" alt="logo">
            </div>
            <div class="w-full md:w-2/3">
                {{-- <div class="text-4xl font-semibold mt-10 text-center md:text-left">6,700+</div> --}}
                <div class="text-4xl text-center md:text-left">Meet Our Happy Customers</div>

                <!-- Swiper -->
                <div class="swiper mySwiper ">
                    <div class="swiper-wrapper mt-8 mb-20 text-center md:text-left">
                        <div class="swiper-slide">I received an exceptional resume from them. I never thought someone can
                            improve my CV to this extent. So satisfied with their work.
                            <div class="mt-2  text-orange-800 italic text-xl font-semibold">
                                Martin
                            </div>
                        </div>
                        <div class="swiper-slide">Hired them to write a cover letter and to improve my existing CV, I
                            must say they add more value to my CV. Cover letter was impressive as well. I’m happily working
                            at my dream company. Thanks to them!
                            <div class="mt-2  text-orange-800 italic text-xl font-semibold">
                                Chris Mt
                            </div>
                        </div>
                        <div class="swiper-slide">I messed up with my CV and I don’t have any time left. I contacted them
                            for urgent support and they helped me out. Very professional company.
                            <div class="mt-2  text-orange-800 italic text-xl font-semibold">
                                Louisa
                            </div>
                        </div>
                        <div class="swiper-slide">They dealt with my queries with a kind attitude. Although I was
                            panicking at the moment but they listened to my complaints and worked on it responsibly.
                            <div class="mt-2  text-orange-800 italic text-xl font-semibold">
                                Sawan Kumar
                            </div>
                        </div>

                    </div>
                    <div class="swiper-button-next px-8 bg-primary-two "></div>
                    <div class="swiper-button-prev px-8 bg-primary-two "></div>
                </div>


            </div>
        </div>
    </section>

    {{-- <div id="">
        <button class="divbutton" target-data="0">1</button>
        <button class="divbutton" target-data="1">2</button>
        <button class="divbutton" target-data="2">3</button>
    </div> --}}
    {{-- <div id="color" style="background-color: red">
        <h1 id="heading"></h1>
        <p id="detail"></p>
    </div> --}}

@endsection
@section('scripts')
    {{-- <!-- Swiper JS --> --}}
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    {{-- <!-- Initialize Swiper --> --}}
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            keyboard: {
                enabled: true,
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        let modal = [document.getElementById("my-modal-1"), document.getElementById("my-modal-2"), document.getElementById(
            "my-modal-3"), document.getElementById("my-modal-4")];
        let image = [document.getElementById("open-btn-1"), document.getElementById("open-btn-2"), document.getElementById(
            "open-btn-3"), document.getElementById("open-btn-4")];
        let button = [document.getElementById("ok-btn-1"), document.getElementById("ok-btn-2"), document.getElementById(
            "ok-btn-3"), document.getElementById("ok-btn-4")]

        for (let i = 0; i < modal.length; i++) {

            image[i].onclick = function() {

                modal[i].style.display = "block";
                button[i].onclick = function() {
                    modal[i].style.display = "none";
                }
                window.onclick = function(event) {
                    if (event.target == modal[i]) {
                        modal[i].style.display = "none";
                    }
                }
            }
        }


    </script>



@endsection
