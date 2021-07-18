@extends('Admin.dashboard')

@section('content')
    <form method="POST" action="{{route('dashboard.storePortfilio')}}" enctype="multipart/form-data">
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
            <label for="formFile" class="form-label">Enter data-class</label>
            <input class="form-control" type="text" id="formFile" name="data_class">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Enter title</label>
            <input class="form-control" type="text" id="formFile" name="title">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Enter text</label>
            <input class="form-control" type="text" id="formFile" name="text">
          </div>
        <button type="submit">save</button>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
      @endif
      </form>

@stop