<script setup>
import {Head} from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

defineProps({
    categories: Object
})
</script>

<template>
    <Head title="Categories" />

    <AuthenticatedLayout>
        Categories
    </AuthenticatedLayout>
</template>
