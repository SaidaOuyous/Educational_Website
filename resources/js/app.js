// app.js
import { createApp } from 'vue';
import Myheader from './components/Myheader.vue';
import Card from './components/Card.vue';
import Take from './components/Take.vue';
import UserForm from './components/UserForm.vue';
import UserList from './components/UserList.vue';
import axios from 'axios';
import QuestionsList from './components/QuestionsList.vue'
import QuestionForm from './components/QuestionForm.vue'
import QuestionsPage from './components/QuestionsPage.vue'
import AdminLogin from './components/AdminLogin.vue'
import AnswersList from './components/AnswersList.vue'
import AnswerForm from './components/AnswerForm.vue'
import AnswersPage from './components/AnswersPage.vue'
const app = createApp({
    components: {
        Myheader,
        Card,
        Take,
        UserForm,
        UserList,
        QuestionsList,
        QuestionForm,
        QuestionsPage,
        AdminLogin,
        AnswersList,
        AnswerForm,
        AnswersPage,
    },
    data() {
        return {
            // Add a property to store the clicked card title
            clickedCard: null,
        };
    },
    methods: {
        handleReadMore(title) {
            // Set the clicked card title
            this.clickedCard = title;

            // Perform navigation logic here
            // For example, you can redirect to a page based on the title
            // Replace this logic with your desired navigation logic
            window.location.href = `/${title.replace(/\s+/g, '').toLowerCase()}`;
        },
      
    },
});

app.mount('#app');
