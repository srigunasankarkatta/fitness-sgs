<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <div class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <img src="{{ asset('assets/brand/logo-full.png') }}" height="50px" alt="">
           
        </div>
        <div class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
            <img src="{{ asset('assets/brand/fitmi_logo.svg') }}" height="50px" alt="">
          
        </div>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item"><a class="nav-link" href="{{ route('admin.dashboard') }}">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-speedometer') }}"></use>
                </svg> Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>
        {{-- <li class="nav-title">Theme</li> --}}
        <li class="nav-item"><a class="nav-link" href="colors.html">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-drop') }}"></use>
                </svg> Users</a></li>
        {{-- <li class="nav-item"><a class="nav-link" href="typography.html">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-pencil') }}"></use>
                </svg> Fitmi Experts</a></li> --}}
        {{-- <li class="nav-title">Components</li> --}}
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-puzzle') }}"></use>
                </svg> Fitmi Experts </a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{url('admin/expert')}}"><span class="nav-icon"></span>
                        Experts</a>
                </li>
                {{-- <li class="nav-item"><a class="nav-link" href="{{url('admin/expert/create')}}"><span class="nav-icon"></span>
                        Add New Expert</a>
                </li> --}}
                <li class="nav-item"><a class="nav-link" href="{{url('admin/expert-category/create')}}"><span class="nav-icon"></span>
                        Add Category</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{url('admin/expert-category')}}"><span class="nav-icon"></span>
                        Categories</a>
                </li>
            </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-puzzle') }}"></use>
                </svg> Fitness Centers </a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{url('admin/fitness-center')}}"><span class="nav-icon"></span>
                        Fitness Centers</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{url('admin/fitness-center-category')}}"><span class="nav-icon"></span>
                        Categories</a>
                </li>
            </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-puzzle') }}"></use>
            </svg> Blog </a>
        <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="{{url('admin/blog-post')}}"><span class="nav-icon"></span>
                    Posts</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="{{url('admin/blog-category')}}"><span class="nav-icon"></span>
                    Categories</a>
            </li>
        </ul>
    </li>
    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>
