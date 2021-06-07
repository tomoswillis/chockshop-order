<template>
  <div class="bg-slate">
    <div
      class="relative items-top justify-center bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0 z-20"
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
    </div>
    <!-- <div class="max-w-7xl mx-auto px-5 bg-chock text-white pt-5"> -->
    <div class="grid-container text-white bg-chock pb-5 pt-5">
      <div class="bg bg-slate"></div>

      <div class="title z-10">
        <h1 class="text-4xl md:text-7xl font-chockshop uppercase pl-5 md:p-0">
          Your Role as a Franchisee
        </h1>
      </div>
      <div class="text">
        <p class="text-md leading-8 my-2 p-5 md:p-0">
          The success of your business will depend largely on how effectively
          and consistently you promote throughout your territory. All
          franchisees will be responsible for local marketing within their
          territories, with initial assistance coming from Head Office.
          <br />
          <br />
          Brand awareness drives will be essential, and it will be up to
          individuals to decide how much they invest in their chosen areas.
          <br /><br />
          We will guide you through the complexities of local marketing. Don’t
          worry – we’ve been there and done it.
        </p>
      </div>
      <div class="role-image w-full h-full bg-chock-dark rounded-bl-2xl z-0">
        <img
          src="images/franchise/your-role.png"
          class="w-full h-full rounded-bl-xl object-cover filter-brightness-50"
          alt=""
        />
      </div>
    </div>
    <!-- </div> -->

    <!-- <div class="max-w-7xl mx-auto md:px-5 bg-chock text-white md:pt-5 p-5">
      <div class="w-full h-1/3 bg-slate p-5">
        <h1 class="text-4xl font-chockshop uppercase">
          Your Role as a Franchisee
        </h1>
        <p class="text-md leading-8 my-2">
          The success of your business will depend largely on how effectively
          and consistently you promote throughout your territory. All
          franchisees will be responsible for local marketing within their
          territories, with initial assistance coming from Head Office.
        </p>

        <p class="text-md leading-8 my-2">
          Brand awareness drives will be essential, and it will be up to
          individuals to decide how much they invest in their chosen areas.
        </p>

        <p class="text-md leading-8 my-2">
          We will guide you through the complexities of local marketing. Don’t
          worry – we’ve been there and done it.
        </p>
      </div>
    </div> -->
    <div class="max-w-7xl mx-auto px-5 bg-slate text-white pt-5">
      <div class="md:flex">
        <div class="md:w-1/2">
          <h2 class="text-4xl font-chockshop uppercase mb-5">
            Chock shop <br />Franchise Package
          </h2>
          <p class="text-md leading-8 lg:pr-2">
            Our franchise package offers all the training and support you need
            to help you get your business off the ground, including:
          </p>
        </div>
        <div class="md:w-1/2">
          <div class="flex h-full">
            <div
              class="bg-chock-dark w-1/2 mr-1 rounded-tl-3xl mb-16 h-96"
            ></div>
            <div
              class="bg-chock-dark w-1/2 ml-1 rounded-br-3xl mt-16 h-96"
            ></div>
          </div>
        </div>
      </div>

      <div class="text-white relative" id="purple">
        <div class="purple relative h-screen">
          <span
            class="line line-2 w-full h-2 min-w-screen block bg-chock-dark relative rounded-full"
          ></span>
          <div class="absolute w-full top text-center" id="pack1">
            <img
              src="images/chevron-down.svg"
              class="mx-auto downArrow-animate"
              alt=""
            />
          </div>
          <div class="absolute w-full top-1/4 text-center" id="pack1">
            <h2 class="font-chockshop leading-snug z-10 text-4xl">
              Full rights to use the Chock Shop brand within the franchise
              territory
            </h2>
            <img
              src="images/logo/chockShopLogoDefalutBrown.png"
              class="w-1/2 mx-auto pt-10"
              alt=""
            />
          </div>
          <div class="absolute w-full top-1/4 text-center" id="pack2">
            <h2 class="font-chockshop leading-snug z-10 text-4xl">
              A comprehensive support package to help you into business
            </h2>
          </div>
          <div class="absolute w-full top-1/4 text-center" id="pack3">
            <h2 class="font-chockshop leading-snug z-10 text-4xl">
              Full training covering all areas of the business
            </h2>
            <img
              src="images/franchise/Greg.png"
              class="md:w-1/2 pt-10 mx-auto"
              alt=""
            />
          </div>
          <div class="absolute w-full top-1/4 text-center" id="pack4">
            <h2 class="font-chockshop leading-snug z-10 text-4xl">
              Initial supply of equipment and marketing materials
            </h2>
            <img
              src="images/franchise/fran-stall-wwo.png"
              class="md:w-1/2 pt-10 mx-auto"
              alt=""
            />
          </div>
          <div class="absolute w-full top-1/4 text-center" id="pack5">
            <h2 class="font-chockshop leading-snug z-10 text-4xl">
              On-site support to help you get the business launched in your area
            </h2>
            <img
              src="images/franchise/location-wwo.png"
              class="md:w-1/2 pt-10 mx-auto"
              alt=""
            />
          </div>
          <div class="absolute w-full top-1/4 text-center" id="pack6">
            <h2 class="font-chockshop leading-snug z-10 text-4xl">
              Fully exclusive franchise territory
            </h2>
            <img
              src="images/franchise/marked-location-wwo.png"
              class="md:w-1/2 pt-10 mx-auto"
              alt=""
            />
          </div>
          <div class="absolute w-full top-1/4 text-center" id="pack7">
            <h2 class="font-chockshop leading-snug z-10 text-4xl">
              Copy of our comprehensive franchise operations manual
            </h2>
            <img
              src="images/franchise/manual-mockup.png"
              class="md:w-1/2 pt-10 mx-auto"
              alt=""
            />
          </div>
          <div class="absolute w-full top-1/4 text-center" id="pack8">
            <h2 class="font-extrabold leading-snug text-6xl text-chock mb-5">
              5
              <span class="font-chockshop text-chock font-normal">Years</span>
            </h2>
            <h2 class="font-chockshop z-10 text-4xl leading-snug">
              A five-year franchise agreement with a right to renew at the end
              of the term.
            </h2>
          </div>
        </div>
      </div>
      <text-with-card-right />
    </div>
  </div>
