<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import {Head, router} from '@inertiajs/vue3'
import PrimaryButton from "@/Components/Button/PrimaryButton.vue";
import { ref } from 'vue';

const props = defineProps({
    files: Object
})

const formData = ref({
    file:  null,
});

const handleFileChange = (event) => {
    formData.value.file = event.target.files[0];

};

const submit = () => {
    console.log('submit')
    router.post(route('file.store'), {
        file: formData.value.file
    }, {
        onError: (err) => {
            console.log(err)
        },
        onSuccess: (msg) => {
            console.log(msg)
        }
    })
}
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="py-12">
            <div class="text-gray-900 text-xl">Dashboard</div>
            <div>This is where you can manage your online store</div>

            <form @submit.prevent="submit">
                <input type="file" @change="handleFileChange">
                <PrimaryButton type="submit" as="button">Upload</PrimaryButton>
            </form>
        </div>

        <div>
            <img v-for="img in files" :src="img.path"/>
        </div>
    </AuthenticatedLayout>
</template>
