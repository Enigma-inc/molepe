 @extends('layouts.app')
 @section('content')
      <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit an Asset</div>
                <div class="panel-body">
                {!! Form::model($asset,['method'=>'PATCH','route' => ['asset.update', $asset->id],'class'=>'form-horizontal']) !!}
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('asset-number') ? ' has-error' : '' }}">
                            <label for="asset-number" class="col-md-4 control-label">Asset Number</label>

                            <div class="col-md-6">
                            {!! Form::text('asset_number',null,['class' => 'form-control'])!!}
                                @if ($errors->has('asset-number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('asset-number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('asset-description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Asset Description</label>

                            <div class="col-md-6">
                            {!! Form::textarea('description',null,['class' => 'form-control'])!!}
                                @if ($errors->has('asset-description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('asset-description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('specific-indentifier') ? ' has-error' : '' }}">
                            <label for="specific-indentifier" class="col-md-4 control-label">Asset Specific Identifiers</label>

                            <div class="col-md-6">                            
                            {!! Form::text('specific_identifiers', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('specific-indentifier'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('specific-indentifier') }}</strong>
                                    </span> 
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('latitude') ? ' has-error' : '' }}">
                            <label for="latitude" class="col-md-4 control-label">Coordinates(Latitude)</label></label>

                            <div class="col-md-6">                            
                            {!! Form::text('latitude', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('latitude'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('latitude') }}</strong>
                                    </span> 
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('longitude') ? ' has-error' : '' }}">
                            <label for="longitude" class="col-md-4 control-label">Coordinates(Longitude)</label></label>

                            <div class="col-md-6">
                            {!! Form::text('longitude', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('longitude'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('longitude') }}</strong>
                                    </span> 
                                @endif
                            </div>
                        </div>

                        <div class="margin-bottom-40 form-group{{$errors->has('asset-zone') ? 'has-error' : ''}}">
                            <label for="asset-zone" class="col-md-4 control-label">Asset Zone</label>
                            <div class="col-md-6">
                                <select name="asset-zone" id="asset-zone" class="form-control">
                                    <option value="asset_zone"></option>
                                    @foreach($assetZones as $assetZone)
                                        <option value="{{$assetZone->id}}">{{$assetZone->name}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('asset-zone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('asset-zone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="margin-bottom-40 form-group{{$errors->has('asset-location') ? 'has-error' : ''}}">
                            <label for="asset-location" class="col-md-4 control-label">Asset Location</label>
                            <div class="col-md-6">
                                <select name="asset-location" id="asset-location" class="form-control">
                                    <option value=""></option>
                                    @foreach($assetLocations as $assetLocation)
                                        <option value="{{$assetLocation->id}}">{{$assetLocation->name}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('asset-location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('asset-location') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                        
                        
                         <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary col-xs-12">
                                     Submit
                                </button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
  @endsection