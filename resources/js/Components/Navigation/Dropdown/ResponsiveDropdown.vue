<script setup>
import { ref } from 'vue';
import {
    ChevronDownIcon,
    ChevronUpIcon
} from "@heroicons/vue/20/solid/index.js";

const open = ref(false);
</script>

<template>
    <div class="">
        <div @click="open = !open" class="cursor-pointer">
            <div class="flex">
                <slot name="trigger"/>
                <ChevronDownIcon v-if="!open" class="w-6 h-6 mt-1.5 animation duration-300 ease-in-out" />
                <ChevronUpIcon v-if="open" class="w-6 h-6 mt-1 animation duration-300 ease-in-out" />
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
                    class="ml-6"
                    style="display: none"
                    @click="open = false"
                >
                    <div>
                        <slot name="content" />
                    </div>
                </div>
            </Transition>
        </div>
    </div>
</template>
