<script setup>
import { Head } from '@inertiajs/vue3';
import PrimaryLayout from "@/Layouts/PrimaryLayout.vue";
import Section from "@/Components/Section.vue";
import {
    BuildingStorefrontIcon,
} from "@heroicons/vue/20/solid/index.js";
import OpeningHours from "@/Components/OpeningHours.vue";
import ContactDetails from "@/Components/ContactDetails.vue";
</script>

<template>
    <Head title="Find us" />

    <PrimaryLayout>
        <Section>
            <template #header>
                Coming soon...
            </template>
            <template #content>
                Online store for Framed Just For You...
            </template>
        </Section>
    </PrimaryLayout>
</template>
