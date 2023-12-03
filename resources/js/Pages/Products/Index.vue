<script setup>
import {Head} from '@inertiajs/vue3'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import AdminCard from "@/Components/Products/AdminCard.vue";

defineProps({
    products: Object,
})
</script>

<template>
    <Head title="Products"/>

    <AuthenticatedLayout>
        <template #header> Products</template>

        <div class="grid grid-cols-5">
            <AdminCard v-for="product in products" :product="product"/>
        </div>

    </AuthenticatedLayout>
</template>
