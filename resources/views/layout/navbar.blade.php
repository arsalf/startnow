<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('image/logo-start-now-purple.png') }}" alt="..." height="36">
            Invest Your Idea
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            {{-- <span class="navbar-toggler-icon"></span> --}}
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <form class="search d-flex me-auto ms-auto w-50">
                <input class="form-control rounded-0" type="search" placeholder="Search Ideas or Creators"
                    aria-label="Search Ideas or Creators">
                <button class="btn btn-outline-primary rounded-0" type="submit"><i
                        class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <div class="ms-2">
                <div class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                        data-bs-display="static" aria-expanded="false">
                        <span class="bg-info rounded-circle px-2">3</span> <i class="far fa-bell"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-lg-end">
                        <li>
                            <div class="toast-container">
                                <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="toast-header">
                                        <svg class="bd-placeholder-img rounded me-2" width="20" height="20"
                                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                            preserveAspectRatio="xMidYMid slice" focusable="false">
                                            <rect width="100%" height="100%" fill="#007aff"></rect>
                                        </svg>

                                        <strong class="me-auto">Bootstrap</strong>
                                        <small class="text-muted">11 mins ago</small>
                                        <button type="button" class="btn-close" data-bs-dismiss="toast"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="toast-body">
                                        Hello, world! This is a toast message.
                                    </div>
                                </div>
                                <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="toast-header">
                                        <svg class="bd-placeholder-img rounded me-2" width="20" height="20"
                                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                            preserveAspectRatio="xMidYMid slice" focusable="false">
                                            <rect width="100%" height="100%" fill="#007aff"></rect>
                                        </svg>

                                        <strong class="me-auto">Bootstrap</strong>
                                        <small class="text-muted">11 mins ago</small>
                                        <button type="button" class="btn-close" data-bs-dismiss="toast"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="toast-body">
                                        Hello, world! This is a toast message.
                                    </div>
                                </div>
                                <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="toast-header">
                                        <svg class="bd-placeholder-img rounded me-2" width="20" height="20"
                                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                            preserveAspectRatio="xMidYMid slice" focusable="false">
                                            <rect width="100%" height="100%" fill="#007aff"></rect>
                                        </svg>

                                        <strong class="me-auto">Bootstrap</strong>
                                        <small class="text-muted">11 mins ago</small>
                                        <button type="button" class="btn-close" data-bs-dismiss="toast"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="toast-body">
                                        Hello, world! This is a toast message.
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                        data-bs-display="static" aria-expanded="false">
                        <i class="fa-solid fa-circle-user fa-lg"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-lg-end">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Log Out</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
