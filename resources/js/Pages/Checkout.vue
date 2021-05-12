<template>
    <app-layout>
         <div class="w-full  checkoutImg relative">
            <div class=" w-11/12 mx-auto place-content-center flex md:flex-col lg:flex-row glassClear p-24 min-h-screen" >
             <div v-if="!cart" class="w-2/3 self-center glass">
                <h1 class=" text-2xl text-white font-chockshop text-center my-8"> Your cart is empty </h1>
            </div>
                <div class=" w-2/3" v-if="cart">
                    <h3 class="text-white font-chockshop text-xl">Shopping Cart</h3>
                    <p class="text-white text-sm">You have {{cart.totalQty}} items in your cart</p>
                    
<hr class="mt-5 w-3/4">
                    <div class="mt-12">
                        <inertia-link :href="route('clear.cart')" method="post"  class="bg-chock align-center w-full rounded-xl font-bold py-2  px-5 text-chock-text text-sm  cursor-pointer border border-transpartent hover:border-chock hover:bg-chock-dark hover:text-chock">Clear Basket</inertia-link>
                    </div>
                    <div v-for="item in cart.items" :key="item.id"  class="flex items-center justify-around my-5 glass  rounded-xl p-1">
                        <div class="w-24 rounded-2xl border m-5 border-slate-light">
                            <img :src="item.item.product_hero_image" alt="">
                        </div>
                        <div class="w-5/12">
                            <h4 class="font-bold text-white">{{item.item.name}}</h4>
                            <p class="text-xs text-slate-light">{{item.item.description}}</p>
                            
                        </div>
                        <div class="py-1 px-2 text-white border rounded-md border-slate-light">
                            <p>{{item.qty}}</p>
                        </div>
                        <div>
                            <p class="font-bold text-white" v-text="total(item.item.price)"></p>
                        </div>
                        <inertia-link v-if="item.item.id" method="Post" :href="route('product.removeFromCart', item.item.id )" as="button" >
                            <div class="hover:bg-red-300 p-3 rounded hover:text-red-900 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                            </div>
                        </inertia-link>
                    </div>
                    
                </div>
                <div class="h-full bg-chock-dark rounded-xl w-1/3 p-2 ml-5 text-white">
                    <div class="flex flex-wrap -mx-2 mt-8">
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="first_name" class="leading-7 text-sm text-chock-text">First Name</label>
                                <input
                                    type="text"
                                    id="first_name"
                                    name="first_name"
                                    class="w-full bg-gray-100 rounded border border-gray-300 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                    v-model="customer.first_name"
                                    :disabled="paymentProcessing"
                                >
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="last_name" class="leading-7 text-sm text-chock-text">Last Name</label>
                                <input
                                    type="text"

                                    id="last_name"
                                    name="last_name"
                                    class="w-full bg-gray-100 rounded border border-gray-300 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                    v-model="customer.last_name"
                                    :disabled="paymentProcessing"
                                >
                            </div>
                        </div>
                    </div>
                    <div class=" ">
                            <div class="relative">
                                <label for="email" class="leading-7 text-sm text-chock-text">Email Address</label>
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    class="w-full bg-gray-100 rounded border border-gray-300 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                    v-model="customer.email"
                                    :disabled="paymentProcessing"
                                >
                            </div>
                        </div>
                    
                    <div class="flex flex-wrap -mx-2 mt-4">
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="card-element" class="leading-7 text-sm text-chock-text">Credit Card Info</label>
                                <div id="card-element"></div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full px-1 h-px bg-white rounded my-5 "></div>

                    
                    <div class="flex justify-between text-white text-sm"  v-if="cart">
                        <p>Total</p>
                        <p v-text="total(cart.totalPrice)" class="font-bold"></p>
                    </div> 
                    <div class="p-2 w-full">
                        <button
                            class="bg-chock align-center w-full rounded-xl font-bold py-2 text-chock-text cursor-pointer mt-1 border border-transpartent hover:border-chock hover:bg-chock-dark hover:text-chock "
                            @click="processPayment"
                            :disabled="paymentProcessing"
                            v-text="paymentProcessing ? 'Processing' : 'Pay Now'"
                        ></button>
                    </div>
                </div>
            
                
            </div>
               
    </div>

    </app-layout>
</template>

<script>
    import { loadStripe } from '@stripe/stripe-js';
    import AppLayout from '@/Layouts/AppLayout'
    import { Inertia } from '@inertiajs/inertia'
    export default {
        components: {
            AppLayout,
        },

        data() {
            return {
                stripe: {},
                cardElement: {},
                customer: {
                    first_name: '',
                    last_name: '',
                    email: this.$page.props.user.email,
                    address: '',
                    city: '',
                    state: '',
                    zip_code: ''
                },
                paymentProcessing: false
            }
        },

        props: {
            cart: {},
            stripe_key: String,
        },

        async mounted() {
            this.stripe = await loadStripe("pk_test_51HxJevHJuC8e8ZRStp3O54491bNJjRoqQs0CH1djjVO2RRmbRXXIOTIdxl7VUrVHUOV22echJoCRUEK3rbezU4IN00RU1zjr3Z");
            const elements = this.stripe.elements();
            this.cardElement = elements.create('card', {
                classes: {
                    base: 'bg-gray-100 rounded border border-gray-300 focus:border-indigo-500 text-base outline-none text-gray-700 p-3 leading-8 transition-colors duration-200 ease-in-out'
                }
            });
            this.cardElement.mount('#card-element');
        },
        methods: {
            cartLineTotal(item) {
                let amount = item.item.price * item.qty;
                amount = (amount / 100);
                return amount.toLocaleString('en-uk', { style: 'currency', currency: 'GBP' });
            },

            total(item)    {
                item = (item / 100);
                return item.toLocaleString('en-uk', { style: 'currency', currency: 'GBP' });
            },

            

            async processPayment() {
                this.paymentProcessing = true;
                const {paymentMethod, error} = await this.stripe.createPaymentMethod(
                    'card', this.cardElement, {
                        billing_details: {
                            name: this.customer.first_name + ' ' + this.customer.last_name,
                            email: this.customer.email,
                            address: {
                                line1: this.customer.address,
                                city: this.customer.city,
                                state: this.customer.state,
                                postal_code: this.customer.zip_code
                            }
                        }
                    }
                );
                if (error) {
                    this.paymentProcessing = false;
                    console.error(error);
                } else {
                    console.log(paymentMethod);
                    this.customer.payment_method_id = paymentMethod.id;
                    this.customer.amount = this.$page.props.cart.totalPrice;
                    this.customer.cart = JSON.stringify(this.$page.props.cart.items);
                    Inertia.post('purchase', this.customer);  
                    this.paymentProcessing = false;
                }
            }
        },
        computed: {
            idlog(id) {
                console.log(id);
            },
        }
    }
</script>