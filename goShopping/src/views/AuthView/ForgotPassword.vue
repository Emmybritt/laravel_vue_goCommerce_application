<template>
  <div>
      <div class="bg-white px-[12rem] py-[6rem]">
        <div class="flex justify-between">
          <div class="w-[36%]">
            <h1 class="text-4xl font-signika font-bold text-center text-gray-700">Recover Your Password!!!</h1>
            

                       
            <div class="animate-fade-in-up">
              <form @submit.prevent="Register">
                <div class=" px-2">
                  <p class=" my-3 leading-4 text-purple-700">Enter the email you used to register your account.</p>
                  <div class="block">
                    <label for="name" class="mb-1 ml-2">Email</label>
                    <input id="name" type="email" aria-autocomplete="Email_address" class="outline-none focus:ring-purple-500 focus:ring-1 border border-gray-300 px-3 py-2 rounded-lg w-full">
                  </div>
                  
                </div>
                <p class="text-sm text-gray-600 font-thin my-4 text-center">You will receive a password reset link email after submitting this form.</p>
                <button class="text-center bg-purple-600 py-3 rounded-md text-white w-full">Submit email</button>
                <div class="flex justify-between mt-2">
                  <router-link class="text-sm leading-tight" :to="{name: 'Register'}"><span class="text-purple-600">Already have an account?</span> </router-link>
                  <router-link class="text-sm leading-tight" :to="{name: 'Login'}"><span class="text-purple-600">Go back to login page?</span> </router-link>
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
import {useTitle} from '@vueuse/core'


const title = useTitle('GoCommerce', { titleTemplate: '%s | Forgot password' });


const formShouldShow = ref(false);

function ShowRegisterationForm() {
  formShouldShow.value = !formShouldShow.value
}

function Register() {
  
}

</script>

<style>

</style>