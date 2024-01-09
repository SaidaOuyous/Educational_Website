<template>
  <div>
    <div class="card">
      <div class="card-header"><h2>Liste des utilisateurs</h2></div>
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>nom</th>
              <th>email</th>
              <th>Filiere</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(user, index) in users" :key="index">
              <td>{{ user.id }}</td>
              <td>
                <span v-if="user.editing">{{ user.name }}</span>
                <input v-else v-model="user.name" class="form-control" required />
              </td>
              <td>
                <span v-if="user.editing">{{ user.email }}</span>
                <input v-else v-model="user.email" class="form-control" required />
              </td>
              <td>
                <span v-if="user.editing">{{ user.degree }}</span>
                <input v-else v-model="user.degree" class="form-control" required />
              </td>
              <td>
                
                <button class="btn btn-danger" @click="deleteUser()" title="Delete User">Delete</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  compatConfig: { MODE: 3 },

  data() {
    return {
      users: [],
      user: {}, // Added user property
    };
  },

  mounted() {
    // Fetch users from API and set them in the 'users' data property
    this.fetchUsers();
  },

  methods: {
    fetchUsers() {
      // Make an API call to retrieve the list of users
      axios.get('/api/users')
        .then(response => {
          this.users = response.data.users.map(user => ({ ...user, editing: false }));
        })
        .catch(error => {
          console.error('Error fetching users:', error);
        });
    },

   

   
    deleteUser() {
      // Make an API call to delete the user with the specified ID
      axios.delete(`/api/users/delete/${this.user.id}`)
        .then(response => {
          console.log('User deleted successfully:', response.data);
          // Optionally, update the user list after deletion
          this.fetchUsers();
        })
        .catch(error => {
          console.error('Error deleting user:', error);
        });
    },
  },
};
</script>
