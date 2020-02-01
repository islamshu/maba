@extends('adminLayout')
@section('content')

    <div class="container" style="margin-top:100px">
        <hr />
        <h1 style="display: inline-block;">Sliders</h1>
        {{-- <button type="button" class="btn btn-success float-right">

        </button> --}}

        <a href="/admin/sliders/create" class="btn btn-success float-right" >Add Slider</a>
        <hr />
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>

                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sliders as $slider)


                <tr>
                    <td>{{$slider->text}}</td>
                    <td><img src="/images/{{$slider->image}}" width="50px" height="50px" alt=""></td>

                    <td>
                    <a href="/admin/sliders/{{$slider->id}}/edit" class="btn btn-outline-primary">Edit</a> |
                    <form style="display :inline"  action="/admin/sliders/{{$slider->id}}" method="POST">
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
