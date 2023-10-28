<script setup>
import Image from '@/Components/Image.vue'

const props = defineProps({
    name: String,
    position: String,
    description: String,
    image: String,
    side: Boolean,
    test: Boolean,
})
</script>

<template>
    <Transition
        enter-active-class="transition ease-out duration-200"
        enter-from-class="opacity-0 scale-95"
        enter-to-class="opacity-100 scale-100"
        leave-active-class="transition ease-in duration-75"
        leave-from-class="opacity-100 scale-100"
        leave-to-class="opacity-0 scale-95"
    >
        <div
            v-if="test"
            class="w-full flex-wrap md:flex-no-wrap flex my-6 rounded-xl overflow-hidden"
        >
            <div
                class="w-full lg:w-1/2 bg-gradient-to-l md:bg-gradient-to-r from-gray-200 to-gray-100 flex"
            >
                <Image class="mx-auto my-auto" not-rounded="!rounded-lg" :src="image" />
            </div>
            <div
                class="w-full lg:w-1/2 flex bg-gradient-to-l md:bg-gradient-to-r from-gray-100 to-gray-200"
            >
                <div class="mx-8 my-10 rounded-r-xl transition duration-700 bg-gray-100 p-2">
                    <h1 class="text-4xl text-gray-600">{{ name }}</h1>
                    <span class="text-2xl text-gray-500"> {{ position }} </span>
                    <p class="mt-4 text-gray-400">
                        {{ description }}
                    </p>
                </div>
            </div>
        </div>
    </Transition>
</template>
