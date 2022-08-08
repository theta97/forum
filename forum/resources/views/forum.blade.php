@extends('layouts.app')

@section('content')

<div class="breadcrumb"> 
<nav style="--bs-breadcrumb-divider: '>';padding-left:10px;" aria-label="breadcrumb">
  <ol class="breadcrumb py-2">
    <li class="breadcrumb-item"><a href="{{ route('welcomehome') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('fshow',['id'=>$forum->id])}}">{{$forum->subcategory}}</a></li>
  </ol>
</nav>
<div class="ms-auto">
    <form class="d-flex" role="search" >
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-primary" type="submit">Search</button>
    </form>
    </div>
</div>

@if(isset($user))


 <div class="ms=auto mx-5">
  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
   Create New Topic
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Create New Topic</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="{{route('threads.store')}}">
      @csrf
          <div class="mb-3">
            <input type="hidden" name="id" vlaue="{{$user->id}}">
            <input type="hidden" name="forum_id" value="{{$forum->id}}">
            <label for="recipient-name" class="col-form-label">Title:</label>
            <input type="text" name="Title"class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Content:</label>
            <textarea class="form-control" name="Content" id="message-text"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Post</button>
        </form>
      </div>
      
    </div>
  </div>
</div>
  
</div>
@endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">Topic</th>
      <th scope="col">Replies</th>
      <th scope="col">First Post</th>
      <th scope="col">Last Post</th>
    </tr>
  </thead>
  <tbody>
   
@foreach($forum->Thread as $a)
    <tr>
      <th scope="row"><a href="{{ route('tshow',['id'=>$a->id])}}">{{$a->Title}}</a></th>
      <td>Mark</td>
      <td>{{$a->User_Thread->name}}</td>
      <td></td>
    </tr>
    <tr>
    @endforeach 
    
  </tbody>
</table>


@endsection