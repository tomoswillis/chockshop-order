<template>
  <div class="grid-container-packages text-white bg-chock pb-5 pt-5 z-0">
    <div id="packageBG" class="bg bg-slate"></div>

    <div id="packageTitle" class="title z-10">
      <h1 class="text-4xl md:text-7xl font-chockshop uppercase pl-5 md:p-0">
        Your Role as a Franchisee
      </h1>
    </div>
    <div id="packageText" class="text z-10">
      <p class="text-md leading-8 my-2 p-5 md:p-0">
        The success of your business will depend largely on how effectively and
        consistently you promote throughout your territory. All franchisees will
        be responsible for local marketing within their territories, with
        initial assistance coming from Head Office.
        <br />
        <br />
        Brand awareness drives will be essential, and it will be up to
        individuals to decide how much they invest in their chosen areas.
        <br /><br />
        We will guide you through the complexities of local marketing. Don’t
        worry – we’ve been there and done it.
      </p>
    </div>
    <div
      id="packageImage"
      class="role-image w-full h-full bg-chock-dark rounded-bl-2xl z-0"
    >
      <img
        src="images/franchise/your-role.png"
        class="w-full h-full rounded-bl-xl object-cover filter-brightness-50"
        alt=""
      />
    </div>
  </div>
</template>

<script>
import chockShopButton from "@/Elements/ChockShopButton";
import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

export default {
  components: {
    chockShopButton,
  },
  mounted() {
    gsap.registerPlugin(ScrollTrigger);
    gsap.fromTo(
      "#packageBG",
      {
        scaleY: 0.2,
        x: -600,
        opacity: 0,
      },
      {
        scaleY: 1,
        x: 0,
        opacity: 1,
        scrollTrigger: "#packageBG",
        duration: 1,
      }
    );
    gsap.fromTo(
      "#packageText",
      {
        opacity: 0,
      },
      {
        x: 0,
        opacity: 1,
        scrollTrigger: "#packageBG",
        duration: 1,
        delay: 1,
      }
    );
    gsap.fromTo(
      "#packageTitle",
      {
        y: -100,
      },
      {
        y: 0,
        scrollTrigger: "#packageBG",
        duration: 1,
      }
    );
    gsap.fromTo(
      "#packageImage",
      {
        x: 600,
        opacity: 0,
      },
      {
        x: 0,
        opacity: 1,
        scrollTrigger: "#packageBG",
        duration: 1.2,
      }
    );
  },
};
</script>

<style scoped>
.grid-container-packages {
  display: grid;
  grid-template-columns: 0.1fr 1.4fr 3.3fr 0.1fr;
  grid-template-rows: 0.4fr 1.1fr 1fr 1fr;
  gap: 0px 0px;
}

.bg {
  grid-area: 1 / 2 / 6 / 4;
}

.role-image {
  grid-area: 2 / 3 / 5 / 5;
}

.title {
  grid-area: 3 / 2 / 4 / 4;
}

.text {
  grid-area: 5 / 2 / 6 / 4;
}

@media (min-width: 768px) {
  .grid-container-packages {
    grid-template-columns: 0.1fr 1.4fr 1fr 0.3fr 0.1fr;
    grid-template-rows: 0.4fr 1.1fr 1fr 1fr;
  }
  .bg {
    grid-area: 1 / 1 / 6 / 4;
  }
  .role-image {
    grid-area: 2 / 3 / 5 / 6;
  }
}
@media (min-width: 1024px) {
  .grid-container-packages {
    grid-template-columns: 0.1fr 1.4fr 1fr 0.3fr 0.1fr;
    grid-template-rows: 0.4fr 1.1fr 1fr 1fr 2fr;
  }
  .text {
    grid-area: 4 / 3 / 6 / 2;
  }
}

@media (min-width: 1024px) {
  .grid-container-packages {
    grid-template-columns: 0.1fr 1.4fr 1fr 0.3fr 0.1fr;
    grid-template-rows: 0.4fr 1.1fr 1fr 1fr 2fr;
  }

  .bg {
    grid-area: 1 / 1 / 6 / 4;
  }
  .title {
    grid-area: 3 / 2 / 4 / 4;
  }

  .text {
    grid-area: 4 / 3 / 6 / 2;
  }
  .role-image {
    grid-area: 2 / 3 / 5 / 6;
  }
}
</style>