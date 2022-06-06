<template>
  <div>
      <Banner />
      <div class="block">
        <FavouriteArt />
      </div>
      <FeaturedNfts :nftDatas="nftDatas"/>
      <NftTutorDesc />
      <HomeTotheWorld />
      <Resources />
  </div>
</template>

<script setup>
import Banner from '../components/home/Banner.vue'
import FavouriteArt from '../components/home/FavouriteArt.vue'
import FeaturedNfts from '../components/home/FeaturedNfts.vue'
import HomeTotheWorld from '../components/home/HomeTotheWorld.vue'
import NftTutorDesc from '../components/home/NftTutorDesc.vue'
import Resources from '../components/home/Resources.vue'
import { nftDatas } from "../datas/nftDatas";


</script>

<style>

</style>