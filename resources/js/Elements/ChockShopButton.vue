<template>
  <div
    id="button"
    @mouseover="foobar"
    class="py-2 px-4 border-2 rounded-lg border-red-300 uppercase font-bold text-xs text-red-300 text-center hover:bg-red-300 hover:text-white cursor-pointer"
  >
    <slot></slot>
  </div>
</template>

<script>
export default {
  methods: {
    // foobar() {
    //   document.getElementById("button").classList.add("bg-black");
    // },
  },
};
</script>

<style>
</style>