<script setup>
import { Head } from '@inertiajs/vue3'
import Section from '@/Components/Section.vue'
import Carousel from '@/Components/Carousel.vue'
import SplideContent from '@/Components/Splide/SplideContent.vue'
import PrimaryLayout from '@/Layouts/PrimaryLayout.vue'
</script>

<template>
    <Head title="Jigsaw" />

    <PrimaryLayout>
        <Section :back="route('services.framing')">
            <template #header> Jigsaw Puzzles </template>
            <template #content>
                <Carousel type="fade" :autoPlay="false">
                    <SplideContent
                        image="framing/matboards.png"
                        title="Enjoy Forever"
                        content="Jigsaw puzzles are fun, relaxing and provide enjoyment for the whole family. Once complete, there is no better way to preserve and display your jigsaw puzzle than by having it professionally framed, allowing you to hang it on your wall like an artwork."
                    />
                    <SplideContent
                        image="framing/matboards.png"
                        title=""
                        content="With over 1000 picture frames to choose from you will have no shortage of choice when picking the perfect frame for your jigsaw puzzle. Here at Framed Just For You we take a conservation framing approach to all of our work and our process for jigsaw puzzle framing is no exception."
                    />
                    <SplideContent
                        image="framing/matboards.png"
                        title="The Process"
                        content="Each step of our jigsaw puzzle framing is completed in house using the best materials and equipment, guaranteeing it is finished to the highest standards. Your jigsaw puzzle is adhered to the backboard using a pH neutral dry mount acid free adhesive. Then we apply an artshield uv heatseal overlay which is put in our heat press at 97 degrees."
                    />
                    <SplideContent
                        image="framing/matboards.png"
                        title="The Results"
                        content="The result of this process ensures your framed jigsaw puzzle is fade resistant, preserved and easily maintained by simply wiping clean."
                    />
                </Carousel>
            </template>
        </Section>
    </PrimaryLayout>
</template>
