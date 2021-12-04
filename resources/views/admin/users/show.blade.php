@extends('admin.master')

@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="container">

            <div class="row" style="display: inline-block;">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2> Show Users</h2>
                    </div>

                    <div class="pull-right">
                        <a class="btn btn-success" href="{{route('users.index')}}"> Back user</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{$user->name}}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{$user->email}}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Details:</strong>
                            {{$user->remember_token}}
                        </div>
                    </div>


                </div>
            </div>
            </div>
        </div>
    </div>

    <!-- /page content -->


@stop
