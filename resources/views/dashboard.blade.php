@extends('layouts.master')
@section('title','Dashboard | Inventory')
@section('head_title','Dashboard')

@section('content')
	
<div id="app" class="container">
  <button class="btn btn-success mt-5 mb-5" @click="addNewItem">Add</button>
      <h4 class="card-title">Items</h4>
	  <div class="card mb-3" v-for="(employee, index) in employees">
    <div class="card-body col-md-12 col-lg-12 col-sm-12">
      <span class="pull-right" ><input type="button" class="btn btn-xs btn-danger" value="X" @click="deleteForm"></span>
      <h4 class="card-title"></h4>
      <div class="col-md-3">
        <input type="text" class="form-control" placeholder="Name" v-model="employee.name">
      </div>
      <div class="col-md-3">
        <input type="text" class="form-control" placeholder="Job" v-model="employee.job">
      </div>
      <div class="col-md-3">
        <input type="text" class="form-control" placeholder="About" v-model="employee.about">
      </div>
    </div>
  </div>
</div>

<script src="https://unpkg.com/vue/dist/vue.js"></script>
<script>
 var app = new Vue({
  el: '#app',
  data:{
    employees: [
      {
        name: '',
        job: '',
        about: ''
      }
    ]
  },
  methods: {
    addNewItem(){
      this.employees.push({
        name:'',
        job: '',
        about: ''
      })
    },
    deleteForm(index){
    	this.employees.splice(index, 1)
    }
  }
})
</script>
@endsection