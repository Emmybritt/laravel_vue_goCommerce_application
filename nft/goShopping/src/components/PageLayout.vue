<template>
  <div>
      <PageHeader />
      <router-view></router-view>
      <PageFooter />
  </div>
</template>

<script setup>
import PageHeader from '../components/PageHeader.vue'
import PageFooter from '../components/PageFooter.vue'

</script>

<style>

</style>