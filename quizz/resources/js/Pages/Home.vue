<template>
    <h1>Home</h1>
    <p>{{message}}</p>
    <p>{{number}}
    <button @click="increment">+</button></p>

</template>

<script setup>
import {ref} from 'vue';

const message = "Hello I am an Inertia app";

const number = ref(0);

function increment() {
    number.value++;
}
</script>
