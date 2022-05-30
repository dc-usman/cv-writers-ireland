@extends('layouts.web')

@section('title', 'Professional CV Writing Services in Kuwait - Perfect Resume')
@section('description', 'Opt for the Best CV Writing Service in Kuwait by perfect resume writing service with the team of professional experts available 24/7.')
@section('canonical', config('app.app_url') . Request::path())

@section('links')
    <link rel="stylesheet" href="{{ asset('css/typo.css') }}">
@endsection

@section('content')
    <div class="bg-primary-one">
        <div class="container  mx-auto   py-8">
            <div class="flex flex-col space-y-4 my-4 max-w-screen-xl md:my-0 lg:flex-row ">
                <div class="mx-2 text-center md:text-left leading-[37px] md:leading-none">
                    <p>
                        <b class="text-2xl md:text-4xl text-white bg-primary-one px-4">CV Writing Service in Kuwait</b>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <main class="">
        <section class="container mx-auto px-3 md:px-14 my-6 md:min-h-[15rem]">
            <h1 class="my-4 text-2xl md:text-4xl"><b>CV</b> WRITING SERVICES IN KUWAIT</h1>
            <p class="my-2">
                When you drop your CV anywhere, there’s only one purpose and that’s to get the interview call. And if
                doesn’t happen, you lose your confidence to apply for more jobs and unlock more career opportunities. If
                this happens with you then you need a professional help who can take you out of all the frustrations and
                make your career thriving.
            </p>
            <p class="my-2">
                Perfect Resume is one of the finest CV writing services in Kuwait who rewrite your CV and tailor it to the
                job description you want to apply. You often think your CV is best suited for the job but according to the
                employer, you miss the potential points which reduce your hiring chances.</p>
            <p class="my-2">
                Our job is to scrutinize your resume, cut the fluff and make it specific to the requirements. Whether you’re
                a fresh graduate or a professional, our CV makers can assist you to chase your dreams with a profile that
                will attract the recruiter in the first impression.</p>
            <p class="my-2">So, if you’re someone who’s tired of rejections and delays, we’re here to help. We
                know the secret CV writing techniques that can make the recruiter think about you.</p>
            {{-- <p class="my-2">
                Even when you think your CV is best, the small mistakes might still be there which can risk your career.
                Getting it checked by professionals can help you correct the mistakes and give you an edge over other
                candidates. That’s why hiring professional CV writers will always prove to be a bonus for you.
            </p> --}}
            {{-- <p class="my-2">
                In addition, they can also help you to keep the stress away. And when you know your CV is perfect, you can
                be fully satisfied before dropping your CV anywhere. And that’s what we want for you!
            </p> --}}
            <h2 class="my-4 text-2xl md:text-4xl">HOW OUR RESUME WRITING SERVICES IN KUWAIT HELPS TO GROW YOUR CAREER?
            </h2>
            <p class="my-2">
                The job market has become a competitive place these days. It’s not easy to get your ideal job on a click
                especially when your resume is outdated and miss the key points. One tiny mistake can cost your career.
                That’s why it’s important to get your resume ticked by professionals before you drop it anywhere.
            </p>
            <p class="my-2">
                At PR, we have a team of CV makers who can point you the areas of improvement and give your resume an edge
                over other candidates. We not only edit your CV but also write it from scratch. From your education
                background to mentioning your career achievements and experience, we know how to couple it all in less
                space.
            </p>
            <p class="my-2">
                If you feel like you’re in the same phase of struggle and your CV needs to be revamped then we are right
                here for you. Our services are open to all students in Salmiya, Al Jahra, Fahaheel, Hawallay and Kuwait
                City. Ping our customer support and we’ll be right there for you.
            </p>
            <h3 class="my-4 text-2xl md:text-4xl">GET YOUR CVS DONE BY PROFESSIONAL CV WRITERS IN KUWAIT</h3>
            <p class="my-2">
                If you live in Oman then you must know the role a CV builder agency play in transforming the career and how
                they help in standing tall in the competitive job market. Industries look for a competent key player who is
                flexible to adopt the job description and can fit into the job frame better.
            </p>
            <p class="my-2">
                Now, even if you’re the best-suited candidate for the job, you need skills to convey this to the employer.
                And all this can happen only when you know how to write a winning resume and cover letter.
            </p>

            {{-- <h3 class="my-4 text-2xl md:text-4xl">
                OUR PROFESSIONAL RESUME WRITERS IN QATAR ARE READY TO WORK FOR YOUR SUCCESS. ARE YOU?
            </h3> --}}
            <p class="my-2">
                CV writing isn’t a simple job. You need to learn the art of writing an impressive resume. And everybody
                can’t master this art. You might be a pro in your niche but you can also fail to write a job-winning resume.
                So, how about handing this job to the experts of the field?
            </p>
            <p class="my-2">
                Yes, our professional CV writers in Kuwait are the master of this art and know the tactics to make your
                resume strong. You only need to handover your profile, and they’ll filter the required information to create
                a customized resume. And if you’re worried that we’ll be using online Kuwait CV format then you can keep
                this worry at bay because we create 100 percent unique profiles without using the online templates. Even if
                you want us to edit your LinkedIn profile, we’ll be happy to do it for you.
            </p>
            <p class="my-2">
                If you’re someone who has just finished college or a mid-level career professional or a senior, we are ready to give you all kind of CV services to flourish your career. Hire our CV writing services and get ready to get the interview call soon.
            </p>
            <div class="mt-4">
                <a href="{{ route('order') }}" class="mt-4 pb-8 group">
                    <span class="bg-primary-two text-white font-semibold p-2 group-hover:bg-primary-one">Let's Start!</span>
                    <span class="bg-primary-one p-2 -ml-2 group-hover:bg-primary-two group-hover:text-white"><i
                            class="fa fa-long-arrow-right"></i></span>
                </a>
            </div>
        </section>
    </main>

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
    
    <div class="text-2xl font-semibold text-center my-4">CV / RESUME PRICING</div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 lg:mx-20 ">
        <div class="custom-css bg-white rounded shadow-xl border border-gray-300 my-4 py-3 w-[90%] mx-auto text-center space-y-1">
            <h5 class="text-3xl font-bold">Entry<br>Level</h5>
            <p class="text-gray-700 text-lg ">Cv / Resume Writing</p>
            <p class="text-primary-one text-5xl font-bold "><sup class="text-[50%]">AED</sup>215</p>
            <div class="text-center py-6 ">
                <a href="{{ route('order') }}" class="group">
                    <span
                        class="bg-primary-two text-white font-semibold py-2 px-4 group-hover:bg-primary-one ">Order
                        Now</span>
                    <span class="bg-primary-one p-2 -ml-2 group-hover:bg-primary-two group-hover:text-white"><i
                            class="fa fa-long-arrow-right"></i></span>
                </a>
            </div>
        </div>
    
        <div class="custom-css bg-white rounded shadow-xl border border-gray-300 my-4 py-3 w-[90%] mx-auto text-center space-y-1">
            <h5 class="text-3xl font-bold">Mid<br>Level</h5>
            <p class="text-gray-700 text-lg ">Cv / Resume Writing</p>
            <p class="text-primary-one text-5xl font-bold "><sup class="text-[50%]">AED</sup>250</p>
            <div class="text-center py-6 ">
                <a href="{{ route('order') }}" class="group">
                    <span
                        class="bg-primary-two text-white font-semibold py-2 px-4 group-hover:bg-primary-one ">Order
                        Now</span>
                    <span class="bg-primary-one p-2 -ml-2 group-hover:bg-primary-two group-hover:text-white"><i
                            class="fa fa-long-arrow-right"></i></span>
                </a>
            </div>
        </div>
    
        <div class="custom-css bg-white rounded shadow-xl border border-gray-300 my-4 py-3 w-[90%] mx-auto text-center space-y-1">
            <h5 class="text-3xl font-bold">Senior<br>Level</h5>
            <p class="text-gray-700 text-lg ">Cv / Resume Writing</p>
            <p class="text-primary-one text-5xl font-bold "><sup class="text-[50%]">AED</sup>340</p>
            <div class="text-center py-6 ">
                <a href="{{ route('order') }}" class="group">
                    <span
                        class="bg-primary-two text-white font-semibold py-2 px-4 group-hover:bg-primary-one ">Order
                        Now</span>
                    <span class="bg-primary-one p-2 -ml-2 group-hover:bg-primary-two group-hover:text-white"><i
                            class="fa fa-long-arrow-right"></i></span>
                </a>
            </div>
        </div>
    
        <div class="custom-css bg-white rounded shadow-xl border border-gray-300  my-4 py-3 w-[90%] mx-auto text-center space-y-1">
            <h5 class="text-3xl font-bold">Career<br>Change</h5>
            <p class="text-gray-700 text-lg ">Cv / Resume Writing</p>
            <p class="text-primary-one text-5xl font-bold "><sup class="text-[50%]">AED</sup>410</p>
            <div class="text-center py-6 ">
                <a href="{{ route('order') }}" class="group">
                    <span
                        class="bg-primary-two text-white font-semibold py-2 px-4 group-hover:bg-primary-one ">Order
                        Now</span>
                    <span class="bg-primary-one p-2 -ml-2 group-hover:bg-primary-two group-hover:text-white"><i
                            class="fa fa-long-arrow-right"></i></span>
                </a>
            </div>
        </div>
    </div>

@endsection
