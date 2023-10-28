<script setup>
import PrimaryButton from "@/Components/Button/PrimaryButton.vue";
</script>

<template>
    <div class="bg-gray-200 rounded-xl py-6 sm:w-3/4 mx-auto px-6">
        <h1 class="text-gray-600 text-2xl font-medium mb-3"> Lets turn your idea into reality! </h1>
        <p class="mb-12">
            We offer numerous services, and if you don't see a specific service mentioned here, it's possible we may have inadvertently left it out. Please feel free to reach out to us for more information, explore our extensive range of services, or peruse our online store for pre-assembled frames ready to adorn your space.
        </p>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-2 gap-y-2 sm:w-3/4 justify-center mx-auto">
            <PrimaryButton :href="route('services.framing')">
                Framing
            </PrimaryButton>
            <PrimaryButton :href="route('faq')">
                FAQ
            </PrimaryButton>
            <PrimaryButton :href="route('contact')">
                Contact
            </PrimaryButton>
            <PrimaryButton :href="route('store')">
                Store
            </PrimaryButton>
        </div>
    </div>
</template>
