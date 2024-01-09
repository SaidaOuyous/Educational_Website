@extends('layouts.main')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Include Bootstrap Icons -->
     <!-- Remove the Bootstrap Icons link if you're not using them -->
     <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"> -->
     <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu|Lora">

    <title>Your Page Title</title>
    <style>
        /* Add your custom styles here */
        #sidebar {
            background-color: ##ffffff; /* Yellow background color */
            color: #000; /* Black text color */
            border-radius: 50px;
            border-top:30px solid #efd510;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            font-family: Ubuntu, sans-serif;
            font-size: 26px;  
            margin-top:10px;


        }
        #sidebar a {
            text-decoration: none;
        }
        #sidebar a:hover {
            color: #efd510;           
        }
        p{
            margin-bottom:6px;
        }
    </style>
</head>

<body class="">

<!-- Sidebar -->
<div id="sidebar" class=" fixed top-50 left-0 p-5 w-83">
    <div class="p-2">
        <!-- Your menu items with custom icons go here -->
        <p>Menu  :</p>
        <a href="/programmationweb" class="block py-2 px-4 border-b border-gray-300">
            <img src="/images/html.png" alt="Home Icon" class="inline-block mr-2 w-10">
            HTML   </a>
        <a href="/page" class="block py-2 px-4 border-b border-gray-300">
            <img src="/images/css.png" alt="About Icon" class="inline-block mr-2 w-10">
            CSS 
        </a>
        <a href="/pageJS" class="block py-2 px-4 border-b border-gray-300">
            <img src="/images/js.png" alt="Services Icon" class="inline-block mr-2 w-10">
            JavaScript
        </a>
        <a href="/php1" class="block py-2 px-4 border-b border-gray-300">
            <img src="/images/laptop.png" alt="Contact Icon" class="inline-block mr-2 w-10">
            PHP 
        </a>
    </div>
</div>
@yield('content1')
@endsection
