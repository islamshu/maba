<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="/">Maba</a>
    <button class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarColor01"
            aria-controls="navbarColor01"
            aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item"><a href="/" class="nav-link">Products</a></li>
            <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
        </ul>

        <form action="/" method="GET">
            <div >
                <divmy-2 my-sm-0 ml-4 >
                <input type="search" name="search" class="form-control" placeholder="serarch" value="{{request()->search}}" >
                </div>
            </div>
        </form>
                   @guest

            <a href="/register" class="btn btn-secondary my-2 my-sm-0 ml-4">Sign up</a>
            <a href="/login" class="btn btn-danger my-2 my-sm-0 ml-2">Login</a>
        </div>
        @else
        <a href="/cart" class="p-cart">
            <span class="material-icons md-48 " style="color :black">shopping_cart</span>
            <span class="badge badge-light bg-secondary">{{Auth::user()->products()->sum('count')}}</span>
        </a>

        <div class="form-inline my-2 my-lg-0">
            <a href="/profile" class="btn btn-secondary my-2 my-sm-0 ml-4">Profile</a>
            <a href="/logout" class="btn btn-secondary my-2 my-sm-0 ml-2">LogOut</a>
        </div>
        @endguest



    </div>
</nav>
