@extends('layouts/admin')

@section('content')

    <div class="col-sm-8 col-sm-offset-2 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Users
            </div>
            <table class='table table-striped'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th></th>
                </tr>
                @foreach( $users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Actions <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ URL::to('admin/users/'.$user->id) }}">View</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
            <div class="panel-footer">
                <a href="{{ URL::to('admin/users/create') }}" class='btn btn-primary pull-right'>Create User</a>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

@endsection
