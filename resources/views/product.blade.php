@extends('adminlayout')
@section('content')

    <div class="container" style="margin-top:100px">
        <div class="card mb-3">
            <h3 class="card-header">{{$product->name}}</h3>
            <div class="card-body">
                <h5 class="card-title">{{$product->title}}</h5>
                <h6 class="card-subtitle text-muted">{{$product->subtitle}}</h6>
            </div>
            <img style="display: block;"
                 src="/images/{{$product->imageURL}}"
                 width="200"
                 height="200px"
                 alt="Card image" />
            <div class="card-body"><p class="card-text">{!!$product->description!!}</p></div>
            <ul class="list-group list-group-flush">

                <li class="list-group-item">{{$product->price}}</li>
            </ul>
            <div class="card-body">
                @guest
                        <button type="submit" disabled  class="btn btn-primary ">
                            Add to cart
                        </button>
                        @else

                        <form action="/cart" method="post" style="display: inline"> @csrf
                            <input type="hidden" value="{{$product->id}}" name="product_id">
                        <button type="submit"  class="btn btn-primary ">
                            Add to cart
                        </button>
                    </form>
                    @endguest
            </div>
        </div>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">© 2017-2018 Maba</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>
@endsection
