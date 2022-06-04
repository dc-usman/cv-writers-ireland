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
            <img class="h-full mx-auto" src="{{ asset('imgs/cv-writing-ireland-testimonial-image-removebg-preview.png') }}" alt="logo">
        </div>
        <div class="w-full md:w-2/3">
            {{-- <div class="text-4xl font-semibold mt-10 text-center md:text-left">6,700+</div> --}}
            <div class="text-4xl text-center md:text-left">Meet Our Happy Customers</div>
            
            <!-- Swiper -->
            <div class="swiper mySwiper ">
                <div class="swiper-wrapper mt-8 mb-20 text-center md:text-left">
                    <div class="swiper-slide">I received an exceptional resume from them. I never thought someone can improve my CV to this extent. So satisfied with their work. 
                        <div class="mt-2 text-blue-500 italic text-xl font-semibold">
                            Martin
                        </div>
                    </div>
                    <div class="swiper-slide">Hired them to write a cover letter and to improve my existing CV, I must say they add more value to my CV. Cover letter was impressive as well. I’m happily working at my dream company. Thanks to them! 
                        <div class="mt-2 text-blue-500 italic text-xl font-semibold">
                            Chris Mt
                        </div>
                    </div>
                    <div class="swiper-slide">I messed up with my CV and I don’t have any time left. I contacted them for urgent support and they helped me out. Very professional company.
                        <div class="mt-2 text-blue-500 italic text-xl font-semibold">
                            Louisa
                        </div>
                    </div>
                    <div class="swiper-slide">They dealt with my queries with a kind attitude. Although I was panicking at the moment but they listened to my complaints and worked on it responsibly. 
                        <div class="mt-2 text-blue-500 italic text-xl font-semibold">
                            Sawan Kumar
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