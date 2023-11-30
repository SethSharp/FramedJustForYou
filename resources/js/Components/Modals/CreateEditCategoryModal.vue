<script setup>
import CreateEditCategoryForm from '@/Components/Categories/CreateEditCategoryForm.vue'
import BaseModal from '@/Components/Modals/BaseModal.vue'

const props = defineProps({
    state: Boolean,
    category: Object,
})

const emits = defineEmits(['close'])

const title = props.category ? 'Edit ' + props.category.name : 'Create'

const closeModal = () => {
    emits('close')
}
</script>

<template>
    <BaseModal :state="state" @close="closeModal">
        <template #title>
            {{ title }}
        </template>
        <template #content>
            <CreateEditCategoryForm :category="category" />
        </template>
    </BaseModal>
</template>
