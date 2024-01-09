<template>
  <div>
    <h2>{{ formTitle }}</h2>
    <form @submit.prevent="saveUser">
      <div>
        <label for="name">Name:</label>
        <input type="text" id="name" v-model="user.name" required>
      </div>
      <div>
        <label for="email">Email:</label>
        <input type="email" id="email" v-model="user.email" required>
      </div>
      <div>
        <label for="password">Password:</label>
        <input type="password" id="password" v-model="user.password" required>
      </div>
      <div>
        <label for="degree">Degree:</label>
        <input type="text" id="degree" v-model="user.degree" required>
      </div>
      <button type="submit">Save</button>
    </form>
  </div>
</template>

<script>
export default {
  compatConfig: { MODE: 3 },

  data() {
    return {
      formTitle: 'Add User',
      user: {
        name: '',
        email: '',
        password: '',
        degree: '',
      },
    };
  },
  methods: {
    saveUser() {
      // Make an API call to save or update the user
      // You can use a library like Axios for making HTTP requests
      axios.post('/api/users', this.user)
        .then(response => {
          // Handle the response or redirect to the user list page
          console.log('User saved successfully:', response.data.user);
        })
        .catch(error => {
          console.error('Error saving user:', error);
        });
    },
  },
};
</script>