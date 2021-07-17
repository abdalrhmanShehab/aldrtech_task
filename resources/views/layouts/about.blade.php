@extends('Admin.dashboard')

@section('content')
    <form method="POST" action="{{route('dashboard.storeAbout')}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="formFile" class="form-label">Select Your Images</label>
          <input class="form-control" type="file" id="formFile" name="image">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Enter Name</label>
            <input class="form-control" type="text" id="formFile" name="name">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Enter Work Position`</label>
            <input class="form-control" type="text" id="formFile" name="position">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Enter Description</label>
            <input class="form-control" type="text" id="formFile" name="description">
          </div>
        <button type="submit">save</button>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
      @endif
      </form>

@stop