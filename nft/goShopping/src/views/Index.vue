<template>
  <div class="">
      <BannerSection />
      <PageContents />      
  </div>
</template>

<script setup>
import {useTitle, useDark, useToggle } from '@vueuse/core'
import BannerSection from '../components/BannerSection.vue'
import PageContents from '../components/page/PageContents.vue'
const title = useTitle('goShopping', { titleTemplate: '%s | grow your bussiness' });

const isDark = useDark()
const toggleDark = useToggle(isDark)

</script>

<style>

</style>