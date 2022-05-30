@extends('layouts.web')

@section('title', 'Reviews')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())

@section('content')

<style>
    .swiper-button-next:after {
        font-size: 20px;
    }

    .swiper-button-prev:after {
        font-size: 20px;
    }

    .swiper-button-next {
        margin-top: 3rem;
        color: white;
        left: 0;
        margin-left: 6rem;
    }

    @media(max-width:767px) {
        .swiper-button-next {
            left: auto !important;
            margin-left: 0;
        }
    }

    .swiper-button-prev {
        margin-top: 3rem;
        color: white;
    }

    @media(max-width:375px) {
        .swiper-button-next {
            margin-top: 5rem; 
        }
        .swiper-button-prev {
            margin-top: 5rem;
        }
    }

    

</style>

<div class="bg-primary-one">
    <div class="container  mx-auto   py-8">
        <div class="flex flex-col space-y-4 my-4 max-w-screen-xl md:my-0 lg:flex-row ">
            <div class="mx-2 text-center lg:text-left">
                <p>
                    <b class=" text-2xl lg:text-4xl text-white bg-primary-one px-8">Reviews</b>
                </p>
            </div>
        </div>
    </div>
</div>

<section class="container px-10 md:px-16 lg:px-24 py-5 mx-auto">

    <div class="flex flex-col md:flex-row">
        <div class="w-full md:w-1/3">
            <img class="h-[22rem] mx-auto" src="../imgs/testimonials.webp" alt="">
        </div>
        <div class="w-full md:w-2/3">
            <div class="text-4xl font-semibold mt-10 text-center md:text-left">6,700+</div>
            <div class="text-4xl text-center md:text-left">HAPPY CUSTOMERS</div>
            
            <!-- Swiper -->
            <div class="swiper mySwiper ">
                <div class="swiper-wrapper mt-8 mb-20 text-center md:text-left">
                    <div class="swiper-slide">There was an urgent requirement as only a day left for closing of job.
                        Thanks to Perfect resume they provided with job description oriented CV in a day and I was
                        fortunate enough to apply for it.
                        <div class="mt-2 text-blue-500 italic text-xl font-semibold">
                            Abdul Kareem
                        </div>
                    </div>
                    <div class="swiper-slide">I just shared all my queries with the CV expert Writers here and they assisted me so well. They gave a perfect look to my CV
                        <div class="mt-2 text-blue-500 italic text-xl font-semibold">
                            Aliyah
                        </div>
                    </div>
                    <div class="swiper-slide">It is surprising how amazingly they managed the content of my four pages CV into two pages with proper synchronization and alignment
                        <div class="mt-2 text-blue-500 italic text-xl font-semibold">
                            Sheikh Abdul Aziz
                        </div>
                    </div>
                    <div class="swiper-slide">It is appreciable that how professionally they deal with their customers. Perfect resume ask for every detail before starting the work and deliver the best CV
                        <div class="mt-2 text-blue-500 italic text-xl font-semibold">
                            Zayn
                        </div>
                    </div>
                    
                </div>
                <div class="swiper-button-next px-8 bg-primary-two "></div>
                <div class="swiper-button-prev px-8 bg-primary-two "></div>
            </div>

            
        </div>
    </div>
</section>

@endsection

@section('scripts')
     {{-- <!-- Swiper JS --> --}}
     <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

     {{-- <!-- Initialize Swiper --> --}}
     <script>
         var swiper = new Swiper(".mySwiper", {
             slidesPerView: 1,
             spaceBetween: 30,
             keyboard: {
                 enabled: true,
             },
             autoplay: {
             delay: 3000,
             disableOnInteraction: false,
             },
             navigation: {
                 nextEl: ".swiper-button-next",
                 prevEl: ".swiper-button-prev",
             },
         });
     </script>
 
@endsection