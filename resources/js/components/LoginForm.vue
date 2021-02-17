<template>
    <div class="form">
    <h5>Please login here...</h5>
        <form>
            <input type="text" placeholder="Enter your email" v-model="credentials.email" required>
            <input type="password" placeholder="Enter your password" v-model="credentials.password" required>
            <button class="button" @click.prevent="loginHandler">Login</button>
        </form>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        name: "LoginForm",

        data() {
            return {
                credentials : {
                    email: '',
                    password: ''
                }
            }
        },

        mounted() {
            this.authCheckingHandler()
        },

        methods: {
            loginHandler() {
                axios.post('api/v1/login', this.credentials)
                .then(response => {
                    if (response.data.success) {
                        this.$store.commit('setToken', response.data.token);
                        this.$router.push('/quote')
                        // console.log(response.data);
                    }
                })
                .catch(error => {
                    console.log(error);
                })
            },

            authCheckingHandler() {
                if (this.$store.state.token !== '') {
                    axios.post('/api/v1/check_token', {
                        token: this.$store.state.token
                    })
                    .then(response => {
                        if (response) {
                            this.$router.push('/quote');
                        }
                    })
                    .catch(error => {
                        this.$store.commit('clearToken');
                    })
                }
            }
        }
        
    }
</script>

<style scoped>
    .form {
        width: 500px;
    }
</style>