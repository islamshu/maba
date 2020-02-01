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





        <div class="form-inline my-2 my-lg-0">
            <a  class="btn btn-secondary my-2 my-sm-0 ml-4">{{Auth::user()->firstName}}{{' '}}{{Auth::user()->lastName}}</a>
            <a href="/logout" class="btn btn-secondary my-2 my-sm-0 ml-2">LogOut</a>
        </div>




    </div>
</nav>
