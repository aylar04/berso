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
                <div class="max-lg:w-1/3 flex justify-center items-center">
                    <img src="{{asset('storage/home/logo.webp')}}" alt="" class="w-22">
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
                @if(Auth::check())
                <div class="flex items-center gap-3 sm:gap-5">
                    <div class="relative profile-menu-container">
                        <div class="flex items-center gap-2 border-r border-gray-200 pr-2 sm:pr-4 cursor-pointer" id="profileButton" onclick="profile()">
                            <svg class="w-8 h-8 sm:w-10 sm:h-10 rounded-full shadow-md border-2 border-white fill-(--primary-blue)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12,19.2C9.5,19.2 7.29,17.92 6,16C6.03,14 10,12.9 12,12.9C14,12.9 17.97,14 18,16C16.71,17.92 14.5,19.2 12,19.2M12,5A3,3 0 0,1 15,8A3,3 0 0,1 12,11A3,3 0 0,1 9,8A3,3 0 0,1 12,5M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12C22,6.47 17.5,2 12,2Z"></path>
                            </svg>
                            <div class="hidden lg:block text-right text-sm font-medium ">
                                @if(Auth::user()->name && Auth::user()->family)
                                {{Auth::user()->name}} {{Auth::user()->family}}
                                @else
                                کاربر عادی
                                @endif
                            </div>
                            <svg class="size-4 sm:size-5 text-white hidden lg:block transition-transform duration-200" id="chevronIcon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </div>

                        <div id="dropdownMenu" class="hidden absolute mt-2 w-56 bg-white rounded-lg shadow-lg border border-gray-200 py-1 z-[99999] left-0 right-auto sm:left-auto sm:right-0">
                            <a href="{{ route('home') }}" class="flex items-center gap-3 px-4 py-2 text-gray-700 text-sm hover:bg-blue-50 transition-colors duration-150">
                                <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                <span>خانه</span>
                            </a>
                            <div class="border-t border-gray-100 my-1"></div>
                            <a href="{{route('User.profile')}}" class="flex items-center gap-3 px-4 py-2 text-gray-700 text-sm hover:bg-blue-50 transition-colors duration-150">
                                <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                <span>پروفایل کاربری</span>
                            </a>
                            <div class="border-t border-gray-100 my-1"></div>
                            <a href="{{route('User.logout')}}" class="flex items-center gap-3 px-4 py-2 text-gray-700 text-sm hover:bg-blue-50 transition-colors duration-150">
                                <svg class="w-4 h-4 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                                <span>خروج از حساب کاربری</span>
                            </a>
                        </div>
                    </div>
                    </div>
                @else
                <div class="max-lg:w-1/3 flex justify-end items-center">
                    <div class="bg-(--primary-blue) inline-block text-(--white) px-2 md:px-4 py-2 md:py-3 rounded-3xl text-xs md:text-sm font-bold cursor-pointer hover:bg-blue-700 transition-all duration-300" onclick="login('open')">
                        ورود / ثبت نام
                    </div>
                </div>
                @endif
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
        <div class="absolute w-10/12 md:w-6/12 lg:w-4/12 sm:h-27/48 h-12/24 bg-white rounded-2xl flex flex-col gap-3 p-5">
            <div class="flex justify-end">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="size-5 fill-[#767676] cursor-pointer" onclick="login('clos')">
                    <path d="M324.5 411.1c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6L214.6 256 347.1 123.5c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0L192 233.4 59.5 100.9c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L169.4 256 36.9 388.5c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0L192 278.6 324.5 411.1z"/>
                </svg>
            </div>
            <div class="w-full flex flex-col items-center sm:justify-between justify-evenly gap-3">
                <div class="w-1/3 flex items-center justify-center">
                    <img src="{{asset('storage/home/logo.webp')}}" alt="" class="min-w-22 max-w-22">
                </div>
                <form action="{{ route('User.LoginUser') }}" method="POST" id="logInForm" class="w-full mx-auto flex items-center flex-col sm:gap-3 gap-2 rounded-3xl sm:p-6 px-4 sm:mt-4">
                    @csrf
                    <h1 class="text-white text-xl">login</h1>
                    <input class="w-full rounded-2xl bg-(--very-light-violet) p-3" name="phoneNumber" type="text" placeholder="شماره تلفن"
                        id="phoneNumberlogin">
                    <div id="phoneNumberSection"></div>

                    <input class="w-full rounded-2xl bg-(--very-light-violet) p-3 hidden" name="password" type="password"
                        placeholder="رمز عبور" id="passwordlogin">
                    <div id="passwordSection"></div>

                    <div class="w-full flex gap-2 justify-between" id="codeBox">
                        <input class="bg-(--very-light-violet) p-3 w-8/12 rounded-2xl" name="code" type="text" placeholder="کد"
                            id="codelogin">
                        <button type="button" onclick="sendCodelogin(this)"
                            class="bg-(--dark-text) min-w-3/10 max-w-4/10 text-center text-white flex items-center rounded-lg justify-center">ارسال
                            کد</button>
                    </div>
                    <div class="flex gap-5 justify-between mt-4">
                        <div class="cursor-pointer hover:text-blue-500" onclick="loginWithPass(this)">ورود با پسورد</div>
                    </div>
                    <div class="flex gap-2 items-center">
                        <button type="button" class="w-4/12 p-1 px-2 sm:p-3 sm:rounded-3xl rounded-xl bg-(--primary-blue) text-white " onclick="loginCode(event)"
                            id="submitBtn">ورود
                        </button>
                        <div class="w-9/12 flex flex-col items-center gap-3 p-2">
                            <span class="text-lg text-(--primary-blue) cursor-pointer" onclick="change('signup')">ثبت نام!</span>
                        </div>
                    </div>
                </form>
                <form action="{{ route('User.createSignup') }}" method="POST" id="signupForm" class="w-full mx-auto invisible opacity-0 flex items-center flex-col absolute sm:gap-3 gap-2 rounded-3xl sm:p-6 px-4 sm:mt-4">
                    @csrf
                    @if(session('message'))
                        <script>
                            link = "{{ url('/') }}/";
                            alert(@json(session('message')));
                            location.assign(link + 'login')
                        </script>
                    @endif
                    <h1 class="text-white text-xl">signUp</h1>
                    <input class="w-full rounded-2xl bg-(--very-light-violet) p-3" name="phoneNumber" type="text" placeholder="شماره تلفن"
                        id="phoneNumber" value="{{ old("phoneNumber") }}">
                    <div id="phoneNumberSection"></div>
                    <!-- @error("phoneNumber")
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror -->
                    <input class="w-full rounded-2xl bg-(--very-light-violet) p-3" name="password" type="password" placeholder="رمز عبور"
                        id="password" value="{{ old("password") }}">
                    <div id="passwordSection"></div>

                    <div class="w-full flex gap-2 justify-between">
                        <input class="bg-(--very-light-violet) p-3 w-8/12 rounded-2xl" name="code" type="text" placeholder="کد"
                            id="code">
                        <button type="button" onclick="sendCode(this)"
                            class="bg-(--dark-text) w-4/10 text-center text-white flex items-center rounded-lg justify-center">ارسال
                            کد</button>
                    </div>
                    <!-- @error("password")
                        <div class="text-red-400">{{ $message }}</div>
                    @enderror -->
                    <div class="w-full justify-center flex items-center gap-3 p-2">
                    <button class="p-3 rounded-3xl bg-(--primary-blue) text-white" onclick="signUp(event)">ثبت نام</button>
                        <span class=" text-lg text-(--primary-blue) cursor-pointer" onclick="change('login')">ورود!</span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        let api = "{{ url('/api') }}/"
        // var route={
        //     userSend_code:'{{route("User.send_code")}}',
        //     CheckActivationCode:"{{route('User.CheckActivationCode')}}",
        //     userLogincode:"{{route('User.logincode')}}",
        //     userLoginPass:"{{route('User.loginPass')}}",
        //     usersendLoginCode:"{{route('User.sendLoginCode')}}"
        // }
    </script>