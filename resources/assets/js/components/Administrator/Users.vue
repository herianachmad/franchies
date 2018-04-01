<template lang="html">
  <div class="">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>username</th>
          <th>email</th>
          <th>status</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="user in users.data">
          <td> {{ user.name }} </td>
          <td> {{ user.email }} </td>
          <td> {{ user.status }} </td>
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
        users: [],
      }
    },

    created(){
      this.fetchUsers();
    },

    methods: {
      fetchUsers(){
        var vm = this;
        axios.get('../api/administrator/users')
          .then(function(response){
            Vue.set(vm.$data, 'users',response.data.users)
        });
      }
    }
  }
</script>
