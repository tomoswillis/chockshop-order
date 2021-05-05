<template>
    <div class="mx-12 my-16 relative">
        <img :src="item.product_bg_image" 
            border='0' :alt='item.name' 
            class="glass-bg  absolute"/>
    
        <div class="glass p-2 w-52 mx-5 mt-12 relative">
            <div class="absolute -inset-y-32 -inset-x-7 w-64 pimage">
                <img :src="item.product_hero_image" border='0' :alt='item.name' class=" pimage"/>
            </div>
            <div class=" h-full">
                <div class="h-14"></div>
                <div> 
                    <img :src="item.product_title_image" alt="" class="w-3/4" >
                    <p class="text-xs mt-3">{{item.description}} </p>
                </div>    
                <div class="flex justify-between items-center mt-2 ">
                    <div>
                        <p>£{{item.price/100}}</p>
                    </div>
                    <div class="relative">
                        <div class="flex">
                            <button @click="decrement()"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="8" y1="12" x2="16" y2="12"></line></svg></button>
                            <input type="text" :value="quantity" >
                            <button @click="increment()"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg></button>
                        </div>
                    </div>
                </div>
                <inertia-link preserve-scroll :href="route('product.addToCart', item.id )" method="post" class="">
                    <button class="addToBasket cursor-pointer relative ">Add To Basket</button>
                </inertia-link>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data () {
        return {
            quantity: 1
        }
    },

    props: {
        item: {},
    },

    methods: {
        increment () {
            this.quantity++
        },
        decrement () {
            if(this.quantity === 1) {
                alert('Negative quantity not allowed')
            } else {
                this.quantity--
            }
        }
    }
}
</script>

<style scoped>


.pimage{
     user-drag: none; 
    user-select: none;
    -moz-user-select: none;
    -webkit-user-drag: none;
    -webkit-user-select: none;
    -ms-user-select: none;
    
}

.glass-bg{
  top: 10px;
  left: -10px;
}

h2 {
  color: white;
  font-family: rumba-extra,sans-serif;
  font-weight: 400;
  font-style: normal;
  letter-spacing: 0.09em;
}

p{
  color: white;
  font-family: 'Poppins', sans-serif;
  font-weight: 400;
  letter-spacing: 0.05em;
  
}
 
input {
    border: 0;
    background: none;
    width: 2.5rem;
    text-align: center;
    padding: .5rem;
    margin: 0 .5rem ;
    color:white;
    
  }
  
button {
    background: none;
    color: #d3c2a8;
    cursor: pointer;
    border-radius: 100%;
  }

.addToBasket{
  background-color:#f5ecd4;
  width:100%;
  color: #b2977b;
  font-family: 'Poppins', sans-serif;
  font-weight: 500;
  letter-spacing: 0.05em;
  font-size: .8rem;
  text-align: center;
  padding: .5rem;
  border-radius: .5rem;
}
</style>


