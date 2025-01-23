<template>
  <div class="w-full bg-white shadow-md border rounded-lg">
    <h2 class="font-semibold text-lg p-6 bg-indigo-700 text-white rounded-lg">
      <slot name="title" />
    </h2>
    <ul role="list" class="divide-y divide-slate-300 dark:divide-slate-700 p-4">
      <li
        v-for="community in communities"
        :key="community.id"
        class="py-3 sm:py-4"
      >
        <div class="flex items-center space-x-4">
          <Link
            :href="route('frontend.communities.show', community.slug)"
            class="
              text-slate-800
              dark:text-slate-400
              font-semibold
              truncate
              text-xs  <!-- Ubah dari text-sm ke text-xs -->
              hover:text-indigo-700
            "
          >
            {{ community.name }}
          </Link>
          <div class="text-xs">Posts({{ community.posts_count }})</div> <!-- Ubah ukuran teks di sini juga -->
        </div>
      </li>
    </ul>
  </div>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";

defineProps({
  communities: Object,
});
</script>