<template>
    <form class="pt-8">
        <div>
          <h3 class="text-lg leading-6 font-medium text-gray-900">Enter details below</h3>
          <p class="mt-1 text-sm text-gray-500">We will be in touch with you shortly</p>
        </div>
        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
          <div class="sm:col-span-3">
            <label for="name" class="block text-sm font-medium text-gray-700"> Name </label>
            <div class="mt-1">
              <input v-model="form.name" type="text" name="name" id="name" autocomplete="name" class="shadow-sm focus:ring-pink-500 focus:border-pink-500 block w-full sm:text-sm border-gray-300 rounded-md" />
            </div>
          </div>

          <div class="sm:col-span-3">
            <label for="email" class="block text-sm font-medium text-gray-700"> Email </label>
            <div class="mt-1">
              <input v-model="form.email" type="email" name="email" id="email" autocomplete="email" class="shadow-sm focus:ring-pink-500 focus:border-pink-500 block w-full sm:text-sm border-gray-300 rounded-md" />
            </div>
          </div>

          <div class="sm:col-span-8">
            <label for="phone" class="block text-sm font-medium text-gray-700"> Phone </label>
            <div class="mt-1">
              <input v-model="form.phone" id="phone" name="phone" type="text" autocomplete="phone" class="shadow-sm focus:ring-pink-500 focus:border-pink-500 block w-full sm:text-sm border-gray-300 rounded-md" />
            </div>
          </div>

          <div class="sm:col-span-8">
            <label for="country" class="block text-sm font-medium text-gray-700"> Message </label>
            <div class="mt-1">
              <textarea v-model="form.message" class="shadow-sm focus:ring-pink-500 focus:border-pink-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
            </div>
          </div>

        </div>

         <div class="pt-5">
          <div class="flex justify-end">
            <NButton :color="`rgb(141,158,192)`" attr-type="reset" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500 !hover:text-pink-500 !hover:border-pink-500">Cancel</NButton>
            <NButton :color="`rgb(190,24,93)`" attr-type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-pink-600 hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500 !hover:text-pink-500 !hover:border-pink-500">Save</NButton>
          </div>
        </div>
      </form>
</template>

<script lang="ts">
//@ts-ignore
import {NForm, NFormItem, NInput, NButton} from 'naive-ui'
//@ts-ignore
import {ref, reactive} from 'vue'

export default{
  components:{
      NForm, NFormItem, NInput, NButton
  },
  setup () {
    const form = reactive({
        name:'',
        email:'',
        phone:'',
        message:'',
    })
    return {form}
  }
}
</script>
