@extends('layouts.master')

@section('content')

<h1>{{__('frontend.test')}}</h1>
<br><br><br>

<div>
    <div class="display-3">{{__('frontend.welcome')}}</div>
    <br>
    <p>Localization in Laravel allows you to define translations for varios language strings in your application. These translations can be used in your application's views, as well as within your application's PHP code.</p>
    <div class="row">
        <ul class="row">
            <li>Home</li>
            <li>About</li>
            <li>Contact</li>
            <li>More</li>
        </div>
    </div>
</div>

@endsection