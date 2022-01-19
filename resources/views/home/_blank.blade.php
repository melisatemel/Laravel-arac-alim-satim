@extends('layouts.home')

@section('title', $data->title)
@section('description'){{$data->description}}@endsection
@section('keywords', $data->keywords)
@section('content')

<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
        <li><a href="{{route('home')}}">Home</a></li>
            <li class="active">Blank</li>

        </ul>

    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            İçerik alanı
        </div>
    </div>
</div>




@endsection