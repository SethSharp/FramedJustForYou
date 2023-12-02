<script setup>
import {Head} from '@inertiajs/vue3'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
</script>

<template>
    <Head title="Products"/>

    <AuthenticatedLayout>
        <template #header> Products</template>

    </AuthenticatedLayout>
</template>
