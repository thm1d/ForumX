@extends('layouts.app')
<style>
    .display-comment .display-comment {
        margin-left: 40px
    }
</style>
@section('content')
<div class="container">
    <div class="flex flex-row">
        <div class="border w-full mx-60 p-8 bg-white">
            <div class="block">
                <div class="my-4 text-gray-800 text-center">
                    <h2 class="text-4xl mt-4 md:mt-0 font-bold">{{ $post->title }}</h2>
                </div>
                
                <div class="mt-8 text-left">
                    {{ $post->content }}
                </div>
                <hr class="w-full text-left ml-0 mt-2">
                <div class="mt-4 text-gray-800 ">
                    <h3 class="text-lg font-semibold ">Comments</h3>
            
                    @include('post.partials.replies', ['comments' => $post->comments, 'post_id' => $post->id])

                    <hr class="w-full text-left ml-0 ">
                </div>

                <div class="card-body">
                    <h5>Leave a comment</h5>
                    <form method="post" action="{{ route('comment.add') }}">
                    @csrf
                        <div class="form-group">
                            <x-input type="text" name="comment" class="" />
                            <input type="hidden" name="post_id" value="{{ $post->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="" style="font-size: 0.8em;" value="Add Comment" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
