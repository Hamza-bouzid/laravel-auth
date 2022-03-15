@extends('layouts.template')

@section('title', 'Posts')
  


@section('content')
<div class="container">
<h1>Posts</h1>
<div class="posts">
 @foreach ($posts as $post)
 <div class="post">
   <div class="post-title">
    <h2>{{$post->title}}</h2>
   </div>
   <div class="post-content">
    <p>{{$post->content}}</p>
   </div>

   <div class="buttons">
     <button class="btn btn-show">Show</button>
     <button class="btn btn-edit">Edit</button>
     <button class="btn btn-delete">Delete</button>
   </div>
 </div> 
 @endforeach   
</div>
</div>
@endsection