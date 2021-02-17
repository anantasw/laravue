<template>
    <div class="navbar">
        <button @click="logoutHandler">Logout</button>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        name: "Navbar",
        methods: {
            logoutHandler() {
                axios.post('/api/v1/logout', {
                    token: this.$store.state.token
                })
                .then(response => {
                    this.$store.commit('clearToken');
                    this.$router.push('/');
                })
            }
        }
    }
</script>

<style scoped>
    .navbar {
        display: fixed;
        width: 100%;
        height: 50px;
        background-color: salmon;
        top: 0;
        left: 0;
    }
</style>