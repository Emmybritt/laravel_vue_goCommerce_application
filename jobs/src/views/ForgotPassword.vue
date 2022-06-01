<template>
  <div class="font-source">
      <div class="py-8 bg-blue-50 flex items-center justify-center">
          <div class="bg-white shadow-md w-[30rem] px-[2rem] py-[2rem] rounded-lg">
              <h1 class="text-2xl py-3 font-semibold font-signika">Recover your account😍</h1>
              <form action="" class="space-y-2">
                  <p>Enter the email you used to register your account</p>
              <div>
                  <label for="email" class="font-medium mb-1">Email Address</label>
                <input type="text" id="email" class="w-full border outline-none focus:outline focus:outline-offset-1 focus:outline-pink-300 border-gray-300 rounded-md px-3 py-2" placeholder="Email address">
              </div>
              
              <div class="flex items-center text-sm space-x-2">
                <input type="checkbox" id="remember" class="border outline-none  border-gray-300 rounded-md px-3 py-2">
                  <label for="remember" class="font-medium">Remember me</label>
              </div>
              <button class="w-full bg-blue-600 rounded-md py-3 text-white font-bold shadow-md shadow-blue-500">Login</button>
              <div class="flex justify-between items-center pt-1">
                  <router-link :to="{name: 'Register'}" class="text-sm text-blue-500">Don't have an account?</router-link>
                  <router-link :to="{name: 'Login'}" class="text-sm text-blue-500">Already Have an account?</router-link>
              </div>
              
          </form>
          </div>
          
      </div>
  </div>
</template>

<script setup>

</script>

<style>

</style>