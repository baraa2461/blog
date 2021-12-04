@extends('admin.master')

@section('content')

    <!-- page content -->
    <div class="container">
        <div class="right_col" role="main">
            <div class="">
                <div class="row" style="display: inline-block;">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Categories</h2>
                        </div>

                        <div class="pull-right">
                            <a class="btn btn-success" href="{{route('categories.create')}}"> Create new Categories</a>
                        </div>
                    </div>

                    @if($message = Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            {{$message}}
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th> Name</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{++$loop ->iteration }}</td>
                                <td>{{$category -> name}}</td>
                                <td> {{($category -> status == 0) ? 'Disabled' : 'Enabled'}}  </td>
                                <td>
                                    <form method="POST" action="{{route('categories.destroy' , $category -> id)}}">
                                        <a class="btn btn-info" href="{{route('categories.show' , $category -> id)}}"> show </a>
                                        <a class="btn btn-info" href="{{route('categories.edit' , $category -> id)}}"> edit </a>

                                        @csrf
                                        @method('Delete')
                                        <button type="submit" class="btn btn-danger"> delete</button>

                                    </form>

                                </td>


                            </tr>

                        @endforeach
                    </table>


                </div>
            </div>
            {{$categories -> links()}}

        </div>
    </div>


@stop
