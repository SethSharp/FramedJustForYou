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
                :class="{'lg:w-full' : !image, 'lg:w-1/2' : image}"
                class="w-full md:w-1/2 flex bg-gradient-to-l md:bg-gradient-to-r from-gray-200 to-gray-100"
            >
                <div class="mx-8 my-10 rounded-l-xl transition duration-700 p-2">
                    <h1 class="text-4xl text-gray-600">{{ name }}</h1>
                    <span class="text-2xl text-gray-500"> {{ position }} </span>
                    <p class="mt-4 text-gray-400">
                        {{ description }}
                    </p>
                </div>
            </div>
            <div
                class="w-full md:w-1/2 flex bg-gradient-to-l md:bg-gradient-to-r from-gray-100 to-gray-200"
            >
                <Image v-if="image" class="mx-auto my-auto w-3/5" not-rounded :src="image" />
            </div>
        </div>
    </Transition>
</template>
