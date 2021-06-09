<template>
  <div>
    <div class="text-white m-5 p-5 glass text-center w-52">
      <h1 class="font-chockshop inline">Order Id</h1>
      <p class="inline font-bold">{{ order.id }}</p>
      <p class="text-slate-light mt-1">
        {{ order.created_at.substring(0, 10) }}
      </p>
      <div class="m-2 w-full border opacity-25" />
      <div class="flex justify-between mt-2 font-bold text-sm">
        <div class="inline">{{ totalItems(order.products) }} items</div>
        <p class="inline text-right">{{ totalCost(order.total) }}</p>
      </div>

      <inertia-link
        preserve-scroll
        :href="route('myorders.show', order.id)"
        class=""
      >
        <button
          class="mt-2 bg-chock align-center w-full rounded text-xs font-bold py-2 text-chock-text cursor-pointer border border-transpartent hover:border-chock hover:bg-chock-dark hover:text-chock relative"
        >
          View Order
        </button>
      </inertia-link>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      total: 0,
    };
  },

  props: {
    order: {},
  },

  methods: {
    totalCost(item) {
      item = item / 100;
      return item.toLocaleString("en-uk", {
        style: "currency",
        currency: "GBP",
      });
    },
    totalItems(e) {
      const totalArray = e.map((x) => x.pivot.quantity);
      return (this.total = totalArray.reduce((a, b) => a + b, 0));
    },
  },

  computed: {},
};
</script>



