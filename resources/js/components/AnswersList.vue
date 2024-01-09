<!-- resources/js/components/AnswersList.vue -->

<template>
    <div>
      <h2 > Liste des réponses</h2>
      <div v-if="answers.length === 0">
        <p>No answers available.</p>
      </div>
      <div v-else>
        <div class="card" v-for="answer in answers" :key="answer.id">
          <div class="card-body">
            <p>{{ answer.answer_text }}</p>
            <p>Is Correct: {{ answer.is_correct ? 'Yes' : 'No' }}</p>
            <button @click="editAnswer(answer.id)" class="btn btn-success mr-5">Edit</button>
            <button @click="deleteAnswer(answer.id)" class="btn btn-danger mr-5">Delete</button>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    compatConfig: { MODE: 3 },

    props: ['answers'],
    methods: {
      editAnswer(id) {
        this.$emit('edit-answer', id);
      },
      deleteAnswer(id) {
        if (confirm('Are you sure you want to delete this answer?')) {
          this.$emit('delete-answer', id);
        }
      },
    },
  };
  </script>
  
  <style scoped>
  .card {
    margin: 10px 0;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 10px;
  }
  p{
    font-size: 20px;
    font-weight: 600;
  }
  h2{
    margin: 20px 10px;
  }
  </style>
  