</template>

<script>
import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import TextWithCardRight from "@/sections/TextWithCardRight";
export default {
  components: { TextWithCardRight },

  mounted() {
    gsap.registerPlugin(ScrollTrigger);

    gsap.from(".line-2", {
      scrollTrigger: {
        trigger: ".purple",
        scrub: true,
        pin: true,
        start: "top top",
        end: "+=1000%",
      },
      scaleX: 0,
      transformOrigin: "left center",
      ease: "none",
    });

    var tl = gsap.timeline();

    tl.fromTo("#pack1", { opacity: 1 }, { opacity: 0, duration: 6 + 10 })
      .fromTo(
        "#pack2",
        { opacity: 0, x: -50 },
        { opacity: 1, x: 0, duration: 6 + 10 }
      )
      .fromTo(
        "#pack2",
        { opacity: 1, x: 0 },
        { opacity: 0, y: 100, duration: 8 + 10 }
      )
      .fromTo(
        "#pack3",
        { opacity: 0, x: -50 },
        { opacity: 1, x: 0, duration: 8 + 10 }
      )
      .fromTo(
        "#pack3",
        { opacity: 1, x: 0 },
        { opacity: 0, y: 100, duration: 12 + 10 }
      )
      .fromTo(
        "#pack4",
        { opacity: 0, x: -50 },
        { opacity: 1, x: 0, duration: 12 + 10 }
      )
      .fromTo(
        "#pack4",
        { opacity: 1, x: 0 },
        { opacity: 0, y: 100, duration: 14 + 10 }
      )
      .fromTo(
        "#pack5",
        { opacity: 0, x: -50 },
        { opacity: 1, x: 0, duration: 14 + 10 }
      )
      .fromTo(
        "#pack5",
        { opacity: 1, x: 0 },
        { opacity: 0, y: 100, duration: 16 + 10 }
      )
      .fromTo(
        "#pack6",
        { opacity: 0, x: -50 },
        { opacity: 1, x: 0, duration: 16 + 10 }
      )
      .fromTo(
        "#pack6",
        { opacity: 1, x: 0 },
        { opacity: 0, y: 100, duration: 18 + 10 }
      )
      .fromTo(
        "#pack7",
        { opacity: 0, x: -50 },
        { opacity: 1, x: 0, duration: 18 + 10 }
      )
      .fromTo(
        "#pack7",
        { opacity: 1, x: 0 },
        { opacity: 0, y: 100, duration: 20 + 10 }
      )
      .fromTo(
        "#pack8",
        { opacity: 0, x: -50 },
        { opacity: 1, x: 0, duration: 20 + 10 }
      )
      .fromTo(
        "#pack8",
        { opacity: 1, x: 0 },
        { opacity: 0, y: 500, duration: 22 + 10 }
      );

    const myST = ScrollTrigger.create({
      animation: tl,
      id: "st",
      trigger: ".purple",
      scrub: true,
      pin: true,
      start: "top top",
      end: "+=1000%",
    });
    // gsap.fromTo(
    //   `#line`,
    //   {
    //     scaleY: 0,
    //   },
    //   {
    //     scaleY: 1,

    //     scrollTrigger: {
    //       trigger: "#foo",
    //       start: "top, bottom",
    //       end: "100%, 25%",
    //       scrub: true,
    //       markers: true,
    //       toggleActions: "none none none none",
    //     },
    //     duration: 1.4,
    //     ease: "power2.inOut",
    //   }
    // );
  },

  props: {
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
  },
};
</script>

<style scoped>
.grid-container {
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
  .grid-container {
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
  .grid-container {
    grid-template-columns: 0.1fr 1.4fr 1fr 0.3fr 0.1fr;
    grid-template-rows: 0.4fr 1.1fr 1fr 1fr 2fr;
  }
  .text {
    grid-area: 4 / 3 / 6 / 2;
  }
}

@media (min-width: 1024px) {
  .grid-container {
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