<script setup>
import { defineProps } from 'vue'
import { Link } from "@inertiajs/vue3"

defineProps({
    title: {
        type: String
    },
    subject: {
        type: String
    }
})
</script>

<template>
<h1>{{ title }}</h1>
<div class="flex">
    <button>Опубликовано</button>
    <button>Черновики</button>
    <button>Удалено</button>
</div>
<input type="text" placeholder="Поиск по названию" />
<Link :href="route('places.create')" as="button">Добавить {{ subject }}</Link>
<!-- заменить на Link -->
</template>