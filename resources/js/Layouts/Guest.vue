<script setup>
import { ref } from "vue";
import BreezeApplicationLogo from "@/Components/ApplicationLogo.vue";
import BreezeDropdown from "@/Components/Dropdown.vue";
import BreezeDropdownLink from "@/Components/DropdownLink.vue";
import BreezeNavLink from "@/Components/NavLink.vue";
import BreezeResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";
import { Link } from "@inertiajs/inertia-vue3";

const showingNavigationDropdown = ref(false);
</script>

<template>
  <div>
    <div class="min-h-screen bg-gray-100">
      <nav class="bg-white border-b border-gray-100 fixed top-0 left-0 w-full z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="flex justify-between h-16">
            <div class="flex">
              <div class="shrink-0 flex items-center">
                <Link :href="route('communities.index')" class="flex items-center space-x-2">
                  <img src="/path/to/your/logo.png" alt="Logo" class="block h-9 w-auto" />
                  <span class="text-lg font-semibold text-gray-700">NgeStuck</span>
                </Link>
              </div>
            </div>
            <div class="hidden sm:flex sm:items-center sm:ml-6">
              <div class="ml-3 relative" v-if="$page.props.auth.auth_check">
                <BreezeDropdown align="right" width="48">
                  <template #trigger>
                    <span class="inline-flex rounded-md">
                      <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                        {{ $page.props.auth.user.name }}
                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M5.293 7. ```html
    293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                      </button>
                    </span>
                  </template>
                  <template #content>
                    <BreezeDropdownLink :href="route('profile.show')">Profile</BreezeDropdownLink>
                    <BreezeDropdownLink :href="route('logout')" method="post">Logout</BreezeDropdownLink>
                  </template>
                </BreezeDropdown>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <main class="pt-16">
        <slot />
      </main>
    </div>
  </div>
</template>
