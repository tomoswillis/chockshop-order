<template>
  <div class="bg-slate">
    <div class="max-w-7xl mx-auto px-5">
      <h2 class="font-chockshop text-white text-3xl lg:text-5xl py-5 uppercase">
        {{ earningsPotentialData.title }}
      </h2>

      <p class="text-white text-md leading-8 lg:w-2/3">
        {{ earningsPotentialData.paragraph }}
      </p>
      <div
        class="flex flex-col md:flex-row md:justify-between md:items-baseline text-white"
        id="bowlImgList"
      >
        <div
          class="flex flex-col justify-center items-center"
          v-for="val in this.earnings"
          :key="val.id"
        >
          <img
            src="images/franchise/vectors/whisk-and-bowl.png"
            alt=""
            :class="`max-w-full w-${val.id}/6 ml-6`"
            :id="`amountBowl${val.id}`"
          />
          <h3 class="font-bold text-3xl mt-3" :id="`yearAmount${val.id}`">
            {{
              new Intl.NumberFormat("en-GB", {
                style: "currency",
                currency: "GBP",
              })
                .format(val.amount)
                .replace(/(\.|,)00$/g, "")
            }}
          </h3>
          <chevron class="my-2" />
          <h4 class="font-chockshop text-white" :id="`yearText${val.id}`">
            Year {{ val.year }}
          </h4>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Chevron from "@/Elements/Chevron";
import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

export default {
  components: {
    Chevron,
  },
  props: {
    earningsPotentialData: Object,
  },

  mounted() {
    gsap.registerPlugin(ScrollTrigger);
    this.earnings.forEach((e) => {
      gsap.fromTo(
        `#amountBowl${e.id}`,
        {
          y: -100,
          opacity: 0,
        },
        {
          y: 0,
          opacity: 1,
          scrollTrigger: "#bowlImgList",
          duration: e.id,
        }
      );
      gsap.fromTo(
        `#yearText${e.id}`,
        {
          x: -100,
          opacity: 0,
        },
        {
          x: 0,
          opacity: 1,
          scrollTrigger: "#bowlImgList",
          duration: 1,
          delay: e.id,
        }
      );
      gsap.fromTo(
        `#yearAmount${e.id}`,
        {
          x: 100,
          opacity: 0,
        },
        {
          x: 0,
          opacity: 1,
          scrollTrigger: "#bowlImgList",
          duration: 1,
          delay: e.id,
        }
      );
    });
  },

  data() {
    return {
      earnings: [
        {
          id: 1,
          amount: 30000,
          year: "One",
        },
        {
          id: 2,
          amount: 40000,
          year: "Two",
        },
        {
          id: 3,
          amount: 50000,
          year: "Three",
        },
      ],
    };
  },
};
</script>



