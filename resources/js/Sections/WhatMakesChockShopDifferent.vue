<template>
  <div class="bg-slate">
    <div class="max-w-7xl mx-auto text-white">
      <div class="p-5 grid grid-cols-1 md:grid-cols-2 md:gap-5 lg:grid-cols-3">
        <!-- <img
          src="images/franchise/bg-images/WMCSD-bg.png"
          class="row-start-one"
          alt=""
        /> -->
        <div class="col-start-1 md:col-end-3 lg:col-end-4 text-center">
          <h2 class="font-chockshop text-white text-4xl">
            WHAT MAKES CHOCK SHOP
            <span class="text-chock-dark">DIFFERENT?</span>
          </h2>
          <p class="text-md leading-8">
            If you’re considering taking on a franchise with Chock Shop, you
            need to know that your business will stand out from the competition.
            We can guarantee this thanks to Chock Shop’s strong, organically
            grown brand identity which delivers so much more to our customers in
            all the key areas.
          </p>
        </div>

        <div
          v-for="e in this.info"
          :key="e.id"
          class="w-full glass p-2 my-5 md:my-0"
        >
          <h2 class="font-chockshop text-xl">{{ e.title }}</h2>
          <p class="text-md leading-8 mt-2">{{ e.info }}</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      info: [
        {
          id: 1,
          title: "Our Staff",
          info:
            "Staff working at Chock Shop are energetic and pride themselves on their outstanding customer service. Whether it’s testing the products or recommending the best brownies for each buyer, Chock Shop staff have the experience and knowledge to give all the necessary guidance.",
        },
        {
          id: 2,
          title: "Our Selection",
          info:
            "Delivering the best products relies on continuous product development. We always strive to innovate and improve our selection of brownies, and regularly introduce new flavour combinations to keep our offering fresh.",
        },
        {
          id: 3,
          title: "Repeat Business",
          info:
            "Our products’ success is reflected in the number of very happy customers we have coming back to us time and again.",
        },
        {
          id: 4,
          title: "Our Products",
          info:
            "Each item has been meticulously created with the best ingredients to guarantee customers an exquisite finished product. Chock Shop brownies are handmade, hand-designed, hand-cut and baked ready for sale. We love what we do, and our goal is simple – to deliver the best brownies on the market. Unlike competitors, our brownies are always fresh and never frozen.",
        },
      ],
    };
  },
};
</script>

<style>
</style>