<template>
  <div>
    <section class="pb-8 sm:pb-16 sm:mb-4">
      <h1 class="font-semibold text-4xl pb-8 text-gray-800 border-b border-slate-200 dark:text-gray-300">About Me</h1>
  
      <p class="text-slate-700 dark:text-slate-300 text-lg pt-8">
        I have worked since 2017 with IT consulting companies that help client businesses grow with digital technology.
      </p>
    </section>

    <section class="pb-8 sm:pb-16 sm:mb-4">
      <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-300">Experiences</h2>
      <div v-for="(company) in experiences.slice().reverse()" :key="company.id" class="border-b border-slate-200 last:border-none">
        <ExperienceSmall :company="company" />
      </div>
    </section>

    <section class="pb-8 mb-8">
      <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-300 pb-8">Tech Stack</h2>
      <div class="flex flex-wrap gap-4 items-center">
        <span v-for="tech in skills" :key="tech.id" class="text-white dark:text-neutral-700 bg-[#caaa79] dark:bg-[#c49c5e] text-sm px-3 py-1 rounded-lg">
          {{ tech.name }}
        </span>
      </div>
    </section>
  </div>
</template>

<script setup>
  import ExperienceSmall from '@/Components/ExperienceSmall.vue';

  defineProps({
    experiences: Array,
    skills: Array
  })
</script>