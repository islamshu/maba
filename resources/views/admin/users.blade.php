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
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                   
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)


                <tr>
                    <td>{{$user->firstName}}</td>
                    <td>{{$user->lastName}}</td>
                    <td>{{$user->email}}</td>

                    <td>
                    <a href="/admin/users/{{$user->id}}/edit" class="btn btn-outline-primary">Edit</a> |
                    <form style="display :inline"  action="/admin/users/{{$user->id}}" method="POST">
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
