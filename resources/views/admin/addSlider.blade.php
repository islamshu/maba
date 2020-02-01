@extends('adminLayout')
@section('content')


    <div class="container" style="margin-top:100px">
        <br />
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Add Product</h4>
                        <hr />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="/admin/sliders" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Text</label>
                                <div class="col-8">
                                    <input id="text"
                                           name="text"
                                           placeholder="text"
                                           class="form-control here"
                                           type="text" />
                                    <div class="valid-feedback">Looks good!</div>

                                    <div class="invalid-feedback">Please text is required.</div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image" class="col-4 col-form-label">Image </label>
                                <div class="col-8">
                                    <input id="image"
                                           name="image"
                                           placeholder="Image Online URL"
                                           class="form-control here"
                                           type="file" />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">
                                        Please Image is required.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-4 col-8">
                                    <button name="submit" type="submit" class="btn btn-primary">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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
