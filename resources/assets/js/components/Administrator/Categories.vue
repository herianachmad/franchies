<template lang="html">
  <div class="">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Description</th>
          <th>Created_At</th>
          <th colspan="2">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="category in categories.data">
          <td> {{ category.id }} </td>
          <td> {{ category.name }} </td>
          <td> {{ category.description }} </td>
          <td> {{ category.created_at }} </td>
          <td><button type="button" class="btn btn-info" name="button">Edit</button></td>
          <td><button type="button" class="btn btn-danger" name="button">Delete</button></td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import axios from 'axios'

  export default {
    data(){
      return {
        categories: [],
      }
    },

    created(){
      this.fetchCategories();
    },

    methods: {
      fetchCategories(){
        var vm = this;
        axios.get('../api/administrator/categories')
          .then(function(response){
            Vue.set(vm.$data, 'categories',response.data.categories)
        });
        setTimeout(this.fetchCategories, 5000);
      }
    }
  }
</script>
