<script setup>
import {defineProps, ref} from 'vue'
import { useForm } from "@inertiajs/vue3"
import Editor from '@tinymce/tinymce-vue'

defineProps({
    tags: {
        type: Array,
    },
    regions: {
        type: Array,
    }
})

const form = useForm({
    file: null,
    selectedTags: [],
    region_id: null,
    date_from: null,
    date_to: null,
    name: '',
    anons: null,
    address: null,
    lat: null,
    len: null,
    status: 1
})

const fileInput = ref(null)
const openFilePicker = () => {
    fileInput.value.click()
}
const toggleTag = (tagId) => {
    if (form.selectedTags.includes(tagId)) {
        form.selectedTags = form.selectedTags.filter((id) => id !== tagId)
    } else {
        form.selectedTags.push(tagId)
    }
}

const handleFileChange = (event) => {
    form.file = event.target.files[0]
}
</script>

<template>
    <form @submit.prevent="form.post(route('places.store'))">
        <div>
            <label for="file">Превью</label>
            <input
                @change="handleFileChange"
                type="file"
                id="file"
                placeholder="Файл не выбран"
                accept="image/*"
                ref="fileInput"
            />
            <button type="button" @click="openFilePicker">Выбрать файл</button>
        </div>
        <div>
            <label>Теги</label>
            <div v-for="tag in tags" :key="tag.id">
                <input
                    type="checkbox"
                    :id="`tag-${tag.id}`"
                    :value="tag.id"
                    @change="toggleTag(tag.id)"
                />
                <label :for="`tag-${tag.id}`">{{ tag.name }}</label>
            </div>
        </div>
        <div>
            <label for="date_from">Дата from</label>
            <input type="text" id="date_from" v-model.number="form.date_from" />
        </div>
        <div>
            <label for="date_to">Дата to</label>
            <input type="text" id="date_to" v-model.number="form.date_to" />
        </div>
        <div>
            <label for="name">Заголовок</label>
            <input type="text" id="name" v-model="form.name" />
        </div>
        <div>
            <label for="region">Регион</label>
            <select id="region" v-model="form.region_id">
                <option v-for="region in regions" :key="region.id" :value="region.id">{{ region.name }}</option>
            </select>
        </div>
        <div>
            <label for="anons">Анонс</label>
            <Editor v-model="form.anons"></Editor>
        </div>
        <div>
            <label for="lat">lat ° N</label>
            <input type="text" id="lat" v-model="form.lat" />
        </div>
        <div>
            <label for="len">len ° E</label>
            <input type="text" id="len" v-model="form.len" />
        </div>
        <div>
            <label for="status">Статус</label>
            <select id="status" v-model.number="form.status">
                <option value="1">отображать</option>
                <option value="-1">скрыть</option>
                <option value="-2">удалить</option>
            </select>
        </div>
        <div>
            <button type="submit">Создать</button>
        </div>
    </form>
</template>
