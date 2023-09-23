<script setup>
import { Head } from '@inertiajs/vue3';
import PrimaryLayout from "@/Layouts/PrimaryLayout.vue";
import SecondaryButton from "@/Components/Button/SecondaryButton.vue";
import Section from "@/Components/Section.vue";
import {ArrowDownIcon} from "@heroicons/vue/20/solid/index.js";
import Info from "@/Components/Card/Info.vue";

const config = [
    {
        header: "Printing on Canvas",
        description: "Culpa aliquip aliqua deserunt esse ullamco esse duis cillum. Nisi aliquip ipsum Lorem magna. Id minim excepteur magna commodo nisi exercitation aliquip amet. Ad esse qui eu ipsum proident dolor tempor.",
        button: "Click here",
        href: "#test",
        border: "red-600"
    },
    {
        header: "Printing on Canvas",
        description: "Culpa aliquip aliqua deserunt esse ullamco esse duis cillum. Nisi aliquip ipsum Lorem magna. Id minim excepteur magna commodo nisi exercitation aliquip amet. Ad esse qui eu ipsum proident dolor tempor.",
        button: "Click here",
        href: "#test",
        border: "amber-600"
    },
    {
        header: "Printing on Canvas",
        description: "Culpa aliquip aliqua deserunt esse ullamco esse duis cillum. Nisi aliquip ipsum Lorem magna. Id minim excepteur magna commodo nisi exercitation aliquip amet. Ad esse qui eu ipsum proident dolor tempor.",
        button: "Click here",
        href: "#test",
        border: "yellow-400"
    },
    {
        header: "Printing on Canvas",
        description: "Culpa aliquip aliqua deserunt esse ullamco esse duis cillum. Nisi aliquip ipsum Lorem magna. Id minim excepteur magna commodo nisi exercitation aliquip amet. Ad esse qui eu ipsum proident dolor tempor.",
        button: "Click here",
        href: "#test",
        border: "green-500"
    },
]
</script>

<template>
    <Head title="Canvases" />

    <PrimaryLayout>
        <Section>
            <template #header>
                <span> Printing and Canvases </span>
            </template>
            <template #subtitle>
                <div class="flex">
                    <span> View our broad range of services </span>
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
        <Section>
            <template #header> Services </template>
            <template #content>
                <div id="test">
                    Test service down here aye
                </div>

                <div id="test-2">
                    Test service down here aye
                </div>
            </template>
        </Section>
    </PrimaryLayout>
</template>
