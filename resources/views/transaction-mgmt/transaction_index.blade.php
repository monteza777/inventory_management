@extends('layouts.master')
@section('title','Transaction | Inventory')
@section('head_title','Transaction')

@section('content')
<body>
<div id="app" class="container col-lg-12 col-md-12" v-cloak>
	<section class="panel panel-default">
		<div class="panel-heading col-lg-12 col-md-12">
			<button class="btn btn-primary" v-on:click="seen = !seen" v-cloak> <i class="glyphicon" v-bind:class="[seen ? plusIcon: minusIcon]"></i>@{{ seen ? ' Add Transaction' : ' Hide Transaction'}}</button>
		</div>
		<div v-if="!seen">
		<div class="panel-footer">
			<form class="form-group" method="post" action="{{route('transaction-mgmt.store')}}">
				{{csrf_field()}}
				<div class="row">
				<div class="col-lg-4 col-md-4">
				<div class="form-group">
					<label>Vat(%):</label>
					<input type="text" class="form-control" placeholder="Vat" name="vat">
					<label>Cumulative Amount</label>
					<input type="text" class="form-control" placeholder="Cumulative Amount" name="cumulative_amount">
					<label>Customer Name</label>
					<input type="text" class="form-control" placeholder="Customer Name" name="customer_name">
				</div>	
				</div>
				<div class="col-lg-4 col-md-4">
				<div class="form-group">
					<label>Discount(%):</label>
					<input type="text" class="form-control" placeholder="Discount" name="discount">
					<label>Amount Tendered:</label>
					<input type="text" class="form-control" placeholder="Amount Tendered" name="amount_tendered">
					<label>Customer Phone:</label>
					<input type="text" class="form-control" name="customer_phone" placeholder="Customer Phone" name="customer_phone">
				</div>
				</div>
				<div class="col-lg-4 col-md-4">
				<div class="form-group">
					<label>Mode of Payment</label>
					<input type="text" class="form-control" placeholder="Mode of Payment" name="mode_of_payment">
					<label>Change Due:</label>
					<input type="text" class="form-control" placeholder="Change Due" name="change_due">
					<label>Customer Email:</label>
					<input type="text" class="form-control" placeholder="Customer Email" name="customer_email">
				</div>
				</div>
			<div class="savebutton">
			<button type="submit" class="btn btn-primary">
		        Save
		    </button>
			</div>
			<div class="col-lg-12 col-sm-12" v-for="(employee, index) in employees"><hr>
			<div class="form-group">
			<table class="table table-bordered ">
	      	<thead>
	      		<th>Item</th>
	      		<th>Quantity</th>
	      		<th>Unit Price</th>
	      		<th>Total Price</th>
	      		<th>
	      			<i class="btn btn-xs btn-success glyphicon glyphicon-plus" @click="addNewItem"></i>
	      		</th>
	      	</thead>
	      	<tbody>
	      	<tr class="rounded">
	      		<td>
			      	<input type="text" name="item_code[]" class="form-control" placeholder="About" v-model="employee.name">
	      		</td>
	      		<td>
			      	<input type="text" name="qty[]" class="form-control" placeholder="About" v-model="employee.job">
	      		</td>
	      		<td>
			      	<input type="text" name="unit_price[]" class="form-control" placeholder="About" v-model="employee.about">
	      		</td>
	      		<td>
			      	<input type="text" name="total_price[]" class="form-control" placeholder="About" v-model="employee.about">
	      		</td>
	      		<td><i class="glyphicon glyphicon-remove btn btn-xs btn-danger" @click="deleteForm"></i></td>

	      	</tr>
	      	</tbody>
	      	</table>
			</div>
			</div>
			</form>
		</div>
		</div>
	</section>	
</div>
</body>
@endsection