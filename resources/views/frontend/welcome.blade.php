@extends('frontend.layouts.app')
@section('title', 'Welcome')
@section('content')

<div class="container"  style="background: #fff">





      <p>Our project is based on laravel and php</p>


        <h1>Laravel Vapor</h1>
        <p>Laravel Vapor is a serverless deployment platform for Laravel,
          powered by AWS. Launch your Laravel infrastructure on Vapor and fall
        in love with the scalable simplicity of serverless.</p>
        <a href="https://vapor.laravel.com" class="btn"><span>Learn More</span></a>


            <div class="spacer"></div>

        <div class="row">
   

                  @foreach ($products    as $key => $product)
                <div class="col-md-3">
                    <div class="thumbnail">
                        <div class="caption text-center">
                            <a href="{{ url('shop', [$product->slug]) }}"><img src="{{ asset('/public/uploads/' . $product->image) }}" alt="product" class="img-responsive"></a>
                            <a href="{{ url('shop', [$product->slug]) }}"><h3>{{ $product->name }}</h3>
                            <p>{{ $product->price }}</p>
                            </a>
                        </div> <!-- end caption -->

                    </div> <!-- end thumbnail -->
                </div> <!-- end col-md-3 -->
            @endforeach

        </div> <!-- end row -->

</div>
</div>
  @endsection
