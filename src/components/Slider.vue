<template>
    <div>
        <h1 class="mb-1 text-4xl font-extrabold leading-none text-cyan-900 lg:text-5xl xl:text-6xl sm:mb-3"><a href="#_">Upcoming Events</a></h1>
        <p class="text-lg font-medium text-gray-500 sm:text-2xl">This is a list of the upcoming events. We'll update it as needed.</p>
    </div>
    <div class="relative w-1/3 mt-16 mb-8">
        <n-carousel show-arrow autoplay>
            <n-carousel-item v-for="event in events">
                <div
                    class="relative flex flex-col flex-shrink-0 items-start justify-end overflow-hidden rounded-xl group w-full">
                    <a href="#_"
                       class="block w-full transition duration-300 ease-in-out transform bg-center bg-cover h-48 hover:scale-110"
                       :style="`background-image:url(${event.image})`">
                    </a>
                    <div
                        class="relative z-50 w-full h-64 overflow-hidden py-8 text-white bg-white bg-gradient-to-br from-cyan-900 via-cyan-800 to-pink-400 border-t-0 border-yellow-200 px-7">
                        <h2 class="mb-5 text-2xl font-bold"><a href="#_">{{ event.title }}</a></h2>
                        <p class="mb-2 text-lg font-normal text-purple-100 opacity-100">
                            {{event.description}}
                        </p>
                    </div>
                </div>
            </n-carousel-item>

            <template #dots="{ total, currentIndex, to }">
                <ul class="custom-dots">
                    <li
                        v-for="index of total"
                        :key="index"
                        :class="{ ['is-active']: currentIndex === index - 1 }"
                        @click="to(index - 1)"
                    />
                </ul>
            </template>
        </n-carousel>
    </div>
</template>

<script setup>
import {NCarousel} from 'naive-ui'

const events = [
    {title: 'Visitation to patients ho...', description:'We\'ll organize how to effectively coordinate visits', image:'/images/care.jpg'},
    {title: 'Awareness Creation', description:'What do we do and how do we affect you?', image:'/images/health.jpg'},
    {title: 'Fund Raising Ceremony', description:'We need to raise money for our building project, please support us with prayer and means', image:'/images/fund.jpg'},
    {title: 'Income generation seminar...', description:'Sourcing for means while at the same time caring for the sick is tiring...', image:'/images/fund.jpg'},
]
</script>

<style scoped>
.carousel-img {
    width: 100%;
    height: 240px;
    object-fit: cover;
}

.custom-arrow {
    display: flex;
    position: absolute;
    bottom: 25px;
    right: 10px;
}

.custom-arrow button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 28px;
    height: 28px;
    margin-right: 12px;
    color: #fff;
    background-color: rgba(255, 255, 255, 0.1);
    border-width: 0;
    border-radius: 8px;
    transition: background-color 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    cursor: pointer;
}

.custom-arrow button:hover {
    background-color: rgba(255, 255, 255, 0.2);
}

.custom-arrow button:active {
    transform: scale(0.95);
    transform-origin: center;
}

.custom-dots {
    display: flex;
    margin: 0;
    padding: 0;
    position: absolute;
    bottom: 20px;
    left: 20px;
}

.custom-dots li {
    display: inline-block;
    width: 12px;
    height: 4px;
    margin: 0 3px;
    border-radius: 4px;
    background-color: rgba(255, 255, 255, 0.4);
    transition: width 0.3s, background-color 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    cursor: pointer;
}

.custom-dots li.is-active {
    width: 40px;
    background: #fff;
}
</style>
