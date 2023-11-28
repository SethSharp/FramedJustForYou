<script setup>
import { Head, useForm } from '@inertiajs/vue3'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import PrimaryButton from '@/Components/Button/PrimaryButton.vue'
import TextInput from '@/Components/TextInput.vue'
import TextAreaInput from '@/Components/Inputs/TextAreaInput.vue'
import ImageUpload from '@/Components/Inputs/ImageUpload.vue'
import Seperator from '@/Components/Form/Seperator.vue'

defineProps({
    categories: Object,
})

const form = useForm({
    name: '',
    description: '',
    file: null,
})

const submit = () => {
    form.post(route('file.store'))
}
</script>

<template>
    <Head title="Categories" />

    <AuthenticatedLayout>
        <template #header> Create </template>

        <div>
            <form @submit.prevent="submit">
                <Seperator>
                    <TextInput v-model="form.name" />
                </Seperator>
                <Seperator>
                    <TextAreaInput v-model="form.description" />
                </Seperator>
                <Seperator>
                    <ImageUpload v-model="form.file" />
                </Seperator>
                <PrimaryButton type="submit" as="button">Upload</PrimaryButton>
            </form>
        </div>
    </AuthenticatedLayout>
</template>
