@extends('admin.master')

@section('content')

    <!-- page content -->
    <div class="container">
        <div class="right_col" role="main">
            <div class="">
                <div class="row" style="display: inline-block;">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Tags</h2>
                        </div>

                        <div class="pull-right">
                            <a class="btn btn-success" href="{{route('Tags.create')}}"> Create new Tags</a>
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
                        </tr>
                        </thead>
                        @foreach($tags as $tag)
                            <tr>
                                <td>{{++$loop ->iteration }}</td>
                                <td>{{$tag -> name}}</td>
                                <td>
                                    <form method="POST" action="{{route('Tags.destroy' , $tag -> id)}}">
{{--                                        <a class="btn btn-info" href="{{route('Tags.show' , $tag -> id)}}"> show </a>--}}
                                        <a class="btn btn-info" href="{{route('Tags.edit' , $tag -> id)}}"> edit </a>

                                        @csrf
                                        @method('Delete')
                                        <button type="submit" class="btn btn-danger"> delete</button>

                                    </form>

                                </td>


                            </tr>

                        @endforeach
                    </table>

{{--                    {{$tags -> links()}}--}}

                </div>
            </div>

        </div>

    </div>


@stop
