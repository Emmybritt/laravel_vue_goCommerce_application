<template>
  <div>
      <AffiliateBanner />
      <HowItWork />
      <WhyPartnerWithGoshopping />
      <AffiliatesFaq />
      <SubScribeToNewsLetter />

  </div>
</template>

<script setup>
import AffiliateBanner from '../../components/AffiliateBanner.vue'
import HowItWork from '../../components/HowItWork.vue'
import SubScribeToNewsLetter from '../../components/SubScribeToNewsLetter.vue'
import WhyPartnerWithGoshopping from '../../components/WhyPartnerWithGoshopping.vue'
import {useTitle} from '@vueuse/core'
import AffiliatesFaq from '../../components/AffiliatesFaq.vue'

const title = useTitle('Affiliates', { titleTemplate: '%s | Earn money with the goShopping Affiliate Program by PROMOTING HIGH QUALITY PRODUCTS' });

</script>

<style>

</style>