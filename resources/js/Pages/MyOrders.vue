<template>
  <app-layout>
    <div
      class="flex flex-col md:flex-row pt-24 max-w-7xl mx-auto md:px-4 sm:px-6 lg:px-8 checkoutImg"
    >
      <div class="md:w-1/3 flex flex-row md:flex-col overflow-auto">
        <single-order v-for="order in orders" key="order.id" :order="order" />
      </div>
      <div class="md:w-2/3 text-white mt-5" v-if="selected">
        <selectedOrder :order="selected" />
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import SingleOrder from "@/Cards/SingleMyOrder";
import SelectedOrder from "@/Cards/SelectedMyOrder";

export default {
  components: {
    AppLayout,
    SingleOrder,
    SelectedOrder,
  },
  props: {
    orders: null,
    selected: null,
  },

  data() {
    return {};
  },

  methods: {},

  watch: {},

  computed: {},
};
</script>