<!-- resources/js/components/QuestionsPage.vue -->

<template>
    <div>
        <question-form :form-title="formTitle" :submit-button="submitButton" :question-data="questionData" @submit-form="submitForm" />

      <questions-list :questions="questions" @edit-question="editQuestion" @delete-question="deleteQuestion" />
    </div>
  </template>
  
  <script>

  import QuestionsList from './QuestionsList.vue';
  import QuestionForm from './QuestionForm.vue';
  import axios from 'axios';

  export default {
    compatConfig: { MODE: 3 },

    components: {
      QuestionsList,
      QuestionForm,
    },
    data() {
      return {
        questions: [],
        formTitle: 'Ajouter Question',
        submitButton: 'Add',
        questionData: {},
      };
    },
    methods: {
      fetchQuestions() {
        // Implement API call to fetch questions
        // Example using Axios:
         axios.get('/api/questions')
          .then(response => this.questions = response.data.questions)
          .catch(error => console.error('Error fetching questions:', error));
      },
      editQuestion(id) {
        // Implement logic to fetch question data by ID
        // Example using Axios:
         axios.get(`/api/questions/${id}`)
       .then(response => {
           this.formTitle = 'Edit Question';
           this.submitButton = 'Update';
            this.questionData = response.data.question;
         })
         .catch(error => console.error('Error fetching question:', error));
      },
      deleteQuestion(id) {
        // Implement logic to delete question by ID
        // Example using Axios:
         if (confirm('Are you sure you want to delete this question?')) {
          axios.delete(`/api/questions/${id}`)
            .then(response => {
              this.fetchQuestions();
             console.log('Question deleted successfully');
           })
            .catch(error => console.error('Error deleting question:', error));
        }
      },
      submitForm(questionData) {
        if (this.formTitle === 'Add Question') {
      axios.post('/api/questions', questionData)
        .then(response => {
          this.fetchQuestions();
          console.log('Question added successfully');
        })
        .catch(error => console.error('Error adding question:', error));
    } else {
      // Make sure questionData.id is defined before making the PUT request
      if (questionData.id) {
        axios.put(`/api/questions/${questionData.id}`, questionData)
          .then(response => {
            this.fetchQuestions();
            console.log('Question updated successfully');
          })
          .catch(error => console.error('Error updating question:', error));
      } else {
        console.error('Question ID is undefined. Cannot update the question.');
      }
    }
      },
    },
    mounted() {
      this.fetchQuestions();
    },
  };
  </script>
  