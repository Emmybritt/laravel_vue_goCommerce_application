<template>
  <div class="bg-gray-100 font-signika relative">
    <div v-if="notification.show">
      <div
        :class="[
          notification.type === 'success' ? 'bg-slate-800' : 'bg-red-500',
        ]"
        class=" z-50 absolute w-[70%] text-sm animate-fade-slide-right md:w-[40%] top-0 right-0 px-4 py-2 rounded text-white"
      >
        {{ notification.message }}
      </div>
    </div>
    <div class="flex justify-center items-center">
      <div
        v-if="showForm"
        class="
          bg-slate-600
          animate-slide-up
          rounded
          w-full
          h-[100%]
          top-[8rem]
          md:w-[60%]
          fixed
          z-40
        "
      >
        <PostQuestionForm @ToggleForm="toggleModal" />
      </div>
    </div>
    <div class="lg:px-[3rem]">
      <div class="flex">
        <div
          class="
            md:w-[20%]
            hidden
            bg-gray-50
            sticky
            top-[6rem]
            md:flex
            justify-center
            items-center
            shadow-md
            h-[30rem]
          "
        >
          <FirstSection />
        </div>
        <div class="md:w-[60%] bg-white drop-shadow-md">
          <MiddleSection />
        </div>
        <div
          class="
            md:w-[20%]
            hidden
            md:block
            bg-gray-50
            sticky
            top-[8rem]
            ml-1
            drop-shadow-md
            h-[30rem]
          "
        >
          <LastSection @ToggleModal="toggleModal" />
        </div>
      </div>
    </div>
    <button
      @click="toggleModal"
      class="
        bg-slate-600
        outline-none
        md:hidden
        text-white
        font-signika
        w-full
        sticky
        bottom-0
        py-2
        rounded-ms
        shadow shadow-slate-300
      "
    >
      Ask your question
    </button>
  </div>
</template>

<script setup>
import LastSection from "../components/forums/LastSection.vue";
import MiddleSection from "../components/forums/MiddleSection.vue";
import FirstSection from "../components/forums/FirstSection.vue";
import PostQuestionForm from "../components/forums/PostQuestionForm.vue";
import { ref, computed } from "vue";
import { useStore } from "vuex";
const showForm = ref(false);
const store = useStore();

const notification = computed(() => store.state.notification);

function toggleModal() {
  showForm.value = !showForm.value;
}
</script>

<style>
.Blured {
  background-color: rgba(255, 255, 255, 0.3);
  backdrop-filter: 4;
}
</style>