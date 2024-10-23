<template>
  <div>
    <section class="pb-8 sm:pb-16 sm:mb-4">
      <h1 class="font-semibold text-3xl md:text-4xl pb-8 text-gray-800 border-b border-slate-200 dark:text-gray-300">About Me</h1>
  
      <p class="text-slate-700 dark:text-slate-300 md:text-lg pt-8">
        I'm a software engineer since 2017 focusing on web development and just learning about mobile development. I have experience in developing web-based analytical dashboard & web apps using Laravel. Mostly work as backend developer but sometimes work as fullstack developer depends on team & project requirement.
      </p>
    </section>

    <section class="pb-8 sm:pb-16 sm:mb-4">
      <h2 class="font-semibold text-xl md:text-2xl text-gray-800 dark:text-gray-300">Experiences</h2>
      <div v-for="(company) in experiences.slice().reverse()" :key="company.id" class="border-b border-slate-200 last:border-none">
        <ExperienceSmall :company="company" />
      </div>
      <div class="mt-10">
        <a href="/resume.pdf" target="_blank" class="text-lg font-semibold group hover:border-b-2 hover:pb-2">
          View Full Resume
          <span class="text-lg align-middle">
            <i class='bx bx-up-arrow-alt rotate-45'></i>
          </span>
        </a>
      </div>
    </section>
    
    <section class="pb-8 mb-8">
      <h2 class="font-semibold text-xl md:text-2xl text-gray-800 dark:text-gray-300 pb-8">Tech Stack</h2>
      <div class="flex flex-wrap gap-2 items-center">
        <span v-for="tech in skills" :key="tech.id" class="text-white dark:text-neutral-700 bg-[#caaa79] dark:bg-[#c49c5e] text-sm px-4 py-2 rounded-lg">
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