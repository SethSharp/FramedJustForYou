<script setup>
import { Head } from '@inertiajs/vue3'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import PrimaryButton from '@/Components/Button/PrimaryButton.vue'
import CategoryCards from '@/Components/Card/CategoryCards.vue'

defineProps({
    categories: Object,
})
</script>

<template>
    <Head title="Categories" />

    <AuthenticatedLayout>
        <template #header> Categories </template>
        <template #headerActions>
            <PrimaryButton :href="route('categories.create')"> Create </PrimaryButton>
        </template>

        <div class="grid grid-cols-4 gap-x-4">
            <CategoryCards v-for="cat in categories" :category="cat" />
        </div>
    </AuthenticatedLayout>
</template>
