@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Posts
            </h1>
        </div>
        
        <div class="w-5/6 py-10">
            @foreach ($posts as $post)
                <div class="m-auto">
                    <h2>
                        <a href='/post/{{ $loop->index }}'>{{ $post->name }}</a>
                    </h2>
                    <p>
                        {{ $post->desc }}
                    </p>
                </div>    
            @endforeach
        </div>
        
    </div>
@endsection