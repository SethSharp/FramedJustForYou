<script setup>
import { useForm, router } from '@inertiajs/vue3'
import { computed, onMounted, ref } from 'vue'
import PrimaryButton from '@/Components/Button/PrimaryButton.vue'
import TextInput from '@/Components/Inputs/TextInput.vue'
import TextAreaInput from '@/Components/Inputs/TextAreaInput.vue'
import ImageUpload from '@/Components/Inputs/ImageUpload.vue'
import Seperator from '@/Components/Form/Seperator.vue'
import DangerButton from '@/Components/Button/DangerButton.vue'

const props = defineProps({
    category: {
        type: Object,
    },
})

const emits = defineEmits(['close'])

const isEditing = computed(() => !!props.category)
const path = props.category ? props.category.file.path : ''
const errors = ref({})

const form = useForm({
    name: null,
    description: null,
    file: null,
})

const submit = () => {
    !isEditing.value
        ? form.post(route('categories.store'), {
              onError: (errors) => handleError(errors),
              onSuccess: () => handleSuccess(),
          })
        : form.post(route('categories.update', props.category), {
              onError: (errors) => handleError(errors),
              onSuccess: () => handleSuccess(),
          })
}

const deleteCategory = () => {
    router.delete(route('categories.delete', props.category), {
        onSuccess: () => handleSuccess(),
    })
}

const handleSuccess = () => {
    emits('close')
}

const handleError = (errs) => {
    for (const key in errs) {
        errors.value[key] = errs[key]
    }
    console.log(errors.value['name'])
}

onMounted(() => {
    if (isEditing.value) {
        form.name = props.category.name
        form.description = props.category.description
    }
})
</script>

<template>
    <div class="flex justify-center">
        <form @submit.prevent="submit" class="w-3/4 sm:w-1/2 my-10">
            <Seperator>
                <TextInput
                    v-model="form.name"
                    label="Name"
                    placeholder="Category name"
                    :error="errors['name']"
                />
            </Seperator>
            <Seperator>
                <TextAreaInput
                    v-model="form.description"
                    label="Description"
                    :error="errors['description']"
                />
            </Seperator>
            <Seperator>
                <ImageUpload v-model="form.file" :current-image="path" :error="errors['file']" />
            </Seperator>
            <DangerButton v-if="isEditing" as="button" @click.prevent="deleteCategory">
                Delete
            </DangerButton>
            <PrimaryButton type="submit" as="button">
                {{ isEditing ? 'Update' : 'Add' }}
            </PrimaryButton>
        </form>
    </div>
</template>
