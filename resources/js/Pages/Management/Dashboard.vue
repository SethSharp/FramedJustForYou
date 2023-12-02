<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { Head } from '@inertiajs/vue3'
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="text-gray-900 text-xl">Dashboard</div>
        <div>This is where you can manage your online store</div>

        <div class="grid grid-cols-6 mt-6">What to put here?</div>
    </AuthenticatedLayout>
</template>
