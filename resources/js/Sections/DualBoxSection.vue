<template>
  <div class="z-10 md:max-w-7xl md:mx-auto">
    <div class="">
      <div class="container" id="dualBoxSectionAni">
        <div class="box2 rounded-tr-xl" id="dualBoxSectionBox2">
          <img
            src="images/franchise/rolo-brownie.png"
            class="object-cover z-0 rounded-tr-xl h-full w-full"
            alt=""
          />
        </div>
        <div class="box1" id="dualBoxSectionBox1">
          <img
            src="images/franchise/raspberry-brownie.png"
            class="object-cover rounded-bl-xl z-0 h-full w-full"
            alt=""
          />
        </div>
        <div
          class="text2 bg-blur-chock-dark z-10 rounded-tr-xl p-2 lg:p-5 text-white"
          id="dualBoxSectionText2"
        >
          <h1 class="text-2xl font-chockshop uppercase">
            WHAT DO I PAY THE FRANCHISOR?
          </h1>
          <p class="text-md leading-8">
            Chock Shop franchisees buy their brownies and other resales supplies
            from the franchisor or its nominated suppliers. This is the only way
            to ensure the brownies are served to a consistently high quality to
            guarantee the best tasting experience. Details of the products’ cost
            and selling price can be provided after an initial meeting, but an
            attractive margin can be generated for the franchisee.
          </p>
        </div>
        <div
          class="text1 bg-blur-chock-light z-10 rounded-bl-xl text-black p-2 lg:p-5"
          id="dualBoxSectionText1"
        >
          <h1 class="text-2xl font-chockshop uppercase">
            A BUSINESS THAT WORKS
          </h1>
          <p class="text-md leading-8">
            While there can be no guarantees and hard work is needed, our
            business model can generate earnings with almost immediate effect.
            Franchisees who follow our prescribed systems stand to make a profit
            quickly. Chock Shop’s business format is simple and straightforward,
            and can be managed by almost anyone who has the right training
            (provided by us). We operate in local regions, meaning franchisees
            can build up a customer base with ease.
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

export default {
  components: {},
  mounted() {
    gsap.registerPlugin(ScrollTrigger);
    gsap.fromTo(
      "#dualBoxSectionBox1",
      {
        x: -100,
        opacity: 0,
      },
      {
        x: 0,
        opacity: 1,
        scrollTrigger: "#dualBoxSectionText2",
        duration: 1.5,
        ease: "bounce.out",
      }
    );
    gsap.fromTo(
      "#dualBoxSectionBox2",
      {
        x: 100,
        opacity: 0,
      },
      {
        x: 0,
        opacity: 1,
        scrollTrigger: "#dualBoxSectionText2",
        duration: 1.5,
        ease: "bounce.out",
      }
    );
    gsap.fromTo(
      "#dualBoxSectionText1",
      {
        y: -100,
        opacity: 0,
      },
      {
        y: 0,
        opacity: 1,
        scrollTrigger: "#dualBoxSectionText2",
        duration: 1.5,
        delay: 1.2,
        ease: "back.out(1.7)",
      }
    );
    gsap.fromTo(
      "#dualBoxSectionText2",
      {
        y: 100,
        opacity: 0,
      },
      {
        y: 0,
        opacity: 1,
        scrollTrigger: "#dualBoxSectionText2",
        duration: 1.5,
        delay: 1.2,
        ease: "back.out(1.7)",
      }
    );
  },
};
</script>

<style scoped>
.container {
  display: grid;
  grid-template-columns: 0.1fr 0.1fr 1.1fr 1.2fr 0.1fr 0.1fr;
  grid-template-rows: 1fr 1fr 1fr 1fr;
  gap: 0px 0px;
  grid-auto-flow: row;
}

.box1 {
  grid-area: 1 / 1 / 3 / 6;
}

.box2 {
  grid-area: 3 / 2 / 5 / 7;
}

.text1 {
  grid-area: 1 / 3 / 3 / 6;
}

.text2 {
  grid-area: 3 / 2 / 5 / 5;
}
@media (min-width: 768px) {
  .container {
    display: grid;
    grid-template-columns: 0.5fr 1.5fr 1.1fr 1.2fr 1.1fr 0.6fr;
    grid-template-rows: 1fr 1fr 1fr 1fr;
    gap: 0px 0px;
    grid-auto-flow: row;
  }

  .box1 {
    grid-area: 1 / 1 / 3 / 6;
  }

  .box2 {
    grid-area: 3 / 2 / 5 / 7;
  }

  .text1 {
    grid-area: 1 / 3 / 3 / 6;
  }

  .text2 {
    grid-area: 3 / 2 / 5 / 5;
  }
}
@media (min-width: 1024px) {
  .container {
    display: grid;
    grid-template-columns: 0.4fr 1.6fr 1.6fr 0.4fr;
    grid-template-rows: 0.5fr 1.5fr 1.5fr 0.5fr;
    gap: 0px 0px;
    grid-auto-flow: row;
  }

  .box2 {
    grid-area: 2 / 3 / 5 / 5;
  }

  .box1 {
    grid-area: 1 / 1 / 4 / 3;
  }

  .text2 {
    grid-area: 3 / 3 / 5 / 4;
  }

  .text1 {
    grid-area: 1 / 2 / 3 / 3;
  }
}
</style>