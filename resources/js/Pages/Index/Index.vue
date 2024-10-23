<template>
  <div>
    <section className="pb mb-14">
      <h1 className="font-semibold text-3xl md:text-4xl mb-2 text-gray-800 dark:text-gray-300">
        Hello, I’m Erwin Mapaliey.
      </h1>
      <span class="text-xl md:text-2xl text-[#c49c5e] mb-4 block">Software Engineer</span>

      <p className="text-gray-700 dark:text-gray-300 md:text-lg">
        I have worked since 2017 with IT consulting companies that help client businesses grow with digital technology.
      </p>

      <div class="mt-16">
        <Link href="/about-me" class="bg-black dark:bg-slate-700 hover:bg-gray-500 text-white font-mono font-medium px-8 py-4 rounded-full text-sm">
          More Information 
          <span class="text-lg align-middle">
            <i class='bx bx-right-arrow-alt'></i>
          </span>
        </Link>
      </div>

      <div class="mt-20 flex gap-4 text-3xl">
        <a href="https://github.com/erwinmapaliey" target="_blank" class="social-media"><i class='bx bxl-github'></i></a>
        <a href="https://www.instagram.com/erwinmapaliey/" target="_blank" class="social-media"><i class='bx bxl-instagram'></i></a>
        <a href="https://www.linkedin.com/in/erwinmapaliey/" target="_blank" class="social-media"><i class='bx bxl-linkedin'></i></a>
      </div>
    </section>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<style scoped>
.social-media {
  @apply border border-gray-500 w-12 h-12 flex items-center justify-center rounded-full dark:text-gray-500 hover:text-gray-300 hover:border-gray-300
}
</style>