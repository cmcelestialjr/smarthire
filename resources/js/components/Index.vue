<template>
<Navbar>

</Navbar>

<div class=" bg-blue h-52" >
     <!-- <img src="../assets/bg.jpg" class="w-screen h-52" /> -->
     <div></div>
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
