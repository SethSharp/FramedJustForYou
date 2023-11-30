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
        <template #title>
            {{ category.name }}
        </template>

        <template #content>
            <div class="grid sm:grid-cols-2 gap-x-6">
                <div class="p-12">
                    <img :src="category.file.path" class="shadow-md" />
                </div>
                <div>
                    <h1 class="text-2xl text-black font-medium">{{ category.name }}</h1>
                    <p class="text-gray-400 leading-6">{{ category.description }}</p>
                </div>
            </div>
        </template>
    </BaseModal>
</template>
