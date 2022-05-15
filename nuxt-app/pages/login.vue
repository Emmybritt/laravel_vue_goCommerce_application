<template>
  <div>
      <NuxtLayout name="authlayout">
        <p class="text-5xl text-blue-800 font-bold">Login form[updated]</p>
        <NuxtLink to="/">go to home page</NuxtLink>
      </NuxtLayout>
      
  </div>
</template>

<script setup>
definePageMeta({
    layout: "authlayout",
});
useHead({
  title: 'login',
   titleTemplate: 'goShopping - %s',
    viewport: 'width=device-width, initial-scale=1, maximum-scale=1',
    charset: 'utf-8',
    meta: [
        {name: 'description', content: 'Login page.'},
        {name: 'keyword', content: 'login, auth, shopping'}
    ]
})
</script>

<style>

</style>