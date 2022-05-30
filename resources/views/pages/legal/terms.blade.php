@extends('layouts.web')

@section('title', 'Terms & Conditions')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())

@section('content')

    <main class="">
        <div class="bg-primary-one">
            <div class="container  mx-auto   py-8">
                <div class="flex flex-col space-y-4 my-4 max-w-screen-xl md:my-0 lg:flex-row ">
                    <div class="mx-2 text-left">
                        <p>
                            <b class=" text-4xl text-white bg-primary-one px-8">Terms ans Conditions</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <section class="container mx-auto px-3 md:px-14 my-6 md:min-h-[15rem]">
            <p class="my-2">
                By using our services or entering our website you agree on our terms of use and services policies whether you confirm it or not through any action.
            </p>
            <div class="my-4 text-xl font-semibold">PRICING</div>
            <p class="my-2">We have mentioned our prices clearly and we expect you to understand and accept it before placing an order</p>
            <div class="my-4 text-xl font-semibold">DELIVERY TIME</div>
            <p>We request our customers to set an appropriate delivery time so that it can be easy for us to schedule your CV or resume.</p>
            <div class="my-4 text-xl font-semibold">REVISION TIME</div>
            <p class="my-2">Mostly we always give a draft of your CV first so a customer can review and grasp an idea that what he/she is looking for just after that we set your CV for Quality assurance. This is the reason revision time may take 3-5 days.</p>
            <div class="my-4 text-xl font-semibold">NUMBER OF REVISIONS</div>
            <p class="my-2">Customer should thoroughly go through resume at first time because we only accept the application for revision for two times after that we are unable to process your request.</p>
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
