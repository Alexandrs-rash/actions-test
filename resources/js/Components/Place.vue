<script setup>
import { defineProps } from 'vue'
import { Link } from "@inertiajs/vue3"

defineProps({
    id: {
        type: Number
    },
    name: {
        type: String
    },
    anons: {
        type: String
    },
    lat: {
        type: String
    },
    len: {
        type: String
    },
    preview: {
        type: String
    },

});
</script>

<template>
<div>
    <Link :href="route('places.edit', id)"><img :src="preview" alt="preview"></Link>
    <p>{{ lat }} , {{ len }}</p>
    <h2>{{ name}}</h2>
    <p v-html="anons"></p>
    <div class="flex gap-2">
        <Link :href="route('places.edit', id)" as="button">Обновить место</Link>
        <Link href="#" as="button">Обновить статью</Link>
    </div>
</div>
</template>
