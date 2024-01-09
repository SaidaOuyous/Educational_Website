<!-- resources/js/components/AnswerForm.vue -->

<template>
    <div>
      <h2>{{ formTitle }}</h2>
      <form @submit.prevent="submitForm">
        <div class="form-group">
          <label for="answer_text">Answer:</label>
          <input type="text" v-model="answerData.answer_text" required class="form-control">
        </div>
        <div class="form-check">
          <input type="checkbox" v-model="answerData.is_correct" class="form-check-input">
          <label class="form-check-label">Is Correct</label>
        </div>
        <button type="submit" class="btn btn-primary">{{ submitButton }}</button>
      </form>
    </div>
  </template>
  
  <script>
  export default {
    compatConfig: { MODE: 3 },

    props: ['formTitle', 'submitButton', 'answerData'],
    methods: {
      submitForm() {
        this.$emit('submit-form', this.answerData);
      },
    },
  };
  </script>
  
  <style scoped>

  form {
    max-width: 600px;
    margin: 20px auto;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
  }
  
  label {
    display: block;
    margin-bottom: 5px;
  }
  
  input {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
  }
  
  button {
    background-color: #FFC600;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  
  button:hover {
    background-color: #967c20;
  }
  </style>
  