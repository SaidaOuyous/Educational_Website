<!-- resources/js/components/QuestionForm.vue -->

<template>
    <div>
      <h2 class="form-title">{{ formTitle }}</h2>
      <form @submit.prevent="submitForm" class="question-form">
        <label for="question" class="form-label">Question:</label>
        <input type="text" v-model="questionData.question" required class="form-input">
        <button type="submit" class="form-button">{{ submitButton }}</button>
      </form>
    </div>
  </template>
  
  <script>
  export default {
    compatConfig: { MODE: 3 },
    props: ['formTitle', 'submitButton', 'questionData'],
    methods: {
      submitForm() {
        this.$emit('submit-form', this.questionData);
      },
    },
  };
  </script>
  
  <style scoped>
  .form-title {
    font-size: 1.5em;
    color: #333;
    margin-bottom: 10px;
  }
  
  .question-form {
    max-width: 600px;
    margin: 20px auto;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
  }
  
  .form-label {
    display: block;
    margin-bottom: 5px;
  }
  
  .form-input {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
  }
  
  .form-button {
    background-color: #FFC600;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  
  .form-button:hover {
    background-color: #967c20;
  }
  </style>
  