@extends('layouts.app')

@section('content')
<div class="container">
    <div class="flex grid-cols-1 justify-center bg-gray-800 text-white py-4 mb-4">
        Create New Forum Topic
    </div>
    <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 max-w-8xl mx-auto">
        <form method="post" action="{{ route('post.store') }}">
            <input class="block mt-1 w-full border-gray-600 border-b-2 border-l-0 border-t-0 border-r-0 bg-transparent" type="text" name="newtopicname" maxlength="100" placeholder="Topic Name" required="">

            <textarea class="bg-transparent border-l-0 border-t-0 border-r-0 border-b-2 border-gray-600" name="newtopicbody" id="new-forum-topic-textarea" required="" style="min-height: 35vh; overflow-y: auto;" placeholder="Post Body"></textarea>

            <input class="block mt-2 w-full border-gray-600 border-b-2 border-l-0 border-t-0 border-r-0 bg-transparent" type="text" name="postbody" placeholder="Post Body" required="">

            <div class="flex items-center justify-center mt-4">
                    <x-button class="ml-3">
                        {{ __('Submit') }}
                    </x-button>
                </div>
        </form>
    </div>
</div>
@endsection 