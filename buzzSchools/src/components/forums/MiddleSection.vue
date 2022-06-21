<template>
  <div class="font-source">
    <div
      class="
        px-4
        py-3
        border-b border-gray-200
        flex
        justify-between
        items-center
      "
    >
      <div class="space-x-3">
        <span class="text-sm">Recent Questions</span>
        <span class="text-sm text-gray-500">Most Answers</span>
        <span class="text-sm text-gray-500">Recent Answer</span>
        <span class="text-sm text-gray-500">Most visited</span>
        <span class="text-sm text-gray-500">Most voted</span>
      </div>
      <div>
        <span class="las la-ellipsis-h"></span>
      </div>
    </div>
    <div class="divide-y px-4 my-3 py-3">
      <div class="bg-white md:space-x-4 py-4 flex" v-for="(item, i) in 6" :key="i">
        <div class="md:w-[12%] hidden md:block">
          <div class="ring-2 w-full rounded-full ring-offset-2 ring-orange-300">
            <img
              src="../../assets/mypics.jpg"
              class="object-cover w-full h-8 rounded-full"
              alt=""
            />
          </div>
        </div>
        <div>
          <h3>Ogwu emmanuel</h3>
          <div class="flex space-x-6">
            <span class="text-xs text-gray-500">Asked: March 28, 2018</span>
            <span class="text-xs"
              >tags: <b class="text-orange-400">Politics, maths</b></span
            >
          </div>
          <h3 class="font-bold font-signika">
            Is five too young to let my kid watch the walking dead?
          </h3>
          <p class="text-xs text-gray-600 mt-2">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident
            eos repellendus nam quasi dolore repudiandae doloribus tempore amet
            minima dolores sit autem impedit distinctio doloremque voluptates,
            ut reiciendis, aspernatur nemo fugiat, consectetur esse. Animi quam,
            maiores doloribus sint alias dolores.
          </p>
          <!-- Tag here -->
          <div class="flex flex-wrap space-x-2 mt-2">
            <span class="border px-2 py-1 text-xs rounded-sm">tomato</span>
            <span class="border px-2 py-1 text-xs rounded-sm">Soup</span>
            <span class="border px-2 py-1 text-xs rounded-sm">cheese</span>
          </div>
          <!-- Tag here -->
          <div
            class="
              flex
              justify-between
              flex-col
              md:flex-row
              items-center
              md:px-4
              py-2
              rounded-md
              mt-3
              bg-gray-100
            "
          >
            <div class="flex space-x-4">
              <div class="bg-white px-4 space-x-3 border rounded">
                <span class="las la-envelope text-sm"></span>
                <span class="text-sm">16 answers</span>
              </div>
              <div class="bg-white px-4 space-x-3 border rounded">
                <span class="las la-eye text-sm"></span>
                <span class="text-sm">370 views</span>
              </div>
            </div>
            <a
              href=""
              class="bg-slate-800 w-full md:hidden text-center text-white text-xs font-bold px-4 py-1"
              >Answer</a
            >
            <a
              href=""
              class="bg-slate-800 md:block hidden text-center text-white text-xs font-bold px-4 py-1"
              >Answer</a
            >
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
</script>

<style>
</style>