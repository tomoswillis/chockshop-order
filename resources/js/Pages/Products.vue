<template>
    <app-layout>

        <div class="flex flex-wrap ">
            <div v-for="product in product" :key="product.id">
                <product :item="product"/>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Product from '@/Cards/Product'

    export default {
        
        components: {
            AppLayout,
            Product,
        },

          props: {
            product: Array,
        },

    }
</script>

