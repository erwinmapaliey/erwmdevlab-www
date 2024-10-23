<template>
  <div class="max-w-3xl mx-auto">
    <header class="pt-8 md:pt-16 pb-16 px-6 md:px-8 lg:px-0 flex items-center justify-between dark:text-gray-300">
      <div class="font-bold font-ubuntu-mono hidden sm:inline text-2xl">
        <Link href="/" class="text-[#c49c5e]">erwmdevlab_</Link>
      </div>
      <div class="font-bold font-ubuntu-mono inline sm:hidden text-2xl">
        <Link href="/" class="text-[#c49c5e]">em_</Link>
      </div>
      <nav class="flex font-ubuntu-mono text-lg gap-4 md:gap-6">
        <div>
          <Link href="/about-me" class="">About Me</Link>
        </div>
        <!-- <div>
          <Link href="/experience" class="">Experience</Link>
        </div> -->
        <div>
          <Link href="/projects" class="">Projects</Link>
        </div>
      </nav>
    </header>

    <main class="px-6 md:px-8 lg:px-0">
      <slot></slot>
    </main>

    <footer class="mt-8 px-6 md:px-8 lg:px-0 border-t border-slate-300 py-6 text-slate-700 dark:text-slate-400 font-ubuntu-mono tracking-tight flex justify-between">
      <p>
        &copy; 2024 - Erwin Mapaliey
      </p>
    </footer>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>