<script setup>
import {useForm} from '@inertiajs/vue3'
import {computed, onMounted} from 'vue'
import PrimaryButton from '@/Components/Button/PrimaryButton.vue'
import TextInput from '@/Components/Inputs/TextInput.vue'
import TextAreaInput from '@/Components/Inputs/TextAreaInput.vue'
import ImageUpload from '@/Components/Inputs/ImageUpload.vue'
import Seperator from '@/Components/Form/Seperator.vue'

const props = defineProps({
    category: {
        type: Object,
    },
})

const emits = defineEmits(['close']);

const isEditing = computed(() => !!props.category)
const path = props.category ? props.category.file.path : ''

const form = useForm({
    name: null,
    description: null,
    file: null,
})

const submit = () => {
    console.log(form)
    !isEditing.value
        ? form.post(route('categories.store'))
        : form.post(route('categories.update', props.category), {
            onSuccess: () => emits('close')
        })
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
                <TextInput v-model="form.name" label="Name" placeholder="Category name"/>
            </Seperator>
            <Seperator>
                <TextAreaInput v-model="form.description" label="Description"/>
            </Seperator>
            <Seperator>
                <ImageUpload v-model="form.file" :current-image="path"/>
            </Seperator>
            <PrimaryButton type="submit" as="button">
                {{ isEditing ? 'Update' : 'Add' }}
            </PrimaryButton>
        </form>
    </div>
</template>
