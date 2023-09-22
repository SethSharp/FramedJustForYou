<script setup>

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
        <div v-if="test" class="w-full flex-wrap md:flex-no-wrap flex my-6">
            <div class="w-full sm:w-1/2 flex bg-gray-300 bg-opacity-50">
                <div class="mx-8 my-10 rounded-r-lg transition duration-700">
                    <h1 class="text-4xl text-gray-600"> {{ name}} </h1>
                    <span class="text-2xl text-gray-500"> {{ position }} </span>
                    <p class="mt-4 text-gray-400">
                        {{ description }}
                    </p>
                </div>
            </div>
            <div class="w-full sm:w-1/2 bg-gray-200 rounded-l-lg bg-opacity-50 flex p-4">
                <img
                    class="mx-auto sm:my-10"
                    :src="image"
                />
            </div>
        </div>
    </Transition>

</template>
