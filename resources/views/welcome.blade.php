<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=""> --}}
    <link href="{{ asset('fonts/webfonts/MonaSans-Regular.woff2') }}" as="font" type="font/woff2" crossorigin="anonymous">
    <title>{{ $setting->meta_title }}</title>
    <link rel="stylesheet" href="{{ asset('frontend/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('./frontend/frame.css') }}">
    <style>
        .containerTest {
            width: 67em;
            position: relative;
            display: inline-block;
            margin: auto;
            font-size: 1em;
        }
    
        .circlediv {
            position: absolute;
            top: 6px;
            left: 7px;
            height: 520px;
            width: 520px;
            border-radius: 50%;
            font-size: 1em;
        }
    
        /* Mobile-first approach */
        @media (max-width: 767px) {
            .circlediv {
                top: 3px;
                left: 4px;
                height: 260px;
                width: 260px;
            }
        }
    
        @media (min-width: 768px) and (max-width: 1279px) {
            .circlediv {
                top: 4px;
                left: 4px;
                height: 400px;
                width: 400px;
            }
        }
    
        @media (min-width: 1280px) and (max-width: 1919px) {
            .circlediv {
                top: 6px;
                left: 7px;
                height: 520px;
                width: 520px;
            }
        }
    </style>
    

</head>

