<template>
  <div>
      <div class="bg-white px-[12rem] py-[6rem]">
        <div class="flex justify-between">
          <div class="w-[36%]">
            <h1 class="text-4xl font-signika font-bold text-gray-700">Log In To Your Account</h1>
            <!-- Social Authentication UI here -->
            <div class="flex flex-col mt-[3rem] space-y-4">
              <a href="#" class="group">
                <div class="w-full group-hover:bg-purple-600 flex justify-center py-3 items-center rounded-lg border border-purple-500">
                <span class="lab group-hover:text-white mr-1 la-google font-extrabold text-xl"></span>
                <p class="group-hover:text-white">Use Google account</p>
              </div>
              </a>
              <a href="#" class="group">
                <div class="w-full group-hover:bg-purple-600 flex justify-center py-3 items-center rounded-lg border border-purple-500">
                <span class="lab group-hover:text-white mr-1 la-facebook-f font-extrabold text-xl"></span>
                <p class="group-hover:text-white">Use Facebook account</p>
              </div>
              </a>
              <a href="#" class="group">
                <div class="w-full group-hover:bg-purple-600 flex justify-center py-3 items-center rounded-lg border border-purple-500">
                <span class="lab group-hover:text-white mr-1 la-twitter font-extrabold text-xl"></span>
                <p class="group-hover:text-white">Use Twitter account</p>
              </div>
              </a>
              
            </div>
            <!-- Social Authentication UI ends here -->
            <h1 class="text-center mt-6 text-gray-700 font-signika">OR</h1>
            <!-- Registeration form -->

            <div v-if="!formShouldShow" class="animate-fade-in-down">
              <div @click="ShowRegisterationForm" class="w-full cursor-pointer hover:ring mt-2 hover:ring-purple-200 hover:ring-offset-1 bg-purple-600 flex justify-center py-3 items-center rounded-lg border border-purple-500">
                <!-- <span class="lab group-hover:text-white mr-1 la-twitter font-extrabold text-xl"></span> -->
                <p class="text-white">Use Your email address</p>
              </div>
            </div>
            
            <div v-if="formShouldShow" class="animate-fade-in-up">
              <form @submit.prevent="Register">
                <div class=" px-2">
                  
                  <div class="block mt-4">
                    <label for="name" class="mb-1 ml-2">Email</label>
                    <input id="name" type="email" aria-autocomplete="Email_address" class="outline-none focus:ring-purple-500 focus:ring-1 border border-gray-300 px-3 py-2 rounded-lg w-full">
                  </div>
                  <div class="block mt-4">
                    <label for="name" class="mb-1 ml-2">Password</label>
                    <input id="name" type="password" aria-autocomplete="Password" class="outline-none focus:ring-purple-500 focus:ring-1 border border-gray-300 px-3 py-2 rounded-lg w-full">
                  </div>
                  
                </div>
                <div class="flex space-x-2 items-center mt-3 mb-2">
                  <input type="checkbox" class="outline-none focus:ring-purple-500 focus:ring-1 border border-gray-300 rounded-lg">
                  <p>Remember me</p>
                </div>
                <button class="text-center bg-purple-600 py-3 rounded-md text-white w-full">Sign In</button>
                <div class="flex justify-between mt-2">
                  <router-link class="text-sm leading-tight" :to="{name: 'ForgotPassword'}"><span class="text-purple-600">Forgot Password?</span> </router-link>
                  <router-link class="text-sm leading-tight" :to="{name: 'Register'}"><span class="text-purple-600">Create new Account.</span> </router-link>
                </div>
              </form>
            </div>
            <!-- Registeration form -->
          </div>
          <div class="w-1/2">
          <img src="../../assets/icons/man.png" alt="" class="object-cover">
          </div>
        </div>
      </div>
  </div>
</template>

<script setup>
import {ref} from 'vue'

const formShouldShow = ref(false);

function ShowRegisterationForm() {
  formShouldShow.value = !formShouldShow.value
}

function Register() {
  
}

</script>

<style>

</style>