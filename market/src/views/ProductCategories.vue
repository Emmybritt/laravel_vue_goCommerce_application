<template>
    <div class="bg-pink-50">
        <div class="h-[40rem]">
            <!-- Breadcrum starts here -->
            <div class="flex items-center text-gray-600 px-[6rem] py-[0.5rem] text-sm space-x-1">
                <router-link :to="{name: 'Home'}">Home</router-link>
                <span class="text-xs las la-angle-right"></span>
                <span>{{route.params.category}}</span>
            </div>
            <!-- Breadcrum ends here -->
            <!-- CategoryList Section Here -->
            <ProductCategoryComponents />  
            <!-- CategoryList Section ends Here -->
        </div>
    </div>
</template>
<script setup>
import {useRoute} from 'vue-router'
import {useTitle } from '@vueuse/core'
import ProductCategoryComponents from '../components/products/ProductCategoryComponents.vue'
const route = useRoute();
const title = useTitle('GoCommerce', { titleTemplate: `%s | ${route.params.category} - Shop best beauty products` });


</script>
