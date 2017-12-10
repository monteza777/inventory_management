@extends('layouts.master')
@section('title','Dashboard | Inventory')
@section('head_title','Item List')


@section('content')
  <section class="content">
      <div class="box">
  <div class="box-header">
    <div class="row">
        <div class="col-sm-8">
          <h3 class="box-title">List of items</h3>
        </div>
        <div class="col-sm-4">
          <a class="btn btn-primary pull-right" href="{{ route('items-mgmt.create') }}">Add new item</a>
        </div>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
      <div class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-6"></div>
      </div>
    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
      <div class="row">
        <div class="col-sm-12">
          <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
            <thead>
              <tr role="row">
                <th width="10%">Item Code</th>
                <th width="20%">Item Description</th>
                <th width="10%">Uom</th>
                <th width="5%">Quantity</th>
                <th width="10%">Buying Price</th>
                <th width="15%">Selling Price</th>
                <th width="20%">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($items as $item)
                <tr role="row" class='grid_2'>
                  <td class="col-md-2">{{ $item->item_code}}</td>
                  <td class="col-md-2">{{ $item->item_description }}</td>
                  <td class="col-md-1">{{ $item->uom}}</td>
                  <td class="col-md-1">{{ $item->qty}}</td>
                  <td class="col-md-1">{{ $item->buying_price}}</td>
                  <td class="col-md-1">{{ $item->selling_price}}</td>
                  <td class="col-md-3">
                    <ul class="list-unstyled">
                      <li><a href="{{ route('items-mgmt.edit', ['id' => $item->id])}}">
                         <span class="btn btn-warning btn-xs">Update</span>
                         </a>
                      </li>
                      <li>
                        <form action="{{ route('items-mgmt.destroy', ['id' => $item->id])}}" method="post" class="form-group btn-xs float-right">
                          {{csrf_field()}}
                           {{method_field('DELETE')}}
                        <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirmDelete();">
                        </form>
                    </li>
                    </ul>
                  </td>
              </tr>
            @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th width="10%" rowspan="1" colspan="1">Item Code</th>
                <th width="20%" rowspan="1" colspan="1">Item Description</th>
                <th class="hidden-xs" width="20%" rowspan="1" colspan="1">Uom</th>
                <th class="hidden-xs" width="20%" rowspan="1" colspan="1">Quantity</th>
                <th class="hidden-xs" width="20%" rowspan="1" colspan="1">Buying Price</th>
                <th class="hidden-xs" width="20%" rowspan="1" colspan="1">Selling Price</th>
                <th rowspan="1" colspan="2">Action</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-5">
          <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to {{count($items)}} of {{count($items)}} entries</div>
        </div>
        <div class="col-sm-7">
          <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
            {{ $items->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.box-body -->
</div>
    </section>
    <!-- /.content -->
  </div>
@endsection