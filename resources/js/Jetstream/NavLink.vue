<template>
    <inertia-link :href="href" :class="classes">
        <slot></slot>
    </inertia-link>
</template>

<script>
    export default {
        props: ['href', 'active'],

        computed: {
            classes() {
                return this.active
                            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-chock-dark text-sm font-medium leading-5 text-chock-dark focus:outline-none focus:border-chock-dark transition'
                            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-chock hover:text-chock-dark hover:border-chock-dark focus:outline-none focus:text-chock-dark focus:border-chock-dark transition'
            }
        }
    }
</script>
