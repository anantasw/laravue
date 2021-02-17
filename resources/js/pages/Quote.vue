<template>
    <div>
        <navbar></navbar>
        <div class="container">
            <card></card>
        </div>
    </div>
</template>

<script>
import Navbar from '../components/Navbar';
import Card from '../components/Card';

export default {
    name: "Quote",
    components: {
        Navbar,
        Card
    },
}
</script>

<style scoped>
    .container {
        display: flex;
        justify-content: center;
    }
</style>