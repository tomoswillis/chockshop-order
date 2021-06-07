<template>
  <div
    class="py-2 px-4 border-2 rounded-lg border-red-300 uppercase font-bold text-xs text-red-300 text-center hover:bg-red-300 hover:text-white cursor-pointer"
  >
    <inertia-link id="button" :href="link">
      <slot></slot>
    </inertia-link>
  </div>
</template>

<script>
export default {
  methods: {},
  props: {
    link: {
      type: String,
      default: "/",
    },
  },
};
</script>

<style>
</style>