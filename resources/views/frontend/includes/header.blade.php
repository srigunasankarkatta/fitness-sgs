<header class="header">
    <div class="container">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
          <img src="{{asset('assets/fitmi/images/logo.svg')}}" class="img-fluid" alt="FitMi">
        </a>

        <div class="nav-item-dropdown d-lg-none ml-auto mr-2">
          <label>Your city</label>
          <div class="nav-dropdown">
            <i class="icon icon-map"></i>
            <select class="select2 w-100">
              <option>Haridwar</option>
              <option>Delhi</option>
              <option>Mumbai</option>
            </select>
          </div>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mobileMenu" aria-controls="mobileMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <div class="collapse navbar-collapse" id="mobileMenu">
          <ul class="navbar-nav navbar-nav-icon mr-auto">
            @forelse ($fitnesscenter_categories as $item)
              <li class="nav-item">
                <a class="nav-link" href="{{url('/'.$item->slug)}}">{!!$item->image!!} {{$item->name}}</a>
              </li>
            @empty
                
            @endforelse
            {{-- <li class="nav-item">
              <a class="nav-link" href="#"><i class="icon icon-dumbbell"></i> Workout</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="icon icon-yoga"></i> Yoga</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="icon icon-exercise"></i> Meditation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="icon icon-heart"></i> Health</a>
            </li> --}}
          </ul>
          <ul class="navbar-nav ml-auto align-items-center">
            <li class="nav-item nav-item-dropdown d-lg-block d-none">
              <label>Your city</label>
              <div class="nav-dropdown">
                <i class="icon icon-map"></i>
                <select class="select2 w-100">
                  <option>Haridwar</option>
                  <option>Delhi</option>
                  <option>Mumbai</option>
                </select>
              </div>
            </li>
            {{-- <li class="nav-item">
              <a class="button button-primary d-lg-inline-flex d-flex" href="javascript:void(0);" data-toggle="modal" data-target="#modalLogin">
                <span>Sign I</span>
              </a>
            </li> --}}
            <li class="nav-item">
                <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                {{-- <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a> --}}
                            @else
                               
                                <a class="button button-primary d-lg-inline-flex d-flex" href="{{ route('login') }}" data-toggle="modal" data-target="#modalLogin">
                                    <span>Sign In</span>
                                  </a>
        
                                {{-- @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                @endif --}}
                            @endauth
                        </div>
                    @endif
                </div>
            </li>
            
          </ul>
        </div>
      </nav>
    </div>
  </header>
