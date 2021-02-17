<template>
    <div>
        <div class="card">
            <ul v-if="quotes">
                <li v-for="q in quotes" :key="q.key">{{ q.data }}</li>
            </ul>
            <p v-else>Loading...</p>
        </div>
        <button @click="quoteHandler">Refresh Quote</button>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        name: "Card",

        data() {
            return {
                quotes: ''
            }
        },

        mounted() {
            this.authCheckingHandler(),
            this.quoteHandler()
        },
        
        methods: {
            authCheckingHandler() {
                if (this.$store.state.token !== '') {
                    axios.post('/api/v1/check_token', {
                        token: this.$store.state.token
                    })
                    .then(response => {
                        console.log(response);
                    })
                    .catch(error => {
                        this.$store.commit('clearToken');
                        this.$router.push('/');
                    })
                } else {
                    this.$router.push('/');
                }
            },
            quoteHandler() {
                this.quotes = '';
                
                axios.get('api/v1/quote', {
                    headers: {
                        accept: 'application/json',
                        Authorization: `Bearer ${this.$store.state.token}`
                    }
                })
                .then(response => {
                    this.quotes = response.data.quotes;
                    // console.log(response.data.quotes);
                })
                .catch(error => {
                    console.log(error);
                })
            }
        }
    }
</script>

<style scoped>
    .card {
        margin-top: 50px;
        width: 500px;
        height: 250px;
        border: 1px solid black;
        border-radius: 5px;
    }
</style>