<header>
  <div class="down fixed_search">
    <nav class="navbar navbar-expand-md navbar-light">
        <div class="container">
                    {{-- Div logo --}}
                    <div class="logo_img">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{asset('img/cover.png')}}" clas="logo_regular" alt="Logo Boolbnb">
                        </a>
                    </div>
                    {{-- /Div logo --}}

                {{-- INPUT SEARCH --}}             
                <div class="start_search order">                 
                    <form class="form-inline my-2 my-lg-0" action="{{route("search")}}" method="GET">                     
                        @method('GET')                 
                        <div class="div_search form-inline my-2 my-lg-0">  
                            <input type="hidden" id="address-value">                   
                            <input class="form-control mr-sm-2 input_search address-general" type="search" id="address" name="search" placeholder="Dove vuoi andare?" />               
                        </div>                 
                        <button class="btn btn-dark my-2 my-sm-0 modifing_link search_write"  class="search_button" type="submit">Cerca</button>
                    </form>
                </div>

            {{-- bottone hamburger --}}
            <button class="navbar-toggler bars" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse clearfix">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto float-right text-right li_width">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link white regular" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link white regular" href="{{ route('register') }}">{{ __('Registrati') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown width_100 m_0 p_5">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle white regular" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->firstname }} {{Auth::user()->lastname}}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right text-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('admin.properties.index')}}">I miei appartamenti <i class="fas fa-home"></i></a>
                                <a class="dropdown-item" href="{{route('admin.properties.create')}}"> Aggiungi appartamento <i class="fas fa-plus-circle"></i></a>
                                <a class="dropdown-item" href="{{route('admin.sponsors.create')}}">Sponsorizza appartamento <i class="fas fa-dollar-sign"></i> </a>
                                <a class="dropdown-item" href="{{route('admin.messages')}}">Visualizza messaggi <i class="far fa-envelope"></i> </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }} 
                                    
                                    <i class="fas fa-sign-out-alt"></i>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>

            {{-- nostro menu dropdown --}}
                <div class="collapse hamburger clearfix" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto float-right text-right">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrati') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">                                    
                                <a class="dropdown-item" href="{{route('admin.properties.index')}}">I miei appartamenti <i class="fas fa-home"></i></a>
                            </li>
                            <li class="nav-item"> 
                                <a class="dropdown-item" href="{{route('admin.properties.create')}}">Aggiungi appartamento <i class="fas fa-plus-circle"></i></a>
                            </li>
                            <li class="nav-item"> 
                                <a class="dropdown-item" href="{{route('admin.sponsors.create')}}">Sponsorizza appartamento <i class="fas fa-dollar-sign"></i></a>
                            </li>
                            <li class="nav-item"> 
                                <a class="dropdown-item" href="{{route('admin.messages')}}">Visualizza messaggi <i class="far fa-envelope"></i></a>
                            </li>
                            <li class="nav-item">

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                        <i class="fas fa-sign-out-alt"></i>
                                    </a>
                                </li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            {{-- nostro menu dropdown --}}


        </div>
    </nav>

</div>

</header>

<script>
      // AUTOCOMPLETE
  (function() {
    var placesAutocomplete = places({
      appId: 'plWXAPEAGDXR',
      apiKey: '45954f563deec0d78ef4a69018cdb84f',
      container: document.querySelector('#address')
    });

    if (document.querySelector('#address-value') != null) {
      var address = document.querySelector('#address-value');
    }


  })();
  // END AUTOCOMPLETE
</script>