
@extends('frontend.layouts.app')
@section('title', 'View-product')
@section('content')

<div class="container"  style="background: #fff;">

  <div class="pull-right">

    <a class="btn btn-primary" href="{{ route('welcome') }}"> Back</a>

  </div>

  <h1>Showing {{ $product->category->name }}</h1>
  <div class="col-md-6 product_img">


   <div class="col-md-6 product_img">
     <img src="{{URL::asset('/public/uploads/'.$product->image)}}">

   </div>
 </div>
 <div class="col-md-6 product_content">
  <p class="specs">
    <span>Name: </span> {{ $product->name }}
  </p>

  <p class="specs">
    <span>Slug: </span> {{ $product->slug }}
  </p>

  <p class="specs">
    <span>Price: </span> {{ $product->price }}
  </p>

  <p class="specs">
    <span>Description </span> {{ $product->description }}
  </p>


  <hr />

</div>

</div>

@endsection