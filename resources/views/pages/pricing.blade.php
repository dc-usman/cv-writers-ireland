@extends('layouts.web')

@section('title', 'Prices')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())

@section('content')

<style>
    .tab-content {
        display: none;
    }

    .tab-content.active {
        display: block;
    }
    
    #panels {
        text-align: center;
    }

</style>



    <!-- Hero -->
    <div class=" mx-auto bg-primary-one  py-12">
        <div class="flex flex-col space-y-4 my-4 max-w-screen-xl md:my-0 lg:flex-row ">
            <div class="mx-2 ">
                <p>
                    <b class=" text-4xl text-white bg-primary-one px-8">Prices</b>
                </p>
            </div>
        </div>
    

   
    <div class="bg-white" class="">
        <nav class="tabs flex flex-col md:flex-row justify-center space-y-3 md:space-x-4 pb-4 my-8 mx-8">
            <p class="my-auto font-semibold text-lg">Sort By:</p>
            <button data-target="panel-1"
                class="tab  text-white py-2 px-6 block hover:bg-primary-one focus:outline-none bg-primary-two">
                Entry Level
            </button>
            <button data-target="panel-2"
                class="tab  text-white py-2 px-6 block hover:bg-primary-one focus:outline-none bg-primary-two">
                Mid level
            </button>
            <button data-target="panel-3"
                class="tab  text-white py-2 px-6 block hover:bg-primary-one focus:outline-none bg-primary-two">
                Senior Level
            </button>
            <button data-target="panel-4"
                class="tab  text-white py-2 px-6 block hover:bg-primary-one focus:outline-none bg-primary-two">
                Career Change
            </button>
        </nav>
    </div>

    <div id="panels" class="mx-4 lg:mx-12">
        <div class="panel-1 tab-content active py-5 ">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 ">
                <div class="custom-css bg-white rounded shadow-xl border my-4 py-3 w-[90%] mx-auto text-center space-y-1">
                    <h5 class="text-3xl font-bold">Entry<br>Level</h5>
                    <p class="text-gray-700 text-lg ">Resume Writing</p>
                    <p class="text-primary-one text-5xl font-bold "><sup class="text-[50%]">AED</sup>195</p>
                    <div class="text-center py-6 ">
                        <a href="{{ route('order') }}" class="group">
                            <span
                                class="bg-primary-two text-white font-semibold py-2 px-4 group-hover:bg-primary-one ">Order
                                Now</span>
                            <span class="bg-primary-one p-2 -ml-2 group-hover:bg-primary-two group-hover:text-white"><i
                                    class="fa fa-long-arrow-right"></i></span>
                        </a>
                    </div>
                </div>

                <div class="custom-css bg-white rounded shadow-xl border my-4 py-3 w-[90%] mx-auto text-center space-y-1">
                    <h5 class="text-3xl font-bold">Entry<br>Level</h5>
                    <p class="text-gray-700 text-lg ">CV Writing</p>
                    <p class="text-primary-one text-5xl font-bold "><sup class="text-[50%]">AED</sup>215</p>
                    <div class="text-center py-6 ">
                        <a href="{{ route('order') }}" class="group">
                            <span
                                class="bg-primary-two text-white font-semibold py-2 px-4 group-hover:bg-primary-one ">Order
                                Now</span>
                            <span class="bg-primary-one p-2 -ml-2 group-hover:bg-primary-two group-hover:text-white"><i
                                    class="fa fa-long-arrow-right"></i></span>
                        </a>
                    </div>
                </div>

                <div class="custom-css bg-white rounded shadow-xl border my-4 py-3 w-[90%] mx-auto text-center space-y-1">
                    <h5 class="text-3xl font-bold">Entry<br>Level</h5>
                    <p class="text-gray-700 text-lg ">Cover Letter Writing</p>
                    <p class="text-primary-one text-5xl font-bold "><sup class="text-[50%]">AED</sup>195</p>
                    <div class="text-center py-6 ">
                        <a href="{{ route('order') }}" class="group">
                            <span
                                class="bg-primary-two text-white font-semibold py-2 px-4 group-hover:bg-primary-one ">Order
                                Now</span>
                            <span class="bg-primary-one p-2 -ml-2 group-hover:bg-primary-two group-hover:text-white"><i
                                    class="fa fa-long-arrow-right"></i></span>
                        </a>
                    </div>
                </div>

                <div class="custom-css bg-white rounded shadow-xl border my-4 py-3 w-[90%] mx-auto text-center space-y-1">
                    <h5 class="text-3xl font-bold">Entry<br>Level</h5>
                    <p class="text-gray-700 text-lg ">LinkedIn Profile</p>
                    <p class="text-primary-one text-5xl font-bold "><sup class="text-[50%]">AED</sup>175</p>
                    <div class="text-center py-6 ">
                        <a href="{{ route('order') }}" class="group">
                            <span
                                class="bg-primary-two text-white font-semibold py-2 px-4 group-hover:bg-primary-one ">Order
                                Now</span>
                            <span class="bg-primary-one p-2 -ml-2 group-hover:bg-primary-two group-hover:text-white"><i
                                    class="fa fa-long-arrow-right"></i></span>
                        </a>
                    </div>
                </div>

                <div class="custom-css bg-white rounded shadow-xl border my-4 py-3 w-[90%] mx-auto text-center space-y-1">
                    <h5 class="text-3xl font-bold">Entry<br>Level</h5>
                    <p class="text-gray-700 text-lg ">Full Package with Resume</p>
                    <p class="text-primary-one text-5xl font-bold "><sup class="text-[50%]">AED</sup>590</p>
                    <div class="text-center py-6 ">
                        <a href="{{ route('order') }}" class="group">
                            <span
                                class="bg-primary-two text-white font-semibold py-2 px-4 group-hover:bg-primary-one ">Order
                                Now</span>
                            <span class="bg-primary-one p-2 -ml-2 group-hover:bg-primary-two group-hover:text-white"><i
                                    class="fa fa-long-arrow-right"></i></span>
                        </a>
                    </div>
                </div>

                <div class="custom-css bg-white rounded shadow-xl border my-4 py-3 w-[90%] mx-auto text-center space-y-1">
                    <h5 class="text-3xl font-bold">Entry<br>Level</h5>
                    <p class="text-gray-700 text-lg ">Full Package with CV</p>
                    <p class="text-primary-one text-5xl font-bold "><sup class="text-[50%]">AED</sup>625</p>
                    <div class="text-center py-6 ">
                        <a href="{{ route('order') }}" class="group">
                            <span
                                class="bg-primary-two text-white font-semibold py-2 px-4 group-hover:bg-primary-one ">Order
                                Now</span>
                            <span class="bg-primary-one p-2 -ml-2 group-hover:bg-primary-two group-hover:text-white"><i
                                    class="fa fa-long-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel-2 tab-content py-5">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                <div class="custom-css bg-white rounded shadow-xl border my-4 py-3 w-[90%] mx-auto text-center space-y-1">
                    <h5 class="text-3xl font-bold">Mid<br>Level</h5>
                    <p class="text-gray-700 text-lg ">Resume Writing</p>
                    <p class="text-primary-one text-5xl font-bold "><sup class="text-[50%]">AED</sup>225</p>
                    <div class="text-center py-6 ">
                        <a href="{{ route('order') }}" class="group">
                            <span
                                class="bg-primary-two text-white font-semibold py-2 px-4 group-hover:bg-primary-one ">Order
                                Now</span>
                            <span class="bg-primary-one p-2 -ml-2 group-hover:bg-primary-two group-hover:text-white"><i
                                    class="fa fa-long-arrow-right"></i></span>
                        </a>
                    </div>
                </div>

                <div class="custom-css bg-white rounded shadow-xl border my-4 py-3 w-[90%] mx-auto text-center space-y-1">
                    <h5 class="text-3xl font-bold">Mid<br>Level</h5>
                    <p class="text-gray-700 text-lg ">CV Writing</p>
                    <p class="text-primary-one text-5xl font-bold "><sup class="text-[50%]">AED</sup>250</p>
                    <div class="text-center py-6 ">
                        <a href="{{ route('order') }}" class="group">
                            <span
                                class="bg-primary-two text-white font-semibold py-2 px-4 group-hover:bg-primary-one ">Order
                                Now</span>
                            <span class="bg-primary-one p-2 -ml-2 group-hover:bg-primary-two group-hover:text-white"><i
                                    class="fa fa-long-arrow-right"></i></span>
                        </a>
                    </div>
                </div>

                <div class="custom-css bg-white rounded shadow-xl border my-4 py-3 w-[90%] mx-auto text-center space-y-1">
                    <h5 class="text-3xl font-bold">Mid<br>Level</h5>
                    <p class="text-gray-700 text-lg ">Cover Letter Writing</p>
                    <p class="text-primary-one text-5xl font-bold "><sup class="text-[50%]">AED</sup>220</p>
                    <div class="text-center py-6 ">
                        <a href="{{ route('order') }}" class="group">
                            <span
                                class="bg-primary-two text-white font-semibold py-2 px-4 group-hover:bg-primary-one ">Order
                                Now</span>
                            <span class="bg-primary-one p-2 -ml-2 group-hover:bg-primary-two group-hover:text-white"><i
                                    class="fa fa-long-arrow-right"></i></span>
                        </a>
                    </div>
                </div>

                <div class="custom-css bg-white rounded shadow-xl border my-4 py-3 w-[90%] mx-auto text-center space-y-1">
                    <h5 class="text-3xl font-bold">Mid<br>Level</h5>
                    <p class="text-gray-700 text-lg ">LinkedIn Profile</p>
                    <p class="text-primary-one text-5xl font-bold "><sup class="text-[50%]">AED</sup>195</p>
                    <div class="text-center py-6 ">
                        <a href="{{ route('order') }}" class="group">
                            <span
                                class="bg-primary-two text-white font-semibold py-2 px-4 group-hover:bg-primary-one ">Order
                                Now</span>
                            <span class="bg-primary-one p-2 -ml-2 group-hover:bg-primary-two group-hover:text-white"><i
                                    class="fa fa-long-arrow-right"></i></span>
                        </a>
                    </div>
                </div>

                <div class="custom-css bg-white rounded shadow-xl border my-4 py-3 w-[90%] mx-auto text-center space-y-1">
                    <h5 class="text-3xl font-bold">Mid<br>Level</h5>
                    <p class="text-gray-700 text-lg ">Full Package with Resume</p>
                    <p class="text-primary-one text-5xl font-bold "><sup class="text-[50%]">AED</sup>640</p>
                    <div class="text-center py-6 ">
                        <a href="{{ route('order') }}" class="group">
                            <span
                                class="bg-primary-two text-white font-semibold py-2 px-4 group-hover:bg-primary-one ">Order
                                Now</span>
                            <span class="bg-primary-one p-2 -ml-2 group-hover:bg-primary-two group-hover:text-white"><i
                                    class="fa fa-long-arrow-right"></i></span>
                        </a>
                    </div>
                </div>

                <div class="custom-css bg-white rounded shadow-xl border my-4 py-3 w-[90%] mx-auto text-center space-y-1">
                    <h5 class="text-3xl font-bold">Mid<br>Level</h5>
                    <p class="text-gray-700 text-lg ">Full Package with CV</p>
                    <p class="text-primary-one text-5xl font-bold "><sup class="text-[50%]">AED</sup>750</p>
                    <div class="text-center py-6 ">
                        <a href="{{ route('order') }}" class="group">
                            <span
                                class="bg-primary-two text-white font-semibold py-2 px-4 group-hover:bg-primary-one ">Order
                                Now</span>
                            <span class="bg-primary-one p-2 -ml-2 group-hover:bg-primary-two group-hover:text-white"><i
                                    class="fa fa-long-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel-3 tab-content py-5">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                <div class="custom-css bg-white rounded shadow-xl border my-4 py-3 w-[90%] mx-auto text-center space-y-1">
                    <h5 class="text-3xl font-bold">Senior<br>Level</h5>
                    <p class="text-gray-700 text-lg ">Resume Writing</p>
                    <p class="text-primary-one text-5xl font-bold "><sup class="text-[50%]">AED</sup>275</p>
                    <div class="text-center py-6 ">
                        <a href="{{ route('order') }}" class="group">
                            <span
                                class="bg-primary-two text-white font-semibold py-2 px-4 group-hover:bg-primary-one ">Order
                                Now</span>
                            <span class="bg-primary-one p-2 -ml-2 group-hover:bg-primary-two group-hover:text-white"><i
                                    class="fa fa-long-arrow-right"></i></span>
                        </a>
                    </div>
                </div>

                <div class="custom-css bg-white rounded shadow-xl border my-4 py-3 w-[90%] mx-auto text-center space-y-1">
                    <h5 class="text-3xl font-bold">Senior<br>Level</h5>
                    <p class="text-gray-700 text-lg ">CV Writing</p>
                    <p class="text-primary-one text-5xl font-bold "><sup class="text-[50%]">AED</sup>340</p>
                    <div class="text-center py-6 ">
                        <a href="{{ route('order') }}" class="group">
                            <span
                                class="bg-primary-two text-white font-semibold py-2 px-4 group-hover:bg-primary-one ">Order
                                Now</span>
                            <span class="bg-primary-one p-2 -ml-2 group-hover:bg-primary-two group-hover:text-white"><i
                                    class="fa fa-long-arrow-right"></i></span>
                        </a>
                    </div>
                </div>

                <div class="custom-css bg-white rounded shadow-xl border my-4 py-3 w-[90%] mx-auto text-center space-y-1">
                    <h5 class="text-3xl font-bold">Senior<br>Level</h5>
                    <p class="text-gray-700 text-lg ">Cover Letter Writing</p>
                    <p class="text-primary-one text-5xl font-bold "><sup class="text-[50%]">AED</sup>260</p>
                    <div class="text-center py-6 ">
                        <a href="{{ route('order') }}" class="group">
                            <span
                                class="bg-primary-two text-white font-semibold py-2 px-4 group-hover:bg-primary-one ">Order
                                Now</span>
                            <span class="bg-primary-one p-2 -ml-2 group-hover:bg-primary-two group-hover:text-white"><i
                                    class="fa fa-long-arrow-right"></i></span>
                        </a>
                    </div>
                </div>

                <div class="custom-css bg-white rounded shadow-xl border my-4 py-3 w-[90%] mx-auto text-center space-y-1">
                    <h5 class="text-3xl font-bold">Senior<br>Level</h5>
                    <p class="text-gray-700 text-lg ">LinkedIn Profile</p>
                    <p class="text-primary-one text-5xl font-bold "><sup class="text-[50%]">AED</sup>275</p>
                    <div class="text-center py-6 ">
                        <a href="{{ route('order') }}" class="group">
                            <span
                                class="bg-primary-two text-white font-semibold py-2 px-4 group-hover:bg-primary-one ">Order
                                Now</span>
                            <span class="bg-primary-one p-2 -ml-2 group-hover:bg-primary-two group-hover:text-white"><i
                                    class="fa fa-long-arrow-right"></i></span>
                        </a>
                    </div>
                </div>

                <div class="custom-css bg-white rounded shadow-xl border my-4 py-3 w-[90%] mx-auto text-center space-y-1">
                    <h5 class="text-3xl font-bold">Senior<br>Level</h5>
                    <p class="text-gray-700 text-lg ">Full Package with Resume</p>
                    <p class="text-primary-one text-5xl font-bold "><sup class="text-[50%]">AED</sup>790</p>
                    <div class="text-center py-6 ">
                        <a href="{{ route('order') }}" class="group">
                            <span
                                class="bg-primary-two text-white font-semibold py-2 px-4 group-hover:bg-primary-one ">Order
                                Now</span>
                            <span class="bg-primary-one p-2 -ml-2 group-hover:bg-primary-two group-hover:text-white"><i
                                    class="fa fa-long-arrow-right"></i></span>
                        </a>
                    </div>
                </div>

                <div class="custom-css bg-white rounded shadow-xl border my-4 py-3 w-[90%] mx-auto text-center space-y-1">
                    <h5 class="text-3xl font-bold">Senior<br>Level</h5>
                    <p class="text-gray-700 text-lg ">Full Package with CV</p>
                    <p class="text-primary-one text-5xl font-bold "><sup class="text-[50%]">AED</sup>875</p>
                    <div class="text-center py-6 ">
                        <a href="{{ route('order') }}" class="group">
                            <span
                                class="bg-primary-two text-white font-semibold py-2 px-4 group-hover:bg-primary-one ">Order
                                Now</span>
                            <span class="bg-primary-one p-2 -ml-2 group-hover:bg-primary-two group-hover:text-white"><i
                                    class="fa fa-long-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel-4 tab-content py-5">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                <div class="custom-css bg-white rounded shadow-xl border my-4 py-3 w-[90%] mx-auto text-center space-y-1">
                    <h5 class="text-3xl font-bold">Career<br>Change</h5>
                    <p class="text-gray-700 text-lg ">Resume Writing</p>
                    <p class="text-primary-one text-5xl font-bold "><sup class="text-[50%]">AED</sup>375</p>
                    <div class="text-center py-6 ">
                        <a href="{{ route('order') }}" class="group">
                            <span
                                class="bg-primary-two text-white font-semibold py-2 px-4 group-hover:bg-primary-one ">Order
                                Now</span>
                            <span class="bg-primary-one p-2 -ml-2 group-hover:bg-primary-two group-hover:text-white"><i
                                    class="fa fa-long-arrow-right"></i></span>
                        </a>
                    </div>
                </div>

                <div class="custom-css bg-white rounded shadow-xl border my-4 py-3 w-[90%] mx-auto text-center space-y-1">
                    <h5 class="text-3xl font-bold">Career<br>Change</h5>
                    <p class="text-gray-700 text-lg ">CV Writing</p>
                    <p class="text-primary-one text-5xl font-bold "><sup class="text-[50%]">AED</sup>410</p>
                    <div class="text-center py-6 ">
                        <a href="{{ route('order') }}" class="group">
                            <span
                                class="bg-primary-two text-white font-semibold py-2 px-4 group-hover:bg-primary-one ">Order
                                Now</span>
                            <span class="bg-primary-one p-2 -ml-2 group-hover:bg-primary-two group-hover:text-white"><i
                                    class="fa fa-long-arrow-right"></i></span>
                        </a>
                    </div>
                </div>

                <div class="custom-css bg-white rounded shadow-xl border my-4 py-3 w-[90%] mx-auto text-center space-y-1">
                    <h5 class="text-3xl font-bold">Career<br>Change</h5>
                    <p class="text-gray-700 text-lg ">Cover Letter Writing</p>
                    <p class="text-primary-one text-5xl font-bold "><sup class="text-[50%]">AED</sup>360</p>
                    <div class="text-center py-6 ">
                        <a href="{{ route('order') }}" class="group">
                            <span
                                class="bg-primary-two text-white font-semibold py-2 px-4 group-hover:bg-primary-one ">Order
                                Now</span>
                            <span class="bg-primary-one p-2 -ml-2 group-hover:bg-primary-two group-hover:text-white"><i
                                    class="fa fa-long-arrow-right"></i></span>
                        </a>
                    </div>
                </div>

                <div class="custom-css bg-white rounded shadow-xl border my-4 py-3 w-[90%] mx-auto text-center space-y-1">
                    <h5 class="text-3xl font-bold">Career<br>Change</h5>
                    <p class="text-gray-700 text-lg ">LinkedIn Profile</p>
                    <p class="text-primary-one text-5xl font-bold "><sup class="text-[50%]">AED</sup>340</p>
                    <div class="text-center py-6 ">
                        <a href="{{ route('order') }}" class="group">
                            <span
                                class="bg-primary-two text-white font-semibold py-2 px-4 group-hover:bg-primary-one ">Order
                                Now</span>
                            <span class="bg-primary-one p-2 -ml-2 group-hover:bg-primary-two group-hover:text-white"><i
                                    class="fa fa-long-arrow-right"></i></span>
                        </a>
                    </div>
                </div>

                <div class="custom-css bg-white rounded shadow-xl border my-4 py-3 w-[90%] mx-auto text-center space-y-1">
                    <h5 class="text-3xl font-bold">Career<br>Change</h5>
                    <p class="text-gray-700 text-lg ">Full Package with Resume</p>
                    <p class="text-primary-one text-5xl font-bold "><sup class="text-[50%]">AED</sup>890</p>
                    <div class="text-center py-6 ">
                        <a href="{{ route('order') }}" class="group">
                            <span
                                class="bg-primary-two text-white font-semibold py-2 px-4 group-hover:bg-primary-one ">Order
                                Now</span>
                            <span class="bg-primary-one p-2 -ml-2 group-hover:bg-primary-two group-hover:text-white"><i
                                    class="fa fa-long-arrow-right"></i></span>
                        </a>
                    </div>
                </div>

                <div class="custom-css bg-white rounded shadow-xl border my-4 py-3 w-[90%] mx-auto text-center space-y-1">
                    <h5 class="text-3xl font-bold">Career<br>Change</h5>
                    <p class="text-gray-700 text-lg ">Full Package with CV</p>
                    <p class="text-primary-one text-5xl font-bold "><sup class="text-[50%]">AED</sup>995</p>
                    <div class="text-center py-6 ">
                        <a href="{{ route('order') }}" class="group">
                            <span
                                class="bg-primary-two text-white font-semibold py-2 px-4 group-hover:bg-primary-one ">Order
                                Now</span>
                            <span class="bg-primary-one p-2 -ml-2 group-hover:bg-primary-two group-hover:text-white"><i
                                    class="fa fa-long-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

 @section('scripts')   
    <script>
        const tabs = document.querySelectorAll(".tabs");
        const tab = document.querySelectorAll(".tab");
        const panel = document.querySelectorAll(".tab-content");

        // window.onload=onTabClick

        function onTabClick(event) {

            // deactivate existing active tabs and panel
                console.log(tab.length)
            for (let i = 0; i < tab.length; i++) {
                tab[i].classList.remove("active");
            }

            for (let i = 0; i < panel.length; i++) {
                panel[i].classList.remove("active");
            }

            for(let i=0; i<tab.length ; i++){
                tab[i].classList.remove("pricing-tab-active")
            }

            // activate new tabs and panel
            event.target.classList.add('active');
            event.target.classList.add("pricing-tab-active");
            let classString = event.target.getAttribute('data-target');
            console.log(classString);
            // let x=document.getElementsByClassName(classString);
            // console.log(x);
            document.getElementById('panels').getElementsByClassName(classString)[0].classList.add("active");
        }

        for (let i = 0; i < tab.length; i++) {
            tab[i].addEventListener('click', onTabClick, false);
        }

        onlyRunOnDomReload()

         function onlyRunOnDomReload(){
            let i=0 ;
            tab[i].classList.add("pricing-tab-active");
            panel[i].classList.add("active");
         }

        // document.addEventListener("DOMContentLoaded",onTabClick);
         
    </script>
@endsection