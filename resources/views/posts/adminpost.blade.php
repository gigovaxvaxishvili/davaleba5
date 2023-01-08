@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                {{ $posts->name }}
            </h1>
        </div>
        
        <div class="py-10 text-center">
            <p class="text-lg text-gray-700 py-6">
                {{ $posts->desc }}
            </p>
        </div>
        <div class="py-10 text-center">
            <p class="text-lg text-gray-700 py-6">
                Comments
            </p>

            @foreach ($comments as $comment)
                <div class="m-auto">
                    <div class="float-right">
                    </div>
                    <h3>
                        {{ $comment->username }}
                    </h3>
                    <p>
                        {{ $comment->comment }}
                    </p>
                    
                    <form action="/adminpost/{{ $comment->id }}" method="POST">
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