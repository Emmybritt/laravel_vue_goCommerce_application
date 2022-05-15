<template>
<div class="bg-gradient-to-br from-cyan-50 via-pink-100 to-slate-100 h-screen">
    <NuxtLayout name="pagelayout">
        <div class="flex justify-">
            <h1>Turn your visitors into <p>Potential</p> customers</h1>
        </div>
    </NuxtLayout>
</div>
</template>

<script setup>
const route = useRoute();

definePageMeta({
    layout: "pagelayout",
});

useHead({
    title: 'Grow your business online',
    titleTemplate: 'goShopping - %s',
    viewport: 'width=device-width, initial-scale=1, maximum-scale=1',
    charset: 'utf-8',
    meta: [
        {name: 'description', content: 'my amazing site.'},
        {name: 'keyword', content: 'ecommerce, market, affiliate'}
    ]
})




</script>

<style>

</style>