@extends('layouts.web')

@section('title', 'Refund Policy')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())

@section('content')

    <main class="">
        <div class="bg-primary-one">
            <div class="container  mx-auto   py-8">
                <div class="flex flex-col space-y-4 my-4 max-w-screen-xl md:my-0 lg:flex-row ">
                    <div class="mx-2 text-left">
                        <p>
                            <b class=" text-4xl text-white bg-primary-one px-8">Refund Policy</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <section class="container mx-auto px-3 md:px-14 my-6 md:min-h-[8rem]">
            <p class="my-2">
                Once our writer starts your work and after 2 days of placing your order refund is not possible. However,
                there are some conditions on which we offer refund. We always ask our clients to clearly talk about what
                they want in their CV and let us know about the job they want to apply. Our expert writers follow your
                instruction and in case of any misrepresentation refund is not applicable.
            </p>

        </section>
    </main>

@endsection
