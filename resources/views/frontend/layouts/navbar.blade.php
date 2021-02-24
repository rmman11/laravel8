
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
          @yield('title')
      </a>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
   





         <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
            <!-- Authentication Links -->



@guest

<li class="nav-item">
  @include('frontend.layouts.sidebar')

</li>



            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('welcome') }}">{{ __('Welcome') }}</a>
            </li>
                <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('about') }}">{{ __('About') }}</a>
            </li>




            <li class="nav-item {{ Request::is('login') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item {{ Request::is('register') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else

           <li  class="nav-item {{ Request::is('pages.home') ? 'active' : '' }}"><a  href="{{ route('pages.home') }}" class="nav-link"> Profile</a></li>
              <li class="nav-item"  class="nav-item {{ Request::is('test') ? 'active' : '' }}"><a  href="{{ route('test') }}" class="nav-link"> Test</a></li>
               <li class="nav-item {{ Request::is('tasks') ? 'active' : '' }}"><a class="nav-link" href="{{ route('tasks') }}">Tasks</a></li>



             <li class="nav-item {{ Request::is('fqa') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('fqa') }}">{{ __('FAQ') }}</a>
            </li>




            <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
              <a class=" nav-link" href="{{ route('contact') }}">{{ __('Contact') }}</a>
            </li>

        <li class="nav-item dropdown ml-auto">
               <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
            <div class="dropdown-menu dropdown-menu-right">

        <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
        <div class="dropdown-divider"></div>

    </div>

    @endguest
</ul>

<div class="mx-auto pull-right">
  <form name="search" id="autocomplete-textbox" method="get" action="{{route('search')}}">

    {{ csrf_field() }}
    <div class="input-group">
     <input type="text" id="search" name="product" id="search" class="form-control" required="">
             <button type="submit"><i class="fa fa-search"></i></button>
      
    </div>
</form>
                       
      
    <div id="product_list"></div>                           
                      
         
</div>

</nav>
<script>
  /* When the user clicks on the button, 
  toggle between hiding and showing the dropdown content */
function myFunction() {
  var x = document.getElementById("multi-level");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}




   $(document).ready(function () {
             
                $('#search').on('keyup',function() {
                    var query = $(this).val(); 
                    $.ajax({
                       
                        url:"{{ route('search') }}",
                  
                        type:"GET",
                       
                        data:{'product':query},
                       
                        success:function (data) {
                          
                            $('#product_list').html(data);
                        }
                    })
                    // end of ajax call
                });

                
                $(document).on('click', 'li', function(){
                  
                    var value = $(this).text();
                    $('#product').val(value);
                    $('#product_list').html("");
                });
            });

</script>