<body data-new-gr-c-s-check-loaded="14.1164.0" cz-shortcut-listen="true">
    <div id="root">
        <nav class="sticky top-2 z-30 my-2 w-full bg-white">
            <div class="container">
                <div
                    class="relative flex items-center justify-between gap-2 rounded-3xl px-4 shadow lg:gap-4 lg:px-6">
                    <div class="flex items-center gap-4 lg:gap-10">
                        <div class="h-14"><img class="h-full" src="{{ asset('./backend/images/' . $setting->logo) }}"
                                alt="logo" loading="lazy" style="cursor: pointer;"></div>
                            </div>
                    <div class="flex items-center gap-2">
                        @if ($setting->facebook)
                            <div
                                class="flex h-9 w-9 cursor-pointer items-center justify-center rounded-full border border-white hover:border-primary hover:bg-primary hover:text-white">
                                <a href="{{ $setting->facebook }}">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                            </div>
                        @endif
                        @if ($setting->twitter)
                            <div
                                class="flex h-9 w-9 cursor-pointer items-center justify-center rounded-full border border-white hover:border-primary hover:bg-primary hover:text-white">
                                <a href="{{ $setting->twitter }}">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            </div>
                        @endif
                        @if ($setting->youtube)
                            <div
                                class="flex h-9 w-9 cursor-pointer items-center justify-center rounded-full border border-white hover:border-primary hover:bg-primary hover:text-white">
                                <a href="{{ $setting->youtube }}">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                            </div>
                        @endif
                        @if ($setting->linkedin)
                            <div
                                class="flex h-9 w-9 cursor-pointer items-center justify-center rounded-full border border-white hover:border-primary hover:bg-primary hover:text-white">
                                <a href="{{ $setting->linkedin }}">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                            </div>
                        @endif
                        @if ($setting->instagram)
                            <div
                                class="flex h-9 w-9 cursor-pointer items-center justify-center rounded-full border border-white hover:border-primary hover:bg-primary hover:text-white">
                                <a href="{{ $setting->instagram }}">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </div>
                        @endif
                        @if ($setting->telegram)
                            <div
                                class="flex h-9 w-9 cursor-pointer items-center justify-center rounded-full border border-white hover:border-primary hover:bg-primary hover:text-white">
                                <a href="{{ $setting->telegram }}">
                                    <i class="fa-brands fa-telegram"></i>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </nav>
        <main class="mb-12">
            
            <section class="pb-14">
                <div class="container mt-3">
                    <div class="mb-7">
                        <div class="overflow-hidden"><canvas width="1366" height="50"
                                style="z-index: 2; position: static; pointer-events: none; inset: 0px; margin: auto;"></canvas>
                        </div>
                        <div class="mx-auto max-w-[50rem] text-center">
                            <p
                                class="text-gradient mx-auto my-7 inline-block text-center text-xl font-bold text-black md:text-2xl">
                                {{ $setting->language == 'en' ? $campaign->heading_en : $campaign->heading_bn }}</p>
                            <p
                                class="text-gradient mx-auto inline-block text-center text-sm font-bold text-black md:text-sm mb-7">
                                {{ $setting->language == 'en' ? $campaign->description_en : $campaign->description_bn }}
                            </p>
                            {{-- @if ($campaign->sub_heading_bn || $campaign->sub_heading_en)
                                <p
                                    class="text-gradient mx-auto my-7 inline-block text-center text-sm font-bold text-black md:text-sm">
                                    {{ $setting->language == 'en' ? $campaign->sub_heading_en : $campaign->sub_heading_bn }}
                                </p>
                            @endif --}}
                            <h3 class="mb-6 text-red-700">
                                {{ $setting->language == 'en' ? $campaign->instruction_en : $campaign->instruction_bn }}
                            </h3>
                        </div>
                        <div class="text-center">
                            <div
                                class="flex flex-wrap justify-center gap-4 text-[4px] md:gap-6 md:text-[4px] lg:text-[6px] xl:text-[8px]">
                                
                                <div class="scale-105 border-primary opacity-100 rounded-md border-4 p-2 transition-all"
                                    style="font-size: 1em; cursor: pointer;">
                                    <div class="containerTest">
                                        <img id="image" src="{{ asset('./backend/images/' . $campaign->frame_one) }}"
                                            alt="frame_one" style="width: 100%;">
                                        <div class="circlediv" style="z-index: -1">
                                            <div id="overlayContainer1" class="overlay"
                                                style="background-size: cover; background-position: center center; background-repeat: no-repeat; height: 100%; width: 100%; overflow: hidden; border-radius: 999999px;">
                                            </div>
                                        </div>
                                        {{-- <div
                                            style="text-align: right; font-weight: normal; position: absolute; margin: 0px; padding: 0px; line-height: 0; top: 60%; right: 61%; height: 5.5em; font-size: 1em;">
                                            <p id="displayName1"
                                                style="color: rgb(235, 214, 216); margin: 0px 0px 1.1em; padding: 0px; font-weight: 600; line-height: 0; font-size: 2em;">

                                            </p>
                                            <p id="displaymobile1"
                                                style="color: rgb(235, 214, 216); font-weight: normal; margin: 0px; padding: 0px; line-height: 0; font-size: 1.3em;">

                                            </p>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="z-10 rounded-xl border-t-4 border-primary p-11 shadow-center-2xl">
                        <div class="mb-4">
                            <h3 class="text-2xl">{{ $setting->language == 'en' ? $campaign->instruction_two_en : $campaign->instruction_two_bn }}</h3>
                        </div>
                        <form action="" id="perticipant_form" enctype="multipart/form-data">
                            @csrf
                           
                            <div class="flex flex-col gap-4">

                                <div class="flex justify-between flex-col gap-3 md:flex-row">
                                    <div>
                                        <input type="hidden" value="{{ $campaign->id }}" name="campaign_id">
                                
                                        <label for="userImage"
                                            class="flex cursor-pointer items-center gap-2 rounded-md border border-primary bg-primary bg-opacity-5 px-6 py-[14px]">
                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                                                stroke-linejoin="round" class="text-xl" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h7"></path>
                                                <line x1="16" x2="22" y1="5" y2="5"></line>
                                                <line x1="19" x2="19" y1="2" y2="8"></line>
                                                <circle cx="9" cy="9" r="2"></circle>
                                                <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"></path>
                                            </svg>
                                            <span class="opacity-50">আপনার ছবি যুক্ত করুন</span>
                                            <input class="text-sm-lg hidden flex-1 bg-transparent outline-none" type="file" name="image" id="userImage" required>
                                        </label>
                                    </div>
                                    <div class="flex items-center justify-center gap-4">
                                        <button id="downloadBtn" type="submit"
                                            class="rounded-md border border-primary bg-primary bg-opacity-5 px-6 py-[14px] flex items-center justify-center gap-2 hidden">
                                            <span>ডাউনলোড করুন</span>
                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                                            stroke-linejoin="round" class="text-xl" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                            <polyline points="7 10 12 15 17 10"></polyline>
                                            <line x1="12" x2="12" y1="15" y2="3"></line>
                                        </svg>
                                        </button>
                                    </div>
                                </div>
                                
                                
                                <div>
                                    <p id="message" class="text-center text-red-500"></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </main>
        <footer class="mt-auto w-full">
            <div>
                <div class="container">
                    <div class="flex items-center justify-between rounded-t-3xl border-t-4 border-primary bg-white px-4 py-6 lg:px-6">
                        <div class="flex items-center gap-2">
                            <p class="sm:max-w-30px">
                                © {{ date('Y') }} <a href="#">{{ $setting->company_name }}</a>. All Rights
                                Reserved AkijBashir IT Team</p>
                           
                        </div>
                        <div class="ml-7 flex items-center gap-2">
                            @if ($setting->facebook)
                                <div
                                    class="flex h-9 w-9 cursor-pointer items-center justify-center rounded-full border border-white hover:border-primary hover:bg-primary hover:text-white">
                                    <a href="{{ $setting->facebook }}">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                </div>
                            @endif
                            @if ($setting->twitter)
                                <div
                                    class="flex h-9 w-9 cursor-pointer items-center justify-center rounded-full border border-white hover:border-primary hover:bg-primary hover:text-white">
                                    <a href="{{ $setting->twitter }}">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </div>
                            @endif
                            @if ($setting->youtube)
                                <div
                                    class="flex h-9 w-9 cursor-pointer items-center justify-center rounded-full border border-white hover:border-primary hover:bg-primary hover:text-white">
                                    <a href="{{ $setting->youtube }}">
                                        <i class="fa-brands fa-youtube"></i>
                                    </a>
                                </div>
                            @endif
                            @if ($setting->linkedin)
                                <div
                                    class="flex h-9 w-9 cursor-pointer items-center justify-center rounded-full border border-white hover:border-primary hover:bg-primary hover:text-white">
                                    <a href="{{ $setting->linkedin }}">
                                        <i class="fa-brands fa-linkedin"></i>
                                    </a>
                                </div>
                            @endif
                            @if ($setting->instagram)
                                <div
                                    class="flex h-9 w-9 cursor-pointer items-center justify-center rounded-full border border-white hover:border-primary hover:bg-primary hover:text-white">
                                    <a href="{{ $setting->instagram }}">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </div>
                            @endif
                            @if ($setting->telegram)
                                <div
                                    class="flex h-9 w-9 cursor-pointer items-center justify-center rounded-full border border-white hover:border-primary hover:bg-primary hover:text-white">
                                    <a href="{{ $setting->telegram }}">
                                        <i class="fa-brands fa-telegram"></i>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="invisible LoadingOverlay">
            <div class="Line-Progress">
                <div class="indeterminate"></div>
            </div>
        </div>
    </div>

    <script src="{{ asset('frontend/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('frontend/all.min.js') }}"></script>
    <script src="{{ asset('frontend/html2canvas.js') }}"></script>

    <script>
        // var nameInput = document.getElementById('name');
        // var mobileInput = document.getElementById('mobile');
        // // Get the display div
        // var displayName = document.getElementById('displayName');
        // var displaymobile = document.getElementById('displaymobile');

        // // Add event listener for the 'input' event
        // nameInput.addEventListener('input', function (event) {
        //     // Get the value of the input element when it changes
        //     var name = event.target.value;
        //     // Update the content of the display div with the input value
        //     displayName.textContent = name;
        //     displayName1.textContent = name;
        // });
        // mobileInput.addEventListener('input', function (event) {
        //     var mobile = event.target.value;
        //     displaymobile.textContent = mobile;
        //     displaymobile1.textContent = mobile;
        // }); 

        document.addEventListener("DOMContentLoaded", function() {
        var userAgent = navigator.userAgent.toLowerCase();
        var isChrome = userAgent.indexOf("chrome") > -1;
        var isFirefox = userAgent.indexOf("firefox") > -1;
        var isSafari = userAgent.indexOf("safari") > -1 && userAgent.indexOf("chrome") === -1;

        var messageDiv = document.getElementById("message");

        if (isChrome || isFirefox || isSafari) {
            messageDiv.textContent = "";
        } else {
            messageDiv.textContent = "ছবিটি ডাউনলোড করতে অনুগ্রহ পূর্বক গুগল ক্রোম , সাফারি অথবা মজিলা ফায়ারফক্স ব্যবহার করুন!";
        }
        });


        document.getElementById('userImage').addEventListener('change', function (event) {
            var file = event.target.files[0];
            var reader = new FileReader();
            var downloadBtn = document.getElementById('downloadBtn'); // Get the download button

            if (file) {
                reader.onload = function (e) {
                    var url = e.target.result;
                    // Update background image
                    document.getElementById('overlayContainer1').style.backgroundImage = "url('" + url + "')";
                    // Show the download button
                    downloadBtn.classList.remove('hidden');
                };
                reader.readAsDataURL(file);
            } else {
                // Hide the download button if no file is selected
                downloadBtn.classList.add('hidden');
            }
        });


        // document.getElementById('downloadBtn').addEventListener('click', function () {
        //     var container = document.querySelector('.containerTest');
        //     html2canvas(container).then(function (canvas) {
        //         var link = document.createElement('a');
        //         link.download = 'composite_image.png';
        //         link.href = canvas.toDataURL('image/png');
        //         link.click();
        //     });
        // });

        $('#perticipant_form').on('submit', function(e) {
            e.preventDefault();
            $('#downloadBtn').text('Processing...');
            $('#downloadBtn').attr('disabled', true);
            var formData = new FormData(this);

            $.ajax({
                url: "{{ route('perticipants.store') }}",
                method: 'POST',
                dataType: 'JSON',
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                    if (data.status == 200) {
                        $('#downloadBtn').text('ডাউনলোড করুন');
                        $('#downloadBtn').attr('disabled', false);
                        $('#perticipant_form')[0].reset();

                        var container = document.querySelector('.containerTest');
                        html2canvas(container).then(function(canvas) {
                            var link = document.createElement('a');
                            link.download = 'composite_image.png';
                            link.href = canvas.toDataURL('image/png');
                            link.click();
                        });

                        // alert(data.msg);
                    } else {
                        $('#downloadBtn').text('ডাউনলোড করুন');
                        $('#downloadBtn').attr('disabled', false);
                    }
                },

            });
        });
    </script>


</body>


</html>
