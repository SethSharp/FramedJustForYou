<template>
    <div>
        <div class="text-5xl py-5 text-gray-500">
            <slot name="header"/>
        </div>
        <div>
            <slot name="content" />
        </div>
    </div>
</template>
