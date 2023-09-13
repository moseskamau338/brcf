<script setup lang="ts">
import MobileMenu from "./MobileMenu.vue";

const routes = [
    {name: 'Home', href: '/'},
    {name: 'About Us', href: '/about-us'},
    {name: 'Contact Us', href: '/contact-us'},
]
</script>

<template>
<div class="mx-auto container">

    <MobileMenu />

    <nav class="f-f-l relative z-10">
        <div class="relative z-10 mx-auto hidden container w-full lg:px-4 xl:px-0 lg:flex justify-between items-center py-11">
            <div>
                <img src="images/logo.png" class="w-1/4 absolute" alt="">
            </div>
            <div class="flex items-center text-lg font-bold">
                <ul class="flex items-center pr-12">
                    <template v-for="(menu, index) in routes">
                        <template v-if="index === 0 ">
                                <li class="cursor-pointer text-color-1">
                                    <a :href="menu.href">{{menu.name}}</a>
                                </li>
                        </template>
                        <li v-else class="xl:pl-8 lg:pl-5 cursor-pointer text-color-1">
                            <a :href="menu.href">{{ menu.name }}</a>
                        </li>
                    </template>
                </ul>
                <a href="/donate" class="py-3 px-6 bg-white bg-linear-button-about-us text-white text-lg font-bold flex items-center justify-center">
                    Donate
                    <i class="ml-2 fa fa-box-heart"></i>
                </a>
            </div>

        </div>
    </nav>
</div>
</template>

<style scoped>

</style>
