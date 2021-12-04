@extends('admin.master')

@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="row" style="display: inline-block;">

                <div class="container">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2> Add new category</h2>
                        </div>

                        <div class="pull-right">
                            <a class="btn btn-success" href="{{route('categories.index')}}">back</a>
                        </div>

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <strong>whoop!</strong> there are some problems
                                <ul>
                                    @foreach($errors as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{route('categories.store')}}">
                            @csrf
                            <div class="row  col-md-8">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Name:</strong>
                                        <input class="form-control" type="text" name="name" value="{{old('name')}}">

                                        @error('name')
                                        <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                                        @enderror

                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group" >
                                        <strong>Status :</strong>
                                        <select class="form-control" name="status">
                                            <option value="1">Enabled</option>
                                            <option value="0">Disabled</option>
                                        </select>

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
        </div>
    </div>

    <!-- /page content -->


@stop
