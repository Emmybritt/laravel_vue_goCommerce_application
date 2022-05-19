<template>
    <div>
        <DesktopHeader />
        <router-view></router-view>
        <MobileHeader />
    </div>
</template>

<script setup>
import DesktopHeader from '../components/DesktopHeader.vue'
import MobileHeader from '../components/MobileHeader.vue'

</script>
<style></style>