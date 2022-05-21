<template>
  <div class="py-[3rem]">
      <div class="px-12">
          <h1 class="text-2xl mb-3 font-signika font-extrabold">Just for you</h1>
          <div class="grid grid-cols-6 gap-3">
              <div v-for="item in cartItem" :key="item.id" class="flex animate-fade-in-down flex-col justify-between shadow-sm px-3 py-2 group group-hover:drop-shadow-lg bg-white">
                  <div class="relative">
                      <img :src="`http://localhost:3000/src/assets/cartimages/${item.thumbnail}`" class="" alt="">
                      <span v-if="item.new" class="absolute bg-orange-500 top-0 rounded-full text-white text-sm px-2 font-signika">new</span>
                  </div>
                  <div>
                      <router-link :to="{name: 'SingleProductView', query:{item:item.title } }" class="font-bold">{{item.title}}</router-link>
                      <div>
                          <h1 class="text-sm font-bold">
                               ₦{{ item.price }}
                          </h1>
                          <span class="text-sm text-gray-500"><del>₦{{item.mainPrice}}</del></span>
                            <h1>{{item.details}}</h1>
                      </div>
                  </div>
                  <button class="bg-purple-600 text-white w-full text-sm rounded-full">Add to cart</button>
              </div>
          </div>
          <div class="mt-4 flex justify-center">
              <a href="" class="bg-purple-600 px-4 py-2 text-white text-center rounded-full">View More</a>
          </div>
      </div>
  </div>
</template>

<script setup>
import {useStore} from 'vuex'
import {computed} from 'vue'

const store = useStore();

const cartItem = computed(() => store.state.cartData);

</script>

<style>
.borderB::after{
    content: "";
    border:2px solid #ccc;
    width:100%;
}

</style>