@extends('layouts.web')
@section('title', 'Cookie Policy')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())

@section('content')

    <main class="">
        <div class="bg-primary-one">
            <div class="container  mx-auto   py-8">
                <div class="flex flex-col space-y-4 my-4 max-w-screen-xl md:my-0 lg:flex-row ">
                    <div class="mx-2 text-left">
                        <p>
                            <b class=" text-4xl text-white bg-primary-one px-8">Cookie Policy</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <section class="container mx-auto px-3 md:px-14 my-6 md:min-h-[8rem]">
            <p class="my-2">
                We inform our customers that there are cookies in our website that are not harmful and require your basic information so it will be easy for us to track our customers. Through cookies it is easier for us to let customers know about new offers and discounts. Customer should not be afraid of anything or loss of privacy through any kind of message or pop-up window. This is done to make our site secure for our customers.
            </p>

        </section>
    </main>

@endsection