<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Offcanvas navbar large">
    <div class="container"> <a class="navbar-brand" href="#">Authentication Project</a> <button class="navbar-toggler"
            type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2"
            aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar2"
            aria-labelledby="offcanvasNavbar2Label">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Offcanvas</h5> <button type="button"
                    class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body">

                <!-- left navbar here-->
                <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
                    @auth
                        <li class="nav-item"> <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a> </li>
                    @else
                        <li class="nav-item"> <a class="nav-link active" aria-current="page" href="/">Home</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#">About</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#">Support</a> </li>
                    @endauth
                </ul>

                <!--right navbar here-->
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    @auth
                        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Welcome, {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="btn nav-link">Log Out</button>
                                        </form>
                                    </a></li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item"> <a class="nav-link" href="{{ route('login') }}">Login</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('register') }}">Register</a> </li>
                    @endauth
                </ul>

            </div>
        </div>
    </div>
</nav>