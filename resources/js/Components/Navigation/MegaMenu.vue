<script setup>
import { computed, onMounted, onUnmounted, ref } from 'vue';
import {
    ChevronDownIcon,
    ChevronUpIcon
} from "@heroicons/vue/20/solid/index.js";
import {Link} from "@inertiajs/vue3";
import Column from "@/Components/Navigation/MegaMenu/Column.vue";

const props = defineProps({
    align: {
        type: String,
        default: 'right',
    },
    width: {
        type: String,
        default: '48',
    },
    contentClasses: {
        type: String,
        default: 'py-1 bg-white',
    },
});

const open = ref(false);

const customFraming = [
    {
        name: 'Memorabilia',
        href: route('services.framing.memorabilia'),
        active: 'services.framing.memorabilia'
    },
    {
        name: 'Jigsaw',
        href: route('services.framing.jigsaw'),
        active: 'services.framing.jigsaw'
    },
    {
        name: 'Mirror',
        href: route('services.framing.mirror'),
        active: 'services.framing.mirror'
    },
    {
        name: 'Embroidery',
        href: route('services.framing.embroidery'),
        active: 'services.framing.embroidery'
    },
]

const printing = [
    {
        name: 'Photos on Canvas',
        href: route('services.printing') + '#photos-on-canvases',
        link: '#photos-on-canvases',
        active: 'services.printing'
    },
    {
        name: 'Printing on Canvas',
        href: route('services.printing') + '#printing-on-canvases',
        link: '#printing-on-canvases',
        active: 'services.printing'
    },
    {
        name: 'Stretched Canvases',
        href: route('services.printing') + '#stretched-canvases',
        link: '#stretched-canvases',
        active: 'services.printing'
    },
]

const restorations = [
    {
        name: "Glass Cutting",
        href: route('services.restorations.glass-cutting'),
        active: 'services.restorations.glass-cutting'
    },
    {
        name: "Matboard Cutting",
        href: route('services.restorations.matboard-cutting'),
        active: 'services.restorations.matboard-cutting'
    },
    {
        name: "Full revamps",
        href: route('services.restorations.revamps'),
        active: 'services.restorations.revamps'
    }
]

const accessories = [

]
</script>

<template>
    <div @click="open = !open" class="cursor-pointer flex text-gray-300">
        <slot name="trigger" />
        <ChevronDownIcon v-if="!open" class="w-6 h-6 mt-1.5 transform duration-300" />
        <ChevronUpIcon v-if="open" class="w-6 h-6 mt-1.5 transform duration-300" />
    </div>
    <div class="inset-0 absolute z-20 sm:flex" v-show="open" @click="open = false">
        <div class="mt-24 w-3/4 mx-auto">
            <div class="bg-white rounded-xl shadow-xl mx-auto mt-2 py-6 md:flex hidden flex-col sm:flex-row max-w-7xl w-full border-2 border-gray-50">
                <div class="flex w-full">
                    <div class="grid grid-cols-4 w-full border-gray-200">
                        <Column
                            title="Custom Framing"
                            :href="route('services.framing')"
                            :links="customFraming"
                        />

                        <Column
                            title="Printing"
                            :href="route('services.printing')"
                            :links="printing"
                        />

                        <Column
                            title="Restorations"
                            :links="restorations"
                        />

                        <Column
                            title="Accessories"
                            :links="accessories"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
