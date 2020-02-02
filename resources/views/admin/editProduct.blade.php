@extends('adminLayout')
@section('content')


    <div class="container col-md-8" style="margin-top:100px">
        <br />
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Edit Product</h4>
                        <hr />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <form action="/admin/products/{{$product->id}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group row">
                                <label for="name" class="col-4 col-form-label">Name</label>
                                <div class="col-8">
                                    <input id="name"
                                           name="name"
                                           placeholder="name"
                                           class="form-control here"
                                           type="text"
                                           value="{{$product->name}}"/>

                                    <div class="valid-feedback">Looks good!</div>

                                    <div class="invalid-feedback">Please name is required.</div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="title" class="col-4 col-form-label">Title</label>
                                <div class="col-8">
                                    <input id="title"
                                           name="title"
                                           placeholder="title"
                                           class="form-control here"
                                           type="text"
                                           value="{{$product->title}}"/>
                                    <div class="valid-feedback">Looks good!</div>

                                    <div class="invalid-feedback">
                                        Please title is required.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-4 col-form-label">SubTitle</label>
                                <div class="col-8">
                                    <input id="subTitle"
                                           name="subtitle"
                                           placeholder="subTitle"
                                           class="form-control here"
                                           type="text"
                                           value="{{$product->subtitle}}"/>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">
                                        Please SubTitle is required.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="time" class="col-4 col-form-label">Price</label>
                                <div class="col-8">
                                    <input id="price"
                                           name="price"
                                           placeholder="price"
                                           class="form-control here"
                                           type="number"
                                           value="{{$product->price}}"/>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">
                                        Please Price is required.
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-4 col-form-label">Description</label>
                                <div class="col-8">
                                    <textarea id="description"
                                              name="description"
                                              class="form-control summernote">
{{$product->description}}</textarea>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">
                                        Please Price is required.
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="time" class="col-4 col-form-label">Image </label>
                                <div class="col-8">
                                    <input id="image"
                                           name="imageURL"
                                           placeholder="Image Online URL"
                                           class="form-control here"
                                           type="file"
                                           value="{{$product->imageURL}}"/>
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
