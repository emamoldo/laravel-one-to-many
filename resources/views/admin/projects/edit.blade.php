@extends('layouts.admin')

@section('content')
<header class="py-5 bg-dark text-white">
    <h1>Edit Projects:{{$project->title}}</h1>
</header>

<div class="container py-5">

    @include('partials.validation-message')
    @include('partials.session-message')

    <form action="{{route('admin.projects.update', $project)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                aria-describedby="titleHelper" placeholder="Title of the Project"
                value="{{old('title', $project->title)}}" />
            <small id="titleHelper" class="form-text text-muted">Type the title of the Project</small>
            @error('title')
                <div class="text-danger ">
                    {{$message}}
                </div>
            @enderror
        </div>


        <div class="mb-3">
            @if(Str::startsWith($project->cover_image, 'https://'))
                <img width="150" src="{{$project->cover_image}}" alt="">
            @else
                <img width="150" src="{{asset('storage/' . $project->cover_image)}}" alt="">
            @endif

            <label for="cover_image" class="form-label">Update Image</label>
            <input type="file" class="form-control @error('cover_image') is-invalid @enderror" name="cover_image"
                id="cover_image" aria-describedby="cover_imageHelper" placeholder="Title of the Project"
                value="{{old('cover_image', $project->cover_image)}}" />
            <small id="cover_imageHelper" class="form-text text-muted">Add the cover image of the Project</small>
            @error('cover_image')
                <div class="text-danger ">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select class="form-select" name="category_id" id="category_id">
                <option selected disabled>Select the Category of the Project</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}" {{$category->id == old('category_id', $category->id) ? 'selected' : ''}}>
                        {{$category->name}}
                    </option>
                @endforeach
            </select>

        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content</label> <br>
            <textarea class="form.control @error('content') is-invalid @enderror" name="content" id="content"
                rows="5">{{old('content', $project->content)}}</textarea>
            @error('content')
                <div class="text-danger ">
                    {{$message}}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Save</button>

    </form>
</div>

@endsection