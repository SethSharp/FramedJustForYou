<script setup>
import { onMounted, ref } from 'vue'
import InputLabel from '@/Components/Inputs/InputLabel.vue'
import InputError from '@/Components/Inputs/InputError.vue'

defineProps({
    modelValue: {
        type: [String, null],
        required: true,
    },
    type: String,
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
    <div>
        <InputLabel v-if="label">
            {{ label }}
        </InputLabel>

        <div class="mt-1 rounded-md">
            <input
                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
                :value="modelValue"
                :type="type"
                @input="$emit('update:modelValue', $event.target.value)"
                ref="input"
            />
        </div>

        <InputError :message="error" />
    </div>
</template>
