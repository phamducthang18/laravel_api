<template>
    <div class="card mt-2" v-if="tasks.length && show">
        <ul class="list-group list-group-flush">
            <Task v-for="task in tasks" :task="task" :key="task.id"/>
        </ul>
    </div>
</template>

<script setup>
import { onMounted } from 'vue'
import Task from './Task.vue'

defineProps({
    tasks: {
        type: Array,
        required: true,
    },
    show: {
        type: Boolean,
        default: true,
    },
})

</script>
