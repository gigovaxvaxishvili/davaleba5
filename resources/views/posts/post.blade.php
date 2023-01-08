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
                </div>    
            @endforeach
        </div>
        <div class="m-auto w-4/8 py-24">
            <div class="text-center">
                <h1 class="text-5xl uppercase bold">
                    Create Comment
                </h1>
            </div>
        </div>
    
        <div class="flex justify-center pt-20">
            <form action="/" method="POST">
                @csrf
                <div class="block">
                    <input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic" name="username" placeholder="Username">
                    <input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic" name="comment" placeholder="Comment">
                    <input type="hidden" name="post_id" value="{{ $posts->id }}" />
                    <button class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold"> Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection