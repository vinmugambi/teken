<template>
  <div class="flex h-full">
    <button
      type="button"
      @click="menuOpen = !menuOpen"
      v-if="!menuOpen"
      class="block h-12 w-12 my-auto p-2 rounded-full hover:bg-blue-100 focus:outline-none focus:bg-blue-200"
    >
      <svg class="h-8 w-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <path
          d="M4 12a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm6 0a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm6 0a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"
        />
      </svg>
    </button>
    <!-- <button
      v-if="menuOpen"
      @click="menuOpen=false"
      tabindex="-1"
      class="inset-0 h-full w-full fixed bg-gray-800 opacity-50 cursor-default"
    ></button>-->

    <div :class="menuOpen? 'block': 'hidden'" class="absolute rounded top-0 right-0 w-full sm:w-1/2 h-auto z-10 bg-white bg-opacity-100 shadow">
      <div class="flex justify-end h-16 px-2 sm:px-4  w-full">
        <button
          type="button"
          @click="menuOpen=false"
          class="block h-12 w-12 my-auto p-2 rounded-full hover:bg-red-100 focus:outline-none focus:bg-red-200"
        >
          <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path
              d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"
            />
          </svg>
        </button>
      </div>
      <div class="flex justify-center text-center">
      <ul class="px-4 pb-4 text-lg font-bold w-full">
        <li v-for="item in items" :key="item.url" class="py-1 rounded-lg hover:bg-blue-100 ">
          <a class="block h-full w-full" :href="item.url">{{item.title}}</a>
        </li>
      </ul>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      menuOpen: false
    };
  },
  props: ["items"]
};
</script>