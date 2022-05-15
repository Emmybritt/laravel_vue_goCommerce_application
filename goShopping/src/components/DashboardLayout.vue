<template>
    <div>
        <router-view></router-view>
    </div>
</template>
<script setup>
import {useRoute, useRouter} from 'vue-router';
import {watch, computed, ref} from 'vue';
import {useStore} from 'vuex'
// import {useAbility} from '@casl/vue'

const store = useStore();
const router = useRouter();
const route = useRoute();

const can = useAbility();

watch(route, (newVal, oldValue) => {
    // store.di
});

</script>

<style></style>