<template>
    <div class="sm:w-3/4 mx-auto">
        <div class="text-xl sm:text-3xl py-5 text-gray-700">
            <slot name="header"/>
            <div v-if="$slots.subtitle" class="text-gray-400 text-xl mt-2">
                <slot name="subtitle"/>
            </div>
        </div>
        <div class="text-md sm:text-lg leading-relaxed text-gray-500 my-3">
            <div class="my-6 text-gray-500 text-2xl font-medium mb-3">
                <slot name="title" />
            </div>
            <div>
                <slot name="content" />
            </div>
        </div>
    </div>
</template>
