<template>
  <div>
    <contact-form />
    <div
      class="relative items-top justify-center bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0"
    >
      <div
        v-if="canLogin"
        class="hidden fixed top-0 right-0 px-6 py-4 sm:block"
      >
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
      <inertia-link
        href="/"
        class="fixed top-0 right-left px-8 py-2 bg-chock-dark rounded-br-xl w-32 z-30"
      >
        <img src="images/logo/chockShopLogoDefalutBrown.png" alt="" />
      </inertia-link>
    </div>
    <Header />
    <dual-image-section class="pt-20 relative" />
    <marketing-ops />
    <what-makes-chock-shop-different />
    <earnings-potential />
    <hero-CTA
      class="bg-slate py-24 homeHeroCta z-10"
      :buttonText="'View the package and support'"
      :message="'our support means you get off to the best start'"
      :img="'images/franchise/Greg.jpeg'"
    />
    <Footer />
  </div>
</template>

<script>
import Header from "@/Sections/Header";
import DualImageSection from "@/Sections/DualImageSection";
import MarketingOps from "@/Sections/MarketingOps";
import WhatMakesChockShopDifferent from "@/Sections/WhatMakesChockShopDifferent.vue";
import HeroCTA from "@/Elements/HeroCTA.vue";
import EarningsPotential from "@/Sections/EarningsPotential";
import ContactForm from "@/Cards/ContactForm.vue";
import Footer from "@/Sections/Footer";

export default {
  components: {
    Header,
    DualImageSection,
    MarketingOps,
    WhatMakesChockShopDifferent,
    HeroCTA,
    EarningsPotential,
    ContactForm,
    Footer,
  },

  props: {
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
  },
};
</script>
