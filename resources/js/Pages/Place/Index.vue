<script setup>
import Admin from '../../Layouts/Admin.vue'
import Place from '../../Components/Place.vue'
import {computed, defineProps, ref} from 'vue';
import {Link, router, useForm, useRemember} from "@inertiajs/vue3";
import Pagination from '@/Shared/Pagination.vue';

const props = defineProps({
    places: {
        type: Object,
    },
    status: {
        type: Number,
        default: null
    },
    searchQuery: {
        type: String,
        default: ''
    }
});


let status = ref(props.status)
let searchQuery = ref(props.searchQuery)

const makeSearch = () => {
    const form = useForm({
        status: status.value,
        searchQuery: searchQuery.value
    })
    form.get(route('places.index'))
}
function filterPlaces(newStatus) {
    status.value = newStatus
    makeSearch()
}
function handleSearch() {
    makeSearch()
}

</script>

<template>
<Admin>
    <h1>Место</h1>
    <div class="flex">
        <button @click="filterPlaces(null)">Все</button>
        <button @click="filterPlaces(1)">Опубликовано</button>
        <button @click="filterPlaces(-1)">Черновики</button>
        <button @click="filterPlaces(-2)">Удалено</button>
    </div>
    <input
        type="text"
        placeholder="Поиск по названию"
        v-model="searchQuery"
        @keyup.enter="handleSearch"
    />
    <button @click="handleSearch">Искать</button>
    <Link :href="route('places.create')" as="button">Добавить место</Link>
    <Place
        v-for="place in places.data"
        :key="place.id"
        :id="place.id"
        :name="place.name"
        :anons="place.anons"
        :lat="place.lat"
        :len="place.len"
        :preview="place.preview"
    />
    <pagination class="mt-6" :links="places.links" />
</Admin>
</template>
