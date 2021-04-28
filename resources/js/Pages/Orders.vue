<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Orders
            </h2>
        </template>
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="w-full">
        <div class="lg:w-2/3 w-full mx-auto mt-8 overflow-auto">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Product
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            
                        </th>
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr v-for="order in orders" :key="order.id">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
                                    {{order.user.name}}
                                    </div>
                                    <div class="text-sm text-gray-500">
                                    {{order.user.email}}
                                    </div>
                                </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div v-for="product in order.products" :key="product.id">  
                                    <div class="text-sm text-gray-900">{{ product.name }}</div>
                                    <div class="text-sm text-gray-500">{{product.pivot.quantity}}</div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                {{ order.status.name }}
                                </span>
                            </td>
                            
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <!-- <inertia-link :href="route('users.show', user.id)" class="text-indigo-600 hover:text-indigo-900">show</inertia-link> -->
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <!-- <inertia-link :href="route('users.edit', user.id)" class="text-indigo-600 hover:text-indigo-900">edit</inertia-link> -->
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <inertia-link method="Delete" :href="route('orders.destroy', order.id )"   class="text-indigo-600 hover:text-indigo-900">delete</inertia-link>
                                
                            </td>

                        </tr>

                        <!-- More people... -->
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
           
        </div>
    </div>

    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import { Inertia } from '@inertiajs/inertia'
    export default {
        components: {
            AppLayout,
        },

        data() {
            return {
               
            }
        },

        props: {
            orders:[],
        },

        methods: {
            
            
        },
    }
</script>