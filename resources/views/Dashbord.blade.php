<!doctype html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css">
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/tailwind.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/berso.css') }}">
    <title>@yield('title')</title>
    <style>
        /* استایل‌های اضافی برای منوی موبایل */
        .mobile-menu-item {
            transition: all 0.3s ease;
        }

        .mobile-submenu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
            padding-right: 1rem;
        }

        .mobile-submenu.open {
            max-height: 500px;
            transition: max-height 0.5s ease-in;
        }

        .mobile-menu-header svg.rotate {
            transform: rotate(180deg);
        }

        /* استایل اسکرول برای منوی موبایل */
        .mobile-menu-scroll {
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .mobile-menu-scroll::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body>

    <div class="w-full flex flex-row">
        <div class="hidden lg:block lg:w-[265px] bg-(--dark-text) fixed z-999 right-0 top-0 h-dvh px-5 text-sm">
            <div class="w-full">
                <a href=""
                    class="block w-full py-3 text-center font-bold text-3xl text-white border-b border-[darkslategray]">
                    berso.ir
                </a>
            </div>
            <div class="py-5 h-[90%] overflow-y-auto flex flex-col gap-5" style="scrollbar-width: none;">

                <div class="flex flex-row items-start gap-2.5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 576 512">
                        <path fill="white"
                            d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                    </svg>
                    <a href="" class="block w-full text-white py-1" target="_blank">
                        بازدید از سایت
                    </a>
                </div>
                <div class="flex flex-row items-start gap-2.5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 448 512">
                        <path fill="white" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                    </svg>
                    <a href="{{route('User.profile')}}" class="block w-full text-white py-1" target="_blank">
                        پروفایل
                    </a>
                </div>
                <!-- ====== علاقه مندی (تصحیح شده با کلاس dashboard) ====== -->
                    <div class="dashboard">
                    <div
                        class="flex justify-between flex-row-reverse cursor-pointer px-2 rounded-sm py-1.5 @if (Route::is('favorites.*')) bg-gray-700 @endif">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="size-4 transition-all duration-200 @if (Route::is('favorites.*')) rotate-180 @endif"
                            viewBox="0 0 448 512">
                            <path fill="white"
                                d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z" />
                        </svg>

                        <div class="flex flex-row-reverse items-center gap-2">
                            <span class=" text-[white] flex justify-end font-bold">علاقه مندی ها</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-5">
                                <path fill="white" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
                        </svg>
                        </div>
                    </div>
                    <ul
                        class="my-1 pr-3 transition-all duration-500 overflow-hidden @if (Route::is('favorites.*')) max-h-[500px] @else max-h-0 @endif">
                        <li
                            class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('favorites.list')) bg-gray-700 @endif">
                            <span class="size-1 bg-white rounded-sm"></span>
                            <a href="" class="text-white py-1 block">
                                لیست علاقه مندی ها
                            </a>
                        </li>

                    </ul>
                </div>
                 @can('panelCan','admin')
                <div class="dashboard">
                    <div class="flex justify-between flex-row-reverse cursor-pointer px-2 rounded-sm py-1.5 @if (Route::is('user.*') && !Route::is('user.profile') || Route::is('permission.*') || Route::is('role.*')) bg-gray-700 @endif">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="size-4 transition-all duration-200 @if (Route::is('user.*') && !Route::is('user.profile') || Route::is('permission.*') || Route::is('role.*')) rotate-180 @endif"
                            viewBox="0 0 448 512">
                            <path fill="white"
                                d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z" />
                        </svg>
                        <div class="flex flex-row-reverse items-center gap-2">
                            <span class=" text-[white] flex justify-end font-bold">مدیریت کاربران</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="size-5">
                                <path fill="white"
                                    d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z" />
                            </svg>
                        </div>
                    </div>
                    <ul class="my-1 pr-3 transition-all duration-500 overflow-hidden @if (Route::is('user.*') && !Route::is('user.profile') || Route::is('permission.*') || Route::is('role.*') ) max-h-[500px] @else max-h-0 @endif">
                        <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('user.list')) bg-gray-700 @endif">
                            <span class="size-1 bg-white rounded-sm"></span>
                            <a href="" class="text-white py-1 block">
                                مشاهده همه کاربران
                            </a>
                        </li>
                        <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('user.create_user')) bg-gray-700 @endif">
                            <span class="size-1 bg-white rounded-sm"></span>
                            <a href="" class="text-white py-1 block">
                                 ایجاد کاربر 
                            </a>
                        </li>
                        <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('permission.create')) bg-gray-700 @endif">
                            <span class="size-1 bg-white rounded-sm"></span>
                            <a href="" class="text-white py-1 block">
                                افزودن مجوز
                            </a>
                        </li>
                        <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('permission.list')) bg-gray-700 @endif">
                            <span class="size-1 bg-white rounded-sm"></span>
                            <a href="" class="text-white py-1 block">
                                همه مجوز ها
                            </a>
                        </li>
                        <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('role.list')) bg-gray-700 @endif">
                            <span class="size-1 bg-white rounded-sm"></span>
                            <a href="" class="text-white py-1 block">
                                 لیست نقش ها
                            </a>
                        </li>
                       
                    </ul>
                </div>
                <div class="dashboard">
                    <div
                        class="flex justify-between flex-row-reverse cursor-pointer px-2 rounded-sm py-1.5 @if (Route::is('menu.*')) bg-gray-700 @endif">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="size-4 transition-all duration-200 @if (Route::is('menu.*')) rotate-180 @endif"
                            viewBox="0 0 448 512">
                            <path fill="white"
                                d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z" />
                        </svg>

                        <div class="flex flex-row-reverse items-center gap-2">
                            <span class=" text-[white] flex justify-end font-bold">مدیریت منو</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 512 512">
                                <path fill="white"
                                    d="M384 48c8.8 0 16 7.2 16 16V448c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16H384zM96 0C60.7 0 32 28.7 32 64V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H96zM240 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128zm-32 32c-44.2 0-80 35.8-80 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16c0-44.2-35.8-80-80-80H208zM512 80c0-8.8-7.2-16-16-16s-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V80zM496 192c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm16 144c0-8.8-7.2-16-16-16s-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V336z" />
                            </svg>
                        </div>
                    </div>
                </div>
             
                <div class="dashboard">
                    <div
                        class="flex justify-between flex-row-reverse cursor-pointer px-2 rounded-sm py-1.5 @if (Route::is('homeSetting.*')|| Route::is('aboutusSettings.*') || Route::is('contactusSettings.*') || Route::is('footerSetting.*') || Route::is('commentSetting.*')) bg-gray-700 @endif">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="size-4 transition-all duration-200 @if (Route::is('homeSetting.*')|| Route::is('aboutusSettings.*') || Route::is('contactusSettings.*') || Route::is('footerSetting.*')|| Route::is('commentSetting.*')) rotate-180 @endif"
                            viewBox="0 0 448 512">
                            <path fill="white"
                                d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z" />
                        </svg>

                        <div class="flex flex-row-reverse items-center gap-2">
                            <span class=" text-[white] flex justify-end font-bold">تنظیمات</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-6">
                                <path fill="white" d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z" />
                            </svg>
                        </div>
                    </div>
                    <ul
                        class="my-1 pr-3 transition-all duration-500 overflow-hidden @if (Route::is('homeSetting.*')|| Route::is('aboutusSettings.*') || Route::is('contactusSettings.*')|| Route::is('footerSetting.*')|| Route::is('commentSetting.*')) max-h-[500px] @else max-h-0 @endif">
                        <li
                            class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('aboutusSettings.aboutUsForm')) bg-gray-700 @endif">
                            <span class="size-1 bg-white rounded-sm"></span>
                            <a href="" class="text-white py-1 block">
                                تنطیمات درباره ما
                            </a>
                        </li>
                        <li
                            class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('contactusSettings.contactUsForm')) bg-gray-700 @endif">
                            <span class="size-1 bg-white rounded-sm"></span>
                            <a href="" class="text-white py-1 block">
                                تنطیمات ارتباط ما
                            </a>
                        </li>
                        <li
                            class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('footerSetting.show')) bg-gray-700 @endif">
                            <span class="size-1 bg-white rounded-sm"></span>
                            <a href="" class="text-white py-1 block">
                                تنطیمات فوتر
                            </a>
                        </li>
                        <li
                            class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('commentSetting.show')) bg-gray-700 @endif">
                            <span class="size-1 bg-white rounded-sm"></span>
                            <a href="" class="text-white py-1 block">
                                تنطیمات کامنت
                            </a>
                        </li>
                        <li
                            class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('homeSetting.mainBannerForm')) bg-gray-700 @endif">
                            <span class="size-1 bg-white rounded-sm"></span>
                            <a href="" class="text-white py-1 block">
                                بنراصلی صفحه اول
                            </a>
                        </li>
                        <li
                            class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('homeSetting.videoSliderForm')) bg-gray-700 @endif">
                            <span class="size-1 bg-white rounded-sm"></span>
                            <a href="" class="text-white py-1 block">
                                ویدیو صفحه اول
                            </a>
                        </li>
                        <li
                            class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('homeSetting.cartsForm')) bg-gray-700 @endif">
                            <span class="size-1 bg-white rounded-sm"></span>
                            <a href="" class="text-white py-1 block">
                                کارتهای صفحه اول
                            </a>
                        </li>
                        <li
                            class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('homeSetting.imageSliderForm')) bg-gray-700 @endif">
                            <span class="size-1 bg-white rounded-sm"></span>
                            <a href="" class="text-white py-1 block">
                                اسلایدر عکس صفحه اول
                            </a>
                        </li>
                        <li
                            class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('homeSetting.addressForm')) bg-gray-700 @endif">
                            <span class="size-1 bg-white rounded-sm"></span>
                            <a href="" class="text-white py-1 block">
                                آدرس صفحه اول
                            </a>
                        </li>

                    </ul>
                </div>
              
                <div class="dashboard">
                    <div
                        class="flex justify-between flex-row-reverse cursor-pointer px-2 rounded-sm py-1.5 @if (Route::is('qrCode.*')) bg-gray-700 @endif">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="size-4 transition-all duration-200 @if (Route::is('qrCode.*')) rotate-180 @endif"
                            viewBox="0 0 448 512">
                            <path fill="white"
                                d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z" />
                        </svg>

                        <div class="flex flex-row-reverse items-center gap-2">
                            <span class=" text-[white] flex justify-end font-bold">کیوآرکد</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-6" viewBox="0 0 448 512">
                                <path fill="white"
                                    d="M0 80C0 53.5 21.5 32 48 32h96c26.5 0 48 21.5 48 48v96c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V80zM64 96v64h64V96H64zM0 336c0-26.5 21.5-48 48-48h96c26.5 0 48 21.5 48 48v96c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V336zm64 16v64h64V352H64zM304 32h96c26.5 0 48 21.5 48 48v96c0 26.5-21.5 48-48 48H304c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48zm80 64H320v64h64V96zM256 304c0-8.8 7.2-16 16-16h64c8.8 0 16 7.2 16 16s7.2 16 16 16h32c8.8 0 16-7.2 16-16s7.2-16 16-16s16 7.2 16 16v96c0 8.8-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s-7.2-16-16-16s-16 7.2-16 16v64c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V304zM368 480a16 16 0 1 1 0-32 16 16 0 1 1 0 32zm64 0a16 16 0 1 1 0-32 16 16 0 1 1 0 32z" />
                            </svg>
                        </div>
                    </div>
                    <ul
                        class="my-1 pr-3 transition-all duration-500 overflow-hidden @if (Route::is('qrCode.*')) max-h-[500px] @else max-h-0 @endif">
                        <li
                            class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('qrCode.create')) bg-gray-700 @endif">
                            <span class="size-1 bg-white rounded-sm"></span>
                            <a href="" class="text-white py-1 block">
                                ایجاد کیوآرکد
                            </a>
                        </li>
                        <li
                            class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('qrCode.list')) bg-gray-700 @endif">
                            <span class="size-1 bg-white rounded-sm"></span>
                            <a href="" class="text-white py-1 block">
                                لیست کیوآرکد
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="dashboard">
                    <div
                        class="flex justify-between flex-row-reverse cursor-pointer px-2 rounded-sm py-1.5 @if (Route::is('contactUs.*')) bg-gray-700 @endif">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="size-4 transition-all duration-200 @if (Route::is('contactUs.*')) rotate-180 @endif"
                            viewBox="0 0 448 512">
                            <path fill="white"
                                d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z" />
                        </svg>

                        <div class="flex flex-row-reverse items-center gap-2">
                            <span class=" text-[white] flex justify-end font-bold">ارتباط باما</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="size-6">
                                <path fill="white" d="M64 64C28.7 64 0 92.7 0 128v64c0 8.8 7.4 15.7 15.7 18.6C34.5 217.1 48 235 48 256s-13.5 38.9-32.3 45.4C7.4 304.3 0 311.2 0 320v64c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V320c0-8.8-7.4-15.7-15.7-18.6C541.5 294.9 528 277 528 256s13.5-38.9 32.3-45.4c8.3-2.9 15.7-9.8 15.7-18.6V128c0-35.3-28.7-64-64-64H64zm64 112l0 160c0 8.8 7.2 16 16 16H432c8.8 0 16-7.2 16-16V176c0-8.8-7.2-16-16-16H144c-8.8 0-16 7.2-16 16zM96 160c0-17.7 14.3-32 32-32H448c17.7 0 32 14.3 32 32V352c0 17.7-14.3 32-32 32H128c-17.7 0-32-14.3-32-32V160z" />
                            </svg>
                        </div>
                    </div>
                    <ul
                        class="my-1 pr-3 transition-all duration-500 overflow-hidden @if (Route::is('contactUs.*')) max-h-[500px] @else max-h-0 @endif">

                        <li
                            class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('contactUs.list')) bg-gray-700 @endif">
                            <span class="size-1 bg-white rounded-sm"></span>
                            <a href="" class="text-white py-1 block">
                                لیست ارتباط باما
                            </a>
                        </li>

                    </ul>
                </div>
                  @endcan
                <div class="mt-auto border-t border-gray-700">
                    <div class="flex flex-row items-center gap-2.5  px-2 hover:bg-red-900/30 rounded-lg transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 512 512" fill="#ef4444">
                            <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9V320H192c-17.7 0-32-14.3-32-32V224c0-17.7 14.3-32 32-32H320V128c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96H96c-17.7 0-32 14.3-32 32V384c0 17.7 14.3 32 32 32h64c17.7 0 32 14.3 32 32s-14.3 32-32 32H96c-53 0-96-43-96-96V128C0 75 43 32 96 32h64c17.7 0 32 14.3 32 32s-14.3 32-32 32z" />
                        </svg>
                        <a href="" class="block w-full text-red-500 py-1 text-base font-medium">
                            خروج از حساب کاربری
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="w-full">
        <header class="w-full fixed top-0 right-0 z-9999999">
            <!-- <div
                class="w-full float-end lg:w-[calc(100%-265px)] py-3 hidden lg:flex flex-row-reverse px-5 backdrop-blur-sm shadowHeader relative z-20">
                <div class="w-6/12 flex flex-row-reverse items-center">
                    <div class="relative hover_profile">
                        <div class="absolute left-0 pt-5 invisible opacity-0 transition-all duration-300">
                            <div class="w-[250px] rounded-xl  py-4 bg-white shadow__all__prof">
                                <div class="text-center px-2">
                                    
                                </div>
                                <div class="w-full h-px bg-gray-300 mt-4 "></div>
                                <ul class="rtl text-right ">
                                    <li
                                        class="hover:text-[#1B84FF] hover:bg-[#F1F1F4] mt-1 w-11/12 ml-auto mr-auto rounded-lg">
                                        <a href=""
                                            class="block w-full p-2">پروفایل من</a>
                                    </li>
                                    @if (!Auth::user()->email)
                                    <li
                                        class="hover:text-[#1B84FF] hover:bg-[#F1F1F4]  mt-1 w-11/12 ml-auto mr-auto rounded-lg">
                                        <a href=""
                                            class="block w-full p-2">تکمیل
                                            پروفایل</a>
                                    </li>
                                    @endif

                                </ul>
                                <div class="w-full h-px bg-gray-300 my-2 "></div>
                                <div class="rtl text-right ">

                                    <div
                                        class="hover:text-[#1B84FF] hover:bg-[#F1F1F4] flex flex-row justify-between mt-1 w-11/12 ml-auto mr-auto rounded-lg">
                                        <a href="" class="p-2 block w-full">خروج</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-6/12 flex justify-start">
                    <h3 class="text-2xl font-bold text-[#4B5675]">
                        <a href="">
                            داشبورد
                        </a>
                    </h3>
                </div>
            </div> -->
            <!-- <div
                class="flex lg:hidden flex-row justify-between items-center py-2 px-5 backdrop-blur-sm shadowHeader relative z-99">
                <div class="flex flex-col w-8 h-5 justify-between cursor-pointer"
                    onclick="hamburgerMenu('open', this)">
                    <span class="w-full h-0.5 bg-black transition-all duration-300"></span>
                    <span class="w-full h-0.5 bg-black transition-all duration-300"></span>
                    <span class="w-full h-0.5 bg-black transition-all duration-300"></span>
                </div>
                @if (!Auth::user()->main_image)
                <img src="{{ asset('assets/img/user.png') }}" alt="user__avatar" class="size-16 rounded-xl">
                @else
                <img src="{{ asset('storage/' . Auth::user()->main_image) }}" alt="user__picture"
                    class="size-16 rounded-xl">
                @endif
            </div> -->
            <!-- hamburger menu - بازطراحی شده شبیه دسکتاپ -->
            <div id="mobileMenu" class="w-full h-dvh fixed top-0 -right-full flex z-999 transition-all duration-500 backdrop-blur-sm">
                <div class="w-full h-full bg-black/50 absolute" onclick="hamburgerMenu('close', this)"></div>
                <div class="w-2/3 bg-(--caffe-gray-500) h-full p-4 flex flex-col overflow-y-auto mobile-menu-scroll absolute z-2" style="scrollbar-width: none;">
                    <div class="w-full bg-inherit relative flex justify-end" onclick="hamburgerMenu('close', this)">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-8 cursor-pointer bg-black/50 rounded-full p-1.5 hover:bg-black/70 transition-all" viewBox="0 0 384 512">
                            <path fill="white" d="M324.5 411.1c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6L214.6 256 347.1 123.5c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0L192 233.4 59.5 100.9c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L169.4 256 36.9 388.5c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0L192 278.6 324.5 411.1z" />
                        </svg>
                    </div>
                    <!-- پروفایل در منوی موبایل -->
                    <div class="flex flex-row items-center gap-2.5 py-3 px-2 hover:bg-gray-800 rounded-lg transition-all duration-300 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 448 512" fill="white">
                            <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                        </svg>
                        <a href="" class="block w-full text-white py-1 text-base font-medium">
                            پروفایل
                        </a>
                    </div>

                    <!-- لینک بازدید از سایت -->
                    <div class="flex flex-row items-center gap-2.5 py-3 px-2 hover:bg-gray-800 rounded-lg transition-all duration-300 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 576 512">
                            <path fill="white" d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                        </svg>
                        <a href="" class="block w-full text-white py-1 text-base font-medium">
                            بازدید از سایت
                        </a>
                    </div>

                    <!-- لینک‌های پروفایل -->

                    <div class="flex flex-row items-center gap-2.5 py-3 px-2 hover:bg-gray-800 rounded-lg transition-all duration-300 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 512 512" fill="white">
                            <path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 289c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l80 80c9.4 9.4 24.6 9.4 33.9 0l80-80c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0L288 321.9V168c0-13.3-10.7-24-24-24s-24 10.7-24 24V321.9l-49-49z" />
                        </svg>
                        <a href="" class="block w-full text-white py-1 text-base font-medium">
                            تکمیل پروفایل
                        </a>
                    </div>
                     <div class="mobile-menu-item">
                        <div class="flex justify-between flex-row-reverse cursor-pointer px-2 py-3 rounded-lg hover:bg-gray-800 transition-all duration-300 mobile-menu-header @if(Route::is('favorites.*')) bg-gray-700 @endif" onclick="toggleMobileSubmenu(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4 transition-all duration-200 @if(Route::is('favorites.*')) rotate-180 @endif" viewBox="0 0 448 512">
                                <path fill="white" d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z" />
                            </svg>
                            <div class="flex flex-row-reverse items-center gap-2">
                                <span class="text-white font-bold">علاقه مندی ها</span>
                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-5">
                                <path fill="white" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
                            </svg>
                            </div>
                        </div>
                        <ul class="mobile-submenu @if(Route::is('favorites.*')) open @endif pr-2">
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-4 rounded-sm @if(Route::is('favorites.list')) bg-gray-700 @endif">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="" class="text-white py-1 block text-sm">
                                    لیست علاقه مندی ها
                                </a>
                            </li>
                        </ul>
                    <!-- بخش مدیریت کاربران در موبایل -->
                      @can('admin')
                    <div class="mobile-menu-item">
                        <div class="flex justify-between flex-row-reverse cursor-pointer px-2 py-3 rounded-lg hover:bg-gray-800 transition-all duration-300 mobile-menu-header @if(Route::is('user.*') && !Route::is('user.profile') || Route::is('permission.*') || Route::is('role.*')) bg-gray-700 @endif" onclick="toggleMobileSubmenu(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4 transition-all duration-200 @if(Route::is('user.*') && !Route::is('user.profile') || Route::is('permission.*') || Route::is('role.*')) rotate-180 @endif" viewBox="0 0 448 512">
                                <path fill="white" d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z" />
                            </svg>
                            <div class="flex flex-row-reverse items-center gap-2">
                                <span class="text-white font-bold">مدیریت کاربران</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="size-5">
                                    <path fill="white" d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z" />
                                </svg>
                            </div>
                        </div>
                        <ul class="mobile-submenu @if(Route::is('user.*') && !Route::is('user.profile') || Route::is('permission.*') || Route::is('role.*')) open @endif pr-2">
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-4 rounded-sm @if(Route::is('user.list')) bg-gray-700 @endif">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="" class="text-white py-1 block text-sm">
                                    مشاهده همه کاربران
                                </a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-4 rounded-sm @if(Route::is('permission.create')) bg-gray-700 @endif">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="" class="text-white py-1 block text-sm">
                                    افزودن مجوز
                                </a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-4 rounded-sm @if(Route::is('permission.list')) bg-gray-700 @endif">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="" class="text-white py-1 block text-sm">
                                    همه مجوز ها
                                </a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-4 rounded-sm @if(Route::is('role.list')) bg-gray-700 @endif">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="" class="text-white py-1 block text-sm">
                                    همه نقش ها
                                </a>
                            </li>
                            <!-- <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-4 rounded-sm @if(Route::is('user.create')) bg-gray-700 @endif">-->
                            <!--    <span class="size-1 bg-white rounded-sm"></span>-->
                            <!--    <a href="" class="text-white py-1 block text-sm">-->
                            <!--        لیست نقش ها-->
                            <!--    </a>-->
                            <!--</li> -->

                        </ul>
                    </div>
                    <!-- بخش مدیریت منو در موبایل -->
                    <div class="mobile-menu-item">
                        <div class="flex justify-between flex-row-reverse cursor-pointer px-2 py-3 rounded-lg hover:bg-gray-800 transition-all duration-300 mobile-menu-header @if(Route::is('menu.*')) bg-gray-700 @endif" onclick="toggleMobileSubmenu(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4 transition-all duration-200 @if(Route::is('menu.*')) rotate-180 @endif" viewBox="0 0 448 512">
                                <path fill="white" d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z" />
                            </svg>
                            <div class="flex flex-row-reverse items-center gap-2">
                                <span class="text-white font-bold">مدیریت منو</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 512 512">
                                    <path fill="white" d="M384 48c8.8 0 16 7.2 16 16V448c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16H384zM96 0C60.7 0 32 28.7 32 64V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H96zM240 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128zm-32 32c-44.2 0-80 35.8-80 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16c0-44.2-35.8-80-80-80H208zM512 80c0-8.8-7.2-16-16-16s-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V80zM496 192c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm16 144c0-8.8-7.2-16-16-16s-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V336z" />
                                </svg>
                            </div>
                        </div>
                        <ul class="mobile-submenu @if(Route::is('menu.*')) open @endif pr-2">
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-4 rounded-sm @if(Route::is('menu.create')) bg-gray-700 @endif">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="" class="text-white py-1 block text-sm">
                                    مشاهده منو
                                </a>
                            </li>
                            <!-- <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-4 rounded-sm @if(Route::is('client.menu')) bg-gray-700 @endif">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="" class="text-white py-1 block text-sm">
                                    سمت کلاینت مشاهده منو
                                </a>
                            </li> -->
                        </ul>
                    </div>

                    <!-- بخش کیوآرکد در موبایل -->
                    <div class="mobile-menu-item">
                        <div class="flex justify-between flex-row-reverse cursor-pointer px-2 py-3 rounded-lg hover:bg-gray-800 transition-all duration-300 mobile-menu-header @if(Route::is('homeSetting.*')|| Route::is('aboutusSettings.*') || Route::is('contactusSettings.*') || Route::is('footerSetting.*')|| Route::is('commentSetting.*')) bg-gray-700 @endif" onclick="toggleMobileSubmenu(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4 transition-all duration-200 @if(Route::is('homeSetting.*') || Route::is('aboutusSettings.*') || Route::is('contactusSettings.*') || Route::is('footerSetting.*')|| Route::is('commentSetting.*')) rotate-180 @endif" viewBox="0 0 448 512">
                                <path fill="white" d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z" />
                            </svg>
                            <div class="flex flex-row-reverse items-center gap-2">
                                <span class="text-white font-bold">تنظیمات</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-6">
                                    <path fill="white" d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z" />
                                </svg>
                            </div>
                        </div>

                        <ul class="mobile-submenu @if(Route::is('homeSetting.*') || Route::is('aboutusSettings.*') ||Route::is('contactusSettings.*') || Route::is('footerSetting.*')|| Route::is('commentSetting.*')) open @endif pr-2">
                            <li
                                class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('aboutusSettings.aboutUsForm')) bg-gray-700 @endif">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="" class="text-white py-1 block">
                                    تنطیمات درباره ما
                                </a>
                            </li>
                            <li
                                class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('contactusSettings.contactUsForm')) bg-gray-700 @endif">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="" class="text-white py-1 block">
                                    تنطیمات ارتباط ما
                                </a>
                            </li>
                            <li
                                class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('footerSetting.show')) bg-gray-700 @endif">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="" class="text-white py-1 block">
                                    تنطیمات فوتر
                                </a>
                            </li>
                            <li
                                class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('commentSetting.show')) bg-gray-700 @endif">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="" class="text-white py-1 block">
                                    تنطیمات کامنت
                                </a>
                            </li>
                            <li
                                class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('homeSetting.mainBannerForm')) bg-gray-700 @endif">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="" class="text-white py-1 block">
                                    بنراصلی صفحه اول
                                </a>
                            </li>
                            <li
                                class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('homeSetting.videoSliderForm')) bg-gray-700 @endif">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('homeSetting.videoSliderForm') }}" class="text-white py-1 block">
                                    ویدیو صفحه اول
                                </a>
                            </li>
                            <li
                                class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('homeSetting.cartsForm')) bg-gray-700 @endif">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('homeSetting.cartsForm') }}" class="text-white py-1 block">
                                    کارتهای صفحه اول
                                </a>
                            </li>
                            <li
                                class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('homeSetting.imageSliderForm')) bg-gray-700 @endif">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="" class="text-white py-1 block">
                                    اسلایدر عکس صفحه اول
                                </a>
                            </li>
                            <li
                                class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('homeSetting.addressForm')) bg-gray-700 @endif">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="" class="text-white py-1 block">
                                    آدرس صفحه اول
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="mobile-menu-item">
                        <div class="flex justify-between flex-row-reverse cursor-pointer px-2 py-3 rounded-lg hover:bg-gray-800 transition-all duration-300 mobile-menu-header @if(Route::is('qrCode.*')) bg-gray-700 @endif" onclick="toggleMobileSubmenu(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4 transition-all duration-200 @if(Route::is('qrCode.*')) rotate-180 @endif" viewBox="0 0 448 512">
                                <path fill="white" d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z" />
                            </svg>
                            <div class="flex flex-row-reverse items-center gap-2">
                                <span class="text-white font-bold">کیوآرکد</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-6" viewBox="0 0 448 512">
                                    <path fill="white" d="M0 80C0 53.5 21.5 32 48 32h96c26.5 0 48 21.5 48 48v96c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V80zM64 96v64h64V96H64zM0 336c0-26.5 21.5-48 48-48h96c26.5 0 48 21.5 48 48v96c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V336zm64 16v64h64V352H64zM304 32h96c26.5 0 48 21.5 48 48v96c0 26.5-21.5 48-48 48H304c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48zm80 64H320v64h64V96zM256 304c0-8.8 7.2-16 16-16h64c8.8 0 16 7.2 16 16s7.2 16 16 16h32c8.8 0 16-7.2 16-16s7.2-16 16-16s16 7.2 16 16v96c0 8.8-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s-7.2-16-16-16s-16 7.2-16 16v64c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V304zM368 480a16 16 0 1 1 0-32 16 16 0 1 1 0 32zm64 0a16 16 0 1 1 0-32 16 16 0 1 1 0 32z" />
                                </svg>
                            </div>
                        </div>
                        <ul class="mobile-submenu @if(Route::is('qrCode.*')) open @endif pr-2">
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-4 rounded-sm @if(Route::is('qrCode.create')) bg-gray-700 @endif">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="" class="text-white py-1 block text-sm">
                                    ایجاد کیوآرکد
                                </a>
                            </li>
                            <li class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-4 rounded-sm @if(Route::is('qrCode.list')) bg-gray-700 @endif">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="" class="text-white py-1 block text-sm">
                                    لیست کیوآرکد
                                </a>
                            </li>
                        </ul>
                    </div>
                      @endcan

                    <!-- دکمه خروج در پایین -->
                    <div class="mt-auto ">
                        <div class="flex flex-row items-center gap-2.5 py-2 px-2 hover:bg-red-900/30 rounded-lg transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 512 512" fill="#ef4444">
                                <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9V320H192c-17.7 0-32-14.3-32-32V224c0-17.7 14.3-32 32-32H320V128c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96H96c-17.7 0-32 14.3-32 32V384c0 17.7 14.3 32 32 32h64c17.7 0 32 14.3 32 32s-14.3 32-32 32H96c-53 0-96-43-96-96V128C0 75 43 32 96 32h64c17.7 0 32 14.3 32 32s-14.3 32-32 32z" />
                            </svg>
                            <a href="" class="block w-full text-red-500 py-1 text-base font-medium">
                                خروج از حساب کاربری
                            </a>
                        </div>
                    </div>
                </div>

                <!-- قسمت نیمه شفاف برای بستن منو -->
            </div>
            <!-- hamburger menu end -->
        </header>
        <div class="w-full h-dvh lg:w-[calc(100%-265px)] float-end pt-20 lg:px-5 overflow-y-auto px-5 relative "
            style="scrollbar-width:none;">
            @yield('content')
        </div>
    </div>

    <script src="{{ asset('assets/js/userPanel.js') }}"></script>

    <script>
        function hamburgerMenu(action, element) {
            const menu = document.getElementById('mobileMenu');
            if (action === 'open') {
                menu.classList.remove('-right-full');
                menu.classList.add('right-0');
                document.body.style.overflow = 'hidden';
            } else {
                menu.classList.remove('right-0');
                menu.classList.add('-right-full');
                document.body.style.overflow = 'auto';
            }
        }


        function toggleMobileSubmenu(headerElement) {
            const submenu = headerElement.nextElementSibling;
            const arrowIcon = headerElement.querySelector('svg:first-child');

            submenu.classList.toggle('open');
            arrowIcon.classList.toggle('rotate');
        }


        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuLinks = document.querySelectorAll('#mobileMenu a');
            mobileMenuLinks.forEach(link => {
                link.addEventListener('click', function() {
                    setTimeout(() => {
                        hamburgerMenu('close', null);
                    }, 200);
                });
            });
        });
    </script>

    @yield('ajax')

</body>

</html>