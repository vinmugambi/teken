<template>
  <div>
    <img
      v-if="images.length===1"
      class="h-108 w-full object-cover rounded"
      :src="images[0].src"
      :alt="images[0].alt"
    />
    <div v-else class="flex flex-col sm:flex-row">
      <div class="w-full md:w-3/4 overflow-hidden relative">
        <img
          class="h-96 md:h-120 w-full object-cover rounded"
          :src="images[currentImageIndex].src"
          :alt="images[currentImageIndex].alt"
        />
        <div class="absolute top-0 left-0 bottom-auto right-auto h-full flex items-center z-10">
          <button
            class="p-2 bg-gray-200 bg-opacity-25 hover:bg-opacity-50 focus:outline-none"
            @click.prevent="back"
          >
            <svg
              class="w-8 h-8 fill-current"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
            >
              <path d="M7.05 9.293L6.343 10 12 15.657l1.414-1.414L9.172 10l4.242-4.243L12 4.343z" />
            </svg>
          </button>
        </div>
        <div class="absolute top-0 right-0 bottom-auto left-auto h-full flex items-center z-10">
          <button
            class="p-2 bg-gray-200 bg-opacity-25 hover:bg-opacity-50 focus:outline-none"
            @click.prevent="next"
          >
            <svg
              class="w-8 h-8 fill-current"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
            >
              <path
                d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"
              />
            </svg>
          </button>
        </div>
      </div>
      <div
        class="w-full md:w-1/4 py-2 md:pl-4 flex sm:flex-col items-center md:items-start justify-center"
      >
        <div
          class="p-1 rounded"
          v-for="(image,index) in images"
          :key="image.src"
          :class="currentImageIndex===index?'border': ''"
          @click="setCurrentImage(index)"
        >
          <img :src="image.src" class="block w-16 h-16 md:h-24 md:w-24 rounded" alt />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["images"],
  data() {
    return {
      currentImageIndex: 0
    };
  },
  methods: {
    next() {
      if (this.currentImageIndex < this.images.length - 1) {
        this.currentImageIndex += 1;
      } else this.currentImageIndex = 0;
    },
    back() {
      if (this.currentImageIndex === 0) {
        this.currentImageIndex = this.images.length - 1;
      } else this.currentImageIndex -= 1;
    },
    setCurrentImage(index) {
      this.currentImageIndex = index;
    }
  }
};
</script>