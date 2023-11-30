<script setup>
import { onMounted, ref } from 'vue'
import InputLabel from '@/Components/Inputs/InputLabel.vue'
import InputError from '@/Components/Inputs/InputError.vue'

defineProps({
    modelValue: {
        type: [String, null],
        required: true,
    },
    placeholder: String,
    label: String,
    error: [String, null],
})

defineEmits(['update:modelValue'])

const input = ref(null)

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus()
    }
})

defineExpose({ focus: () => input.value.focus() })
</script>

<template>
    <InputLabel v-if="label">
        {{ label }}
    </InputLabel>
    <input
        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
        :value="modelValue"
        :placeholder="placeholder"
        @input="$emit('update:modelValue', $event.target.value)"
        ref="input"
    />
    <InputError :message="error" />
</template>
