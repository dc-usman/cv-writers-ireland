@extends('layouts.web')

@section('title', "Oman's Best CV Writing Services by Perfect Resume Experts")
@section('description', 'Hire the experts from Best CV writing service in Oman, we assist you in getting right career opportunity through customized CVs by our best resume writers.')
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
                        <b class="text-2xl md:text-4xl text-white bg-primary-one px-4">CV Writing Services in Oman</b>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <main class="">
        <section class="container mx-auto px-3 md:px-14 my-6 md:min-h-[15rem]">
            <h1 class="my-4 text-2xl md:text-4xl"><b>CV</b> Writing Services in Oman</h1>
            <p class="my-2">
                Have you imagined yourself working in your dream company for a six-figure salary?
            </p>
            <p class="my-2">
                Yes?</p>
            <p class="my-2">
                Then its time to turn your dreams into reality by hiring our CV writing services in Oman. We’re a team of
                experienced professionals who are gathered to grow your career with a customized resume.</p>
            <p class="my-2">If you’re looking for a one-stop solution to polish your resume, get assistance from
                the career counsellors and a job-winning cover letter then we’re right here to help.</p>
            <p class="my-2">
                Even when you think your CV is best, the small mistakes might still be there which can risk your career.
                Getting it checked by professionals can help you correct the mistakes and give you an edge over other
                candidates. That’s why hiring professional CV writers will always prove to be a bonus for you.
            </p>
            <p class="my-2">
                In addition, they can also help you to keep the stress away. And when you know your CV is perfect, you can
                be fully satisfied before dropping your CV anywhere. And that’s what we want for you!
            </p>
            <h2 class="my-4 text-2xl md:text-4xl">BEST RESUME WRITING SERVICES IN OMAN TO GET YOU CLOSE TO YOUR DREAM JOB
            </h2>
            <p class="my-2">
                When you drop your resume, the recruiter takes only a few seconds to decide either you’re eligible for the
                job or not. If your CV is filled with grammatical errors, punctuation errors and incorrect formatting then
                there are high chances of getting rejected for the job. And especially when you don’t include the keywords,
                the recruiters are specifically looking for.
            </p>
            <p class="my-2">
                Without an expert resume writer, it’s impossible to get the errors identified and corrected. So, here at PR,
                we connect you with our team who can guide you about your CV and tell where it lacks. If you want them to
                edit and polish your resume, they’ll do it for you and if you want them to create a new resume from the
                scratch, they won’t hesitate to take this over their shoulders.
            </p>
            <p class="my-2">
                From writing a CV to a LinkedIn profile and cover letter, our writers know how to tailor your resume to the
                job description which later leads to winning the interview call. The only aim of our resume writing services
                is to flourish your career through advanced and efficient resume-writing techniques.
            </p>
            <h3 class="my-4 text-2xl md:text-4xl">A LEADING CV BUILDER AGENCY IN OMAN TO GET YOU GOING</h3>
            <p class="my-2">
                If you live in Oman then you must know the role a CV builder agency play in transforming the career and how they help in standing tall in the competitive job market. Industries look for a competent key player who is flexible to adopt the job description and can fit into the job frame better.
            </p>
            <p class="my-2">
                Now, even if you’re the best-suited candidate for the job, you need skills to convey this to the employer. And all this can happen only when you know how to write a winning resume and cover letter.
            </p>

            {{-- <h3 class="my-4 text-2xl md:text-4xl">
                OUR PROFESSIONAL RESUME WRITERS IN QATAR ARE READY TO WORK FOR YOUR SUCCESS. ARE YOU?
            </h3> --}}
            <p class="my-2">
                Sometimes, when you’re in the middle of your career, you can also need the help of professionals to make a career-switch with an impressive resume. That’s where our services come to help!
            </p>
            <p class="my-2">
                We provide you with unmatched solutions to get the most awaited interview call. By working in compliance with the job specifications, we make your resume perfect for the job and unless you score the job, we keep on giving our endless support to keep you going. That’s how we work to grow your career.
            </p>
            <p class="my-2">
                Not only this, we also have a 24/7 customer support service who are ready to handle your urgent CV writing queries. If you’re from Muscat, Salalah, Nizwa, Sur, Sohar, Seeb, Rustaq or anywhere from Oman, we are here to facilitate you with our quality services.
            </p>
            {{-- <p class="my-2">If you still don’t trust our words then how about testing our potential with a sample
                resume? We’re sure you won’t regret your decision because our resume writing services in Qatar have gained a
                credible reputation by serving quality for a long time.</p> --}}
            {{-- <p class="my-2">Have we missed answering any important question? Ping us on our live chat and our
                customer support will get done with your queries soon.</p> --}}
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
