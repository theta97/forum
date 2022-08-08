@extends('layouts.app')

@section('content')


<div class="breadcrumb">
<nav style="--bs-breadcrumb-divider: '>';padding-left:10px;" aria-label="breadcrumb">
  <ol class="breadcrumb py-2">
    <li class="breadcrumb-item"><a href="{{ route('welcomehome') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('fshow',['id'=>$thread->Forum_Thread->id])}}">{{$thread->Forum_Thread->subcategory}}</a></li>
    <li class="breadcrumb-item"><a href="{{ route('tshow',['id'=>$thread->id])}}">{{$thread->Title}}</a></li>
  </ol>
</nav>
<div class="ms-auto">
    <form class="d-flex" role="search" >
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-primary" type="submit">Search</button>
    </form>
    </div>
</div>

@if(isset($thread))


<div class="container">

<div class="list-group list-group-flush">

    <div class="d-flex w-100 justify-content-between list-group-item ">
      <h5 class="mb-1">{{$thread->Title}}</h5>

    </div>
    <div class="container-fluid" >
        <div class="row">
            <div class="col">
            <img src="..." class="img-thumbnail rounded float-start " alt="..." >
            <h6 class="mb-1 mx-2">{{$thread->User_Thread->name}}</h6>
            </div>
            <div class="col-2" style="padding-left:80px">
            <h6 class="mb-1">{{$thread->created_at}}</h6>
            </div>

        </div>
        <div class="row">
            <div class="col mx-5">
            <p class="mb-1">{{$thread->Content}}</p>
            </div>
        </div>

    </div>
    <nav class="blog-pagination">
    @if(Auth::user()->id === $thread->user_id)
    <div class="col"  style="padding-left:690px">
        <form method="post" action="{{route('threads.delete')}}">
      @csrf

      <button type="button" class="btn btn-outline-dark mx-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Edit</button>

      <input type="hidden" name="thread" vlaue="{{$thread->id}}">
      <button class="btn btn-outline-dark mx-1"  type="submit">Delete</button>
        </form>
        </div>



        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Edit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="">
      @csrf
          <div class="mb-3">
            <input type="hidden" name="id" vlaue="{{$thread->user_id}}">
            
            <label for="recipient-name" class="col-form-label">Title:</label>
            <input type="text" name="Title" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Content:</label>
            <textarea class="form-control" name="Content" id="message-text">{{$thread->Content}}</textarea>
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>

    </div>
  </div>
</div>

           @endif

            <a id="comment" class="btn btn-outline-dark mb-2 mt-5" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
              Post a Comment
            </a>

            <div class="collapse" id="collapseExample">
              <div class="card card-body">
              <form method="post" action="{{route('post.store')}}">
      @csrf
                <div class="input-group mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text mx-3">Comment:</span>
                  </div>
                  <input type="hidden" name="id" vlaue="{{$thread->User_Thread->id}}">
            <input type="hidden" name="thread_id" value="{{$thread->id}}">
                  <textarea class="form-control" required="required" placeholder="Give a solution here.." name="comment" aria-label="context"></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-dark mx-3" type="submit">Post</button>
                </form>
                  </div>
                </div>
              </div>
            </div>
          </nav>

          @if(isset($post))

    @foreach($post as $a)

    <div class="d-flex w-100 justify-content-between list-group-item ">

    </div>

    <div class="container-fluid" >
        <div class="row my-3">
            <div class="col">
            <img src="..." class="img-thumbnail rounded float-start " alt="..." >
            <h6 class="mb-1 mx-2">{{$a->Users_Post->name}}</h6>
            </div>
            <div class="col-2" style="padding-left:80px">
            <h6 class="mb-1">{{$a->created_at}}</h6>
            </div>

        </div>
        <div class="row">
            <div class="col mx-5">
            <p class="mb-1">{{$a->comment}}</p>
            </div>
        </div>


    </div>

    @if(Auth::user()->id === $a->user_id)
    <div class="container ">
        <div class="row ">
        <div class="col"  style="padding-left:690px">
        <form method="post" action="">
      @csrf

      <button class="btn btn-outline-dark mx-5" type="submit">Edit</button>


      <button class="btn btn-outline-dark mx-1" type="submit">Delete</button>
</div>
        </form>
        </div>
    </div>
    @endif

    @endforeach

</div>

</div>

@endif
@endif

@endsection
