
 <div class="container mt-5">
@foreach ($products->chunk(4) as $items)
         <div class="row">
             @foreach ($items as $product)
                 <div class="col-md-3">
                     <div class="thumbnail">
                         <div class="caption text-center">
                                   <a   href="{{  route('show',$product->id) }}" title="details">
                                 <img src="{{ asset('/public/uploads/' . $product->image) }}" alt="product"
                                 width="100" height="100"></a>
                             <a href="{{ url('show', [$product->slug]) }}"><h3>{{ $product->name }}</h3></a>
                             <p>{{ $product->price }}</p>
                             
                         </div> <!-- end caption -->
                     </div> <!-- end thumbnail -->
                 </div> <!-- end col-md-3 -->
             @endforeach
         </div> <!-- end row -->
     @endforeach
     </div>


{{$products->links("pagination::bootstrap-4")}}


