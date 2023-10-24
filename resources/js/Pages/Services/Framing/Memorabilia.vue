<script setup>
import { Head } from '@inertiajs/vue3';
import PrimaryLayout from "@/Layouts/PrimaryLayout.vue";
import Section from "@/Components/Section.vue";
import Image from "@/Components/Image.vue";
import Carousel from "@/Components/Carousel.vue";
import {SplideSlide} from "@splidejs/vue-splide";
</script>

<template>
    <Head title="Memorabilia" />

    <PrimaryLayout>
        <Section :back="route('services.framing')">
            <template #header>
                Memorabilia
            </template>
            <template #subtitle> Memorabilia framed the right way </template>
            <template #content>
                <Carousel>

                    <SplideSlide>
                        <Image src="memorabilia/memorabilia-3.png" alt="Memorabilia 2"/>
                    </SplideSlide>
                </Carousel>
                <div class="mt-4">
                    Your memorabilia is special and deserves to be handled and displayed correctly. Our conservation framing methods mean we take every effort to frame your piece in such a way that your memorabilia can be removed if need be and remain in it's original condition.
                </div>
            </template>
        </Section>

        <Section>
            <template #header> Collectables </template>
            <template #content>
                <div class="w-1/2 mx-auto">
                    <Image src="memorabilia/memorabilia-3.png" alt="Memorabilia 3"/>
                </div>
            </template>
        </Section>

        <Section>
            <template #header> Sports Memorabilia </template>
            <template #content>
            </template>
        </Section>
    </PrimaryLayout>
</template>
