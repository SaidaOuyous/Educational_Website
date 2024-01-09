<!-- resources/js/components/AnswersPage.vue -->

<template>
    <div>
      <answers-list :answers="answers" @edit-answer="editAnswer" @delete-answer="deleteAnswer" />
      <answer-form :form-title="formTitle" :submit-button="submitButton" :answer-data="answerData" @submit-form="submitForm" />
    </div>
  </template>
  
  <script>
  import AnswersList from './AnswersList.vue';
  import AnswerForm from './AnswerForm.vue';
  import axios from 'axios';

  export default {
    compatConfig: { MODE: 3 },

    components: {
      AnswersList,
      AnswerForm,
    },
    data() {
      return {
        answers: [],
        formTitle: 'Add Answer',
        submitButton: 'Add',
        answerData: {},
      };
    },
    methods: {
      fetchAnswers() {
        // Implement API call to fetch answers
        // Example using Axios:
        axios.get('/api/answers')
          .then(response => this.answers = response.data.answers)
           .catch(error => console.error('Error fetching answers:', error));
      },
      editAnswer(id) {
        // Implement logic to fetch answer data by ID
        // Example using Axios:
         axios.get(`/api/answers/${id}`)
          .then(response => {
           this.formTitle = 'Edit Answer';
            this.submitButton = 'Update';
            this.answerData = response.data.answer;
          })
          .catch(error => console.error('Error fetching answer:', error));
      },
      deleteAnswer(id) {
        // Implement logic to delete answer by ID
        // Example using Axios:
         if (confirm('Are you sure you want to delete this answer?')) {
           axios.delete(`/api/answers/${id}`)
             .then(response => {
              this.fetchAnswers();
               console.log('Answer deleted successfully');
             })
             .catch(error => console.error('Error deleting answer:', error));
         }
      },
      submitForm(answerData) {
        // Implement logic to add or edit answer
        // Example using Axios:
         if (this.formTitle === 'Add Answer') {
           axios.post('/api/answers', answerData)
             .then(response => {
               this.fetchAnswers();
              console.log('Answer added successfully');
            })
             .catch(error => console.error('Error adding answer:', error));
         } else {
           axios.put(`/api/answers/${answerData.id}`, answerData)
             .then(response => {
              this.fetchAnswers();
               console.log('Answer updated successfully');
             })
             .catch(error => console.error('Error updating answer:', error));
         }
      },
    },
    mounted() {
      this.fetchAnswers();
    },
  };
  </script>
  