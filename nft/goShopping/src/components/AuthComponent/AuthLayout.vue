<template>
  <div class="font-signika">
    <AuthHeader />
      <router-view></router-view>
      <AuthFooter />
  </div>
</template>

<script setup>
import AuthHeader from './AuthHeader.vue'
import AuthFooter from './AuthFooter.vue'

</script>

<style>

</style>