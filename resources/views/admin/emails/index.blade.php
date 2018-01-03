@extends('layouts.admin')

@section('content')

<div class="col-sm-8 col-sm-offset-2 col-xs-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            Email Templates
        </div>
        @if (count($emails) == 0)
            <div class="panel-body">
                <div class="alert alert-warning">
                    We don't have any templates yet. Create one first
                </div>
            </div>
        @else
            <table class='table table-striped'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Created At</th>
                    <th></th>
                </tr>
                @foreach( $emails as $email)
                    <tr>
                        <td>{{ $email->id }}</td>
                        <td>{{ $email->name }}</td>
                        <td>{{ $email->created_at }}</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Actions <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ URL::to('admin/emails/'.$email->id) }}">View</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        @endif
        <div class="panel-footer">
            <a class="btn btn-primary pull-right" name="button" href='/admin/emails/create'>Create Template</a>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

@endsection
