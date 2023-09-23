<script setup>
import { Head } from '@inertiajs/vue3';
import PrimaryLayout from "@/Layouts/PrimaryLayout.vue";
import Section from "@/Components/Section.vue";
import {ArrowDownIcon} from "@heroicons/vue/20/solid/index.js";
import Info from "@/Components/Card/Info.vue";
import NavButton from "@/Components/Button/NavButton.vue";

const config = [
    {
        header: "Photos on Canvas",
        description: "Our canvas photo printing service brings your cherished moments to life in a beautiful and lasting way. We carefully transforms your photos onto canvas, creating stunning art pieces that capture the essence of your memories",
        button: "Click here",
        href: "photos-on-canvas",
        border: "red-500"
    },
    {
        header: "Custom made Canvases",
        description: "With a variety of options and sizes to choose from, our goal is to bring your vision to life on canvas. Whether it's a favorite movie scene, a gaming masterpiece, or a breathtaking outdoor landscape.",
        button: "Click here",
        href: "custom-made-canvases",
        border: "amber-600"
    },
    {
        header: "Printing on Canvas",
        description: "Our canvas printing service offers a personalized touch to your favorite images, turning them into beautiful art pieces. With various options and sizes available, we ensure your memories and moments are preserved on canvas with precision and care, making them ready to display and cherish.",
        button: "Click here",
        href: "printing-on-canvas",
        border: "yellow-300"
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
                    <span> View our broad range </span>
                    <ArrowDownIcon class="w-8 h-8" />
                </div>
            </template>
            <template #content>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-4">
                    <Info
                        v-for="item in config"
                        :href="item.href"
                        class="border-primary-600"
                    >
                        <template #header> {{ item.header }} </template>
                        {{ item.description }}
                        <template #button>
                            <NavButton
                                class="hover:-translate-y-2"
                                :href="item.href"
                            >
                                {{ item.button }}
                            </NavButton>
                        </template>
                    </Info>
                </div>
            </template>
        </Section>
        <Section id="printing-on-canvas">
            <template #header> Printing on Canvas </template>
        </Section>

        <Section id="photos-on-canvas">
            <template #header> Photos on Canvas </template>
        </Section>

        <Section id="custom-made-canvases">
            <template #header> Custom made Canvases </template>
        </Section>

        <Section id="printing-on-canvas">
            <template #header> Printing on Canvas </template>
        </Section>
    </PrimaryLayout>
</template>
