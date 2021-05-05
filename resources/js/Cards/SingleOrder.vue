<template>
<div>
    <div  class="flex items-center justify-around  rounded-xl p-1 ">
        <div class=" rounded border m-5 border-slate-light text-white py-2 px-3">
        <p>{{data.id}}</p>
        </div>
        <div class="w-3/12">
            <h4 class="font-bold text-white">{{data.user.name}}</h4>
            <p class="text-xs text-slate-light">{{data.user.email}}</p>
            
        </div>
        <div class="px-6 py-4 whitespace-nowrap">
            <status :data="this.data.status.name"/>
        </div>
        <div>
            <p class="font-bold text-white w-2/12">{{total(this.data.total)}}</p>
        </div>
        <inertia-link method="Delete" :href="route('orders.destroy', data.id )" as="button" >
            <div class="hover:bg-red-300 p-3 rounded hover:text-red-900 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
            </div>
        </inertia-link>
    </div>
    <!-- <div class="mx-auto w-9/12 h-px border border-slate-light"></div> -->
</div>
</template>

<script>
import Status from '@/Elements/Status'

export default {

    components: {
            Status
        },

    data () {
        return {
            
        }
    },


    props: {
        data: {},
    },

    methods: {
        total(item)    {
                item = (item / 100);
                return item.toLocaleString('en-uk', { style: 'currency', currency: 'GBP' });
            },
    },

    computed: {

    }
}
</script>



