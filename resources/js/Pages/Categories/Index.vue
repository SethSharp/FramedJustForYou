<script setup>
import { Head } from '@inertiajs/vue3'
import { PlusIcon } from '@heroicons/vue/24/outline/index.js'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import PrimaryButton from '@/Components/Button/PrimaryButton.vue'
import CategoryCard from '@/Components/Card/CategoryCard.vue'
import CategoryCreateEditModal from '@/Components/Modals/CreateEditCategoryModal.vue'
import { ref } from 'vue'

defineProps({
    categories: Object,
})

const dialogState = ref(false)

const toggleDialog = () => {
    dialogState.value = !dialogState.value
}
</script>

<template>
    <Head title="Categories" />

    <AuthenticatedLayout>
        <template #header> Categories</template>

        <div class="grid grid-cols-6">
            <div
                class="bg-gray-50 text-gray-400 rounded-lg p-4 justify-center hover:bg-gray-100 hover:text-gray-600 cursor-pointer"
                @click="toggleDialog"
            >
                <PlusIcon class="" />
            </div>
        </div>

        <div class="grid grid-cols-4 gap-x-4 my-6">
            <CategoryCard v-for="category in categories" :category="category" />
        </div>

        <CategoryCreateEditModal :state="dialogState" @close="toggleDialog" />
    </AuthenticatedLayout>
</template>
