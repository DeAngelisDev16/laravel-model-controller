@extends('layouts.app')

@section('main-content')
<div class="container pt-5">
    <div class="row">
        @foreach ($movies as $movie)
        <div class="col-6 p-4">
            <div class="card p-4">
                <h2>
                    {{$movie->title}}
                </h2>
                <h3>
                    {{$movie->original_title}}
                </h3>
                <h4>
                    {{$movie->nationality}}
                </h4>
                <h5>
                    {{$movie->date}}
                </h5>
                <h6>
                    {{$movie->vote}}
                </h6>

            </div>
        </div>
            
        @endforeach

    </div>
</div>
    
@endsection