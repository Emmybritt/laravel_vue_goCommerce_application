<template>
<div>
    <div class="bg-white px-[8rem] py-[3rem]">
        <div class="flex justify-between">
        <div class="w-1/3">
            <h1 class="text-2xl font-bold">How <span class="text-blue-500">it's work</span> creative jobs & quickly features</h1>
        </div>
        <div class="w-1/3">
            <p class="text-gray-500">Find your favourite job and get the benefit for yourself</p>
        </div>
    </div>
    <div class="grid grid-cols-4 gap-3 mt-4">
        <div class="flex flex-col px-[2rem] border rounded-lg py-[1rem] bg-white shadow-md ">
            <h1 class="text-purple-600 font-signika font-semibold text-5xl">1</h1>
            <div>
                <h1 class="font-bold spa">Register Account</h1>
                <p class="text-xs text-gray-500 py-3">First you will need to register an account</p>
            </div>
            <router-link :to="{name: 'Home'}" class="text-purple-600 font-bold capitalize text-sm">Register an account</router-link>
        </div>
        <div class="flex flex-col px-[2rem] border rounded-lg py-[1rem] bg-white shadow-md ">
            <h1 class="text-green-500 font-signika font-semibold text-5xl">2</h1>
            <div>
                <h1 class="font-bold spa2">Create Resume</h1>
                <p class="text-xs text-gray-500 py-3">Secondly, You will need to create a resume to apply for any jobs.</p>
            </div>
            <router-link :to="{name: 'Home'}" class="text-green-500 font-bold capitalize text-sm">Create your resume</router-link>
        </div>
        <div class="flex flex-col px-[2rem] border rounded-lg py-[1rem] bg-white shadow-md ">
            <h1 class="text-pink-500 font-signika font-semibold text-5xl">3</h1>
            <div>
                <h1 class="font-bold spa3">Find Jobs</h1>
                <p class="text-xs text-gray-500 py-3">Then Search for an appropriate job of your kind</p>
            </div>
            <router-link :to="{name: 'Home'}" class="text-pink-500 font-bold capitalize text-sm">Search now</router-link>
        </div>
        <div class="flex flex-col px-[2rem] border rounded-lg py-[1rem] bg-white shadow-md ">
            <h1 class="text-blue-500 font-signika font-semibold text-5xl">4</h1>
            <div>
                <h1 class="font-bold spa4">Apply For Jobs</h1>
                <p class="text-xs text-gray-500 py-3">apply to the company and wait. You will be notified through your email.</p>
            </div>
            <router-link :to="{name: 'Home'}" class="text-blue-500 font-bold capitalize text-sm">Appy Now</router-link>
        </div>
    </div>
    </div>
    
</div>
  
</template>

<script setup>

</script>

<style>
.spa:after{
    content: "";
    border: 2px solid rgb(147, 51, 234);
    border-radius: 30rem;
    display: block;
    width: 4rem;
    margin-top: 6px;
}
.spa2:after{
    content: "";
    border: 2px solid rgb(34, 197, 94);
    border-radius: 30rem;
    display: block;
    width: 4rem;
    margin-top: 6px;
}
.spa3:after{
    content: "";
    border: 2px solid rgb(236, 72, 153);
    border-radius: 30rem;
    display: block;
    width: 4rem;
    margin-top: 6px;
}
.spa4:after{
    content: "";
    border: 2px solid rgb(59, 130, 246);
    border-radius: 30rem;
    display: block;
    width: 4rem;
    margin-top: 6px;
}

</style>