@extends('Dashbord')
@section('title', ' ایجاد مقاله')
@section('content')
<div class="pt-3 my-4 lg:my-8">

<form action="{{ route('article.store') }}" method="post"
    class="shadow__profaill__list_products rounded-lg pb-4 bg-white" enctype="multipart/form-data">
    @csrf
    <div class="p-5 px-6">
        <div class="w-full">
            <div class="flex flex-col gap-3">
                
                <div class="flex flex-col lg:flex-row">
                    <div class="w-full lg:w-2/12 text-sm py-4">عنوان مقاله</div>
                    <div class="w-full lg:w-10/12 text-sm flex flex-col lg:flex-row gap-4">
                        <input
                            class="w-full lg:w-1/2 p-4 rounded-lg focus:border-none focus:outline-none focus:bg-[#F1F1F4] bg-[#F9F9F9] "
                            type="text" name="title" placeholder="عنوان">
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row">
                    <div class="w-full lg:w-2/12 text-sm py-4">توضیح</div>
                    <div class="w-full lg:w-10/12 text-sm">
                        <input
                            class="w-full lg:w-1/2 p-4 rounded-lg focus:border-none focus:outline-none focus:bg-[#F1F1F4] bg-[#F9F9F9]"
                            type="text" name="description"
                            placeholder="توضیح مقاله" required>
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row">
                    <div class="w-full lg:w-2/12 text-sm py-4">خلاصه توضیح</div>
                    <div class="w-full lg:w-10/12 text-sm">
                        <input
                            class="w-full lg:w-1/2 p-4 rounded-lg focus:border-none focus:outline-none focus:bg-[#F1F1F4] bg-[#F9F9F9]"
                            type="text" name="summary"
                            placeholder="خلاصه توضیح " required>
                    </div>
                </div>
                
                <div class="flex flex-col lg:flex-row">
                    <div class="w-full lg:w-2/12 text-sm py-4">عکس مقاله</div>
                    <div class="w-full lg:w-10/12 text-sm">
                        <input
                            class="w-full p-4 rounded-lg focus:border-none focus:outline-none focus:bg-[#F1F1F4] bg-[#F9F9F9]"
                            type="file" name="img">
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row item-center ">
                    <div class="w-full lg:w-2/12 text-sm py-4">نمایش در خانه</div>
                    <div class="text-sm mt-3">
                        <input
                            class="w-full p-4 rounded-lg focus:border-none focus:outline-none focus:bg-[#F1F1F4] bg-[#F9F9F9]"
                            type="checkbox" name="show_in_home" value="1">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full h-10  flex justify-end pl-6 gap-2">
        <button class="px-4 py-2 bg-green-500 rounded-[7px] text-white cursor-pointer" type="submit">ذخیره
            تغییرات</button>
    </div>
</form>
</div>
@endsection