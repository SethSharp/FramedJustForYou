<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { Link, Head, router } from '@inertiajs/vue3'
import { ref } from 'vue'

const props = defineProps({
    files: Object,
    product: Object,
})

const formData = ref({
    file: null,
    description: '',
})

const handleFileChange = (event) => {
    formData.value.file = event.target.files[0]
}

const submit = () => {
    router.post(
        route('file.store'),
        {
            file: formData.value.file,
            description: formData.value.description,
        },
        {
            onError: (err) => {
                console.log(err)
            },
        },
    )
}
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="text-gray-900 text-xl">Dashboard</div>
        <div>This is where you can manage your online store</div>

        <h1>Categories and Products</h1>
        <div class="grid grid-cols-6 mt-6">
            <Link
                :href="route('categories.index')"
                class="rounded-xl shadow-md flex justify-center h-48 bg-gray-200 hover:bg-gray-300"
            >
                <span class="my-auto text-xl"> Categories </span>
            </Link>
        </div>
    </AuthenticatedLayout>
</template>
