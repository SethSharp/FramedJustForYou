<script setup>
import {Head} from '@inertiajs/vue3'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import ProductAdminCard from "@/Components/Card/Products/ProductAdminCard.vue";

defineProps({
    products: Object,
})
</script>

<template>
    <Head title="Products"/>

    <AuthenticatedLayout>
        <template #header> Products</template>

        <div class="grid grid-cols-5">
            <ProductAdminCard v-for="product in products" :product="product"/>
        </div>

        <img src="/images/seeding/products/1.png"/>
    </AuthenticatedLayout>
</template>
