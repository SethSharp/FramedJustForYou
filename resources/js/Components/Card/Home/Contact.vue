<script setup>
import PrimaryButton from '@/Components/Button/PrimaryButton.vue'
</script>

<template>
    <div class="bg-gray-200/50 rounded-xl py-6 md:w-3/4 mx-auto px-6">
        <h1 class="text-gray-600 text-2xl font-medium mb-3">Let us turn your idea into reality!</h1>
        <p class="mb-12">
            We offer numerous services, and if you don't see a specific service mentioned here, it's
            possible we may have inadvertently left it out! Please feel free to reach out to us for
            more information or explore our extensive range of services.
        </p>

        <div
            class="grid grid-cols-1 sm:grid-cols-2 gap-x-2 gap-y-2 w-4/5 md:w-3/4 justify-center mx-auto"
        >
            <PrimaryButton :href="route('about')"> About</PrimaryButton>
            <PrimaryButton :href="route('services.framing')"> Framing</PrimaryButton>
            <PrimaryButton :href="route('services.printing')"> Printing</PrimaryButton>
            <PrimaryButton :href="route('contact')"> Contact</PrimaryButton>
        </div>
    </div>
</template>
