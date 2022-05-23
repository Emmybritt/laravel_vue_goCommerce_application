<template>
    <div>
        <div v-if="CartEmpty" class="px-[6rem] py-[0.5rem] bg-pink-50">
            <div class="bg-white shadow-md rounded-md flex-col h-[20rem] space-y-[2rem] items-center flex justify-center">
                <div class="rounded-full bg-gray-50 px-2 py-1.5">
                    <span class="las la-shopping-cart text-7xl text-purple-600"></span>
                </div>
                <h1 class="font-bold">Your Cart is empty</h1>
                <p>Browse our categories and discover our best deals!</p>
                <div class="mt-4">
                    <a href="#" class="uppercase text-white rounded-full bg-purple-600 hover:opacity-80 shadow shadow-purple-300 px-[2rem] py-[0.8rem]">start shopping</a>
                </div>
            </div>
        </div>
        <CartItem v-else />
        <RecentlyViewedItem />
        <TopSellingItem />
    </div>
    
</template>
<script setup>
import RecentlyViewedItem from '../components/cartcomponent/RecentlyViewedItem.vue'
import TopSellingItem from '../components/cartcomponent/TopSellingItem.vue'
import CartItem from '../components/cartcomponent/CartItem.vue'
import {ref} from 'vue'
import {useTitle } from '@vueuse/core'
const title = useTitle('GoCommerce', { titleTemplate: '%s | Cart' });


const CartEmpty = ref(false)

</script>

<style scoped>

</style>