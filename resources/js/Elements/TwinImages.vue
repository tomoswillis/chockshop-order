<template>
  <div class="flex h-full">
    <div class="bg-chock-dark w-1/2 mr-1 rounded-tl-3xl mb-16">
      <img class="object-cover h-full w-full rounded-tl-3xl" :src="imageOne" />
    </div>
    <div class="bg-chock-dark w-1/2 ml-1 rounded-br-3xl mt-16">
      <img class="object-cover h-full w-full rounded-br-3xl" :src="imageTwo" />
    </div>
  </div>
</template>

<script>
export default {
  props: {
    imageOne: String,
    imageTwo: String,
  },
};
</script>

<style>
</style>