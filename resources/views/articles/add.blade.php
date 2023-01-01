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
 <form method="post">
  @csrf
  <div class="mb-2">
   <label for="">Title</label>
   <input type="text" class="form-control" name="title">
  </div>
  <div class="mb-2">
   <label for="">Body</label>
   <textarea name="body" class="form-control"></textarea>
  </div>
  <div class="mb-2">
   <label for="">Category</label>
   <select name="category_id" class="form-control">
    <option value="1">General</option>
    <option value="2">News</option>
    <option value="3">Tech</option>
   </select>
  </div>
  <button class="btn btn-primary">Add Article </button>
</div>
</form>
</div>
