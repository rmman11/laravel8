 <nav id="sidebar">
   <div class="sidebar-header">
    <a href="" class="simple-text">
      Panel Admin
    </a>
  </div>
  <ul class="list-unstyled components">


    @guest
    <li class="nav-item">
      <span class="glyphicon glyphicon-log-in"></span>
      <a class="nav-link" href="{{ route('admin.index') }}">{{ __('Login') }}</a>
    </li>

    @else

    <li>
     <img
     src="{{ asset('/public/storage/avatars/' .auth()->guard()->user()->avatar) }}"
     class="avatar" alt="User Image"
     />
   </li>

   <li class="nav-item">
    <a  href="{{ route('admin.dashboard')  }}" class="nav-link {{ request()->is('admin/dashboard') || request()->is('admin/dashboard/*') ? 'active' : '' }}">
      <i class="fa fa-fw fa-home"></i>
    {{ __('Dashboard') }} </a>

  </li>

  <li class="nav-item">
    <a  href="{{ route('admin.categories.index')  }}" class="nav-link {{ request()->is('admin/categories') || request()->is('admin/categories') ? 'active' : '' }}">
      <i class="fa fa-list-alt" aria-hidden="true"></i>

    {{ __('Categories') }} </a>

  </li>
  <li class="nav-item">
    <a href="{{ route('admin.products.index') }}" class="nav-link {{ request()->is('admin/products') || request()->is('admin/products/*') ? 'active' : '' }}">
      <i class="fa-fw fas fa-cogs nav-icon">

      </i>
      {{ trans('cruds.product.title') }}
    </a>
  </li>




   <li class="nav-item">
            <a class="nav-link {{ request()->is('admin/orders') || request()->is('admin/orders/*') ? 'active' : '' }}" href="{{ route('admin.orders.index') }}">
                <i class="app-menu__icon fa fa-bar-chart"></i>
                <span class="app-menu__label">Orders</span>
            </a>
        </li>


  <li class="nav-item  {{ Request::is('admin.payments.index') ? 'active' : '' }}" >
    <a  href="{{ route('admin.payments.index')  }}" class="nav-link  {{ request()->is('admin/payments') || request()->is('admin/payments/*') ? 'active' : '' }}">
      <i class="fa fa-cc-mastercard"></i>


    {{ __('Payments Api') }} </a>

  </li>
  <li class="nav-item  {{ Request::is('admin.pages.calendar') ? 'active' : '' }}" >
    <a  href="{{ route('admin.pages.calendar')  }}" class="nav-link {{ request()->is('admin/calendar') || request()->is('admin/calendar/*') ? 'active' : '' }}">
      <i class="fa fa-calendar" style="font-size:24px"></i>


    {{ __('Calendar') }} </a>

  </li>




  <li class="nav-item">
    <a href="{{ route('admin.venues.index') }}" class="nav-link {{ request()->is('admin/venues') || request()->is('admin/venues') ? 'active' : '' }}">
      <i class="fa-fw fas fa-cogs nav-icon">

      </i>
      {{ __('Venues') }}
    </a>
  </li>

  <li class="nav-item">
    <a href="{{ route('admin.events.index') }}" class="nav-link {{ request()->is('admin/events') || request()->is('admin/events') ? 'active' : '' }}">
      <i class="fa-fw fas fa-cogs nav-icon">

      </i>
      {{ __('Event') }}
    </a>
  </li>

  <li class="nav-item">
    <a href="{{ route('admin.meetings.index') }}" class="nav-link {{ request()->is('admin/meetings') || request()->is('admin/meetings') ? 'active' : '' }}">
      <i class="fa-fw fas fa-cogs nav-icon">

      </i>
      {{ __('Meetings') }}
    </a>
  </li>





  <li class="nav-item  {{ Request::is('admin.pages.email') ? 'active' : '' }}" >
    <a  href="{{ route('admin.pages.email')  }}" class="nav-link {{ request()->is('admin/email') || request()->is('admin/email/*') ? 'active' : '' }}">
      <i class="fa fa-envelope" style="font-size:24px"></i>


    {{ __('Email') }} </a>

  </li>



  <li class="nav-item {{ Request::is('admin.posts.index') ? 'active' : '' }}">
    <a  href="{{ route('admin.posts.index')  }}" class="nav-link {{ request()->is('admin/posts') || request()->is('admin/posts') ? 'active' : '' }}">
      <i class="fa fa-newspaper-o"></i>
    {{ __('Posts ') }} </a>

  </li>





  <li class="nav-item">
    <a  class="nav-link" href="{{ route('admin.logout') }}"
    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
    <i class="nav-icon fas fa-fw fa-sign-out-alt">

    </i>    {{ __('Logout') }}
  </a>

  <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
    @csrf
  </form>

</li>
@endguest
</ul>

<!-- /.sidebar-menu -->
</nav>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<script type="text/javascript">
  $(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
      $('#sidebar').toggleClass('active');
    });
  });
</script>
