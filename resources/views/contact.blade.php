@extends('layouts.master')

@section('content')
    <div>
        <h1>Contact</h1>
        <div class="row">
            @foreach ($posts as $post)
                <x-post.index>
                    <x-slot name="title">
                        {{$post->title}}
                    </x-slot>
                    <x-slot name="description">
                        {{$post->description}}
                    </x-slot>           
                </x-post.index>
            @endforeach
        </div>

        {{-- <br>
        <x-button />
        <x-forms.button />
        <x-input-field /> --}}

    </div>    
@endsection