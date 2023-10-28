<script setup>
import { Head } from '@inertiajs/vue3';
import PrimaryLayout from "@/Layouts/PrimaryLayout.vue";
import Section from "@/Components/Section.vue";
import {
    BuildingStorefrontIcon,
} from "@heroicons/vue/20/solid/index.js";
import OpeningHours from "@/Components/OpeningHours.vue";
import ContactDetails from "@/Components/ContactDetails.vue";
import Map from "@/Components/Map.vue";
</script>

<template>
    <Head title="FAQ" />

    <PrimaryLayout>
        <Section>
            <template #header>
                FAQ
            </template>
            <template #content>

            </template>
        </Section>
    </PrimaryLayout>
</template>
