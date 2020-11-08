@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">

<head>
    <title>Halaman User</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{asset('Admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('Admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('Admin/assets/css/main.css')}}">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="{{asset('Admin/assets/css/demo.css')}}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('Admin/assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('Admin/assets/img/favicon.png')}}">
</head>
<body>
    <div id="wrapper".>
<div id="sidebar-nav" class="sidebar">
            <div class="sidebar-scroll">
                <nav>
                    <ul class="nav">
                        <li><a href="/home" class="active"><i class="lnr lnr-home"></i> <span>Home</span></a></li>
                        <li><a href="/forum" class=""><i class="lnr lnr-chart-bars"></i> <span>Forum Diskusi</span></a></li>
                        <li>
                </nav>
            </div>
        </div>
        </div>
        <script src="{{asset('Admin/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('Admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('Admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('Admin/assets/scripts/klorofil-common.js')}}"></script>
        </body>
@endsection