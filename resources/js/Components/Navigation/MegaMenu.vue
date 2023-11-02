<script setup>
import { computed, onMounted, onUnmounted, ref } from 'vue'
import { ChevronDownIcon, ChevronUpIcon } from '@heroicons/vue/20/solid/index.js'
import { Link } from '@inertiajs/vue3'
import Column from '@/Components/Navigation/MegaMenu/Column.vue'

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
})

const open = ref(false)
</script>

<template>
    <div @click="open = !open" class="cursor-pointer flex text-gray-300">
        <slot name="trigger" />
        <ChevronDownIcon v-if="!open" class="w-6 h-6 mt-1.5 transform duration-300" />
        <ChevronUpIcon v-if="open" class="w-6 h-6 mt-1.5 transform duration-300" />
    </div>
    <div class="inset-0 absolute z-50 sm:flex" v-show="open" @click="open = false">
        <div class="mt-32 w-3/4 mx-auto">
            <div
                class="bg-white rounded-xl shadow-xl mx-auto mt-2 py-6 md:flex hidden flex-col sm:flex-row max-w-7xl w-full border-2 border-gray-50"
            >
                <div class="flex w-full">
                    <div class="grid grid-cols-4 gap-y-4 w-full border-gray-200">
                        <slot name="columns" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
