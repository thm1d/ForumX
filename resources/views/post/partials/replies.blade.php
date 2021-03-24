@foreach($comments as $comment)
<div class="display-comment my-2">
    <strong>{{ $comment->user->name }}</strong>
    <p>{{ $comment->comment }}</p>
    <a href="" id="reply"></a>
    <form method="post" action="{{ route('reply.add') }}">
        @csrf
        <div class="form-group">
            <x-input type="text" name="comment" class="" />
            <input type="hidden" name="post_id" value="{{ $post_id }}" />
            <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
        </div>
        <div class="">
            <input type="submit" class="border rounded-sm bg-gray-300 p-0.5 mt-1" style="font-size: 0.8em;" value="Reply" />
        </div>
    </form>
    @include('post.partials.replies', ['comments' => $comment->replies])
</div>
@endforeach 
