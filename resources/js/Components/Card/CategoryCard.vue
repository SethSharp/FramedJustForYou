<script setup>
import {ref} from 'vue'
import {PencilIcon} from '@heroicons/vue/24/outline/index.js'
import CategoryCreateEditModal from "@/Components/Modals/CategoryCreateEditModal.vue";

defineProps({
    category: Object,
})

const dialogState = ref(false)

const toggleDialog = () => {
    dialogState.value = !dialogState.value
}
</script>

<template>
    <div class="relative overflow-hidden rounded-xl shadow-sm">
        <div>
            <div class="self-stretch flex-grow overflow-hidden">
                <div class="aspect-1">
                    <img
                        :src="category.file.path"
                        :alt="category.name"
                        class="w-full h-full object-cover"
                        loading="lazy"
                    />
                </div>
            </div>

            <div class="absolute inset-0 flex justify-end z-40" @click="toggleDialog">
                <div
                    class="bg-white hover:bg-primary-100 rounded-full p-2 border-2 border-primary-500 h-fit"
                >
                    <PencilIcon class="w-6 h-6"/>
                </div>
            </div>
            <div class="absolute inset-0 flex flex-col justify-end z-20">
                <div
                    class="relative text-white p-4 font-bold bg-gradient-to-b from-transparent to-black/75 z-0"
                >
                    <div class="text-sm z-50">{{ category.name }}</div>
                </div>
            </div>
        </div>
    </div>

    <CategoryCreateEditModal :state="dialogState" @close="toggleDialog" :category="category"/>
</template>
