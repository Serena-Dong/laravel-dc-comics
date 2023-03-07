@extends('layouts.main')

@section('content')

<main>
    <div class="card-container">

        <div class="container">
            
            <div class="row">
                @foreach ($comics as $comic)
                @include('includes.card')
                @endforeach
            </div>
        </div>
        
    </div>

</main>  

@endsection