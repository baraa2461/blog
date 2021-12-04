@extends('admin.master')

@section('content')

    <!-- page content -->
    <div class="container">
        <div class="right_col" role="main">
            <div class="">
                <div class="row" style="display: inline-block;">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Users</h2>
                        </div>

                        <div class="pull-right">
                            <a class="btn btn-success" href="{{route('users.create')}}"> Create new user</a>
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
                            <th>Email</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        @foreach($users as $user)
                            <tr>
                                <td>{{++$loop ->iteration }}</td>
                                <td>{{$user -> name}}</td>
                                <td>{{$user -> email}}</td>
                                <td>{{$user -> created_at}}</td>
                                <td>
                                    <form method="POST" action="{{route('users.destroy' , $user -> id)}}">
                                        <a class="btn btn-info" href="{{route('users.show' , $user -> id)}}"> show </a>
                                        <a class="btn btn-info" href="{{route('users.edit' , $user -> id)}}"> edit </a>

                                        @csrf
                                        @method('Delete')
                                        <button type="submit" class="btn btn-danger"> delete </button>

                                    </form>

                                </td>


                            </tr>

                        @endforeach
                    </table>


                </div>
            </div>
        </div>
    </div>


    <!-- /page content -->


@stop
