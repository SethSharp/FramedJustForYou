<script setup>
import { Head } from '@inertiajs/vue3';
import PrimaryLayout from "@/Layouts/PrimaryLayout.vue";
import Section from "@/Components/Section.vue";
import { ArrowDownIcon } from "@heroicons/vue/20/solid/index.js";
import Info from "@/Components/Card/Info.vue";
import SecondaryButton from "@/Components/Button/SecondaryButton.vue";

const config = [
    {
        header: "Custom",
        description: "More than 1000 frames to choose from, friendly reliable service and over 25 years custom picture framing experience on the Gold Coast.",
        button: "Click here",
        href: "#test",
        border: "red-600"
    },
    {
        header: "Mirror",
        description: "Culpa aliquip aliqua deserunt esse ullamco esse duis cillum. Nisi aliquip ipsum Lorem magna. Id minim excepteur magna commodo nisi exercitation aliquip amet. Ad esse qui eu ipsum proident dolor tempor.",
        button: "Click here",
        href: "#test",
        border: "amber-600"
    },
    {
        header: "Jersey",
        description: "Culpa aliquip aliqua deserunt esse ullamco esse duis cillum. Nisi aliquip ipsum Lorem magna. Id minim excepteur magna commodo nisi exercitation aliquip amet. Ad esse qui eu ipsum proident dolor tempor.",
        button: "Click here",
        href: "#test",
        border: "yellow-400"
    },
    {
        header: "Memorabilia",
        description: "We are your memorabilia framing specialists on the Gold Coast. Providing conservation framing methods, bespoke solutions and attention to detail.",
        button: "Click here",
        href: "#test",
        border: "green-500"
    },
    {
        header: "Jigsaw Puzzle",
        description: "Our jigsaw puzzle framing process ensures your jigsaw puzzle is preserved, fade resistent, easily maintained and ready to hang.",
        button: "Click here",
        href: "#test",
        border: "blue-500"
    },
]
</script>

<template>
    <Head title="Framing" />

    <PrimaryLayout>
        <Section>
            <template #header>
                <span> Custom Framing </span>
            </template>
            <template #subtitle>
                <div class="flex">
                    <span> View our broad range </span>
                    <ArrowDownIcon class="w-8 h-8" />
                </div>
            </template>
            <template #content>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-4">
                    <Info v-for="item in config" :href="item.href" :border="item.border">
                        <template #header> {{ item.header }} </template>
                        {{ item.description }}
                        <template #button>
                            <SecondaryButton
                                class="hover:-translate-y-2"
                                :href="item.href"
                            >
                                {{ item.button }}
                            </SecondaryButton>
                        </template>
                    </Info>
                </div>
            </template>
        </Section>
    </PrimaryLayout>
</template>
