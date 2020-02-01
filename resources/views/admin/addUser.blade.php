@extends('layout')
@section('content')


    <div class="container" style="margin-top:100px">
        <br />
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Add User</h4>
                        <hr />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="/admin/users" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="firstName" class="col-4 col-form-label">FirstName</label>
                                <div class="col-8">
                                    <input id="firstName"
                                           name="firstName"
                                           placeholder="firstName"
                                           class="form-control here"
                                           type="text" />
                                    <div class="valid-feedback">Looks good!</div>

                                    <div class="invalid-feedback">Please first name is required.</div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lastName" class="col-4 col-form-label">Lirst Name</label>
                                <div class="col-8">
                                    <input id="lastName"
                                           name="lastName"
                                           placeholder="lastName"
                                           class="form-control here"
                                           type="text" />
                                    <div class="valid-feedback">Looks good!</div>

                                    <div class="invalid-feedback">
                                        Please last Name is required.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-4 col-form-label">Email</label>
                                <div class="col-8">
                                    <input id="email"
                                           name="email"
                                           placeholder="email"
                                           class="form-control here"
                                           type="text" />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">
                                        Please email is required.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-4 col-form-label">Password</label>
                                <div class="col-8">
                                    <input id="password"
                                           name="password"
                                           placeholder="password"
                                           class="form-control here"
                                           type="password" />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">
                                        Please password is required.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password_confiramtion" class="col-4 col-form-label">confiramtion password</label>
                                <div class="col-8">
                                    <input id="password_confiramtion"
                                           name="password_confiramtion"
                                           placeholder="password_confiramtion"
                                           class="form-control here"
                                           type="password" />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">
                                        Please confiramtion password  is required.
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
