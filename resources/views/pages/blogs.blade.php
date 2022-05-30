@extends('layouts.web')
@section('title', 'Blogs')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())

@section('content')



<div class="bg-primary-one">
    <div class="container  mx-auto   py-8">
        <div class="flex flex-col space-y-4 my-4 max-w-screen-xl md:my-0 lg:flex-row ">
            <div class="mx-2 text-center lg:text-left">
                <p>
        <b class=" text-2xl lg:text-4xl text-white bg-primary-one px-8">Blogs</b>
                </p>
            </div>
        </div>
    </div>
</div> 


 <section class="px-4 md:px-16 lg:px-24 py-14">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-10 gap-y-4">
                   
        <div class="bg-gray-100">
            <img src="{{ asset('imgs/blogs/curriculum-1-1536x1440-1-960x720.jpg') }}" class=" border-8 border-gray-100 hover:scale-105 hover:opacity-70 transition ease-in-out delay-150 cursor-pointer" alt="pr"/>
            <p class="bg-white py-4 mx-auto md:mx-0">Published by <i class="fa fa-user px-1"></i> admin on <i class="fa fa-clock-o px-1"></i> July 28, 2021</p>
            <h2 class="bg-white text-2xl w-full text-center md:text-left mt-4 sm:mt-0"><a href="">A Quick-Start Guide on How to Write a Term Paper…</a></h2>
            <p class="bg-white leading-normal py-4 text-center md:text-left">
                Writing a term paper deserving of a good score takes far more than a few hours of hard work and several sentences on-page. Time, organization, and […]
            </p>    
         
            <div class="w-full px-4 pt-4 pb-10">
                <span class=" float-left "> Do you like it ? 
                    <i class="fa fa-heart text-primary-one"></i>
                </span>                                        
                <a href="#" class="text-primary-one font-semibold float-right border-l border-gray-400 pl-2"> <i class="fa fa-comments-o text-black" style="font-size:22px"></i> 0 <i class="fa fa-file-text-o pl-2 text-black"></i> Read more</a>
            </div>                    
        </div>

        <div class="bg-gray-100">
            <img src="{{ asset('imgs/blogs/Perfect-Resume-960x720.png') }}" class=" border-8 border-gray-100 hover:scale-105 hover:opacity-70 transition ease-in-out delay-150 cursor-pointer" alt="pr" />
            <p class="bg-white py-4 mx-auto md:mx-0">Published by <i class="fa fa-user px-1"></i> admin on <i class="fa fa-clock-o px-1"></i> July 28, 2021</p>
            <h2 class="bg-white text-2xl w-full text-center md:text-left mt-4 sm:mt-0">A Quick-Start Guide on How to Write a Term Paper…</h2>
            <p class="bg-white leading-normal py-4 text-center md:text-left">
                Writing a term paper deserving of a good score takes far more than a few hours of hard work and several sentences on-page. Time, organization, and […]
            </p>    
         
            <div class="w-full px-4 pt-4 pb-10">
                <span class=" float-left "> Do you like it ? 
                    <i class="fa fa-heart text-primary-one"></i>
                </span>                                        
                <a href="#" class="text-primary-one font-semibold float-right border-l border-gray-400 pl-2"> <i class="fa fa-comments-o text-black" style="font-size:22px"></i> 0 <i class="fa fa-file-text-o pl-2 text-black"></i> Read more</a>
            </div>                    
        </div>

        <div class="bg-gray-100">
            <img src="{{ asset('imgs/blogs/blog-3-PR-960x450.jpg') }}" class=" border-8 border-gray-100 hover:scale-105 hover:opacity-70 transition ease-in-out delay-150 cursor-pointer" alt="pr" />
            <p class="bg-white py-4 mx-auto md:mx-0">Published by <i class="fa fa-user px-1"></i> admin on <i class="fa fa-clock-o px-1"></i> July 28, 2021</p>
            <h2 class="bg-white text-2xl w-full text-center md:text-left mt-4 sm:mt-0">A Quick-Start Guide on How to Write a Term Paper…</h2>
            <p class="bg-white leading-normal py-4 text-center md:text-left">
                Writing a term paper deserving of a good score takes far more than a few hours of hard work and several sentences on-page. Time, organization, and […]
            </p>    
         
            <div class="w-full px-4 pt-4 pb-10">
                <span class=" float-left "> Do you like it ? 
                    <i class="fa fa-heart text-primary-one"></i>
                </span>                                        
                <a href="#" class="text-primary-one font-semibold float-right border-l border-gray-400 pl-2"> <i class="fa fa-comments-o text-black" style="font-size:22px"></i> 0 <i class="fa fa-file-text-o pl-2 text-black"></i> Read more</a>
            </div>                      
        </div>

        <div class="bg-gray-100">
            <img src="{{ asset('imgs/blogs/blog-4-20190401191057-GettyImages-923671348.jpeg') }}" class=" border-8 border-gray-100 hover:scale-105 hover:opacity-70 transition ease-in-out delay-150 cursor-pointer" alt="pr"/>
            <p class="bg-white py-4 mx-auto md:mx-0">Published by <i class="fa fa-user px-1"></i> admin on <i class="fa fa-clock-o px-1"></i> July 28, 2021</p>
            <h2 class="bg-white text-2xl w-full text-center md:text-left mt-4 sm:mt-0">A Quick-Start Guide on How to Write a Term Paper…</h2>
            <p class="bg-white leading-normal py-4 text-center md:text-left">
                Writing a term paper deserving of a good score takes far more than a few hours of hard work and several sentences on-page. Time, organization, and […]
            </p>    
         
            <div class="w-full px-4 pt-4 pb-10">
                <span class=" float-left "> Do you like it ? 
                    <i class="fa fa-heart text-primary-one"></i>
                </span>                                        
                <a href="#" class="text-primary-one font-semibold float-right border-l border-gray-400 pl-2"> <i class="fa fa-comments-o text-black" style="font-size:22px"></i> 0 <i class="fa fa-file-text-o pl-2 text-black"></i> Read more</a>
            </div>                      
        </div>

        <div class="bg-gray-100">
            <img src="{{ asset('imgs/blogs/career-path-960x720.jpg') }}" class=" border-8 border-gray-100 hover:scale-105 hover:opacity-70 transition ease-in-out delay-150 cursor-pointer" alt="pr"/>
            <p class="bg-white py-4 mx-auto md:mx-0">Published by <i class="fa fa-user px-1"></i> admin on <i class="fa fa-clock-o px-1"></i> July 28, 2021</p>
            <h2 class="bg-white text-2xl w-full text-center md:text-left mt-4 sm:mt-0">A Quick-Start Guide on How to Write a Term Paper…</h2>
            <p class="bg-white leading-normal py-4 text-center md:text-left">
                Writing a term paper deserving of a good score takes far more than a few hours of hard work and several sentences on-page. Time, organization, and […]
            </p>    
         
            <div class="w-full px-4 pt-4 pb-10">
                <span class=" float-left "> Do you like it ? 
                    <i class="fa fa-heart text-primary-one"></i>
                </span>                                        
                <a href="#" class="text-primary-one font-semibold float-right border-l border-gray-400 pl-2"> <i class="fa fa-comments-o text-black" style="font-size:22px"></i> 0 <i class="fa fa-file-text-o pl-2 text-black"></i> Read more</a>
            </div>                      
        </div>

        <div class="bg-gray-100">
            <img src="{{ asset('imgs/blogs/blog-5-packaging-trends-2020.jpg') }}" class=" border-8 border-gray-100 hover:scale-105 hover:opacity-70 transition ease-in-out delay-150 cursor-pointer" alt="pr"/>
            <p class="bg-white py-4 mx-auto md:mx-0">Published by <i class="fa fa-user px-1"></i> admin on <i class="fa fa-clock-o px-1"></i> July 28, 2021</p>
            <h2 class="bg-white text-2xl w-full text-center md:text-left mt-4 sm:mt-0">A Quick-Start Guide on How to Write a Term Paper…</h2>
            <p class="bg-white leading-normal py-4 text-center md:text-left">
                Writing a term paper deserving of a good score takes far more than a few hours of hard work and several sentences on-page. Time, organization, and […]
            </p>    
         
            <div class="w-full px-4 pt-4 pb-10">
                <span class=" float-left "> Do you like it ? 
                    <i class="fa fa-heart text-primary-one"></i>
                </span>                                        
                <a href="#" class="text-primary-one font-semibold float-right border-l border-gray-400 pl-2"> <i class="fa fa-comments-o text-black" style="font-size:22px"></i> 0 <i class="fa fa-file-text-o pl-2 text-black"></i> Read more</a>
            </div>                      
        </div>

        <div class="bg-gray-100">
            <img src="{{ asset('imgs/blogs/blog-6-top-4-interview-questions.jpg') }}" class=" border-8 border-gray-100 hover:scale-105 hover:opacity-70 transition ease-in-out delay-150 cursor-pointer" alt="pr"/>
            <p class="bg-white py-4 mx-auto md:mx-0">Published by <i class="fa fa-user px-1"></i> admin on <i class="fa fa-clock-o px-1"></i> July 28, 2021</p>
            <h2 class="bg-white text-2xl w-full text-center md:text-left mt-4 sm:mt-0">A Quick-Start Guide on How to Write a Term Paper…</h2>
            <p class="bg-white leading-normal py-4 text-center md:text-left">
                Writing a term paper deserving of a good score takes far more than a few hours of hard work and several sentences on-page. Time, organization, and […]
            </p>    
         
            <div class="w-full px-4 pt-4 pb-10">
                <span class=" float-left "> Do you like it ? 
                    <i class="fa fa-heart text-primary-one"></i>
                </span>                                        
                <a href="#" class="text-primary-one font-semibold float-right border-l border-gray-400 pl-2"> <i class="fa fa-comments-o text-black" style="font-size:22px"></i> 0 <i class="fa fa-file-text-o pl-2 text-black"></i> Read more</a>
            </div>                      
        </div>

        <div class="bg-gray-100">
            <img src="{{ asset('imgs/blogs/blog-7-Interview_Tips_Photo-1-960x720.jpeg') }}" class=" border-8 border-gray-100 hover:scale-105 hover:opacity-70 transition ease-in-out delay-150 cursor-pointer" alt="pr" />
            <p class="bg-white py-4 mx-auto md:mx-0">Published by <i class="fa fa-user px-1"></i> admin on <i class="fa fa-clock-o px-1"></i> July 28, 2021</p>
            <h2 class="bg-white text-2xl w-full text-center md:text-left mt-4 sm:mt-0">A Quick-Start Guide on How to Write a Term Paper…</h2>
            <p class="bg-white leading-normal py-4 text-center md:text-left">
                Writing a term paper deserving of a good score takes far more than a few hours of hard work and several sentences on-page. Time, organization, and […]
            </p>    
         
            <div class="w-full px-4 pt-4 pb-10">
                <span class=" float-left "> Do you like it ? 
                    <i class="fa fa-heart text-primary-one"></i>
                </span>                                        
                <a href="#" class="text-primary-one font-semibold float-right border-l border-gray-400 pl-2"> <i class="fa fa-comments-o text-black" style="font-size:22px"></i> 0 <i class="fa fa-file-text-o pl-2 text-black"></i> Read more</a>
            </div>                      
        </div>



    </div>
</section>
@endsection
