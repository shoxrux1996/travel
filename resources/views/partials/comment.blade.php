@if(!($children->isEmpty()))
<ul class="comment-item">
    @foreach($children as $child)
    <li>
        <div class="comment-header">
            <a href="#" onclick="myFunction(this, '{{$child->id}}','{{$child->name}}')" class="comment-reply">reply</a>
            <h6 class="heading mt-0">{{$child->name}}</h6>
            <span class="comment-time">{{$child->created_at}}</span>
        </div>
        <div class="comment-content">
            <p>{{$child->message}}</p>
        </div>
        @include('partials.comment', ['children' => $child->children])
    </li>
    @endforeach
</ul>
@endif