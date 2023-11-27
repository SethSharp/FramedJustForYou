<script setup>
import { ref, watch, computed } from 'vue'
import { XMarkIcon, CheckCircleIcon } from '@heroicons/vue/20/solid/index.js'

const props = defineProps({
    success: String,
    errors: Object,
})

let notifications = ref([])
const notificationsLength = computed(() => notifications.value.length)

watch(
    () => props.success,
    (newVal) => {
        if (newVal) {
            notifications.value.push({
                icon: CheckCircleIcon,
                heading: "Success",
                messages: [props.success],
                iconClasses: "text-green-400",
            })
        }
    },
    {
        immediate: true,
    }
)

watch(
    () => props.errors,
    (newVal) => {
        if (newVal) {
            notifications.value.push({
                icon: XMarkIcon,
                heading: "Error",
                messages: Object.values(props.errors),
                iconClasses: "text-red-400",
            })
        }
    },
    {
        immediate: true,
    }
)

watch(
    notificationsLength,
    (newValue, oldValue) => {
        if (typeof oldValue === "undefined" || newValue >= oldValue) {
            setTimeout(() => notifications.value.shift(), 3000)
        }
    },
    {
        deep: true,
        immediate: true,
    }
)
</script>

<template>
    <div
        aria-live="assertive"
        class="pointer-events-none fixed inset-0 z-30 flex items-end px-4 py-6 sm:items-start sm:p-6"
    >
        <div class="flex w-full flex-col items-center space-y-4 sm:items-end">
            <template v-for="(notification, index) in notifications" :key="index">
                <transition
                    enter-active-class="transform ease-out duration-300 transition"
                    enter-from-class="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
                    enter-to-class="translate-y-0 opacity-100 sm:translate-x-0"
                    leave-active-class="transition ease-in duration-100"
                    leave-from-class="opacity-100"
                    leave-to-class="opacity-0"
                >
                    <div
                        v-if="notification.messages.length > 0"
                        class="pointer-events-auto w-full max-w-sm overflow-hidden rounded-lg bg-white shadow-lg ring-1 ring-black/5"
                    >
                        <div class="p-4">
                            <div class="flex items-start">
                                <div class="shrink-0">
                                    <component
                                        :is="notification.icon"
                                        :class="['h-6 w-6', notification.iconClasses]"
                                        aria-hidden="true"
                                    />
                                </div>

                                <div class="ml-3 w-0 flex-1 pt-0.5">
                                    <p class="text-sm font-medium text-gray-900">
                                        {{ notification.heading }}
                                    </p>

                                    <p
                                        v-for="(message, messageIndex) in notification.messages"
                                        :key="messageIndex"
                                        class="mt-1 text-sm text-gray-500"
                                    >
                                        {{ message }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </transition>
            </template>
        </div>
    </div>
</template>
