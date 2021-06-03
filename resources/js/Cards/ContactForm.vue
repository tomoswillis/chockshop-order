<template>
  <transition name="contact">
    <div
      id="contactBox"
      class="fixed bottom-0 w-screen h-screen z-50 p-5 flex items-end md:items-center lg:justify-center contactBox"
    >
      <div
        class="bg-blur-chock w-full rounded-xl px-5 pb-5 pt-16 relative xl:w-1/3"
      >
        <i @click="contactLeave"
          ><img
            src="images/close.svg"
            alt=""
            class="absolute right-2 top-2 p-2 m-3 cursor-pointer hover:bg-red-300 rounded transition-all"
        /></i>
        <h2 class="text-white font-chockshop text-center text-3xl">
          Contact Us!
        </h2>
        <chevron class="my-5" />
        <div class="w-full bg-slate rounded-xl text-white">
          <div class="p-5 h-full">
            <form @submit.prevent="submit">
              <div class="md:flex">
                <div class="md:w-1/2 md:pr-2">
                  <label class="text-sm" for="name">Your Name</label>
                  <input
                    id="name"
                    class="block w-full rounded bg-slate-input border border-transparent text-white p-2 mb-5 input-contact input-user"
                    v-model="form.name"
                  />
                  <label class="text-sm" for="phone">Phone</label>
                  <input
                    id="phone"
                    class="block w-full rounded bg-slate-input border border-transparent text-white p-2 mb-5 input-contact input-phone"
                    v-model="form.phone"
                  />
                  <label class="text-sm" for="email">Email</label>
                  <input
                    id="email"
                    class="block w-full rounded bg-slate-input border border-transparent text-white p-2 mb-5 input-contact input-email"
                    v-model="form.email"
                  />
                </div>
                <div class="md:pl-2 md:w-1/2">
                  <label class="text-sm" for="message">Message</label>
                  <textarea
                    v-model="form.message"
                    class="w-full text-white input-contact h-1/2 rounded mb-5"
                  />
                </div>
              </div>

              <chock-shop-button class="md:w-1/2 md:mx-auto" type="submit"
                >Send</chock-shop-button
              >
            </form>
          </div>
        </div>
      </div>
    </div>
  </transition>
</template>

<script>
import ChockShopButton from "@/Elements/ChockShopButton.vue";
import Chevron from "@/Elements/Chevron.vue";
import { reactive } from "vue";
import { Inertia } from "@inertiajs/inertia";
import gsap from "gsap";

export default {
  components: {
    ChockShopButton,
    Chevron,
  },

  setup() {
    const form = reactive({
      name: null,
      phone: null,
      email: null,
      message: null,
    });

    function submit() {
      Inertia.post("/users", form);
    }

    return { form, submit };
  },
  mounted() {},
  computed: {
    contactLeave: function () {
      gsap.to(".contactBox", {
        translateY: -100,
        opacity: 0,
        duration: 0.5,
      });
      setTimeout(() => {
        document.getElementById("contactBox").classList.add("hidden");
      }, 1000);
    },
  },
};
</script>
<style scoped>
.contact-enter-active {
  transition: all 0.3s ease-out;
}

.contact-leave-active {
  transition: all 0.8s cubic-bezier(1, 0.5, 0.8, 1);
}

.contact-enter-from,
.contact-leave-to {
  transform: translateX(20px);
  opacity: 0;
}
</style>