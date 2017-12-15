@extends('layouts.master')
@section('title','Transaction | Inventory')
@section('head_title','Transaction')

@section('content')


<div id="app" class="container form-group well" v-cloak>

<button class="btn btn-primary" v-on:click="seen = !seen" v-cloak> <i class="glyphicon" v-bind:class="[seen ? plusIcon: minusIcon]"></i>@{{ seen ? ' Add Transaction' : ' Hide Transaction'}}</button>
	<div v-if="!seen">
	<div class="col-md-10 col-lg-10 col-md-offset-2 col-lg-offset-2">
		<form>
		<div class="col-md-3 col-lg-3 form-group">
			<label>Vat(%):</label>
			<input type="text" class="form-control" placeholder="Vat">
			<label>Cumulative Amount:</label>
			<input type="text" class="form-control" placeholder="Cumulative Amount">
			<label>Customer Name:</label>
			<input type="text" class="form-control" placeholder="Customer Name">
		</div>
		<div class="col-md-3 col-lg-3">
			<label>Discount</label>
			<input type="text" class="form-control" placeholder="Discount">
			<label>Amount Tendered:</label>
			<input type="text" class="form-control" placeholder="Amount Tendered">
			<label>Customer Phone:</label>
			<input type="text" class="form-control" placeholder="Customer Phone">
		</div>
		<div class="col-md-3 col-lg-3">
			<label>Mode of Payment:</label>
			<input type="text" class="form-control" placeholder="Mode of Payment">
			<label>Change Due:</label>
			<input type="text" class="form-control" placeholder="Change Due">
			<label>Customer Email:</label>
			<input type="text" class="form-control" placeholder="Customer Email	"><hr>
		</div>
		</form>
	</div>

<button class="pull-left btn btn-success mt-5 mb-5"
  @click="addNewItem" >Add Item</button><br><br>
	<form class="form-horizontal" role="form" method="POST" action="{{ route('transaction-mgmt.store') }}">
	{{ csrf_field() }}
	<div class="card" v-for="(employee, index) in employees">
	<div class="col-md-10 col-lg-10">
      <input type="button" class="pull-right btn btn-xs col-xs-1 btn-danger" value="X" @click="deleteForm">
	      <div class="col-md-3 col-lg-3">
			<label>Item</label>
		    <input type="text" name="item_code[]" class="form-control" placeholder="Name" v-model="employee.name">
		  </div>

	      <div class="col-md-3 col-lg-3">
			<label>Quantity</label>
	        <input type="text" name="qty[]" class="form-control" placeholder="Job" v-model="employee.job">
	      </div>

	      <div class="col-md-3 col-lg-3">
			<label>Unit Price</label>
	        <input type="text" name="unit_price[]" class="form-control" placeholder="About" v-model="employee.about">
	      </div>

	      <div class="col-md-3 col-lg-3">
			<label>TOtal Price</label>
	        <input type="text" name="total_price[]" class="form-control" placeholder="About" v-model="employee.about">
	      </div>
	</div>
    </div>
    <button type="submit" class="btn btn-primary">
        Create
    </button>
    </form>                            
</div> <!-- end for v-if -->
@endsection