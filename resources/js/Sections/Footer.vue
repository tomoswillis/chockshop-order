<template>
  <div class="bg-chock">
    <div class="max-w-7xl mx-auto grid grid-cols-1 p-5 gap-5 md:grid-cols-2">
      <div class="mb-5 md:col-span-full">
        <h2 class="font-chockshop text-2xl uppercase text-center md:text-left">
          Stay In Touch!
        </h2>
        <!-- <chevron /> -->
      </div>
      <div class="w-full">
        <h3 class="font-bold text-xl">We’ll keep you posted...</h3>
        <input
          type="text"
          class="my-2 border-b-2 border-chock-dark bg-transparent w-full border-t-0 border-l-0 border-r-0"
          name="Forename"
          value="Forename"
        />
        <input
          type="text"
          class="my-2 border-b-2 border-chock-dark bg-transparent w-full border-t-0 border-l-0 border-r-0"
          name="Lastname"
          value="Lastname"
        />
        <input
          type="email"
          class="my-2 border-b-2 border-chock-dark bg-transparent w-full border-t-0 border-l-0 border-r-0"
          name="Email"
          value="Email"
        />
      </div>
      <div class="">
        <h3 class="font-bold text-xl">Contact Us</h3>
        <div class="my-2">
          <h4 class="font-bold">All Enquiries</h4>
          <p class="text-chock-dark">info@chockshop.co.uk</p>
        </div>
        <div class="my-2">
          <h4 class="font-bold">Phone</h4>
          <p class="text-chock-dark">0187381840</p>
        </div>
        <div class="my-2">
          <h4 class="font-bold">Our Shop</h4>
          <p class="text-chock-dark">
            1 Cibi Walk, Frogmore Street,<br />
            Abergavenny, NP7 5AJ
          </p>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import Chevron from "@/Elements/Chevron";
export default {
  components: { Chevron },
  setup() {},
  data() {
    return {};
  },
};
</script>




