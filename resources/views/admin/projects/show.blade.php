@extends('layouts.admin')

@section('content')
<header class="py-5 bg-dark text-white">
    <div class="container">
        <h1>{{$project->title}}</h1>
    </div>

    <div class="container">
        <div class="py-5">

            @if(Str::startsWith($project->cover_image, 'https://'))
                <img width="150" loading="lazy" src="{{$project->cover_image}}" alt="">
            @else
                <img width="150" loading="lazy" src="{{asset('storage/' . $project->cover_image)}}" alt="">
            @endif

            <p>{{$project->content}}</p>
        </div>
    </div>
</header>
@endsection