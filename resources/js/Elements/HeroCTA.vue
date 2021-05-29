<template>
  <div class="flex flex-col md:flex-row justify-center items-center relative">
    <div
      class="h-64 w-64 z-10 transform translate-y-14 md:translate-y-0 md:translate-x-10 lg:w-80 lg:h-80"
    >
      <img id="HeroCtaImage" class="" :src="img" alt="hero image" />
    </div>
    <div
      class="h-80 w-80 border-4 border-chock flex flex-col justify-center text-center p-5 lg:p-10 md:w-96 md:h-96 lg:w-104 lg:h-104 relative"
    >
      <img
        src="images/franchise/vectors/theImportantStuff.svg"
        class="absolute -bottom-1/4 left-20 w-64 lg:left-36"
        alt=""
      />
      <h2
        id="HeroCtaMessage"
        class="text-white font-chockshop text-2xl md:text-3xl uppercase"
        v-text="message"
      />
      <chock-shop-button class="mt-5 md:mx-10">
        {{ buttonText }}</chock-shop-button
      >
    </div>
  </div>
</template>
<script>
import ChockShopButton from "@/Elements/ChockShopButton";
import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

export default {
  components: {
    ChockShopButton,
  },

  mounted() {
    gsap.registerPlugin(ScrollTrigger);
    gsap.fromTo(
      "#HeroCtaMessage",
      {
        y: 100,
        opacity: 0,
      },
      {
        y: 0,
        opacity: 1,
        scrollTrigger: "#HeroCtaMessage",
        duration: 1,
      }
    );

    if (screen.width >= 768) {
      gsap.fromTo(
        "#HeroCtaImage",
        {
          x: 100,
          opacity: 0,
        },
        {
          x: 0,
          opacity: 1,
          scrollTrigger: "#HeroCtaImage",
          duration: 4,
          duration: 1.5,
          ease: "power2.inOut",
        }
      );
    } else {
      gsap.fromTo(
        "#HeroCtaImage",
        {
          y: -100,
          opacity: 0,
        },
        {
          y: 0,
          opacity: 1,
          scrollTrigger: "#HeroCtaImage",
          duration: 1.2,
        }
      );
    }
  },

  props: {
    link: String,
    buttonText: String,
    message: String,
    img: String,
  },
};
</script>
<style scoped>
.before-enter {
  opacity: 0;
  transform: translateY(100px);
  transition: all 2s ease-in-out;
}
.enter {
  opacity: 1;
  transform: translateY(0px);
}
</style>