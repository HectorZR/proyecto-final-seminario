@extends('layout')

@section('content')
<div class="gallery-container">
<h2>Galería</h2>
    <div class="cards">
        @foreach ($meals as $meal)
            <div class="card">
                    <p>{{$meal->name}}</p>
                    <div class="placeholder">
                        <div style="background-color: gray">
                           <div class="meal-image" style="background-image: url('{{$meal->url_image}}')"> &nbsp</div>
                        </div>
                    </div> 
                    <p>{{$meal->chef_name}}</p>
                    <p>{{$meal->description}}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection
