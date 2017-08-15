@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row">
            <a href="{{route('accountability.create')}}" class="btn btn-primary col-xs-12 col-sm-6 col-md-4 pull-right">Assign New Accountability</a>
            <div class="panel panel-default">
                <div class="panel-heading">Assigned Accountabilities</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Custodian</th>
                                <th>Department</th>
                                <th>Section</th>
                                <th>Cost Center</th>
                                <th>Restrictions</th>
                                <th>Ownership</th>
                                <th>Licence</th>
                                <th>Transfers</th>                                
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($assets as $asset)
                            <tr>
                                <td>
                                    {{$asset->custodian->name}}
                                </td>
                                <td>
                                    {{$asset->department->name}}
                                </td>
                                <td>
                                    {{$asset->section->name}}
                                </td> 
                                <td>
                                    {{$asset->costCenter->name}}
                                </td>
                                <td>
                                    {{$asset->restrictions}}
                                </td>
                                <td>
                                    {{$asset->ownership}}
                                </td>
                                <td>
                                    {{$asset->licence}}
                                </td>
                                <td>
                                    {{$asset->transfers}}    
                                </td>
                            </tr>
                         @endforeach
                           
                        </tbody>
                    </table>
                    <div class="row text-center">
                        {{ $assets->links() }}
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection