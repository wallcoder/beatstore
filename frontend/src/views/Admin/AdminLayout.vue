<script setup>
import Button from "primevue/button"
import AdminNavbar from '@/views/Admin/AdminNavbar.vue'
import AdminSidebar from '@/views/Admin/AdminSidebar.vue'
import {RouterView} from 'vue-router';
</script>

<template>
    
    <section class="flex">
        <AdminSidebar />
        <div class="flex flex-col w-full">
            <AdminNavbar />
            <div class="px-8">
            <RouterView/>
        </div>
        </div>
    </section>
    
    
</template>

<style scoped>

</style>