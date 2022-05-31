@extends('layouts.web')

@section('title', 'Samples')
@section('description', '')
@section('canonical', config('app.app_url'). Request::path())

@section('content')

<div>
    <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-90 overflow-y-auto h-full w-full z-10" id="my-modal-1"
        data-target="0">

        {{-- Modal Content Resume --}}
        <div class="relative  mx-auto p-5 border w-[90%] md:w-[32%] shadow-lg rounded-md bg-white my-4 md:my-2 ">
            <img src="{{ asset('imgs/sample/x-icon.png') }}" alt="Cheap Cv"
                class="w-5 absolute top-3 cursor-pointer " id="ok-btn-1">
            <div class="mt-3 text-center w-full ">
                <img src="{{ asset('imgs/sample/pr-sample-1.jpg') }}" class="object-contain" alt="Cheap Cv" id="image">
            </div>
        </div>
    </div>

    <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-90 overflow-y-auto h-full w-full z-10" id="my-modal-2"
        data-target="1">
        {{-- Modal Content --}}
        <div class="relative  mx-auto p-5 border w-[90%] md:w-[32%] shadow-lg rounded-md bg-white my-4 md:my-2">
            <img src="{{ asset('imgs/sample/x-icon.png') }}" alt="Cheap Cv"
                class="w-5 absolute top-3 cursor-pointer " id="ok-btn-2">
            <div class="mt-3 text-center">
                <img src="{{ asset('imgs/sample/pr-sample-2.jpg') }}" alt="Cheap Cv" id="image"
                    class="h-full">
            </div>
        </div>
    </div>

    <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-90 overflow-y-auto h-full w-full z-10" id="my-modal-3"
        data-target="2">
        {{-- Modal Content --}}
        <div class="relative  mx-auto p-5 border w-[90%] md:w-[32%] shadow-lg rounded-md bg-white my-4 md:my-2">
            <img src="{{ asset('imgs/sample/x-icon.png') }}" alt="Cheap Cv"
                class="w-5 absolute top-3 cursor-pointer " id="ok-btn-3">
            <div class="mt-3 text-center">
                <img src="{{ asset('imgs/sample/pr-sample-3.jpg') }}" alt="Cheap Cv" id="image"
                    class="h-full">

            </div>
        </div>
    </div>

    <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-90 overflow-y-auto h-full w-full z-10" id="my-modal-4"
        data-target="3">
        {{-- Modal Content --}}
        <div class="relative  mx-auto p-5 border w-[90%] md:w-[30%] shadow-lg rounded-md bg-white my-4 md:my-2">
            <img src="{{ asset('imgs/sample/x-icon.png') }}" alt="Cheap Cv"
                class="w-5 absolute top-3 cursor-pointer " id="ok-btn-4">
            <div class="mt-3 text-center">
                <img src="{{ asset('imgs/sample/pr-sample-4.jpg') }}" alt="Cheap Cv" id="image"
                    class="h-full">

            </div>
        </div>
    </div>

    <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-90 overflow-y-auto h-full w-full z-10" id="my-modal-5"
        data-target="4">
        {{-- Modal Content --}}
        <div class="relative  mx-auto p-5 border w-[90%] md:w-[32%] shadow-lg rounded-md bg-white my-4 md:my-2">
            <img src="{{ asset('imgs/sample/x-icon.png') }}" alt="Cheap Cv"
                class="w-5 absolute top-3 cursor-pointer " id="ok-btn-5">
            <div class="mt-3 text-center">
                <img src="{{ asset('imgs/sample/pr-sample-5.jpg') }}" alt="Cheap Cv" id="image"
                    class="h-full">

            </div>
        </div>
    </div>

    <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-90 overflow-y-auto h-full w-full z-10" id="my-modal-6"
        data-target="5">
        <div class="relative  mx-auto p-5 border w-[90%] md:w-[32%] shadow-lg rounded-md bg-white my-4 md:my-2">
            <img src="{{ asset('imgs/sample/x-icon.png') }}" alt="Cheap Cv"
                class="w-5 absolute top-3 cursor-pointer " id="ok-btn-6">
            <div class="mt-3 text-center">
                <img src="{{ asset('imgs/sample/pr-sample-6.jpg') }}" alt="Cheap Cv" id="image"
                    class="h-full">

            </div>
        </div>
    </div>

    <div class=" fixed hidden inset-0 bg-gray-600 bg-opacity-90 overflow-y-auto h-full w-full z-10" id="my-modal-7"
        data-target="6" >
        <div class=" relative  mx-auto p-5 border w-[90%] md:w-[32%] shadow-lg rounded-md bg-white my-4 md:my-2">
            <img src="{{ asset('imgs/sample/x-icon.png') }}" alt="Cheap Cv"
                class="w-5 absolute top-3 cursor-pointer " id="ok-btn-7">
            <div class="mt-3 text-center">
                <img src="{{ asset('imgs/sample/pr-sample-7.jpg') }}" alt="Cheap Cv" id="image"
                    class="h-full">
            </div>
        </div>
    </div>

    <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-90 overflow-y-auto h-full w-full z-10" id="my-modal-8"
        data-target="7">
        <div class="relative  mx-auto p-5 border w-[90%] md:w-[32%] shadow-lg rounded-md bg-white my-4 md:my-2">
            <img src="{{ asset('imgs/sample/x-icon.png') }}" alt="Cheap Cv"
                class="w-5 absolute top-3 cursor-pointer " id="ok-btn-8">
            <div class="mt-3 text-center">
                <img src="{{ asset('imgs/sample/pr-sample-8.jpg') }}" alt="Cheap Cv" id="image"
                    class="h-full">

            </div>
        </div>
    </div>

    <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-90 overflow-y-auto h-full w-full z-10" id="my-modal-9"
        data-target="8">
        <div class="relative  mx-auto p-5 border w-[90%] md:w-[32%] shadow-lg rounded-md bg-white my-4 md:my-2">
            <img src="{{ asset('imgs/sample/x-icon.png') }}" alt="Cheap Cv"
                class="w-5 absolute top-3 cursor-pointer " id="ok-btn-9">
            <div class="mt-3 text-center">
                <img src="{{ asset('imgs/sample/pr-sample-9.jpg') }}" alt="Cheap Cv" id="image"
                    class="h-full">

            </div>
        </div>
    </div>

    <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-90 overflow-y-auto h-full w-full z-10" id="my-modal-10"
        data-target="8">
        <div class="relative  mx-auto p-5 border w-[90%] md:w-[32%] shadow-lg rounded-md bg-white my-4 md:my-2">
            <img src="{{ asset('imgs/sample/x-icon.png') }}" alt="Cheap Cv"
                class="w-5 absolute top-3 cursor-pointer " id="ok-btn-10">
            <div class="mt-3 text-center">
                <img src="{{ asset('imgs/sample/pr-sample-10.jpg') }}" alt="Cheap Cv" id="image"
                    class="h-full">

            </div>
        </div>
    </div>

    <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-90 overflow-y-auto h-full w-full z-10" id="my-modal-11"
        data-target="8">
        <div class="relative  mx-auto p-5 border w-[90%] md:w-[32%] shadow-lg rounded-md bg-white my-4 md:my-2">
            <img src="{{ asset('imgs/sample/x-icon.png') }}" alt="Cheap Cv"
                class="w-5 absolute top-3 cursor-pointer " id="ok-btn-11">
            <div class="mt-3 text-center">
                <img src="{{ asset('imgs/sample/pr-sample-11.jpg') }}" alt="Cheap Cv" id="image"
                    class="h-full">

            </div>
        </div>
    </div>
    <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-90 overflow-y-auto h-full w-full z-10" id="my-modal-12"
        data-target="8">
        <div class="relative  mx-auto p-5 border w-[90%] md:w-[32%] shadow-lg rounded-md bg-white my-4 md:my-2">
            <img src="{{ asset('imgs/sample/x-icon.png') }}" alt="Cheap Cv"
                class="w-5 absolute top-3 cursor-pointer " id="ok-btn-12">
            <div class="mt-3 text-center">
                <img src="{{ asset('imgs/sample/pr-sample-12.jpg') }}" alt="Cheap Cv" id="image"
                    class="h-full">
            </div>
        </div>
    </div>

    <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-90 overflow-y-auto h-full w-full z-10" id="my-modal-13"
        data-target="8">
        <div class="relative  mx-auto p-5 border w-[50%] md:w-[17%] shadow-lg rounded-md bg-white my-4 md:my-2">
            <img src="{{ asset('imgs/sample/x-icon.png') }}" alt="Cheap Cv"
                class="w-5 absolute top-3 cursor-pointer " id="ok-btn-13">
            <div class="mt-3 text-center">
                <img src="{{ asset('imgs/sample/pr-sample-11.png') }}" alt="Cheap Cv" id="image"
                    class="h-full">
            </div>
        </div>
    </div>

    <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-90 overflow-y-auto h-full w-full z-10" id="my-modal-14"
        data-target="8">
        <div class="relative  mx-auto p-5 border w-[50%] md:w-[16%] shadow-lg rounded-md bg-white my-4 md:my-2">
            <img src="{{ asset('imgs/sample/x-icon.png') }}" alt="Cheap Cv"
                class="w-5 absolute top-3 cursor-pointer " id="ok-btn-14">
            <div class="mt-3 text-center">
                <img src="{{ asset('imgs/sample/pr-sam-l2.png') }}" alt="Cheap Cv" id="image"
                    class="h-full">
            </div>
        </div>
    </div>

    <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-90 overflow-y-auto h-full w-full z-10" id="my-modal-15"
        data-target="8">
        <div class="relative  mx-auto p-5 border w-[50%] md:w-[20%] shadow-lg rounded-md bg-white my-4 md:my-2">
            <img src="{{ asset('imgs/sample/x-icon.png') }}" alt="Cheap Cv"
                class="w-5 absolute top-3 cursor-pointer " id="ok-btn-15">
            <div class="mt-3 text-center">
                <img src="{{ asset('imgs/sample/pr-sample-13.png') }}" alt="Cheap Cv" id="image"
                    class="h-full">
            </div>
        </div>
    </div>

    <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-90 overflow-y-auto h-full w-full z-10" id="my-modal-16"
        data-target="8">
        <div class="relative  mx-auto p-5 border w-[50%] md:w-[16%] shadow-lg rounded-md bg-white my-4 md:my-2">
            <img src="{{ asset('imgs/sample/x-icon.png') }}" alt="Cheap Cv"
                class="w-5 absolute top-3 cursor-pointer " id="ok-btn-16">
            <div class="mt-3 text-center">
                <img src="{{ asset('imgs/sample/pr-sample-14.png') }}" alt="Cheap Cv" id="image"
                    class="h-full">
            </div>
        </div>
    </div>
