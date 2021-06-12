<template>
  <div class="bg-slate">
    <div
      class="relative items-top justify-center bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0 z-50"
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
        class="fixed top-0 right-left px-8 py-2 bg-chock-dark rounded-br-xl w-32"
      >
        <img src="images/logo/chockShopLogoDefalutBrown.png" alt="" />
      </inertia-link>
    </div>

    <packages-header :boxInBoxData="pageContent.boxInBox" />
    <text-with-card-right
      class="relative"
      :textWithCardRightData="pageContent.textWithCardRight"
    />
    <dual-box-section :dualBoxSectionData="pageContent.dualBoxSection" />

    <div class="max-w-7xl md:mx-auto md:px-5 bg-slate text-white pt-24">
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
              class="bg-chock-dark w-1/2 mr-1 rounded-tl-3xl mb-16 h-96 overflow-hidden relative"
            >
              <img
                class="object-cover w-full h-full max-w-full imageone"
                src="images/franchise/images/people-left.png"
                alt=""
              />
            </div>
            <div
              class="bg-chock-dark w-1/2 ml-1 rounded-br-3xl mt-16 h-96 overflow-hidden relative"
            >
              <img
                class="object-cover w-full h-full max-w-full imagetwo"
                src="images/franchise/images/people-right.png"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>

      <div class="text-white relative px-5" id="package">
        <div class="package relative h-screen">
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
    </div>
  </div>
  <Footer />
</template>

<script>
import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import TextWithCardRight from "@/sections/TextWithCardRight";
import Footer from "@/Sections/Footer";
import PackagesHeader from "@/Sections/PackagesHeader";
import DualBoxSection from "@/Sections/DualBoxSection";
export default {
  components: { TextWithCardRight, Footer, PackagesHeader, DualBoxSection },

  data() {
    return {
      pageContent: {
        boxInBox: {
          title: "Your Role as a Franchisee",
          img: "",
          paragraphs: [
            "The success of your business will depend largely on how effectively and consistently you promote throughout your territory. All franchisees will be responsible for local marketing within their territories, with initial assistance coming from Head Office.",
            "Brand awareness drives will be essential, and it will be up to individuals to decide how much they invest in their chosen areas. ",
            "We will guide you through the complexities of local marketing. Don’t worry – we’ve been there and done it. ",
          ],
        },
        textWithCardRight: {
          title: "Our support means you get off to the best start",
          paragraphs: [
            "Our franchise package fee is comprehensive and currently available at just £10,000 (plus VAT). In addition, franchisees will need to fund a suitable vehicle and livery if they don’t have one. We estimate about £1,000 should cover costs for these.",
            "We will help you to promote the business when it is launched. The start-up investment for the business is listed at the back of the brochure and includes everything that you will need to purchase to establish your Chock Shop franchise.",
            "Finance for the business is potentially available from Franchise Units of the major clearing banks (subject to status and business plan).",
            "For a franchise business, the banks may be willing to lend up to 50% or 60% of the total capital required. As part of the recruitment process we will provide information for your business plan and this can be shared with the banks to raise finance if required.",
          ],
        },
        dualBoxSection: {
          boxLeft: {
            title: "A BUSINESS THAT WORKS",
            text:
              "While there can be no guarantees and hard work is needed, our business model can generate earnings with almost immediate effect. Franchisees who follow our prescribed systems stand to make a profit quickly. Chock Shop’s business format is simple and straightforward, and can be managed by almost anyone who has the right training (provided by us). We operate in local regions, meaning franchisees can build up a customer base with ease. ",
          },
          boxOne: {
            title: "WHAT DO I PAY THE FRANCHISOR? ",
            text:
              "Chock Shop franchisees buy their brownies and other resales supplies from the franchisor or its nominated suppliers. This is the only way to ensure the brownies are served to a consistently high quality to guarantee the best tasting experience. Details of the products’ cost and selling price can be provided after an initial meeting, but an attractive margin can be generated for the franchisee. ",
          },
        },
      },
    };
  },

  mounted() {
    gsap.registerPlugin(ScrollTrigger);

    gsap.from(".line-2", {
      scrollTrigger: {
        trigger: ".package",
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
      );

    const myST = ScrollTrigger.create({
      animation: tl,
      id: "st",
      trigger: ".package",
      scrub: true,
      pin: true,
      start: "top top",
      end: "+=1000%",
    });
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
.imageone {
  top: 0;
  right: 0;
  width: 125%;
  height: 125%;
}

.imagetwo {
  bottom: 0;
  left: 0;
  width: 125%;
  height: 125%;
}
</style>