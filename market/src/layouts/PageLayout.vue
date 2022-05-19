<template>
    <div>
        <div>
            <DesktopHeader />
        </div>
        <div class="md:hidden">
        <MobileHeader />
        </div>
        <router-view></router-view>
        <Footer />
    </div>
</template>

<script setup>
import DesktopHeader from '../components/DesktopHeader.vue'
import MobileHeader from '../components/MobileHeader.vue'
import Footer from '../components/Footer.vue'

</script>
<style></style>