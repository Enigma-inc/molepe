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
                        <div class="form-group{{ $errors->has('asset-dimensions') ? ' has-error' : '' }}">
                            <label for="asset-dimensions" class="col-md-4 control-label">Dimensions/Capacity</label></label>

                            <div class="col-md-6">                            
                            {!! Form::text('dimensions', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('asset-dimensions'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('asset-dimensions') }}</strong>
                                    </span> 
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('asset-construction') ? ' has-error' : '' }}">
                            <label for="asset-construction" class="col-md-4 control-label">Asset Construction</label></label>

                            <div class="col-md-6">                            
                            {!! Form::text('construction', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('asset-construction'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('asset-construction') }}</strong>
                                    </span> 
                                @endif
                            </div>
                        </div>
                        <div class="margin-bottom-40 form-group{{$errors->has('asset-subclass') ? 'has-error' : ''}}">
                            <label for="asset-subclass" class="col-md-4 control-label">Asset Subclass</label>
                            <div class="col-md-6">
                                <select name="asset-subclass" id="asset-subclass" class="form-control">
                                    <option value=""></option>
                                    @foreach($assetSubclasses as $assetSubclass)
                                        <option value="{{$assetSubclass->id}}">{{$assetSubclass->name}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('asset-subclass'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('asset-subclass') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                                                  
                        <div class="margin-bottom-40 form-group{{$errors->has('parent-asset') ? 'has-error' : ''}}">
                            <label for="parent-asset" class="col-md-4 control-label">Parent Class</label>
                            <div class="col-md-6">
                                <select name="parent-asset" id="parent-asset" class="form-control">
                                    <option value=""></option>
                                    @foreach($parentAssets as $parentAsset)
                                        <option value="{{$parentAsset->id}}">{{$parentAsset->asset_number}} - {{$parentAsset->description}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('parent-asset'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('parent-asset') }}</strong>
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
                        <div class="margin-bottom-40 form-group{{$errors->has('asset-group') ? 'has-error' : ''}}">
                            <label for="asset-group" class="col-md-4 control-label">Asset Functional Group</label>
                            <div class="col-md-6">
                                <select name="asset-group" id="asset-group" class="form-control">
                                    <option value=""></option>
                                    @foreach($assetGroups as $assetGroup)
                                        <option value="{{$assetGroup->id}}">{{$assetGroup->name}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('asset-group'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('asset-group') }}</strong>
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