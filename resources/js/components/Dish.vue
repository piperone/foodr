<template>
    <div class="p-4 md:w-1/3">
        <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
            <div class="flex items-center mb-3">
                <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>
                </div>
                <h2 class="text-gray-900 text-lg title-font font-medium">{{ dish.name }}</h2>
            </div>

            <div class="flex-grow">
                <p class="leading-relaxed text-base">{{ dish.description }}</p>

                <ul class="my-4 text-sm text-gray-400">
                    <li v-for="ingredient in dish.ingredients">
                        {{ ingredient.name }}
                    </li>
                </ul>

                <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Dish',
    props: ['dish']
}
</script>
