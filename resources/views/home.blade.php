<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>berso</title>
    <script src="{{ asset('assets/js/tailwind.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/berso.css') }}">

</head>

<body
    class="max-w-[1700px] bg-(--background) mx-auto [&::-webkit-scrollbar]:w-2.5  [&::-webkit-scrollbar-thumb]:bg-gradient-to-t [&::-webkit-scrollbar-thumb]:from-[#233561] [&::-webkit-scrollbar-thumb]:via-[#1e40af] [&::-webkit-scrollbar-thumb]:to-[#38bdf8]  [&::-webkit-scrollbar-thumb]:rounded-full">
    <header class="w-full md:h-dvh relative  flex flex-col gap-5 justify-between items-center pb-10 pt-25">
        <img src="{{asset('storage/home/header.jpg')}}" class="w-full h-[90%] absolute top-23 -z-1" alt=""/>

        <div class="w-full fixed top-4 right-0  flex justify-center items-center z-5">
            <div
                class="w-11/12 h-full flex justify-between items-center bg-(--white) section_shadow sm:px-4 px-2 sm:py-5 py-1.5 rounded-xl">
                <div class="max-lg:w-1/3 lg:hidden flex justify-start items-center">
                    <div class="flex flex-col gap-[3px] items-center justify-center cursor-pointer">
                        <span class="w-6.5 h-[3px] bg-(--primary-blue) rounded-full"></span>
                        <span class="w-8 h-[3px] bg-(--primary-blue) rounded-full"></span>
                        <span class="w-6.5 h-[3px] bg-(--primary-blue) rounded-full"></span>
                    </div>
                </div>
                <div class="max-lg:w-1/3 flex gap-1.5 items-end justify-center">
                    <span
                        class="text-[var(--dark-text)] xl:text-[30px] lg:text-[23px] md:text-[21px] text-[13px] lg:leading-4 md:leading-4 leading-3 font-bold">berso</span>
                    <img src="{{asset('storage/home/logo.png')}}" alt="" class="xl:w-8 lg:w-6 sm:w-7 w-5">
                </div>
                <div class="max-lg:hidden lg:flex w-8/12 h-auto flex justify-center rounded-xl mx-auto">
                    <ul
                        class="flex gap-4 lg:gap-6 xl:gap-10 text-(--dark-text) text-sm lg:text-base justify-end font-bold">
                        <li class="hover:text-(--primary-blue) flex justify-center flex-col items-center cursor-pointer py-1 group transition-all duration-300 ">
                            <span>خانه</span>
                            <div class="rounded-md group-hover:w-full w-[0px] bg-(--primary-blue) h-[2px] transition-all duration-300"></div>
                        </li>
                        <li
                            class="hover:text-(--primary-blue) flex justify-center flex-col items-center group cursor-pointer py-1 transition-all duration-300">
                            <span>نمونه کارها</span>
                            <div class="rounded-md group-hover:w-full w-[0px] bg-(--primary-blue) h-[2px] transition-all duration-300"></div> 
                        </li>
                        <li
                            class="hover:text-(--primary-blue) flex justify-center flex-col items-center group cursor-pointer py-1 transition-all duration-300">
                            <span>مشاوره</span>
                            <div class="rounded-md group-hover:w-full w-[0px] bg-(--primary-blue) h-[2px] transition-all duration-300"></div> 
                        </li>
                        <li
                            class="hover:text-(--primary-blue) flex justify-center flex-col items-center group cursor-pointer py-1 transition-all duration-300">
                            <span>گاه نوشت</span>
                            <div class="rounded-md group-hover:w-full w-[0px] bg-(--primary-blue) h-[2px] transition-all duration-300"></div> 
                        </li>
                        <li
                            class="hover:text-(--primary-blue) flex justify-center flex-col items-center group cursor-pointer py-1 transition-all duration-300">
                            <span>تماس باما</span>
                            <div class="rounded-md group-hover:w-full w-[0px] bg-(--primary-blue) h-[2px] transition-all duration-300"></div> 
                            
                        </li>
                        <li
                            class="hover:text-(--primary-blue) flex justify-center flex-col items-center group cursor-pointer py-1 transition-all duration-300">
                            <span>درباره ما</span>
                            <div class="rounded-md group-hover:w-full w-[0px] bg-(--primary-blue) h-[2px] transition-all duration-300"></div> 
                        </li>
                    </ul>
                </div>

                <div class="max-lg:w-1/3 flex justify-end items-center">
                    <div class="bg-(--primary-blue) inline-block text-(--white) px-2 md:px-4 py-2 md:py-3 rounded-3xl text-xs md:text-sm font-bold cursor-pointer hover:bg-blue-700 transition-all duration-300" onclick="login('open')">
                        ورود / ثبت نام
                    </div>
                </div>
            </div>
        </div>
        <div
            class="w-11/12 lg:w-3/7 h-full flex flex-col justify-center items-center  mx-auto text-center">
            <h1 class="text-2xl lg:text-[44px] font-bold text-(--dark-text) drop-shadow-lg">
                وب سایت حرفه ای برای
            </h1>
            <h2 class="text-2xl lg:text-[42px] font-bold text-(--primary-blue) mb-10 drop-shadow-lg">
                رشد کسب و کار شما
            </h2>
            <span class="text-(--secondary-text) drop-shadow-lg text-sm lg:text-lg">ما وب سایت هایی سریع زیبا کاملا
                اختصاصی طراحی
                میکنیم</span>
            <span class="text-(--secondary-text) drop-shadow-lg text-sm lg:text-lg">که کسب و کارشمارا حرفه ای نشان می
                دهد ومشتری
                بیشتری جذب
                می کند</span>
        </div>
        <div  class="w-11/12 lg:h-30 lg:flex sm:grid sm:grid-cols-2 lg:justify-between justify-center max-sm:flex max-sm:flex-col sm:items-center items-start max-sm:mt-10 xl:gap-4 gap-3 mx-auto">
            <div class="lg:w-1/5 w-full lg:h-full bg-(--card-background) flex justify-between items-center xl:px-4 px-3 max-lg:py-6 rounded-xl cart_shadow">
                <div class="flex flex-col gap-1 justify-start items-start">
                    <span class="max-xl:text-sm text-(--dark-text) font-bold block">طراحی اختصاصی</span>
                    <span class="text-(--secondary-text) block xl:text-sm text-xs">متناسب با نیاز شما</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" class=" xl:size-10 size-8 overflow-visible">

                    <g>
                        <path class="fill-none stroke-[#2563ff] stroke-5" style="stroke-linecap: round;" d="M40,10l6.3,23.5,23.5,6.3-23.5,6.3-6.3,23.5-6.3-23.5L10.5,39.8l23.5-6.3,6.3-23.5Z"></path>
                        <circle class="fill-none stroke-[#2563ff] stroke-5" style="stroke-linecap: round;" cx="40" cy="40" r="39.5"></circle>
                    </g>
                </svg>
            </div>
            <div class="lg:w-1/5 w-full lg:h-full bg-(--card-background) flex justify-between items-center xl:px-4 px-3 max-lg:py-6 rounded-xl cart_shadow">
                <div>
                    <span class="text-(--dark-text) font-bold block"> امنیت بالا</span>
                    <span class="text-(--secondary-text) block text-sm">حفاظت از اطلاعات</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" class=" size-10 overflow-visible">

                    <g>
                        <circle class="fill-none stroke-[#2563ff] stroke-5" style="stroke-linecap: round;" cx="40" cy="40" r="39.5" />
                        <path class="fill-none stroke-[#2563ff] stroke-5" style="stroke-linecap: round;"
                            d="M40,13.6l19.8,8.3v16.6c0,11.6-7.5,21.5-19.8,28.2-12.4-6.7-19.8-16.6-19.8-28.2v-16.6l19.8-8.3Z" />
                    </g>
                </svg>
            </div>
            <div class="lg:w-1/5 w-full lg:h-full col-span-2 flex justify-center items-center">
               <div class="lg:w-full sm:w-1/2 w-full lg:h-full bg-(--card-background) flex justify-between items-center xl:px-4 px-3 max-lg:py-6 rounded-xl cart_shadow">
                    <div>
                        <span class="text-(--dark-text) font-bold block"> سرعت فوق العاده</span>
                        <span class="text-(--secondary-text) block text-sm">بهینه و پرسرعت</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" class=" size-10 overflow-visible">

                        <g>
                            <circle class="fill-none stroke-[#2563ff] stroke-5" style="stroke-linecap: round;" cx="40" cy="40" r="39.5" />
                            <path class="fill-none stroke-[#2563ff] stroke-5" style="stroke-linecap: round;" d="M46.6,13.6l-23.2,29.8h14.9l-5,23.2,23.2-31.5h-14.9l5-21.5Z" />
                        </g>
                    </svg>
                </div>
            </div>
            <div class="lg:w-1/5 w-full lg:h-full bg-(--card-background) flex justify-between items-center xl:px-4 px-3 max-lg:py-6 rounded-xl cart_shadow">
                <div>
                    <span class="text-(--dark-text) font-bold block">رشد کسب و کار</span>
                    <span class="text-(--secondary-text) block text-sm">نتایج واقعی و قابل اندازه گیری</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" class="size-10 overflow-visible">

                    <g>
                        <circle class="fill-none stroke-[#2563ff] stroke-5" style="stroke-linecap: round;" cx="40" cy="40" r="39.5" />
                        <g>
                            <path class="fill-none stroke-[#2563ff] stroke-5" style="stroke-linecap: round;" d="M17,60.8v-37.2" />
                            <path class="fill-none stroke-[#2563ff] stroke-5" style="stroke-linecap: round;" d="M16.2,60h47.1" />
                        </g>
                        <path class="fill-none stroke-[#2563ff] stroke-5" style="stroke-linecap: round;" d="M23.6,50.1l9.9-11.6,9.9,6.6,16.6-19.9" />
                        <path class="fill-none stroke-[#2563ff] stroke-5" style="stroke-linecap: round;" d="M53.4,25.2h6.6v6.6" />
                    </g>
                </svg>
            </div>
            <div class="lg:w-1/5 w-full lg:h-full bg-(--card-background) flex justify-between items-center xl:px-4 px-3 max-lg:py-6 rounded-xl cart_shadow">
                <div>
                    <span class="text-(--dark-text) font-bold block">پشتیبانی رایگان</span>
                    <span class="text-(--secondary-text) block text-sm">همراه شما هستیم</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" class=" size-10 overflow-visible">

                    <g>
                        <circle class="fill-none stroke-[#2563ff] stroke-5" style="stroke-linecap: round;" cx="40" cy="40" r="39.5" />
                        <g>
                            <path class="fill-none stroke-[#2563ff] stroke-5" style="stroke-linecap: round;" d="M20.3,39.3v-6.6c0-11.6,8.3-18.2,19.9-18.2s19.9,6.6,19.9,18.2v6.6" />
                            <path class="fill-none stroke-[#2563ff] stroke-5" style="stroke-linecap: round;"
                                d="M20.3,36h0c2.7,0,5,2.2,5,5v9.9c0,2.7-2.2,5-5,5h0c-2.7,0-5-2.2-5-5v-9.9c0-2.7,2.2-5,5-5Z" />
                            <path class="fill-none stroke-[#2563ff] stroke-5" style="stroke-linecap: round;"
                                d="M60,36h0c2.7,0,5,2.2,5,5v9.9c0,2.7-2.2,5-5,5h0c-2.7,0-5-2.2-5-5v-9.9c0-2.7,2.2-5,5-5Z" />
                            <path class="fill-none stroke-[#2563ff] stroke-5" style="stroke-linecap: round;" d="M60,55.9c0,6.6-5,9.9-13.3,9.9" />
                        </g>
                    </g>
                </svg>
            </div>
        </div>
    </header>
    <div class="fixed top-0 w-full h-dvh flex right-0 justify-center invisible opacity-0 items-center transition-all duration-300 z-5" id="loginpupop">
        <div class="w-full h-full bg-black/20" onclick="login('clos')"></div>
        <div class="absolute w-4/12 h-17/24 bg-white rounded-2xl flex flex-col gap-3 p-5">
            <div class="flex justify-end">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="size-5 fill-[#767676] cursor-pointer" onclick="login('clos')">
                    <path d="M324.5 411.1c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6L214.6 256 347.1 123.5c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0L192 233.4 59.5 100.9c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L169.4 256 36.9 388.5c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0L192 278.6 324.5 411.1z"/>
                </svg>
            </div>
            <div class="w-full flex flex-col items-center gap-3">
                <div class="max-lg:w-1/3 flex gap-1.5 items-end justify-center">
                    <span class="text-[var(--dark-text)] xl:text-[30px] lg:text-[23px] md:text-[21px] text-[13px] lg:leading-4 md:leading-4 leading-3 font-bold">berso</span>
                    <img src="{{asset('storage/home/logo.png')}}" alt="" class="xl:w-13 lg:w-9 sm:w-7 w-5">
                </div>
                <form action="{{ route('User.LoginUser') }}" method="POST" id="logInForm" class="w-full mx-auto flex items-center flex-col gap-3 rounded-3xl p-6 my-5">
                    @csrf
                    <h1 class="text-white text-xl">login</h1>
                    <input class="w-full rounded-full bg-(--very-light-violet) p-3" name="phoneNumber" type="text" placeholder="شمره تلفن"
                        id="phoneNumberlogin">
                    <div id="phoneNumberSection"></div>

                    <input class="w-full rounded-full bg-(--very-light-violet) p-3 hidden" name="password" type="password"
                        placeholder="رمز عبور" id="passwordlogin">
                    <div id="passwordSection"></div>

                    <div class="w-full flex gap-2 justify-between" id="codeBox">
                        <input class="bg-(--very-light-violet) p-3 rounded-full" name="code" type="text" placeholder="کد"
                            id="codelogin">
                        <button type="button" onclick="sendCodelogin(this)"
                            class="bg-[orange] w-2/10 text-center text-white flex items-center rounded-lg justify-center">ارسال
                            کد</button>
                    </div>

                    <div class="flex gap-5 justify-between">
                        <div class="cursor-pointer hover:text-blue-500" onclick="loginWithPass(this)">ورود با پسورد</div>
                        <div><a href="" class="hover:text-blue-500">فراموش کردن رمز عبور</a></div>
                    </div>

                    <button type="button" class="w-3/12 p-3 rounded-3xl bg-(--primary-blue) text-white mt-5" onclick="loginCode(event)"
                        id="submitBtn">ورود
                    </button>
                    <div class="w-9/12 flex flex-col items-center gap-3 p-2">
                        <div class="w-full bg-(--primary-blue) rounded-3xl h-[3px]"></div>    
                        <span class="text-xl text-(--primary-blue) cursor-pointer" onclick="change('signup')">ثبت نام!</span>
                    </div>
                </form>
                <form action="{{ route('User.createSignup') }}" method="POST" id="signupForm" class="w-full mx-auto invisible opacity-0 flex items-center flex-col absolute gap-3 rounded-3xl p-6 my-5">
                    @csrf
                    @if(session('message'))
                        <script>
                            link = "{{ url('/') }}/";
                            alert(@json(session('message')));
                            location.assign(link + 'login')
                        </script>
                    @endif
                    <h1 class="text-white text-xl">signUp</h1>
                    <input class="w-full rounded-full bg-(--very-light-violet) p-3" name="phoneNumber" type="text" placeholder="شماره تلفن"
                        id="phoneNumber" value="{{ old("phoneNumber") }}">
                    <div id="phoneNumberSection"></div>
                    <!-- @error("phoneNumber")
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror -->
                    <input class="w-full rounded-full bg-(--very-light-violet) p-3" name="password" type="text" placeholder="رمز عبور"
                        id="password" value="{{ old("password") }}">
                    <div id="passwordSection"></div>

                    <div class="w-full flex gap-2 justify-between">
                        <input class="bg-(--very-light-violet) p-3 rounded-full" name="code" type="text" placeholder="کد"
                            id="code">
                        <button type="button" onclick="sendCode(this)"
                            class="bg-[orange] w-2/10 text-center text-white flex items-center rounded-lg justify-center">ارسال
                            کد</button>
                    </div>
                    <!-- @error("password")
                        <div class="text-red-400">{{ $message }}</div>
                    @enderror -->
                    <button class="w-3/12 p-3 rounded-3xl bg-(--primary-blue) text-white mt-5" onclick="signUp(event)">ثبت نام</button>
                    <div class="w-9/12 flex flex-col items-center gap-3 p-2">
                        <div class="w-full bg-(--primary-blue) rounded-3xl h-[3px]"></div>    
                        <span class="text-xl text-(--primary-blue) cursor-pointer" onclick="change('login')">ورود!</span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <main class="mt-10 flex flex-col gap-10 justify-start items-center">
        <!-- identify_vidio-start -->
        <section class="w-full flex justify-center">
            <div class="w-11/12 rounded-xl flex flex-col md:flex-row gap-4 bg-blue-700 px-4 lg:py-6 py-4">
                <div class="w-full md:w-1/2 flex justify-center items-center">
                    <div class="w-full  lg:h-60 xl:65 sm:h-50 h-40 bg-(--bg-secondary) rounded-xl flex items-center justify-center">
                        <img class="rounded-xl w-full h-full" src="{{asset('storage/home/6-11.png')}}" alt="">
                    </div>
                </div>
                <div
                    class="w-full md:w-1/2 flex flex-col justify-center items-center text-center max-md:p-6">
                    <span class="text-white font-bold mb-4 md:mb-6 max-lg:text-sm max-sm;text-xs">تیم برسو</span>
                    <span class="text-white sm:text-lg xl:text-2xl lg:text-xl font-bold mb-3 md:mb-4">نه فقط یک تیم، بلکه شریکی برای رشد کسب و کار شما</span>
                    <span class="text-white mb-1 md:mb-2 max-lg:text-sm max-sm;text-xs">با ترکیبی از تخصص، خلاقیت و تجربه راهکارهای دیجیتال</span>
                    <span class="text-white max-lg:text-sm max-sm;text-xs">موثر و ماندگار برای برند شما ایجاد میکنیم</span>
                    <div
                        class="px-4 py-2 bg-white flex gap-2 items-center justify-center rounded-lg text-(--primary-blue) mt-4 cursor-pointer hover:bg-gray-100 transition-all">
                        <span class="lg:text-lg max-sm:text-sm">درباره ما</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4 ml-2" viewBox="0 0 448 512">
                            <path fill="#2563EB"
                                d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                        </svg>
                    </div>
                </div>
            </div>
        </section>
        <!-- identify_vidio_end -->

        <!-- idea_start -->
        <section class="w-full flex items-center justify-center">
            <div
                class="w-11/12 h-full flex flex-col gap-3 items-center justify-center bg-(--cart-background) rounded-xl section_shadow bg-(--section-background) py-7">
                <p class="font-bold text-lg text-[var(--light-blue)]">چرا Berso?</p>
                <p class="lg:text-2xl sm:text-xl text-lg font-bold text-(--dark-text) mt-1">ارزش پیشنهادی ما</p>

                <div
                    class="w-full p-3 flex h-45 gap-5 overflow-x-auto justify-start [&::-webkit-scrollbar]:h-1  [&::-webkit-scrollbar-thumb]:bg-[#8B5CF6]  [&::-webkit-scrollbar-thumb]:rounded-full">
                    <div
                        class="xl:min-w-1/9 xl:w-1/9 lg:min-w-1/6 lg:w-1/6 sm:min-w-1/4 sm:w-1/4 min-w-11/24 w-11/24  h-full flex flex-col gap-3 justify-center items-center bg-(--card-background) cart_shadow p-3 rounded-md">

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-13 mx-auto"
                            viewBox="0 0 640 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path fill="var(--light-blue)"
                                d="M144 160A80 80 0 1 0 144 0a80 80 0 1 0 0 160zm368 0A80 80 0 1 0 512 0a80 80 0 1 0 0 160zM0 298.7C0 310.4 9.6 320 21.3 320H234.7c.2 0 .4 0 .7 0c-26.6-23.5-43.3-57.8-43.3-96c0-7.6 .7-15 1.9-22.3c-13.6-6.3-28.7-9.7-44.6-9.7H106.7C47.8 192 0 239.8 0 298.7zM405.3 320H618.7c11.8 0 21.3-9.6 21.3-21.3C640 239.8 592.2 192 533.3 192H490.7c-15.9 0-31 3.5-44.6 9.7c1.3 7.2 1.9 14.7 1.9 22.3c0 38.2-16.8 72.5-43.3 96c.2 0 .4 0 .7 0zM320 176a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm0 144a96 96 0 1 0 0-192 96 96 0 1 0 0 192zm-58.7 80H378.7c39.8 0 73.2 27.2 82.6 64H178.7c9.5-36.8 42.9-64 82.6-64zm0-48C187.7 352 128 411.7 128 485.3c0 14.7 11.9 26.7 26.7 26.7H485.3c14.7 0 26.7-11.9 26.7-26.7C512 411.7 452.3 352 378.7 352H261.3z" />
                        </svg>
                        <p class="max-lg:text-sm max-sm:text-xs font-bold mt-2 text-(--dark-text)">تجربه کاربری عالی</p>
                        <p class="lg:text-xs sm:text-[10px] text-[7px] text-(--secondary-text)">طراحی UI / UX جذاب</p>
                    </div>
                    <div
                        class="xl:min-w-1/9 xl:w-1/9 lg:min-w-1/6 lg:w-1/6 sm:min-w-1/4 sm:w-1/4 min-w-11/24 w-11/24  h-full flex flex-col gap-3 justify-center items-center bg-(--card-background) cart_shadow p-3 rounded-md">

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-13 mx-auto"
                            viewBox="0 0 640 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path fill="var(--light-blue)"
                                d="M144 160A80 80 0 1 0 144 0a80 80 0 1 0 0 160zm368 0A80 80 0 1 0 512 0a80 80 0 1 0 0 160zM0 298.7C0 310.4 9.6 320 21.3 320H234.7c.2 0 .4 0 .7 0c-26.6-23.5-43.3-57.8-43.3-96c0-7.6 .7-15 1.9-22.3c-13.6-6.3-28.7-9.7-44.6-9.7H106.7C47.8 192 0 239.8 0 298.7zM405.3 320H618.7c11.8 0 21.3-9.6 21.3-21.3C640 239.8 592.2 192 533.3 192H490.7c-15.9 0-31 3.5-44.6 9.7c1.3 7.2 1.9 14.7 1.9 22.3c0 38.2-16.8 72.5-43.3 96c.2 0 .4 0 .7 0zM320 176a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm0 144a96 96 0 1 0 0-192 96 96 0 1 0 0 192zm-58.7 80H378.7c39.8 0 73.2 27.2 82.6 64H178.7c9.5-36.8 42.9-64 82.6-64zm0-48C187.7 352 128 411.7 128 485.3c0 14.7 11.9 26.7 26.7 26.7H485.3c14.7 0 26.7-11.9 26.7-26.7C512 411.7 452.3 352 378.7 352H261.3z" />
                        </svg>
                        <p class="max-lg:text-sm max-sm:text-xs font-bold mt-2 text-(--dark-text)">تجربه کاربری عالی</p>
                        <p class="lg:text-xs sm:text-[10px] text-[7px] text-(--secondary-text)">طراحی UI / UX جذاب</p>
                    </div>
                    <div
                        class="xl:min-w-1/9 xl:w-1/9 lg:min-w-1/6 lg:w-1/6 sm:min-w-1/4 sm:w-1/4 min-w-11/24 w-11/24  h-full flex flex-col gap-3 justify-center items-center bg-(--card-background) cart_shadow p-3 rounded-md">

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-13 mx-auto"
                            viewBox="0 0 640 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path fill="var(--light-blue)"
                                d="M144 160A80 80 0 1 0 144 0a80 80 0 1 0 0 160zm368 0A80 80 0 1 0 512 0a80 80 0 1 0 0 160zM0 298.7C0 310.4 9.6 320 21.3 320H234.7c.2 0 .4 0 .7 0c-26.6-23.5-43.3-57.8-43.3-96c0-7.6 .7-15 1.9-22.3c-13.6-6.3-28.7-9.7-44.6-9.7H106.7C47.8 192 0 239.8 0 298.7zM405.3 320H618.7c11.8 0 21.3-9.6 21.3-21.3C640 239.8 592.2 192 533.3 192H490.7c-15.9 0-31 3.5-44.6 9.7c1.3 7.2 1.9 14.7 1.9 22.3c0 38.2-16.8 72.5-43.3 96c.2 0 .4 0 .7 0zM320 176a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm0 144a96 96 0 1 0 0-192 96 96 0 1 0 0 192zm-58.7 80H378.7c39.8 0 73.2 27.2 82.6 64H178.7c9.5-36.8 42.9-64 82.6-64zm0-48C187.7 352 128 411.7 128 485.3c0 14.7 11.9 26.7 26.7 26.7H485.3c14.7 0 26.7-11.9 26.7-26.7C512 411.7 452.3 352 378.7 352H261.3z" />
                        </svg>
                        <p class="max-lg:text-sm max-sm:text-xs font-bold mt-2 text-(--dark-text)">تجربه کاربری عالی</p>
                        <p class="lg:text-xs sm:text-[10px] text-[7px] text-(--secondary-text)">طراحی UI / UX جذاب</p>
                    </div>
                    <div
                        class="xl:min-w-1/9 xl:w-1/9 lg:min-w-1/6 lg:w-1/6 sm:min-w-1/4 sm:w-1/4 min-w-11/24 w-11/24  h-full flex flex-col gap-3 justify-center items-center bg-(--card-background) cart_shadow p-3 rounded-md">

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-13 mx-auto"
                            viewBox="0 0 640 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path fill="var(--light-blue)"
                                d="M144 160A80 80 0 1 0 144 0a80 80 0 1 0 0 160zm368 0A80 80 0 1 0 512 0a80 80 0 1 0 0 160zM0 298.7C0 310.4 9.6 320 21.3 320H234.7c.2 0 .4 0 .7 0c-26.6-23.5-43.3-57.8-43.3-96c0-7.6 .7-15 1.9-22.3c-13.6-6.3-28.7-9.7-44.6-9.7H106.7C47.8 192 0 239.8 0 298.7zM405.3 320H618.7c11.8 0 21.3-9.6 21.3-21.3C640 239.8 592.2 192 533.3 192H490.7c-15.9 0-31 3.5-44.6 9.7c1.3 7.2 1.9 14.7 1.9 22.3c0 38.2-16.8 72.5-43.3 96c.2 0 .4 0 .7 0zM320 176a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm0 144a96 96 0 1 0 0-192 96 96 0 1 0 0 192zm-58.7 80H378.7c39.8 0 73.2 27.2 82.6 64H178.7c9.5-36.8 42.9-64 82.6-64zm0-48C187.7 352 128 411.7 128 485.3c0 14.7 11.9 26.7 26.7 26.7H485.3c14.7 0 26.7-11.9 26.7-26.7C512 411.7 452.3 352 378.7 352H261.3z" />
                        </svg>
                        <p class="max-lg:text-sm max-sm:text-xs font-bold mt-2 text-(--dark-text)">تجربه کاربری عالی</p>
                        <p class="lg:text-xs sm:text-[10px] text-[7px]">طراحی UI / UX جذاب</p>
                    </div>
                    <div
                        class="xl:min-w-1/9 xl:w-1/9 lg:min-w-1/6 lg:w-1/6 sm:min-w-1/4 sm:w-1/4 min-w-11/24 w-11/24  h-full flex flex-col gap-3 justify-center items-center bg-(--card-background) cart_shadow p-3 rounded-md">

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-13 mx-auto"
                            viewBox="0 0 640 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path fill="var(--light-blue)"
                                d="M144 160A80 80 0 1 0 144 0a80 80 0 1 0 0 160zm368 0A80 80 0 1 0 512 0a80 80 0 1 0 0 160zM0 298.7C0 310.4 9.6 320 21.3 320H234.7c.2 0 .4 0 .7 0c-26.6-23.5-43.3-57.8-43.3-96c0-7.6 .7-15 1.9-22.3c-13.6-6.3-28.7-9.7-44.6-9.7H106.7C47.8 192 0 239.8 0 298.7zM405.3 320H618.7c11.8 0 21.3-9.6 21.3-21.3C640 239.8 592.2 192 533.3 192H490.7c-15.9 0-31 3.5-44.6 9.7c1.3 7.2 1.9 14.7 1.9 22.3c0 38.2-16.8 72.5-43.3 96c.2 0 .4 0 .7 0zM320 176a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm0 144a96 96 0 1 0 0-192 96 96 0 1 0 0 192zm-58.7 80H378.7c39.8 0 73.2 27.2 82.6 64H178.7c9.5-36.8 42.9-64 82.6-64zm0-48C187.7 352 128 411.7 128 485.3c0 14.7 11.9 26.7 26.7 26.7H485.3c14.7 0 26.7-11.9 26.7-26.7C512 411.7 452.3 352 378.7 352H261.3z" />
                        </svg>
                        <p class="max-lg:text-sm max-sm:text-xs font-bold mt-2 text-(--dark-text)">تجربه کاربری عالی</p>
                        <p class="lg:text-xs sm:text-[10px] text-[7px] text-(--secondary-text)">طراحی UI / UX جذاب</p>
                    </div>
                    <div
                        class="xl:min-w-1/9 xl:w-1/9 lg:min-w-1/6 lg:w-1/6 sm:min-w-1/4 sm:w-1/4 min-w-11/24 w-11/24  h-full flex flex-col gap-3 justify-center items-center bg-(--card-background) cart_shadow p-3 rounded-md">

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-13 mx-auto"
                            viewBox="0 0 640 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path fill="var(--light-blue)"
                                d="M144 160A80 80 0 1 0 144 0a80 80 0 1 0 0 160zm368 0A80 80 0 1 0 512 0a80 80 0 1 0 0 160zM0 298.7C0 310.4 9.6 320 21.3 320H234.7c.2 0 .4 0 .7 0c-26.6-23.5-43.3-57.8-43.3-96c0-7.6 .7-15 1.9-22.3c-13.6-6.3-28.7-9.7-44.6-9.7H106.7C47.8 192 0 239.8 0 298.7zM405.3 320H618.7c11.8 0 21.3-9.6 21.3-21.3C640 239.8 592.2 192 533.3 192H490.7c-15.9 0-31 3.5-44.6 9.7c1.3 7.2 1.9 14.7 1.9 22.3c0 38.2-16.8 72.5-43.3 96c.2 0 .4 0 .7 0zM320 176a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm0 144a96 96 0 1 0 0-192 96 96 0 1 0 0 192zm-58.7 80H378.7c39.8 0 73.2 27.2 82.6 64H178.7c9.5-36.8 42.9-64 82.6-64zm0-48C187.7 352 128 411.7 128 485.3c0 14.7 11.9 26.7 26.7 26.7H485.3c14.7 0 26.7-11.9 26.7-26.7C512 411.7 452.3 352 378.7 352H261.3z" />
                        </svg>
                        <p class="max-lg:text-sm max-sm:text-xs font-bold mt-2">تجربه کاربری عالی</p>
                        <p class="lg:text-xs sm:text-[10px] text-[7px] text-(--secondary-text)">طراحی UI / UX جذاب</p>
                    </div>
                    <div
                        class="xl:min-w-1/9 xl:w-1/9 lg:min-w-1/6 lg:w-1/6 sm:min-w-1/4 sm:w-1/4 min-w-11/24 w-11/24  h-full flex flex-col gap-3 justify-center items-center bg-(--card-background) cart_shadow p-3 rounded-md">

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-13 mx-auto"
                            viewBox="0 0 640 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path fill="var(--light-blue)"
                                d="M144 160A80 80 0 1 0 144 0a80 80 0 1 0 0 160zm368 0A80 80 0 1 0 512 0a80 80 0 1 0 0 160zM0 298.7C0 310.4 9.6 320 21.3 320H234.7c.2 0 .4 0 .7 0c-26.6-23.5-43.3-57.8-43.3-96c0-7.6 .7-15 1.9-22.3c-13.6-6.3-28.7-9.7-44.6-9.7H106.7C47.8 192 0 239.8 0 298.7zM405.3 320H618.7c11.8 0 21.3-9.6 21.3-21.3C640 239.8 592.2 192 533.3 192H490.7c-15.9 0-31 3.5-44.6 9.7c1.3 7.2 1.9 14.7 1.9 22.3c0 38.2-16.8 72.5-43.3 96c.2 0 .4 0 .7 0zM320 176a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm0 144a96 96 0 1 0 0-192 96 96 0 1 0 0 192zm-58.7 80H378.7c39.8 0 73.2 27.2 82.6 64H178.7c9.5-36.8 42.9-64 82.6-64zm0-48C187.7 352 128 411.7 128 485.3c0 14.7 11.9 26.7 26.7 26.7H485.3c14.7 0 26.7-11.9 26.7-26.7C512 411.7 452.3 352 378.7 352H261.3z" />
                        </svg>
                        <p class="max-lg:text-sm max-sm:text-xs font-bold mt-2 text-(--dark-text)">تجربه کاربری عالی</p>
                        <p class="lg:text-xs sm:text-[10px] text-[7px] text-(--secondary-text)">طراحی UI / UX جذاب</p>
                    </div>
                    <div
                        class="xl:min-w-1/9 xl:w-1/9 lg:min-w-1/6 lg:w-1/6 sm:min-w-1/4 sm:w-1/4 min-w-11/24 w-11/24  h-full flex flex-col gap-3 justify-center items-center bg-(--card-background)  cart_shadow p-3 rounded-md">

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-13 mx-auto"
                            viewBox="0 0 640 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path fill="var(--light-blue)"
                                d="M144 160A80 80 0 1 0 144 0a80 80 0 1 0 0 160zm368 0A80 80 0 1 0 512 0a80 80 0 1 0 0 160zM0 298.7C0 310.4 9.6 320 21.3 320H234.7c.2 0 .4 0 .7 0c-26.6-23.5-43.3-57.8-43.3-96c0-7.6 .7-15 1.9-22.3c-13.6-6.3-28.7-9.7-44.6-9.7H106.7C47.8 192 0 239.8 0 298.7zM405.3 320H618.7c11.8 0 21.3-9.6 21.3-21.3C640 239.8 592.2 192 533.3 192H490.7c-15.9 0-31 3.5-44.6 9.7c1.3 7.2 1.9 14.7 1.9 22.3c0 38.2-16.8 72.5-43.3 96c.2 0 .4 0 .7 0zM320 176a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm0 144a96 96 0 1 0 0-192 96 96 0 1 0 0 192zm-58.7 80H378.7c39.8 0 73.2 27.2 82.6 64H178.7c9.5-36.8 42.9-64 82.6-64zm0-48C187.7 352 128 411.7 128 485.3c0 14.7 11.9 26.7 26.7 26.7H485.3c14.7 0 26.7-11.9 26.7-26.7C512 411.7 452.3 352 378.7 352H261.3z" />
                        </svg>
                        <p class="max-lg:text-sm max-sm:text-xs font-bold mt-2 text-(--dark-text)">تجربه کاربری عالی</p>
                        <p class="lg:text-xs sm:text-[10px] text-[7px] text-(--secondary-text)">طراحی UI / UX جذاب</p>
                    </div>

                </div>
            </div>
        </section>
        <!-- idea_end -->
        <!-- jobs_start -->
        <section class="w-full flex items-center justify-center">
            <div
                class="w-11/12 flex flex-col gap-3 items-center justify-center bg-[url({{asset('storage/home/Picsart_26-08-11_15-33-59-831.png')}})] rounded-xl section_shadow py-7">
                <p class="text-[17px] text-(--white) font-bold lg:text-3xl mt-1 text-xl text-center">برای چه کسب و کارهایی طراحی
                    میکنیم ؟</p>

                <div class="w-11/12 lg:h-47 sm:h-37 h-30 flex gap-5 mt-5 overflow-x-auto lg:justify-start">
                    <div class="xl:min-w-15/100 xl:w-16/100 lg:min-w-23/100 lg:w-23/100 sm:min-w-31/100 sm:w-31/100 min-w-48/100 w-48/100  h-full flex flex-col lg:gap-3 sm:gap-2 gap-1 justify-center items-center cart_shadow p-3 rounded-md bg-white">
                        <svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" class="lg:size-12 sm:size-10 size-8 mx-auto"
                            viewBox="0 0 109.51 115.89">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: rgba(105, 37, 37, 0.563);
                                    }
                                </style>
                            </defs>
                            <g id="Layer_1-2" data-name="Layer 1">
                                <g>
                                    <path class="cls-1"
                                        d="M45.47,1.2c-3,2.5-4.8,6.3-4.8,10,0,3.1.8,4.7,4,8.2,4.7,5.1,5.3,9.6,1.9,13.2-2.1,2.3-1.9,4.4.5,4.4s6.8-5.7,7.3-9.8c.5-3.7.2-4.4-4.1-9-5.4-5.7-5.9-8.9-2.1-13.7,1.3-1.8,2.1-3.5,1.8-3.9-1-1-2.8-.7-4.5.6Z" />
                                    <path class="cls-1"
                                        d="M62.27,8.1c-3.9,4.6-3.6,9.3.9,13.3,4,3.7,4.5,6.9,1.4,10.2-2.1,2.3-1.9,4.4.6,4.4,2.3,0,6.5-5.9,6.5-9.2,0-2.1-1.1-4.1-4-7-4.6-4.7-4.9-6.2-1.9-9.4,2.1-2.2,2.1-5.4,0-5.4-.5,0-2.1,1.4-3.5,3.1Z" />
                                    <path class="cls-1"
                                        d="M25.77,8.6c-3.4,4.4-2.8,8.7,1.9,13.1,4.5,4.3,4.9,5.9,2,9.6-2.5,3.1-2.5,4.7-.2,4.7s4.7-2.5,6.1-6.2-.2-7.9-3.9-10.7c-3.6-2.6-4-6.9-1-9.6,1.1-1,1.7-2.2,1.4-2.6-1-1.8-4.3-.8-6.3,1.7Z" />
                                    <path class="cls-1"
                                        d="M5.07,46.5c-.9,2.3,1.5,22.1,3.5,28.5,2.6,8.3,6.2,14,12.3,19.5,7.8,7,9.5,7.5,26.8,7.5,13.3,0,15.6-.2,19.2-2.1,4-2,12.8-10.3,12.8-12,0-.5,1.9-.9,4.3-.9,14.8,0,27.5-11.6,25.3-23.2-1.5-8-7.2-12.8-15.4-12.8-3.6,0-4-.3-4.5-3l-.6-3h-41.6c-35.5,0-41.6.2-42.1,1.5ZM97.17,58.5c11.1,4.6,2.8,21.5-10.5,21.5h-2.9l1.4-4c.8-2.1,1.9-6.8,2.5-10.2.7-3.5,1.3-6.9,1.6-7.6.5-1.6,3.7-1.5,7.9.3Z" />
                                    <path class="cls-1"
                                        d="M.37,106.6c-1.2,1.2.6,3.5,4.7,5.9s4.4,2.4,40.6,3.1c27.6.5,37.5.4,40.3-.5,4.2-1.4,10.1-6.6,9.2-8.1-.7-1.1-93.7-1.5-94.8-.4Z" />
                                </g>
                            </g>
                        </svg>
                        <p class="max-lg:text-sm max-sm:text-xs font-bold lg:mt-4 sm:mt-2 mt-1 text-(--dark-text)">کافه و رستوران ها</p>
                        <p class="lg:text-sm sm:text-xs text-[10px] text-(--secondary-text)">منوی آنلاین</p>
                        <p class="lg:text-sm sm:text-xs text-[10px] text-(--secondary-text)">مشتری بیشتر</p>
                    </div>

                    <div class="xl:min-w-15/100 xl:w-16/100 lg:min-w-23/100 lg:w-23/100 sm:min-w-31/100 sm:w-31/100 min-w-48/100 w-48/100  h-full flex flex-col lg:gap-3 sm:gap-2 gap-1 justify-center items-center cart_shadow p-3 rounded-md bg-white">
                        <svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 93.49 123"
                            class="lg:size-12 sm:size-10 size-8 mx-auto">

                            <g id="Layer_1-2" data-name="Layer 1">
                                <path class="fill-[gold]"
                                    d="M28.16,4.9c-2,2.6-3.7,5.1-3.7,5.5s3.5,4.6,7.8,9.2c4.2,4.7,7.8,8.8,8,9.3.1.5-1.6,1.1-3.9,1.5-5.3.9-14.8,5.6-20.4,10.2C3.96,50.4-2.44,69.1.86,84.8c4.8,22.8,23.3,38.2,46.2,38.2,16.2,0,33.5-10.6,40.9-25,13.8-27,.8-57.6-28.5-67l-7.1-2.3,8.6-8.8c6-6.1,8.4-9.2,7.8-10.1-.4-.7-2.1-3.2-3.7-5.6l-2.9-4.2h-30.3l-3.7,4.9ZM39.46,5.3c0,2.1-2.2,3.7-5.2,3.7s-3.7-1.7-1.6-3.8c1.6-1.6,6.8-1.5,6.8.1ZM48.86,5.6c2.5,2.5,1.9,3.4-2.4,3.4h-4l1.6-2.5c1.9-2.9,2.7-3.1,4.8-.9ZM60.66,5.7c2.6,2.3,2.2,3.3-1.3,3.3-2.9,0-5.8-2.1-5.9-4.3,0-1.4,5.3-.7,7.2,1ZM38.46,15.6c1.7,4.3,1.1,4.7-2.4,1.7-4.2-3.4-4.4-4.3-1.1-4.3,1.8,0,2.8.7,3.5,2.6ZM51.46,13.5c0,1.5-4.3,11.5-5,11.5-.4,0-1.5-1.9-2.3-4.3-.8-2.3-1.8-5-2.2-6-.6-1.5-.1-1.7,4.4-1.7,2.8,0,5.1.2,5.1.5ZM60.46,13.5c0,.9-5.4,5.4-6.4,5.5-.6,0-.5-.5.2-1.2s1.2-2,1.2-3c0-1.3.8-1.8,2.5-1.8,1.4,0,2.5.2,2.5.5ZM62.96,39.9c12.1,6,19.9,16.3,22.6,29.8,2.2,10.9-1.4,23-9.7,32.2-15.7,17.5-40.5,18.6-57,2.5-16.1-15.7-16.3-40.5-.4-56.4,11.8-11.8,30.1-15.1,44.5-8.1Z" />
                            </g>
                        </svg>
                        <p class="max-lg:text-sm max-sm:text-xs font-bold lg:mt-4 sm:mt-2 mt-1 text-(--dark-text)">طلا فروشان</p>
                        <p class="lg:text-sm sm:text-xs text-[10px] text-(--secondary-text)">فروش آنلاین و</p>
                        <p class="lg:text-sm sm:text-xs text-[10px] text-(--secondary-text)">حضوری</p>
                    </div>

                    <div class="xl:min-w-15/100 xl:w-16/100 lg:min-w-23/100 lg:w-23/100 sm:min-w-31/100 sm:w-31/100 min-w-48/100 w-48/100  h-full flex flex-col lg:gap-3 sm:gap-2 gap-1 justify-center items-center cart_shadow p-3 rounded-md bg-white">
                        <svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" class="lg:size-12 sm:size-10 size-8 mx-auto"
                            viewBox="0 0 107.85 125.31">
                            <defs>
                                <style>
                                    .cls-3 {
                                        fill: #2563EB;
                                    }
                                </style>
                            </defs>
                            <g id="Layer_1-2" data-name="Layer 1">
                                <path class="cls-3"
                                    d="M11.05,2.6c-4.2,4.7-5.4,5.9-7.9,8.1C-.15,13.7-.55,16.3.55,29.4c2.3,27,3.3,31.1,9.4,38.4,3.7,4.4,11.3,9,17.2,10.3l5.1,1.2.4,11.1c.3,9.7.7,11.8,3.1,16.8,9.8,19.9,36.2,24.3,51.8,8.7,6.7-6.7,9.2-13.5,9.7-26.4q.5-11,3.5-13c5.1-3.3,7.2-7.1,7.1-12.4-.1-11.1-11.5-17.6-21.3-12.3-9.6,5.1-9.3,20.3.4,24.9l3.5,1.7v9.1c0,5.6-.6,10.9-1.5,13.6-3.5,10.3-13,16.9-24.2,16.9-7.7,0-12.5-1.9-17.7-6.8-6.1-5.8-7.6-10.1-7.6-21.8v-10.1l5.2-1.2c10.2-2.3,17.9-8.8,22.4-18.6,1.7-3.7,2.7-8.9,3.8-20.5,2.5-24.3,2.4-24.6-2.9-29.6-2.5-2.3-4.5-4.6-4.5-5.2,0-1.6-4.1-4.2-6.6-4.2-2.8,0-7.4,5.4-7.4,8.6,0,1.3.9,3.3,2,4.4,2.1,2.1,7.4,2.7,8.5,1s3.4-1.1,5,1.4c1.5,2.3,1.5,3.8-.5,19.8-2.3,19.3-2.9,21.5-7.7,27.5-12,15.1-38.5,11.4-46-6.5-.8-1.9-2.1-11.5-3-21.4l-1.6-18,2.2-2.1c1.8-1.8,2.4-2,4.1-.9,3,1.9,6.4,1.4,8.8-1.1,3-3.2,2.8-6.3-.7-9.8s-6.5-3.7-9.5-.3ZM97.85,59.1c5,4,2.1,11.9-4.4,11.9s-9.4-7.9-4.4-11.9c1.5-1.2,3.4-2.1,4.4-2.1s2.9.9,4.4,2.1Z" />
                            </g>
                        </svg>
                        <p class="max-lg:text-sm max-sm:text-xs font-bold lg:mt-4 sm:mt-2 mt-1 text-(--dark-text)">پزشکان</p>
                        <p class="lg:text-sm sm:text-xs text-[10px] text-(--secondary-text)">وبسایت مطب و</p>
                        <p class="lg:text-sm sm:text-xs text-[10px] text-(--secondary-text)">کلینیک ها</p>
                    </div>

                    <div class="xl:min-w-15/100 xl:w-16/100 lg:min-w-23/100 lg:w-23/100 sm:min-w-31/100 sm:w-31/100 min-w-48/100 w-48/100  h-full flex flex-col lg:gap-3 sm:gap-2 gap-1 justify-center items-center cart_shadow p-3 rounded-md bg-white">
                        <svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" class="lg:size-12 sm:size-10 size-8 mx-auto"
                            viewBox="0 0 129.61 117.73">
                            <defs>
                                <style>
                                    .cls-4 {
                                        fill: rgba(255, 0, 0, 0.458);
                                    }
                                </style>
                            </defs>
                            <g id="Layer_1-2" data-name="Layer 4">
                                <g>
                                    <path class="cls-4"
                                        d="M71.26,1.7c-1,1-1.7,2.7-1.7,3.8,0,2.7,23.9,26.4,26.6,26.4s5.4-3,5.4-6.2c0-2-2.8-5.3-12.1-14.2C76.86-.5,74.46-1.8,71.26,1.7Z" />
                                    <path class="cls-4"
                                        d="M53.86,26.5c-7,7.5-12.9,13.9-13.1,14.3-.1.3,4.7,5.6,10.8,11.6l11,11,13.5-13.5c7.4-7.4,13.5-14.1,13.5-15,0-1.7-19.9-22-21.6-22-.7,0-7,6.1-14.1,13.6Z" />
                                    <path class="cls-4"
                                        d="M29.96,46.2c-2.1,1.8-2.6,2.9-2.1,4.8.3,1.3,5.7,7.5,12,13.7,9.3,9.2,11.9,11.2,14.3,11.2,3.8,0,5.4-1.6,5.4-5.5,0-2.7-1.7-4.8-11.9-14.8-6.6-6.5-12.6-11.7-13.5-11.7-.8,0-2.7,1-4.2,2.3Z" />
                                    <path class="cls-4"
                                        d="M79.76,52.2c-1.8,1.8-3.2,3.7-3.2,4.3,0,.5,10,11,22.3,23.2,23.3,23.2,24.7,24.2,28.7,20.2,3.5-3.5,2.6-6.9-3.4-12.5-2.9-2.7-13.2-12.5-22.9-21.8-9.6-9.2-17.6-16.7-17.9-16.7-.2,0-1.8,1.5-3.6,3.3Z" />
                                    <path class="cls-4"
                                        d="M12.86,93.9c-2.6,1.1-4.3,4-4.3,7.3,0,1.9-.8,2.8-2.9,3.5-1.6.6-3.7,2.1-4.5,3.5-2.2,3.2-1.1,8.5,1.8,9.2,1.1.3,19.2.4,40,.3l38-.3.7-2.9c1.1-4-.8-7.7-4.8-9.6-2.4-1.1-3.3-2.2-3.3-4.1,0-1.5-.9-3.8-2.1-5.3l-2-2.6-27.2.1c-15,0-28.2.4-29.4.9Z" />
                                </g>
                            </g>
                        </svg>
                        <p class="max-lg:text-sm max-sm:text-xs font-bold lg:mt-4 sm:mt-2 mt-1 text-(--dark-text)">وکلا</p>
                        <p class="lg:text-sm sm:text-xs text-[10px] text-(--secondary-text)">وبسایت اختصاصی برای</p>
                        <p class="lg:text-sm sm:text-xs text-[10px] text-(--secondary-text)">دفاتر حقوقی</p>
                    </div>

                    <div class="xl:min-w-15/100 xl:w-16/100 lg:min-w-23/100 lg:w-23/100 sm:min-w-31/100 sm:w-31/100 min-w-48/100 w-48/100  h-full flex flex-col lg:gap-3 sm:gap-2 gap-1 justify-center items-center cart_shadow p-3 rounded-md bg-white">
                        <svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 114.94 116.9" class="lg:size-12 sm:size-10 size-8 mx-auto">
                            <defs>
                                <style>
                                    .cls-5 {
                                        fill: #010101;
                                    }
                                </style>
                            </defs>
                            <g id="Layer_1-2" data-name="Layer 1">
                                <path class="cls-5"
                                    d="M53.43,1.9c-2.2,1-13.9,6.1-26,11.3C15.33,18.5,4.43,23.6,3.23,24.7c-2.4,2.1-3.8,7.9-2.9,11.7.3,1.3,2,4,3.7,6l3.1,3.5-3.1,2.5c-5.1,4.4-5.4,13.9-.7,18.7l2.4,2.4-2.4,2.3c-2.6,2.5-4,7.7-3,11.7,1.4,5.2,3.9,7.5,14,12.3,5.6,2.7,17.6,8.5,26.7,13,9.2,4.4,17.9,8.1,19.5,8.1,1.5,0,9.6-3.1,17.9-6.9,8.2-3.8,19.8-9,25.8-11.6,7.9-3.5,10.7-5.2,10.7-6.6,0-4,.2-4.1-34.8,11.7-9,4.1-17.6,7.4-19.1,7.4-3.6,0-51-22.4-53.3-25.1-4.1-4.8-.6-13.9,4.5-12,1.3.5,12.3,5.9,24.5,12s23,11.1,24,11.1,6.1-1.8,11.3-4.1c45.4-19.7,42.4-18.2,42.7-21.4.7-5.8,1.8-6.1-37.2,11.4-8.7,3.9-16.4,7.1-17,7.1-2.3,0-51.1-24.8-53-26.9-3.9-4.3-1-13,3.8-11.5,1.2.4,12.2,5.5,24.5,11.5,14.2,6.9,23.5,10.9,25.5,10.9,1.7-.1,14.4-4.9,28.1-10.8l25-10.8.3-4.2c.2-2.9-.1-4.4-1-4.7-.8-.3-10.2,3.3-20.9,8-10.6,4.8-22.3,9.8-25.8,11.1l-6.3,2.5-7.2-3.5c-3.9-1.9-15.6-7.5-26.1-12.5-10.4-5.1-19.6-9.9-20.2-10.8-.7-.9-1.3-3.4-1.3-5.5,0-2.9.6-4.1,2.5-5.4,2.4-1.5,3.1-1.2,26.9,10.5,13.5,6.7,25.2,12.1,26,12.1s11-4,22.8-8.9c31.5-13.1,31-12.9,30.6-14.7C114.43,24.4,62.73-.1,59.43,0c-1.1,0-3.8.9-6,1.9Z" />
                            </g>
                        </svg>
                        <p class="max-lg:text-sm max-sm:text-xs font-bold lg:mt-4 sm:mt-2 mt-1 text-(--dark-text)">معلمان</p>
                        <p class="lg:text-sm sm:text-xs text-[10px] text-(--secondary-text)">وبسایت آموزشی و</p>
                        <p class="lg:text-sm sm:text-xs text-[10px] text-(--secondary-text)">دوره های آنلاین</p>
                    </div>

                    <div class="xl:min-w-15/100 xl:w-16/100 lg:min-w-23/100 lg:w-23/100 sm:min-w-31/100 sm:w-31/100 min-w-48/100 w-48/100  h-full flex flex-col lg:gap-3 sm:gap-2 gap-1 justify-center items-center cart_shadow p-3 rounded-md bg-white">
                        <svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 97.83 118.57" class="lg:size-12 sm:size-10 size-8 mx-auto">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: #2563EB;
                                    }
                                </style>
                            </defs>
                            <g id="Layer_1-2" data-name="Layer 1">
                                <g>
                                    <path class="cls-1"
                                        d="M38.4,1.95c-10.1,4.6-15.9,13.3-15.8,24.1,0,7.7,1.7,12.2,7,18,5,5.6,11,8.3,18.7,8.2,18.8,0,31.3-17.6,25.1-35.3-2.3-6.6-5.9-10.4-12.6-13.8-7.5-3.7-15.9-4.2-22.4-1.2Z" />
                                    <path class="cls-1"
                                        d="M27.4,59.85c-11.6,4-19.6,10.9-24.4,21.1-2.1,4.6-2.7,7.4-2.9,15.4-.6,14.9,1.1,17.4,13.3,19.6,18.3,3.3,44.3,3.5,66.3.5,16.9-2.3,18.7-4.2,18-19.8-.3-8.4-.8-10.2-4.1-16.9-5.2-10.5-13.3-17.1-25.4-20.7-3.6-1.1-4.8-1-8.5.5-5.4,2.2-16.1,2.3-21.2.1-4.7-2-4.9-2-11.1.2ZM51,66.05c4.4,0,4.9.2,4.9,2.3,0,4-2.7,6.7-6.7,6.7-4.4,0-7.3-2.4-7.3-6,0-3.1.9-4.3,2.8-3.5.7.3,3.6.5,6.3.5ZM50.7,78.05c2.4,0,3,.8,5.4,7.3,4.4,12,4.5,11.4-1.9,18.2l-5.6,5.9-5.3-5.7c-3-3.2-5.4-6.6-5.4-7.5,0-1.6,5.3-16.2,6.6-18.4.3-.5,1.3-.7,2.1-.4s2.7.6,4.1.6Z" />
                                </g>
                            </g>
                        </svg>
                        <p class="max-lg:text-sm max-sm:text-xs font-bold lg:mt-4 sm:mt-2 mt-1 text-(--dark-text)">بازی خای فکری</p>
                        <p class="lg:text-sm sm:text-xs text-[10px] text-(--secondary-text)">  وب شایت خصصی </p>
                        <p class="lg:text-sm sm:text-xs text-[10px] text-(--secondary-text)"> برای بازی فکری</p>
                    </div>
                </div>

                <div
                    class="w-11/12 flex flex-col lg:flex-row lg:justify-between items-center rounded-lg lg:p-4 p-2 mt-5 gap-3">
                    <div class="hidden lg:block size-11">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 576 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path fill="white"
                                d="M520.6 120.9l0 0c18.7 29.6 .3 66.6-29.2 70.6c-2.6 .3-5.2 .5-7.9 .5c-16.5 0-31.2-7.2-41.5-18.5c-6.1-6.7-14.7-10.5-23.7-10.5s-17.6 3.8-23.7 10.5c-10.2 11.2-24.8 18.4-41.4 18.4c-16.5 0-31.3-7.2-41.4-18.4c-6.1-6.7-14.7-10.5-23.7-10.5s-17.7 3.8-23.7 10.5C254 184.8 239.3 192 222.7 192c-16.5 0-31.3-7.2-41.4-18.4c-6.1-6.7-14.7-10.5-23.7-10.5s-17.7 3.8-23.7 10.5C123.6 184.8 109 192 92.4 192c-2.6 0-5.2-.2-7.9-.5c-29.3-4-47.7-41-29.1-70.6l0 0L111.6 32H464.4l56.2 88.9zM483.4 224c4.1 0 8.1-.3 12.1-.8c55.5-7.4 81.8-72.5 52.1-119.4L490.3 13.1C485.2 5 476.1 0 466.4 0H109.6C99.9 0 90.8 5 85.7 13.1L28.3 103.8c-29.6 46.8-3.4 111.9 51.9 119.4c4 .5 8.1 .8 12.1 .8c19.6 0 37.5-6.4 52-17c4.8-3.5 9.2-7.6 13.2-11.9c4 4.4 8.4 8.4 13.2 11.9c14.5 10.6 32.4 17 52 17c19.6 0 37.5-6.4 52-17c4.8-3.5 9.2-7.6 13.2-12c4 4.4 8.4 8.4 13.2 11.9c14.5 10.6 32.4 17 52 17c19.8 0 37.8-6.5 52.3-17.3c4.7-3.5 9-7.4 12.9-11.7c3.9 4.3 8.3 8.3 13 11.8c14.5 10.7 32.5 17.2 52.2 17.2zM80 256c-8.8 0-16 7.2-16 16v80 16 16 64c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V384 368 352 272c0-8.8-7.2-16-16-16s-16 7.2-16 16v80H96V272c0-8.8-7.2-16-16-16zM96 384H480v64c0 17.7-14.3 32-32 32H128c-17.7 0-32-14.3-32-32V384z" />
                        </svg>
                    </div>
                    <div class="w-full flex flex-col text-(--white) text-center lg:mr-40 gap-2 lg:w-200 ">
                        <p class="text-sm xl:text-lg font-bold">شغل خودتو نتونستی پیدا کنی؟</p>
                        <p class="text-sm xl:text-sm hidden lg:block">ما برای هر کسب و کاری وبسایت اختصاصی طراحی میکنیم
                        </p>
                    </div>
                    <div class="bg-white rounded-md flex items-center justify-center text-[#2563EB] px-3 gap-3 py-3">
                        <p class="font-bold text-xs xl:text-md">مشاهده همه کسب و کار ها</p>
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5"
                            viewBox="0 0 448 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path fill="#2563EB"
                                d="M9.4 278.6c-12.5-12.5-12.5-32.8 0-45.3l160-160c9.2-9.2 22.9-11.9 34.9-6.9s19.8 16.6 19.8 29.6l0 96 184 0c22.1 0 40 17.9 40 40l0 48c0 22.1-17.9 40-40 40l-184 0 0 96c0 12.9-7.8 24.6-19.8 29.6s-25.7 2.2-34.9-6.9l-160-160z" />
                        </svg>
                    </div>
                </div>
            </div>
        </section>
        <!-- jobs_end -->


        <!-- rezume_start -->
        <section class="w-full flex items-center justify-center">
            <div class="w-11/12 h-6/12 project flex flex-col items-center py-3 gap-5">
                <h2 class="text-(--primary-blue)">نمونه کار ها</h2>
                <span class="font-bold text-2xl text-(--dark-text)">برخی از پروژه های اخیر ما</span>
                <div class="max-w-full w-full flex justify-start itmsx-center xl:gap-4.5 lg:gap-3 sm:gap-2 gap-1 overflow-x-auto">
                    <div class="relative xl:min-w-24/100 lg:min-w-32/100 sm:min-w-49/100 min-w-full flex justify-center h-60 group bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl overflow-hidden transition-all duration-500 hover:-translate-y-3 hover:border-yellow-400/30 hover:shadow-[0_20px_60px_rgba(255,193,7,0.08)] shadow-[0_8px_32px_rgba(0,0,0,0.3)]">

                        <!-- Image -->
                        <div class="w-full h-full ">
                            <img src="{{asset('storage/home/caffegreen.png')}}" alt="project image"
                                class="w-full h-full object-cover transition-all duration-500 group-hover:scale-110">
                            <!-- گرادیانت روی عکس -->
                            <!-- <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div> -->
                        </div>

                        <!-- Content -->
                        <div
                            class="p-5 md:p-6 text-center bg-gradient-to-t from-black w-full absolute bottom-0 flex justify-between">
                            <div class="size-10 bg-(--white) rounded-full flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                    class="size-2/3 group-hover:fill-(--primary-blue) transition-colors duration-300">
                                    <path
                                        d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z" />
                                </svg>
                            </div>
                            <div class="flex flex-col text-end">
                                <h4
                                    class="text-lg md:text-xl font-bold text-(--white) mb-1 transition-colors duration-300 group-hover:text-(--primary-blue)">
                                    فروشگاه
                                </h4>
                                <p
                                    class="text-[#9b9d9e] text-sm transition-colors duration-300 group-hover:text-[#c0c2c4]">
                                    Next.js - Tailwind - Stripe
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="relative xl:min-w-24/100 lg:min-w-32/100 sm:min-w-49/100 min-w-full flex justify-center h-60 group bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl overflow-hidden transition-all duration-500 hover:-translate-y-3 hover:border-yellow-400/30 hover:shadow-[0_20px_60px_rgba(255,193,7,0.08)] shadow-[0_8px_32px_rgba(0,0,0,0.3)]">

                        <!-- Image -->
                        <div class="w-full h-full ">
                            <img src="{{asset('storage/home/caffegreen.png')}}" alt="project image"
                                 class="w-full h-full object-cover transition-all duration-500 group-hover:scale-110">
                            <!-- گرادیانت روی عکس -->
                            <!-- <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div> -->
                        </div>

                        <!-- Content -->
                        <div
                                class="p-5 md:p-6 text-center bg-gradient-to-t from-black w-full absolute bottom-0 flex justify-between">
                            <div class="size-10 bg-(--white) rounded-full flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                     class="size-2/3 group-hover:fill-(--primary-blue) transition-colors duration-300">
                                    <path
                                            d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z" />
                                </svg>
                            </div>
                            <div class="flex flex-col text-end">
                                <h4
                                        class="text-lg md:text-xl font-bold text-(--white) mb-1 transition-colors duration-300 group-hover:text-(--primary-blue)">
                                    فروشگاه
                                </h4>
                                <p
                                        class="text-[#9b9d9e] text-sm transition-colors duration-300 group-hover:text-[#c0c2c4]">
                                    Next.js - Tailwind - Stripe
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="relative xl:min-w-24/100 lg:min-w-32/100 sm:min-w-49/100 min-w-full flex justify-center h-60 group bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl overflow-hidden transition-all duration-500 hover:-translate-y-3 hover:border-yellow-400/30 hover:shadow-[0_20px_60px_rgba(255,193,7,0.08)] shadow-[0_8px_32px_rgba(0,0,0,0.3)]">

                        <!-- Image -->
                        <div class="w-full h-full overflow-hidden">
                            <img src="{{asset('storage/home/caffegreen.png')}}" alt="project image"
                                class="w-full h-full object-cover transition-all duration-500 group-hover:scale-110">
                            <!-- گرادیانت روی عکس -->
                            <!-- <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div> -->
                        </div>

                        <!-- Content -->
                        <div
                            class="p-5 md:p-6 text-center bg-gradient-to-t from-black w-full absolute bottom-0 flex justify-between">
                            <div class="w-12 h-12 bg-(--white) rounded-full flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                    class="size-8 group-hover:fill-(--primary-blue) transition-colors duration-300">
                                    <path
                                        d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z" />
                                </svg>
                            </div>
                            <div class="flex flex-col text-end">
                                <h4
                                    class="text-lg md:text-xl font-bold text-(--white) mb-1 transition-colors duration-300 group-hover:text-(--primary-blue)">
                                    فروشگاه
                                </h4>
                                <p
                                    class="text-[#9b9d9e] text-sm transition-colors duration-300 group-hover:text-[#c0c2c4]">
                                    Next.js - Tailwind - Stripe
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="relative xl:min-w-24/100 lg:min-w-32/100 sm:min-w-49/100 min-w-full flex justify-center h-60 group bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl overflow-hidden transition-all duration-500 hover:-translate-y-3 hover:border-yellow-400/30 hover:shadow-[0_20px_60px_rgba(255,193,7,0.08)] shadow-[0_8px_32px_rgba(0,0,0,0.3)]">

                        <!-- Image -->
                        <div class="w-full h-full overflow-hidden">
                            <img src="{{asset('storage/home/caffegreen.png')}}" alt="project image"
                                 class="w-full h-full object-cover transition-all duration-500 group-hover:scale-110">
                            <!-- گرادیانت روی عکس -->
                            <!-- <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div> -->
                        </div>

                        <!-- Content -->
                        <div
                                class="p-5 md:p-6 text-center bg-gradient-to-t from-black w-full absolute bottom-0 flex justify-between">
                            <div class="w-12 h-12 bg-(--white) rounded-full flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                     class="size-8 group-hover:fill-(--primary-blue) transition-colors duration-300">
                                    <path
                                            d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z" />
                                </svg>
                            </div>
                            <div class="flex flex-col text-end">
                                <h4
                                        class="text-lg md:text-xl font-bold text-(--white) mb-1 transition-colors duration-300 group-hover:text-(--primary-blue)">
                                    فروشگاه
                                </h4>
                                <p
                                        class="text-[#9b9d9e] text-sm transition-colors duration-300 group-hover:text-[#c0c2c4]">
                                    Next.js - Tailwind - Stripe
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="relative xl:min-w-24/100 lg:min-w-32/100 sm:min-w-49/100 min-w-full flex justify-center h-60 group bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl overflow-hidden transition-all duration-500 hover:-translate-y-3 hover:border-yellow-400/30 hover:shadow-[0_20px_60px_rgba(255,193,7,0.08)] shadow-[0_8px_32px_rgba(0,0,0,0.3)]">

                        <!-- Image -->
                        <div class="w-full h-full overflow-hidden">
                            <img src="{{asset('storage/home/caffegreen.png')}}" alt="project image"
                                 class="w-full h-full object-cover transition-all duration-500 group-hover:scale-110">
                            <!-- گرادیانت روی عکس -->
                            <!-- <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div> -->
                        </div>

                        <!-- Content -->
                        <div
                                class="p-5 md:p-6 text-center bg-gradient-to-t from-black w-full absolute bottom-0 flex justify-between">
                            <div class="w-12 h-12 bg-(--white) rounded-full flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                     class="size-8 group-hover:fill-(--primary-blue) transition-colors duration-300">
                                    <path
                                            d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z" />
                                </svg>
                            </div>
                            <div class="flex flex-col text-end">
                                <h4
                                        class="text-lg md:text-xl font-bold text-(--white) mb-1 transition-colors duration-300 group-hover:text-(--primary-blue)">
                                    فروشگاه
                                </h4>
                                <p
                                        class="text-[#9b9d9e] text-sm transition-colors duration-300 group-hover:text-[#c0c2c4]">
                                    Next.js - Tailwind - Stripe
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- rezume_end -->
        <!-- comment_start -->
        <section class="w-full flex items-center justify-center">
            <div class="w-11/12 relative bg-[url({{asset('storage/home/coment.png')}})] bg-cover bg-center rounded-xl">
                <!-- <img class="w-full h-full " src="../img/Picsart_26-08-11_15-39-31-233 (1).png" alt=""> -->
                <div class=" flex flex-col gap-4 w-full h-full items-center top-0 py-7 justify-between">
                    <div class="flex flex-col gap-3 items-center">
                        <span class="text-(--white) text-xl">نظرات مشتریان </span>
                        <h2 class="font-bold text-2xl text-(--white)">مشتریان ما چه می گویند؟</h2>
                    </div>
                    <div
                        class="lg:flex justify-between tiems-center w-full gap-3 lg:gap-5 xl:gap-7 px-8 lg:px-10 xl:px-20 grid md:grid-cols-2">
                        <div
                                class="lg:w-1/3 w-full flex flex-col gap-7 justify-between py-6  xl:px-7 lg:px-4 px-5 gap-3 rounded-md bg-(--card-background)">
                            <div class="w-full flex gap-5 justify-between items-start">

                                {{--                                <div class="flex justify-center">--}}
                                <p class="text-(--secondary-text) text-justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعتصن عتصنعت چاپ و با از</p>
                                {{--                                </div>--}}
                                <div class="flex justify-end relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                         class="size-8 fill-(--primary-blue)">
                                        <path
                                                d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex items-center gap-5">
                                <div
                                        class="xl:min-w-17 xl:max-w-17 xl:h-17 lg:min-w-17 lg:max-w-17 min-w-15 max-w-15 h-15 lg:h-17  flex justify-center items-center">
                                    <img class="w-full h-full rounded-full object-cover "
                                         src="{{asset('storage/home/IMG_20260626_161954.png')}}" alt="">
                                </div>
                                <div class="flex flex-col gap-2">
                                    <span class="font-bold lg:text-lg xl:text-base text-nowrap text-(--dark-text)"> علی رستمی</span>
                                    <span class="text-sm text-(--secondary-text)">مدیر کل طلا و جواهر</span>
                                </div>
                            </div>
                        </div>
                        <div
                                class="lg:w-1/3 w-full flex flex-col gap-7 justify-between py-6  xl:px-7 lg:px-4 px-5 gap-3 rounded-md bg-(--card-background)">
                            <div class="w-full flex gap-5 justify-between items-start">

                                {{--                                <div class="flex justify-center">--}}
                                <p class="text-(--secondary-text) text-justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعتصن عتصنعت چاپ و با از</p>
                                {{--                                </div>--}}
                                <div class="flex justify-end relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                         class="size-8 fill-(--primary-blue)">
                                        <path
                                                d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex items-center gap-5">
                                <div
                                        class="xl:min-w-17 xl:max-w-17 xl:h-17 lg:min-w-17 lg:max-w-17 min-w-15 max-w-15 h-15 lg:h-17  flex justify-center items-center">
                                    <img class="w-full h-full rounded-full object-cover "
                                         src="{{asset('storage/home/IMG_20260626_161954.png')}}" alt="">
                                </div>
                                <div class="flex flex-col gap-2">
                                    <span class="font-bold lg:text-lg xl:text-base text-nowrap text-(--dark-text)"> علی رستمی</span>
                                    <span class="text-sm text-(--secondary-text)">مدیر کل طلا و جواهر</span>
                                </div>
                            </div>
                        </div>
                        <div
                                class="lg:w-1/3 w-full flex flex-col gap-7 justify-between py-6  xl:px-7 lg:px-4 px-5 gap-3 rounded-md bg-(--card-background)">
                            <div class="w-full flex gap-5 justify-between items-start">

                                {{--                                <div class="flex justify-center">--}}
                                <p class="text-(--secondary-text) text-justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعتصن عتصنعت چاپ و با از</p>
                                {{--                                </div>--}}
                                <div class="flex justify-end relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                         class="size-8 fill-(--primary-blue)">
                                        <path
                                                d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex items-center gap-5">
                                <div
                                        class="xl:min-w-17 xl:max-w-17 xl:h-17 lg:min-w-17 lg:max-w-17 min-w-15 max-w-15 h-15 lg:h-17  flex justify-center items-center">
                                    <img class="w-full h-full rounded-full object-cover "
                                         src="{{asset('storage/home/IMG_20260626_161954.png')}}" alt="">
                                </div>
                                <div class="flex flex-col gap-2">
                                    <span class="font-bold lg:text-lg xl:text-base text-nowrap text-(--dark-text)"> علی رستمی</span>
                                    <span class="text-sm text-(--secondary-text)">مدیر کل طلا و جواهر</span>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
        <!-- comment_end -->

        <!-- common_products_start -->
        <section class="w-full flex items-center justify-center">
            <div
                class="w-11/12 h-full flex rounded-xl flex-col gap-8 items-center justify-center bg-[var(--white)] section_shadow py-10">
                <div class="w-full flex flex-col gap-3 items-center justify-center">
                    <h3 class="xl:text-4xl lg:text-2xl sm:text-xl text-lg text-[var(--dark-text)] font-bold">آخرین
                        مقالات</h3>
                </div>
                <div
                    class="max-w-full w-full flex justify-start xl:gap-4.5 lg:gap-3 sm:gap-2 gap-1 overflow-x-auto lg:px-8 md:px-6 px-3 py-5">
                    <div class="xl:min-w-24/100 lg:min-w-32/100 sm:min-w-49/100 min-w-full xl:max-w-24/100 lg:max-w-32/100 sm:max-w-49/100 min-h-full bg-[var(--card-background)] rounded-md flex flex-col  gap-1 items-center justify-between sm:p-1 p-0.5 cart_shadow">
                        <div class="w-full h-1/2 max-h-40">
                            <img src="{{asset('storage/home/article4.jpg')}}" alt=""
                                class="object-fit w-full h-full rounded-t-2xl rounded-b-sm">
                        </div>
                        <div class="w-full h-5/12 flex flex-col lg:gap-3 gap-2 justify-start items-center">
                            <h3
                                class=" w-11/12 max-xl:text-sm max-lg:text-xs max-sm:text-base text-[var(--dark-text)] text-center font-bold">
                                راهنمای کامل سئو برای کسب و کار ها </h3>
                            <p class=" w-10/12 lg:text-sm sm:text-xs text-[10px] text-[var(--secondary-text)] text-center">تمام راهکار های افزایش فروش کسب و کار شما و در نتیجه افزایش فروش شما</p>


                            <span
                                class="xl:text-sm lg:text-xs sm:text-[11px] text-xs text-(--tertiary-text)">18فروردین
                                1403</span>
                        </div>
                    </div>
                    <div class="xl:min-w-24/100 lg:min-w-32/100 sm:min-w-49/100 min-w-full xl:max-w-24/100 lg:max-w-32/100 sm:max-w-49/100 max-w-full min-h-full bg-[var(--card-background)] rounded-md flex flex-col  gap-1 items-center justify-between sm:p-1 p-0.5 cart_shadow">
                        <div class="w-full h-1/2 max-h-40">
                            <img src="{{asset('storage/home/article4.jpg')}}" alt=""
                                 class="object-fit w-full h-full rounded-t-2xl rounded-b-sm">
                        </div>
                        <div class="w-full h-5/12 flex flex-col lg:gap-3 gap-2 justify-start items-center">
                            <h3
                                    class=" w-11/12 max-xl:text-sm max-lg:text-xs max-sm:text-base text-[var(--dark-text)] text-center font-bold">
                                راهنمای کامل سئو برای کسب و کار ها </h3>
                            <p class=" w-10/12 lg:text-sm sm:text-xs text-[10px] text-[var(--secondary-text)] text-center">تمام راهکار های افزایش فروش کسب و کار شما و در نتیجه افزایش فروش شما</p>
                            <span
                                    class="xl:text-sm lg:text-xs sm:text-[11px] text-xs text-(--tertiary-text)">18فروردین
                                1403</span>
                        </div>
                    </div>
                    <div class="xl:min-w-24/100 lg:min-w-32/100 sm:min-w-49/100 min-w-full xl:max-w-24/100 lg:max-w-32/100 sm:max-w-49/100 max-w-full min-h-full bg-[var(--card-background)] rounded-md flex flex-col  gap-1 items-center justify-between sm:p-1 p-0.5 cart_shadow">
                        <div class="w-full h-1/2 max-h-40">
                            <img src="{{asset('storage/home/article4.jpg')}}" alt=""
                                 class="object-fit w-full h-full rounded-t-2xl rounded-b-sm">
                        </div>
                        <div class="w-full h-5/12 flex flex-col lg:gap-3 gap-2 justify-start items-center">
                            <h3
                                    class=" w-11/12 max-xl:text-sm max-lg:text-xs max-sm:text-base text-[var(--dark-text)] text-center font-bold">
                                راهنمای کامل سئو برای کسب و کار ها </h3>
                            <p class=" w-10/12 lg:text-sm sm:text-xs text-[10px] text-[var(--secondary-text)] text-center">تمام راهکار های افزایش فروش کسب و کار شما و در نتیجه افزایش فروش شما</p>
                            <span
                                    class="xl:text-sm lg:text-xs sm:text-[11px] text-xs text-(--tertiary-text)">18فروردین
                                1403</span>
                        </div>
                    </div>
                    <div class="xl:min-w-24/100 lg:min-w-32/100 sm:min-w-49/100 min-w-full xl:max-w-24/100 lg:max-w-32/100 sm:max-w-49/100 max-w-full min-h-full bg-[var(--card-background)] rounded-md flex flex-col  gap-1 items-center justify-between sm:p-1 p-0.5 cart_shadow">
                        <div class="w-full h-1/2 max-h-40">
                            <img src="{{asset('storage/home/article4.jpg')}}" alt=""
                                 class="object-fit w-full h-full rounded-t-2xl rounded-b-sm">
                        </div>
                        <div class="w-full h-5/12 flex flex-col lg:gap-3 gap-2 justify-start items-center">
                            <h3
                                    class=" w-11/12 max-xl:text-sm max-lg:text-xs max-sm:text-base text-[var(--dark-text)] text-center font-bold">
                                راهنمای کامل سئو برای کسب و کار ها </h3>
                            <p class=" w-10/12 lg:text-sm sm:text-xs text-[10px] text-[var(--secondary-text)] text-center">تمام راهکار های افزایش فروش کسب و کار شما و در نتیجه افزایش فروش شما</p>
                            <span
                                    class="xl:text-sm lg:text-xs sm:text-[11px] text-xs text-(--tertiary-text)">18فروردین
                                1403</span>
                        </div>
                    </div>

                </div>
                <a href=""
                    class="sm:px-7 sm:py-3 px-4 py-2 flex gap-3 justify-center items-center sm:rounded-xl runded-md bg-[var(--card-background)] cart_shadow">
                    <span class="xl:text-md sm:text-sm text-xs font-bold text-[var(--primary-blue)]">مشاهده همه
                        مقالات</span>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                            class="xl:size-5 size-4 fill-[var(--primary-blue)] rotate-180">
                            <path
                                d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z">
                            </path>
                        </svg>
                    </div>
                </a>
            </div>
        </section>
        <!-- common_products_end -->

        <!-- common_question_start -->
        <section class="w-full flex items-center justify-center">
            <div class="w-11/12 flex gap-8 items-start bg-red-500 justify-start section_shadow py-5 lg:px-10 md:px-5 px-2 rounded-xl "
                style="background: var(--gradient-dark);">
                <div class="lg:w-10/12 w-full flex flex-col gap-4 justify-start items-center">
                    <div class="w-full flex flex-col gap-3 items-center justify-center">
                        <h3 class="xl:text-3xl lg:text-2xl sm:text-xl text-lg text-[var(--white)] font-bold">سوالات
                            متداول</h3>
                    </div>
                    <div class="w-full lg:gap-4 sm:gap-2 gap-1 flex max-sm:flex-col justify-start items-start transition_fast">
                        <div class="sm:w-1/2 w-full h-full flex flex-col gap-1 justify-start items-start">
                            <div
                                class="w-full h-12  flex flex-col justify-start items-start bg-[var(--card-background)] rounded-xl overflow-y-hidden transition_normal cursor-pointer">
                                <div class="w-full px-3 py-3  flex justify-between items-start question_common_onclick">
                                    <span class="max-xl:text-sm max-lg:text-xs text-(--dark-text)">چه
                                        فرمت‌هایی برای
                                        ارسال فایل پذیرفته می‌شود؟</span>
                                    <div class="transition_normal">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                            class="lg:size-4 size-3 fill-[var(--dart-text)] rotate-90">
                                            <path
                                                d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div
                                    class="w-full h-full flex flex-col gap-4 justify-start items-start px-4 max-xl:mt-1">
                                    <span class="w-full h-[1px] bg-[var(--tertiary-text)]"></span>
                                    <div
                                        class="px-6 flex gap-2 max-h-30 overflow-y-auto justify-center items-cneter [&::-webkit-scrollbar]:w-1  [&::-webkit-scrollbar-thumb]:bg-[#8B5CF6]  [&::-webkit-scrollbar-thumb]:rounded-full">
                                        <span
                                            class="min-w-2 min-h-2 max-w-2 max-h-2 bg-[var(--gold)] rounded-full mt-1"></span>
                                        <p
                                            class="max-xl:text-sm max-lg:text-xs text-[var(--secondary-text)] text-justify leading-6">
                                            بهترین و استانداردترین فرمت، PDF (با کیفیت بالا) است. همچنین فایل‌های AI،
                                            PSD، CDR، EPS و
                                            تصاویر JPG/PNG با رزولوشن بالا ن فرمت، PDF (با کیفیت بالا) است. همچنین
                                            فایل‌های AI، PSD، CDR، EPS و
                                            تصاویر JPG/PNG با رزولوشن بالا را نیز پشتیبانی می‌کنیم. لطفاً برای جلوگیری
                                            از به هم ریختگی ن فرمت، PDF (با کیفیت بالا) است. همچنین فایل‌های AI، PSD،
                                            CDR، EPS و
                                            تصاویر JPG/PNG با رزولوشن بالا را نیز پشتیبانی می‌کنیم. لطفاً برای جلوگیری
                                            از به هم ریختگی ن فرمت، PDF (با کیفیت بالا) است. همچنین فایل‌های AI، PSD،
                                            CDR، EPS و
                                            تصاویر JPG/PNG با رزولوشن بالا را نیز پشتیبانی می‌کنیم. لطفاً برای جلوگیری
                                            از به هم ریختگیرا نیز پشتیبانی می‌کنیم. لطفاً برای جلوگیری از به هم ریختگی
                                            فونت، متن‌ها را به منحنی (Outline) تبدیل کنید یا فونت‌ها را همراه فایل ارسال
                                            کنید.</p>
                                    </div>
                                </div>
                            </div>
                            <div
                                    class="w-full h-12  flex flex-col justify-start items-start bg-[var(--card-background)] rounded-xl overflow-y-hidden transition_normal cursor-pointer">
                                <div class="w-full px-3 py-3  flex justify-between items-start question_common_onclick">
                                    <span class="max-xl:text-sm max-lg:text-xs text-(--dark-text)">چه
                                        فرمت‌هایی برای
                                        ارسال فایل پذیرفته می‌شود؟</span>
                                    <div class="transition_normal">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                             class="lg:size-4 size-3 fill-[var(--dart-text)] rotate-90">
                                            <path
                                                    d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div
                                        class="w-full h-full flex flex-col gap-4 justify-start items-start px-4 max-xl:mt-1">
                                    <span class="w-full h-[1px] bg-[var(--tertiary-text)]"></span>
                                    <div
                                            class="px-6 flex gap-2 max-h-30 overflow-y-auto justify-center items-cneter [&::-webkit-scrollbar]:w-1  [&::-webkit-scrollbar-thumb]:bg-[#8B5CF6]  [&::-webkit-scrollbar-thumb]:rounded-full">
                                        <span
                                                class="min-w-2 min-h-2 max-w-2 max-h-2 bg-[var(--gold)] rounded-full mt-1"></span>
                                        <p
                                                class="max-xl:text-sm max-lg:text-xs text-[var(--secondary-text)] text-justify leading-6">
                                            بهترین و استانداردترین فرمت، PDF (با کیفیت بالا) است. همچنین فایل‌های AI،
                                            PSD، CDR، EPS و
                                            تصاویر JPG/PNG با رزولوشن بالا ن فرمت، PDF (با کیفیت بالا) است. همچنین
                                            فایل‌های AI، PSD، CDR، EPS و
                                            تصاویر JPG/PNG با رزولوشن بالا را نیز پشتیبانی می‌کنیم. لطفاً برای جلوگیری
                                            از به هم ریختگی ن فرمت، PDF (با کیفیت بالا) است. همچنین فایل‌های AI، PSD،
                                            CDR، EPS و
                                            تصاویر JPG/PNG با رزولوشن بالا را نیز پشتیبانی می‌کنیم. لطفاً برای جلوگیری
                                            از به هم ریختگی ن فرمت، PDF (با کیفیت بالا) است. همچنین فایل‌های AI، PSD،
                                            CDR، EPS و
                                            تصاویر JPG/PNG با رزولوشن بالا را نیز پشتیبانی می‌کنیم. لطفاً برای جلوگیری
                                            از به هم ریختگیرا نیز پشتیبانی می‌کنیم. لطفاً برای جلوگیری از به هم ریختگی
                                            فونت، متن‌ها را به منحنی (Outline) تبدیل کنید یا فونت‌ها را همراه فایل ارسال
                                            کنید.</p>
                                    </div>
                                </div>
                            </div>
                            <div
                                    class="w-full h-12  flex flex-col justify-start items-start bg-[var(--card-background)] rounded-xl overflow-y-hidden transition_normal cursor-pointer">
                                <div class="w-full px-3 py-3  flex justify-between items-start question_common_onclick">
                                    <span class="max-xl:text-sm max-lg:text-xs text-(--dark-text)">چه
                                        فرمت‌هایی برای
                                        ارسال فایل پذیرفته می‌شود؟</span>
                                    <div class="transition_normal">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                             class="lg:size-4 size-3 fill-[var(--dart-text)] rotate-90">
                                            <path
                                                    d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div
                                        class="w-full h-full flex flex-col gap-4 justify-start items-start px-4 max-xl:mt-1">
                                    <span class="w-full h-[1px] bg-[var(--tertiary-text)]"></span>
                                    <div
                                            class="px-6 flex gap-2 max-h-30 overflow-y-auto justify-center items-cneter [&::-webkit-scrollbar]:w-1  [&::-webkit-scrollbar-thumb]:bg-[#8B5CF6]  [&::-webkit-scrollbar-thumb]:rounded-full">
                                        <span
                                                class="min-w-2 min-h-2 max-w-2 max-h-2 bg-[var(--gold)] rounded-full mt-1"></span>
                                        <p
                                                class="max-xl:text-sm max-lg:text-xs text-[var(--secondary-text)] text-justify leading-6">
                                            بهترین و استانداردترین فرمت، PDF (با کیفیت بالا) است. همچنین فایل‌های AI،
                                            PSD، CDR، EPS و
                                            تصاویر JPG/PNG با رزولوشن بالا ن فرمت، PDF (با کیفیت بالا) است. همچنین
                                            فایل‌های AI، PSD، CDR، EPS و
                                            تصاویر JPG/PNG با رزولوشن بالا را نیز پشتیبانی می‌کنیم. لطفاً برای جلوگیری
                                            از به هم ریختگی ن فرمت، PDF (با کیفیت بالا) است. همچنین فایل‌های AI، PSD،
                                            CDR، EPS و
                                            تصاویر JPG/PNG با رزولوشن بالا را نیز پشتیبانی می‌کنیم. لطفاً برای جلوگیری
                                            از به هم ریختگی ن فرمت، PDF (با کیفیت بالا) است. همچنین فایل‌های AI، PSD،
                                            CDR، EPS و
                                            تصاویر JPG/PNG با رزولوشن بالا را نیز پشتیبانی می‌کنیم. لطفاً برای جلوگیری
                                            از به هم ریختگیرا نیز پشتیبانی می‌کنیم. لطفاً برای جلوگیری از به هم ریختگی
                                            فونت، متن‌ها را به منحنی (Outline) تبدیل کنید یا فونت‌ها را همراه فایل ارسال
                                            کنید.</p>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="sm:w-1/2 w-full h-full flex flex-col gap-1 justify-start items-start">
                            <div
                                    class="w-full h-12  flex flex-col justify-start items-start bg-[var(--card-background)] rounded-xl overflow-y-hidden transition_normal cursor-pointer">
                                <div class="w-full px-3 py-3  flex justify-between items-start question_common_onclick">
                                    <span class="max-xl:text-sm max-lg:text-xs text-(--dark-text)">چه
                                        فرمت‌هایی برای
                                        ارسال فایل پذیرفته می‌شود؟</span>
                                    <div class="transition_normal">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                             class="lg:size-4 size-3 fill-[var(--dart-text)] rotate-90">
                                            <path
                                                    d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div
                                        class="w-full h-full flex flex-col gap-4 justify-start items-start px-4 max-xl:mt-1">
                                    <span class="w-full h-[1px] bg-[var(--tertiary-text)]"></span>
                                    <div
                                            class="px-6 flex gap-2 max-h-30 overflow-y-auto justify-center items-cneter [&::-webkit-scrollbar]:w-1  [&::-webkit-scrollbar-thumb]:bg-[#8B5CF6]  [&::-webkit-scrollbar-thumb]:rounded-full">
                                        <span
                                                class="min-w-2 min-h-2 max-w-2 max-h-2 bg-[var(--gold)] rounded-full mt-1"></span>
                                        <p
                                                class="max-xl:text-sm max-lg:text-xs text-[var(--secondary-text)] text-justify leading-6">
                                            بهترین و استانداردترین فرمت، PDF (با کیفیت بالا) است. همچنین فایل‌های AI،
                                            PSD، CDR، EPS و
                                            تصاویر JPG/PNG با رزولوشن بالا ن فرمت، PDF (با کیفیت بالا) است. همچنین
                                            فایل‌های AI، PSD، CDR، EPS و
                                            تصاویر JPG/PNG با رزولوشن بالا را نیز پشتیبانی می‌کنیم. لطفاً برای جلوگیری
                                            از به هم ریختگی ن فرمت، PDF (با کیفیت بالا) است. همچنین فایل‌های AI، PSD،
                                            CDR، EPS و
                                            تصاویر JPG/PNG با رزولوشن بالا را نیز پشتیبانی می‌کنیم. لطفاً برای جلوگیری
                                            از به هم ریختگی ن فرمت، PDF (با کیفیت بالا) است. همچنین فایل‌های AI، PSD،
                                            CDR، EPS و
                                            تصاویر JPG/PNG با رزولوشن بالا را نیز پشتیبانی می‌کنیم. لطفاً برای جلوگیری
                                            از به هم ریختگیرا نیز پشتیبانی می‌کنیم. لطفاً برای جلوگیری از به هم ریختگی
                                            فونت، متن‌ها را به منحنی (Outline) تبدیل کنید یا فونت‌ها را همراه فایل ارسال
                                            کنید.</p>
                                    </div>
                                </div>
                            </div>
                            <div
                                    class="w-full h-12  flex flex-col justify-start items-start bg-[var(--card-background)] rounded-xl overflow-y-hidden transition_normal cursor-pointer">
                                <div class="w-full px-3 py-3  flex justify-between items-start question_common_onclick">
                                    <span class="max-xl:text-sm max-lg:text-xs text-(--dark-text)">چه
                                        فرمت‌هایی برای
                                        ارسال فایل پذیرفته می‌شود؟</span>
                                    <div class="transition_normal">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                             class="lg:size-4 size-3 fill-[var(--dart-text)] rotate-90">
                                            <path
                                                    d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div
                                        class="w-full h-full flex flex-col gap-4 justify-start items-start px-4 max-xl:mt-1">
                                    <span class="w-full h-[1px] bg-[var(--tertiary-text)]"></span>
                                    <div
                                            class="px-6 flex gap-2 max-h-30 overflow-y-auto justify-center items-cneter [&::-webkit-scrollbar]:w-1  [&::-webkit-scrollbar-thumb]:bg-[#8B5CF6]  [&::-webkit-scrollbar-thumb]:rounded-full">
                                        <span
                                                class="min-w-2 min-h-2 max-w-2 max-h-2 bg-[var(--gold)] rounded-full mt-1"></span>
                                        <p
                                                class="max-xl:text-sm max-lg:text-xs text-[var(--secondary-text)] text-justify leading-6">
                                            بهترین و استانداردترین فرمت، PDF (با کیفیت بالا) است. همچنین فایل‌های AI،
                                            PSD، CDR، EPS و
                                            تصاویر JPG/PNG با رزولوشن بالا ن فرمت، PDF (با کیفیت بالا) است. همچنین
                                            فایل‌های AI، PSD، CDR، EPS و
                                            تصاویر JPG/PNG با رزولوشن بالا را نیز پشتیبانی می‌کنیم. لطفاً برای جلوگیری
                                            از به هم ریختگی ن فرمت، PDF (با کیفیت بالا) است. همچنین فایل‌های AI، PSD،
                                            CDR، EPS و
                                            تصاویر JPG/PNG با رزولوشن بالا را نیز پشتیبانی می‌کنیم. لطفاً برای جلوگیری
                                            از به هم ریختگی ن فرمت، PDF (با کیفیت بالا) است. همچنین فایل‌های AI، PSD،
                                            CDR، EPS و
                                            تصاویر JPG/PNG با رزولوشن بالا را نیز پشتیبانی می‌کنیم. لطفاً برای جلوگیری
                                            از به هم ریختگیرا نیز پشتیبانی می‌کنیم. لطفاً برای جلوگیری از به هم ریختگی
                                            فونت، متن‌ها را به منحنی (Outline) تبدیل کنید یا فونت‌ها را همراه فایل ارسال
                                            کنید.</p>
                                    </div>
                                </div>
                            </div>
                            <div
                                    class="w-full h-12  flex flex-col justify-start items-start bg-[var(--card-background)] rounded-xl overflow-y-hidden transition_normal cursor-pointer">
                                <div class="w-full px-3 py-3  flex justify-between items-start question_common_onclick">
                                    <span class="max-xl:text-sm max-lg:text-xs text-(--dark-text)">چه
                                        فرمت‌هایی برای
                                        ارسال فایل پذیرفته می‌شود؟</span>
                                    <div class="transition_normal">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                             class="lg:size-4 size-3 fill-[var(--dart-text)] rotate-90">
                                            <path
                                                    d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div
                                        class="w-full h-full flex flex-col gap-4 justify-start items-start px-4 max-xl:mt-1">
                                    <span class="w-full h-[1px] bg-[var(--tertiary-text)]"></span>
                                    <div
                                            class="px-6 flex gap-2 max-h-30 overflow-y-auto justify-center items-cneter [&::-webkit-scrollbar]:w-1  [&::-webkit-scrollbar-thumb]:bg-[#8B5CF6]  [&::-webkit-scrollbar-thumb]:rounded-full">
                                        <span
                                                class="min-w-2 min-h-2 max-w-2 max-h-2 bg-[var(--gold)] rounded-full mt-1"></span>
                                        <p
                                                class="max-xl:text-sm max-lg:text-xs text-[var(--secondary-text)] text-justify leading-6">
                                            بهترین و استانداردترین فرمت، PDF (با کیفیت بالا) است. همچنین فایل‌های AI،
                                            PSD، CDR، EPS و
                                            تصاویر JPG/PNG با رزولوشن بالا ن فرمت، PDF (با کیفیت بالا) است. همچنین
                                            فایل‌های AI، PSD، CDR، EPS و
                                            تصاویر JPG/PNG با رزولوشن بالا را نیز پشتیبانی می‌کنیم. لطفاً برای جلوگیری
                                            از به هم ریختگی ن فرمت، PDF (با کیفیت بالا) است. همچنین فایل‌های AI، PSD،
                                            CDR، EPS و
                                            تصاویر JPG/PNG با رزولوشن بالا را نیز پشتیبانی می‌کنیم. لطفاً برای جلوگیری
                                            از به هم ریختگی ن فرمت، PDF (با کیفیت بالا) است. همچنین فایل‌های AI، PSD،
                                            CDR، EPS و
                                            تصاویر JPG/PNG با رزولوشن بالا را نیز پشتیبانی می‌کنیم. لطفاً برای جلوگیری
                                            از به هم ریختگیرا نیز پشتیبانی می‌کنیم. لطفاً برای جلوگیری از به هم ریختگی
                                            فونت، متن‌ها را به منحنی (Outline) تبدیل کنید یا فونت‌ها را همراه فایل ارسال
                                            کنید.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="w-2/12 h-40 my-auto max-lg:hidden">
                    <img src="{{asset('storage/home/file_00000000cb8081f989cea3026b12dac0.png')}}" alt="" class="w-full h-full">
                </div>
            </div>
        </section>
        <!-- common_question_end -->


    </main>

    <footer class="mt-10 max-lg:mb-15 flex flex-col gap-10 justify-start items-center">
        <section class="w-full flex items-center justify-center bg-[var(--dark-text)] py-7">
            <div class="w-11/12 h-full flex max-lg:flex-col lg;gap-1 gap-9">
                <div class="lg:w-3/12 w-full flex">
                    <div
                        class="lg:w-full md:w-1/2 w-full h-full flex flex-col lg:gap-6 gap-4 justify-start max-lg:items-center items-start">
                        <div class="lg:w-10/12 w-11/12 flex flex-col lg:gap-6 gap-4 justify-start items-start ">
                            <div class="w-full flex gap-1.5 items-end justify-center">
                                <span
                                    class="text-[white] xl:text-[20px] lg:text-[18px] md:text-[28px] text-[38px] lg:leading-3 md:leading-4 leading-6 font-bold">berso</span>
                                <img src="{{asset('storage/home/logo.png')}}" alt="" class="w-1/12">
                            </div>
                            <p
                                class="w-full xl:text-sm lg:text-xs text-[11px] font-bold text-[#f4f1ff] max-lg:text-center ">
                                مجموعه برسو طراحی اختصاصی سایت که شما همیشه میخواستی با مشاوره کسب کار و اجرای ایده های
                                شما در سایت کسب و کار خود</p>
                            <div class="w-full flex items-center justify-center xl:gap-8 gap-6">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                        class="xl:size-5 size-4 fill-[var(--white)]">
                                        <path
                                            d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"
                                        class="xl:size-5 size-4 fill-[var(--white)]">
                                        <path
                                            d="M1764 11q33 24 27 64l-256 1536q-5 29-32 45-14 8-31 8-11 0-24-5l-527-215-298 327q-18 21-47 21-14 0-23-4-19-7-30-23.5t-11-36.5v-452l-472-193q-37-14-40-55-3-39 32-59l1664-960q35-21 68 2zm-342 1499l221-1323-1434 827 336 137 863-639-478 797z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                        class="xl:size-5 size-4 fill-[var(--white)]">
                                        <path
                                            d="M464 258.2c0 2.7-1 5.2-4.2 8c-3.8 3.1-10.1 5.8-17.8 5.8H344c-53 0-96 43-96 96c0 6.8 .7 13.4 2.1 19.8c3.3 15.7 10.2 31.1 14.4 40.6l0 0c.7 1.6 1.4 3 1.9 4.3c5 11.5 5.6 15.4 5.6 17.1c0 5.3-1.9 9.5-3.8 11.8c-.9 1.1-1.6 1.6-2 1.8c-.3 .2-.8 .3-1.6 .4c-2.9 .1-5.7 .2-8.6 .2C141.1 464 48 370.9 48 256S141.1 48 256 48s208 93.1 208 208c0 .7 0 1.4 0 2.2zm48 .5c0-.9 0-1.8 0-2.7C512 114.6 397.4 0 256 0S0 114.6 0 256S114.6 512 256 512c3.5 0 7.1-.1 10.6-.2c31.8-1.3 53.4-30.1 53.4-62c0-14.5-6.1-28.3-12.1-42c-4.3-9.8-8.7-19.7-10.8-29.9c-.7-3.2-1-6.5-1-9.9c0-26.5 21.5-48 48-48h97.9c36.5 0 69.7-24.8 70.1-61.3zM160 256a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm0-64a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm128-64a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm64 64a32 32 0 1 0 0-64 32 32 0 1 0 0 64z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                        class="xl:size-5 size-4 fill-[var(--white)]">
                                        <path
                                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- phone_my_tablet -->
                    <div class="w-1/2 h-full flex flex-col gap-2 justify-start items-center lg:hidden max-md:hidden">
                        <div class="  flex flex-col gap-2">
                            <h5 class="lg:text-xl font-bold text-[var(--white)]">اطلاعات تماس</h5>
                            <div class="flex flex-col gap-2 items-start">
                                <div class="flex justify-center items-center gap-2">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                            class="lg:size-4 size-3 fill-[var(--for-text)]">
                                            <path
                                                d="M375.8 275.2c-16.4-7-35.4-2.4-46.7 11.4l-33.2 40.6c-46-26.7-84.4-65.1-111.1-111.1L225.3 183c13.8-11.3 18.5-30.3 11.4-46.7l-48-112C181.2 6.7 162.3-3.1 143.6 .9l-112 24C13.2 28.8 0 45.1 0 64v0C0 295.2 175.2 485.6 400.1 509.5c9.8 1 19.6 1.8 29.6 2.2c0 0 0 0 0 0c0 0 .1 0 .1 0c6.1 .2 12.1 .4 18.2 .4l0 0c18.9 0 35.2-13.2 39.1-31.6l24-112c4-18.7-5.8-37.6-23.4-45.1l-112-48zM441.5 464C225.8 460.5 51.5 286.2 48.1 70.5l99.2-21.3 43 100.4L154.4 179c-18.2 14.9-22.9 40.8-11.1 61.2c30.9 53.3 75.3 97.7 128.6 128.6c20.4 11.8 46.3 7.1 61.2-11.1l29.4-35.9 100.4 43L441.5 464zM48 64v0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0s0 0 0 0">
                                            </path>
                                        </svg>
                                    </div>
                                    <span
                                        class="xl:text-sm lg:text-xs text-[10px] font-bold text-[var(--for-text)]">09371509497</span>
                                </div>
                                <div class="flex justify-center items-center gap-2">
                                    <div>
                                        <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"
                                            class="lg:size-4 size-3 fill-[var(--for-text)]">
                                            <path
                                                d="M1664 1504v-768q-32 36-69 66-268 206-426 338-51 43-83 67t-86.5 48.5-102.5 24.5h-2q-48 0-102.5-24.5t-86.5-48.5-83-67q-158-132-426-338-37-30-69-66v768q0 13 9.5 22.5t22.5 9.5h1472q13 0 22.5-9.5t9.5-22.5zm0-1051v-24.5l-.5-13-3-12.5-5.5-9-9-7.5-14-2.5h-1472q-13 0-22.5 9.5t-9.5 22.5q0 168 147 284 193 152 401 317 6 5 35 29.5t46 37.5 44.5 31.5 50.5 27.5 43 9h2q20 0 43-9t50.5-27.5 44.5-31.5 46-37.5 35-29.5q208-165 401-317 54-43 100.5-115.5t46.5-131.5zm128-37v1088q0 66-47 113t-113 47h-1472q-66 0-113-47t-47-113v-1088q0-66 47-113t113-47h1472q66 0 113 47t47 113z">
                                            </path>
                                        </svg>
                                    </div>
                                    <span
                                        class="xl:text-sm lg:text-xs text-[10px] font-bold text-[var(--for-text)]">shahkar@gmail.com</span>
                                </div>
                                <div class="flex justify-center items-center gap-2">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                                            class="lg:size-4 size-3 fill-[var(--for-text)]">
                                            <path
                                                d="M336 192c0-79.5-64.5-144-144-144S48 112.5 48 192c0 16.3 7.7 42 24.7 75.4c16.4 32.2 38.8 66.4 62.1 98.3c20.3 27.9 40.7 53.3 57.2 73.1c16.5-19.8 36.9-45.2 57.2-73.1c23.2-31.9 45.6-66.2 62.1-98.3C328.3 234 336 208.3 336 192zm48 0c0 83.1-105.6 219-160.2 283.6C204.8 498.1 192 512 192 512s-12.8-13.9-31.8-36.4C105.6 411 0 275.1 0 192C0 86 86 0 192 0S384 86 384 192zm-160 0a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm-112 0a80 80 0 1 1 160 0 80 80 0 1 1 -160 0z">
                                            </path>
                                        </svg>
                                    </div>
                                    <span
                                        class="xl:text-sm lg:text-xs text-[10px] font-bold text-[var(--for-text)]">آذربایجان
                                        شرقی،بناب،خیابان طالقانی</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- phone_my_tablet -->
                </div>
                <div class="lg:w-7/12 w-full h-full flex justify-start items-center">
                    <div class="w-1/3 h-full flex flex-col gap-1 justify-start items-center">
                        <div class="flex flex-col md:gap-3 gap-1.5 items-center justify-start ">
                            <h5 class="xl:text-xl lg:text-lg font-bold text-[var(--white)]">کسب و کار ها</h5>
                            <div
                                class="w-full flex flex-col gap-1 lg:items-center items-start max-md:items-center justify-start  xl:text-sm lg:text-xs text-[10px] font-bold text-[var(--tertiary-text)]">
                                <span
                                    class="hover:text-[var(--secondary-text)] transition duration-300 cursor-pointer">فتوکپی
                                    و پرینت</span>
                                <span
                                    class="hover:text-[var(--secondary-text)] transition duration-300 cursor-pointer">اجاره
                                    بیلبورد</span>
                                <span
                                    class="hover:text-[var(--secondary-text)] transition duration-300 cursor-pointer">اعلامیه
                                    ترحیم</span>
                                <span
                                    class="hover:text-[var(--secondary-text)] transition duration-300 cursor-pointer">بنر
                                    زیارتی و تبریک</span>
                                <span
                                    class="hover:text-[var(--secondary-text)] transition duration-300 cursor-pointer">سفارش
                                    تابلوی خطاطی</span>
                                <span
                                    class="hover:text-[var(--secondary-text)] transition duration-300 cursor-pointer">چاپ
                                    طرح روی ماگ</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/3 h-full flex flex-col gap-1 justify-start items-center">
                        <div class="flex flex-col md:gap-3 gap-1.5 items-center justify-start ">
                            <h5 class="xl:text-xl lg:text-lg font-bold text-[var(--white)]">کسب و کار ها</h5>
                            <div
                                class="w-full flex flex-col gap-1 lg:items-center items-start max-md:items-center justify-start  xl:text-sm lg:text-xs text-[10px] font-bold text-[var(--tertiary-text)]">
                                <span
                                    class="hover:text-[var(--secondary-text)] transition duration-300 cursor-pointer">فتوکپی
                                    و پرینت</span>
                                <span
                                    class="hover:text-[var(--secondary-text)] transition duration-300 cursor-pointer">اجاره
                                    بیلبورد</span>
                                <span
                                    class="hover:text-[var(--secondary-text)] transition duration-300 cursor-pointer">اعلامیه
                                    ترحیم</span>
                                <span
                                    class="hover:text-[var(--secondary-text)] transition duration-300 cursor-pointer">بنر
                                    زیارتی و تبریک</span>
                                <span
                                    class="hover:text-[var(--secondary-text)] transition duration-300 cursor-pointer">سفارش
                                    تابلوی خطاطی</span>
                                <span
                                    class="hover:text-[var(--secondary-text)] transition duration-300 cursor-pointer">چاپ
                                    طرح روی ماگ</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/3 h-full flex flex-col gap-1 justify-start items-center">
                        <div class="flex flex-col md:gap-3 gap-1.5 items-center justify-start ">
                            <h5 class="xl:text-xl lg:text-lg font-bold text-[var(--white)]">کسب و کار ها</h5>
                            <div
                                class="w-full flex flex-col gap-1 lg:items-center items-start max-md:items-center justify-start  xl:text-sm lg:text-xs text-[10px] font-bold text-[var(--tertiary-text)]">
                                <span
                                    class="hover:text-[var(--secondary-text)] transition duration-300 cursor-pointer">فتوکپی
                                    و پرینت</span>
                                <span
                                    class="hover:text-[var(--secondary-text)] transition duration-300 cursor-pointer">اجاره
                                    بیلبورد</span>
                                <span
                                    class="hover:text-[var(--secondary-text)] transition duration-300 cursor-pointer">اعلامیه
                                    ترحیم</span>
                                <span
                                    class="hover:text-[var(--secondary-text)] transition duration-300 cursor-pointer">بنر
                                    زیارتی و تبریک</span>
                                <span
                                    class="hover:text-[var(--secondary-text)] transition duration-300 cursor-pointer">سفارش
                                    تابلوی خطاطی</span>
                                <span
                                    class="hover:text-[var(--secondary-text)] transition duration-300 cursor-pointer">چاپ
                                    طرح روی ماگ</span>
                            </div>
                        </div>
                    </div>



                </div>
                <div
                    class="lg:w-5/24 w-full h-full flex flex-col gap-2 justify-start lg:items-start items-center md:hidden lg:block">
                    <!-- <div class="sm:w-1/2 w-full h-full flex flex-col gap-3 justify-start items-start"> -->
                    <div class="flex flex-col gap-2 items-start">
                        <div class="w-full flex justify-start">
                            <h5 class="lg:text-xl font-bold text-[var(--white)]">اطلاعات تماس</h5>
                        </div>
                        <div class="flex justify-center items-center gap-2">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                    class="lg:size-4 size-3 fill-[var(--for-text)]">
                                    <path
                                        d="M375.8 275.2c-16.4-7-35.4-2.4-46.7 11.4l-33.2 40.6c-46-26.7-84.4-65.1-111.1-111.1L225.3 183c13.8-11.3 18.5-30.3 11.4-46.7l-48-112C181.2 6.7 162.3-3.1 143.6 .9l-112 24C13.2 28.8 0 45.1 0 64v0C0 295.2 175.2 485.6 400.1 509.5c9.8 1 19.6 1.8 29.6 2.2c0 0 0 0 0 0c0 0 .1 0 .1 0c6.1 .2 12.1 .4 18.2 .4l0 0c18.9 0 35.2-13.2 39.1-31.6l24-112c4-18.7-5.8-37.6-23.4-45.1l-112-48zM441.5 464C225.8 460.5 51.5 286.2 48.1 70.5l99.2-21.3 43 100.4L154.4 179c-18.2 14.9-22.9 40.8-11.1 61.2c30.9 53.3 75.3 97.7 128.6 128.6c20.4 11.8 46.3 7.1 61.2-11.1l29.4-35.9 100.4 43L441.5 464zM48 64v0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0s0 0 0 0">
                                    </path>
                                </svg>
                            </div>
                            <span
                                class="xl:text-sm lg:text-xs text-[10px] font-bold text-[var(--for-text)]">09371509497</span>
                        </div>
                        <div class="flex justify-center items-center gap-2">
                            <div>
                                <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"
                                    class="lg:size-4 size-3 fill-[var(--for-text)]">
                                    <path
                                        d="M1664 1504v-768q-32 36-69 66-268 206-426 338-51 43-83 67t-86.5 48.5-102.5 24.5h-2q-48 0-102.5-24.5t-86.5-48.5-83-67q-158-132-426-338-37-30-69-66v768q0 13 9.5 22.5t22.5 9.5h1472q13 0 22.5-9.5t9.5-22.5zm0-1051v-24.5l-.5-13-3-12.5-5.5-9-9-7.5-14-2.5h-1472q-13 0-22.5 9.5t-9.5 22.5q0 168 147 284 193 152 401 317 6 5 35 29.5t46 37.5 44.5 31.5 50.5 27.5 43 9h2q20 0 43-9t50.5-27.5 44.5-31.5 46-37.5 35-29.5q208-165 401-317 54-43 100.5-115.5t46.5-131.5zm128-37v1088q0 66-47 113t-113 47h-1472q-66 0-113-47t-47-113v-1088q0-66 47-113t113-47h1472q66 0 113 47t47 113z">
                                    </path>
                                </svg>
                            </div>
                            <span
                                class="xl:text-sm lg:text-xs text-[10px] font-bold text-[var(--for-text)]">shahkar@gmail.com</span>
                        </div>
                        <div class="flex justify-center items-center gap-2">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                                    class="lg:size-4 size-3 fill-[var(--for-text)]">
                                    <path
                                        d="M336 192c0-79.5-64.5-144-144-144S48 112.5 48 192c0 16.3 7.7 42 24.7 75.4c16.4 32.2 38.8 66.4 62.1 98.3c20.3 27.9 40.7 53.3 57.2 73.1c16.5-19.8 36.9-45.2 57.2-73.1c23.2-31.9 45.6-66.2 62.1-98.3C328.3 234 336 208.3 336 192zm48 0c0 83.1-105.6 219-160.2 283.6C204.8 498.1 192 512 192 512s-12.8-13.9-31.8-36.4C105.6 411 0 275.1 0 192C0 86 86 0 192 0S384 86 384 192zm-160 0a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm-112 0a80 80 0 1 1 160 0 80 80 0 1 1 -160 0z">
                                    </path>
                                </svg>
                            </div>
                            <span class="xl:text-sm lg:text-xs text-[10px] font-bold text-[var(--for-text)]">آذربایجان
                                شرقی،بناب،خیابان طالقانی</span>
                        </div>
                    </div>

                    <!-- </div> -->
                </div>
            </div>
        </section>
        <section class="w-full flex items-center justify-center bg-[var(--white)] py-2 fixed bottom-0 lg:hidden gap-2">
            <div class="w-1/2 py-3 bg-(--primary-blue) rounded-full  flex gap-2 justify-center items-center">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-4 fill-white"><path d="M160 384c17.7 0 32 14.3 32 32v48l98.1-73.6c5.5-4.2 12.3-6.4 19.2-6.4H448c17.7 0 32-14.3 32-32V64c0-17.7-14.3-32-32-32H64C46.3 32 32 46.3 32 64V352c0 17.7 14.3 32 32 32h96zM0 64C0 28.7 28.7 0 64 0H448c35.3 0 64 28.7 64 64V352c0 35.3-28.7 64-64 64H309.3L185.6 508.8c-4.8 3.6-11.3 4.2-16.8 1.5s-8.8-8.2-8.8-14.3V448 416H128 64c-35.3 0-64-28.7-64-64V64z"/></svg>
                </div>
                <span class="text-sm text-white font-bold">مشاوره رایگان</span>
            </div>
            <div class="w-1/2 py-3 bg-(--dark-text) rounded-full  flex gap-2 justify-center items-center">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-4 fill-white"><path d="M375.8 275.2c-16.4-7-35.4-2.4-46.7 11.4l-33.2 40.6c-46-26.7-84.4-65.1-111.1-111.1L225.3 183c13.8-11.3 18.5-30.3 11.4-46.7l-48-112C181.2 6.7 162.3-3.1 143.6 .9l-112 24C13.2 28.8 0 45.1 0 64v0C0 300.7 183.5 494.5 416 510.9c4.5 .3 9.1 .6 13.7 .8c0 0 0 0 0 0c0 0 0 0 .1 0c6.1 .2 12.1 .4 18.3 .4l0 0c18.9 0 35.2-13.2 39.1-31.6l24-112c4-18.7-5.8-37.6-23.4-45.1l-112-48zM447.7 480C218.1 479.8 32 293.7 32 64v0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0c0-3.8 2.6-7 6.3-7.8l112-24c3.7-.8 7.5 1.2 9 4.7l48 112c1.4 3.3 .5 7.1-2.3 9.3l-40.6 33.2c-12.1 9.9-15.3 27.2-7.4 40.8c29.5 50.9 71.9 93.3 122.7 122.7c13.6 7.9 30.9 4.7 40.8-7.4l33.2-40.6c2.3-2.8 6.1-3.7 9.3-2.3l112 48c3.5 1.5 5.5 5.3 4.7 9l-24 112c-.8 3.7-4.1 6.3-7.8 6.3c-.1 0-.2 0-.3 0z"/></svg>
                </div>
                <span class="text-sm text-white font-bold">تماس</span>
            </div>

        </section>
    </footer>


    <script src="{{ asset('assets/js/berso.js') }}"></script>
     <script>

        let phoneNumber = document.getElementById("phoneNumber");
        let password = document.getElementById("password");
        let code = document.getElementById("code");
        let signupForm = document.getElementById("signupForm");
        let link = "{{ url('/') }}/";

        function sendCode(el) {
            if (phoneNumber.value == "") {
                alert("پرکردن همه فیلد ها الزامیست");
            } else {
                $.ajax({
                    url: link + 'api/sendCode',
                    type: "POST",
                    dataType: "json",
                    data: { "phoneNumber": phoneNumber.value },
                    success: function (response) {
                        if (!response) {
                            alert("این کاربر قبلا ثبت نام کرده است")
                            location.assign(link + 'login')
                        }
                    },
                    error: function () {
                        alert("error")
                    }
                });
            }
        }
 

        function signUp(e) {
            e.preventDefault()
            if (phoneNumber.value == "" || password.value == "" || code.value == "") {
                alert("پرکردن همه ی فیلد ها الزامی است");
            } else {
                $.ajax({
                    url: link + "api/CheckActivationCode",
                    type: "POST",
                    dataType: "json",
                    data: { "phoneNumber": phoneNumber.value, "password": password.value, "code": code.value },
                    success: function (response) {
                        if (response) {
                            signupForm.submit();
                        }
                        if (!response) {
                            alert("کد وارد شده اشتباه است");
                        }
                    }
                });
            }
        }
    let loginpupop=document.getElementById('loginpupop');
    function login(dor){
        if(dor=="open"){
            loginpupop.classList.remove('invisible');
            loginpupop.classList.remove('opacity-0');
        }
        if(dor=="clos"){
            loginpupop.classList.add('invisible');
            loginpupop.classList.add('opacity-0');
        }
    }





    let phoneNumberlogin = document.getElementById("phoneNumberlogin");
    let passwordlogin = document.getElementById("passwordlogin");
    let codeBox = document.getElementById("codeBox");
    let codelogin = document.getElementById("codelogin");
    let logInForm = document.getElementById("logInForm");

    let submitBtn = document.getElementById("submitBtn");


    function loginWithPass(el) {
        submitBtn.setAttribute("onclick", "loginPass(event)");
        el.setAttribute("onclick", "loginWithCode(this)");
        el.innerText = "ورود با کد";
        codeBox.classList.remove("block");
        codeBox.classList.add("hidden");
        passwordlogin.classList.remove("hidden");
        passwordlogin.classList.add("block");
    }

    function loginWithCode(el) {
        el.setAttribute("onclick", "loginWithPass(this)");
        el.innerText = "ورود با پسورد";
        submitBtn.setAttribute("onclick", "loginCode(event)");
        passwordlogin.classList.remove("block");
        passwordlogin.classList.add("hidden");
        codeBox.classList.remove("hidden");
        codeBox.classList.add("block");
    }

    function loginCode(e) {
        e.preventDefault();
        if (phoneNumberlogin.value == "" || codelogin.value == "") {
            alert("پرکردن همه فیلد ها الزامیست");
        } else {
            $.ajax({
                url: link + "api/loginCode",
                type: "POST",
                dataType: "json",
                data: { "phoneNumber": phoneNumberlogin.value, "code": codelogin.value },
                success: function (persent) {
                    if (persent) {
                        logInForm.submit();
                    }
                    if (!persent) {
                        alert("کد وارد شده یکسان نیست")
                    }
                }
            });
        }
    }

    function loginPass(e) {
        e.preventDefault();
        if (phoneNumberlogin.value == "" || passwordlogin.value == "") {
            alert("همه فیلد ها الزامیست");
        } else {
            $.ajax({
                url: link + "api/loginPass",
                type: "POST",
                dataType: "json",
                data: { "phoneNumber": phoneNumberlogin.value, "password": passwordlogin.value },
                success: function (persent) {
                    console.log(persent)
                    if (!persent.type) {
                        alert(message.alert);
                    }
                    if (persent.type) {
                        logInForm.submit();
                    }
                }
            });
        }
    }

    function sendCodelogin(el) {
        if (phoneNumberlogin.value == "") {
            alert("شماره موبایل الزامیست")
        } else {
            $.ajax({
                url: link + "api/sendLoginCode",
                type: "POST",
                dataType: "json",
                data: { "phoneNumber": phoneNumberlogin.value },
                success: function (response) {
                    if (!response) {
                        alert("این کاربر موجود نمیباشد لطفا ثبت نام کنید")
                    }
                }
            });
        }
    }
    function change(dor){
        if(dor=='signup'){
            logInForm.classList.add('invisible')
            logInForm.classList.add('opacity-0')
            logInForm.classList.add('absolute')
            signupForm.classList.remove('invisible')
            signupForm.classList.remove('opacity-0')
            signupForm.classList.remove('absolute')
        }
        if(dor=="login"){
            logInForm.classList.remove('invisible')
            logInForm.classList.remove('opacity-0')
            logInForm.classList.remove('absolute')
            signupForm.classList.add('invisible')
            signupForm.classList.add('opacity-0')
            signupForm.classList.add('absolute')
        }
    }

//mahdi
     </script>
</body>

</html>