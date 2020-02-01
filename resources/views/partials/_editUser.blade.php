@extends('layout')
@section('content')


<div class="container" style="margin-top:100px">
    <br />
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h4>Edit User</h4>
                    <hr />
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                <form method="POST" action="/admin/products/{{$product->id}}">
                    @method('put')
                    @csrf
                        <div class="form-group row">
                            <label for="name" class="col-4 col-form-label">Name</label>
                            <div class="col-8">
                                <input id="name"
                                       name="name"
                            value="{{$product->name}}"
                                       placeholder="name"
                                       class="form-control here"
                                       type="text" />
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
                                       value="{{$product->title}}"
                                       class="form-control here"
                                       type="text" />
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
                                       value="{{$product->subtitle}}"
                                       placeholder="subTitle"
                                       class="form-control here"
                                       type="text" />
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
                                       value="{{$product->price}}"
                                       placeholder="price"
                                       class="form-control here"
                                       type="number" />
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">
                                    Please Price is required.
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-4 col-form-label">Description</label>
                            <div class="col-8">
                                <textarea id="description"
                                          name="description"

                                          placeholder="description"
                                          class="form-control here">{{$product->description}}</textarea>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">
                                    Please Price is required.
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="time" class="col-4 col-form-label">Image Online URL</label>
                            <div class="col-8">
                                <input id="image"
                                       name="imageURL"
                                       value="{{$product->imageURL}}"
                                       placeholder="Image Online URL"
                                       class="form-control here"
                                       type="text" />
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

