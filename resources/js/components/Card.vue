<!-- Card.vue -->

<template>
    <div class="w-70 bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-3">
       
        <div class="p-5">
            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ title }}</h2>

            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ content }}</p>
            <button @click="readMore" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-3 font-normal text-gray-700 dark:text-gray-400">
        Lire plus
    </button>
        </div>

    </div>

    
</template>
  
<script>
export default {
    compatConfig: { MODE: 3 },

    props: {
        title: String,
        content: String,
    },
    methods: {
        readMore() {
            this.$emit('read-more-clicked', this.title);
        },
    },

};
</script>
  
<style scoped>
/* Add your component-specific styles here */
.card {
    border: 1px solid #ddd;
    padding: 16px;
    margin: 16px;
    border-radius: 8px;

}

button {
    background-color: #FFD93D;
}
</style>
  