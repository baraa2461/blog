@extends('admin.master')

@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="row" style="display: inline-block;">
                @if($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{$message}}
                    </div>
                @endif

                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2> Edit Users</h2>
                    </div>

                    <div class="pull-right">
                        <a class="btn btn-success" href="{{route('users.index')}}">back</a>
                    </div>

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <strong>whoop!</strong> there were some problems
                            <ul>
                                @foreach($errors as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{route('users.update' , $user -> id)}}">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    {{--                                    <input class="form-control" type="text" name="name" value="{{$user->name}}">--}}
                                    <input class="form-control" type="text" name="name"
                                           value="{{old('name') ? old('name') : $user->name}}">

                                    @error('name')
                                    <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Email :</strong>
{{--                                    <input class="form-control" type="text" name="email" value="{{$user->email}}">--}}
                                    <input class="form-control" type="text" name="email"
                                           value="{{old('email') ??  $user->email}} ">

                                    @error('email')
                                    <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary"> submit</button>

                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>

        <!-- /page content -->


@stop
