<script setup>
import { useForm } from '@inertiajs/vue3'
import { computed, onMounted } from 'vue'
import PrimaryButton from '@/Components/Button/PrimaryButton.vue'
import TextInput from '@/Components/TextInput.vue'
import TextAreaInput from '@/Components/Inputs/TextAreaInput.vue'
import ImageUpload from '@/Components/Inputs/ImageUpload.vue'
import Seperator from '@/Components/Form/Seperator.vue'

const props = defineProps({
    category: {
        type: Object,
    },
})

const isEditing = computed(() => !!props.category)

const form = useForm({
    name: null,
    description: null,
    file: null,
})

const submit = () => {
    !isEditing.value ? form.post(route('categories.store')) : form.post(route('categories.store'))
}

onMounted(() => {
    if (isEditing.value) {
        Object.keys(form).forEach((k) => (form[k] = props.category[k] ?? form[k]))
    }
})
</script>

<template>
    <div class="bg-gray-100 flex justify-center">
        <form @submit.prevent="submit" class="w-3/4 sm:w-1/2 my-10">
            <Seperator>
                <TextInput v-model="form.name" label="Name" placeholder="Category name" />
            </Seperator>
            <Seperator>
                <TextAreaInput
                    v-model="form.description"
                    label="Description"
                    placeholder="A short description of this cateogry."
                />
            </Seperator>
            <Seperator>
                <ImageUpload v-model="form.file" />
            </Seperator>
            <PrimaryButton type="submit" as="button">Upload</PrimaryButton>
        </form>
    </div>
</template>
