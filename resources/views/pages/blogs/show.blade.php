@extends('layouts.web')

@section('title', $blog->title ?? '-')
@section('description', $blog->meta_description ?? '-')
@section('canonical', $blog->canonical ?? '-')

@section('content')
    <style>
        /* Core CSS */
        .service-section h1 {
            --tw-text-opacity: 1;
            color: rgb(88 28 135 / var(--tw-text-opacity));
            font-weight: bold;
            font-size: 2.25rem;
            line-height: 2.5rem;
            margin: 1rem 0;
        }

        .service-section h2,
        h3 {
            text-align: center;
            --tw-text-opacity: 1;
            color: rgb(119 24 24 / var(--tw-text-opacity));
            font-size: 1.5rem;
            line-height: 2.5rem;
            margin-top: 1rem;
            margin-bottom: 1rem;

        }

        .service-section p {
            margin-top: 1rem;
            margin-bottom: 1rem;
        }

        .service-section a {
            --tw-text-opacity: 1;
            color: rgb(0 155 214 / var(--tw-text-opacity));
            font-weight: 700;
        }

        .service-section a:hover {
            --tw-text-opacity: 1;
            color: rgb(64 199 251 / var(--tw-text-opacity));
            text-decoration: underline;
        }

        .service-section ul {
            --tw-text-opacity: 1;
            color: rgb(159 163 165 / var(--tw-text-opacity));
            list-style-type: disc;
        }

        /* Mobile Size CSS */
        .service-section h1 {
            text-align: center;
        }

        .service-section ul {
            margin-left: 1rem;
        }

        /* md and greater screen size */
        @media (min-width: 768px) {
            .service-section h1 {
                text-align: left;
            }

            .service-section ul {
                margin-left: 2.5rem;
            }
        }

        /* sm and greater screen size  screen size */
        /* @media (min-width: 640px) {

        } */

    </style>



    <div class="bg-primary-one">
        <div class="container mx-auto">
            <div class=" grid  xl:grid-cols-12 text-white py-8  ">
                <div class="font-bold text-2xl md:text-3xl lg:text-4xl  xl:col-span-8 my-auto mx-4 lg:mx-0">{{ $blog->title }}</div>
                <div class="hidden xl:block my-auto font-semibold hover:underline"><a href="{{ route('home') }}">Home</a><i class="mx-6 fa-solid fa-angle-right"></i></div>
                <div class="hidden xl:block my-auto font-semibold hover:underline"><a href="{{ route('blogs') }}">blog</a><i class="mx-6 fa-solid fa-angle-right"></i></div>
                <div class="hidden xl:block my-auto font-semibold hover:underline"><a href="{{ route('blogs') }}">blogs</a><i class="mx-6 fa-solid fa-angle-right"></i></div>
                <div class="hidden xl:block font-semibold">{{ $blog->title }}</div>
            </div>
        </div>
    </div>


    <section class="service-section container mx-auto px-3 md:px-14 my-6 md:min-h-[15rem]  ">
        @if (!empty($blog))
            <div class=""><img src="{{URL('storage/'.$blog->image_path)}}" alt="blog-image" class="mx-auto" /></div>
                {!! $blog->description !!}             
        @endif
    </section>
@endsection


