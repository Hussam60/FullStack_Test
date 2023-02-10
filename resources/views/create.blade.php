
@extends('main')
@section('content')

<form action="{{route('store')}}" method="POST" name="formstore" enctype="multipart/form-data">
    @csrf
    @method('post')
  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Title</label>
    <input type="text" class="form-control" name="title" id="formGroupExampleInput" placeholder="Example input placeholder">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Body</label>
    <input type="text" class="form-control" name="body" id="formGroupExampleInput2" placeholder="Another input placeholder">
  </div>

<div class="mb-3">
    <label for="formFile" class="form-label"> Image</label>
    <input class="form-control" name="image" type="file" id="formFile">
  </div>

<div class="form-control">

    <button type="submit" class="btn btn-primary">Save</button>
  </div>

</form>
@endsection
