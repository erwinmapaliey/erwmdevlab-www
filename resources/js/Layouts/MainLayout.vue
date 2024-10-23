<template>
  <div class="max-w-3xl mx-auto">
    <header class="pt-8 md:pt-16 pb-16 px-6 md:px-0 flex items-center justify-between dark:text-gray-300">
      <div class="font-semibold font-mono hidden sm:inline">
        <Link href="/">erwmdevlab_</Link>
      </div>
      <div class="font-semibold font-mono inline sm:hidden">
        <Link href="/">em_</Link>
      </div>
      <nav class="flex font-mono text-sm gap-4 md:gap-6">
        <div>
          <Link href="/about-me" class="">About Me</Link>
        </div>
        <div>
          <Link href="#" class="">Experience</Link>
        </div>
        <div>
          <Link href="#" class="">Projects</Link>
        </div>
      </nav>
    </header>

    <main class="px-6 md:px-0">
      <slot></slot>
    </main>

    <footer className="px-6 md:px-0 border-t border-slate-300 py-8 text-slate-700 dark:text-slate-400 font-mono text-xs tracking-tight flex justify-between">
      <p>
        &copy; 2024 - Erwin Mapaliey
      </p>
    </footer>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>