</div>

    <section class="bg-primary-one px-4 md:px-16 lg:px-24 py-5">

        <div class="container mx-auto">
            <div class="text-center text-4xl text-white py-[2.5rem]">
                <strong>SAMPLE</strong> CV / RESUMES
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-y-3 lg:gap-y-10">

                <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 cursor-pointer">
                    <img class="h-80 mx-auto border-4 border-gray-300 md:rotate-[-3deg] "
                        src="{{ asset('imgs/sample/pr-sample-1.jpg') }}" alt="pr" id="open-btn-1">
                </div>
                <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 cursor-pointer">
                    <img class="h-80 mx-auto border-4 border-gray-300 md:rotate-[3deg]"
                        src="{{ asset('imgs/sample/pr-sample-2.jpg') }}" alt="pr" id="open-btn-2">
                </div>
                <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 cursor-pointer">
                    <img class="h-80 mx-auto border-4 border-gray-300 md:rotate-[-3deg]"
                        src="{{ asset('imgs/sample/pr-sample-3.jpg') }}" alt="pr" id="open-btn-3">
                </div>
                <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 cursor-pointer">
                    <img class="h-80 mx-auto border-4 border-gray-300 md:rotate-[3deg]"
                        src="{{ asset('imgs/sample/pr-sample-4.jpg') }}" alt="pr" id="open-btn-4">
                </div>
                <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 cursor-pointer">
                    <img class="h-80 mx-auto border-4 border-gray-300 md:rotate-[-3deg] "
                        src="{{ asset('imgs/sample/pr-sample-5.jpg') }}" alt="pr" id="open-btn-5">
                </div>
                <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 cursor-pointer">
                    <img class="h-80 mx-auto border-4 border-gray-300 md:rotate-[3deg]"
                        src="{{ asset('imgs/sample/pr-sample-6.jpg') }}" alt="pr" id="open-btn-6">
                </div>
                <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 cursor-pointer">
                    <img class="h-80 mx-auto border-4 border-gray-300 md:rotate-[-3deg]"
                        src="{{ asset('imgs/sample/pr-sample-7.jpg') }}" alt="pr" id="open-btn-7">
                </div>
                <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 cursor-pointer">
                    <img class="h-80 mx-auto border-4 border-gray-300 md:rotate-[3deg]"
                        src="{{ asset('imgs/sample/pr-sample-8.jpg') }}" alt="pr" id="open-btn-8">
                </div>
            </div>

            <div class="text-center text-4xl text-white py-[3.5rem]">
                <strong>SAMPLE</strong> COVER LETTERS
            </div>

            <div class=" grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-y-3">

                <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 cursor-pointer">
                    <img class="h-80 mx-auto border-4 border-gray-300 md:rotate-[-3deg] "
                        src="{{ asset('imgs/sample/pr-sample-9.jpg') }}" alt="pr" id="open-btn-9">
                </div>
                <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 cursor-pointer">
                    <img class="h-80 mx-auto border-4 border-gray-300 md:rotate-[3deg]"
                        src="{{ asset('imgs/sample/pr-sample-10.jpg') }}" alt="pr" id="open-btn-10">
                </div>
                <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 cursor-pointer">
                    <img class="h-80 mx-auto border-4 border-gray-300 md:rotate-[-3deg]"
                        src="{{ asset('imgs/sample/pr-sample-11.jpg') }}" alt="pr" id="open-btn-11">
                </div>
                <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 cursor-pointer">
                    <img class="h-80 mx-auto border-4 border-gray-300 md:rotate-[3deg]"
                        src="{{ asset('imgs/sample/pr-sample-12.jpg') }}" alt="pr" id="open-btn-12">
                </div>
            </div>

            <div class="text-center text-4xl text-white py-[3.5rem]">
                <strong>SAMPLE</strong> LINKEDIN PROFILES
            </div>

            <div class=" grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-y-3">

                <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 cursor-pointer">
                    <img class="h-80 w-60 mx-auto border-4 border-gray-300 md:rotate-[-3deg] "
                        src="{{ asset('imgs/sample/pr-sample-11.png') }}" alt="pr" id="open-btn-13">
                </div>
                <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 cursor-pointer">
                    <img class="h-80 w-60 mx-auto border-4 border-gray-300 md:rotate-[3deg]"
                        src="{{ asset('imgs/sample/pr-sam-l2.png') }}" alt="pr" id="open-btn-14">
                </div>
                <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 cursor-pointer">
                    <img class="h-80 w-60 mx-auto border-4 border-gray-300 md:rotate-[-3deg]"
                        src="{{ asset('imgs/sample/pr-sample-13.png') }}" alt="pr" id="open-btn-15">
                </div>
                <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 cursor-pointer">
                    <img class="h-80 w-60 mx-auto border-4 border-gray-300 md:rotate-[3deg]"
                        src="{{ asset('imgs/sample/pr-sample-14.png') }}" alt="pr" id="open-btn-16">
                </div>
            </div>
        </div>

    </section>
