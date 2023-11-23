<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { Head } from '@inertiajs/vue3'
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="py-12">
            <div class="text-gray-900 text-xl">Dashboard</div>
            <div>
                This is where you can manage your online store
            </div>
        </div>
    </AuthenticatedLayout>
</template>
