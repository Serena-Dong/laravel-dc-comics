@extends('layouts.main')

@section('content')
<section id="specific-card">
    <div class="comic-header">
        <div class="container">
            <img src="{{$comic['thumb']}}" alt="">
        </div>
    </div>
    <div class="comic-main">
        <div class="container">
            <h1>{{$comic['title']}}</h1>
            <h2>{{$comic['price']}}</h2>
            <p>{{$comic['description']}}</p>
        </div>
    </div>
    <div class="comic-footer">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Talent</h2>
                    <p>Art by: <a href="">{{$comic['artists']}}</a></p>
                    <p>Written by: <a href="">{{$comic['writers']}}</a></p>
                </div>
                <div class="col">
                    <h2>Specs</h2>
                    <p>Series: <a style="text-transform:uppercase;" href="">{{$comic['type']}}</a></p>
                    <p>U.S. Price: ${{$comic['price']}}</p>
                    <p>On Sale Date: {{$comic['sale_date']}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection