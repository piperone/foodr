<template>
    <section class="text-gray-600 body-font">
        <h1>Welcome to Foodr</h1>
        <h2>Best recipe app on the web</h2>
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">DISHES</h2>
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">View our selection of delish dishes</h1>
            </div>
            <div class="flex flex-wrap -m-4">
                <Dish v-for="dish in dishes" :key="dish" :dish="dish" />
            </div>
        </div>
    </section>
</template>

<script>
import Dish from './Dish.vue';

export default {
    name: 'Body',
    components: { Dish },
    props: ['dishes'],
}
</script>
