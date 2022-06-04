@extends('layouts.web')

@section('title', 'About Us')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())

@section('links')
    <link rel="stylesheet" href="{{ asset('css/typo.css') }}">
@endsection
@section('content')
    <div class="bg-primary-one">
        <div class="container  mx-auto   py-8">
            <div class="flex flex-col space-y-4 my-4 max-w-screen-xl md:my-0 lg:flex-row ">
                <div class="mx-2 text-left">
                    <p>
                        <b class=" text-4xl text-white bg-primary-one px-8">About</b>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <main class="">
        <section class="container mx-auto px-3 md:px-14 my-6 md:min-h-[15rem]">
            <p class="my-2">
                CVWritersireland.com is UAE’s leading resume writing & editing service providers. We have helped many candidates in achieving their goals and catching the most suitable opportunities. We work in detail and provide CV writing service that professionally represent you in front of an employer.
            </p>
            <p class="my-2">
                We offer Different services includes, CV writing & Editing, Cover letter writing and Editing, LinkedIn profile editing and makes online profiles. Many skilled, educated and capable people today face problems in finding the right job for themselves. We are here to provide our support as expert CV writers here know very well how to fit in your experience and qualifications in your resume well.</p>
                <p class="my-2">
                    Our online Resume Editing & Writing services is a platform for the undergraduates, graduates, professional or seniors to hit an opportunity well and get their desired job.</p>
                
                    <div class="mt-4">
                        <a href="{{ route('order') }}" class="mt-4 pb-8 group">
                            <span class="bg-primary-two text-white font-semibold p-2 group-hover:bg-primary-one">Get
                                an Awesome Resume
                                Now</span>
                            <span
                                class="bg-primary-one p-2 -ml-2 group-hover:bg-primary-two group-hover:text-white"><i
                                    class="fa fa-long-arrow-right"></i></span>
                        </a>
                    </div>
        </section>
    </main>
    
   

@endsection
