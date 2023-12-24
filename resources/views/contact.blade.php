@extends('layouts.master')

@section('content')
    <div>
        <h1>Contact</h1>
        <div class="row">
            @foreach ($posts as $post)
                <x-post.index :post="$post" />
            @endforeach
        </div>

        <br>
        <x-button />
        <x-forms.button />
        <x-input-field />
    </div>    
@endsection