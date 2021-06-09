<template>
  <div v-if="liveProduct">
    <h1 class="font-chockshop text-xl text-center">
      {{ liveProduct.user.name }}
    </h1>
    <div class="px-6 py-4 mx-auto flex flex-col items-center">
      <status :status="liveProduct.status.name" />
    </div>
    <h2 class="font-bold text-xs text-chock">Order id: {{ liveProduct.id }}</h2>
    <p class="text-slate-light text-xs mb-3">
      Transaction id: {{ liveProduct.transaction_id }}
    </p>
    <div class="flex justify-between text-sm text-slate-light mt-5">
      <p>Products</p>
      <p>Quantity</p>
    </div>
    <div v-for="product in liveProduct.products" :key="product.id">
      <div class="flex justify-between w-full my-2">
        <h3>{{ product.name }}</h3>
        <p>{{ product.pivot.quantity }}</p>
      </div>
    </div>
    <hr />

    <div>
      <div class="flex justify-between my-5">
        <h1 class="">Total</h1>
        <p class="font-bold">{{ total(liveProduct.total) }}</p>
      </div>
    </div>

    <div class="flex justify-around">
      <div>
        <button class="w-36 px-3 py-1 mr-2 rounded bg-chock text-chock-text">
          Edit
        </button>
        <inertia-link
          preserve-scroll
          as="button"
          :href="route('order.updateStatus', [liveProduct.id, 2])"
          method="post"
          @click="$emit('update')"
        >
          <button
            class="w-36 px-3 py-1 ml-2 rounded bg-green-100 text-green-800"
            v-if="liveProduct.status.id == 1"
          >
            Approve
          </button>
        </inertia-link>
      </div>
    </div>
  </div>
</template>

<script>
import Status from "@/Elements/Status";
import { watch } from "@vue/runtime-core";
export default {
  components: {
    Status,
  },

  data() {
    return {
      liveProduct: null,
      status: this.product.status.name,
    };
  },

  mounted() {
    this.updateLiveProduct();
  },

  props: {
    product: null,
  },

  methods: {
    total(item) {
      item = item / 100;
      return item.toLocaleString("en-uk", {
        style: "currency",
        currency: "GBP",
      });
    },

    updateLiveProduct() {},
  },

  watch: {
    product(newval) {
      this.liveProduct = newval;
    },
  },
};
</script>



