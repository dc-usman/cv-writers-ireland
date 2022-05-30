@extends('layouts.web')

@section('title', 'Best CV Writing Services in Qatar by Qualified Resume Writers')
@section('description', 'Perfect Resume writing services providing CV writing service in Qatar with the team of professional experts who are available 24/7.')
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
                        <b class="text-2xl md:text-4xl text-white bg-primary-one px-4">CV Writing Services in Qatar</b>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <main class="">
        <section class="container mx-auto px-3 md:px-14 my-6 md:min-h-[15rem]">
            <h1 class="my-4 text-2xl md:text-4xl"><b>CV</b> WRITING SERVICES IN QATAR</h1>
            <p class="my-2">
                Do you know it's only the CV that sells you effectively in the job market? Yes, your CV is the only
                connection between you and your employer. If it’s good, it can make you reach your destination and if it’s
                poor, lacks details and is not structured properly, it will close the door of opportunities for you.
            </p>
            <p class="my-2">
                A staggering 9 out of 10 employers in Qatar aren’t happy to receive the candidate’s resume. They don’t find
                the skills which they are specifically looking for. Some of the CVs are filled way too much with grammatical
                errors that it gets rejected in the first impression.</p>
            <p class="my-2">
                That’s why having your CV checked by professionals has become important. They can take you out of the
                jargons, ambiguous writing and tailor your CV to the job description.</p>
            <p class="my-2">Our professional CV services in Qatar aim to help fresh graduates and job professionals with a CV that
                guarantees to get their dream job faster. You have only one opportunity to make it to your dream job, don’t
                risk by dropping a CV which you aren’t satisfied with.</p>
            <p class="my-2">
                We’re a small team of CV writing experts who help you write a CV specifically tailored to the job you want
                to apply. Whether you’re a fresh graduate, mid-level professional or a freelancer, our services can help you
                make a lasting impression on the employer.
            </p>

            <h2 class="my-4 text-2xl md:text-4xl">100% RESULTS GUARANTEED WITH OUR RESUME WRITING SERVICES IN QATAR
            </h2>
            <p class="my-2">
                You think your job is done when you see a vacant post and drop your CV into their portal. But this strategy can never result in the interview. The first step is to read the job description and tailor your resume according to the job.
            </p>
            <p class="my-2">
                We have a team of professional resume writers in Qatar who know how to place your skills, experience and education in a way that it attracts the employer in the first impression. Our writers are professionals who have worked in the recruitment position and know what an employer expects in a CV.
            </p>
            <p class="my-2">
                Keeping to this, they create a customized resume to make it job winning. So, if you’re in the need of CV maker Qatar who can make your job searching easy then we’re right here to serve you. We also provide a cover letter and LinkedIn profile writing services to make your online profile credible and worth looking for. Want more? Let us know and we’ll be happy to help.
            </p>
            <h3 class="my-4 text-2xl md:text-4xl">GET YOUR CVS WRITTEN BY PROFESSIONAL CV MAKERS IN QATAR</h3>
            <p class="my-2">
                In today’s ever-changing and competitive job market, one tiny mistake can ruin your career and cause delays in the process. Even if you check and recheck your resume, the mistakes can still exist.
            </p>
            <p class="my-2">
                With our professional resume writers in Qatar, we provide you with unique and excellent resumes which guarantee to get the interview call in a short time. By making the process easy and painless, we ensure you the response rate and help you unlock many job opportunities. And we provide our services in Doha, Al Wakrah, Al Khor, Dukhan, Mesaieed, Lusail and all over Qatar so you can get the best from anywhere. Even if you want our CV writers in Doha to write CVs specifically for you, we can also connect you with them. The mission is to take you out of the chaos and make the job hunting process smooth for you.
            </p>

            <h3 class="my-4 text-2xl md:text-4xl">
                OUR PROFESSIONAL RESUME WRITERS IN QATAR ARE READY TO WORK FOR YOUR SUCCESS. ARE YOU?
            </h3>
            <p class="my-2">
                If you frequently search ‘CV writing services near me’ and get offended by a number of platforms claiming success then always inquire about the writers. Are they worth hiring? Are they experienced? This will earn you the satisfaction before you hire.
            </p>
            <p class="my-2">
                With our platform, we not only give you the chance to work with the writers but also encourage you to ask as many questions as you can. This is because we want your satisfaction with our services and build a lifetime relationship with you. Our expert writers work thoughtfully on your resume to make it win your hearts and of course your ideal job.
            </p>
            <p class="my-2">
                So, it’s time to take a deep breath, take a look over your resume and see if it’s worth sharing with the recruiters. If not then how about shaping it to get the results?
            </p>
            <p class="my-2">If you still don’t trust our words then how about testing our potential with a sample resume? We’re sure you won’t regret your decision because our resume writing services in Qatar have gained a credible reputation by serving quality for a long time.</p>
            <p class="my-2">Have we missed answering any important question? Ping us on our live chat and our customer support will get done with your queries soon.</p>
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
