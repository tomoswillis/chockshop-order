<template>
  <div class="bg-chock">
    <!-- <contact-form /> -->

    <div class="grid-container">
      <div class="Blobs hidden lg:block bg-slate"></div>
      <div class="Slate bg-black md:bg-slate z-0"></div>
      <div
        class="title text-white font-chockshop uppercase z-10 text-4xl md:text-6xl lg:text-7xl xl:text-6xl flex items-end"
      >
        <transition appear @before-enter="beforeTitle" @enter="titleEnter">
          <h1>Interested in a tasty franchise opportunity?</h1>
        </transition>
      </div>
      <div class="text text-white text-light z-10 relative">
        <p class="my-4 text-md">
          Chock Shop is an artisan producer of chocolate brownies. Using Belgian
          chocolate and many other finest ingredients, we produce the UK’s most
          sumptuous selection of chocolate brownies.
        </p>
        <chock-shop-button class="my-10 md:mb-8 md:w-1/3">
          Contact Us
        </chock-shop-button>
        <img
          src="images/franchise/vectors/youKnowYouWantTo.svg"
          class="absolute left-36 top-2/3 hidden lg:block"
          alt="You know you want to"
        />
      </div>
      <transition
        appear
        @before-enter="beforeBrownieImage"
        @enter="brownieImageEnter"
      >
        <div class="image bg-chock overflow-hidden">
          <div
            class="absolute bg-chock h-full transform translate-x-full w-full z-10"
          />
          <img
            class="w-full h-full image md:rounded-bl-3xl shadow-chock-header filter-brightness-25 md:filter-brightness-50 object-cover lg:filter-brightness-100"
            src="images/franchise/brownieHeaderImage.png"
            alt="Hero image"
          />
        </div>
      </transition>
      <div
        class="Fran text-white flex justify-center flex-col rounded-3xl md:rounded-tl-none md:rounded-bl-none rounded-tr-3xl rounded-br-3xl lg:rounded-tr-none lg:rounded-br-none lg:rounded-tl-3xl lg:rounded-bl-3xl py-5 pl-5 pr-7 z-30"
      >
        <p class="uppercase text-xs font-bold">Franchises Available</p>
        <h2 class="font-chockshop text-2xl md:text-3xl mb-2">New Franchises</h2>
        <p class="text-sm">
          Enquire today and start your journey toward becoming a successful
          entrepreneur with Chock Shop. Can’t see your area listed below? If you
          are interested in setting up a franchise in your area, please get in
          touch
        </p>
      </div>
    </div>
  </div>
</template>

<script>
import chockShopButton from "@/Elements/ChockShopButton";
import ContactForm from "@/Cards/ContactForm.vue";
import gsap from "gsap";

export default {
  components: {
    chockShopButton,
    ContactForm,
  },
  setup() {
    const beforeTitle = (el) => {
      el.style.transform = "translateY(60px)";
      el.style.opacity = 0;
    };

    const titleEnter = (el) => {
      gsap.to(el, {
        y: 0,
        opacity: 1,
        duration: 1.2,
      });
    };

    const beforeBrownieImage = (el) => {
      el.style.transform = "translateX(50px)";
      el.style.opacity = 0;
    };

    const brownieImageEnter = (el) => {
      gsap.to(el, {
        translateX: 0,
        opacity: 1,
        duration: 1.5,
      });
    };
    return {
      beforeTitle,
      titleEnter,
      beforeBrownieImage,
      brownieImageEnter,
    };
  },
  data() {
    return {
      showform: false,
    };
  },
};
</script>

