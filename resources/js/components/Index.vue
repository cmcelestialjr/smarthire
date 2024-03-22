<template>
  <Navbar> </Navbar>

  <div class="flex justify-center items-center bg-blue h-52">
    <!-- <img src="../assets/bg.jpg" class="w-screen h-52" /> -->

    <form class="w-9/12">
      <div class="flex">
        <label
          for="search-dropdown"
          class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white"
          >Your Email</label
        >
        <button
          id="dropdown-button"
          data-dropdown-toggle="dropdown"
          class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600"
          type="button"
        >
          All categories
          <svg
            class="w-2.5 h-2.5 ms-2.5"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 10 6"
          >
            <path
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="m1 1 4 4 4-4"
            />
          </svg>
        </button>
        <div
          id="dropdown"
          class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700"
        >
          <ul
            class="py-2 text-sm text-gray-700 dark:text-gray-200"
            aria-labelledby="dropdown-button"
          >
            <li>
              <button
                type="button"
                class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
              >
                Category 1
              </button>
            </li>
            <li>
              <button
                type="button"
                class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
              >
                Category 2
              </button>
            </li>
            <li>
              <button
                type="button"
                class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
              >
                Category 3
              </button>
            </li>
            <li>
              <button
                type="button"
                class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
              >
                Category 4
              </button>
            </li>
          </ul>
        </div>
        <div class="relative w-full">
          <input
            type="search"
            id="search-dropdown"
            class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
            placeholder="Search"
            required
          />
          <button
            type="submit"
            class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-gold rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
          >
            <svg
              class="w-4 h-4"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 20 20"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
              />
            </svg>
            <span class="sr-only">Search</span>
          </button>
        </div>
      </div>
    </form>
  </div>

  <div class="container mx-auto">
    <div class="grid grid-cols-3 mt-10">
      <!-- Items Column -->

      <div class="col-span-1">
        <h2 class="text-lg font-bold mb-4 px-14">Items</h2>

        <div class="flex flex-col justify-center items-end">
          <div
            v-for="(item, index) in items"
            :key="index"
            @click="showDetails(index)"
            class="mt-6 w-11/12 p-6 bg-white border-2 border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700 mb-4 cursor-pointer transition-colors duration-200 ease-in-out hover:border-2 hover:border-blue focus:border-4 focus:border-blue"
            tabindex="0"
          >
            <h3 class="text-lg font-semibold">{{ item.name }}</h3>
            <p class="text-gray-600">{{ item.description }}</p>
          </div>
        </div>
      </div>

      <div class="col-span-2">
        <h2 class="text-lg font-bold mx-14">Item Details</h2>
        <div class="flex justify-center items-center">
          <div
            class="w-10/12 mt-10 overflow-y-auto p-6 h-screen border rounded-xl"
            :class="{ 'bg-gray-200': !selectedItem }"
          >
            <div v-if="selectedItem">
              <p><strong>Name:</strong> {{ selectedItem.name }}</p>
              <p>
                <strong>Description:</strong> {{ selectedItem.description }}
              </p>
              <p><strong>Price:</strong> {{ selectedItem.price }}</p>
              <p><strong>Category:</strong> {{ selectedItem.category }}</p>
              <p><strong>Name:</strong> {{ selectedItem.name }}</p>
              <p>
                <strong>Description:</strong> {{ selectedItem.description }}
              </p>
              <p><strong>Price:</strong> {{ selectedItem.price }}</p>
              <p><strong>Category:</strong> {{ selectedItem.category }}</p>
              <p><strong>Name:</strong> {{ selectedItem.name }}</p>
              <p>
                <strong>Description:</strong> {{ selectedItem.description }}
              </p>
              <p><strong>Price:</strong> {{ selectedItem.price }}</p>
              <p><strong>Category:</strong> {{ selectedItem.category }}</p>
              <p><strong>Name:</strong> {{ selectedItem.name }}</p>
              <p>
                <strong>Description:</strong> {{ selectedItem.description }}
              </p>
              <p><strong>Price:</strong> {{ selectedItem.price }}</p>
              <p><strong>Category:</strong> {{ selectedItem.category }}</p>
              <p><strong>Name:</strong> {{ selectedItem.name }}</p>
              <p>
                <strong>Description:</strong> {{ selectedItem.description }}
              </p>
              <p><strong>Price:</strong> {{ selectedItem.price }}</p>
              <p><strong>Category:</strong> {{ selectedItem.category }}</p>
              <p><strong>Name:</strong> {{ selectedItem.name }}</p>
              <p>
                <strong>Description:</strong> {{ selectedItem.description }}
              </p>
              <p><strong>Price:</strong> {{ selectedItem.price }}</p>
              <p><strong>Category:</strong> {{ selectedItem.category }}</p>
              <p><strong>Name:</strong> {{ selectedItem.name }}</p>
              <p>
                <strong>Description:</strong> {{ selectedItem.description }}
              </p>
              <p><strong>Price:</strong> {{ selectedItem.price }}</p>
              <p><strong>Category:</strong> {{ selectedItem.category }}</p>
              <p><strong>Name:</strong> {{ selectedItem.name }}</p>
              <p>
                <strong>Description:</strong> {{ selectedItem.description }}
              </p>
              <p><strong>Price:</strong> {{ selectedItem.price }}</p>
              <p><strong>Category:</strong> {{ selectedItem.category }}</p>
              <p><strong>Name:</strong> {{ selectedItem.name }}</p>
              <p>
                <strong>Description:</strong> {{ selectedItem.description }}
              </p>
              <p><strong>Price:</strong> {{ selectedItem.price }}</p>
              <p><strong>Category:</strong> {{ selectedItem.category }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import Navbar from "../components/Navbar.vue";
import { ref } from "vue";

const items = ref([
  {
    name: "Item 1",
    description: "Description of Item 1",
    price: 10,
    category: "Category A",
  },
  {
    name: "Item 2",
    description: "Description of Item 2",
    price: 20,
    category: "Category B",
  },
  {
    name: "Item 3",
    description: "Description of Item 3",
    price: 15,
    category: "Category A",
  },
  {
    name: "Item 4",
    description: "Description of Item 4",
    price: 15,
    category: "Category A",
  },
  {
    name: "Item 1",
    description: "Description of Item 1",
    price: 10,
    category: "Category A",
  },
  {
    name: "Item 2",
    description: "Description of Item 2",
    price: 20,
    category: "Category B",
  },
  {
    name: "Item 3",
    description: "Description of Item 3",
    price: 15,
    category: "Category A",
  },
  {
    name: "Item 4",
    description: "Description of Item 4",
    price: 15,
    category: "Category A",
  },
  {
    name: "Item 2",
    description: "Description of Item 2",
    price: 20,
    category: "Category B",
  },
  {
    name: "Item 3",
    description: "Description of Item 3",
    price: 15,
    category: "Category A",
  },
  {
    name: "Item 4",
    description: "Description of Item 4",
    price: 15,
    category: "Category A",
  },
  // Add more items as needed
]);

const selectedItem = ref(null);

const showDetails = (index) => {
  selectedItem.value = items.value[index];
};
</script>


<style scoped>
.right-column {
  flex: 1;
}
</style>
