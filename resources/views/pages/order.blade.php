@extends('layouts.web')

@section('title', 'Order')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())

@section('content')

    {{-- Hero --}}
    <div class="bg-primary-one">
        <div class=" container mx-auto  py-12">
            <div class="flex flex-col space-y-4 my-4 max-w-screen-xl md:my-0 lg:flex-row ">
                <div class="mx-2 text-center lg:text-left">
                    <p>
                        <b class=" text-2xl lg:text-4xl text-white bg-primary-one px-2">Order</b>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="container mx-auto my-4">
        @if (session('success'))
            <div class="md:w-1/2 my-4 mx-auto bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md"
                role="alert">
                <div class="flex">
                    <div class="py-1">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50"
                            style="enable-background:new 0 0 50 50;" xml:space="preserve">
                            <circle style="fill:#25AE88;" cx="25" cy="25" r="25" />
                            <polyline
                                style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"
                                points="
                    38,15 22,33 12,25 " />
                        </svg>
                    </div>
                    <div>
                        <p class="text-center font-bold">{{ session('success') }}</p>
                    </div>
                </div>
            </div>
        @endif

        <!-- form -->
        <div class="mx-auto lg:mx-8 px-8">
            <div class="px-2 space-y-4">
                <form class="grid grid-cols-1 md:grid-cols-2 gap-x-3 gap-y-6 mt-8" method="POST"
                    action="{{ route('order.store') }}" enctype="multipart/form-data" id="order-form">
                    @csrf
                    <div class="w-full space-y-2">
                        <label class="font-semibold">Name:</label>
                        <input type="text" name="name" class="form-input placeholder-black" placeholder="Name" value="">
                        @error('name')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="w-full space-y-2">
                        <label class="font-semibold">Email:</label>
                        <input type="text" name="email" class="form-input placeholder-black" placeholder="Email" value="">
                        @error('email')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="w-full space-y-2">
                        <label class="font-semibold">Phone:</label>
                        <input type="text" name="Phone" id="phone" class="form-input placeholder-black" placeholder="Contact Number" value="{{ old('phone') }}"
                        oninput="this.value=this.value.replace(/[^0-9\+]/g,'');" autocomplete="off"
                        data-intl-tel-input-id="0">
                        <input type="hidden" name="phone" id="phone2" />
                        @error('phone')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="w-full space-y-2">
                        <label class="font-semibold">Country:</label>
                        <select name="country" class="form-select">
                            <option hidden="" value="0" disabled="" selected="">Country</option>
                            @foreach ($countries as $country)
                                <option {{ old('country') == $country->code ? 'selected' : '' }}
                                    value="{{ $country->code }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                        @error('country')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror

                    </div>

                    <div class="w-full md:col-span-2 space-y-2">
                        <label class="font-semibold">Career Level:</label>
                        <select name="career_level" class="form-select" id="career-level">
                            <option hidden="" value="0" disabled="" selected="">Career Level</option>
                            @foreach ($career_levels as $career_level)
                                <option class="career_level_item" id="career-level-two" value="{{ $career_level->id }}"
                                    {{ old('career_level') == $career_level->id ? 'selected' : '' }}>
                                    {{ $career_level->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('career_level')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                   
                    <div class="div-group" role="group">
                        
                        <div id="carrer-level-option" >
                      
                        </div>
                        
                    </div>

                    <div class="jquery-switch-class"></div>

                    <div class="w-full md:col-span-2 space-y-2">
                        <label class="font-semibold">Details:</label>
                        <textarea name="detail" rows="2" class=" form-input placeholder-black " placeholder="Type details here..."></textarea>
                    </div>

                    <div class="w-full">
                        <label class="font-semibold">Attachment:</label>
                        <input
                            class="block w-full cursor-pointer text-gray-700 focus:outline-none focus:border-transparent text-sm rounded p-2 "
                            accept=".pdf,.ppt,.pptx,.doc,.docx,.xls,.xlsx,.csv,.txt,.jpeg,.jpg,.png,.gif,.sav,.sps,.spv,.spo,.mat,.zip,.rar"
                            aria-describedby="email_attacements_help" id="email_attacements" name="emailAttachments[]"
                            type="file" multiple="">

                    </div>

                    <div class="md:col-span-2 mt-4">
                        <button type="submit" class=" inline-flex focus:outline-none">
                            <span id="btn-submit" class="w-full btn bg-primary-one text-white py-2 px-4 font-semibold">
                                Place Order
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </section>

@endsection

@section('scripts')
    <script>
      $(document).ready(function(){   
        const phoneInputField = document.querySelector("#phone");
        const phoneInput = window.intlTelInput(phoneInputField, {
        preferredCountries: ["ie"],
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });

        $("#order-form").submit(function() {
            $('#order-form').find(':submit').attr("disabled", true);
            $('#btn-submit').html("Submiting...");
            const phoneNumber = phoneInput.getNumber();
            $('#phone2').val(phoneNumber);
            return true;
            });



        $('#career-level').on('change',function() {
            console.log( this.value );
          
         if(this.value==1){   
            let options = '<div class="text-xl">Select Package</div>'
            @foreach ( $select_packages as $package )
                
                options +=  '    <div class="inline-flex">'
                options += '       <input type="radio" name="select_package" id="{{ $package->id }}" value="{{ $package->id }}" checked class="flex my-auto"'
                options += '           >'
                options += '       <label class="ml-2 text-primary-three font-bold" for="{{ $package->id }}"> {{ $package->name }} </label>'
                options += '   </div>'
                options += '   <br>'                
                
            @endforeach
              @error('select_package')
                  options='<p class="text-red-600 text-sm">{{ $message }}</p>'
              @enderror
             console.log(options);
                    
            $('#carrer-level-option').empty();

            $('#carrer-level-option').html(options);
            }
             
             else if(this.value==2){    
                let options = '<div class="text-xl">Select Package</div>'
             @foreach ( $select_packages_two as $package )
               
                 options +=  '    <div class="inline-flex" aria-label="Basic radio toggle button group">'
                 options += '       <input type="radio" name="select_package" id="{{ $package->id }}" value="{{ $package->id }}" checked class="flex my-auto"'
                 options += '           >'
                 options += '       <label class="ml-2 text-primary-three font-bold" for="{{ $package->id }}"> {{ $package->name }} </label>'
                 options += '   </div>'
                 options += '   <br>'                
                
             @endforeach
              
             console.log(options);

             $('#carrer-level-option').empty();

             $('#carrer-level-option').html(options);
             
            
            }
            
            else if(this.value==3){    
                let options = '<div class="text-xl">Select Package</div>'
             @foreach ( $select_packages_three as $package )
                 options +=  '    <div class="inline-flex">'
                 options += '       <input type="radio" name="select_package" id="{{ $package->id }}" value="{{ $package->id }}" checked class="flex my-auto"'
                 options += '           >'
                 options += '       <label class="ml-2 text-primary-three font-bold" for="{{ $package->id }}"> {{ $package->name }} </label>'
                 options += '   </div>'
                 options += '   <br>'                
                
             @endforeach
              
            //  console.log(options);

             $('#carrer-level-option').empty();

             $('#carrer-level-option').html(options);
            }

            else if(this.value==4){    
                let options = '<div class="text-xl">Select Package</div>'
             @foreach ( $select_packages_four as $package )
                 options +=  '    <div class="inline-flex">'
                 options += '<input  type="radio" name="select_package" id="{{ $package->id }}" value="{{ $package->id }}" checked class="flex my-auto"'
                 options += '           >'
                 options += '       <label class="ml-2 text-primary-three font-bold" for="{{ $package->id }}"> {{ $package->name }} </label>'
                 options += '   </div>'
                 options += '   <br>'                
                
             @endforeach
              
            //  console.log(options);

             $('#carrer-level-option').empty();

             $('#carrer-level-option').html(options);
            }
        });  
      });        
        
    </script>
@endsection
