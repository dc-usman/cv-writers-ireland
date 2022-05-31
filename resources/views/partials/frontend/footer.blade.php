<footer class="bg-primary-two pt-10">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 relative">

            <div class="order-1 lg:order-1 mx-auto text-center text-white md:text-left ">
                <h4 class="uppercase text-xl font-bold ">COMPANY</h4>
                <hr class="w-full md:w-2/6 mt-2">
                <ul class="md:list-disc my-2 md:ml-6">
                    <li class="text-primary-one hover:text-white py-1">
                        <a href="{{ route('about') }}" class="text-white hover:text-primary-one cursor-pointer"> About </a>
                    </li>
                    <li class="text-primary-one hover:text-white py-1">
                        <a href="{{ route('price') }}" class="text-white hover:text-primary-one cursor-pointer"> Prices </a>
                    </li>
                    <li class="text-primary-one hover:text-white py-1">
                        <a href="{{ route('blogs') }}" class="text-white hover:text-primary-one cursor-pointer"> Blog </a>
                    </li>
                    <li class="text-primary-one hover:text-white py-1">
                        <a href="{{ route('order') }}" class="text-white hover:text-primary-one cursor-pointer"> Order </a>
                    </li>
                    <li class="text-primary-one hover:text-white py-1">
                        <a href="{{ route('reviews') }}" class="text-white hover:text-primary-one cursor-pointer"> Reviews </a>
                    </li>
                    <li class="text-primary-one hover:text-white py-1">
                        <a href="{{ route('sitemap') }}" class="text-white hover:text-primary-one cursor-pointer"> Sitemap </a>
                    </li>
                    <li class="text-primary-one hover:text-white py-1">
                        <a href="{{ route('contact') }}" class="text-white hover:text-primary-one cursor-pointer"> Contact </a>
                    </li>
                    <li class="text-primary-one hover:text-white py-1">
                        <a href="{{ route('samples') }}" class="text-white hover:text-primary-one cursor-pointer"> Samples </a>
                    </li>
                </ul>
            </div>

            <div class="order-3 xl:order-2 text-center text-white md:text-left mx-auto ">
                <h4 class="uppercase text-xl font-bold ">SERVICES WE OFFER</h4>
                <hr class="w-full md:w-2/6 mt-2">
                <ul class="md:list-disc my-2 md:ml-6">
                    <li class="text-primary-one hover:text-white py-1">
                        <a href="{{ route('services.four') }}" class="text-white hover:text-primary-one cursor-pointer"> CV Editing </a>
                    </li>
                    <li class="text-primary-one hover:text-white py-1">
                        <a href="{{ route('services.three') }}" class="text-white hover:text-primary-one cursor-pointer"> Resume Editing </a>
                    </li>
                    <li class="text-primary-one hover:text-white py-1">
                        <a href="{{ route('services.one') }}" class="text-white hover:text-primary-one cursor-pointer"> Cover Letter Writing </a>
                    </li>
                    <li class="text-primary-one hover:text-white py-1">
                        <a href="{{ route('services.two') }}" class="text-white hover:text-primary-one cursor-pointer"> LinkedIn Profile Writing </a>
                    </li>
                    <li class="text-primary-one hover:text-white py-1">
                        <a href="{{ route('kas.flag') }}" class="text-white hover:text-primary-one cursor-pointer"> Saudi Arabia </a>
                    </li>
                    <li class="text-primary-one hover:text-white py-1">
                        <a href="{{ route('kuwait.flag') }}" class="text-white hover:text-primary-one cursor-pointer"> Kuwait </a>
                    </li>
                    <li class="text-primary-one hover:text-white py-1">
                        <a href="{{ route('oman.flag') }}" class="text-white hover:text-primary-one cursor-pointer"> Oman </a>
                    </li>
                    <li class="text-primary-one hover:text-white py-1">
                        <a href="{{ route('qatar.flag') }}" class="text-white hover:text-primary-one cursor-pointer"> Qatar </a>
                    </li>
                    <li class="text-primary-one hover:text-white py-1">
                        <a href="{{ route('bahrain.flag') }}" class="text-white hover:text-primary-one cursor-pointer"> Bahrain </a>
                    </li>
                </ul>
            </div>

            <div class="order-2 xl:order-3 text-center text-white md:text-left mx-auto ">
                <h4 class="uppercase text-xl font-bold ">CONNECT WITH US</h4>
                <hr class="w-full md:w-2/6 mt-2">
                <div class="text-white my-5 space-y-1"> 
                    <p>
                        <a href="https://twitter.com/PerfectResumeae" class="hover:text-primary-one"> <i class="fa fa-twitter"></i> Twitter</a>
                    </p>
                    <p>
                        <a href="https://www.facebook.com/perfectresumeuae/" class="hover:text-primary-one"> <i class="fa fa-facebook"></i> Facebook</a>
                    </p>
                    <p>
                        <a href="https://www.instagram.com/accounts/login/?next=/perfectresumeuae/" class="hover:text-primary-one"> <i class="fa fa-instagram"></i> Instagram</a>
                    </p>
                    <p>
                        <a href="https://api.whatsapp.com/send/?phone=971545098085&text=how+can+I+get+a+fresh+resume%3F&app_absent=0" class="hover:text-primary-one"> <i class="fa fa-whatsapp"></i> Whatsapp</a>
                    </p>
                    <p>
                        <a href="mailto:info@perfectresume.ae" class="hover:text-primary-one"> <i class="fa fa-envelope"></i> info@perfectresume.ae</a>
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-5  md:absolute md:left-[61.2%] lg:left-[64.2%] xl:left-[54.2%]">
                        <div class=""><a href="{{ route('oman.flag') }}"><img src="{{ asset('imgs/flags/pr-omanflag-removebg-preview.png') }}" class="h-12   mx-auto " alt="pr"></a></div>
                        <div><a href="{{ route('kas.flag') }}"><img src="{{ asset('imgs/flags/pr-saudi3-removebg-preview.png') }}" class="h-12  mx-auto " alt="pr"></a></div>
                        <div><a href="{{ route('kuwait.flag') }}"><img src="{{ asset('imgs/flags/pr-kuwait-flag.png') }}" class="h-12 mx-auto" alt="pr"></a></div>
                        <div><a href="{{ route('qatar.flag') }}"><img src="{{ asset('imgs/flags/pr-qatar-flag2-removebg-preview.png') }}" class="h-12 mx-auto" alt="pr"></a></div>
                        <div><a href="{{ route('bahrain.flag') }}"><img src="{{ asset('imgs/flags/pr-bahrainflag5-removebg-preview.png') }}" class="h-12 mx-auto " alt="pr"></a></div>
                    </div>

                </div>
            </div>

            <div class="order-4 xl:order-4 text-center md:text-left mx-auto my-auto lg:my-0">
                <a href="{{ route('home') }}">
                    <img class="h-32 mx-2" src="{{ asset('imgs/cv-writers-ireland-logo.png') }}" alt="Writing Services">
                </a>
            </div>

        </div>
    </div>

    <div class="bg-primary-two border-t border-gray-400 ">
        <div
            class="container mx-auto flex flex-col lg:flex-row items-center space-y-4 md:space-y-0 justify-between  py-2 md:px-20">
            <p class="mx-6 text-center text-white sm:mx-0 sm:text-left">
                © 2022. All rights reserved cvwritersireland.com
            </p>
            <ul class="flex flex-col md:flex-row items-center space-x-4 text-white">
                <li class="hover:text-primary-one">
                    <a href="{{ route('policy.privacy-policy') }}"> Privacy Policy </a>
                </li>
                <li class="hover:text-primary-one">
                    <a href="{{ route('policy.terms-and-conditions') }}"> Terms &amp; Conditions </a>
                </li>
                </li>
            </ul>
            <img src="../imgs/footer-payments.webp" alt="payment" class="h-6">

        </div>
    </div>
