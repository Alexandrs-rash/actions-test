<template>
    <h1 class="text-red-700">Привет, {{ username }}!</h1>
</template>

<script lang="ts">
import { defineComponent } from 'vue';

export default defineComponent({
    components: {},
    setup() {
        return {
            username: 'Михаил'
        };
    },
});
</script>


<style lang="less" scoped>
    
</style>