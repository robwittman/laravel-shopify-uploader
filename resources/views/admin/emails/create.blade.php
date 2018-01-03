@extends('layouts.admin')

@section('content')

<div class="col-sm-8 col-sm-offset-2 col-xs-12">
    <div class="panel panel-default">
        <form class="form-horizontal" action="/admin/emails" method="post">
            {{ csrf_field() }}
            <div class="panel-heading">
                Create Template
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class='col-sm-3 control-label'>Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="name" value="" class='form-control'>
                    </div>
                </div>
                <div class="form-group">
                    <label class='col-sm-3 control-label'>Content</label>
                    <div class="col-sm-9">
                        <textarea name="content" rows="8" cols="80" class='form-control'></textarea>
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
