<template>
  <div
    class="relative items-top justify-center bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0"
  >
    <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
      <inertia-link
        v-if="$page.props.user"
        href="/dashboard"
        class="text-sm text-white underline"
      >
        Dashboard
      </inertia-link>

      <template v-else>
        <inertia-link
          :href="route('login')"
          class="text-sm text-white underline"
        >
          Log in
        </inertia-link>

        <inertia-link
          v-if="canRegister"
          :href="route('register')"
          class="ml-4 text-sm text-white underline"
        >
          Register
        </inertia-link>
      </template>
    </div>
  </div>
  <Header />
  <dual-image-section class="pt-20 relative" />
  <marketing-ops />

  <hero-CTA
    class="bg-slate py-24 homeHeroCta z-10"
    :buttonText="'View the package and support'"
    :message="'our support means you get off to the best start'"
    :img="'images/franchise/Greg.jpeg'"
  />
</template>

<script>
import Header from "@/Sections/Header";
import DualImageSection from "@/Sections/DualImageSection";
import MarketingOps from "@/Sections/MarketingOps";
import WhatMakesChockShopDifferent from "@/Sections/WhatMakesChockShopDifferent.vue";
import HeroCTA from "@/Elements/HeroCTA.vue";

export default {
  components: {
    Header,
    DualImageSection,
    MarketingOps,
    WhatMakesChockShopDifferent,
    HeroCTA,
  },
  props: {
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
  },
};
</script>
