<template>
    <div class="bg-pink-50">
        <HomeBannerSection />
        <MainProductSection />
        <ConsumerElectronics />
        <ApparelComponent />
        <AgriculturalProduce />
    </div>
</template>

<script setup>
import HomeBannerSection from '../components/HomeBannerSection.vue'
import MainProductSection from '../components/MainProductSection.vue'
import ConsumerElectronics from '../components/ConsumerElectronics.vue'
import ApparelComponent from '../components/ApparelComponent.vue'
import AgriculturalProduce from '../components/AgriculturalProduce.vue'
import {useTitle } from '@vueuse/core'
const title = useTitle('GoCommerce', { titleTemplate: '%s | Online Market for Gloceries appliances and more' });


</script>
<style></style>