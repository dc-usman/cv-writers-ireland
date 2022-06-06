@extends('layouts.web')

@section('title', $service->title ?? "-")
@section('description', $service->meta_description  ?? "-")
@section('canonical', $service->canonical  ?? "-")

@section('content')
    <style>
        /* Core CSS */
        .service-section h1 {
            --tw-text-opacity: 1;
            color: rgb(00 00 00/ var(--tw-text-opacity));
            /* font-weight: semi-bold; */
            font-size: 3rem;
            line-height: 3.25rem;
            margin: 1rem 0;
        }
        .service-section h2,h3 {
            --tw-text-opacity: 1;
            color: rgb(00 00 00/ var(--tw-text-opacity));
            font-size: 2rem;
            line-height: 2.5rem;
            margin-top: 1rem;
            margin-bottom: 1rem;

        }
        .service-section h4 {
            --tw-text-opacity: 1;
            /* color:#FF7E00; */
             color: rgb(00 00 00/ var(--tw-text-opacity)); 
            font-size: 1.75rem;
            line-height: 1.5rem;
            margin-top: 1rem;
            margin-bottom: 1rem;

        }

        .service-section p{
            margin-top:1rem;
            margin-bottom:1rem;
        }
        .service-section a{
            --tw-text-opacity: 1;
            color: rgb(37 99 235/ var(--tw-text-opacity));
            font-weight: 700;
        }
        .service-section a:hover{
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity));
        }
        .service-section ul{
            color: #333;
            list-style-type: disc;
        }
        /* Mobile Size CSS */
        .service-section h1 {
            text-align: center;
        }
        .service-section ul{
            margin-left: 1rem;
        }
        /* md and greater screen size */
        @media (min-width: 768px) {
            .service-section h1 {
                text-align: left;
                /* font-size: 1rem; */
            }
            .service-section ul{
                margin-left: 2.5rem;
            }
        }

         @media (max-width: 768px) {
            .service-section h1 {
                text-align: left;
                font-size: 2rem;
                line-height: 2.5rem;
            }
            .service-section ul{
                margin-left: 2.5rem;
            }
        } 
        /* sm and greater screen size  screen size */
        /* @media (min-width: 640px) {

        } */

    </style>
    {{-- Name Bar --}}
    <section>
        <div class="bg-primary-one">
            <div class="container  mx-auto   py-8">
                <div class=" grid  xl:grid-cols-12 text-white py-4  ">
                    <div class="font-bold text-center md:text-left text-4xl   xl:col-span-9 my-auto px-4">{{ $service->name }}</div>
                    <div class="hidden xl:block  my-auto font-semibold hover:underline"><a href="{{ route('home') }}">Home</a><i class="mx-6 fa-solid fa-angle-right"></i></div>
                    {{-- <div class="hidden xl:block my-auto font-semibold hover:underline"><a href="{{ route('blogs') }}">blog</a><i class="mx-6 fa-solid fa-angle-right"></i></div> --}}
                    {{-- <div class="hidden xl:block my-auto font-semibold hover:underline"><a href="{{ route('blogs') }}">blogs</a><i class="mx-6 fa-solid fa-angle-right"></i></div> --}}
                    <div class="hidden xl:block font-semibold col-span-2 my-auto">{{ $service->name }}</div>
                </div>
            </div>
        </div>
    </section>
    {{-- Service Dynamic Content --}}
    @if (!empty($service))
    <section class="service-section container mx-auto px-3 md:px-14 my-6 md:min-h-[15rem]">
        {!! $service->html !!}            
    </section>    
    @endif
@endsection

