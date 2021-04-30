<template>
    <button :type="type" class="inline-flex items-center px-4 py-2 bg-chock border border-transparent rounded-md font-semibold text-xs text-grey-800 uppercase tracking-widest hover:text-white hover:bg-chock-dark active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
        <slot></slot>
    </button>
</template>

<script>
    export default {
        props: {
            type: {
                type: String,
                default: 'submit',
            },
        }
    }
</script>
