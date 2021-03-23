@extends('layouts.app')

@section('content')
<div class="container">
    <div class="flex flex-row">
        <table class="w-full text-center ml-10 mr-10">
            <thead>
                <tr class="mb-2">
                    <th>No</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Created</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr class="mb-2">
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->section }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>
                        <x-button class="">
                            <a href="{{ route('post.show',$post->slug) }}" class="" style="font-size: 0.8em;">{{ __('Read Post') }}</a>
                        </x-button>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>
</div>
@endsection 
