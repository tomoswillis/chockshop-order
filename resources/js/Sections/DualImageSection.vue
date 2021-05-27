<template>
  <div class="bg-chock bgCreamAndBlack z-10">
    <div class="max-w-7xl mx-auto">
      <div class="pb-12 px-5 lg:grid-cols-2 lg:grid gap-10 lg:items-center">
        <div>
          <twin-images
            class="h-1/2"
            :imageOne="'https://dummyimage.com/1000x360/fff/aaa'"
            :imageTwo="'https://dummyimage.com/640x360/fff/aaa'"
          />
        </div>

        <div class="">
          <h2
            class="font-chockshop text-chock-dark text-3xl lg:text-5xl my-5 uppercase"
          >
            Who are chock shop?
          </h2>
          <p class="text-slate text-md leading-8">
            We specialise in creating delicious taste experiences through our
            range of extravagant artisan brownies.<br /><br />
            Crunchy peanut butter, sticky toffee and rocky road are some of the
            firm flavour favourites among our younger fans.<br /><br />
            Grown-ups can sink into the bliss of our Belgian Callebaut white
            chocolate brownies, or go for a cheekier pick-me-up with brownies
            laced with butter cream liquors, such as Baileys, or Welsh
            whiskey.<br /><br />
            <span class="text-white">
              With thousands of satisfied customers, and after sustained success
              trading at festivals, shows and other live events, we are
              expanding the business through a franchise model.
            </span>
          </p>
          <chock-shop-button class="mt-4"> Chock Shop Site </chock-shop-button>
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

export default {
  components: {
    TwinImages,
    ChockShopButton,
    Chevron,
  },
};
</script>

