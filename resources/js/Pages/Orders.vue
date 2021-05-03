<template>
    <app-layout>
    <div class="w-full p-5 flex min-h-screen">
        <div class="glass w-5/12 py-6">
        <button @click="filterPending">filter</button>
            <single-order 
                v-for="order in orders" 
                :key="order.id" 
                :data="order" 
                v-on:update="updateSelected($event)"
                class="mx-2 rounded border-b border-t border-transparent hover:border-chock cursor-pointer "/>
        </div>
        
        <div class="w-5/12 text-white p-5 mx-auto rounded place-self-center" v-if="this.selected != null">
            <!-- <selected-order :data="this.selcted"/> -->
            <h1 class="font-chockshop text-xl text-center">{{this.selected.user.name}}</h1>
            <div class="px-6 py-4 mx-auto flex flex-col items-center">
              <status :data="this.selected.status.name"/>
            </div>
            <p class="text-center text-slate-light">{{this.selected.transaction_id}}</p>
            <div class="flex justify-between text-sm text-slate-light mt-5">
                <p>Products</p>
                <p>Quantity</p>
            </div>
            <div v-for="product in this.selected.products" :key="product.id">
                <div class="flex justify-between w-full my-2">
                    <h3>{{product.name}}</h3>
                    <p>{{product.pivot.quantity}}</p>
                </div>
            </div>
            <hr>

            <div>
                <div class="flex justify-between my-5">
                    <h1 class="">Total</h1>
                    <p class="font-bold">{{total(this.selected.total)}}</p>
                </div>
                
            </div>

            <div class="flex justify-around">
                <div>
                    <button class="w-36 px-3 py-1 mr-2 rounded bg-chock text-chock-text">
                        Edit
                    </button>
                     <inertia-link preserve-scroll :href="route('order.approve', this.selected.id )" method="post">
                        <button class="w-36 px-3 py-1 ml-2 rounded bg-green-100 text-green-800" v-if="this.selected.status.id == 1">
                            Approve
                        </button>
                     </inertia-link>
                </div>

            </div>
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
               selected: null,
               foo:null,
            }
        },

        methods: {
            updateSelected: function(emitted) {
                return this.selected = emitted;
            },

            total(item) {
                item = (item / 100);
                return item.toLocaleString('en-uk', { style: 'currency', currency: 'GBP' });
            },

            filterPending() {
              
                 const test = this.orders.filter(order => order.status.id == 1);
                 console.log(test);
               

            },
            
        },

        watch: {
            foo(newVal, old) {
                console.log(`'new val' . ${newVal}`);
                console.log(newVal);
                 console.log(`'old' . ${old}`);

            this.orders = newVal;
            }
        },
        computed: {
            
        }
    }
</script>