<script setup>
import BaseModal from '@/Components/Modals/BaseModal.vue'

const props = defineProps({
    state: Boolean,
    category: Object,
})

const emits = defineEmits(['close'])

const closeModal = () => {
    emits('close')
}
</script>

<template>
    <BaseModal :state="state" @close="closeModal">
        <template #content>
            <div class="grid sm:grid-cols-2 gap-x-6 mt-2">
                <div class="px-6">
                    <img :src="category.file.path" class="shadow-md rounded-md" />
                </div>
                <div class="mt-4">
                    <h1 class="text-2xl text-black font-medium">{{ category.name }}</h1>
                    <p class="text-gray-400 leading-6">{{ category.description }}</p>
                </div>
            </div>
        </template>
    </BaseModal>
</template>
