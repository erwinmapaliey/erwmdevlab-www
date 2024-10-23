<template>
  <div>
    <section class="pb-8 sm:pb-16 sm:mb-4">
      <h1 class="font-semibold text-4xl pb-8 text-gray-800 border-b border-slate-200 dark:text-gray-300">All Projects</h1>
  
      <table class="mt-8 w-full">
        <thead>
          <tr class="border-b border-gray-500/20">
            <th class="thead">Year</th>
            <th class="thead">Project</th>
            <th class="thead hidden sm:table-cell">Made at</th>
            <th class="thead hidden md:table-cell">Build with</th>
            <th class="thead hidden md:table-cell">Link</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="project in projects" :key="project.id" class="border-b border-gray-500/20">
            <td class="tbody-list">{{ project.year }}</td>
            <td class="tbody-primary">{{ project.project_name }}</td>
            <td class="tbody-list hidden sm:table-cell" v-if="project.company !== null">{{ project.company.alias }}</td>
            <td class="tbody-list hidden sm:table-cell" v-else></td>
            <td class="py-4 text-xs pr-3 hidden md:table-cell">
              <ul class="flex flex-wrap gap-2">
                <li v-for="skill in project.skills" :key="skill.id" 
                  class="text-white dark:text-neutral-700 bg-[#caaa79] dark:bg-[#c49c5e] text-xs px-3 py-1 rounded-full">
                  {{ skill.name }}
                </li>
              </ul>
            </td>
            <td class="tbody-primary hidden md:table-cell" v-if="project.url !== null"><a :href="project.url" target="_blank" >{{ project.url }}</a></td>
            <td class="hidden md:table-cell" v-else></td>
          </tr>
        </tbody>
      </table>
    </section>
  </div>
</template>

<script setup>
  defineProps({
    projects: Array
  })
</script>

<style scoped>
.thead {
  @apply text-sm text-gray-700 dark:text-gray-300 text-start py-4 font-semibold pr-8
}
.tbody-list {
  @apply text-gray-500 py-4 text-sm pr-8
}

.tbody-primary {
  @apply text-gray-700 dark:text-gray-300 py-4 text-sm pr-8
}

</style>