<script setup>
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
import PrimaryButton from '@/Components/Button/PrimaryButton.vue'
</script>

<template>
    <PrimaryLayout>
        <div class="h-full p-8">
            <h1 class="text-8xl text-primary-600 font-black">404</h1>

            <span class="text-gray-400 text-xl leading-9">
                The page you are looking for is still being hung up or hasn't been framed yet!
            </span>

            <br />

            <PrimaryButton as="button" :href="route('home')" class="mt-4"
                >Back to Home
            </PrimaryButton>
        </div>
    </PrimaryLayout>
</template>
