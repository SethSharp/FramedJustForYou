<template>
    <div class="bg-gray-200 border border-4 sm:border-8">
        <div class="h-4/5 py-4">
            <div class="text-2xl text-gray-600 font-bold p-4">
                <slot name="header" />
            </div>
            <div class="px-4">
                <slot />
            </div>
        </div>
        <div class="h-1/5 w-3/4 pt-6 pb-4 justify-center flex mx-auto">
            <slot name="button" />
        </div>
    </div>
</template>
