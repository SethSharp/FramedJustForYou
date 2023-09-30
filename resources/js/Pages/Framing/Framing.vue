<script setup>
import { Head } from '@inertiajs/vue3';
import PrimaryLayout from "@/Layouts/PrimaryLayout.vue";
import Section from "@/Components/Section.vue";
import { ArrowDownIcon } from "@heroicons/vue/20/solid/index.js";
import Info from "@/Components/Card/Info.vue";
import NavButton from "@/Components/Button/NavButton.vue";
import { SplideSlide } from "@splidejs/vue-splide";
import Carousel from "@/Components/Carousel.vue";
import SplideContent from "@/Components/Splide/SplideContent.vue";
import SplideSlider from "@/Components/Splide/SplideSlider.vue";

const config = [
    {
        header: "Memorabilia",
        description: "Whether it's movie posters, gaming collectibles, or outdoor adventure keepsakes, we approach each piece with dedication. We will frame your memorabilia with the utmost care, ensuring it stands as a testament to your passions and experiences for years to come.",
        button: "Click here",
        href: "memorabilia",
        border: "green-500"
    },
]

const splideContentCards = [
    {
        image: "/images/framing/flinders.png",
        title: "Our Approach",
        content: "Our approach is simple, whether your custom framing project is a valuable artwork by a renowned artist or your grandchild's arts and crafts project it will receive the highest attention to detail while being finished to the finest standards.",
    },
    {
        image: "/images/framing/selection.png",
        title: "Selection",
        content: "Our custom framing service, with over 1000 frames to choose from, caters to every customer's unique preferences and needs. Just like a satisfied customer who values quality and variety, we offer an extensive selection of frames that suits any style or project.",
    },
    {
        image: "/images/framing/glassChoices.png",
        title: "Glassing Options",
        content: "We offer a comprehensive selection of glass types to compliment your custom frame: Clear Glass, " +
            "UV Clear Glass 97% Non Fading, " +
            "Non Reflective Glass, " +
            "Conservation Non reflective Glass 97% Non Fading, " +
            "Museum Glass, " +
            "Ultraview",
    },
    {
        image: "/images/framing/matboards.png",
        title: "Matboards and Cutting",
        content: "Our mat boards are top quality and acid free. We use Crescent - Neilsen, Bainbridge, Alpha, Peterborough Museum Core, Artique conservation, Archival rag and Museum mats",
    },
    {
    image: "/images/framing/framing.png",
        title: "Frames",
        content: "At Framed Just For You we use all quality wood and metal picture frames, no synthetics are used. Frames are sourced from all over the world and we have over 1000 samples to choose from. Our huge selection of custom frames include brands such as Larson-Juhl and Antons Mouldings.",
    }
]

const scrollToContent = () => document.getElementById('custom').scrollIntoView({ behavior: "smooth" })
</script>

<template>
    <Head title="Framing" />

    <PrimaryLayout>
        <Section>
            <template #header>
                <span> Framing </span>
            </template>
            <template #subtitle>
                <div
                    @click="scrollToContent()"
                    class="flex cursor-pointer"
                >
                    <span> View our broad range </span>
                    <ArrowDownIcon class="w-8 h-8" />
                </div>
            </template>
            <template #content>
                <div class="mb-6">
                    At Framed Just For You, we specialize in custom framing that transforms your cherished memories into timeless works of art. Our expert craftsmen meticulously tailor each frame to suit your unique style and preserve the essence of your precious moments. Whether it's artwork, photographs, memorabilia, or more, we provide personalized framing solutions that elevate the beauty and significance of your keepsakes.
                </div>
<!--                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-4">-->
<!--                    <Info-->
<!--                        v-for="item in config"-->
<!--                        class="border-primary-600"-->
<!--                    >-->
<!--                        <template #header> {{ item.header }} </template>-->
<!--                        {{ item.description }}-->
<!--                        <template #button>-->
<!--                            <NavButton-->
<!--                                class="hover:-translate-y-2"-->
<!--                                :href="item.href"-->
<!--                            >-->
<!--                                {{ item.button }}-->
<!--                            </NavButton>-->
<!--                        </template>-->
<!--                    </Info>-->
<!--                </div>-->
            </template>
        </Section>

        <Section id="custom">
            <template #header> Custom </template>
            <template #content>
                <Carousel type="fade" :autoPlay="false">
                    <SplideContent
                        v-for="spliceContentCard in splideContentCards"
                        v-bind="spliceContentCard"
                    />
                </Carousel>
            </template>
        </Section>

        <Section id="jersey">
            <template #header> Jersey </template>
            <template #content>
                <SplideSlider>
                    <template #content>
                        Jersey Framing is something we take pride in, we love our sports and love to represent your teams jersey in an amazing frame.
                    </template>
                    <template #slides>
                        <SplideSlide>
                            <img src="/images/framing/matboards.png" />
                        </SplideSlide>
                    </template>
                </SplideSlider>
            </template>
        </Section>

        <Section id="jig-saw">
            <template #header> Jigsaw Puzzles </template>
            <template #content>
                <Carousel type="fade" :autoPlay="false">
                    <SplideContent
                        image="/images/framing/framing.png"
                        title="Enjoy Forever"
                        content="Jigsaw puzzles are fun, relaxing and provide enjoyment for the whole family. Once complete, there is no better way to preserve and display your jigsaw puzzle than by having it professionally framed, allowing you to hang it on your wall like an artwork."
                    />
                    <SplideContent
                        image="/images/framing/framing.png"
                        title=""
                        content="With over 1000 picture frames to choose from you will have no shortage of choice when picking the perfect frame for your jigsaw puzzle. Here at Framed Just For You we take a conservation framing approach to all of our work and our process for jigsaw puzzle framing is no exception."
                    />
                    <SplideContent
                        image="/images/framing/framing.png"
                        title="The Process"
                        content="Each step of our jigsaw puzzle framing is completed in house using the best materials and equipment, guaranteeing it is finished to the highest standards. Your jigsaw puzzle is adhered to the backboard using a pH neutral dry mount acid free adhesive. Then we apply an artshield uv heatseal overlay which is put in our heat press at 97 degrees."
                    />
                    <SplideContent
                        image="/images/framing/framing.png"
                        title="The Results"
                        content="The result of this process ensures your framed jigsaw puzzle is fade resistant, preserved and easily maintained by simply wiping clean."
                    />
                </Carousel>
            </template>
        </Section>

        <Section id="mirror">
            <template #header> Mirror </template>
        </Section>
    </PrimaryLayout>
</template>
