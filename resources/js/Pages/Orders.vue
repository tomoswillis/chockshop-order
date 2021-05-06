<template>
    <app-layout>


<select v-model="filter">
    <option value="all">All</option>
    <option value="pending">Pending</option>
</select> 
    <div class="w-full p-5 flex min-h-screen">
        <div class="glass w-5/12 py-6">
            <single-order 
                v-for="order in orders" 
                :key="order.id" 
                :data="order" 
                v-on:update="updatetest()"
                @click="updateSelected(order)"
                class="mx-2 rounded border-b border-t border-transparent hover:border-chock cursor-pointer "/>
        </div>

        <div class="w-5/12 text-white p-5 mx-auto rounded place-self-center" v-if="this.test != null">
            <selected-order :product="this.test"/>
        </div>
    </div>
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
               test: null,
               newList: this.orders,
               filter: 'all',
            }
        },
        
        methods: {
            updateSelected(order) {
              return this.test = order;
            },

            total(item) {
                item = (item / 100);
                return item.toLocaleString('en-uk', { style: 'currency', currency: 'GBP' });
            },
            
            filterOrders() {
                switch (this.filter) {
                    case 'all':
                        this.newList = this.orders;
                        break;
                    case 'pending':
                        this.newList = this.orders.filter(order => order.status.id == 1);
                        break;
                    default:
                return console.log('unknown');
                }
            }, 

            updatetest() {
                this.newList = this.orders;
                console.log(hello);
            }
        },

        watch: {
            filter(newvar) {
                this.filterOrders(newvar)
            },

            

        },

        computed: {
            

                       

           
        }
    }
</script>