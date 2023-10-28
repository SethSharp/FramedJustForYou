<script setup>
import { Head } from '@inertiajs/vue3'
import PrimaryLayout from "@/Layouts/PrimaryLayout.vue"
import Image from "@/Components/Image.vue";
import Section from "@/Components/Section.vue"
import Carousel from "@/Components/Carousel.vue"
import Contact from "@/Components/Card/Home/Contact.vue"
import { SplideSlide } from "@splidejs/vue-splide"

const getCarouselHeight = () => {
    if (screen.width < 400) {
        return '10rem'
    }

    return '20rem'
}
</script>

<template>
    <Head title="Home" />

    <PrimaryLayout>
        <div id="intro">
            <Section>
                <template #header>
                    <span> Your Custom Picture Framers! </span>
                </template>
                <template #subtitle>
                    <span> Locally owned and operated for 20+ years. </span>
                </template>
                <template #content>
                    <div class="flex space-x-2">
                        <div class="w-1/2 border-4 border-gray-400">
                            <Image rounded-class="!rounded-none" src="store/store-side-right.png"/>
                        </div>
                        <div class="w-1/2 border-4 border-gray-400">
                            <Image rounded-class="!rounded-none" src="store/store-side-left.png"/>
                        </div>
                    </div>

<!--                    <Carousel :height="getCarouselHeight()">-->
<!--                        <SplideSlide>-->
<!--                            <Image src="store/front-desk.png" alt="Store Image 1" />-->
<!--                        </SplideSlide>-->
<!--                        <SplideSlide>-->
<!--                            <Image src="store/picture-wall.png" alt="Store Image 2" />-->
<!--                        </SplideSlide>-->
<!--                        <SplideSlide>-->
<!--                            <Image src="store/framing-desk.png" alt="Store Image 3" />-->
<!--                        </SplideSlide>-->
<!--                    </Carousel>-->
                    <div class="my-6">
                        <h1 class="text-gray-500 text-2xl font-medium mb-3"> Who are we? </h1>
                        <p>
                            At Framed Just For You, we are more than just a framing business; we are a local institution with a passion for preserving your cherished memories in the most beautiful and meaningful way. With over three decades of experience, we have been the go-to destination for custom framing on the Gold Coast. Our team is comprised of skilled artisans who understand the value of your keepsakes, whether it's artwork, photographs, or memorabilia. We take pride in our craftsmanship and attention to detail, ensuring that each piece we frame becomes a work of art in itself. As an Australian-based, family-owned and operated business, we are deeply rooted in our community, and our commitment to quality and customer satisfaction has remained unwavering since day one.
                        </p>
                    </div>

                    <div class="my-6">
                        <h1 class="text-gray-500 text-2xl font-medium mb-3"> What are we up to now? </h1>
                        <p>
                            In our ever-evolving journey, Framed Just For You continues to embrace innovation and creativity in the world of custom framing. We understand that art and design are constantly evolving, and we strive to stay at the forefront of industry trends. Recently, we've expanded our range of services to offer not just traditional framing but also cutting-edge digital printing and custom acrylic mounting. This means we can provide you with even more options to showcase your artwork and photographs in unique and contemporary ways. Additionally, we are excited to introduce an online design tool, making it easier than ever for our customers to visualize and customize their framing projects from the comfort of their homes. We're dedicated to enhancing your experience with us, providing unmatched quality, and continuing to be your trusted partner for all things framing on the Gold Coast.
                        </p>
                    </div>

                    <div class="my-12 text-center justify-center">
                        <Contact />
                    </div>
                </template>
            </Section>
        </div>
    </PrimaryLayout>
</template>
