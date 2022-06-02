@extends('layouts.web')

@section('title', 'Contact Us')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())



@section('content')

    <!-- Hero -->
    <div class="bg-primary-one">
    <div class="container mx-auto  py-8">
        <div class="flex flex-col space-y-4 my-4 max-w-screen-xl md:my-0 lg:flex-row ">
            <div class="mx-2 text-center lg:text-left">
                <p>
                    <b class=" text-2xl lg:text-4xl text-white bg-primary-one px-8">Contact</b>
                </p>
            </div>
        </div>
    </div>
    </div>
    <section class="container mx-auto">

        <div id="msg-bag" class="my-2"></div>
        <div class="grid grid-col-1 sm:grid-cols-4 my-4 gap-y-4 mx-4">
            <!-- form -->
            <div class="col-span-4 xl:col-span-3">
                <div class="mx-auto lg:mx-8 px-8">
                    <div class="px-2 space-y-4">
                        <form id="contact-form" action="{{ route('contact.store') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-x-3 gap-y-6 mt-8 ">
                            @csrf
                            <div class="w-full space-y-2">
                                <label class="font-semibold">Name:</label>
                                <input type="text" name="name" class="form-input placeholder-black" placeholder="Name" value="">
                            </div>

                            <div class="w-full space-y-2">
                                <label class="font-semibold">Email:</label>
                                <input type="text" name="email" class="form-input placeholder-black" placeholder="Email" value="">
                            </div>

                            <div class="w-full space-y-2">
                                <label class="font-semibold">Phone:</label>
                                <input type="text" name="Phone" id="phone" class="form-input placeholder-black" placeholder="Contact Number" value="{{ old('phone') }}"
                                oninput="this.value=this.value.replace(/[^0-9\+]/g,'');" autocomplete="off"
                                data-intl-tel-input-id="0">
                                <input type="hidden" name="phone" id="phone2" />
                            </div>

                            <div class="w-full space-y-2">
                                <label class="font-semibold">Subject:</label>
                                <input type="text" name="subject" class="form-input placeholder-black" placeholder="Contact Subject"
                                    value="">
                            </div>

                            <div class="w-full md:col-span-2 space-y-2">
                                <label class="font-semibold">Message:</label>
                                <textarea name="detail" rows="2" class=" form-input placeholder-black" placeholder="Type details here..."></textarea>
                            </div>

                            <div class="md:col-span-2 mt-4">
                                <button type="submit" class=" inline-flex focus:outline-none">
                                    <span id="btn-submit"
                                        class="w-full btn bg-primary-one text-white py-2 px-4 font-semibold">
                                        Send Message
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-span-4 md:col-start-2 md:col-span-2 xl:col-span-1 flex flex-col mt-12 md:w-70 w-full mx-auto">

                <div class="bg-primary-one px-8 py-8 rounded-xl flex flex-row space-x-4">
                    <div class="text-white my-5 space-y-3">
                        <p>
                            <a href="https://twitter.com/PerfectResumeae"> <i class="fa fa-twitter"></i> Twitter</a>
                        </p>
                        <p>
                            <a href="https://www.facebook.com/perfectresumeuae/"> <i class="fa fa-facebook"></i> Facebook</a>
                        </p>
                        <p>
                            <a href="https://www.instagram.com/accounts/login/?next=/perfectresumeuae/"> <i class="fa fa-instagram"></i> Instagram</a>
                        </p>
                        <p>
                            <a href="https://api.whatsapp.com/send/?phone=971545098085&text=how+can+I+get+a+fresh+resume%3F&app_absent=0"> <i class="fa fa-whatsapp"></i> Whatsapp</a>
                        </p>
                        <p>
                            <a href="mailto:info@perfectresume.ae"> <i class="fa fa-envelope"></i> info@perfectresume.ae</a>
                        </p>


                    </div>
                </div>
            </div>

        </div>

    </section>




@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
             const phoneInputField = document.querySelector("#phone");
             const phoneInput = window.intlTelInput(phoneInputField, {
                 preferredCountries: ["ie"],
                 utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
             });
            $('#contact-form').on('submit', function(e) {
                e.preventDefault();
               
                 const phoneNumber = phoneInput.getNumber();
                 $('#phone2').val(phoneNumber);
                $.ajax({
                    url: "{{ route('contact.store') }}",
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: $('#contact-form').serialize(),
                    beforeSend: function() {
                        $(".contact-form-error").empty();
                        $('#contact-form').find(':submit').attr("disabled", true);
                        $('#btn-submit').html("Submiting...");
                    },
                    complete: function() {
                        $('#contact-form').find(':submit').attr("disabled", false);
                        $('#btn-submit').html("Submit Query");
                    },
                    success: function(res) {

                        // console.log(res)

                        $('#msg-bag').empty();

                        let msg =
                            '<div class="bg-green-100 border w-[80%] text-center left-[10%] border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">';
                        msg += '<strong class="font-bold">Success!</strong>';
                        msg += '<span class="block sm:inline">' + res.success + '</span>';
                        msg += '</div>';

                        $('#msg-bag').append(msg);

                        $(':input', 'form')
                            .not(':button, :submit, :reset, :hidden')
                            .val('')
                            .prop('checked', false)
                            .prop('selected', false);
                    },
                    error: function(err) {
                        if (err.status == 422) {

                            $('#msg-bag').empty();

                            let msg =
                                '  <div class=" left-[15%] bg-red-100 border w-[30%] border-red-400 text-red-700 px-4 py-3 rounded relative mb-4 text-center" role="alert">';
                            msg += '    <strong class="font-bold ">Error!</strong>';
                            msg += '    <span class="block sm:inline">Invalid Data</span>';
                            msg += ' </div>';

                            $('#msg-bag').append(msg);

                            $.each(err.responseJSON.errors, function(i, error) {
                                var el = $('#contact-form').find('[name="' + i + '"]');
                                el.after($('<span class="contact-form-error text-red-700">' +
                                    error[0] + '</span>'));
                            });

                            $('.contact-form-error').delay(2000).fadeOut();
                        } else {
                            $('#msg-bag').empty();
                            let msg =
                                '  <div class=" left-[20%] bg-red-100 border w-[40%] border-red-400 text-red-700 px-4 py-3 rounded relative mb-4 text-center" role="alert">';
                            msg += '    <strong class="font-bold ">Error!</strong>';
                            msg += '    <span class="block sm:inline">Server Error</span>';
                            msg += ' </div>';

                            $('#msg-bag').append(msg);

                        }

                    },
                });
            });
        });
    </script>
@endsection
