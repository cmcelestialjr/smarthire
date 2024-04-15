<script setup>
    import { ref } from 'vue'
    import { useRouter } from 'vue-router'
    import { initFlowbite } from "flowbite";
    import axios from 'axios';

const router = useRouter();

const name = ref('');
const email = ref('');
const password = ref('');

const register = async () => {
    try {
      const response = await axios.post('/api/register', {
        name: name.value,
        email: email.value,
        password: password.value
      });
      console.log(response.data);
      // Redirect to verification page after successful registration
      router.push({ name: 'verify-email' });
    } catch (error) {
      console.error(error.response.data);
      // Handle registration errors
    }
  };

  const login = async () => {
  try {
    const response = await axios.post('/api/login', {
      email: email.value,
      password: password.value
    });
    console.log(response.data);
    // Handle successful login, e.g., redirect to dashboard
    // Redirect to verification page after successful registration
      router.push({ name: 'user' });
  } catch (error) {
    console.error(error.response.data);
    // Handle login errors
  }
};


function openModalEvalForm(intern) {
 document.getElementById("myModalEvalForm").showModal();
}

function openModalRegister(intern) {
 document.getElementById("myModalRegister").showModal();
}


</script>
 
 onMounted(() => {
  initFlowbite();
});

<template>


<nav class=" bg-white border-gray-200 dark:bg-gray-900 h-24">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto ">
  <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
       <img src="../Assets/smarthirelogo.png" class="w-30 h-24"/>
      <!-- <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">SmartHire</span> -->
  </a>
  <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      <button @click="openModalEvalForm(form)" type="button" class="mr-2 border-2 border-gold hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
      <button @click="openModalRegister(form)" type="button" class=" border-2 text-white bg-gold focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register</button>
      <!-- <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block text-white bg-gold hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
  Login
</button> -->
      <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
    <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a href="#" class="block py-2 px-3 md:p-0 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:dark:text-blue-500" aria-current="page">Home</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 d:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
      </li>
      <li>
       <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
      </li>
      
    </ul>
  </div>
  </div>
</nav>


<dialog id="myModalEvalForm" class="bg-white rounded-lg shadow dark:bg-gray-900">
     
            
      <div class="flex items-center flex-col p-10">
         <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" onclick="document.getElementById('myModalEvalForm').close();">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
        <h1
          class="text-4xl md:text-4xl font-bold leading-tight mt-5 flex justify-center"
        >
          Hello,Again!
        </h1>

        <h1 class="text-xl md:text-1xl font-bold leading-tight mt-10 mb-10">
          Log in to your account
        </h1>

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
          {{ status }}
        </div>

        

        <form @submit.prevent="login">
      <!-- <div>
        <label>Email:</label>
        <input type="email" 
        v-model="email" required>
      </div>
      <div>
        <label>Password:</label>
        <input 
        type="password" 
        v-model="password" required>
      </div> -->

      <div class="relative z-0 w-full mb-6 group">
            <input
              type="email" 
              v-model="email"
              class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:border-blue peer"
              placeholder=" "
             
              required
              autocomplete="password_confirmation"
            />
            <label
              for="password_confirmation"
              class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1"
              >Email</label
            >
            <InputError class="mt-2"/>
          </div>

      <div class="relative z-0 w-full mb-6 group">
            <input
              type="password" 
              v-model="password"
              class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:border-blue peer"
              placeholder=" "
             
              required
              autocomplete="password_confirmation"
            />
            <label
              for="password_confirmation"
              class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1"
              >Password</label
            >
            <InputError class="mt-2"/>
          </div>
      <button type="submit"
      class="w-80 py-2.5 block bg-gold hover:bg-gold/80 focus:bg-gold/90 text-white font-semibold rounded-lg px-4 mt-3"
      >Login</button>
    </form>

        <p class="mt-8 flex justify-center text-gray-700">
          Need an account?&nbsp;<a onclick="document.getElementById('myModalEvalForm').close();" @click="openModalRegister(form)" type="button"
            
            class="text-blue-500 hover:text-blue-700 font-semibold"
            >Create an account</a
          >
        </p>
      </div>
    </dialog>

    <dialog id="myModalRegister" class="bg-white rounded-lg shadow dark:bg-gray-900">
     
            
      <div class="flex items-center flex-col p-10">
         <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" onclick="document.getElementById('myModalRegister').close();">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
      <div class="">
         <h1
          class="text-4xl md:text-4xl font-bold leading-tight flex justify-center mb-10"
        >
          Sign Up
        </h1>


           <form @submit.prevent="register">
        <!-- <div class="mb-4">
          <label for="name" class="block mb-1">Name:</label>
          <input 
          type="text" 
          id="name" 
          v-model="name" class="w-full px-3 py-2 border rounded-md">
        </div>
        <div class="mb-4">
          <label for="email" class="block mb-1">Email:</label>
          <input 
          type="email" 
          id="email" 
          v-model="email" class="w-full px-3 py-2 border rounded-md">
        </div> -->
        <!-- <div class="mb-4">
          <label for="password" class="block mb-1">Password:</label>
          <input type="password" 
          id="password" 
          v-model="password" 
          class="w-full px-3 py-2 border rounded-md">
        </div> -->

        
        <div class="relative z-0 w-full mb-6 group">
            <input
              type="text" 
              id="name" 
              v-model="name"
              class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:border-blue peer"
              placeholder=" "
             
              required
              autocomplete="password_confirmation"
            />
            <label
              for="password_confirmation"
              class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1"
              >Name</label
            >
            <InputError class="mt-2"/>
          </div>

        <div class="relative z-0 w-full mb-6 group">
            <input
              type="email" 
              id="email" 
              v-model="email" 
              class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:border-blue peer"
              placeholder=" "
             
              required
              autocomplete="password_confirmation"
            />
            <label
              for="password_confirmation"
              class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1"
              >Email</label
            >
            <InputError class="mt-2"/>
          </div>

         <div class="relative z-0 w-full mb-6 group">
            <input
              type="password"
              id="password"
              v-model="password"
              class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:border-blue peer"
              placeholder=" "
             
              required
              autocomplete="password_confirmation"
            />
            <label
              for="password_confirmation"
              class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1"
              >Password</label
            >
            <InputError class="mt-2"/>
          </div>
        <button type="submit" class="w-80 py-2.5 block bg-gold hover:bg-gold/80 focus:bg-gold/90 text-white font-semibold rounded-lg px-4 mt-3">Register</button>
      </form>
          <p
            class="inline-block align-bottom mt-8 flex justify-center text-gray-700"
          >
            Already registered?&nbsp;<a onclick="document.getElementById('myModalRegister').close();" @click="openModalEvalForm(form)" type="button"
              class="text-blue-500 hover:text-blue-700 font-semibold"
              >Login</a
            >
          </p>

      </div>

        
      </div>
    </dialog>

<!-- Main modal -->



</template>

<style scoped>
dialog[open] {
  animation: appear 0.15s cubic-bezier(0, 1.8, 1, 1.8);
}

dialog::backdrop {
  background: linear-gradient(45deg, rgba(0, 0, 0, 0.5), rgba(54, 54, 54, 0.5));
  backdrop-filter: blur(3px);
}

@keyframes appear {
  from {
    opacity: 0;
    transform: translateX(-3rem);
  }

  to {
    opacity: 1;
    transform: translateX(0);
  }
}
</style>
