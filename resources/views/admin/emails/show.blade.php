@extends('layouts.admin')

@section('content')

<div class="col-sm-8 col-sm-offset-2 col-xs-12">
    <div class="panel panel-default form-horizontal">
        <div class="panel-heading">
            View Template
        </div>
        <div class="panel-body">
            <div class="form-group">
                <label class='col-sm-3 control-label'>Name</label>
                <div class="col-sm-9">
                    <input type="text" name="name" value="{{ $email->name }}" class='form-control' disabled>
                </div>
            </div>
            <div class="form-group">
                <label class='col-sm-3 control-label'>Content</label>
                <div class="col-sm-9">
                    <textarea name="content" rows="8" cols="80" class='form-control' disabled>{{ $email->content }}</textarea>
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <a type="submit" name="button" class='btn btn-primary pull-right' href="{{ URL::to('/admin/emails/'.$email->id.'/edit') }}">Edit</a>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

@endsection
