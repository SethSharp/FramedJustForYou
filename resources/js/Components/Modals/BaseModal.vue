<script setup>
import { XMarkIcon } from '@heroicons/vue/24/outline'
import {
    TransitionRoot,
    TransitionChild,
    Dialog,
    DialogPanel,
    DialogTitle,
    DialogDescription,
} from '@headlessui/vue'

const props = defineProps({
    state: Boolean,
})

const emits = defineEmits(['close'])

const closeModal = () => {
    emits('close')
}
</script>

<template>
    <TransitionRoot appear :show="state" as="template">
        <Dialog as="div" @close="closeModal" class="relative z-40">
            <TransitionChild
                as="template"
                enter="duration-300 ease-out"
                enter-from="opacity-0"
                enter-to="opacity-100"
                leave="duration-200 ease-in"
                leave-from="opacity-100"
                leave-to="opacity-0"
            >
                <div class="fixed inset-0 bg-black/25" />
            </TransitionChild>

            <div class="fixed inset-0 overflow-y-auto">
                <div class="flex min-h-full items-center justify-center p-4 text-center">
                    <TransitionChild
                        as="template"
                        enter="duration-300 ease-out"
                        enter-from="opacity-0 scale-95"
                        enter-to="opacity-100 scale-100"
                        leave="duration-200 ease-in"
                        leave-from="opacity-100 scale-100"
                        leave-to="opacity-0 scale-95"
                    >
                        <div class="fixed inset-0 w-screen overflow-y-auto">
                            <div class="flex min-h-full items-center justify-center p-4">
                                <DialogPanel
                                    class="w-full max-w-md transform overflow-hidden rounded-2xl bg-white p-6 text-left align-middle shadow-xl transition-all"
                                >
                                    <DialogTitle
                                        as="h3"
                                        class="text-lg font-medium leading-6 text-gray-900"
                                    >
                                        <div class="flex">
                                            <slot name="title" />

                                            <div class="ml-auto" @click="closeModal">
                                                <XMarkIcon
                                                    class="w-8 h-8 text-black cursor-pointer"
                                                />
                                            </div>
                                        </div>
                                    </DialogTitle>

                                    <DialogDescription>
                                        <slot name="content" />
                                    </DialogDescription>
                                </DialogPanel>
                            </div>
                        </div>
                    </TransitionChild>
                </div>
            </div>
        </Dialog>
    </TransitionRoot>
</template>
