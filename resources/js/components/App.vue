<template>
    <Header />
    <Body :dishes="dishes" />
    <Footer />
</template>

<script>
import Header from './Header.vue';
import Body from './Body.vue';
import Footer from './Footer.vue';

export default {
    name: 'App',
    components: {
        Header,
        Body,
        Footer
    },

    data() {
        return {
            dishes: [],
        }
    },

    mounted() {
        this.dishes = dishes;
    }
}
</script>
