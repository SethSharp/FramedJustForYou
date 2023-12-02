<script setup>
import { Head } from '@inertiajs/vue3'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import CreateEditCategoryForm from '@/Components/Categories/CreateEditCategoryForm.vue'

defineProps({
    category: Object,
})
</script>

<template>
    <Head title="Categories" />

    <AuthenticatedLayout>
        <template #header> Create </template>

        <CreateEditCategoryForm :category="category" />
    </AuthenticatedLayout>
</template>