</footer>

{{-- Whatsapp icon --}}
<div class="fixed bottom-4 left-4 z-20 cursor-pointer ">
    <div class="h-12 w-12 bg-green-500 shadow-xl rounded-full">
        <a href="https://api.whatsapp.com/send?phone=971545098085" target="_blank" class="absolute bottom-[4px] left-[4px]  rounded-full cursor-pointer">
            <svg width="40px" height="40px" viewBox="0 0 1219.547 1225.016">
                <path fill="#E0E0E0" d="M1041.858 178.02C927.206 63.289 774.753.07 612.325 0 277.617 0 5.232 272.298 5.098 606.991c-.039 106.986 27.915 211.42 81.048 303.476L0 1225.016l321.898-84.406c88.689 48.368 188.547 73.855 290.166 73.896h.258.003c334.654 0 607.08-272.346 607.222-607.023.056-162.208-63.052-314.724-177.689-429.463zm-429.533 933.963h-.197c-90.578-.048-179.402-24.366-256.878-70.339l-18.438-10.93-191.021 50.083 51-186.176-12.013-19.087c-50.525-80.336-77.198-173.175-77.16-268.504.111-278.186 226.507-504.503 504.898-504.503 134.812.056 261.519 52.604 356.814 147.965 95.289 95.36 147.728 222.128 147.688 356.948-.118 278.195-226.522 504.543-504.693 504.543z">
                </path>
                <linearGradient id="htwaicona-chat" gradientUnits="userSpaceOnUse" x1="609.77" y1="1190.114" x2="609.77" y2="21.084">
                    <stop id="s3_1_offset_1" offset="0" stop-color="#25D366"></stop>
                    <stop id="s3_1_offset_2" offset="1" stop-color="#25D366"></stop>
                </linearGradient>
                <path fill="url(#htwaicona-chat)" d="M27.875 1190.114l82.211-300.18c-50.719-87.852-77.391-187.523-77.359-289.602.133-319.398 260.078-579.25 579.469-579.25 155.016.07 300.508 60.398 409.898 169.891 109.414 109.492 169.633 255.031 169.57 409.812-.133 319.406-260.094 579.281-579.445 579.281-.023 0 .016 0 0 0h-.258c-96.977-.031-192.266-24.375-276.898-70.5l-307.188 80.548z">
                </path>
                <image overflow="visible" opacity=".08" width="682" height="639" transform="translate(270.984 291.372)"></image>
                <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M462.273 349.294c-11.234-24.977-23.062-25.477-33.75-25.914-8.742-.375-18.75-.352-28.742-.352-10 0-26.25 3.758-39.992 18.766-13.75 15.008-52.5 51.289-52.5 125.078 0 73.797 53.75 145.102 61.242 155.117 7.5 10 103.758 166.266 256.203 226.383 126.695 49.961 152.477 40.023 179.977 37.523s88.734-36.273 101.234-71.297c12.5-35.016 12.5-65.031 8.75-71.305-3.75-6.25-13.75-10-28.75-17.5s-88.734-43.789-102.484-48.789-23.75-7.5-33.75 7.516c-10 15-38.727 48.773-47.477 58.773-8.75 10.023-17.5 11.273-32.5 3.773-15-7.523-63.305-23.344-120.609-74.438-44.586-39.75-74.688-88.844-83.438-103.859-8.75-15-.938-23.125 6.586-30.602 6.734-6.719 15-17.508 22.5-26.266 7.484-8.758 9.984-15.008 14.984-25.008 5-10.016 2.5-18.773-1.25-26.273s-32.898-81.67-46.234-111.326z">
                </path>
                <path fill="#FFF" d="M1036.898 176.091C923.562 62.677 772.859.185 612.297.114 281.43.114 12.172 269.286 12.039 600.137 12 705.896 39.633 809.13 92.156 900.13L7 1211.067l318.203-83.438c87.672 47.812 186.383 73.008 286.836 73.047h.255.003c330.812 0 600.109-269.219 600.25-600.055.055-160.343-62.328-311.108-175.649-424.53zm-424.601 923.242h-.195c-89.539-.047-177.344-24.086-253.93-69.531l-18.227-10.805-188.828 49.508 50.414-184.039-11.875-18.867c-49.945-79.414-76.312-171.188-76.273-265.422.109-274.992 223.906-498.711 499.102-498.711 133.266.055 258.516 52 352.719 146.266 94.195 94.266 146.031 219.578 145.992 352.852-.118 274.999-223.923 498.749-498.899 498.749z">
                </path>
            </svg>
        </a>
    </div>
</div>
