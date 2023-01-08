@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Create Post
            </h1>
        </div>
    </div>

    <div class="flex justify-center pt-20">
        <form action="/admin" method="POST">
            @csrf
            <div class="block">
                <input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic" name="name" placeholder="Name">
                <input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic" name="desc" placeholder="Desc">
                <button class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">Submit</button>
            </div>
        </form>
    </div>