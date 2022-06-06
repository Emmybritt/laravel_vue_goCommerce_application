<template>
  <div class="relative">
      <div class="bg-slate-800 text-white px-[1rem] md:px-[4rem] lg:px-[10rem] py-2">
          <div class="flex md:flex-row flex-col justify-between items-center">
              <div class="w-full">
                  
                  <div @click="emit('ShowSearchModal')" class="shadow-md px-3 rounded py-1 text-slate-400" style="background-color:rgba(0,0,0,0.3)">
                      <input type="text" style="background-color:rgba(0,0,0,0.0)" class="border-none text-slate-400 outline-none transparent" placeholder="Search...">
                      <span class="las la-search"></span>
                  </div>
              </div>
              <div class="md:flex items-center space-x-3 justify-between hidden">
                  <div class="flex">
                     <div>
                         <span>
                             <i class="las la-mail"></i>
                         </span>
                         <span>buzzschools@gmail.com</span>
                     </div>
                  </div>
                  <div class="flex">
                      <span class="lab la-twitter"></span>
                      <span class="lab la-linkedin"></span>
                      <span class="lab la-facebook-f"></span>
                  </div>
              </div>
          </div>
      </div>
      <div class="bg-white py-4 drop-shadow-md px-[1rem] md:px-[4rem] lg:px-[10rem]">
          <div class="flex items-center justify-between">
              <div>
                  <router-link :to="{name: 'Home'}">buzzschools</router-link>
              </div>
              <div class="md:flex hidden space-x-6 text-lg">
                  
                  <router-link :to="{name: 'Home'}" class="hover:border-b-2 hover:border-orange-500" active-class="border-b-2 border-orange-500">
                      <div>Home</div>
                  </router-link>
                  <router-link :to="{name: 'About'}" class="hover:border-b-2 hover:border-orange-500" active-class="border-b-2 border-orange-500">
                      <div>About</div>
                  </router-link>
                  <router-link :to="{name: 'AllCourses'}" class="hover:border-b-2 hover:border-orange-500" active-class="border-b-2 border-orange-500">
                      <div>Courses</div>
                  </router-link>
                  <router-link :to="{name: 'Webinars'}" class="hover:border-b-2 hover:border-orange-500" active-class="border-b-2 border-orange-500">
                      <div>Webinars</div>
                  </router-link>
                  <div class="hover:border-b-2 transition-opacity hover:border-orange-500">
                      <h1><a href="">Blogs</a></h1>
                  </div>
              </div>
              <div class="md:flex hidden items-center space-x-6">
                  <div class="relative top-2 mr-4 cursor-pointer">
                      <span class="las la-shopping-cart text-xl font-bold"></span>
                      <span class="bg-orange-500 text-white rounded-full absolute -right-3 -top-4 px-2">4</span>
                  </div>
                  <div  v-if="userToken" class="relative">
                    <div @click="showProfile" class="flex cursor-pointer items-center space-x-3">
                        <div>
                          <img src="../../assets/mypics.jpg" class="rounded-full h-[2rem] object-cover w-[2rem]" alt="">
                        </div>
                        <p>Emmy</p>
                    </div>
                    <div v-if="userProfileShould" class="absolute animate-fade-in-up hidden md:flex flex-col justify-center right-0 px-2 py-2 border divide-y bg-white rounded-md w-[13rem] h-[10rem]">
                        <div class="flex items-center space-x-2 py-2 font-bold">
                            <img src="../../assets/mypics.jpg" class="rounded-full h-[1.4rem] object-cover w-[1.4rem]" alt="">
                            <p>profile</p>
                        </div>
                        <div class="flex items-center space-x-2 py-2 font-bold">
                            <span class="las la-book"></span>
                            <p>Your plans</p>
                        </div>
                        <div class="flex items-center space-x-2 py-2 font-bold">
                            <span class="las la-heart text-red-600"></span>
                            <p>Your saved item</p>
                        </div>
                        <div class="items-center space-x-2 font-bold">
                            <button @click="logout" class="bg-orange-500 w-full text-white rounded-md font-bold">Logout</button>
                        </div>
                    </div>
                  </div>
                  
                  <div v-else class="divide-x divide-orange-300 rounded-l-md rounded-r-md bg-orange-500 space-x-3 px-4 py-2">
                      <router-link :to="{name: 'Login'}" class="text-white">Login</router-link>
                      <router-link :to="{name: 'Register'}" class="text-white pl-2">Register</router-link>
                  </div>
              </div>
              <div @click="ToggleNavigationbar" class="md:hidden">
                <span v-if="!shouldShow" class="las la-bars text-xl"></span>
                <span v-else class="las la-times text-xl"></span>
              </div>
          </div>
      </div>
      <div v-if="shouldShow" class="h-[45rem] md:hidden animate-fade-in-up absolute bg-white w-full">
          <div class="px-4 text-2xl font-bold divide-y">
              <div class="py-3">
                  <router-link :to="{name: 'Home'}">Home</router-link>
              </div>
              <div class="py-3">
                  <router-link :to="{name: 'Home'}">About</router-link>
              </div>
              <div class="py-3">
                  <router-link :to="{name: 'Home'}">Courses</router-link>
              </div>
              <div class="py-3">
                  <router-link :to="{name: 'Home'}">Webinars</router-link>
              </div>
              <div class="py-3">
                  <router-link :to="{name: 'Home'}">Questions & answer forum</router-link>
              </div>
              <div class="py-3">
                  <router-link :to="{name: 'Home'}">Join discord chat</router-link>
              </div>
              <div class="space-y-3 py-4">
                  <router-link :to="{name: 'Register'}">
                    <div class="bg-orange-500 text-white my-2 flex items-center justify-center py-3 font-bold rounded-md w-full">
                        SignUp
                    </div>
                </router-link>
                  <router-link :to="{name: 'Login'}">
                    <div class="bg-orange-500 text-white my-2 flex items-center justify-center py-3 font-bold rounded-md w-full">
                        Login
                    </div>
                </router-link>
              </div>
          </div>
      </div>
      <!-- <pre>{{userToken}}</pre> -->
  </div>
</template>

<script setup>
import {computed, ref, watch} from 'vue'
import { useRoute } from 'vue-router';
import {useStore} from 'vuex'

const store = useStore();

const userToken = computed(() => store.state.user.token);

const userProfileShould = ref(false)

const emits = defineEmits(['ShowSearchModal']);

const shouldShow = ref(false);

function ToggleNavigationbar() {
    shouldShow.value = !shouldShow.value;
}

function showProfile() {
    userProfileShould.value  = !userProfileShould.value
}

function logout() {
    store.dispatch("Logout").then(() => {
        router.push({
            name: "Login",
        })
    })
}

const route = useRoute();
watch(route, (newValue, oldValue) => {
  shouldShow.value = false;
})

</script>

<style>

</style>