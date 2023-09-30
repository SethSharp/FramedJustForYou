<script setup>
defineProps({
    showSubtitle: {
        type: Boolean,
        default: false
    }
})
</script>

<template>
    <div class="sm:w-3/4 mx-auto">
        <div class="text-xl sm:text-3xl py-5 text-gray-500">
            <slot name="header"/>
            <div v-show="showSubtitle" class="text-gray-400 text-2xl mt-2">
                <slot name="subtitle"/>
            </div>
        </div>
        <div class="text-md sm:text-xl leading-relaxed text-gray-500 my-5">
            <slot name="content" />
        </div>
    </div>
</template>
