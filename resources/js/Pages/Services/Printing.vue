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
    title: 'Squares Canvas',
    headings: ['Sizes', '', 'Pricing'],
    data: [
        ['12"x12"', '30cmx30cm', '$100'],
        ['16"x16"', '40cmx40cm', '$140'],
        ['20"x20"', '50cmx50cm', '$191'],
        ['24"x24"', '60cmx60cm', '$229'],
        ['30"x30"', '76cmx76cm', '$304'],
        ['36"x36"', '91cmx91cm', '$374'],
        ['40"x40"', '102cmx102cm', '$408'],
    ]
}

const canvasPanoramic = {
    title: 'Panoramic Canvas',
    headings: ['Sizes', '', 'Pricing'],
    data: [
        ['12"x12"', '30cmx30cm', '$100'],
        ['12"x12"', '30cmx30cm', '$100'],
        ['12"x36"', '30cmx30cm', '$100'],
        ['18"x36"', '30cmx30cm', '$100'],
        ['20"x40"', '30cmx30cm', '$100'],
        ['16"x48"', '30cmx30cm', '$100'],
        ['24"x48"', '30cmx30cm', '$100'],
    ]
}

const canvasRectangles = {
    title: 'Rectangles Canvas',
    headings: ['Sizes', '', 'Pricing'],
    data: [
        ['12"x16"', '30cmx40cm', '$100'],
        ['14"x20"', '35cmx50cm', '$135'],
        ['16"x20"', '40cmx50cm', '$145'],
        ['16"x24"', '40cmx60cm', '$168'],
        ['20"x24"', '50cmx60cm', '$198'],
        ['20"x30"', '50cmx75cm', '$190'],
        ['24"x30"', '61cmx76cm', '$270'],
        ['24"x36"', '60cmx91cm', '$280'],
        ['28"x40"', '70cmx100cm', '$345'],
        ['30"x40"', '76cmx102cm', '$355'],
        ['32"x48"', '80cmx120cm', '$415'],
        ['36"x48"', '91cmx120cm', '$405'],
    ]
}

const printingPaper = {
    title: 'Printing',
    headings: ['Sizes', '', 'Photo Paper', 'Art Paper', 'Canvas'],
    data: [
        ['6"x4"', '15x10cm', '$8', '$10', '$15'],
        ['5"x7"', '12x17cm', '$12', '$15', '$20'],
        ['8"x10"', '20x25cm', '$24', '$29', '$36'],
        ['10"x12"', '25x30cm', '$29', '$32', '$40'],
        ['12"x12"', '30x30cm', '$32', '$34', '$42'],
        ['11"x14"', '27x35cm', '$34', '$36', '$45'],
        ['12"x16"', '30x40cm', '$39', '$44', '$52'],
        ['16"x16"', '40x40cm', '$50', '$58', '$70'],
        ['16"x20"', '40x50cm', '$58', '$64', '$76'],
        ['20"x20"', '50x50cm', '$68', '$72', '$90'],
        ['20"x30"', '50x76cm', '$88', '$99', '$110'],
        ['24"x24"', '61x61cm', '$85', '$96', '$120'],
        ['20"x40"', '50x101cm', '$130', '$160', '$180'],
        ['24"x36"', '61x91cm', '$130', '$160', '$180'],
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