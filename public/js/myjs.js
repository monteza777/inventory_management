var app = new Vue({
  el: '#app',
  data:{
    seen:true,
    plusIcon: 'glyphicon-plus',
    minusIcon: 'glyphicon-minus',
    employees: [
      {
        name: '',
        job: '',
        about: '',
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
    },

}
})
