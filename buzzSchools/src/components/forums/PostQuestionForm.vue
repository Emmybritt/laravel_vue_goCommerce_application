<template>
  <div class="text-white p-4 font-source">
    <div
      v-if="!token"
      class="flex flex-col items-center py-[4rem] justify-center"
    >
      <h1 class="text-xl font-bold text-center">
        You need to login to your account to be able to post your difficulty
        question!!
      </h1>
      <br />
      <p>
        Dont have an accoun't
        <router-link :to="{ name: 'Register' }" class="text-yellow-500"
          >Click here to register a new account</router-link
        >
      </p>
      <br />
      <p>
        Already have an account
        <router-link :to="{ name: 'Login' }" class="text-yellow-500"
          >Click here to go to login page</router-link
        >
      </p>
    </div>
    <div v-else>
      <div class="flex justify-between text-2xl cursor-pointer font-signika">
        <h1>Start posting your difficult questions</h1>
        <span @click="$emit('ToggleForm')" class="las la-times"></span>
      </div>
      <p class="text-sm mt-4">
        Start by posting your difficult assignment/question, in any related
        field. our professional teachers will help you in solving & analysing
        those difficult assignment/problem. take note that you will need some points to be able to post question.
      </p>
      <div class="form mt-4">
        <form @submit.prevent="submitQuestion()" class="space-y-1">
          <div v-if="errorMessages" class="text-sm bg-red-500 flex justify-between text-white py-2 px-3 rounded-md shadow-md shadow-red-400">
            <div v-for="(tagerr, i) in errorMessages.tags" :key="i">
              {{ tagerr }}
            </div>
            <span @click="errorMessages = null" class="las la-times rounded-full bg-red-600"></span>
          </div>
          <div>
            <label for="questionTitle" class="text-lg">Short Title</label>
            <input
              id="questionTitle"
              class="
                w-full
                text-slate-700
                font-signika
                text-lg
                font-bold
                rounded
                outline-none
                border-none
                px-3
                py-2
              "
              required
              v-model="questionData.title"
              type="text"
              placeholder="Submission of form.."
            />
          </div>
          <div>
            <label for="question" class="text-lg">Question</label>
            <textarea
            v-model="questionData.description"
              name=""
              id="question"
              cols="30"
              placeholder="type your question here?"
              required
              class="
                w-full
                h-[10rem]
                text-slate-700
                font-signika
                text-lg
                font-bold
                rounded
                outline-none
                border-none
                px-3
                py-2
              "
            ></textarea>
          </div>
          <div class="flex md:flex-row flex-col items-center w-full md:space-x-2">
            <div class="md:w-1/2 w-full">
              <label for="subject">Subject</label>
              <select
              v-model="questionData.subject"
              required
                name=""
                class="
                  w-full
                  text-slate-700
                  font-signika
                  text-lg
                  font-bold
                  rounded
                  outline-none
                  border-none
                  px-3
                  py-2
                "
                id="subject"
              >
              <option value="">Choose a subject</option>
                <option v-for="(subject,i) in subjects" :key="i" :value="subject">{{subject}}</option>
              </select>
            </div>
            <div class="md:w-1/2 w-full">
              <label for="Tag">Tags</label>
              <input 
              v-model="questionData.tags"
               class="
                  w-full
                  text-slate-700
                  font-signika
                  text-lg
                  font-bold
                  rounded
                  outline-none
                  border-none
                  px-3
                  py-1
                "
                placeholder="algebra, equation"
              type="text">
            </div>
          </div>
          <p v-if="errorMsg" class="text-sm font-medium ">{{errorMsg}}!! <a href="#" class="text-orange-300 underline"> Click here to buy points.</a></p>
          <button class="w-full bg-orange-500 rounded-md outline-none py-2 text-center">{{ btnLoading ? 'Please wait...': 'Post question' }} </button>
        </form>
      </div>
    </div>
  </div>
</template>

<script setup>
import { computed, reactive, ref } from "vue";
import { useStore } from "vuex";
const emit = defineEmits(['toggleModal']);

const store = useStore();

const questionData = reactive({
  title: '',
  description: '',
  subject: '',
  tags: '',
})


const subjects = [
  'Mathematics',
  'English',
  'Yoruba'
]

const userPoint = 10;
const errorMsg = ref('');
let btnLoading = ref(false);
let errorMessages = ref(null);

const token = computed(() => store.state.user.token);
function submitQuestion() {
  if (userPoint < 5) {
    errorMsg.value = "You don't have enough point, you need atleast 5 point to post your question";
    return false;
  }
  btnLoading.value = true;
  store.dispatch('SubmitQuestion', questionData).then((data) =>{
    btnLoading.value = false;
    store.commit("notify",{
      type: 'success',
      message: 'Your question has been successfully posted',
    });
    emit('ToggleForm');
  }).catch(err => {
    btnLoading.value = false;
    if (err.response.status === 500) {
      store.commit("notify",{
      type: 'fail',
      message: 'Oops!! there was an error submitting question please try again',
    });
    }
    errorMessages.value = err.response.data.errors;
  });
}
</script>

<style scoped>
</style>