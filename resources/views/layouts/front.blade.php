<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Simple Video</title>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyB1RD7zebqdO7CqN3mGAJuOwD9gN0P8dfI"></script>
    <script src="js/gmaps.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
    #map {
      width: 100%;
      height: 500px;
  }
  .cari{
    position: absolute;
    z-index: 1000;
    top: 53px;
    left: 200px;
}

/* Small devices (tablets, 768px and up) */
@media (max-width: 360px) {
    .cari{
     position: absolute;
     z-index: 1000;
     top: 120px;
     left: 26px;
 }
}
</style>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{$app_name}}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
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
                @endif
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
            @yield('content')

</div>
<script src="{{ asset('js/app.js') }}"></script>
<script>
    var map = new GMaps({
      el: '#map',
      zoom: {{$set_zoom}},
      lat: {{$latitude_centre}},
      lng: {{$longitude_centre}}
      // tegal
      // lat: -6.9764638,
      // lng: 109.1116156
  });

    @foreach($data as $d)
    map.addMarker({
        lat: '{{$d->lat}}',
        lng: '{{$d->long}}',
        title: '{{$d->title}} #',
        icon: 'img/{{$d->Kategori->icon}}',
        infoWindow: {
            content : '<h3>{{$d->title}}</h3><p>{{$d->description}}</p><p>{{$d->no_telp}}</p>'
        }
    });
    @endforeach
</script>

@stack('js')
</body>
</html>