@extends('layouts.web')
@section('title', 'Perfect Resume & CV Writing Service In UAE')
@section('description','Get Professional CV Writing Services In UAE from Perfect CV makers at affordable price. Perfectresume.ae do free resume assessment for successful outcome')
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
    <div class="bg-hero-bg bg-no-repeat bg-cover">
        {{-- Topbar --}}
        <div class="container mx-auto"> 
            <div class=" hidden md:flex   flex-row justify-between py-6">
                <div class="text-white space-x-3">
                    <a href="#" class="border border-white p-2">
                        Live Chat
                    </a>
                    <a href="tel:+971545098085"><i class=" fa fa-phone mr-2"></i>+971 54 509 8085</a>
                    <a href="mailto:info@perfectresume.ae" ><i class="fa fa-envelope mr-2 "></i>info@perfectresume.ae</a>
                </div>
               
                <div class="text-white space-x-3">
                    <a href="https://api.whatsapp.com/send/?phone=971545098085&text=how+can+I+get+a+fresh+resume%3F&app_absent=0" target="blank"><i class="fa fa-whatsapp"></i></a>
            <a href="https://www.facebook.com/perfectresumeuae/"><i class="fa fa-facebook" target="blank"></i></a>
            <a href="https://twitter.com/PerfectResumeae"><i class="fa fa-twitter" target="blank"></i></a>
            <a href="https://www.instagram.com/accounts/login/?next=/perfectresumeuae/" target="blank"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        
            <div class="md:hidden flex flex-col items-center py-6 ">
                <div class="text-white space-x-3 my-2 ">
                    <a href="#" class="border border-white p-2 ">
                        Live Chat
                    </a>
                </div>
                <div class="text-white space-x-3">
                    <a href="tel:+971545098085"  ><i class=" fa fa-phone mr-2"></i>+971 54 509 8085</a>
                </div>
                <div class="text-white space-x-3">
                    <a href="mailto:info@perfectresume.ae" ><i class="fa fa-envelope mr-2 "></i>info@perfectresume.ae</a>
                </div>
               
                <div class="text-white space-x-3">
                    <a href="https://api.whatsapp.com/send/?phone=971545098085&text=how+can+I+get+a+fresh+resume%3F&app_absent=0" target="blank"><i class="fa fa-whatsapp"></i></a>
            <a href="https://www.facebook.com/perfectresumeuae/"><i class="fa fa-facebook" target="blank"></i></a>
            <a href="https://twitter.com/PerfectResumeae"><i class="fa fa-twitter" target="blank"></i></a>
            <a href="https://www.instagram.com/accounts/login/?next=/perfectresumeuae/" target="blank"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            
           </div> 

        {{-- <!-- Navbar --> --}}
        <div class="container mx-auto w-full text-gray-700 ">
            <div x-data="{ open: false }"
                class="bg-white flex flex-col px-4 mx-auto lg:items-center lg:justify-between lg:flex-row  lg:px-12">
                <div class=" flex flex-row items-center justify-between">
                    <a class="flex items-center py-4 px-2" href="{{ route('home') }}">
                        <img src="../imgs/perfect-resume-logo.png" alt="Logo" class="h-16 mt-3">
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
                    <a href="{{ route('home') }}" class="block font-semibold p-2 lg:px-2 lg:py-10 hover:bg-primary-four hover:text-white lg:h-full {{ request()->routeIs('home') ? ' bg-primary-four text-white ' : '' }}">Home</a>
                  </div> 
    
                <div>
                    <a href="{{ route('about') }}" class="block font-semibold p-2 lg:px-2 lg:py-10 hover:bg-primary-four hover:text-white lg:h-full {{ request()->routeIs('about') ? ' bg-primary-four text-white ' : '' }}">About</a>
                </div>  
                    <div  class="relative " @click.away="open = false" x-data="{ open: false }"  >
                          
                        <button @click="open = !open"  class=" block  text-left font-semibold p-2 lg:px-2 lg:py-10 hover:bg-primary-four hover:text-white lg:h-full {{ request()->routeIs('services.one')|| request()->routeIs('services.two')|| request()->routeIs('services.three')||request()->routeIs('services.four') ? ' bg-primary-four text-white' : '' }}">
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
                                    <li><a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-blue-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                        href="{{ route('services.one') }}">Cover Letter Writing</a></li>
                                    <li><a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-blue-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                        href="{{ route('services.two') }}">LinkedIn Profile Writing</a></li>
                                    <li><a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-blue-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                        href="{{ route('services.three') }}">Resume Editing</a></li>
                                    <li><a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-blue-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                        href="{{ route('services.four') }}">CV Editing</a></li>
                                </ul>
                                
                            </div>
                        </div> 
                    </div> 
                   <div> 
                    <a href="{{ route('price') }}" class="block font-semibold p-2 lg:px-2 lg:py-10 hover:bg-primary-four hover:text-white lg:h-full {{ request()->routeIs('price') ? ' bg-primary-four text-white' : '' }}">Prices</a>
                   </div>
                  <div> <a href="{{ route('samples') }}" class="block font-semibold p-2 lg:px-2 lg:py-10 hover:bg-primary-four hover:text-white lg:h-full {{ request()->routeIs('samples') ? ' bg-primary-four text-white' : '' }}">Samples</a></div>
                 <div>  <a href="{{ route('reviews') }}" class="block font-semibold p-2 lg:px-2 lg:py-10 hover:bg-primary-four hover:text-white lg:h-full {{ request()->routeIs('reviews') ? ' bg-primary-four text-white' : '' }}">Testimonials</a></div>
                 <div>   <a href="{{ route('blogs') }}" class="block font-semibold p-2 lg:px-2 lg:py-10 hover:bg-primary-four hover:text-white lg:h-full {{ request()->routeIs('blogs')|| request()->routeIs('blog.show') ? ' bg-primary-four text-white' : '' }}">Blog</a></div>
                   <div> <a href="{{ route('contact') }}" class="relative block font-semibold p-2 lg:px-2 lg:py-10 hover:bg-primary-four hover:text-white lg:h-full {{ request()->routeIs('contact') ? ' bg-primary-four text-white' : '' }}">Contact</a></div>
                    <a href="{{ route('order') }}" class="relative block font-semibold p-2  lg:p-10 bg-primary-two text-white lg:h-full  "><span class="lg:absolute lg:left-[22%]  lg:top-[37%] {{ request()->routeIs('blogs')|| request()->routeIs('order') ? ' bg-primary-four text-white' : '' }}">Order</span></a>
    
    
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
                                <p class="md:mb-2 lg:mb-4"><b class="bg-primary-one px-2">STRUGGLING TO FIND
                                    OUT</b></p>
                            
                                    
                                <b class="bg-primary-one px-2">THE PROFESSIONAL RESUME
                                    AND CV WRITING SERVICES IN UAE ?</b>
                            </h1>
                            <p>
                                <b class="bg-white text-sm lg:text-xl px-2 font-semibold"> WE OFFER THE BEST CV WRITING
                                    SERVICES IN DUBAI THAT SETS YOU APART FROM OTHER JOB APPLICANTS.</b>
                            </p>
                            <p class="text-white font-semibold text-lg">
                                Connect to the Best CV Maker in Dubai and get your CV Refined at an Affordable Cost.
                            </p>
                            <div>
                                <a href="#" class="mt-4 pb-8 group">
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

    </div>

    {{-- Services --}}
    <section class="container mx-auto max-w-screen-xl pb-4 -mt-8">
        <div class=" grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 px-4">
            <div class="py-16 px-8 shadow-xl bg-white">
                <p class="text-primary-two uppercase text-xl mt-6 text-center sm:text-left">
                    <strong>services</strong><br>we<br>offer
                </p>
            </div>
            <div class="py-16 px-8 shadow-xl bg-[#6acffd]">
                <p class="text-white uppercase text-2xl text-center"><i class="fa fa-file-text-o text-white py-3"
                        style="font-size: 50px;" aria-hidden="true"></i><br>RESUME
                    WRITING</p>
            </div>
            <div class="py-16 px-8 shadow-xl bg-[#3bbffd]">
                <p class="text-white uppercase text-2xl text-center"><i class="fa fa-newspaper-o text-white py-3"
                        style="font-size: 50px;" aria-hidden="true"></i><br>CV<br>
                    WRITING</p>
            </div>
            <div class="py-16 px-8 shadow-xl bg-[#22aeec]">
                <p class="text-white uppercase text-2xl text-center"><i class="fa fa-list-alt text-white py-3"
                        style="font-size: 50px;" aria-hidden="true"></i><br>COVER<br>LETTER</p>
            </div>
            <div class="py-16 px-8 shadow-xl bg-[#0c97d8]">
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
                    <strong>GET YOUR DREAM JOB</strong> FASTER WITH OUR RESUME WRITING SERVICES IN UAE
                </h2>
                <p>
                    What strategies do you follow when you create your resume? Or do you take the template from Google
                    and place
                    your skills, experience and education in it? But does this approach help you in acquiring your dream
                    job?
                </p>
                <p>
                    The chances are less unless luck is in your favour. Writing a CV isn’t a simple task and it never
                    follows a
                    general approach. You have to stand true to the requirements of the employer and fit in his frame to
                    get
                    your dream job. For this you don’t only need the template but also the professional resume writers
                    in Dubai
                    who can help you in creating a strong resume which can impress the employer at first impression.
                    When the
                    recruiter first picks your resume, he doesn't read it thoroughly but instead skim it to find the
                    keywords
                    that are most suited for the job. Here, you can’t grab his attention if the required keywords are
                    missing
                    from your resume. That’s why it’s important to follow the best resume writing tips to make your job
                    profile
                    perfect. In addition, the job market in the Middle East is competitive and filled with candidates
                    who are
                    looking for golden opportunities. So, with our professional CV writing services in Dubai, we make
                    you close
                    to your dream job amid the competition.
                </p>
                <p>
                    Our resume writing services in Abu Dhabi, Dubai,Fujairah, Sharjah, Umm Al Quwain UAE is known for
                    lifting
                    students and professionals with a job-winning CV that makes them accomplish their dream goals. We
                    have
                    worked with employers for more than 10 years and know how they pick resumes and shortlist it. We
                    also know
                    how to attract the professional with a structured resume that makes them suited with the job
                    requirements
                    perfectly. We are always ready to assist you for your CV, are you?
                </p>
            </div>
        </div>
    </section>

    {{-- CV Maker --}}
    <section class="px-4 md:px-16 lg:px-24 py-5">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2">
            <div class="space-y-4">
                <h3 class="text-2xl py-4">
                    <strong>How Our CV Maker</strong> Dubai Helps You Grow?
                </h3>
                <p><strong>We Offer CV Writing for Fresh Graduates</strong></p>
                <p>
                    First impression is the last impression. And your resume plays an important role when you first
                    enter into
                    the corporate world. With our professional resume maker in Dubai, we let you step smartly in the
                    competitive
                    marketplace and leave no stone unturned to get your dream job faster. So, if you’re a beginner, get
                    help
                    with our professional consultants and make an ideal start of your career.
                </p>
                <p><strong>We Revamp CV for Mid-Career Professional</strong></p>
                <p>
                    At times, mid-career professionals are stuck in their tedious jobs and look for an escape to reach a
                    better
                    opportunity. But due to the lack of resume writing skills, they don’t find it easy to skip. Our
                    resume
                    writing services in Dubai understands your struggles and helps in revamping your existing CV into a
                    demandable job profile. Submit us your old profile and get it transformed into a latest one.
                </p>
            </div>
            <div class="my-auto mx-auto">
                <img src="../imgs/perfect-resume.webp" alt="logo" class="w-full">
            </div>
        </div>
    </section>


    {{-- <!-- Senior Level Help --> --}}
    <section class="bg-primary-one">
        <div class="container px-4 md:px-16 lg:px-24 py-12 mx-auto text-white space-y-4">
            <p><strong>We Create Diamond CVs for Senior Level Help</strong></p>
            <p>
                We have seen the senior level professionals searching for the best resume writing services in UAE to
                bring
                all their expertise in few pages so that recruiters can learn
                about them inashort time. Our CV writing Dubai helps these professionals by transforming their long
                years of
                experience into compelling words that describe well.
                We proficiently highlight the key areas to bring the employers attention to your CV.
            </p>
            <p><strong>We Help in your Career Switch</strong></p>
            <p>
                Sometimes you realize that your expertise lies inadifferent career instead of your existing one. But
                without
                the
                relevant experience, you can't convince the employer
                that you are the right fit for the job. With our CV maker in Sharjah, Abu Dhabi, Dubai, Fujairah UAE we
                make
                the switch
                easy by creatingaresume which appeals to the
                dedicated employer. We are experienced in doing it and know how to do it welL.
            </p>
        </div>
    </section>

    {{-- Reasons --}}
    <section class="bg-primary-two py-10">
        <div class="container px-4 md:px-16 lg:px-24 py-5 mx-auto">
            <div class="text-center text-3xl text-white">
                <strong>Reasons</strong> to Choose Our Services
            </div>
            <div class="my-20 grid grid-cols-1 md:grid-cols-2 gap-y-8 md:gap-x-8 mx-auto">
                <div class="text-center text-white space-y-4">
                    <i class="fa fa-graduation-cap text-primary-one border-8 bg-white p-12 px-10 rounded-full hover:bg-primary-one hover:text-white hover:scale-105"
                        style="font-size: 50px;" aria-hidden="true"></i>
                    <p class="text-2xl"><strong>We have Professional<br> CV Writers Dubai</strong></p>
                    <p class="">
                        Creating CVs from the scratch requires the skills to structure your information in a way that
                        attracts
                        the
                        employer. Our team of professional CV maker in UAE are meant for this task. Be it your old
                        resume or you
                        want us to create it from scratch, you would be amazed to see the outcome of your CV. We know
                        the
                        factors
                        that make a CV outstanding that’s why we always submit a custom resume dedicated to win the job
                        for you.
                    </p>
                </div>
                <div class="text-center text-white space-y-4">
                    <i class="fa fa-key text-primary-one border-8 bg-white p-12 rounded-full hover:bg-primary-one hover:text-white hover:scale-105"
                        style="font-size: 50px;" aria-hidden="true"></i>
                    <p class="text-2xl"><strong>We Know the Winning<br> Factors of a CV</strong></p>
                    <p class="">
                        Why do some candidates get the interview call right after they submit the resume? It’s because they include the keywords which employers are searching for. They hire best CV writing companies in Dubai who help them make their CVs strong and preferable over other profiles. Our CV writing service in Dubai strongly cares about this factor, they research the market competition of your niche and then craft a resume which guarantees to bring success for you. All we require is the trust from you.
                    </p>
                </div>
                <div class="text-center text-white space-y-4">
                    <i class="fa fa-clock-o text-primary-one border-8 bg-white p-12 rounded-full hover:bg-primary-one hover:text-white hover:scale-105"
                        style="font-size: 50px;" aria-hidden="true"></i>
                    <p class="text-2xl"><strong>Competitive<br> Edge</strong></p>
                    <p class="">
                        In a thousand CVs why will the recruiter pick yours? Always remember that the recruiter will only choose your CV when it will attract him at first sight. If you fail to make the first impression, no matter how great your achievements are, it will remain neglected. Our professional CV writing service in Abu Dhabi, Sharjah, UAE gives you a competitive edge with a template and details, recruiters will love to read and make them curious to learn more about your skills and experience.
                    </p>
                </div>
                <div class="text-center text-white space-y-4">
                    <i class="fa fa-check text-primary-one border-8 bg-white p-12 rounded-full hover:bg-primary-one hover:text-white hover:scale-105"
                        style="font-size: 50px;" aria-hidden="true"></i>
                    <p class="text-2xl"><strong>Edited and Proofread<br> by Professionals</strong></p>
                    <p class="">
                        We not only have the best CV writers in Dubai but also the proofreaders and editors who quality check your CV from all aspects and make sure nothing is left to leave you behind in the race. Our editors and resume maker do their best to let you reach the job you deserve. We know the golden resume writing tips that can get your dream job. Hire our resume writing Dubai and grab the chance to mold your CV into a success profile.
                    </p>
                </div>
                <div class="text-center text-white space-y-4">
                    <i class="fa fa-retweet text-primary-one border-8 bg-white p-12 px-10 rounded-full hover:bg-primary-one hover:text-white hover:scale-105"
                        style="font-size: 50px;" aria-hidden="true"></i>
                    <p class="text-2xl"><strong>Free Revisions<br> Until You’re Satisfied</strong></p>
                    <p class="">
                        Unlike the other CV writing firms who wave goodbyes right after submitting the resume, we make sure we stay with you until you’re fully satisfied with the work. Our professional CV writers Abu Dhabi not only assist you in writing your CV but also gives you the consultation for your interview. They can also help you in making your LinkedIn profile so the recruiters searching you over there can connect with you right after they view your profile. What’s more you want?
                    </p>
                </div>
                <div class="text-center text-white space-y-4">
                    <i class="fa fa-paper-plane-o text-primary-one border-8 bg-white p-12 rounded-full hover:bg-primary-one hover:text-white hover:scale-105"
                        style="font-size: 50px;" aria-hidden="true"></i>
                    <p class="text-2xl"><strong>Delivery<br> On-Time</strong></p>
                    <p class="">
                        When our customer support services commit a deadline with you, you can sit back and relax because our professional CV writing UAE is always on time. Even if you need the services urgently, you can pitch our customer support and they will get in touch with you soon. Want more? You can also talk to our resume maker Dubai for your satisfaction. We leave not an inch behind to help because your success is our success, trust us. Order now to start today.
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

            <div class="grid grid-cols-2 md:grid-cols-7 pb-3 my-5">
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
                    <i class="fa fa-comment-o text-white py-3" style="font-size: 50px;" aria-hidden="true"></i>
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
                    <i class="fa fa-download text-white py-3" style="font-size: 50px;" aria-hidden="true"></i>
                    <hr class="w-1/2 my-4 mx-auto">
                    <p class="text-lg font-semibold">
                        Choose a service
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
                    <strong>WHEN YOU CHOOSE OUR CV WRITERS IN DUBAI,</strong> YOU’LL GET THE FOLLOWING:
                </h3>
                <p>
                    You can get services from our resume writers in Ajman, Dubai, Abu Dhabi, Sharjah and all over UAE
                    tailored
                    completely to the job market. And along with a quality CV, you’ll never find these features missing
                    from our
                    services:
                </p>
                <ul class="tl-list md:list-disc ml-8 my-4 font-semibold space-y-2">
                    <li>Proofread by Expert CV Writers in UAE</li>
                    <li>Effective Customer Support Services</li>
                    <li>Unlimited Revisions</li>
                    <li>CV Editing &amp; Revamping Service</li>
                    <li>No Use of Templates</li>
                    <li>Best Turnaround Time</li>
                    <li>CV delivered in MS Word &amp; PDF Format</li>
                    <li>Resumes created from scratch by the expert resume maker</li>
                </ul>
                <p>
                    We are one of the leading CV writing agencies in Dubai with a groundbreaking success of transforming
                    careers
                    of students, professionals, and experts. You’ll get to know this when you’ll work with our best CV
                    writers
                    in Dubai.
                </p>
                <p>
                    If you’re the one who doesn't like your current job or career, we’ll help you make the switch. The
                    job
                    market in UAE is evolving with the time so your CV should adopt the pace as well. Connect with our
                    CV
                    writing Dubai and make a CV, you'll be proud to have.
                </p>
            </div>
            <div class="my-auto mx-auto">
                <img src="../imgs/perfect-cv.webp" alt="logo" class="w-full">
            </div>
        </div>
    </section>


      {{--  How it works  --}}
      <section class="bg-primary-one px-4 md:px-16 lg:px-24 py-5">
        <div class="text-center text-4xl text-white py-6">
            <strong>How</strong> it works
        </div>
        {{-- Modals --}}
