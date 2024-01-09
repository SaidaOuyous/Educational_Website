<!-- resources/js/components/TakeQuizButton.vue -->
<template>
    <div>
      <button v-for="quiz in quizzes" :key="quiz.text" @click="redirectToQuizzes(quiz.url)" class="quiz-button">{{ quiz.text }}</button>
    </div>
  </template>
  
  <script>
  export default {
    compatConfig: { MODE: 3 },
    props: {
      quizzes: {
        type: Array,
        required: true,
      },
    },
    methods: {
      redirectToQuizzes(url) {
        window.location.href = url;
      },
    },
  };
  </script>
  
  <style scoped>
    .quiz-button {
      display: block;
      width: 50%;
      margin-bottom: 10px;
      margin-left: 25%;
      color: black;
      font-size: 20px;
      font-weight: 600;
      padding: 15px;
      border: none;
      border-radius: 10px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      background-color: #FFD93D;
      cursor: pointer;
      transition: background-color 0.3s, box-shadow 0.3s;
    }
  
    .quiz-button:hover {
      background-color: #FFC600;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
  </style>
  