<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('assets/js/tailwind.js') }}"></script>
    <title>Document</title>

</head>
<style>
    :root {
  /* ==========================================
     BACKGROUNDS
  ========================================== */

  --bg-primary: #F5F2F2;
  --bg-secondary: #F6F4F4;
  --bg-cream: #F3EFEC;
  --bg-white: #FFFFFF;

  /* ==========================================
     PRIMARY BRAND COLORS
  ========================================== */

  --primary-blue: #1E63FF;
  --primary-blue-dark: #2F5EFF;
  --primary-blue-light: #1E8FFF;

  --primary-violet: #5D4BFF;
  --primary-purple: #6D3DFF;

  /* ==========================================
     LOGO GRADIENT
  ========================================== */

  --logo-gradient-start: #1E8FFF;
  --logo-gradient-middle: #2E6FFF;
  --logo-gradient-end: #7344FF;

  /* ==========================================
     TYPOGRAPHY
  ========================================== */

  --text-heading: #061B4D;
  --text-title: #10245A;
  --text-body: #59627A;
  --text-muted: #7C859B;
  --text-light: #A1A8B8;
  --text-white: #FFFFFF;

  /* ==========================================
     DECORATIVE ELEMENTS
  ========================================== */

  --line-primary: #1F5FFF;
  --line-secondary: #B8C7FF;
  --dot-primary: #1E63FF;

  /* ==========================================
     BORDERS
  ========================================== */

  --border-light: #E7EAF3;
  --border-primary: #D9E2FF;
  --border-subtle: rgba(31, 95, 255, 0.12);

  /* ==========================================
     SHADOWS
  ========================================== */

  --shadow-blue-soft: rgba(40, 70, 255, 0.04);
  --shadow-blue-medium: rgba(40, 70, 255, 0.08);
  --shadow-blue-strong: rgba(40, 70, 255, 0.12);

  /* ==========================================
     GRADIENTS
  ========================================== */

  --gradient-brand:
    linear-gradient(
      135deg,
      #1E8FFF 0%,
      #2E6FFF 50%,
      #7344FF 100%
    );

  --gradient-blue:
    linear-gradient(
      135deg,
      #1E63FF 0%,
      #2F5EFF 100%
    );

  --gradient-accent:
    linear-gradient(
      135deg,
      #1E63FF 0%,
      #5D4BFF 50%,
      #6D3DFF 100%
    );

  /* ==========================================
     OPACITY VARIANTS
  ========================================== */

  --blue-5: rgba(30, 99, 255, 0.05);
  --blue-10: rgba(30, 99, 255, 0.10);
  --blue-20: rgba(30, 99, 255, 0.20);
  --blue-30: rgba(30, 99, 255, 0.30);
  --blue-40: rgba(30, 99, 255, 0.40);

  /* ==========================================
     HERO SECTION COLORS
  ========================================== */

  --hero-bg: #F5F2F2;
  --hero-line: #1F5FFF;
  --hero-dots: #1E63FF;
  --hero-logo-blue: #1E8FFF;
  --hero-logo-purple: #7344FF;
  --hero-heading: #061B4D;
  --hero-description: #59627A;
}
</style>
<body class="bg-[#F9FAFE] py-10">
    <div class="w-full flex justify-center">
        <div class="w-[90%] flex flex-col items-center text-center gap-2">
            <h1 class="text-[#26314A] text-[30px] font-bold">مقالات</h1>
            <h4 class="text-[15px] flex flex-row gap-1">
                <span class="text-[#2D68E8]">
                    خانه
                </span>
                <span>/</span>
                مقالات
            </h4>
            <p class="text-[#7A8191] text-[12px]">جدیدترین مقالات و آموزش‌های تخصصی در حوزه طراحی سایت،کسب و کار اینترنتی و امنیت وب</p>
        </div>
    </div>

    <div class="w-full flex justify-center mt-5">
        <div class="lg:w-[85%] max-lg:w-[95%] w-[90%] flex justify-center gap-4">
            <div class="w-[25%] flex flex-col gap-4 max-md:hidden">
                <div class="bg-[#ffffff] shadow-[0_4px_6px_rgba(0,0,0,0.1)] rounded-[10px] py-3 px-4 flex flex-col gap-2">
                    <span class="text-[18px] font-bold">دسته بندی ها</span>
                    <ul>
                        <div class="flex justify-between border-b-1 border-[#E0E0E0] py-2">
                            <li class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 576 512"><path d="M226.5 168.8L287.9 42.3l61.4 126.5c4.6 9.5 13.6 16.1 24.1 17.7l137.4 20.3-99.8 98.8c-7.4 7.3-10.8 17.8-9 28.1l23.5 139.5L303 407.7c-9.4-5-20.7-5-30.2 0L150.2 473.2l23.5-139.5c1.7-10.3-1.6-20.7-9-28.1L65 206.8l137.4-20.3c10.5-1.5 19.5-8.2 24.1-17.7zM424.9 509.1c8.1 4.3 17.9 3.7 25.3-1.7s11.2-14.5 9.7-23.5L433.6 328.4 544.8 218.2c6.5-6.4 8.7-15.9 5.9-24.5s-10.3-14.9-19.3-16.3L378.1 154.8 309.5 13.5C305.5 5.2 297.1 0 287.9 0s-17.6 5.2-21.6 13.5L197.7 154.8 44.5 177.5c-9 1.3-16.5 7.6-19.3 16.3s-.5 18.1 5.9 24.5L142.2 328.4 116 483.9c-1.5 9 2.2 18.1 9.7 23.5s17.3 6 25.3 1.7l137-73.2 137 73.2z" fill="#1F5FFF"/></svg>
                                طراحی سایت
                            </li>
                            (12)
                        </div>

                        <div class="flex justify-between border-b-1 border-[#E0E0E0] py-2">
                            <li class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 576 512"><path d="M226.5 168.8L287.9 42.3l61.4 126.5c4.6 9.5 13.6 16.1 24.1 17.7l137.4 20.3-99.8 98.8c-7.4 7.3-10.8 17.8-9 28.1l23.5 139.5L303 407.7c-9.4-5-20.7-5-30.2 0L150.2 473.2l23.5-139.5c1.7-10.3-1.6-20.7-9-28.1L65 206.8l137.4-20.3c10.5-1.5 19.5-8.2 24.1-17.7zM424.9 509.1c8.1 4.3 17.9 3.7 25.3-1.7s11.2-14.5 9.7-23.5L433.6 328.4 544.8 218.2c6.5-6.4 8.7-15.9 5.9-24.5s-10.3-14.9-19.3-16.3L378.1 154.8 309.5 13.5C305.5 5.2 297.1 0 287.9 0s-17.6 5.2-21.6 13.5L197.7 154.8 44.5 177.5c-9 1.3-16.5 7.6-19.3 16.3s-.5 18.1 5.9 24.5L142.2 328.4 116 483.9c-1.5 9 2.2 18.1 9.7 23.5s17.3 6 25.3 1.7l137-73.2 137 73.2z" fill="#1F5FFF"/></svg>
                                امنیت وب
                            </li>
                            (8)
                        </div>

                        <div class="flex justify-between border-b-1 border-[#E0E0E0] py-2">
                            <li class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 576 512"><path d="M226.5 168.8L287.9 42.3l61.4 126.5c4.6 9.5 13.6 16.1 24.1 17.7l137.4 20.3-99.8 98.8c-7.4 7.3-10.8 17.8-9 28.1l23.5 139.5L303 407.7c-9.4-5-20.7-5-30.2 0L150.2 473.2l23.5-139.5c1.7-10.3-1.6-20.7-9-28.1L65 206.8l137.4-20.3c10.5-1.5 19.5-8.2 24.1-17.7zM424.9 509.1c8.1 4.3 17.9 3.7 25.3-1.7s11.2-14.5 9.7-23.5L433.6 328.4 544.8 218.2c6.5-6.4 8.7-15.9 5.9-24.5s-10.3-14.9-19.3-16.3L378.1 154.8 309.5 13.5C305.5 5.2 297.1 0 287.9 0s-17.6 5.2-21.6 13.5L197.7 154.8 44.5 177.5c-9 1.3-16.5 7.6-19.3 16.3s-.5 18.1 5.9 24.5L142.2 328.4 116 483.9c-1.5 9 2.2 18.1 9.7 23.5s17.3 6 25.3 1.7l137-73.2 137 73.2z" fill="#1F5FFF"/></svg>
                                کسب و کار اینترنتی
                            </li>
                            (11)
                        </div>

                        <div class="flex justify-between border-b-1 border-[#E0E0E0] py-2">
                            <li class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 576 512"><path d="M226.5 168.8L287.9 42.3l61.4 126.5c4.6 9.5 13.6 16.1 24.1 17.7l137.4 20.3-99.8 98.8c-7.4 7.3-10.8 17.8-9 28.1l23.5 139.5L303 407.7c-9.4-5-20.7-5-30.2 0L150.2 473.2l23.5-139.5c1.7-10.3-1.6-20.7-9-28.1L65 206.8l137.4-20.3c10.5-1.5 19.5-8.2 24.1-17.7zM424.9 509.1c8.1 4.3 17.9 3.7 25.3-1.7s11.2-14.5 9.7-23.5L433.6 328.4 544.8 218.2c6.5-6.4 8.7-15.9 5.9-24.5s-10.3-14.9-19.3-16.3L378.1 154.8 309.5 13.5C305.5 5.2 297.1 0 287.9 0s-17.6 5.2-21.6 13.5L197.7 154.8 44.5 177.5c-9 1.3-16.5 7.6-19.3 16.3s-.5 18.1 5.9 24.5L142.2 328.4 116 483.9c-1.5 9 2.2 18.1 9.7 23.5s17.3 6 25.3 1.7l137-73.2 137 73.2z" fill="#1F5FFF"/></svg>
                                رشد کسب و کار
                            </li>
                            (9)
                        </div>

                        <div class="flex justify-between border-b-1 border-[#E0E0E0] py-2">
                            <li class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 576 512"><path d="M226.5 168.8L287.9 42.3l61.4 126.5c4.6 9.5 13.6 16.1 24.1 17.7l137.4 20.3-99.8 98.8c-7.4 7.3-10.8 17.8-9 28.1l23.5 139.5L303 407.7c-9.4-5-20.7-5-30.2 0L150.2 473.2l23.5-139.5c1.7-10.3-1.6-20.7-9-28.1L65 206.8l137.4-20.3c10.5-1.5 19.5-8.2 24.1-17.7zM424.9 509.1c8.1 4.3 17.9 3.7 25.3-1.7s11.2-14.5 9.7-23.5L433.6 328.4 544.8 218.2c6.5-6.4 8.7-15.9 5.9-24.5s-10.3-14.9-19.3-16.3L378.1 154.8 309.5 13.5C305.5 5.2 297.1 0 287.9 0s-17.6 5.2-21.6 13.5L197.7 154.8 44.5 177.5c-9 1.3-16.5 7.6-19.3 16.3s-.5 18.1 5.9 24.5L142.2 328.4 116 483.9c-1.5 9 2.2 18.1 9.7 23.5s17.3 6 25.3 1.7l137-73.2 137 73.2z" fill="#1F5FFF"/></svg>
                                سئو و بهینه سازی
                            </li>
                            (12)
                        </div>

                        <div class="flex justify-between py-2">
                            <li class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 576 512"><path d="M226.5 168.8L287.9 42.3l61.4 126.5c4.6 9.5 13.6 16.1 24.1 17.7l137.4 20.3-99.8 98.8c-7.4 7.3-10.8 17.8-9 28.1l23.5 139.5L303 407.7c-9.4-5-20.7-5-30.2 0L150.2 473.2l23.5-139.5c1.7-10.3-1.6-20.7-9-28.1L65 206.8l137.4-20.3c10.5-1.5 19.5-8.2 24.1-17.7zM424.9 509.1c8.1 4.3 17.9 3.7 25.3-1.7s11.2-14.5 9.7-23.5L433.6 328.4 544.8 218.2c6.5-6.4 8.7-15.9 5.9-24.5s-10.3-14.9-19.3-16.3L378.1 154.8 309.5 13.5C305.5 5.2 297.1 0 287.9 0s-17.6 5.2-21.6 13.5L197.7 154.8 44.5 177.5c-9 1.3-16.5 7.6-19.3 16.3s-.5 18.1 5.9 24.5L142.2 328.4 116 483.9c-1.5 9 2.2 18.1 9.7 23.5s17.3 6 25.3 1.7l137-73.2 137 73.2z" fill="#1F5FFF"/></svg>
                                آموزش و نکات
                            </li>
                            (7)
                        </div>
                    </ul>
                </div>

                <div class="bg-[#ffffff] shadow-[0_4px_6px_rgba(0,0,0,0.1)] rounded-[10px] py-3 px-4 flex flex-col gap-2">
                    <span class="text-[18px] font-bold">محبوب ترین مقالات</span>
                    <ul class="border-b-1 border-[#E0E0E0] pb-1">
                        <div class="flex justify-between gap-2 py-2">
                            <div class="bg-[#F1F4FD] p-2 size-14 rounded-[10px]">
                                <img class="w-15 h-10" src="./img/file_000000003fe081f48869e4a33a92b781.png" alt="">
                            </div>
                            <li class="flex flex-col gap-1 text-[13px] font-bold">
                                10 نکته طلایی در طراحی سایت حرفه ای
                                <span class="text-[9px] text-[#7A8191]">10 دقیقه مطالعه</span>
                            </li>
                        </div>

                        <div class="flex justify-between gap-2 py-2">
                            <div class="bg-[#F1F4FD] p-2 size-14 rounded-[10px]">
                                <img class="w-15 h-10" src="./img/file_000000003fe081f48869e4a33a92b781.png" alt="">
                            </div>
                            <li class="flex flex-col gap-1 text-[13px] font-bold">
                                10 نکته طلایی در طراحی سایت حرفه ای
                                <span class="text-[9px] text-[#7A8191]">10 دقیقه مطالعه</span>
                            </li>
                        </div>

                        <div class="flex justify-between gap-2 py-2">
                            <div class="bg-[#F1F4FD] p-2 size-14 rounded-[10px]">
                                <img class="w-15 h-10" src="./img/file_000000003fe081f48869e4a33a92b781.png" alt="">
                            </div>
                            <li class="flex flex-col gap-1 text-[13px] font-bold">
                                10 نکته طلایی در طراحی سایت حرفه ای
                                <span class="text-[9px] text-[#7A8191]">10 دقیقه مطالعه</span>
                            </li>
                        </div>
                    </ul>
                    <div class="text-[#1F5FFF] text-center">
                        مشاهده همه مقالات
                    </div>

                </div>
                
            </div>
            <div class="w-[75%] flex flex-col gap-3 max-md:hidden">
                <div class="w-[100%] shadow-[0_4px_6px_rgba(0,0,0,0.1)] bg-[#ffffff] rounded-[10px] flex justify-between items-center gap-10 py-3 px-6">
                    <form action="" method="post" class="flex w-full items-center">
                        <input type="hidden">                                
                        <button class="cursor-pointer ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="gray" stroke="red" width="14" hight="14" viewBox="0 0 512 512">
                                <path d="M368 208A160 160 0 1 0 48 208a160 160 0 1 0 320 0zM337.1 371.1C301.7 399.2 256.8 416 208 416C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208c0 48.8-16.8 93.7-44.9 129.1L505 471c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L337.1 371.1z">
                                </path>
                            </svg>
                        </button>
                        <input type="text" placeholder="جستجوی مقاله..." class="outline-none w-full text-[12px] font-bold pr-2" required="">
                            <div class="w-[20%] flex gap-2 items-center justify-center bg-[#ffffff] border-1 border-[#E0E0E0] py-2 px-6 rounded-[25px] text-[#26314A] text-[13px] text-nowrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 512 512"><path d="M0 416c0 8.8 7.2 16 16 16l65.6 0c7.4 36.5 39.7 64 78.4 64s71-27.5 78.4-64L496 432c8.8 0 16-7.2 16-16s-7.2-16-16-16l-257.6 0c-7.4-36.5-39.7-64-78.4-64s-71 27.5-78.4 64L16 400c-8.8 0-16 7.2-16 16zm112 0a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zM304 256a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm48-80c-38.7 0-71 27.5-78.4 64L16 240c-8.8 0-16 7.2-16 16s7.2 16 16 16l257.6 0c7.4 36.5 39.7 64 78.4 64s71-27.5 78.4-64l65.6 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-65.6 0c-7.4-36.5-39.7-64-78.4-64zM192 144a48 48 0 1 1 0-96 48 48 0 1 1 0 96zm78.4-64C263 43.5 230.7 16 192 16s-71 27.5-78.4 64L16 80C7.2 80 0 87.2 0 96s7.2 16 16 16l97.6 0c7.4 36.5 39.7 64 78.4 64s71-27.5 78.4-64L496 112c8.8 0 16-7.2 16-16s-7.2-16-16-16L270.4 80z" fill="#1F5FFF"/></svg>
                                دسته بندی ها
                            </div>
                    </form>
                </div>

                <div class="w-[100%] grid grid-cols-3 gap-3">
                    <div class="w-full shadow-[0_4px_6px_rgba(0,0,0,0.1)] bg-[#ffffff] rounded-[8px] p-4 h-70 max-lg:h-77 flex flex-col gap-3">
                        <div class="bg-[#F1F4FD] rounded-[8px] h-[36%]">
                            <img class="h-full w-full" src="./img/file_000000003fe081f48869e4a33a92b781.png" alt="">
                        </div>
                        <div class="flex flex-col text-center items-center gap-3">
                            <div class="bg-[#8AADF4] text-[9px] font-bold w-fit py-1 px-3 rounded-[25px]">طراحی سایت</div>
                            <div class="text-[15px] text-[#26314A] font-bold">10نکته طلایی در طراحی سایت حرفه ای</div>
                            <p class="text-[#7A8191] text-[11px]">با رعایت این نکات می توانید سایتی طراحی کنید که هم کاربر پسند باشد و هم در گوگل بدرخشد.</p>
                            <div class="flex max-lg:flex-col max-lg:gap-1 lg:gap-5">
                                <div class="flex gap-3">
                                    <div class="text-[8px] text-[#7A8191] font-bold flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 448 512"><path d="M112 0c8.8 0 16 7.2 16 16V64H320V16c0-8.8 7.2-16 16-16s16 7.2 16 16V64h32c35.3 0 64 28.7 64 64v32 32V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V192 160 128C0 92.7 28.7 64 64 64H96V16c0-8.8 7.2-16 16-16zM416 192H32V448c0 17.7 14.3 32 32 32H384c17.7 0 32-14.3 32-32V192zM384 96H64c-17.7 0-32 14.3-32 32v32H416V128c0-17.7-14.3-32-32-32z" fill="#7A8191"/></svg>
                                        1403/03/20
                                    </div>
                                    <div class="text-[8px] text-[#7A8191] font-bold text-nowrap flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 512 512"><path d="M480 256A224 224 0 1 1 32 256a224 224 0 1 1 448 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM240 112V256c0 5.3 2.7 10.3 7.1 13.3l96 64c7.4 4.9 17.3 2.9 22.2-4.4s2.9-17.3-4.4-22.2L272 247.4V112c0-8.8-7.2-16-16-16s-16 7.2-16 16z" fill="#7A8191"/></svg>
                                        5 دقیقه مطالعه
                                    </div>
                                </div>
                                <div class="text-[#2D68E8] text-[10px] font-bold text-nowrap flex items-center">
                                    مطالعه بیشتر
                                    <svg xmlns="http://www.w3.org/2000/svg" class="rotate-90" width="9" height="9" fill="#000000" viewBox="0 0 256 256">
                                        <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z" fill="#2D68E8"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full shadow-[0_4px_6px_rgba(0,0,0,0.1)] bg-[#ffffff] rounded-[8px] p-4 h-70 max-lg:h-77 flex flex-col gap-3">
                        <div class="bg-[#F1F4FD] rounded-[8px] h-[36%]">
                            <img class="h-full w-full" src="./img/file_000000003fe081f48869e4a33a92b781.png" alt="">
                        </div>
                        <div class="flex flex-col text-center items-center gap-3">
                            <div class="bg-[#8AADF4] text-[9px] font-bold w-fit py-1 px-3 rounded-[25px]">طراحی سایت</div>
                            <div class="text-[15px] text-[#26314A] font-bold">10نکته طلایی در طراحی سایت حرفه ای</div>
                            <p class="text-[#7A8191] text-[11px]">با رعایت این نکات می توانید سایتی طراحی کنید که هم کاربر پسند باشد و هم در گوگل بدرخشد.</p>
                            <div class="flex max-lg:flex-col max-lg:gap-1 lg:gap-5">
                                <div class="flex gap-3">
                                    <div class="text-[8px] text-[#7A8191] font-bold flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 448 512"><path d="M112 0c8.8 0 16 7.2 16 16V64H320V16c0-8.8 7.2-16 16-16s16 7.2 16 16V64h32c35.3 0 64 28.7 64 64v32 32V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V192 160 128C0 92.7 28.7 64 64 64H96V16c0-8.8 7.2-16 16-16zM416 192H32V448c0 17.7 14.3 32 32 32H384c17.7 0 32-14.3 32-32V192zM384 96H64c-17.7 0-32 14.3-32 32v32H416V128c0-17.7-14.3-32-32-32z" fill="#7A8191"/></svg>
                                        1403/03/20
                                    </div>
                                    <div class="text-[8px] text-[#7A8191] font-bold text-nowrap flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 512 512"><path d="M480 256A224 224 0 1 1 32 256a224 224 0 1 1 448 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM240 112V256c0 5.3 2.7 10.3 7.1 13.3l96 64c7.4 4.9 17.3 2.9 22.2-4.4s2.9-17.3-4.4-22.2L272 247.4V112c0-8.8-7.2-16-16-16s-16 7.2-16 16z" fill="#7A8191"/></svg>
                                        5 دقیقه مطالعه
                                    </div>
                                </div>
                                <div class="text-[#2D68E8] text-[10px] font-bold text-nowrap flex items-center">
                                    مطالعه بیشتر
                                    <svg xmlns="http://www.w3.org/2000/svg" class="rotate-90" width="9" height="9" fill="#000000" viewBox="0 0 256 256">
                                        <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z" fill="#2D68E8"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full shadow-[0_4px_6px_rgba(0,0,0,0.1)] bg-[#ffffff] rounded-[8px] p-4 h-70 max-lg:h-77 flex flex-col gap-3">
                        <div class="bg-[#F1F4FD] rounded-[8px] h-[36%]">
                            <img class="h-full w-full" src="./img/file_000000003fe081f48869e4a33a92b781.png" alt="">
                        </div>
                        <div class="flex flex-col text-center items-center gap-3">
                            <div class="bg-[#8AADF4] text-[9px] font-bold w-fit py-1 px-3 rounded-[25px]">طراحی سایت</div>
                            <div class="text-[15px] text-[#26314A] font-bold">10نکته طلایی در طراحی سایت حرفه ای</div>
                            <p class="text-[#7A8191] text-[11px]">با رعایت این نکات می توانید سایتی طراحی کنید که هم کاربر پسند باشد و هم در گوگل بدرخشد.</p>
                            <div class="flex max-lg:flex-col max-lg:gap-1 lg:gap-5">
                                <div class="flex gap-3">
                                    <div class="text-[8px] text-[#7A8191] font-bold flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 448 512"><path d="M112 0c8.8 0 16 7.2 16 16V64H320V16c0-8.8 7.2-16 16-16s16 7.2 16 16V64h32c35.3 0 64 28.7 64 64v32 32V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V192 160 128C0 92.7 28.7 64 64 64H96V16c0-8.8 7.2-16 16-16zM416 192H32V448c0 17.7 14.3 32 32 32H384c17.7 0 32-14.3 32-32V192zM384 96H64c-17.7 0-32 14.3-32 32v32H416V128c0-17.7-14.3-32-32-32z" fill="#7A8191"/></svg>
                                        1403/03/20
                                    </div>
                                    <div class="text-[8px] text-[#7A8191] font-bold text-nowrap flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 512 512"><path d="M480 256A224 224 0 1 1 32 256a224 224 0 1 1 448 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM240 112V256c0 5.3 2.7 10.3 7.1 13.3l96 64c7.4 4.9 17.3 2.9 22.2-4.4s2.9-17.3-4.4-22.2L272 247.4V112c0-8.8-7.2-16-16-16s-16 7.2-16 16z" fill="#7A8191"/></svg>
                                        5 دقیقه مطالعه
                                    </div>
                                </div>
                                <div class="text-[#2D68E8] text-[10px] font-bold text-nowrap flex items-center">
                                    مطالعه بیشتر
                                    <svg xmlns="http://www.w3.org/2000/svg" class="rotate-90" width="9" height="9" fill="#000000" viewBox="0 0 256 256">
                                        <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z" fill="#2D68E8"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full shadow-[0_4px_6px_rgba(0,0,0,0.1)] bg-[#ffffff] rounded-[8px] p-4 h-70 max-lg:h-77 flex flex-col gap-3">
                        <div class="bg-[#F1F4FD] rounded-[8px] h-[36%]">
                            <img class="h-full w-full" src="./img/file_000000003fe081f48869e4a33a92b781.png" alt="">
                        </div>
                        <div class="flex flex-col text-center items-center gap-3">
                            <div class="bg-[#8AADF4] text-[9px] font-bold w-fit py-1 px-3 rounded-[25px]">طراحی سایت</div>
                            <div class="text-[15px] text-[#26314A] font-bold">10نکته طلایی در طراحی سایت حرفه ای</div>
                            <p class="text-[#7A8191] text-[11px]">با رعایت این نکات می توانید سایتی طراحی کنید که هم کاربر پسند باشد و هم در گوگل بدرخشد.</p>
                            <div class="flex max-lg:flex-col max-lg:gap-1 lg:gap-5">
                                <div class="flex gap-3">
                                    <div class="text-[8px] text-[#7A8191] font-bold flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 448 512"><path d="M112 0c8.8 0 16 7.2 16 16V64H320V16c0-8.8 7.2-16 16-16s16 7.2 16 16V64h32c35.3 0 64 28.7 64 64v32 32V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V192 160 128C0 92.7 28.7 64 64 64H96V16c0-8.8 7.2-16 16-16zM416 192H32V448c0 17.7 14.3 32 32 32H384c17.7 0 32-14.3 32-32V192zM384 96H64c-17.7 0-32 14.3-32 32v32H416V128c0-17.7-14.3-32-32-32z" fill="#7A8191"/></svg>
                                        1403/03/20
                                    </div>
                                    <div class="text-[8px] text-[#7A8191] font-bold text-nowrap flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 512 512"><path d="M480 256A224 224 0 1 1 32 256a224 224 0 1 1 448 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM240 112V256c0 5.3 2.7 10.3 7.1 13.3l96 64c7.4 4.9 17.3 2.9 22.2-4.4s2.9-17.3-4.4-22.2L272 247.4V112c0-8.8-7.2-16-16-16s-16 7.2-16 16z" fill="#7A8191"/></svg>
                                        5 دقیقه مطالعه
                                    </div>
                                </div>
                                <div class="text-[#2D68E8] text-[10px] font-bold text-nowrap flex items-center">
                                    مطالعه بیشتر
                                    <svg xmlns="http://www.w3.org/2000/svg" class="rotate-90" width="9" height="9" fill="#000000" viewBox="0 0 256 256">
                                        <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z" fill="#2D68E8"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full shadow-[0_4px_6px_rgba(0,0,0,0.1)] bg-[#ffffff] rounded-[8px] p-4 h-70 max-lg:h-77 flex flex-col gap-3">
                        <div class="bg-[#F1F4FD] rounded-[8px] h-[36%]">
                            <img class="h-full w-full" src="./img/file_000000003fe081f48869e4a33a92b781.png" alt="">
                        </div>
                        <div class="flex flex-col text-center items-center gap-3">
                            <div class="bg-[#8AADF4] text-[9px] font-bold w-fit py-1 px-3 rounded-[25px]">طراحی سایت</div>
                            <div class="text-[15px] text-[#26314A] font-bold">10نکته طلایی در طراحی سایت حرفه ای</div>
                            <p class="text-[#7A8191] text-[11px]">با رعایت این نکات می توانید سایتی طراحی کنید که هم کاربر پسند باشد و هم در گوگل بدرخشد.</p>
                            <div class="flex max-lg:flex-col max-lg:gap-1 lg:gap-5">
                                <div class="flex gap-3">
                                    <div class="text-[8px] text-[#7A8191] font-bold flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 448 512"><path d="M112 0c8.8 0 16 7.2 16 16V64H320V16c0-8.8 7.2-16 16-16s16 7.2 16 16V64h32c35.3 0 64 28.7 64 64v32 32V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V192 160 128C0 92.7 28.7 64 64 64H96V16c0-8.8 7.2-16 16-16zM416 192H32V448c0 17.7 14.3 32 32 32H384c17.7 0 32-14.3 32-32V192zM384 96H64c-17.7 0-32 14.3-32 32v32H416V128c0-17.7-14.3-32-32-32z" fill="#7A8191"/></svg>
                                        1403/03/20
                                    </div>
                                    <div class="text-[8px] text-[#7A8191] font-bold text-nowrap flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 512 512"><path d="M480 256A224 224 0 1 1 32 256a224 224 0 1 1 448 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM240 112V256c0 5.3 2.7 10.3 7.1 13.3l96 64c7.4 4.9 17.3 2.9 22.2-4.4s2.9-17.3-4.4-22.2L272 247.4V112c0-8.8-7.2-16-16-16s-16 7.2-16 16z" fill="#7A8191"/></svg>
                                        5 دقیقه مطالعه
                                    </div>
                                </div>
                                <div class="text-[#2D68E8] text-[10px] font-bold text-nowrap flex items-center">
                                    مطالعه بیشتر
                                    <svg xmlns="http://www.w3.org/2000/svg" class="rotate-90" width="9" height="9" fill="#000000" viewBox="0 0 256 256">
                                        <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z" fill="#2D68E8"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full shadow-[0_4px_6px_rgba(0,0,0,0.1)] bg-[#ffffff] rounded-[8px] p-4 h-70 max-lg:h-77 flex flex-col gap-3">
                        <div class="bg-[#F1F4FD] rounded-[8px] h-[36%]">
                            <img class="h-full w-full" src="./img/file_000000003fe081f48869e4a33a92b781.png" alt="">
                        </div>
                        <div class="flex flex-col text-center items-center gap-3">
                            <div class="bg-[#8AADF4] text-[9px] font-bold w-fit py-1 px-3 rounded-[25px]">طراحی سایت</div>
                            <div class="text-[15px] text-[#26314A] font-bold">10نکته طلایی در طراحی سایت حرفه ای</div>
                            <p class="text-[#7A8191] text-[11px]">با رعایت این نکات می توانید سایتی طراحی کنید که هم کاربر پسند باشد و هم در گوگل بدرخشد.</p>
                            <div class="flex max-lg:flex-col max-lg:gap-1 lg:gap-5">
                                <div class="flex gap-3">
                                    <div class="text-[8px] text-[#7A8191] font-bold flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 448 512"><path d="M112 0c8.8 0 16 7.2 16 16V64H320V16c0-8.8 7.2-16 16-16s16 7.2 16 16V64h32c35.3 0 64 28.7 64 64v32 32V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V192 160 128C0 92.7 28.7 64 64 64H96V16c0-8.8 7.2-16 16-16zM416 192H32V448c0 17.7 14.3 32 32 32H384c17.7 0 32-14.3 32-32V192zM384 96H64c-17.7 0-32 14.3-32 32v32H416V128c0-17.7-14.3-32-32-32z" fill="#7A8191"/></svg>
                                        1403/03/20
                                    </div>
                                    <div class="text-[8px] text-[#7A8191] font-bold text-nowrap flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 512 512"><path d="M480 256A224 224 0 1 1 32 256a224 224 0 1 1 448 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM240 112V256c0 5.3 2.7 10.3 7.1 13.3l96 64c7.4 4.9 17.3 2.9 22.2-4.4s2.9-17.3-4.4-22.2L272 247.4V112c0-8.8-7.2-16-16-16s-16 7.2-16 16z" fill="#7A8191"/></svg>
                                        5 دقیقه مطالعه
                                    </div>
                                </div>
                                <div class="text-[#2D68E8] text-[10px] font-bold text-nowrap flex items-center">
                                    مطالعه بیشتر
                                    <svg xmlns="http://www.w3.org/2000/svg" class="rotate-90" width="9" height="9" fill="#000000" viewBox="0 0 256 256">
                                        <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z" fill="#2D68E8"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>

            <div class="hidden w-[90%] max-md:flex flex-col gap-4">
                <div class="w-full flex gap-3">
                    <div class="w-[35%] flex gap-2 items-center bg-[#ffffff] border-1 border-[#E0E0E0] py-[3px] px-3 rounded-[5px] text-[#26314A] text-[13px] text-nowrap">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 512 512"><path d="M0 416c0 8.8 7.2 16 16 16l65.6 0c7.4 36.5 39.7 64 78.4 64s71-27.5 78.4-64L496 432c8.8 0 16-7.2 16-16s-7.2-16-16-16l-257.6 0c-7.4-36.5-39.7-64-78.4-64s-71 27.5-78.4 64L16 400c-8.8 0-16 7.2-16 16zm112 0a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zM304 256a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm48-80c-38.7 0-71 27.5-78.4 64L16 240c-8.8 0-16 7.2-16 16s7.2 16 16 16l257.6 0c7.4 36.5 39.7 64 78.4 64s71-27.5 78.4-64l65.6 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-65.6 0c-7.4-36.5-39.7-64-78.4-64zM192 144a48 48 0 1 1 0-96 48 48 0 1 1 0 96zm78.4-64C263 43.5 230.7 16 192 16s-71 27.5-78.4 64L16 80C7.2 80 0 87.2 0 96s7.2 16 16 16l97.6 0c7.4 36.5 39.7 64 78.4 64s71-27.5 78.4-64L496 112c8.8 0 16-7.2 16-16s-7.2-16-16-16L270.4 80z" fill="#26314A"/></svg>
                        دسته بندی ها
                    </div>

                    <div class="border-1 w-[65%] border-[#E0E0E0] bg-[#ffffff] rounded-[25px] flex justify-between items-center gap-10 py-[3px] px-5">
                        <form action="" method="post" class="flex w-full items-center">
                            <input type="hidden">                                
                            <input type="text" placeholder="جستجوی مقاله..." class="outline-none w-full text-[12px] font-bold pr-6" required="">
                            <button class="cursor-pointer ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" hight="14" viewBox="0 0 512 512">
                                    <path d="M368 208A160 160 0 1 0 48 208a160 160 0 1 0 320 0zM337.1 371.1C301.7 399.2 256.8 416 208 416C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208c0 48.8-16.8 93.7-44.9 129.1L505 471c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L337.1 371.1z" fill="#E0E0E0">
                                    </path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>

                <div class="w-full flex flex-col gap-2">
                    <div class="w-full h-32 flex bg-[#ffffff] p-3 rounded-[15px] gap-2">
                        <div class="w-[40%] bg-[#F1F4FD] rounded-[15px]">
                            <img class="w-full h-[90%]" src="./img/file_000000003fe081f48869e4a33a92b781.png" alt="">
                        </div>
                        <div class="w-[60%] flex flex-col gap-1">
                            <div class="bg-[#8AADF4] text-[8px] font-bold w-fit py-1 px-3 rounded-[25px]">طراحی سایت</div>
                            <div class="text-[13px] text-[#26314A] font-bold">10نکته طلایی در طراحی سایت حرفه ای</div>
                            <p class="text-[#7A8191] text-[10px]">با رعایت این نکات می توانید سایتی طراحی کنید که هم کاربر پسند باشد و هم در گوگل بدرخشد.</p>
                            <div class="flex gap-3">
                                <div class="flex gap-2">
                                    <div class="text-[8px] text-[#7A8191] font-bold flex gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 448 512"><path d="M112 0c8.8 0 16 7.2 16 16V64H320V16c0-8.8 7.2-16 16-16s16 7.2 16 16V64h32c35.3 0 64 28.7 64 64v32 32V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V192 160 128C0 92.7 28.7 64 64 64H96V16c0-8.8 7.2-16 16-16zM416 192H32V448c0 17.7 14.3 32 32 32H384c17.7 0 32-14.3 32-32V192zM384 96H64c-17.7 0-32 14.3-32 32v32H416V128c0-17.7-14.3-32-32-32z" fill="#7A8191"/></svg>
                                        1403/03/20
                                    </div>
                                    <div class="text-[8px] text-[#7A8191] font-bold text-nowrap flex gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 512 512"><path d="M480 256A224 224 0 1 1 32 256a224 224 0 1 1 448 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM240 112V256c0 5.3 2.7 10.3 7.1 13.3l96 64c7.4 4.9 17.3 2.9 22.2-4.4s2.9-17.3-4.4-22.2L272 247.4V112c0-8.8-7.2-16-16-16s-16 7.2-16 16z" fill="#7A8191"/></svg>
                                        5 دقیقه مطالعه
                                    </div>
                                </div>
                                <div class="text-[#2D68E8] text-[10px] text-nowrap flex items-center">
                                    مطالعه بیشتر
                                    <svg xmlns="http://www.w3.org/2000/svg" class="rotate-90" width="9" height="9" fill="#000000" viewBox="0 0 256 256">
                                        <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z" fill="#2D68E8"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full h-32 flex bg-[#ffffff] p-3 rounded-[15px] gap-2">
                        <div class="w-[40%] bg-[#F1F4FD] rounded-[15px]">
                            <img class="w-full h-[90%]" src="./img/file_000000003fe081f48869e4a33a92b781.png" alt="">
                        </div>
                        <div class="w-[60%] flex flex-col gap-1">
                            <div class="bg-[#8AADF4] text-[8px] font-bold w-fit py-1 px-3 rounded-[25px]">طراحی سایت</div>
                            <div class="text-[13px] text-[#26314A] font-bold">10نکته طلایی در طراحی سایت حرفه ای</div>
                            <p class="text-[#7A8191] text-[10px]">با رعایت این نکات می توانید سایتی طراحی کنید که هم کاربر پسند باشد و هم در گوگل بدرخشد.</p>
                            <div class="flex gap-3">
                                <div class="flex gap-2">
                                    <div class="text-[8px] text-[#7A8191] font-bold flex gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 448 512"><path d="M112 0c8.8 0 16 7.2 16 16V64H320V16c0-8.8 7.2-16 16-16s16 7.2 16 16V64h32c35.3 0 64 28.7 64 64v32 32V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V192 160 128C0 92.7 28.7 64 64 64H96V16c0-8.8 7.2-16 16-16zM416 192H32V448c0 17.7 14.3 32 32 32H384c17.7 0 32-14.3 32-32V192zM384 96H64c-17.7 0-32 14.3-32 32v32H416V128c0-17.7-14.3-32-32-32z" fill="#7A8191"/></svg>
                                        1403/03/20
                                    </div>
                                    <div class="text-[8px] text-[#7A8191] font-bold text-nowrap flex gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 512 512"><path d="M480 256A224 224 0 1 1 32 256a224 224 0 1 1 448 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM240 112V256c0 5.3 2.7 10.3 7.1 13.3l96 64c7.4 4.9 17.3 2.9 22.2-4.4s2.9-17.3-4.4-22.2L272 247.4V112c0-8.8-7.2-16-16-16s-16 7.2-16 16z" fill="#7A8191"/></svg>
                                        5 دقیقه مطالعه
                                    </div>
                                </div>
                                <div class="text-[#2D68E8] text-[10px] text-nowrap flex items-center">
                                    مطالعه بیشتر
                                    <svg xmlns="http://www.w3.org/2000/svg" class="rotate-90" width="9" height="9" fill="#000000" viewBox="0 0 256 256">
                                        <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z" fill="#2D68E8"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full h-32 flex bg-[#ffffff] p-3 rounded-[15px] gap-2">
                        <div class="w-[40%] bg-[#F1F4FD] rounded-[15px]">
                            <img class="w-full h-[90%]" src="./img/file_000000003fe081f48869e4a33a92b781.png" alt="">
                        </div>
                        <div class="w-[60%] flex flex-col gap-1">
                            <div class="bg-[#8AADF4] text-[8px] font-bold w-fit py-1 px-3 rounded-[25px]">طراحی سایت</div>
                            <div class="text-[13px] text-[#26314A] font-bold">10نکته طلایی در طراحی سایت حرفه ای</div>
                            <p class="text-[#7A8191] text-[10px]">با رعایت این نکات می توانید سایتی طراحی کنید که هم کاربر پسند باشد و هم در گوگل بدرخشد.</p>
                            <div class="flex gap-3">
                                <div class="flex gap-2">
                                    <div class="text-[8px] text-[#7A8191] font-bold flex gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 448 512"><path d="M112 0c8.8 0 16 7.2 16 16V64H320V16c0-8.8 7.2-16 16-16s16 7.2 16 16V64h32c35.3 0 64 28.7 64 64v32 32V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V192 160 128C0 92.7 28.7 64 64 64H96V16c0-8.8 7.2-16 16-16zM416 192H32V448c0 17.7 14.3 32 32 32H384c17.7 0 32-14.3 32-32V192zM384 96H64c-17.7 0-32 14.3-32 32v32H416V128c0-17.7-14.3-32-32-32z" fill="#7A8191"/></svg>
                                        1403/03/20
                                    </div>
                                    <div class="text-[8px] text-[#7A8191] font-bold text-nowrap flex gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 512 512"><path d="M480 256A224 224 0 1 1 32 256a224 224 0 1 1 448 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM240 112V256c0 5.3 2.7 10.3 7.1 13.3l96 64c7.4 4.9 17.3 2.9 22.2-4.4s2.9-17.3-4.4-22.2L272 247.4V112c0-8.8-7.2-16-16-16s-16 7.2-16 16z" fill="#7A8191"/></svg>
                                        5 دقیقه مطالعه
                                    </div>
                                </div>
                                <div class="text-[#2D68E8] text-[10px] text-nowrap flex items-center">
                                    مطالعه بیشتر
                                    <svg xmlns="http://www.w3.org/2000/svg" class="rotate-90" width="9" height="9" fill="#000000" viewBox="0 0 256 256">
                                        <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z" fill="#2D68E8"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full hidden max-md:flex justify-center items-center mt-5 ">
        <div class="w-[85%] grid grid-cols-9 gap-4">
            <button class="col-span-2 flex gap-1 px-3 py-1 border-1 border-[#E0DFE0] rounded-[5px] bg-[#ffffff] text-[#2D68E8] text-[10px] text-nowrap items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="rotate-90" width="11" height="11" fill="#000000" viewBox="0 0 256 256">
                    <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z" fill="#2D68E8"></path>
                </svg>
                بعدی
            </button>

            <div class="col-span-5 flex justify-center gap-2">
                <div class="px-3 py-1 border-1 border-[#E0DFE0] rounded-[5px] bg-[#ffffff] text-[#2D68E8] text-[10px]">1</div>

                <div class="px-3 py-1 border-1 border-[#E0DFE0] rounded-[5px] bg-[#ffffff] text-[#2D68E8] text-[10px]">2</div>

                <div class="px-3 py-1 border-1 border-[#E0DFE0] rounded-[5px] bg-[#ffffff] text-[#2D68E8] text-[10px]">3</div>

                <div class="px-3 py-1 border-1 border-[#E0DFE0] rounded-[5px] bg-[#ffffff] text-[#2D68E8] text-[10px]">...</div>

                <div class="px-3 py-1 border-1 border-[#E0DFE0] rounded-[5px] bg-[#ffffff] text-[#2D68E8] text-[10px]">17</div>
            </div>

            <button class="col-span-2 flex gap-1 px-3 py-1 border-1 border-[#E0DFE0] rounded-[5px] bg-[#ffffff] text-[#2D68E8] text-[10px] text-nowrap items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="rotate-270" width="11" height="11" fill="#000000" viewBox="0 0 256 256">
                    <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z" fill="#2D68E8"></path>
                </svg>
                قبلی
            </button>
        </div>
    </div>
    
</body>
</html>