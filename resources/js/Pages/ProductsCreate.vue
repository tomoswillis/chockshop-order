<template>
  <div class="pt-12"></div>

  <div class="py-12 bg-slate min-h-screen">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <h1 class="font-chockshop text-3xl lg:w-2/3 uppercase text-chock pl-5">
        Add Products to the store!
      </h1>
      <form
        v-bind="$attrs"
        @submit.prevent="submit"
        class="glassClear flex flex-col justify-center p-10 m-5 rounded-xl md:grid md:grid-cols-2 md:gap-4 md:items-end"
      >
        <!-- NAME -->
        <div class="">
          <label class="block text-sm text-white" for="name"
            >Product Name
          </label>
          <div class="text-red-300" v-if="errors.name">{{ errors.name }}</div>
          <input
            class="rounded border border-transparent"
            id="name"
            v-model="form.name"
          />
        </div>
        <!-- SLUG -->
        <div class="">
          <label class="block text-sm text-white" for="slug">Slug</label>
          <div class="text-red-300" v-if="errors.slug">{{ errors.slug }}</div>
          <input
            class="rounded border border-transparent"
            id="slug"
            v-model="form.slug"
          />
        </div>
        <!-- BG IMAGE -->
        <div class="">
          <label class="block text-sm text-white" for="product_bg_image"
            >Background Image</label
          >
          <div class="text-red-300" v-if="errors.product_bg_image">
            {{ errors.product_bg_image }}
          </div>
          <input
            class="rounded border border-transparent"
            id="product_bg_image"
            v-model="form.product_bg_image"
          />
        </div>
        <!-- PRODUCT IMAGE -->
        <div class="">
          <label class="block text-sm text-white" for="product_hero_image"
            >Product Image</label
          >
          <div class="text-red-300" v-if="errors.product_hero_image">
            {{ errors.product_hero_image }}
          </div>
          <input
            class="rounded border border-transparent"
            id="product_hero_image"
            v-model="form.product_hero_image"
          />
        </div>
        <!-- TITLE IMAGE -->
        <div class="">
          <label class="block text-sm text-white" for="product_title_image"
            >Product Title Image</label
          >
          <div class="text-red-300" v-if="errors.product_title_image">
            {{ errors.product_title_image }}
          </div>
          <input
            class="rounded border border-transparent"
            id="product_title_image"
            v-model="form.product_title_image"
          />
        </div>

        <!-- PRICE -->
        <div class="">
          <label class="block text-sm text-white" for="price">Price</label>
          <div class="text-red-300" v-if="errors.price">
            {{ errors.price }}
          </div>
          <input
            class="rounded border border-transparent"
            id="price"
            v-model="form.price"
          />
        </div>
        <!-- DESCRIPTION -->
        <div class="col-span-full">
          <label class="block text-sm text-white" for="description"
            >Description</label
          >:
          <div class="text-red-300" v-if="errors.description">
            {{ errors.description }}
          </div>
          <textarea
            id="description"
            maxlength="140"
            rows="6"
            class="rounded border border-transparent"
            v-model="form.description"
          ></textarea>
        </div>
        <button
          type="submit"
          class="bg-chock align-center rounded text-xs font-bold py-2 text-chock-text cursor-pointer border border-transpartent hover:border-chock hover:bg-chock-dark hover:text-chock mt-5 md:h-10"
        >
          Add Product!
        </button>
      </form>
    </div>
  </div>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import { reactive } from "vue";
import { Inertia } from "@inertiajs/inertia";

export default {
  components: {
    AppLayout,
  },
  layout: AppLayout,
  props: {
    errors: Object,
  },
  setup() {
    const form = reactive({
      name: null,
      slug: null,
      product_bg_image: null,
      product_hero_image: null,
      product_title_image: null,
      description: null,
      price: null,
    });

    function submit() {
      Inertia.post("/products", form);
    }

    return { form, submit };
  },
};
</script>
<style scoped>
input,
textarea {
  width: 100%;
  background-color: #343434;
  outline: none;
  color: white;
  padding: 0.5rem;
  margin-bottom: 30px;
}
input:focus {
  background-position-x: -100px;
  padding-left: 5px;
  transition: all 0.2s cubic-bezier(0.55, 0.055, 0.675, 0.19);
  -webkit-appearance: none;
  outline: none;
  border: 1px solid rgba(255, 255, 255, 1);
}

input:active {
  -webkit-appearance: none;
  outline: none;
}

input:focus-visible {
  outline: none;
}
</style>