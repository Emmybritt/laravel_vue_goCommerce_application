<template>
  <div>
      <div class="bg-white px-[12rem] py-[6rem]">
        <div class="flex justify-between">
          <div class="w-[36%]">
            <h1 class="text-4xl font-signika font-bold text-gray-700">Create Your Forever Account</h1>
            <!-- Social Authentication UI here -->
            <div class="flex flex-col mt-[3rem] space-y-4">
              <a href="#" class="group">
                <div class="w-full group-hover:bg-orange-600 flex justify-center py-3 items-center rounded-lg border border-orange-500">
                <span class="lab group-hover:text-white mr-1 la-google font-extrabold text-xl"></span>
                <p class="group-hover:text-white">Use Google account</p>
              </div>
              </a>
              <a href="#" class="group">
                <div class="w-full group-hover:bg-orange-600 flex justify-center py-3 items-center rounded-lg border border-orange-500">
                <span class="lab group-hover:text-white mr-1 la-facebook-f font-extrabold text-xl"></span>
                <p class="group-hover:text-white">Use Facebook account</p>
              </div>
              </a>
              <a href="#" class="group">
                <div class="w-full group-hover:bg-orange-600 flex justify-center py-3 items-center rounded-lg border border-orange-500">
                <span class="lab group-hover:text-white mr-1 la-twitter font-extrabold text-xl"></span>
                <p class="group-hover:text-white">Use Twitter account</p>
              </div>
              </a>
              
            </div>
            <!-- Social Authentication UI ends here -->
            <h1 class="text-center mt-6 text-gray-700 font-signika">OR</h1>
            <!-- Registeration form -->

            <div v-if="!formShouldShow" class="animate-fade-in-down">
              <div @click="ShowRegisterationForm" class="w-full cursor-pointer hover:ring mt-2 hover:ring-orange-200 hover:ring-offset-1 bg-orange-600 flex justify-center py-3 items-center rounded-lg border border-orange-500">
                <!-- <span class="lab group-hover:text-white mr-1 la-twitter font-extrabold text-xl"></span> -->
                <p class="text-white">Use Your email address</p>
              </div>
            </div>
            
            <div v-if="formShouldShow" class="animate-fade-in-up">
              <form @submit.prevent="Register">
                <div class=" px-2">
                  <div class="block mt-4">
                    <label for="name" class="mb-1 ml-2">Full name</label>
                    <input id="name" type="text" aria-autocomplete="Full_name" class="outline-none focus:ring-orange-500 focus:ring-1 border border-gray-300 px-3 py-2 rounded-lg w-full">
                  </div>
                  <div class="block mt-4">
                    <label for="email" class="mb-1 ml-2">Email</label>
                    <input id="email" type="email" aria-autocomplete="Email_address" class="outline-none focus:ring-orange-500 focus:ring-1 border border-gray-300 px-3 py-2 rounded-lg w-full">
                  </div>
                  <div class="block mt-4">
                    <label for="password" class="mb-1 ml-2">Password</label>
                    <input id="password" type="password" aria-autocomplete="Password" class="outline-none focus:ring-orange-500 focus:ring-1 border border-gray-300 px-3 py-2 rounded-lg w-full">
                  </div>
                  <div class="block mt-4">
                    <label for="password_confirmation" class="mb-1 ml-2">Password confirmation</label>
                    <input id="password_confirmation" type="password" aria-autocomplete="Password_confirmation" class="outline-none focus:ring-orange-500 focus:ring-1 border border-gray-300 px-3 py-2 rounded-lg w-full">
                  </div>
                </div>
                <p class="text-sm text-gray-600 font-thin my-4 text-center">You will receive the confirmation email after submitting this form.</p>
                <button class="text-center bg-orange-600 py-3 rounded-md text-white w-full">Sign Up</button>
                <div class="flex justify-between mt-2">
                  <router-link class="text-sm leading-tight" :to="{name: 'Login'}"><span class="text-orange-600">Already have an account?</span> </router-link>
                </div>
              </form>
            </div>
            <!-- Registeration form -->
            <p class="text-sm text-gray-600 mt-3">By creating a GoComerce account, you agree to our <a href="">Terms of Service</a> and <a href="">Privacy Policy</a>.
            We'll occasionally send your account related emails.</p>
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
import {useTitle} from '@vueuse/core'
const title = useTitle('GoCommerce', { titleTemplate: '%s | Register' });


const formShouldShow = ref(false);

function ShowRegisterationForm() {
  formShouldShow.value = !formShouldShow.value
}

function Register() {
  
}

</script>

<style>

</style>