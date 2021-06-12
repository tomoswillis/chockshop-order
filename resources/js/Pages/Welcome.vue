<template>
  <div>
    <!-- <contact-form /> -->
    <div
      class="relative items-top justify-center bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0"
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
        class="fixed top-0 right-left px-8 py-2 bg-chock-dark rounded-br-xl w-32 z-30"
      >
        <img src="images/logo/chockShopLogoDefalutBrown.png" alt="" />
      </inertia-link>
    </div>
    <Header :headerData="welcomePageData.header" />
    <dual-image-section
      class="pt-20 relative"
      :dualImageSectionData="welcomePageData.dualImageSection"
    />
    <marketing-ops :marketOpsData="welcomePageData.marketOps" />
    <grid :gridData="welcomePageData.grid" />
    <earnings-potential
      :earningsPotentialData="welcomePageData.earningsPotential"
    />
    <hero-CTA
      class="bg-slate py-24 homeHeroCta z-10"
      :heroCtaData="welcomePageData.heroCta"
    />
    <Footer />
  </div>
</template>

<script>
import Header from "@/Sections/Header";
import DualImageSection from "@/Sections/DualImageSection";
import MarketingOps from "@/Sections/MarketingOps";
import Grid from "@/Sections/Grid.vue";
import HeroCTA from "@/Elements/HeroCTA.vue";
import EarningsPotential from "@/Sections/EarningsPotential";
import ContactForm from "@/Cards/ContactForm.vue";
import Footer from "@/Sections/Footer";

export default {
  components: {
    Header,
    DualImageSection,
    MarketingOps,
    Grid,
    HeroCTA,
    EarningsPotential,
    ContactForm,
    Footer,
  },

  props: {
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
  },
  data() {
    return {
      welcomePageData: {
        header: {
          mainImg: "images/franchise/brownieHeaderImage.png",
          title: "Interested in a tasty franchise opportunity?",
          text:
            "Chock Shop is an artisan producer of chocolate brownies. Using Belgian chocolate and many other finest ingredients, we produce the UK’s most sumptuous selection of chocolate brownies. ",
          extraPannel: {
            mainTitle: "New Franchises",
            secondTitle: "Franchises Available",
            text:
              "Enquire today and start your journey toward becoming a successful entrepreneur with Chock Shop. Can’t see your area listed below? If you are interested in setting up a franchise in your area, please get in touch ",
          },
          button: {
            buttonText: "Contact Us",
            buttonLink: "",
          },
        },
        dualImageSection: {
          title: "Who are chock shop?",
          imageOne: `images/franchise/rolo-brownie.png`,
          imageTwo: `images/franchise/raspberry-brownie.png`,
          paragraphs: [
            "We specialise in creating delicious taste experiences through our range of extravagant artisan brownies.",
            "Crunchy peanut butter, sticky toffee and rocky road are some of the firm flavour favourites among our younger fans.",
            "Grown-ups can sink into the bliss of our Belgian Callebaut white chocolate brownies, or go for a cheekier pick-me-up with brownies laced with butter cream liquors, such as Baileys, or Welsh whiskey.",
          ],
          paragraphWhite: [
            "With thousands of satisfied customers, and after sustained success trading at festivals, shows and other live events, we are expanding the business through a franchise model.",
          ],
          button: {
            buttonText: "Chock Shop Site",
            buttonLink: "http://www.chockshop.co.uk",
          },
        },
        marketOps: {
          title: `MARKET OPPORTUNITIES`,
          text: [
            "The guaranteed audience at food festivals, markets and other live events offers the perfect opportunity to share the love for Chock Shop brownies. ",
            "As more traditional dessert foods have become replaced by American-style cookies, cakes and muffins, our market has grown. The UK bakery sector was valued at £3.6bn in 2015, with UK consumers buying over 1.5 billion sweet baked items, such as cakes, cookies, brownies, doughnuts, etc. This represented a 5.5% increase over the previous year. ",
            "Our growing appetite for baked goodies is reflected in increasing content in the media, through shows such as The Great British Bake Off helping to raise the profile of high quality baked goods. ",
          ],
        },
        grid: {
          title: "WHAT MAKES CHOCK SHOP",
          titleColoured: "DIFFERENT?",
          paragraph:
            "If you’re considering taking on a franchise with Chock Shop, you need to know that your business will stand out from the competition. We can guarantee this thanks to Chock Shop’s strong, organically grown brand identity which delivers so much more to our customers in all the key areas.",
          info: [
            {
              id: 1,
              title: "Our Staff",
              info:
                "Staff working at Chock Shop are energetic and pride themselves on their outstanding customer service. Whether it’s testing the products or recommending the best brownies for each buyer, Chock Shop staff have the experience and knowledge to give all the necessary guidance.",
            },
            {
              id: 2,
              title: "Our Selection",
              info:
                "Delivering the best products relies on continuous product development. We always strive to innovate and improve our selection of brownies, and regularly introduce new flavour combinations to keep our offering fresh.",
            },
            {
              id: 3,
              title: "Repeat Business",
              info:
                "Our products’ success is reflected in the number of very happy customers we have coming back to us time and again.",
            },
            {
              id: 4,
              title: "Our Products",
              info:
                "Each item has been meticulously created with the best ingredients to guarantee customers an exquisite finished product. Chock Shop brownies are handmade, hand-designed, hand-cut and baked ready for sale. We love what we do, and our goal is simple – to deliver the best brownies on the market. Unlike competitors, our brownies are always fresh and never frozen.",
            },
          ],
        },
        earningsPotential: {
          title: "Earnings Potential",
          paragraph:
            "Our experience shows that potential income generated by the Chock Shop franchise represents an excellent return. When we meet we will have the opportunity to discuss sales and finances in far greater detail. However, as a guide we estimate an operating profit (before tax) to total over.",
        },
        heroCta: {
          buttonText: "View the package and support",
          message: "our support means you get off to the best start",
          img: "images/franchise/Greg.jpeg",
        },
      },
    };
  },
};
</script>
