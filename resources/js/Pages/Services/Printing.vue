<script setup>
import { Head } from '@inertiajs/vue3';
import PrimaryLayout from "@/Layouts/PrimaryLayout.vue";
import Section from "@/Components/Section.vue";
import {PhotoIcon, CameraIcon, BanknotesIcon, AdjustmentsHorizontalIcon, PrinterIcon} from "@heroicons/vue/20/solid/index.js";
import Info from "@/Components/Card/Info.vue";
import NavButton from "@/Components/Button/NavButton.vue";
import Service from "@/Components/Card/Services/Service.vue";
import PricingTable from "@/Components/Card/PricingTable.vue";

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

const squareCanvas = [
    { inches: '12"x12"', cm: '30cm x 30cm', pricing: '$70.00' },
    { inches: '16"x16"', cm: '40cm x 40cm', pricing: '$90.00' },
    { inches: '20"x20"', cm: '51cm x 51cm', pricing: '$140.00' },
    { inches: '24"x24"', cm: '61cm x 61cm', pricing: '$150.00' },
    { inches: '30"x30"', cm: '76cm x 76cm', pricing: '$260.00' },
    { inches: '36"x36"', cm: '91cm x 91cm', pricing: '$300.00' },
    { inches: '40"x40"', cm: '102cm x 102cm', pricing: '$330.00' },
];

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
                    <span> View all our options </span>
                    <PhotoIcon class="w-8 h-8 ml-2" />
                </div>
            </template>
            <template #content>
                <div>
                    We offer a range of services when it comes to printing and canvas. Whether you are a painter,
                    or wanting to put your favourite photos on your phone on a canvas, we got you covered!
                </div>

                <div class="grid grid-cols-3 my-12 gap-x-4 gap-y-4">
                    <Service
                        :icon="CameraIcon"
                        href="#photos-on-canvas"
                        title="Photos on Canvas"
                        description="Want your favourite phone photo in a frame? We can achieve that, see below!"
                    />

                    <Service
                        :icon="PrinterIcon"
                        href="#printing-on-canvas"
                        title="Printing on Canvas"
                        description="Want your favourite phone photo in a frame? We can achieve that, see below!"
                    />

                    <Service
                        :icon="AdjustmentsHorizontalIcon"
                        href="#custom-made-canvases"
                        title="Custom made"
                        description="Want a blank canvas to paint on? Well we have that option here too!"
                    />

<!--                    <Service-->
<!--                        :icon="BanknotesIcon"-->
<!--                        href="#made-to-order"-->
<!--                        title="Pricing"-->
<!--                        description="Once special thing about this service is we can directly provide estimates on prices."-->
<!--                    />-->
                </div>
            </template>
        </Section>

        <Section id="photos-on-canvas">
            <template #header> Photos on Canvas </template>
        </Section>

        <Section id="printing-on-canvas">
            <template #header> Printing on Canvas </template>
        </Section>

        <Section id="custom-made-canvases">
            <template #header> Custom made Canvases </template>
            <template #subtitle> *Note these prices may change and may not represent current retail price. </template>
            <template #content>
                <span> We offer the ability to purchase blank canvases to paint on. We only stock the best of the best canvases for your artwork! </span>
                <div class="mt-8 flow-root">
                    <PricingTable :data="squareCanvas" />
                </div>
            </template>
        </Section>

        <Section id="made-to-order">
            <template #header> Pricings </template>
            <template #subtitle> *Note these prices may change and may not represent current retail price. </template>
            <template #content>
                <div class="mt-8 flow-root">
                    <PricingTable :data="squareCanvas" />
                </div>
            </template>
        </Section>
    </PrimaryLayout>
</template>
