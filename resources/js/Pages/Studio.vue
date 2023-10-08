<script setup>
import { Head } from '@inertiajs/vue3';
import PrimaryLayout from "@/Layouts/PrimaryLayout.vue";
import Section from "@/Components/Section.vue";
import { SplideSlide } from "@splidejs/vue-splide";
import Carousel from "@/Components/Carousel.vue";

const images = [
    {
        src: "/images/art-studio.jpeg",
        alt: "Art Class "
    },
]
</script>

<template>
    <Head title="Services" />

    <PrimaryLayout>
        <Section>
            <template #header> Art Studio for hire </template>
            <template #subtitle>
                <Carousel>
                    <SplideSlide v-for="img in images">
                        <img :src="img.src" :alt="img.alt">
                    </SplideSlide>
                </Carousel>
            </template>
            <template #content>
                <div>
                    <h1 class="text-xl"> Studio 122 </h1>

                    <ul class="decoration list-disc list-inside">
                        <li> Air Conditioning </li>
                        <li> Tables </li>
                        <li> Easels </li>
                        <li> Kitchen Facilities </li>
                        <li> Fridge and Microwave </li>
                    </ul>
                </div>
            </template>
        </Section>
    </PrimaryLayout>
</template>
