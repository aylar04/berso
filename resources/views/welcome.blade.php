<?php 
use Illuminate\Support\Facades\Auth;
$user = Auth::user();
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="{{ asset('assets/js/tailwind.js') }}"></script>
</head>

<body class="bg-gray-500">
    <div class="mx-auto w-6/10 p-3 border-green-400 border-2 rounded-full my-5 flex gap-5">
        <div class="login py-3 px-5 border-red-400 border-2 rounded-full"><a href="{{ route("vieWlogin") }}">login</a></div>
        <div class="login py-3 px-5 border-red-400 border-2 rounded-full"><a href="{{ route("vieWsignUp") }}">signUp</a></div>
        <div class="login py-3 px-5 border-blue-400 border-2 rounded-full"><a href="{{ route("vieWsignUp") }}">Category</a></div>
        <div class="login py-3 px-5 border-blue-400 border-2 rounded-full"><a href="{{ route("vieWsignUp") }}">Product</a></div>
        @if (Auth::check())
            <div class="login py-3 px-5 border-yellow-400 border-2 rounded-full text-white"><a href="{{ route("User.logOut") }}">logOut</a></div>
            <div class="login py-3 px-5 border-yellow-400 border-2 rounded-full text-white"><a href="{{ route("Dashbord") }}">Dashbord</a></div>
            <div class="login py-3 px-5 border-yellow-400 border-2 rounded-full text-white">{{ $user->phoneNumber }}</div>
        @endif
        
    </div>
</body>

</html>