@endsection

@section('scripts')
    <script>
       
        let modal = [document.getElementById("my-modal-1"), document.getElementById("my-modal-2"), document.getElementById(
                "my-modal-3"), document.getElementById("my-modal-4"), document.getElementById("my-modal-5"), document
            .getElementById("my-modal-6"), document.getElementById("my-modal-7"), document.getElementById("my-modal-8"),
            document.getElementById("my-modal-9"), document.getElementById("my-modal-10"), document.getElementById(
                "my-modal-11"), document.getElementById("my-modal-12"), document.getElementById("my-modal-13"), document
            .getElementById("my-modal-14"), document.getElementById("my-modal-15"), document.getElementById(
                "my-modal-16")
        ];
        let image = [document.getElementById("open-btn-1"), document.getElementById("open-btn-2"), document.getElementById(
                "open-btn-3"), document.getElementById("open-btn-4"), document.getElementById("open-btn-5"), document
            .getElementById("open-btn-6"), document.getElementById("open-btn-7"), document.getElementById("open-btn-8"),
            document.getElementById("open-btn-9"), document.getElementById("open-btn-10"), document.getElementById(
                "open-btn-11"), document.getElementById("open-btn-12"), document.getElementById("open-btn-13"), document
            .getElementById("open-btn-14"), document.getElementById("open-btn-15"), document.getElementById(
                "open-btn-16")
        ];
        let button = [document.getElementById("ok-btn-1"), document.getElementById("ok-btn-2"), document.getElementById(
                "ok-btn-3"), document.getElementById("ok-btn-4"), document.getElementById("ok-btn-5"), document
            .getElementById("ok-btn-6"), document.getElementById("ok-btn-7"), document.getElementById("ok-btn-8"),
            document.getElementById("ok-btn-9"), document.getElementById("ok-btn-10"), document.getElementById("ok-btn-11"),
            document.getElementById("ok-btn-12"), document.getElementById("ok-btn-13"), document.getElementById("ok-btn-14"),
            document.getElementById("ok-btn-15"), document.getElementById("ok-btn-16")
        ];

        for (let i = 0; i < modal.length; i++) {

            image[i].onclick = function() {

                modal[i].style.display = "block";

                button[i].onclick = function() {
                    modal[i].style.display = "none";
                }


                window.onclick = function(event) {
                    if (event.target == modal[i]) {
                        modal[i].style.display = "none";
                    }
                }

            }
        }

    </script>
@endsection