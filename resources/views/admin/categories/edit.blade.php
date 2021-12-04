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
                        <h2> Edit category</h2>
                    </div>

                    <div class="pull-right">
                        <a class="btn btn-success" href="{{route('categories.index')}}">back</a>
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
                    <form method="POST" action="{{route('categories.update' , $category->id)}}">
                        @csrf
                        @method('PUT')
                        <div class="row col-md-8" >
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input class="form-control" type="text" name="name" value="{{$category->name}}">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Status :</strong>
                                    <select class="form-control" name="status">
                                        <option {{($category->status == 1) ? 'selected' : ''}} value="1" >Enabled</option>
                                        <option {{($category->status == 0) ? 'selected' : ''}} value="0" >Disabled</option>
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

        <!-- /page content -->


@stop
