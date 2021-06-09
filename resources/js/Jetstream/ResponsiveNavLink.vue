<template>
  <div>
    <button :class="classes" class="w-full text-left" v-if="as == 'button'">
      <slot></slot>
    </button>

    <inertia-link :href="href" :class="classes" v-else>
      <slot></slot>
    </inertia-link>
  </div>
</template>

<script>
export default {
  props: ["active", "href", "as"],

  computed: {
    classes() {
      return this.active
        ? "block pl-3 pr-4 py-2 border-l-4 border-chock-dark text-base font-medium text-grey-200 bg-chock focus:outline-none focus:text-indigo-800 focus:bg-chock focus:border-grey-200 transition"
        : "block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-white hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition";
    },
  },
};
</script>
