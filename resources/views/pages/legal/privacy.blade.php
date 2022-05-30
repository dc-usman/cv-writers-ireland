@extends('layouts.web')

@section('title', 'Privacy Policy')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())

@section('content')

    <main class="">
        <div class="bg-primary-one">
            <div class="container  mx-auto   py-8">
                <div class="flex flex-col space-y-4 my-4 max-w-screen-xl md:my-0 lg:flex-row ">
                    <div class="mx-2 text-left">
                        <p>
                            <b class=" text-4xl text-white bg-primary-one px-8">Privacy Policy</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <section class=" container mx-auto ">
          <div class="px-3 md:px-14 my-6 "> 
            <ul class="list-disc mx-4">
               <li class="">The content of this website is 100% original and you are not allowed to copy or paste the content of our website for any of personal or professional reasons otherwise we hold the right to sue.</li>
               <li>We ask our customers to carefully use the services and follow the requirements, so things won’t cause any disturbance.</li>
               <li>We assure our customers that their privacy is maintained strictly and whatever information they share with us is only communicated to the writer</li>
               <li>If there are details or certain questions asked by the employers than those are only for purpose of making a comprehensive CV in the most professional way. We request of customer to corporate with our writers and customer service agent in providing right and detailed information</li>
           </ul>
        </div>

        
        </section>
    </main>
 



@endsection
