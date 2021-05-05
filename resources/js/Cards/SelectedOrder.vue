<template>
<div>
    
<h1 class="font-chockshop text-xl text-center">{{data.user.name}}</h1>
            <div class="px-6 py-4 mx-auto flex flex-col items-center">
              <status :data="data.status.name"/>
            </div>
            <p class="text-center text-slate-light">{{data.transaction_id}}</p>
            <div class="flex justify-between text-sm text-slate-light mt-5">
                <p>Products</p>
                <p>Quantity</p>
            </div>
            <div v-for="product in data.products" :key="product.id">
                <div class="flex justify-between w-full my-2">
                    <h3>{{product.name}}</h3>
                    <p>{{product.pivot.quantity}}</p>
                </div>
            </div>
            <hr>

            <div>
                <div class="flex justify-between my-5">
                    <h1 class="">Total</h1>
                    <p class="font-bold">{{total(data.total)}}</p>
                </div>
                
            </div>

            <div class="flex justify-around">
                <div>
                    <button class="w-36 px-3 py-1 mr-2 rounded bg-chock text-chock-text">
                        Edit
                    </button>
                     <inertia-link preserve-scroll :href="route('order.approve', data.id )" method="post" @click='$emit("update")'>
                        <button class="w-36 px-3 py-1 ml-2 rounded bg-green-100 text-green-800" v-if="data.status.id == 1">
                            Approve
                        </button>
                     </inertia-link>
                </div>

            </div>
</div>
</template>

<script>
import Status from '@/Elements/Status'
export default {
    components: {
        Status,
    },

    data () {
        return {
            
        }
    },

    props: {
        data: null,
    },

    methods: {
        total(item) {
                item = (item / 100);
                return item.toLocaleString('en-uk', { style: 'currency', currency: 'GBP' });
            },
    }
}
</script>



