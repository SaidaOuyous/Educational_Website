<!-- resources/js/components/QuestionsList.vue -->


<template>
  <div>
    <div class="card">
      <div class="card-header">
        <h2>Liste des questions</h2>
      </div>
      <div class="card-body">
        <div v-if="questions.length === 0">
          <p>No questions available.</p>
        </div>
        <div v-else>
          <div class="card" v-for="question in questions" :key="question.id">
            <div class="card-body">
              <h5 class="card-title">{{ question.question }}</h5>
              <button @click="editQuestion(question.id)" class="btn btn-success mr-5">Edit</button>
              <button @click="deleteQuestion(question.id)" class="btn btn-danger">Delete</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  compatConfig: { MODE: 3 },

  props: ['questions'],
  methods: {
    editQuestion(id) {
      this.$emit('edit-question', id);
    },
    deleteQuestion(id) {
      if (confirm('Are you sure you want to delete this question?')) {
        this.$emit('delete-question', id);
      }
    },
  },
};
</script>
