@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Posts
            </h1>
        </div>
        <div class="pt-10">
            <a href="/admin/create" class="border-b2 pb-2 border-dotted italic text-gray-500">
            Add a new Post &rarr;</a>
        </div>
        <div class="w-5/6 py-10">
            @foreach ($posts as $post)
                <div class="m-auto">
                    <div class="float-right">
                    </div>
                    <h2>
                        <a href="/adminpost/{{ $loop->index }}">{{ $post->name }}</a>
                    </h2>
                    <p>
                        {{ $post->desc }}
                    </p>
                    
                    <form action="/admin/post{{ $post->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="border-b-2 pb-2 border-dotted italic text-red-500">
                            Delete
                        </button>
                    </form>
                </div>    
            @endforeach
        </div>
    </div>
@endsection