<template>
    <button :type="type" class="inline-flex items-center px-4 py-2 bg-chock border border-transparent rounded-md font-semibold text-xs text-chock-dark uppercase tracking-widest hover:text-chock hover:bg-chock-dark active:bg-chock-dark focus:outline-none focus:border-chock focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
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
