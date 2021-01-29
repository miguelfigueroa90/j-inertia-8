<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Notes
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="md:grid md:grid-cols-3 md-gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px0">
                            <h3 class="text-lg text-gray-900">Note list</h3>
                            <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet est nostrum fugit doloremque at veniam voluptatibus voluptatem nemo et eaque nisi ratione debitis architecto fuga, quam consequuntur, eius animi perferendis!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'

    export default {
        components: {
            AppLayout,
        },
    }
</script>
