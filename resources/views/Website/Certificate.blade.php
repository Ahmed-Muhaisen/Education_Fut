@extends('Website/header')
@section('title', 'About' .''.env('APP_NAME'))
@section('master')

<section class="mt-3">

<div class="w-100 position-relative">
    <img style="width:60%; height:60%;margin:auto; display: block; " src="{{asset('website/assets/images/certificate.png')  }}" alt="">

<style>
    @import url('https://fonts.googleapis.com/css2?family=Fjalla+One&family=Great+Vibes&display=swap');
.data p{
    font-size: 43px !important;
    margin: 100px;
    text-align: center;
}

</style>

@php

    foreach ($Video as $key => $item) {
     $time[$key]=$item->time;
    }
@endphp



<div style="position: absolute;
top: 47%;
left: 50%;
transform: translate(-50%, -50%);
width: 60%
;height: 70%;
" class="data">
    <div class="">
    <p style="font-family: 'Fjalla One', sans-serif;">{{ $Course->L_Name }}</p>
</div>
<div style="margin-top:120px ">
    <p style="font-family: 'Great Vibes', cursive;">{{ $user->name }}</p>
</div>

<div style="
text-align: right;
margin-right: 250px;margin-top: 185px;"
>
    {{
    array_sum($time);
         }}</div>
</div>

</div>
</section>




@endsection
