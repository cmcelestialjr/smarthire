<template>
<Navbar>

</Navbar>

<div class=" bg-blue h-52 items-center" >
     <!-- <img src="../assets/bg.jpg" class="w-screen h-52" /> -->
     
<form class="max-w-lg mx-auto">
    <div class="flex">
        <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>
        <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">All categories <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
  </svg></button>
        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
            <li>
                <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mockups</button>
            </li>
            <li>
                <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Templates</button>
            </li>
            <li>
                <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Design</button>
            </li>
            <li>
                <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logos</button>
            </li>
            </ul>
        </div>
        <div class="relative w-full">
            <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Search Mockups, Logos, Design Templates..." required />
            <button type="submit" class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
                <span class="sr-only">Search</span>
            </button>
        </div>
    </div>
</form>

</div>





  <div class="flex mt-10">
    <div class="flex-initial w-1/3 ml-10">
      <h2 class="text-lg font-bold mb-4">Items</h2>
      <div v-for="(item, index) in items" :key="index" @click="showDetails(index)" class="mt-10 w-11/12 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-4 cursor-pointer">
             <h3 class="text-lg font-semibold">{{ item.name }}</h3>
        <p class="text-gray-600">{{ item.description }}</p>
    

      </div>
    </div>
    

    <div class="flex-initial w-screen mr-10">
      <h2 class="text-lg font-bold">Item Details</h2>
      <div class="sticky top-0 bottom-0 mt-10">
        <div class="overflow-y-auto h-screen p-6">
          <div v-if="selectedItem">
            <p><strong>Name:</strong> {{ selectedItem.name }}</p>
        <p><strong>Description:</strong> {{ selectedItem.description }}</p>
        <p><strong>Price:</strong> {{ selectedItem.price }}</p>
        <p><strong>Category:</strong> {{ selectedItem.category }}</p>
        <p><strong>Name:</strong> {{ selectedItem.name }}</p>
        <p><strong>Description:</strong> {{ selectedItem.description }}</p>
        <p><strong>Price:</strong> {{ selectedItem.price }}</p>
        <p><strong>Category:</strong> {{ selectedItem.category }}</p>
        <p><strong>Name:</strong> {{ selectedItem.name }}</p>
        <p><strong>Description:</strong> {{ selectedItem.description }}</p>
        <p><strong>Price:</strong> {{ selectedItem.price }}</p>
        <p><strong>Category:</strong> {{ selectedItem.category }}</p>
        <p><strong>Name:</strong> {{ selectedItem.name }}</p>
        <p><strong>Description:</strong> {{ selectedItem.description }}</p>
        <p><strong>Price:</strong> {{ selectedItem.price }}</p>
        <p><strong>Category:</strong> {{ selectedItem.category }}</p>
        <p><strong>Name:</strong> {{ selectedItem.name }}</p>
        <p><strong>Description:</strong> {{ selectedItem.description }}</p>
        <p><strong>Price:</strong> {{ selectedItem.price }}</p>
        <p><strong>Category:</strong> {{ selectedItem.category }}</p>
        <p><strong>Name:</strong> {{ selectedItem.name }}</p>
        <p><strong>Description:</strong> {{ selectedItem.description }}</p>
        <p><strong>Price:</strong> {{ selectedItem.price }}</p>
        <p><strong>Category:</strong> {{ selectedItem.category }}</p>
        <p><strong>Name:</strong> {{ selectedItem.name }}</p>
        <p><strong>Description:</strong> {{ selectedItem.description }}</p>
        <p><strong>Price:</strong> {{ selectedItem.price }}</p>
        <p><strong>Category:</strong> {{ selectedItem.category }}</p>
        <p><strong>Name:</strong> {{ selectedItem.name }}</p>
        <p><strong>Description:</strong> {{ selectedItem.description }}</p>
        <p><strong>Price:</strong> {{ selectedItem.price }}</p>
        <p><strong>Category:</strong> {{ selectedItem.category }}</p>
        <p><strong>Name:</strong> {{ selectedItem.name }}</p>
        <p><strong>Description:</strong> {{ selectedItem.description }}</p>
        <p><strong>Price:</strong> {{ selectedItem.price }}</p>
        <p><strong>Category:</strong> {{ selectedItem.category }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>


  
</template>

<script setup>
import Navbar from '../components/Navbar.vue';
import { ref } from 'vue';

const items = ref([
  { name: 'Item 1', description: 'Description of Item 1', price: 10, category: 'Category A' },
  { name: 'Item 2', description: 'Description of Item 2', price: 20, category: 'Category B' },
  { name: 'Item 3', description: 'Description of Item 3', price: 15, category: 'Category A' },
  { name: 'Item 4', description: 'Description of Item 4', price: 15, category: 'Category A' },
  { name: 'Item 1', description: 'Description of Item 1', price: 10, category: 'Category A' },
  { name: 'Item 2', description: 'Description of Item 2', price: 20, category: 'Category B' },
  { name: 'Item 3', description: 'Description of Item 3', price: 15, category: 'Category A' },
  { name: 'Item 4', description: 'Description of Item 4', price: 15, category: 'Category A' },
  { name: 'Item 2', description: 'Description of Item 2', price: 20, category: 'Category B' },
  { name: 'Item 3', description: 'Description of Item 3', price: 15, category: 'Category A' },
  { name: 'Item 4', description: 'Description of Item 4', price: 15, category: 'Category A' },
  // Add more items as needed
]);

const selectedItem = ref(null);

const showDetails = (index) => {
  selectedItem.value = items.value[index];
};
</script>

<style scoped>
.container {
  display: flex;
}



.right-column {
  flex: 1;
}
</style>
