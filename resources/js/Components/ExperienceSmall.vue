<template>
  <div class="py-8 flex items-center gap-8">
    <div>
      <img :src="`./storage/${company.thumbnail}`" class="w-20 rounded-2xl">
    </div>
    <div>
      <h1 class="text-2xl font-medium text-[#c49c5e]">{{ company.public_name }}</h1>
      <div v-for="(experience) in company.experiences.slice().reverse()" :key="experience.id" class="mb-6">
        <p class="text-gray-700 dark:text-gray-300 font-light mt-2 text-lg">{{ experience.position }}</p>
        <p class="text-gray-400 dark:text-gray-500 font-normal mt-2 text-sm font-mono">
          <span>
            <WorkingDate :date="experience.start_date" />
          </span>
          <span class="mx-4 text-lg align-middle">
            <i class='bx bx-right-arrow-alt'></i>
          </span>
          <span v-if="experience.end_date">
            <WorkingDate :date="experience.end_date" />
          </span>
          <span v-else>
            current
          </span>
        </p>
      </div>
    </div>
  </div>
</template>

<script setup>
import WorkingDate from './WorkingDate.vue';

  defineProps({
    company: Object,
  })
</script>