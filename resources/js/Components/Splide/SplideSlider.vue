<script setup>
import Carousel from "@/Components/Carousel.vue"
</script>

<template>
    <div class="w-full flex-wrap lg:flex">
        <div class="w-full lg:w-1/2">
            <slot name="content" />
        </div>
        <div class="w-full lg:w-1/2">
            <div class="my-auto flex">
                <Carousel>
                    <slot name="slides" />
                </Carousel>
            </div>
        </div>
    </div>
</template>
