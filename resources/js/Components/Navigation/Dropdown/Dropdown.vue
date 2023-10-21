<script setup>
import { computed, onMounted, onUnmounted, ref } from 'vue';
import {
    ChevronDownIcon,
    ChevronUpIcon
} from "@heroicons/vue/20/solid/index.js";

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
</script>

<template>
    <div class="relative text-lg inline-flex items-center">
        <div @click="open = !open" class="cursor-pointer">
            <div class="flex text-gray-200 ">
                <slot name="trigger" />
                <ChevronDownIcon v-if="!open" class="w-6 h-6 mt-1.5 transform duration-300" />
                <ChevronUpIcon v-if="open" class="w-6 h-6 mt-1.5 transform duration-300" />
            </div>

            <Transition
                enter-active-class="transition ease-out duration-200"
                enter-from-class="opacity-0 scale-95"
                enter-to-class="opacity-100 scale-100"
                leave-active-class="transition ease-in duration-75"
                leave-from-class="opacity-100 scale-100"
                leave-to-class="opacity-0 scale-95"
            >
                <div
                    v-show="open"
                    class="absolute z-50 mt-4 rounded-md shadow-lg w-fit"
                    style="display: none"
                    @click="open = false"
                >
                    <div class="rounded-md" :class="contentClasses">
                        <slot name="content" />
                    </div>
                </div>
            </Transition>
        </div>

        <!-- Full Screen Dropdown Overlay -->
        <div v-show="open" class="fixed inset-0 z-40" @click="open = false"></div>

    </div>
</template>
