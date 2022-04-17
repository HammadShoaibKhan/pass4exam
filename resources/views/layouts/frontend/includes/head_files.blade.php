<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
<!-- Favicon -->

<meta name="robots" content="noindex">

<meta name="keywords" content="Certsidea">
<link rel="shortcut icon" type="image/png" href="{{asset('frontend/assets/site/img/1617086695_pen.png')}}"/>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="{{asset('frontend/assets/site/css/bootstraps.min.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/site/css/style.css')}}">
<link media="all" rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/site/css/main.css') }}" />
<link media="all" rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/site/css/member_area.css') }}" />

<link media="all" rel="stylesheet" type="text/css" href="{{ asset('assets/site/css/popup.css') }}" />

<script type="text/javascript" src="{{asset('frontend/assets/site/js/jquery-new.min.js')}}"></script>

{{-- FontAwesome --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<title>{{!empty($title) ? $title : 'Certsidea'}}</title>

<style>
    .error {
      color : red !important;
      font-weight: normal !important;
    }
  </style>
</head>

<body>
