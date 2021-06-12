<template>
  <div class="bg-slate">
    <div class="max-w-7xl mx-auto">
      <div class="px-5 py-10 lg:grid-cols-2 lg:grid gap-10 lg:items-center">
        <div class="col-start-1">
          <h2
            class="font-chockshop text-chock-dark text-3xl lg:text-5xl py-5 uppercase"
          >
            {{ marketOpsData.title }}
          </h2>
          <p
            class="text-white text-md leading-8 pt-6"
            v-for="text in marketOpsData.text"
            :key="text"
          >
            {{ text }}
          </p>
        </div>
        <div class="col-start-2 row-start-1 pt-24">
          <div class="relative lg:p-10">
            <img
              class="relative z-10 md:w-1/2 lg:w-full mx-auto"
              src="images/franchise/stall.png"
              alt=""
            />
            <div class="absolute w-1/4 z-0 mOps-heart-one">
              <img
                src="images/franchise/vectors/heart.svg"
                class="origin-bottom wobbleAnimation"
                alt=""
              />
            </div>

            <div class="absolute w-1/2 z-0 mOps-heart-two">
              <img
                src="images/franchise/vectors/heart.svg"
                class="origin-bottom wobbleAnimation"
                alt=""
              />
            </div>

            <div class="absolute w-1/3 z-0 mOps-heart-three">
              <img
                src="images/franchise/vectors/heart.svg"
                class="origin-bottom wobbleAnimation"
                alt=""
              />
            </div>
            <div class="absolute w-10 xl:w-16 z-0 mOps-flag-left">
              <img
                id="mOps-flags"
                src="images/franchise/vectors/flag-left.png"
                class="origin-bottom"
                alt=""
              />
            </div>
            <div class="absolute w-10 xl:w-16 z-0 mOps-flag-right">
              <img
                id="mOps-flags"
                src="images/franchise/vectors/flag-right.png"
                class="origin-bottom"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props: {
    marketOpsData: Object,
  },
};
</script>




