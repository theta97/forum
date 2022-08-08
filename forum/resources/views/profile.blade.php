@extends('layouts.app')

@section('content')
@if(isset($user))
<div class="container">
<form class="row g-3" method="POST" action="{{route('editprofile')}}"  enctype="multipart/form-data">
@csrf
    <div class="col-md-3">
    <label class="btn btn-dark" for="avatar">
              <input id="avatar" name="avatar" type="file" style="display:none" >
              Upload your avatar
            </label>
            <span class='label label-info' value="" id="upload-file-info"></span>
          </div>
    
    
    <div class="col-md-3">
    <label for="formGroupExampleInput" class="form-label">Username</label>
       <h4> {{$user->name}}</h4>
    </div>
    <div class="col-md-3">
        <label for="inputEmail4" class="form-label">Email</label>
       <h4> {{$user->email}}</h4>
    </div>
   
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Edit Profile</button>
  </div>
</form>
</div>
@endif
@endsection