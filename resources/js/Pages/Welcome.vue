<template>
    <div class="relative  items-top justify-center bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <inertia-link v-if="$page.props.user" href="/dashboard" class="text-sm text-white underline">
                Dashboard
            </inertia-link>

            <template v-else>
                <inertia-link :href="route('login')" class="text-sm text-white underline">
                    Log in
                </inertia-link>

                <inertia-link v-if="canRegister" :href="route('register')" class="ml-4 text-sm text-white underline">
                    Register
                </inertia-link>
            </template>
        </div>
    </div>

    <div class="w-screen bg-chock">
        <div class="grid-container ">
            <div class="Blobs lg:hidden xl:block bg-slate"></div>
            <div class="Slate bg-slate"></div>
            <div class="title text-white font-chockshop uppercase z-10  text-xs md:text-6xl lg:text-7xl xl:text-6xl flex items-center"> Interested in a tasty franchise opportunity?</div>
            <div class="text text-white text-light z-10 relative">
                <p class="mb-4">Chock Shop is an artisan producer of chocolate brownies. Using Belgian chocolate and many other finest ingredients, we produce the UK’s most sumptuous selection of chocolate brownies.</p>
                <div class=" py-2 px-4 border-2 rounded-lg w-1/3 border-red-300 uppercase font-bold text-xs text-red-300 text-center">
                    Contact Us
                </div>
                <img src="images/franchise/vectors/youKnowYouWantTo.svg" class="absolute left-1/4 md:hidden lg:block" alt="">
            </div>
            <div class="image  bg-chock overflow-hidden">
                <img class=" w-full image  rounded-bl-3xl shadow-chock-header filter-brightness-50 lg:filter-brightness-100" src="images/franchise/brownieHeaderImage.png" alt="">
            </div>
            <div class="Fran text-white md:rounded-tr-3xl md:rounded-br-3xl lg:rounded-tr-none lg:rounded-br-none lg:rounded-tl-3xl lg:rounded-bl-3xl py-5 pl-5 pr-7">
                <p class="uppercase text-xs font-bold">Franchises Available</p>
                <h2 class="font-chockshop text-3xl mb-2">New Franchises</h2>
                <p class="text-sm">Enquire today and start your journey toward becoming a successful entrepreneur with Chock Shop. Can’t see your area listed below? If you are interested in setting up a franchise in your area, please get in touch</p>
            </div>
        </div>
    </div>
</template>

<style scoped>
    .bg-gray-100 {
        background-color: #f7fafc;
        background-color: rgba(247, 250, 252, var(--tw-bg-opacity));
    }

    .border-gray-200 {
        border-color: #edf2f7;
        border-color: rgba(237, 242, 247, var(--tw-border-opacity));
    }

    .text-gray-400 {
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--tw-text-opacity));
    }

    .text-gray-500 {
        color: #a0aec0;
        color: rgba(160, 174, 192, var(--tw-text-opacity));
    }

    .text-gray-600 {
        color: #718096;
        color: rgba(113, 128, 150, var(--tw-text-opacity));
    }

    .text-gray-700 {
        color: #4a5568;
        color: rgba(74, 85, 104, var(--tw-text-opacity));
    }

    .text-gray-900 {
        color: #1a202c;
        color: rgba(26, 32, 44, var(--tw-text-opacity));
    }

  
    
   

    @media (prefers-color-scheme: dark) {
        .dark\:bg-gray-800 {
            background-color: #2d3748;
            background-color: rgba(45, 55, 72, var(--tw-bg-opacity));
        }

        .dark\:bg-gray-900 {
            background-color: #1a202c;
            background-color: rgba(26, 32, 44, var(--tw-bg-opacity));
        }

        .dark\:border-gray-700 {
            border-color: #4a5568;
            border-color: rgba(74, 85, 104, var(--tw-border-opacity));
        }

        .dark\:text-white {
            color: #fff;
            color: rgba(255, 255, 255, var(--tw-text-opacity));
        }

        .dark\:text-gray-400 {
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--tw-text-opacity));
        }
    }
</style>

<script>
    export default {
        props: {
            canLogin: Boolean,
            canRegister: Boolean,
            laravelVersion: String,
            phpVersion: String,
        }
    }
</script>
