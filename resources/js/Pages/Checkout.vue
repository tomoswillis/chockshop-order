<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Shopping Basket
            </h2>
        </template>
        <!-- This example requires Tailwind CSS v2.0+ -->
         <div class="w-full">
        <div class="lg:w-2/3 w-full mx-auto mt-8 overflow-auto">
            <table class="table-auto w-full text-left whitespace-no-wrap">
                <thead>
                <tr>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200 rounded-tl rounded-bl">Item</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200">Quantity</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200">Price</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200">Actions</th>
                </tr>
                </thead>
                <div v-if="!cart">

                </div>
                <tbody v-if="cart">
                    <tr v-for="item in cart.items" :key="item.id">
                        <td class="p-4" v-text="item.item.name"></td>
                        <td class="p-4" v-text="item.qty"></td>
                        <td class="p-4" v-text="cartLineTotal(item)"></td>
                        <td class="w-10 text-right">
                            <button
                                class="flex ml-auto text-sm text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded"
                                @click="$store.commit('removeFromCart', index)"
                            >Remove</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-4 font-bold">Total Amount</td>
                        <td class="p-4 font-bold" v-text="cart.totalQty"></td>
                        <td class="p-4 font-bold" v-text="total(cart.totalPrice)"></td>
                        <td class="w-10 text-right">
                            <inertia-link :href="route('clear.cart')" method="post"  class="flex ml-auto text-sm text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none centre hover:bg-indigo-600 rounded">Clear</inertia-link>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="lg:w-2/3 w-full mx-auto mt-8">
            <div class="flex flex-wrap -mx-2 mt-8">
                <div class="p-2 w-1/3">
                    <div class="relative">
                        <label for="first_name" class="leading-7 text-sm text-gray-600">First Name</label>
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
                <div class="p-2 w-1/3">
                    <div class="relative">
                        <label for="last_name" class="leading-7 text-sm text-gray-600">Last Name</label>
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
                <div class="p-2 w-1/3">
                    <div class="relative">
                        <label for="email" class="leading-7 text-sm text-gray-600">Email Address</label>
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
            </div>
            <div class="flex flex-wrap -mx-2 mt-4">
                <div class="p-2 w-1/3">
                    <div class="relative">
                        <label for="address" class="leading-7 text-sm text-gray-600">Street Address</label>
                        <input
                            type="text"
                            id="address"
                            name="address"
                            class="w-full bg-gray-100 rounded border border-gray-300 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            v-model="customer.address"
                            :disabled="paymentProcessing"
                        >
                    </div>
                </div>
                <div class="p-2 w-1/3">
                    <div class="relative">
                        <label for="city" class="leading-7 text-sm text-gray-600">City</label>
                        <input
                            type="text"
                            id="city"
                            name="city"
                            class="w-full bg-gray-100 rounded border border-gray-300 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            v-model="customer.city"
                            :disabled="paymentProcessing"
                        >
                    </div>
                </div>
                <div class="p-2 w-1/6">
                    <div class="relative">
                        <label for="state" class="leading-7 text-sm text-gray-600">State</label>
                        <input
                            type="email"
                            id="state"
                            name="state"
                            class="w-full bg-gray-100 rounded border border-gray-300 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            v-model="customer.state"
                            :disabled="paymentProcessing"
                        >
                    </div>
                </div>
                <div class="p-2 w-1/6">
                    <div class="relative">
                        <label for="zip_code" class="leading-7 text-sm text-gray-600">Zip Code</label>
                        <input
                            type="email"
                            id="zip_code"
                            name="zip_code"
                            class="w-full bg-gray-100 rounded border border-gray-300 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            v-model="customer.zip_code"
                            :disabled="paymentProcessing"
                        >
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap -mx-2 mt-4">
                <div class="p-2 w-full">
                    <div class="relative">
                        <label for="card-element" class="leading-7 text-sm text-gray-600">Credit Card Info</label>
                        <div id="card-element"></div>
                    </div>
                </div>
            </div>
            <div class="p-2 w-full">
                <button
                    class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg"
                    @click="processPayment"
                    :disabled="paymentProcessing"
                    v-text="paymentProcessing ? 'Processing' : 'Pay Now'"
                ></button>
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
                    email: '',
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
    }
</script>