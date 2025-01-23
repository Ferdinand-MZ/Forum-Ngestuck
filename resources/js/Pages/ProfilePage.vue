<template>
  <div class="container mx-auto p-6">
    <div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-lg">
      <div class="flex items-center justify-center mb-6">
        <img
          :src="userProfile.profile_image || 'https://via.placeholder.com/150'"
          alt="Profile Image"
          class="w-32 h-32 rounded-full object-cover border-4 border-indigo-500"
        />
      </div>


      <div class="mb-4">
        <h2 class="text-xl font-semibold text-gray-700">User Information</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <p class="text-gray-600">Name</p>
            <p class="font-medium">{{ userProfile.name }}</p>
          </div>
          <div>
            <p class="text-gray-600">Username</p>
            <p class="font-medium">{{ userProfile.username }}</p>
          </div>
          <div>
            <p class="text-gray-600">Email</p>
            <p class="font-medium">{{ userProfile.email }}</p>
          </div>
        </div>
      </div>

      <div class="text-center mt-6">
        <button
          @click="editProfile"
          class="px-6 py-2 bg-indigo-500 text-white font-semibold rounded-md hover:bg-indigo-600 transition duration-300"
        >
          Edit Profile
        </button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    userProfile: Object,
  },
  methods: {
    editProfile() {
      // Logic for editing profile (you can navigate to edit page or open modal, etc.)
      alert('Edit profile functionality here!');
    },
  },
};
</script>

<style scoped>
/* Optional custom styles */
</style>
