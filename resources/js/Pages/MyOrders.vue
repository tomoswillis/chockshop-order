<template>
    <app-layout>


    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import SingleOrder from '@/Cards/SingleOrder'
    import SelectedOrder from '@/Cards/SelectedOrder'
    import Status from '@/Elements/Status'

    export default {
        components: {
            AppLayout,
            SingleOrder,
            SelectedOrder,
            Status,
        },
        props: {
            orders: null,
        },

       
        data() {
            return {
            }
        },
        
        methods: {
           
        },

        watch: {
           

            

        },

        computed: {
            

                       

           
        }
    }
</script>