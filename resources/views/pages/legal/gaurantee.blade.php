@extends('layouts.web')
@section('title', 'Gaurantee')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())

@section('content')

    <main class="">
        <div class="bg-primary-one">
            <div class="container  mx-auto   py-8">
                <div class="flex flex-col space-y-4 my-4 max-w-screen-xl md:my-0 lg:flex-row ">
                    <div class="mx-2 text-left">
                        <p>
                            <b class=" text-4xl text-white bg-primary-one px-8">Gaurantee</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <section class="container mx-auto px-3 md:px-14 my-6 md:min-h-[8rem]">
            <p class="my-2">
                We are providing customers with CV writing & editing services in UAE since years. We are one of the most trusted and reliable Resume writing service providers and guarantee quality work. We deliver what we say, so customer shouldn’t be afraid once they have asked for our services.
            </p>

        </section>
    </main>

@endsection