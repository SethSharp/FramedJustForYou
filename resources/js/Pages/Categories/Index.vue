<script setup>
import { Head } from '@inertiajs/vue3'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import PrimaryButton from "@/Components/Button/PrimaryButton.vue";

defineProps({
    categories: Object,
})
</script>

<template>
    <Head title="Categories" />

    <AuthenticatedLayout>
        <template #header> Categories </template>
        <template #headerActions>
            <PrimaryButton> Create </PrimaryButton>
        </template>

        Some content here
    </AuthenticatedLayout>
</template>
