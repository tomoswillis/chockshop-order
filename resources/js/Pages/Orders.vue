<template>
  <app-layout>
    <div class="pt-24"></div>
    <div class="max-w-7xl mx-auto px-0 xl:px-6 lg:px-8">
      <h1 class="text-white font-chockshop text-4xl p-5 xl:p-0 uppercase">
        Chock Shop Orders
      </h1>
      <div class="w-full p-5">
        <h3 class="text-white text-sm">Filter By</h3>
        <div class="flex mt-3 xl:w-1/3 justify-around">
          <inertia-link method="Get" href="/orders" as="button">
            <span
              class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-chock text-chock-dark hover:bg-chock-dark hover:text-chock"
            >
              View All
            </span>
          </inertia-link>
          <inertia-link
            method="get"
            :href="route('orders.show', 2)"
            as="button"
          >
            <span class="approved hover:bg-green-500 hover:text-white">
              Approved
            </span>
          </inertia-link>
          <inertia-link
            method="get"
            :href="route('orders.show', 1)"
            as="button"
          >
            <span class="pending hover:bg-blue-500 hover:text-white">
              Pending
            </span>
          </inertia-link>
          <inertia-link
            method="get"
            :href="route('orders.show', 4)"
            as="button"
          >
            <span class="cancelled hover:bg-red-500 hover:text-white">
              Cancelled
            </span>
          </inertia-link>
        </div>
      </div>
      <hr class="my-5" />
      <!-- <select v-model="filter">
    <option value="all">All</option>
    <option value="pending">Pending</option>
</select>  -->
      <div class="w-full flex flex-col xl:flex-row min-h-screen relative">
        <div
          class="xl:glass w-full xl:w-5/12 py-6 flex flex-row xl:flex-col overflow-auto"
        >
          <single-order
            v-for="order in orders"
            :key="order.id"
            :data="order"
            v-on:update="updatetest()"
            @click="updateSelected(order)"
            class="mx-2 rounded border-b border-t border-transparent hover:border-chock cursor-pointer"
          />
        </div>

        <div
          class="xl:w-2/6 text-white p-5 mx-auto rounded xl:fixed inset-x-2/4 glass md:w-3/4 mx-1"
          v-if="this.selectedOrder != null"
        >
          <selected-order :product="this.selectedOrder" />
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import SingleOrder from "@/Cards/SingleOrder";
import SelectedOrder from "@/Cards/SelectedOrder";
import Status from "@/Elements/Status";

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
      selectedOrder: null,
      newList: this.orders,
      filter: "all",
    };
  },

  methods: {
    updateSelected(order) {
      return (this.selectedOrder = order);
    },

    total(item) {
      item = item / 100;
      return item.toLocaleString("en-uk", {
        style: "currency",
        currency: "GBP",
      });
    },

    filterOrders() {
      switch (this.filter) {
        case "all":
          this.newList = this.orders;
          break;
        case "pending":
          this.newList = this.orders.filter((order) => order.status.id == 1);
          break;
        default:
          return console.log("unknown");
      }
    },

    updatetest() {
      this.newList = this.orders;
      console.log(hello);
    },
  },

  watch: {
    filter(newvar) {
      this.filterOrders(newvar);
    },
  },

  computed: {},
};
</script>