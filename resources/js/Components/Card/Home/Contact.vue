<script setup>
import PrimaryButton from "@/Components/Button/PrimaryButton.vue";
</script>

<template>
    <div class="bg-gray-200 rounded-xl py-6 sm:w-3/4 mx-auto px-6">
        <h1 class="text-gray-700 text-2xl font-medium mb-3"> Lets turn your idea into reality! </h1>
        <p class="mb-12">
            We other many services and if we don't mention it here, we probably forgot to add it.
            Don't hesitate to get in contact with us, take a further look at our services
            or browse our online store for ready to hang frames.
        </p>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-x-2 sm:w-3/4 justify-center mx-auto">
            <PrimaryButton :href="route('find')">
                Contact Us
            </PrimaryButton>
            <PrimaryButton :href="route('find')">
                Online Store
            </PrimaryButton>
            <PrimaryButton :href="route('find')">
                Portfolio
            </PrimaryButton>
        </div>
    </div>
</template>
