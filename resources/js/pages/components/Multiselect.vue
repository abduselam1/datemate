<template>
  <div class="flex flex-col w-full">
    <label class="mb-2 font-medium text-gray-700">{{ label }}</label>
    <div class="relative" @click="toggleDropdown">
      <div class="w-full p-2 border border-gray-400 rounded-md cursor-pointer">
        <div class="flex flex-wrap">
          <div v-for="(option, index) in selectedOptions" :key="index" class="px-2 py-1 m-1 text-sm font-medium text-white bg-blue-500 rounded-md">{{ option }}</div>
          <div v-if="selectedOptions.length === 0" class="text-gray-500">Select an option...</div>
        </div>
        <span class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
          <svg class="w-4 h-4 fill-current text-gray-500" viewBox="0 0 20 20">
            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.293 6.293a1 1 0 00-1.414-1.414L10 12.586 3.121 5.707a1 1 0 00-1.414 1.414l7 7a1 1 0 001.414 0l7-7z"/>
          </svg>
        </span>
      </div>
      <div v-if="dropdownOpen" class="absolute z-50 w-full mt-2 bg-white rounded-md shadow-lg">
        <div class="px-2 py-2">
          <div v-for="(option, index) in options" :key="index" class="flex items-center py-1 cursor-pointer" @click="toggleOption(option)">
            <input class="mr-2 leading-tight" type="checkbox" :checked="selectedOptions.includes(option)" :value="option" @change="toggleOption(option)">
            <span class="text-sm font-medium">{{ option }}</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    label: {
      type: String,
      required: true
    },
    options: {
      type: Array,
      required: true
    },
    value: {
      type: Array,
      default: () => []
    }
  },
  data() {
    return {
      dropdownOpen: false,
      selectedOptions: this.value
    }
  },
  methods: {
    toggleDropdown() {
      this.dropdownOpen = !this.dropdownOpen
    },
    toggleOption(option) {
      if (this.selectedOptions.includes(option)) {
        this.selectedOptions = this.selectedOptions.filter(item => item !== option)
      } else {
        this.selectedOptions.push(option)
      }
      this.$emit('input', this.selectedOptions)
    }
  }
}
</script>