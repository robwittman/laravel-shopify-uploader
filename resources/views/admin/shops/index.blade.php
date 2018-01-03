@extends('layouts/admin')

@section('content')

    <div class="col-sm-8 col-sm-offset-2 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Shops
            </div>
            @if (count($shops) == 0)
                <div class="panel-body">
                    <div class="alert alert-warning">
                        No shops installed yet... :(
                    </div>
                </div>
            @else
                <table class='table table-striped'>
                    <tr>
                        <th>ID</th>
                        <th>Domain</th>
                        <th>Shop Owner</th>
                        <th></th>
                    </tr>
                    @foreach( $shops as $shop)
                        <tr>
                            <td>{{ $shop->id }}</td>
                            <td>{{ $shop->myshopify_domain }}</td>
                            <td>{{ $shop->shop_owner }}</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Actions <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ URL::to('admin/shops/'.$shop->id) }}">View</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            @endif
            <div class="panel-footer">
                
            </div>
        </div>
    </div>

@endsection
