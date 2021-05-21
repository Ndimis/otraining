<template>
    <app-layout>
        <template #header>
            Liste des formations
        </template>
        <div class="py-2" v-for="course in this.courseList" v-bind:key="course.id">
            <div class="mx-8 bg-white rounded shadow p-4">
                <div class="text-sm text-gray-600">Mise en ligne par : {{ course.user.name }}</div>
                <div class="flex justify-between items-center">
                    <div class="text-2xl">{{ course.title }}</div>
                    <div class="text-sm text-gray">{{course.episodes_count}} épisodes</div>
                </div>
                <div class="text-sm text-gray-600">{{ course.description }}</div>
                <a :href="'/course/'+course.id" class="bg-indigo-500 text-white px-2 py-1 text-sm mt-3 inline-block rounded hover:bg-indigo-700">Voir la formation</a>
            </div>
        </div>
    </app-layout>
</template>
<script>
import AppLayout from './../../Layouts/AppLayout';

export default {
    components: {
        AppLayout
    },

    props:['courses'],

    data(){
        return {
            courseList : this.courses
        }
    },

    mounted(){
        console.log(this.courseList);
    }
}
</script>