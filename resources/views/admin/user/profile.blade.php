@extends('Dashbord')
@section('title', 'پروفایل کاربری')
@section('content')
    <div class="w-full max-w-4xl mx-auto px-4 py-6">
        <div class="pb-6 w-full">
            <h1 class="text-2xl md:text-3xl font-bold text-white text-center">
                پروفایل من
            </h1>

        </div>
        <div class=" rounded-2xl shadow-lg overflow-hidden">
            <div class="p-4 sm:p-6 md:p-8">
                <div class="flex flex-col items-center gap-4 pb-6 border-b border-gray-400">
                    <div class="flex-shrink-0">
                        <svg class="w-20 h-20 sm:w-24 sm:h-24 md:w-28 md:h-28 rounded-full shadow-md border-2 border-black fill-(--primary-blue)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12,19.2C9.5,19.2 7.29,17.92 6,16C6.03,14 10,12.9 12,12.9C14,12.9 17.97,14 18,16C16.71,17.92 14.5,19.2 12,19.2M12,5A3,3 0 0,1 15,8A3,3 0 0,1 12,11A3,3 0 0,1 9,8A3,3 0 0,1 12,5M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12C22,6.47 17.5,2 12,2Z"></path>
                        </svg>
                    </div>
                    
                    <div class="flex-1 text-center">
                        <h2 class="text-lg sm:text-xl md:text-2xl font-bold text-black">
                            @if($user->name || $user->family)
                                {{ trim(($user->name ?? '') . ' ' . ($user->family ?? '')) }}
                            @else
                                کاربر عادی
                            @endif
                        </h2>
                    </div>
                    
                    <div class="flex-shrink-0 w-full sm:w-auto">
                        <a href="{{route('User.edit' , $user->id)}}" class="inline-flex items-center justify-center gap-2 px-4 py-2 bg-(--primary-blue) hover:bg-(--light-blue)  rounded-lg transition text-sm w-full sm:w-auto">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                            </svg>
                            ویرایش
                        </a>
                    </div>
                </div>
                
                <div class="pt-6">
                    <h3 class="text-lg font-bold  mb-4 flex items-center gap-2">
                        <svg class="w-5 h-5 text-(--caffe-green-500)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        اطلاعات کاربری
                    </h3>

                    <div class="space-y-3">
                        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center py-2 border-b border-gray-400 gap-1 sm:gap-0">
                            <span class="text-gray-500 text-sm">نام کامل</span>
                            <span class=" font-medium text-sm sm:text-base">
                                @if($user->name || $user->family)
                                    {{ trim(($user->name ?? '') . ' ' . ($user->family ?? '')) }}
                                @else
                                    <span class="">ثبت نشده</span>
                                @endif
                            </span>
                        </div>
                        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center py-2 border-b border-gray-400 gap-1 sm:gap-0">
                            <span class="text-gray-500 text-sm">شماره تلفن</span>
                            <div class="flex flex-wrap items-center gap-2">
                                <span class=" font-medium text-sm sm:text-base">{{ $user->phoneNumber ?? 'ثبت نشده' }}</span>
                                @if($user->phoneNumber)
                                    <!-- <span class="text-xs bg-(--caffe-green-500)/20 text-(--caffe-green-600) px-2 py-0.5 rounded-full">تایید شده</span> -->
                                @endif
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center py-2 border-b border-gray-100 gap-1 sm:gap-0">
                            <span class="text-gray-500 text-sm">ایمیل</span>
                            <span class=" font-medium text-sm sm:text-base">{{ $user->email ?? 'ثبت نشده' }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection