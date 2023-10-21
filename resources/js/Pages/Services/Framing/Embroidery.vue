<script setup>
import { Head } from '@inertiajs/vue3';
import PrimaryLayout from "@/Layouts/PrimaryLayout.vue";
import Section from "@/Components/Section.vue";

/*
* Stainless steel pins: protects
* All embroiderys and cross stiches and ex-stitches
* Handled with care, finest materials used, no glue or staples instead using (high quality stainless steel pins)
*
* */
</script>

<template>
    <Head title="Embroidery" />

    <PrimaryLayout>
        <Section :back="route('services.framing')">
            <template #header> Embroidery </template>
        </Section>
    </PrimaryLayout>
</template>
