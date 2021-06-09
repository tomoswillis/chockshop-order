<template>
  <div class="bg-slate">
    <div class="max-w-7xl mx-auto bgCreamnew">
      <div
        class="px-5 py-10 lg:grid-cols-2 lg:grid gap-10 lg:items-center relative"
      >
        <div class="row-start-two ld:row-start-1 col-start-1">
          <h2
            class="font-chockshop text-chock-dark text-3xl lg:text-5xl py-5 uppercase"
          >
            {{ pageInfo.title }}
          </h2>
          <p
            v-for="content in pageInfo.body"
            :key="content"
            class="text-white text-md leading-8 mb-3"
          >
            {{ content }}
          </p>
        </div>
        <div class="col-start-2 row-start-1 pt-12">
          <single-image :img="pageInfo.img" />
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import SingleImage from "@/elements/SingleImage";
export default {
  components: { SingleImage },
  setup() {},
  data() {
    return {
      pageInfo: {
        title: "Our support means you get off to the best start",
        body: {
          paraOne: `Our franchise package fee is comprehensive and currently available at just £10,000 (plus VAT). In addition, franchisees will need to fund a suitable vehicle and livery if they don’t have one. We estimate about £1,000 should cover costs for these.`,
          paraTwo: `We will help you to promote the business when it is launched. The start-up investment for the business is listed at the back of the brochure and includes everything that you will need to purchase to establish your Chock Shop franchise.`,
          paraThree: `Finance for the business is potentially available from Franchise Units of the major clearing banks (subject to status and business plan).`,
          paraFour: `For a franchise business, the banks may be willing to lend up to 50% or 60% of the total capital required. As part of the recruitment process we will provide information for your business plan and this can be shared with the banks to raise finance if required.`,
        },
        img: "images/franchise/brownie-box.jpg",
      },
    };
  },
};
</script>

<style scoped>
.bgCreamnew::before {
  content: "";
  background-color: #f4ebd3;
  position: absolute;
  top: 0%;
  bottom: 84%;
  right: 0;
  left: 0%;
  overflow: hidden;
}
</style>


