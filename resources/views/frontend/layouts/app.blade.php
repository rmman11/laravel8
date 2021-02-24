
@include('frontend.layouts.head')

<div class="wrapper-front">
    @include('frontend.layouts.navbar')

   <div class="container">

   
          @yield('content')

    </div>

@include('frontend.layouts.footer')
    
</div>
<script src="{{ asset('/public/js/treeview.js') }}"></script>

</body>
</html>
