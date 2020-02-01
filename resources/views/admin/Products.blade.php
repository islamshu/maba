@extends('layout')
@section('content')

    <div class="container" style="margin-top:100px">
        <hr />
        <h1 style="display: inline-block;">Products</h1>
        {{-- <button type="button" class="btn btn-success float-right">

        </button> --}}

        <a href="/admin/products/create" class="btn btn-success float-right" >Add Product</a>
        <a href="/pdf" class="btn btn-primary float-right" >Export PDF</a>
        <hr />
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Title</th>
                    <th scope="col">SubTitle</th>
                    <th scope="col">Price</th>
                    <th scope="col" style="width: 350px;">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)


                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->title}}</td>
                    <td>{{$product->subtitle}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->description}}</td>
                    <td>
                    <a href="/admin/products/{{$product->id}}/edit" class="btn btn-outline-primary">Edit</a> |
                    <form style="display :inline"  action="/admin/products/{{$product->id}}" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-xs btn-danger" name="delete" value="Delete">Delete</button>

                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

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
