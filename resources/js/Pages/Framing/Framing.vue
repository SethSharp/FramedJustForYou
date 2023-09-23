<script setup>
import { Head } from '@inertiajs/vue3';
import PrimaryLayout from "@/Layouts/PrimaryLayout.vue";
import Section from "@/Components/Section.vue";
import { ArrowDownIcon } from "@heroicons/vue/20/solid/index.js";
import Info from "@/Components/Card/Info.vue";
import NavButton from "@/Components/Button/NavButton.vue";

const config = [
    {
        header: "Custom",
        description: "Our custom framing service, with over 1000 frames to choose from, caters to every customer's unique preferences and needs. Just like a satisfied customer who values quality and variety, we offer an extensive selection of frames that suits any style or project. ",
        button: "Click here",
        href: "custom",
        border: "red-600"
    },
    {
        header: "Jersey",
        description: "Our team understands the value of your sports memorabilia, and we frame jerseys with precision and expertise. Whether it's your favorite football jersey or a piece of sporting history, we'll ensure it's beautifully showcased.",
        button: "Click here",
        href: "jersey",
        border: "yellow-400"
    },
    {
        header: "Memorabilia",
        description: "Whether it's movie posters, gaming collectibles, or outdoor adventure keepsakes, we approach each piece with dedication. We will frame your memorabilia with the utmost care, ensuring it stands as a testament to your passions and experiences for years to come.",
        button: "Click here",
        href: "memorabilia",
        border: "green-500"
    },
    {
        header: "Jigsaw Puzzle",
        description: "team ensures that your jigsaw puzzle is not only preserved but also made fade-resistant, easy to maintain, and ready to hang. We treat each puzzle as a unique masterpiece, ensuring it stands the test of time and becomes a cherished part of your collection.",
        button: "Click here",
        href: "jig-saw",
        border: "blue-500"
    },
    {
        header: "Mirror",
        description: "Much like our other work, we mirror our dedication to craftsmanship in mirror framing. We take the reflection of your style seriously. We frame mirrors with precision and flair, ensuring they not only reflect your image but also your unique taste.",
        button: "Click here",
        href: "mirror",
        border: "amber-600"
    },
]
</script>

<template>
    <Head title="Framing" />

    <PrimaryLayout>
        <Section>
            <template #header>
                <span> Custom Framing </span>
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

        <Section id="custom">
            <template #header> Custom </template>
        </Section>

        <Section id="jersey">
            <template #header> Jersey </template>
        </Section>

        <Section id="memorabilia">
            <template #header> Memorabilia </template>
        </Section>

        <Section id="jig-saw">
            <template #header> Jigsaw Puzzles </template>
        </Section>

        <Section id="mirror">
            <template #header> Mirror </template>
        </Section>
    </PrimaryLayout>
</template>
