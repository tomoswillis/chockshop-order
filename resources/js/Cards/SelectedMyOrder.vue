<template>
  <div>
    <div class="bg-chock-dark w-full p-2 rounded-tr rounded-tl">
      <h1 class="font-chockshop inline">Order Id</h1>
      <p class="inline font-bold pl-2">{{ selected.id }}</p>
      <div class="text-white glass m-1 rounded p-5">
        <p class="text-xs">Date Ordered</p>
        <p v-text="selected.created_at.substring(0, 10)" class="font-bold" />
        <div class="my-2 w-full border border-gray-100 opacity-25" />
        <div class="flex justify-between flex-col md:flex-row">
          <div class="flex-1">
            <div
              class="flex items-center relative xl:w-1/2 justify-between mt-5"
            >
              <div
                class="w-full px-5 border h-px border-slate-light rounded absolute"
              />
              <div>
                <div class="blob" :class="{ red: cancelled }"></div>
              </div>
              <div>
                <div class="blob" :class="{ blue: pending }"></div>
              </div>
              <div>
                <div class="blob" :class="{ green: approved }"></div>
              </div>
              <div>
                <div class="blob"></div>
              </div>
            </div>
            <div
              class="flex items-center relative xl:w-1/2 justify-between mt-2 text-slate-light"
            >
              <p class="text-xs" :class="{ 'text-white': cancelled }">
                Cancelled
              </p>
              <p class="text-xs" :class="{ 'text-white': pending }">Pending</p>
              <p class="text-xs" :class="{ 'text-white': approved }">
                Approved
              </p>
              <p class="text-xs">Complete</p>
            </div>
          </div>
          <inertia-link
            method="Post"
            :href="route('order.updateStatus', [selected.id, 4])"
            as="button"
          >
            <div
              class="hover:bg-red-300 p-3 text-xs text-red-300 rounded hover:text-red-900 text-white"
              v-if="pending === true"
            >
              Cancel Order
            </div>
          </inertia-link>
        </div>
      </div>
    </div>
    <div class="p-3 border-l mb-10 glass" :class="{ 'opacity-50': cancelled }">
      <div
        v-for="item in selected.products"
        :key="item.id"
        class="flex flex-col md:flex-row items-center justify-around my-5 rounded-xl p-1"
      >
        <div class="w-24 rounded-2xl border m-5 border-slate-light">
          <img :src="item.product_hero_image" alt="" />
        </div>
        <div class="w-3/4 md:w-5/12 text-center md:text-left">
          <h4 class="font-bold text-white">{{ item.name }}</h4>
          <p class="text-xs text-slate-light">{{ item.description }}</p>
        </div>
        <div class="flex items-center mt-5 md:mt-0">
          <div
            class="py-1 px-2 text-white border rounded-md border-slate-light mr-5"
          >
            <p>{{ item.pivot.quantity }}</p>
          </div>
          <div>
            <p class="font-bold text-white">£{{ item.price / 100 }}</p>
          </div>
        </div>
      </div>
      <hr class="my-2" />
      <div class="flex w-full justify-between px-3">
        <div>Total</div>
        <div class="flex pr-3">
          <div class="">{{ totalItems(selected.products) }} items</div>
          <div class="ml-5 font-bold">{{ totalCost(selected.total) }}</div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      total: 0,
      selected: this.order[0],
      approved: false,
      pending: false,
      cancelled: false,
    };
  },
  mounted() {
    this.statusValue(this.selected.status.name);
  },

  props: {
    order: {},
  },

  methods: {
    totalItems(e) {
      const totalArray = e.map((x) => x.pivot.quantity);
      return (this.total = totalArray.reduce((a, b) => a + b, 0));
    },

    totalCost(item) {
      item = item / 100;
      return item.toLocaleString("en-uk", {
        style: "currency",
        currency: "GBP",
      });
    },

    statusValue: function (e) {
      switch (e) {
        case "Approved":
          this.approved = true;
          break;
        case "Pending":
          this.pending = true;
          break;
        case "Cancelled":
          this.cancelled = true;
          break;
        default:
          return (this.pending = true);
      }
    },
  },

  watch: {
    status(newval, old) {
      console.log(newval);
      this.statusValue(newval);
    },
  },

  computed: {
    statusClasses: function () {
      return {
        approved: this.approved,
        pending: this.pending,
      };
    },
  },
};
</script>



