@extends('layouts.admin')

@section('content')

<div class="col-sm-8 col-sm-offset-2 col-xs-12">
    <div class="panel panel-default">
        <form class="form-horizontal" action="/admin/users" method="post">
            {{ csrf_field() }}
            <div class="panel-heading">
                Create User
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class='col-sm-3 control-label'>Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="name" value="" class='form-control'>
                    </div>
                </div>
                <div class="form-group">
                    <label class='col-sm-3 control-label'>Email</label>
                    <div class="col-sm-9">
                        <input type="text" name="email" value="" class='form-control'>
                    </div>
                </div>
                <div class="form-group">
                    <label class='col-sm-3 control-label'>Password</label>
                    <div class="col-sm-9">
                        <input type="password" name="password" value="" class='form-control'>
                        <span class="help-block">Leave blank to autogenerate passwords</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class='col-sm-3 control-label'>Confirm</label>
                    <div class="col-sm-9">
                        <input type="password" name="confirm" value="" class='form-control'>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <button type="submit" name="button" class='btn btn-primary pull-right'>Create</button>
                <div class="clearfix"></div>
            </div>
        </form>
    </div>
</div>

@endsection
