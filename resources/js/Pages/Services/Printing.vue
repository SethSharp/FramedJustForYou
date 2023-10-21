<script setup>
import { Head } from '@inertiajs/vue3';
import PrimaryLayout from "@/Layouts/PrimaryLayout.vue";
import Section from "@/Components/Section.vue";
import {PhotoIcon, CameraIcon, BanknotesIcon, AdjustmentsHorizontalIcon, PrinterIcon} from "@heroicons/vue/20/solid/index.js";
import Info from "@/Components/Card/Info.vue";
import NavButton from "@/Components/Button/NavButton.vue";
import Service from "@/Components/Card/Services/Service.vue";
import PricingTable from "@/Components/Card/PricingTable.vue";

const squareCanvas = [
    { inches: '12"x12"', cm: '30cm x 30cm', pricing: '$70.00' },
    { inches: '16"x16"', cm: '40cm x 40cm', pricing: '$90.00' },
    { inches: '20"x20"', cm: '51cm x 51cm', pricing: '$140.00' },
    { inches: '24"x24"', cm: '61cm x 61cm', pricing: '$150.00' },
    { inches: '30"x30"', cm: '76cm x 76cm', pricing: '$260.00' },
    { inches: '36"x36"', cm: '91cm x 91cm', pricing: '$300.00' },
    { inches: '40"x40"', cm: '102cm x 102cm', pricing: '$330.00' },
];

const canvasSquares = {
    title: 'Squares',
    headings: ['Sizes', '', 'Pricing'],
    data: [
        ['12"x12"', '30cmx30cm', '$100']
    ]
}

const canvasPanoramic = {
    title: 'Panoramic',
    headings: ['Sizes', '', 'Pricing'],
    data: [
        ['12"x12"', '30cmx30cm', '$100']
    ]
}

const canvasRectangles = {
    title: 'Rectangles',
    headings: ['Sizes', '', 'Pricing'],
    data: [
        ['12"x12"', '30cmx30cm', '$100']
    ]
}

const printingPaper = {
    headings: ['Sizes', '', 'Photo Paper', 'Art Paper', 'Canvas'],
    data: [
        ['6"x4"', '152x102cm', '$8', '$10', '$15'],
    ]
}

const config = [
    {
        header: "Photos on Canvas - Ready to Hang!",
        description: "Let's say you went on a really nice holiday to Hawaii or to Fraser Island and managed to snap the perfect sunset or the perfect selfie of you and your partner. Well, we can print that for you on a ready to hang canvas, any photo you have on a device we can download that and fit it to the correct size you want with the canvase sizes below.",
        href: "photos-on-canvases",
        data: [
            canvasSquares,
            canvasPanoramic,
            canvasRectangles
        ],
    },
    {
        header: "Printing on canvas",
        description: "If you have a photo but are not after a canvas print we can still print that photo out onto some of our high quality photo and art paper. This gives you the ability to send it away to some or stick it in your books. *Note that these are not ready to hang.",
        href: "printing-on-canvases",
        data: [
            printingPaper
        ]
    },
    {
        header: "Stretched canvases (Prices yet to be added)",
        description: "Stretched canvases give you the option to paint as your heart desires. We offer ",
        href: "stretched-canvases",
    }
]
</script>

<template>
    <Head title="Canvases" />

    <PrimaryLayout>
        <Section>
            <template #header>
                <span> Printing and Canvases </span>
            </template>
<!--            <template #subtitle>-->
<!--                <div class="flex">-->
<!--                    <span> View all our options </span>-->
<!--                    <PhotoIcon class="w-8 h-8 ml-2" />-->
<!--                </div>-->
<!--            </template>-->
            <template #content>
                <div>
                    We offer a range of services when it comes to printing and canvas. Whether you are a painter,
                    or wanting to put your favourite photos on your phone on a canvas, we got you covered!
                </div>

                <div class="grid grid-cols-3 my-12 gap-x-4 gap-y-4">
                    <Service
                        :icon="PrinterIcon"
                        href="#photos-on-canvases"
                        title="Photos on Canvas"
                        description="Want your favourite phone photo in a frame? We can achieve that, see below!"
                    />

                    <Service
                        :icon="PhotoIcon"
                        href="#printing-on-canvases"
                        title="Printing on Canvas"
                        description="Want your favourite phone photo in a frame? We can achieve that, see below!"
                    />

                    <Service
                        :icon="AdjustmentsHorizontalIcon"
                        href="#stretched-canvases"
                        title="Stretched Canvases"
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

        <Section v-for="item in config" :id="item.href">
            <template #header> {{ item.header }} </template>
            <template #content>
                {{ item.description }}
                <div class="mt-8 flow-root" v-if="item.data">
                    <PricingTable v-for="data in item.data" :data="data" />
                </div>
            </template>
        </Section>
    </PrimaryLayout>
</template>
