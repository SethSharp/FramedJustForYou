<script setup>
import { ref } from 'vue'
import { ChevronDownIcon } from '@heroicons/vue/20/solid/index.js'
import NavLink from '@/Components/Navigation/NavLink.vue'

const open = ref(false)
</script>

<template>
    <div>
        <div @click="open = !open" class="cursor-pointer">
            <div class="flex text-gray-300">
                <NavLink>
                    <slot name="trigger" />
                </NavLink>

                <ChevronDownIcon
                    class="w-6 h-6 mt-0.5 animation duration-300 ease-in-out"
                    :class="{ 'rotate-180': open }"
                />
            </div>

            <Transition
                enter-active-class="transition ease-out duration-200"
                enter-from-class="opacity-0 scale-95"
                enter-to-class="opacity-100 scale-100"
                leave-active-class="transition ease-in duration-75"
                leave-from-class="opacity-100 scale-100"
                leave-to-class="opacity-0 scale-95"
            >
                <div v-show="open" style="display: none" @click="open = false">
                    <div>
                        <slot name="content" />
                    </div>
                </div>
            </Transition>
        </div>
    </div>
</template>
