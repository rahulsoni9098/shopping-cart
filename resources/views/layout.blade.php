<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>@yield('title')</title>
   

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12 col-sm-12 col-12 main-section">
          <div class="navbar-header" style="display: inline-grid;">
              <!-- Branding Image -->
              <a class="navbar-brand" href="{{ url('/') }}">
                  MyStore
              </a>
          </div>
          <div class="navbar-collapse" id="app-navbar-collapse" style="display: inline-block;float: right;padding-top: 14px;">
              <!-- Left Side Of Navbar -->

              <!-- Right Side Of Navbar -->
              <ul class="nav navbar-nav navbar-right">
                  <!-- Authentication Links -->
                  @guest
                      <li><a href="{{ route('login') }}">Login</a></li>
                      <li><a href="{{ route('register') }}">Register</a></li>
                  @else
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

                          <ul class="dropdown-menu">
                              <li>
                                  <a href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                      Logout
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      {{ csrf_field() }}
                                  </form>
                              </li>
                          </ul>
                      </li>
                  @endguest
              </ul>
          </div>
            <div class="dropdown">
                <button type="button" class="btn btn-info" data-toggle="dropdown">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count(session('cart')) }}</span>
                </button>
                <div class="dropdown-menu">
                    <div class="row total-header-section">
                        <div class="col-lg-6 col-sm-6 col-6">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count(session('cart')) }}</span>
                        </div>

                        <?php $total = 0;
                        if(!empty(session('cart'))){
                        ?>
                        @foreach(session('cart') as $id => $details)
                            <?php $total += $details['price'] * $details['quantity'] ?>
                        @endforeach
                      <?php } ?>
                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                            <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                        </div>
                    </div>

                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            <div class="row cart-detail">
                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                    <img src="{{ $details['photo'] }}" />
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p>{{ $details['name'] }}</p>
                                    <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <a href="{{ url('cart') }}" class="btn btn-primary btn-block">View all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container page">
    @yield('content')
</div>


    @yield('scripts')

</body>
</html>
