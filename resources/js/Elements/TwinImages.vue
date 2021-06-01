<template>
  <div class="flex h-full">
    <div id="imageOne" class="bg-chock-dark w-1/2 mr-1 rounded-tl-3xl mb-16">
      <img class="object-cover h-full w-full rounded-tl-3xl" :src="imageOne" />
    </div>
    <div id="imageTwo" class="bg-chock-dark w-1/2 ml-1 rounded-br-3xl mt-16">
      <img class="object-cover h-full w-full rounded-br-3xl" :src="imageTwo" />
    </div>
  </div>
</template>

<script>
import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

export default {
  mounted() {
    gsap.registerPlugin(ScrollTrigger);
    gsap.fromTo(
      "#imageOne",
      {
        y: 100,
        opacity: 0,
      },
      {
        y: 0,
        opacity: 1,
        scrollTrigger: {
          trigger: "#imageOne",
          start: "-50px, bottom",
          end: "200px, center",
          scrub: true,
          addClass: { targets: "#imageOne", className: "active" },
          // markers: true,
          toggleActions: "none none none none",
        },
        duration: 1.4,
        ease: "power2.inOut",
      }
    );
    gsap.fromTo(
      "#imageTwo",
      {
        y: -100,
        opacity: 0,
      },
      {
        y: 0,
        opacity: 1,
        scrollTrigger: {
          trigger: "#imageOne",
          start: "-50px, bottom",
          end: "200px, center",
          scrub: true,
          // markers: true,
          toggleActions: "none none none none",
        },
        duration: 1.4,
        ease: "power2.inOut",
      }
    );
  },
  props: {
    imageOne: String,
    imageTwo: String,
  },
};
</script>

<style>
</style>