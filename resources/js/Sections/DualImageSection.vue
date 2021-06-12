<template>
  <div class="bg-chock bgCreamAndBlack z-10">
    <div class="max-w-7xl mx-auto">
      <div class="pb-12 px-5 lg:grid-cols-2 lg:grid gap-10 lg:items-center">
        <div class="h-96 lg:h-full">
          <twin-images
            class="h-full"
            :imageOne="dualImageSectionData.imageOne"
            :imageTwo="dualImageSectionData.imageTwo"
          />
        </div>

        <div class="">
          <h2
            id="title"
            class="font-chockshop text-chock-dark text-3xl lg:text-5xl my-5 uppercase"
          >
            {{ dualImageSectionData.title }}
          </h2>
          <p
            class="text-slate text-md leading-8 pt-6"
            v-for="text in dualImageSectionData.paragraphs"
            :key="text.id"
          >
            {{ text }}
          </p>

          <p
            class="text-white text-md leading-8 pt-6"
            v-for="text in dualImageSectionData.paragraphWhite"
            :key="text.id"
          >
            {{ text }}
          </p>

          <chock-shop-button
            :link="dualImageSectionData.button.buttonLink"
            class="mt-4 md:w-1/3"
          >
            {{ dualImageSectionData.button.buttonText }}
          </chock-shop-button>
        </div>
      </div>
    </div>
    <chevron class="py-5 md:p-0" />
  </div>
</template>

<script>
import TwinImages from "@/Elements/TwinImages";
import ChockShopButton from "@/Elements/ChockShopButton";
import Chevron from "@/Elements/Chevron";
import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

export default {
  components: {
    TwinImages,
    ChockShopButton,
    Chevron,
  },
  props: {
    dualImageSectionData: Object,
  },
  mounted() {
    gsap.registerPlugin(ScrollTrigger);
    gsap.fromTo(
      "#title",
      {
        y: -100,
        opacity: 0,
      },
      {
        y: 0,
        opacity: 1,
        scrollTrigger: "#title",
        duration: 1.5,
      }
    );
  },
};
</script>

