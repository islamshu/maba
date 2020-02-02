@extends('adminLayout')
@section('content')

    <div class="container col-md-8" style="margin-top:100px">
        <hr />
        <div class="row">
            <div class="col-sm-10"><h1>Edit users</h1></div>
        </div>
        <hr />
        <div class="row">
            {{-- <div class="col-sm-3">
                <!-- left col -->


            </div> --}}
            <!-- /col-3 -->
            <div class="col-sm-12">
                @include('partials._error')
            <form  action="/admin/users/{{$user->id}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="text-center">
                    <img src="images{{$user->image}} "  height="200" width="200"
                         class="avatar rounded-circle img-thumbnail"
                         alt="avatar" />
                    <h6>Upload a different photo...</h6>
                    <input type="file" name="image" class="text-center center-block file-upload" />
                </div>
                <br />
                <div class="form-group">
                    <div class="col-xs-6">
                        <label for="firstName"><h4>First Name</h4></label>
                        <input type="text"
                               class="form-control"
                               name="firstName"
                               id="firstName"
                               placeholder="you@email.com"
                               value="{{$user->firstName}}" />
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-6">
                        <label for="firstName"><h4>First Name</h4></label>
                        <input type="text"
                               class="form-control"
                               name="lastName"
                               id="lastName"
                               placeholder="you@email.com"
                               value="{{$user->lastName}}" />
                    </div>
                </div>


                    <div class="form-group">
                        <div class="col-xs-6">
                            <label for="email"><h4>Email</h4></label>
                            <input type="email"
                                   class="form-control"
                                   name="email"
                                   id="email"
                                   placeholder="you@email.com"
                                   value="{{$user->email}}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6">
                            <label for="location"><h4>Location</h4></label>
                            <input type="text"
                                   class="form-control"
                                   id="location"
                                   name="location"
                                   placeholder="somewhere"
                                   value="{{$user->location}}"/>
                        </div>
                    </div>

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        @php
                                    $models = ['users','products','slider'];
                                    $maps =['create' , 'read' , 'update' , 'delete'];
                         @endphp
                         @foreach ($models as $index=>$model)
                        <li class="nav-item">
                          <a class="nav-link  {{$index ==0 ? 'active' : '' }}" id="home-tab" data-toggle="tab" href="#{{$model}}" role="tab" aria-controls="home" aria-selected="true">{{$model}} </a>
                        </li>
                        @endforeach


                      </ul>
                                <div class="card-body">
                                    <div class="tab-content">

                                        @foreach ($models as $index=>$model)

                                            <div class="tab-pane {{ $index == 0 ? 'active' : '' }}" id="{{ $model }}">

                                                @foreach ($maps as $map)
                                                    {{--create_users--}}
                                                    <label><input type="checkbox" name="permissions[]" {{ $user->hasPermission($map . '-' . $model) ? 'checked' : '' }} value="{{ $map . '-' . $model }}">  {{$map}}</label>
                                                @endforeach

                                            </div>

                                        @endforeach

                                    </div><!-- end of tab content -->

                                </div><!-- end of nav tabs -->

                            </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <br />
                            <button class="btn btn-lg btn-success  d-flex" type="submit">
                                <i class="material-icons mr-1"> save </i> Save
                            </button>
                        </div>
                    </div>
                </form>

                <hr />
            </div>
            <!-- /tab-content -->
        </div>
        <!-- /col-9 -->

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
