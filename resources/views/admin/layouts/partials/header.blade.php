<div class="nav-header">
    <a href="{{ route('home') }}" target="_blank" class="brand-logo">
        {{-- <img class="logo-abbr" src="{{ asset('assets/img/logo.png') }}" alt=""> --}}
        <img class="logo-compact" src="{{ asset('assets/img/logo.png') }}" alt="">
        <img class="brand-title" src="{{ asset('assets/img/logo.png') }}" alt="">
    </a>

    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>

<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                </div>

                <ul class="navbar-nav header-right">
                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                            <i class="mdi mdi-account"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <form action="{{ route('admin.logout') }}" method="POST" class="d-inline-block w-100">
                                @csrf
                                <button type="submit" class="dropdown-item border-0 bg-transparent w-100 text-left">
                                    <i class="icon-key"></i>
                                    <span class="ml-2">Logout</span>
                                </button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>