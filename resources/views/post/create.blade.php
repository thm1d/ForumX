@extends('layouts.app')

@section('content')
<div class="container">
    <div class="flex grid-cols-1 justify-center bg-gray-800 text-white py-4 mb-4">
        Create New Forum Topic
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('post.store') }}">
                        @csrf
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Title <span class="text-red-500">*</span></label></br>
                            <input type="text" class="border-2 border-gray-300 p-2 w-full" name="title" id="title" value="" required></input>
                        </div>

                        <div class="mb-4">
                            <select name="forumid" class="border-2 border-gray-300 p-2 w-full" required>
                                <option selected="" disabled="">Choose Forum Section</option>
                                <option value="29">Anime</option>
                                <option value="14">Buy n Sell</option>
                                <option value="38">Game Issues</option>
                                <option value="23">Game Tips</option>
                                <option value="27">Games</option>
                                <option value="4">Introduce Yourself</option>
                                <option value="28">Movies &amp; Shows</option>
                                <option value="9">My collection</option>
                                <option value="13">Pc Tips</option>
                                <option value="25">Site Issues</option>
                                <option value="35">TV Shows</option> 
                                <option value="11">Others</option>                            
                            </select>
                        </div>

                        <div class="mb-8">
                            <label class="text-xl text-gray-600">Content <span class="text-red-500">*</span></label></br>
                            <textarea name="content" class="border-2 border-gray-500">
                                
                            </textarea>
                        </div>

                        <div class="flex items-center justify-center mt-4">
                            <x-button class="ml-3">
                                {{ __('Post') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace( 'content' );
    </script>
</div>
@endsection 