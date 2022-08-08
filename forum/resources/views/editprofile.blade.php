@extends('layouts.app')

@section('content')
@if(isset($user))

<div class="container">
<form class="row g-3" method="POST" action="{{ route('welcome.update') }}" enctype="multipart/form-data">
@csrf
    <div class="col-md-3">
    <label class="btn btn-dark" for="avatar">
              <input id="avatar" name="avatar" type="file" style="display:none" >
              Upload your avatar
            </label>
            <span class='label label-info' value="{{$user->picture}}" id="upload-file-info"></span>
          </div>
    </div>
    
    <div class="col-md-3">
    <label for="formGroupExampleInput" class="form-label">Username</label>
        <input type="text" class="form-control" id="inputEmail4" value="{{$user->name}}"> 
    </div>
    <div class="col-md-3">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail4" value="{{$user->email}}">
    </div>
    
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Update Profile</button>
  </div>
</form>
</div>
@endif
@endsection