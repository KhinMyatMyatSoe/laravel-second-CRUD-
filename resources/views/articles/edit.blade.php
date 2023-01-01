@extends("layouts.app")
@section("content")
<div class="container">
 @if($errors->any())
 <div class="alert alert-warning">
  @foreach($errors->all() as $err)
  {{$err}}
  @endforeach
 </div>
 @endif
</div>
<div class="container">
 <form method="post" action="{{url("/articles/update/$article->id")}}">
  @csrf
  <div class="mb-2">
   <label for="">Title</label>
   <input type="text" class="form-control" name="title" value="{{$article->title}}">
  </div>
  <div class="mb-2">
   <label for="">Body</label>
   <textarea name="body" class="form-control">{{$article->body}}</textarea>
  </div>
  <div class="mb-2">
   <label for="">Category</label>
   <select name="category_id" class="form-select">
    @foreach ($categories as $category)
    <option value="{{$category->id}}"
        @if($article->category_id == $category->id)
        selected
        @endif
        >
        {{$category->name}}
    </option>
    @endforeach
   </select>
  </div>

  <button class="btn btn-primary">Update </button>
</div>
</form>
</div>
