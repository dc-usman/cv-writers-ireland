<div class="bg-primary-one">
    <!-- Topbar -->
   <div class="container mx-auto"> 
    <div class=" hidden md:flex   flex-row justify-between py-6">
        <div class="text-white space-x-3">
            <a href="#" class="border border-white p-2">
                Live Chat
            </a>
            <a href="tel:+971545098085"><i class=" fa fa-phone mr-2"></i>+971 54 509 8085</a>
            <a href="mailto:info@perfectresume.ae" ><i class="fa fa-envelope mr-2 "></i>info@perfectresume.ae</a>
        </div>
       
        <div class="text-white space-x-3">
            <a href="https://api.whatsapp.com/send/?phone=971545098085&text=how+can+I+get+a+fresh+resume%3F&app_absent=0" target="blank"><i class="fa fa-whatsapp"></i></a>
            <a href="https://www.facebook.com/perfectresumeuae/"><i class="fa fa-facebook" target="blank"></i></a>
            <a href="https://twitter.com/PerfectResumeae"><i class="fa fa-twitter" target="blank"></i></a>
            <a href="https://www.instagram.com/accounts/login/?next=/perfectresumeuae/" target="blank"><i class="fa fa-instagram"></i></a>
        </div>
    </div>

    <div class="md:hidden flex flex-col items-center py-6 ">
        <div class="text-white space-x-3 my-2 ">
            <a href="#" class="border border-white p-2 ">
                Live Chat
            </a>
        </div>
        <div class="text-white space-x-3">
            <a href="tel:+971545098085"  ><i class=" fa fa-phone mr-2"></i>+971 54 509 8085</a>
        </div>
        <div class="text-white space-x-3">
            <a href="#" ><i class="fa fa-envelope mr-2 "></i>info@perfectresume.ae</a>
        </div>
       
        <div class="text-white space-x-3">
            <a href="#"><i class="fa fa-whatsapp"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
    
   </div> 
    <!-- Navbar -->
    <div class="container mx-auto w-full text-gray-700 ">
        <div x-data="{ open: false }"
            class="bg-white flex flex-col px-4 mx-auto lg:items-center lg:justify-between lg:flex-row  lg:px-12">
            <div class=" flex flex-row items-center justify-between">
                <a class="flex items-center py-2 lg:py-0  px-2" href="{{ route('home') }}">
                    <img src="{{ asset('imgs/cv-writers-ireland-logo.png') }}" alt="Logo" class="h-20 ">
                </a>
                <button class="lg:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" style="display: none;"></path>
                    </svg>
                </button>

            </div>
            <nav :class="{ 'flex': open, 'hidden': !open }"
                class="flex-col flex-grow pb-4 md:pb-0 hidden lg:flex lg:justify-end lg:flex-row lg:space-x-4 xl:space-x-8 lg:h-[108px] lg:items-center">
              <div>  
                <a href="{{ route('home') }}" class="block font-semibold p-2 lg:px-2 lg:py-10 hover:bg-primary-four hover:text-white lg:h-full {{ request()->routeIs('home') ? ' bg-primary-four text-white ' : '' }}">Home</a>
              </div> 

            <div>
                <a href="{{ route('about') }}" class="block font-semibold p-2 lg:px-2 lg:py-10 hover:bg-primary-four hover:text-white lg:h-full {{ request()->routeIs('about') ? ' bg-primary-four text-white ' : '' }}">About</a>
            </div>  
                <div  class="relative " @click.away="open = false" x-data="{ open: false }"  >
                      
                    <button @click="open = !open"  class=" block  text-left font-semibold p-2 lg:px-2 lg:py-10 hover:bg-primary-four hover:text-white lg:h-full {{ request()->routeIs('services.one')|| request()->routeIs('services.two')|| request()->routeIs('services.three')||request()->routeIs('services.four') ? ' bg-primary-four text-white' : '' }}">
                        <span>Services</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }"

                        class="inline w-4 h-4 ml-1 transition-transform duration-200 transform md:-mt-1 rotate-0">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                     <div x-show="open" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="hidden absolute right-0 w-full  origin-top-right rounded-md shadow-lg md:w-48 z-40"
                        :class="{ 'hidden': !open }" style="display: none;">
                        <div class="px-2 py-2 rounded-md shadow bg-white">
                            <ul>
                                <li><a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-blue-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="{{ route('services.one') }}">Cover Letter Writing</a></li>
                                <li><a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-blue-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="{{ route('services.two') }}">LinkedIn Profile Writing</a></li>
                                <li><a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-blue-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="{{ route('services.three') }}">Resume Editing</a></li>
                                <li><a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-blue-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="{{ route('services.four') }}">CV Editing</a></li>
                            </ul>
                            
                        </div>
                    </div> 
                </div> 
               <div> 
                <a href="{{ route('price') }}" class="block font-semibold p-2 lg:px-2 lg:py-10 hover:bg-primary-four hover:text-white lg:h-full {{ request()->routeIs('price') ? ' bg-primary-four text-white' : '' }}">Prices</a>
               </div>
              <div> <a href="{{ route('samples') }}" class="block font-semibold p-2 lg:px-2 lg:py-10 hover:bg-primary-four hover:text-white lg:h-full {{ request()->routeIs('samples') ? ' bg-primary-four text-white' : '' }}">Samples</a></div>
             <div>  <a href="{{ route('reviews') }}" class="block font-semibold p-2 lg:px-2 lg:py-10 hover:bg-primary-four hover:text-white lg:h-full {{ request()->routeIs('reviews') ? ' bg-primary-four text-white' : '' }}">Testimonials</a></div>
             <div>   <a href="{{ route('blogs') }}" class="block font-semibold p-2 lg:px-2 lg:py-10 hover:bg-primary-four hover:text-white lg:h-full {{ request()->routeIs('blogs')|| request()->routeIs('blog.show') ? ' bg-primary-four text-white' : '' }}">Blog</a></div>
               <div> <a href="{{ route('contact') }}" class="relative block font-semibold p-2 lg:px-2 lg:py-10 hover:bg-primary-four hover:text-white lg:h-full {{ request()->routeIs('contact') ? ' bg-primary-four text-white' : '' }}">Contact</a></div>
                <a href="{{ route('order') }}" class="relative block font-semibold p-2  lg:p-10 bg-primary-two text-white lg:h-full {{ request()->routeIs('order') ? ' bg-primary-four text-white' : ''}}"><span class="lg:absolute lg:left-[22%] lg:top-[37%]">Order</span></a>


            </nav>
        </div>
    </div>
</div>
