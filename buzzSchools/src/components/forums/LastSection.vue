<template>
  <div class="divide-y">
    <div class="px-3 py-3 rounded-b-full">
        <button @click="$emit('ToggleModal')" class="w-full text-white text-xs rounded-sm shadow-md shadow-slate-300 uppercase font-bold bg-slate-500 py-2">Ask a question</button>
    </div>
    <div class="px-[1.4rem] py-[1rem]">
        <div class="flex justify-around">
            <div class="border-l-2 border-blue-300 p-3">
                <h1 class="text-xs text-blue-500">Questions</h1>
                <h1 class="text-2xl font-bold">999+</h1>
            </div>
            <div class="border-r-2 border-orange-300 p-3">
                <h1 class="text-xs text-orange-500">Answers</h1>
                <h1 class="text-2xl font-bold">777+</h1>
            </div>
        </div>
    </div>
  </div>
</template>

<script setup>


</script>

<style>

</style>