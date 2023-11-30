<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="flex h-screen">
        <nav class="w-1/5 bg-gray-200 p-4">
            <ul class="space-y-2">
                <li><Link :href="route('places.index')">Места</Link></li>
                <li>Люди</li>
                <li>Предметы</li>
                <li>Истории</li>
                <li>Статьи</li>
                <li>Города</li>
                <li>Регионы</li>
                <li>Видео</li>
                <li>Теги</li>
                <li>Правители</li>
                <li>События</li>
                <li>Эпохи</li>
                <li>Контакты</li>
                <li>Сайт</li>
                <li>Заявки</li>
                <li>Выйти</li>
            </ul>
        </nav>
        <main class="w-4/5 p-4">
            <slot />
        </main>
    </div>
</template>
