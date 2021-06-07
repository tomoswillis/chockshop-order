<template>
  <div class="bg-chock">
    <div class="max-w-7xl mx-auto grid grid-cols-1 p-5 gap-5 md:grid-cols-2">
      <div class="mb-2 md:col-span-full">
        <h2 class="font-chockshop text-2xl uppercase text-center md:text-left">
          Stay In Touch!
        </h2>
        <svg
          class="mx-auto mt-5"
          width="114"
          height="12"
          viewBox="0 0 114 12"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <g clip-path="url(#clip0)">
            <path
              d="M113.33 11.17H73.47C72.717 11.3054 71.9408 11.148 71.3 10.73C67.2 7.29 63.06 3.9 59 0.51C59.3 -0.2 59.81 0.05 60.18 0.05C73.06 0 86 0.06 98.89 0C100.07 0 100.65 0.72 101.38 1.28C105.44 4.41 109.46 7.59 113.49 10.76L113.33 11.17Z"
              fill="#B1977B"
            />
            <path
              d="M0.33 0C13.4433 0 26.5767 0 39.73 0C40.86 0 41.37 0.74 42.08 1.28C45.78 4.1 49.4633 6.94 53.13 9.8C53.5659 10.0452 53.8942 10.4448 54.05 10.92C53.62 11.27 53.12 11.08 52.66 11.08C39.96 11.08 27.26 11.08 14.56 11.08C13.4702 11.1329 12.4001 10.7761 11.56 10.08C8.18 7.24 4.78333 4.4 1.37 1.56C0.92 1.19 0.46 0.84 0 0.48L0.33 0Z"
              fill="#1C1C1C"
            />
          </g>
          <defs>
            <clipPath id="clip0">
              <rect width="113.49" height="11.17" fill="white" />
            </clipPath>
          </defs>
        </svg>
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




