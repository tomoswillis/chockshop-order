<template>
  <div class="bg-slate">
    <div class="max-w-7xl mx-auto text-white">
      <div class="p-5 grid grid-cols-1 md:grid-cols-2 md:gap-5 lg:grid-cols-2">
        <!-- <img
          src="images/franchise/bg-images/WMCSD-bg.png"
          class="row-start-one"
          alt=""
        /> -->
        <div class="col-start-1 md:col-end-3 text-center">
          <h2 class="font-chockshop text-white text-4xl md:text-6xl">
            {{ gridData.title }}
            <span class="text-chock-dark">{{ gridData.titleColoured }}</span>
          </h2>
          <p class="text-md leading-8">
            {{ gridData.paragraph }}
          </p>
        </div>

        <div
          v-for="e in gridData.info"
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
  props: {
    gridData: Object,
  },
  data() {
    return {};
  },
};
</script>

<style>
</style>