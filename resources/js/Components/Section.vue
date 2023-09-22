<template>
    <div class="w-3/4 mx-auto">
        <div class="text-5xl py-5 text-gray-500">
            <slot name="header"/>
            <div class="text-gray-400 text-2xl mt-2">
                <slot name="subtitle"/>
            </div>
        </div>
        <div class="text-xl leading-relaxed text-gray-500 my-5">
            <slot name="content" />
        </div>
    </div>
</template>
