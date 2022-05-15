<script setup>
definePageMeta({
    layouts: "dashboardlayout",
});

useHead({
    title: 'dashboard',
    titleTemplate: 'goShopping - %s',
    viewport: 'width=device-width, initial-scale=1, maximum-scale=1',
    charset: 'utf-8',
    meta: [
        {name: 'description', content: 'dashboard.'},
        {name: 'keyword', content: 'dashboard'}
    ]
})
</script>

<template>
  <div>
      <NuxtLayout name="dashboardlayout">
          dashboard here
            <NuxtLink to="/">go to home page</NuxtLink>
            <NuxtLink to="/login">go to login page</NuxtLink>
            <NuxtLink to="/home">go to main page</NuxtLink>
      </NuxtLayout>
  </div>
</template>


<style>

</style>