@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="text-center">
            <h1>Modifica il post: {{$post->title}}</h1>
        </div>


        <form action="{{ route('admin.posts.update',$post->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="my-3">
                <label class="form-label" for="">Titolo</label>
                <input value="{{$post->title}}" class="form-control @error('title') is-invalid @enderror"  type="text" name="title">
                 @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <div class="my-3">
                <label class="form-label" for="">Testo</label>
                <textarea  class="form-control @error('body') is-invalid @enderror" type="text" name="body">
                    {{$post->body}}
            </textarea>
                 @error('body')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Modifica</button>

        </form>

    </div>
@endsection
