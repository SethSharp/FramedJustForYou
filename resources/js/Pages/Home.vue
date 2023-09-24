<script setup>
import { Head } from '@inertiajs/vue3';
import PrimaryLayout from "@/Layouts/PrimaryLayout.vue";
import PrimaryButton from "@/Components/Button/PrimaryButton.vue";
import Section from "@/Components/Section.vue";
import Carousel from "@/Components/Carousel.vue";
import Contact from "@/Components/Card/Home/Contact.vue";
import { SplideSlide } from "@splidejs/vue-splide";

const images = [
    "/images/dianne-temp 1.png",
    "/images/dummylogo.jpeg",
    "/images/art-studio.jpeg",
]
</script>

<template>
    <Head title="Home" />

    <PrimaryLayout>
        <Section>
            <template #content>
                <Carousel>
                    <SplideSlide v-for="img in images">
                        <img :src="img" alt="image">
                    </SplideSlide>
                </Carousel>
            </template>
        </Section>
        <div id="intro">
            <Section>
                <template #header>
                    <span> Your Custom Picture Framers! </span>
                </template>
                <template #subtitle>
                    <span> Locally owned and operated for 20+ years </span>
                </template>
                <template #content>
                    <div class="my-6">
                        <h1 class="text-gray-700 text-2xl font-medium mb-3"> Who are we? </h1>
                        <p>
                            Eu et sit aliqua. Ullamco officia nostrud adipisicing labore velit eu dolor eiusmod fugiat. Dolor amet veniam eiusmod proident enim. Excepteur magna ullamco mollit quis proident do do. Deserunt voluptate sunt dolor velit in qui adipisicing ullamco est id magna. Sint duis magna sint deserunt commodo ullamco tempor labore esse labore magna excepteur reprehenderit proident. Ad proident amet amet sit ex ipsum tempor reprehenderit esse commodo.

                            Ea est eiusmod incididunt Lorem culpa. Tempor officia ut non nulla enim ut labore et laboris voluptate. Commodo est ullamco sint incididunt do consequat. Id et enim in velit ullamco mollit proident cupidatat est. Dolore et non amet consequat cupidatat.
                        </p>
                    </div>

                    <div class="my-6">
                        <h1 class="text-gray-700 text-2xl font-medium mb-3"> What are we up to now? </h1>
                        <p>
                            Workshops, shop rearrangement
                            <br>
                            Eu et sit aliqua. Ullamco officia nostrud adipisicing labore velit eu dolor eiusmod fugiat. Dolor amet veniam eiusmod proident enim. Excepteur magna ullamco mollit quis proident do do. Deserunt voluptate sunt dolor velit in qui adipisicing ullamco est id magna. Sint duis magna sint deserunt commodo ullamco tempor labore esse labore magna excepteur reprehenderit proident. Ad proident amet amet sit ex ipsum tempor reprehenderit esse commodo.

                            Ea est eiusmod incididunt Lorem culpa. Tempor officia ut non nulla enim ut labore et laboris voluptate. Commodo est ullamco sint incididunt do consequat. Id et enim in velit ullamco mollit proident cupidatat est. Dolore et non amet consequat cupidatat.
                        </p>
                    </div>

                    <div class="my-12 text-center justify-center">
                        <Contact/>
                    </div>
                </template>
            </Section>
        </div>
    </PrimaryLayout>
</template>
