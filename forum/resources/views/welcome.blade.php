@extends('layouts.app')

@section('content')

@if(isset($forums))

<div class="breadcrumb">
<nav style="--bs-breadcrumb-divider: '>';padding-left:10px;" aria-label="breadcrumb">
  <ol class="breadcrumb py-2">
    <li class="breadcrumb-item"><a href="{{ route('welcomehome') }}">Home</a></li>
    <!-- <li class="breadcrumb-item active" aria-current="page">Library</li> -->
  </ol>
</nav>
<div class="ms-auto">
    <form class="d-flex" role="search" >
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-primary" type="submit">Search</button>
    </form>
    </div>
</div>
<!-- POST CATEGORIES -->

<div class="container-fluid">

<div class="row">
<!-- 1st Col -->
<div class="col-12">
<div class="card border-info">
  <div class="card-header border-info">
    Computers
  </div>

  @foreach($forums as $a)
@if($a->category_id==1)
  <div class="row g-0 border-top">
    <div class="col-md border-end border-opacity-10" style="--bs-border-opacity: .5;">
      <div class="card-body">
        <h5 class="card-title"><a href="{{ route('fshow',['id'=>$a->id])}}">{{$a->subcategory}}</a></h5>
      </div>
    </div>
    <div class="col-md">
    <div class="card-body">
      <p>ABC.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
    </div>
  </div>
 @endif
  @endforeach

</div>
</div>

<!-- 2nd Col -->
<div class="col-12 pt-5">
<div class="card border-info">
  <div class="card-header border-info">
    Technology
  </div>
  @foreach($forums as $a)
  @if($a->category_id==2)
  <div class="row g-0 border-top">
    <div class="col-md border-end border-opacity-10" style="--bs-border-opacity: .5;">
      <div class="card-body">
        <h5 class="card-title"><a href="{{ route('fshow',['id'=>$a->id])}}">{{$a->subcategory}}</a></h5>
      </div>
    </div>
    <div class="col-md">
    <div class="card-body">
      <p>ABC.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
    </div>
  </div>
  @endif
  @endforeach


</div>
</div>
<!-- 3rd Col -->
<div class="col-12 pt-5">
<div class="card border-info">
  <div class="card-header border-info">
    ISPs
  </div>

  @foreach($forums as $a)
  @if($a->category_id==3)
  <div class="row g-0 border-top">
    <div class="col-md border-end border-opacity-10" style="--bs-border-opacity: .5;">
      <div class="card-body">
        <h5 class="card-title"><a href="{{ route('fshow',['id'=>$a->id])}}">{{$a->subcategory}}</a></h5>
      </div>
    </div>
    <div class="col-md">
    <div class="card-body">
      <p>ABC.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
    </div>
  </div>
  @endif
  @endforeach

</div>
</div>
<!-- 4th Col -->
<div class="col-12 pt-5">
<div class="card border-info">
  <div class="card-header border-info">
    Mobile
  </div>

  @foreach($forums as $a)
  @if($a->category_id==4)
  <div class="row g-0 border-top">
    <div class="col-md border-end border-opacity-10" style="--bs-border-opacity: .5;">
      <div class="card-body">
        <h5 class="card-title"><a href="{{ route('fshow',['id'=>$a->id])}}">{{$a->subcategory}}</a></h5>
      </div>
    </div>
    <div class="col-md">
    <div class="card-body">
      <p>ABC.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
    </div>
  </div>
  @endif
  @endforeach

</div>
</div>
</div>
<!-- 2nd RoW -->
<div class="row py-3">
<div class="col-12 pt-5">
<div class="card border-info">
  <div class="card-header border-info">
    Life
  </div>

  @foreach($forums as $a)
  @if($a->category_id==5)
  <div class="row g-0 border-top">
    <div class="col-md border-end border-opacity-10" style="--bs-border-opacity: .5;">
      <div class="card-body">
        <h5 class="card-title"><a href="{{ route('fshow',['id'=>$a->id])}}">{{$a->subcategory}}</a></h5>
      </div>
    </div>
    <div class="col-md">
    <div class="card-body">
      <p>ABC.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
    </div>
  </div>
  @endif
  @endforeach

</div>
</div>

<div class="col-3">
<div class="col-12 pt-5">
<div class="card border-info">
  <div class="card-header border-info">
    Entertainment
  </div>

  @foreach($forums as $a)
  @if($a->category_id==6)
  <div class="row g-0 border-top">
    <div class="col-md border-end border-opacity-10" style="--bs-border-opacity: .5;">
      <div class="card-body">
        <h5 class="card-title"><a href="{{ route('fshow',['id'=>$a->id])}}">{{$a->subcategory}}</a></h5>
      </div>
    </div>
    <div class="col-md">
    <div class="card-body">
      <p>ABC.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
    </div>
  </div>
  @endif
  @endforeach


</div>
</div>

<div class="col-12 pt-5">
<div class="card border-info">
  <div class="card-header border-info">
    Lounges
  </div>

  @foreach($forums as $a)
  @if($a->category_id==7)
  <div class="row g-0 border-top">
    <div class="col-md border-end border-opacity-10" style="--bs-border-opacity: .5;">
      <div class="card-body">
        <h5 class="card-title"><a href="{{ route('fshow',['id'=>$a->id])}}">{{$a->subcategory}}</a></h5>
      </div>
    </div>
    <div class="col-md">
    <div class="card-body">
      <p>ABC.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
    </div>
  </div>
  @endif
  @endforeach


</div>
</div>

</div>
</div>

@endif

@endsection
