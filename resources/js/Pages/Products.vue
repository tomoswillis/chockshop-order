<template>
    <app-layout>   

        <div class="w-screen  prodBg relative min-h-66">
            <img src="images/products/header-brownie.png" class="absolute -top-0 -right-0 max-h-66 select-none" alt="">
                <div class="text-white">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-52 ">
                        <div class="w-2/5">
                            <h1 class="font-chockshop text-2xl w-2/3">Order what you need, when you need it</h1>
                            <p class="mt-2">Can't find what you're looking for? call us, or for non urgent queries you can contact us.</p>
                            <button class="bg-chock align-center w-4/12 rounded text-xs font-bold py-2 text-chock-text cursor-pointer mt-1 border border-transpartent hover:border-chock hover:bg-chock-dark hover:text-chock mt-5">Contact Us</button>
                        </div>
                    </div>
                </div>
            
        </div>

        <div class="flex flex-wrap max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
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

