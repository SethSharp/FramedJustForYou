<script setup>
import { Head } from '@inertiajs/vue3';
import Section from "@/Components/Section.vue";
import {SplideSlide} from "@splidejs/vue-splide";
import SplideSlider from "@/Components/Splide/SplideSlider.vue";
import PrimaryLayout from "@/Layouts/PrimaryLayout.vue";
import Image from "@/Components/Image.vue";
</script>

<template>
    <Head title="Jersey" />

    <PrimaryLayout>
        <Section :back="route('services.framing')">
            <template #header> Jersey </template>
            <template #content>
                <SplideSlider>
                    <template #content>
                        Jersey Framing is something we take pride in, we love our sports and love to represent your teams jersey in an amazing frame.
                    </template>
                    <template #slides>
                        <SplideSlide>
                            <Image src="framing/matboards.png" />
                        </SplideSlide>
                    </template>
                </SplideSlider>
            </template>
        </Section>
    </PrimaryLayout>
</template>
