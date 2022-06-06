@extends('layouts.web')

@section('title', 'Sitemap')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path() )

@section('content')

<div class="bg-primary-one">
    <div class="container  mx-auto   py-8">
        <div class="flex flex-col space-y-4 my-4 max-w-screen-xl md:my-0 lg:flex-row ">
            <div class="mx-2 text-left">
                <p>
                    <b class=" text-4xl text-white bg-primary-one px-8">Sitemap</b>
                </p>
            </div>
        </div>
    </div>
</div>

    <section class="container mx-auto my-10 px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3  mx-20">
            <div class="mx-10 my-4 lg:my-0">
                <h4 class="text-2xl font-semibold">PERFECT RESUME</h4>
                <ul class="list-disc mx-4 my-2 text-primary-one">
                    <li class="hover:text-orange-900 hover:underline my-2"><a href="{{ route('about') }}">About</a></li>
                    <li class="hover:text-orange-900 hover:underline my-2"><a href="{{ route('price') }}">Prices</a></li>
                    {{-- <li class="hover:text-orange-900 hover:underline my-2"><a href="{{ route('blogs') }}">Blog</a></li> --}}
                    <li class="hover:text-orange-900 hover:underline my-2"><a href="{{ route('order') }}">Order</a></li>
                    <li class="hover:text-orange-900 hover:underline my-2"><a href="{{ route('reviews') }}">Reviews</a></li>
                    <li class="hover:text-orange-900 hover:underline my-2"><a href="{{ route('sitemap') }}">Sitemap</a></li>
                    <li class="hover:text-orange-900 hover:underline my-2"><a href="{{ route('contact') }}">Contact</a></li>
                    <li class="hover:text-orange-900 hover:underline my-2"><a href="{{ route('samples') }}">Samples</a></li>
                </ul>
            </div>
            <div class="mx-10 my-4 lg:my-0">
                <h4 class="text-2xl font-semibold">Services</h4>
                <ul class="list-disc mx-4 my-2 text-primary-one">
                    @foreach ($services as $service)
                    <li class="hover:text-orange-900 hover:underline my-2"><a href="{{ route('services.show',$service->slug) }}">{{ $service->name }}</a></li>    
                    @endforeach
                    
                    {{-- <li class="hover:text-orange-900 hover:underline my-2"><a href="{{ route('services.three') }}">Resume Editing</a></li>
                    <li class="hover:text-orange-900 hover:underline my-2"><a href="{{ route('services.one') }}">Cover Letter Writing</a></li>
                    <li class="hover:text-orange-900 hover:underline my-2"><a href="{{ route('services.two') }}">LinkedIn Profile Writing</a></li> --}}
                    {{-- <li class="hover:text-orange-900 hover:underline my-2"><a href="{{ route('kas.flag') }}">Saudia Arabia</a></li>
                    <li class="hover:text-orange-900 hover:underline my-2"><a href="{{ route('kuwait.flag') }}">Kuwait</a></li>
                    <li class="hover:text-orange-900 hover:underline my-2"><a href="{{ route('oman.flag') }}">Oman</a></li>
                    <li class="hover:text-orange-900 hover:underline my-2"><a href="{{ route('qatar.flag') }}">Qatar</a></li>
                    <li class="hover:text-orange-900 hover:underline my-2"><a href="{{ route('bahrain.flag') }}">Bahrain</a></li> --}}
                </ul>
            </div>
            <div class="mx-10 my-4 lg:my-0">
                <h4 class="text-2xl font-semibold">Policies</h4>
                <ul class="list-disc mx-4 my-2  text-primary-one ">
                    <li class="hover:text-orange-900 hover:underline my-2"><a href="{{ route('policy.terms-and-conditions') }}">Terms & Condition</a></li>
                    <li class="hover:text-orange-900 hover:underline my-2"><a href="{{ route('policy.privacy-policy') }}">Privacy Policy</a></li>
                    <li class="hover:text-orange-900 hover:underline my-2"><a href="{{ route('refund') }}">Refund Policy</a></li>
                    <li class="hover:text-orange-900 hover:underline my-2"><a href="{{ route('cookie') }}">Cookie Policy</a></li>
                    <li class="hover:text-orange-900 hover:underline my-2"><a href="{{ route('guarantee') }}">Guarantees</a></li>
                    
                </ul>
            </div>
        </div>
        
    </section>

@endsection
