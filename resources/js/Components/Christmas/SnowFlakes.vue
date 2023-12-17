<script setup>
import { onMounted, ref } from 'vue'

const snowflakes = ref([])

onMounted(() => {
    // Create some initial snowflakes
    for (let i = 0; i < 50; i++) {
        createSnowflake()
    }
})

const createSnowflake = () => {
    const snowflake = {
        x: Math.random() * window.innerWidth,
        y: Math.random() * window.innerHeight,
        size: Math.random() * 11 + 1,
        opacity: Math.random(),
        speedX: Math.random() * 5 - 1.5,
        speedY: Math.random() * 5 + 1,
    }

    snowflakes.value.push(snowflake)
}

const moveSnowflakes = () => {
    snowflakes.value.forEach((snowflake, index) => {
        snowflake.x += snowflake.speedX
        snowflake.y += snowflake.speedY

        if (snowflake.y > window.innerHeight) {
            snowflakes.value.splice(index, 1)
            createSnowflake()
        }
    })
}

setInterval(moveSnowflakes, 25)
</script>

<template>
    <div class="inset-0 absolute pointer-events-none z-30">
        <div
            v-for="(snowflake, index) in snowflakes"
            :key="index"
            class="absolute rounded-full"
            :style="{
                left: `${snowflake.x}px`,
                top: `${snowflake.y}px`,
                width: `${snowflake.size}px`,
                height: `${snowflake.size}px`,
                opacity: snowflake.opacity,
                background: 'white',
            }"
        />
    </div>
</template>
