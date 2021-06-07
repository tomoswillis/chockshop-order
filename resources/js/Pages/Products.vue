<template>
  <app-layout>
    <div class="prodBg min-h-66">
      <img
        src="images/products/header-brownie.png"
        class="absolute -top-0 -right-0 max-h-66 select-none"
        alt=""
      />
      <div class="text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-52">
          <div class="w-2/5">
            <h1 class="font-chockshop text-2xl w-2/3">
              Order what you need, when you need it
            </h1>
            <p class="mt-2">
              Can't find what you're looking for? call us, or for non urgent
              queries you can contact us.
            </p>
            <button
              class="bg-chock align-center w-4/12 rounded text-xs font-bold py-2 text-chock-text cursor-pointer border border-transpartent hover:border-chock hover:bg-chock-dark hover:text-chock mt-5"
            >
              Contact Us
            </button>
          </div>
        </div>
      </div>
    </div>

    <div
      class="flex flex-wrap max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative min-h-screen"
    >
      <div v-for="product in product" :key="product.id">
        <product :item="product" />
      </div>
    </div>

    <div
      class="w-56 py-3 bg-green-500 rouned flex items-center justify-center rounded fixed z-50 top-28 -right-56 transition-all duration-300 delay-75 shadow"
      :class="{ cartActive: isActive }"
    >
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="15"
        height="15"
        viewBox="0 0 24 24"
        fill="none"
        stroke="white"
        stroke-width="2"
        stroke-linecap="round"
        stroke-linejoin="round"
        class="feather feather-shopping-cart"
      >
        <circle cx="9" cy="21" r="1"></circle>
        <circle cx="20" cy="21" r="1"></circle>
        <path
          d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"
        ></path>
      </svg>

      <p class="text-xs text-white ml-5 font-bold">Added to basket</p>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import Product from "@/Cards/Product";

export default {
  components: {
    AppLayout,
    Product,
  },

  data() {
    return {
      // cartTotal: 0,
      isActive: false,
    };
  },

  mounted() {
    // this.update(this.cart.totalQty);
    //    this.currentCartTotal(this.cart.cartTotal);
  },

  props: {
    product: Array,
    cart: null,
  },
  methods: {
    addedToBasket: function () {
      this.isActive = true;
      console.log("here");
      setTimeout(() => this.false(), 2000);
    },

    false: function () {
      this.isActive = false;
    },

    currentCartTotal(e) {
      console.log(e);
      this.cartTotal = e;
    },

    update: function (e) {
      this.cartTotal = e;
      this.addedToBasket();
    },
  },

  watch: {
    cartTotal(update, old) {
      console.log(update);
      if (update > old) {
        this.update(update);
      }
    },
  },

  computed: {},
};
</script>