<div>        
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
                <img src="{{ asset('imgs/sample/pr-sample-1.jpg') }}" class="object-contain" alt="Cheap Cv" id="image">
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
  

        <div class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-y-3">

            <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 cursor-pointer">
                <img class="mx-auto border-4 border-gray-300 md:rotate-[-3deg] " src="../imgs/sample-resume4.jpg" alt="logo" id="open-btn-1">
            </div>
            <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 cursor-pointer">
                <img class="mx-auto border-4 border-gray-300 md:rotate-[3deg]" src="../imgs/sample-resume3.jpg" alt="logo" id="open-btn-2">
            </div>
            <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 cursor-pointer">
                <img class="mx-auto border-4 border-gray-300 md:rotate-[-3deg]" src="../imgs/sample-resume2.jpg" alt="logo" id="open-btn-3">
            </div>
            <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 cursor-pointer">
                <img class="mx-auto border-4 border-gray-300 md:rotate-[3deg]" src="../imgs/sample-resume1.jpg" alt="logo" id="open-btn-4">
            </div>
        </div>

        <div class="text-center my-12 ">
            <a href="{{ route('samples') }}" class="group">
                <span class="bg-white font-semibold py-2 px-4 group-hover:bg-primary-two group-hover:text-white">View More Samples</span>
                <span class="bg-primary-two p-2 text-white -ml-2 group-hover:bg-white group-hover:text-black"><i class="fa fa-long-arrow-right"></i></span>
            </a>
        </div>

    </section>


    {{-- <!-- Boost your Resume --> --}}
    <section class="bg-primary-two">
        <div class="container px-4 md:px-16 lg:px-24 py-5 mx-auto text-white space-y-4">

            <h3 class="text-2xl my-3">
                It’s time to boost your Resume now with our <strong>Best Resume Writers in Dubai </strong>
            </h3>
            <p class="my-4">
                Yes, with our professional CV writing service in Bur Dubai, Abu Dhabi UAE, we help you boost your resume
                that
                makes your application extraordinary. We are driven by quality and our resume maker focuses on creating
                ways
                for the job seeking candidates/professionals that turn their dreams into reality. We believe that by
                helping
                the job seekers we can uplift the market standards and can contribute to the growth of community. You
                can
                also avail our services in Gulf countries like <a class="text-blue-500 hover:text-white"
                    href="{{ route('kas.flag') }}">Saudi Arabia</a>,
                <a class="text-blue-500 hover:text-white" href="{{ route('qatar.flag') }}">Qatar</a>,
                Doha, <a class="text-blue-500 hover:text-white"
                    href="{{ route('kuwait.flag') }}">Kuwait</a>,
                    <a class="text-blue-500 hover:text-white" href="{{ route('bahrain.flag') }}">Bahrain</a>, and <a class="text-blue-500 hover:text-white" href="{{ route('oman.flag') }}">Oman
                </a>as well.
            </p>
            <div class="text-3xl my-3">
                How can you <strong> Connect to our Resume Writers? </strong>
            </div>
            <p class="my-4">
                With a single click you can connect to our online CV maker for UAE. Then choose the option that best
                describes your interest. Pour in all your details and comprehensive requirements of what you are looking
                for. Our professional CV writers in Dubai will get in touch with you. They might have a question/answer
                session with you to pull out the complete details of your requirements.
            </p>
            <p class="my-4">
                After all this, just wait! Because your CV writing UAE is now in the expert hands. Our online CV maker
                will get in touch with you with the best CV/Resume that will make your dreams possible. And still if you
                find something missing, you can ask our resume maker for revisions. We are open to facilitate best CV
                writing services in UAE and all regions including the Arab countries.
            </p>
            <div class="text-3xl my-3">
                How can you <strong> Connect to our Resume Writers? </strong>
            </div>
            <div class="text-3xl my-3 uppercase font-semibold">
                Try our Professional Resume Writing Service in Dubai, Abu Dhabi for the first time and keep knocking us
                for life time, that’s our GUARANTEE!
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

     {{--  Testimonials  --}}
     <section class="container px-10 md:px-16 lg:px-24 py-5 mx-auto">
        <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-1/3">
                <img class="h-[22rem] mx-auto" src="../imgs/testimonials.webp" alt="logo">
            </div>
            <div class="w-full md:w-2/3">
                <div class="text-4xl font-semibold mt-10 text-center md:text-left">6,700+</div>
                <div class="text-4xl text-center md:text-left">HAPPY CUSTOMERS</div>
                
                <!-- Swiper -->
                <div class="swiper mySwiper ">
                    <div class="swiper-wrapper mt-8 mb-20 text-center md:text-left">
                        <div class="swiper-slide">There was an urgent requirement as only a day left for closing of job.
                            Thanks to Perfect resume they provided with job description oriented CV in a day and I was
                            fortunate enough to apply for it.
                            <div class="mt-2 text-blue-500 italic text-xl font-semibold">
                                Abdul Kareem
                            </div>
                        </div>
                        <div class="swiper-slide">I just shared all my queries with the CV expert Writers here and they assisted me so well. They gave a perfect look to my CV
                            <div class="mt-2 text-blue-500 italic text-xl font-semibold">
                                Aliyah
                            </div>
                        </div>
                        <div class="swiper-slide">It is surprising how amazingly they managed the content of my four pages CV into two pages with proper synchronization and alignment
                            <div class="mt-2 text-blue-500 italic text-xl font-semibold">
                                Sheikh Abdul Aziz
                            </div>
                        </div>
                        <div class="swiper-slide">It is appreciable that how professionally they deal with their customers. Perfect resume ask for every detail before starting the work and deliver the best CV
                            <div class="mt-2 text-blue-500 italic text-xl font-semibold">
                                Zayn
                            </div>
                        </div>
                        
                    </div>
                    <div class="swiper-button-next px-8 bg-primary-two "></div>
                    <div class="swiper-button-prev px-8 bg-primary-two "></div>
                </div>

                
            </div>
        </div>
    </section>

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

         let modal=[document.getElementById("my-modal-1"),document.getElementById("my-modal-2"),document.getElementById("my-modal-3"),document.getElementById("my-modal-4")];
         let image=[document.getElementById("open-btn-1"), document.getElementById("open-btn-2"), document.getElementById("open-btn-3"), document.getElementById("open-btn-4")];
         let button=[document.getElementById("ok-btn-1"), document.getElementById("ok-btn-2"), document.getElementById("ok-btn-3"), document.getElementById("ok-btn-4")]

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
