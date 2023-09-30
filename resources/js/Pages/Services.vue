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
            <template #subtitle> we don't just frame... </template>
            <template #content>
                <Carousel>
                    <SplideSlide v-for="img in images">
                        <img :src="img.src" :alt="img.alt">
                    </SplideSlide>
                </Carousel>
                <div>
                    <h1> Studio 122 </h1>
                    <p>

                    </p>
                    <div class="decoration">
                        <div> Air Conditioning </div>
                        <div> Tables </div>
                        <div> Easels </div>
                        <div> Kitchen Facilities </div>
                        <div> Fridge and Microwave </div>
                    </div>
                </div>
            </template>
        </Section>
    </PrimaryLayout>
</template>
