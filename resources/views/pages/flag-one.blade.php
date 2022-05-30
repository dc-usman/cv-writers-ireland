@extends('layouts.web')

@section('title', 'Top CV Writing Services in Saudi Arabia By Perfect Resume')
@section('description', 'Are you seeking for help from CV writing experts in Saudi Arabia? Perfect Resume Writers provides best services in Jeddah, Riyadh, Dammam, and other cities')
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
                        <b class="text-2xl md:text-4xl text-white bg-primary-one px-4">CV Writing Services in KSA</b>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <main class="">
        <section class="container mx-auto px-3 md:px-14 my-6 md:min-h-[15rem]">
            <h1 class="my-4 text-2xl md:text-4xl"><b>CV</b> WRITING SERVICES IN KSA</h1>
            <p class="my-2">
                Do you feel disappointed when your CV got dumped? Do you want to make a strong, fulfilling career, but don’t
                know how to start?
            </p>
            <p class="my-2">
                Take a breath! It happens with the majority of the fresh graduates. They consistently drop their CVs on the
                portal but get disappointed when they didn’t get the interview call.</p>
            <p class="my-2">
                For this, if you make your CV proofread by a counsellor, you’ll know where it lacks and why it’s not scoring
                your dream job.</p>
            <p>Getting professional consultation on your resume is important because you might think your CV is perfect but
                for the professionals, it might be below the curve.</p>
            <p class="my-2">
                And when the competition is so tough, a small mistake can cost your career. That’s where our leading CV
                writing in Saudi Arabia comes to rescue.
            </p>
            <p class="my-2">
                We’re a small team of CV writing experts who help you write a CV specifically tailored to the job you want
                to apply. Whether you’re a fresh graduate, mid-level professional or a freelancer, our services can help you
                make a lasting impression on the employer.
            </p>

            <h2 class="my-4 text-2xl md:text-4xl">HOW OUR CV WRITING SERVICES IN SAUDI ARABIA HELPS TO GROW YOUR CAREER?</h2>
            <p class="my-2">
                The only connection between your employer and you is the CV you drop into his mailbox. By overviewing your CV, he can judge whether you’re the best fit for the job or not. That's why it’s important to make the most of your CV. You shouldn’t fluff it up with unwanted points, confusing job objectives and details that you aren’t asked for.
            </p>
            <p class="my-2">
                The first step is to read the job description thoroughly and understand what the employers want. And that’s how our CV writing experts start creating your resume. We go through your profile and put the information that’s required for the job. And then we use the keywords to attract the employer.
            </p>
            <p class="my-2">
                Out of the thousand students we have helped through our platform, 90 percent have been able to land their dream job. And we’re proud of this success rate! So, if your CV has been rejected multiple times, we’re here to help you out. Whether you live in Riyadh, Jeddah, Dammam, Medina, Mecca, Dhahran, Al Jubail, Al Khobar or in any other city of KSA, our expertise for writing your CV in Saudi Arabia will be value-adding for your career.
            </p>
            <h3 class="my-4 text-2xl md:text-4xl">LOOKING FOR EXPERTS IN WRITING CV IN SAUDI ARABIA?</h3>
            <p class="my-2">
                We know a lot of students who want to make a great career but don’t know how to make an excellent resume. They search for professional CV writers who can take them out of this stress.
            </p>
            <p class="my-2">
                When you hire us for your CV, you can be at ease because we have professional CV writing experts to do the job for you. If you’re a fresh graduate, mid-level professional or someone who’s enthusiastic to switch their career, then we are only a click away from you.
            </p>
            <p class="my-2">
                We can not only write your CV but can also create your best LinkedIn profile to make you appear in the LinkedIn searches. With a sound experience of writing CVs for more than 5 years, we’re happy to help students to connect to their dream jobs and make an outstanding career.
            </p>
            <p class="my-2">
                If you’re concerned that we’ll use CV template, Saudi Arabia, to create your resume then know that we create specific and unique profiles for every student. And once it’s used, we neither rewrite nor reuse it. That’s one of the reasons why our CV services in KSA has become a need for students.
            </p>
            <p class="my-2">
                If you’re the one who’s struggling to get an interview call from your potential employer, give us a chance and you won’t regret your decision, we bet it.
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
