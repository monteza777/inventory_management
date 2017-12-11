@extends('layouts.master')
@section('title','Items | Inventory')
@section('page_title','Dashboard')
@section('head_title','Create Item')

@section('content')
  
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add new Item</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" action="{{ route('items-mgmt.update',['id' => $items->id]) }}">
                        {{ csrf_field() }}
                         {{method_field('PUT')}}
                        <div class="form-group{{ $errors->has('item_code') ? ' has-error' : '' }}">
                            <label for="item_code" class="col-md-4 control-label">Item Code</label>

                            <div class="col-md-6">
                                <input id="item_code" type="text" class="form-control" name="item_code" value="{{ $items->item_code }}" required autofocus>

                                @if ($errors->has('item_code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('item_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('item_description') ? ' has-error' : '' }}">
                            <label for="item_description" class="col-md-4 control-label">Item Description</label>

                            <div class="col-md-6">
                                <input id="item_description" type="text" class="form-control" name="item_description" value="{{ $items->item_description }}" required>

                                @if ($errors->has('item_description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('item_description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('uom') ? ' has-error' : '' }}">
                            <label for="uom" class="col-md-4 control-label">Uom</label>

                            <div class="col-md-6">
                                <input id="uom" type="text" class="form-control" name="uom" value="{{ $items->uom }}" required>

                                @if ($errors->has('uom'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('uom') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('qty') ? ' has-error' : '' }}">
                            <label for="qty" class="col-md-4 control-label">Quantity</label>

                            <div class="col-md-6">
                                <input id="qty" type="text" class="form-control" name="qty" value="{{$items->qty}}" required>

                                @if ($errors->has('qty'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('qty') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('buying_price') ? ' has-error' : '' }}">
                            <label for="buying_price" class="col-md-4 control-label">Buying Price</label>

                            <div class="col-md-6">
                                <input id="buying_price" type="text" class="form-control" name="buying_price" value="{{$items->buying_price}}" required>

                                @if ($errors->has('buying_price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('buying_price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('selling_price') ? ' has-error' : '' }}">
                            <label for="selling_price" class="col-md-4 control-label">Selling Price</label>

                            <div class="col-md-6">
                                <input id="selling_price" type="text" class="form-control" name="selling_price" value="{{$items->selling_price}}" required>

                                @if ($errors->has('selling_price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('selling_price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                                <a class="btn btn-danger" href="{{route('items-mgmt.index')}}">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
