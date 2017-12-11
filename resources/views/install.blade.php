@extends('layouts/site')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
            <div class="panel panel-default">
                <form class="form-horizontal" action="/shopify/install" method="post">
                    {{ csrf_field() }}
                    <div class="panel-heading">
                        Install {{ config('app.name') }}
                    </div>
                    <div class="panel-body">
                        <div class='form-group'>
                            <label class='col-sm-3 control-label'>Domain</label>
                            <div class="col-sm-9">
                                <input type="text" name="myshopify_domain" value="" class='form-control'>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button type="submit" class='btn btn-primary pull-right' name="button">Install</button>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
