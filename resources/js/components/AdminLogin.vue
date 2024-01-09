<template>
    <div class="login-container">
      <div class="login-card">
        <h2>Admin Login</h2>
        <form @submit.prevent="login">
          <label></label><br>
          <input type="email" placeholder=" email " v-model="email" required>
          <br>
          <label></label><br>
          <input type="password" placeholder=" password "  v-model="password" required>
          <br>
          <button type="submit">Login</button>
        </form>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    compatConfig: { MODE: 3 },
    data() {
      return {
        email: '',
        password: '',
      };
    },
    methods: {
      login() {
        // Simulate login logic on the client side
        if (this.email === 'admin@example.com' && this.password === 'password') {
            window.location.href = '/index';
          // You can redirect or perform other actions here
        } else {
          alert('Login failed. Invalid credentials.');
        }
      },
    },
  };
  </script>
  
  <style scoped>
  .login-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  
  .login-card {
    padding: 20px;
    border: 1px solid #FFD93D;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 500px;
    height: 300px;
    
  }
  input{
    padding: 20px;
    border: 2px solid #FFD93D;
    width: 80%;
    margin-left: 20px;
    border-radius: 20px;
    margin-bottom: 10px;

  }
  label{
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 10px;

  }
  h2{
    color:#FFD93D;
    font-size: 25px;
    font-weight: 600;
    margin-bottom: 10px;
    text-align: center;
  }
  button{
     background-color: #FFD93D;
     color:white;
     border-radius: 40px;
     border: 1px solid   #FFD93D;
     padding: 15px;
     margin-left:120px;
     margin-top: 10px;

     width: 50%;

  }
  </style>
  