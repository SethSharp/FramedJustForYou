<script setup>
defineProps({
    modelValue: {
        type: String,
        required: true,
    },
})

const emits = defineEmits(['update:modelValue'])

const handleFileChange = (event) => {
    emits('update:modelValue', event.target.files[0])
}
</script>

<template>
    <input type="file" @change="handleFileChange" />
</template>
