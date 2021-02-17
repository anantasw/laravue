<template>
    <div class="login">
        <login-form></login-form>
    </div>
</template>

<script>
import LoginForm from '../components/LoginForm';

export default {
    name: "Login",
    components: {
        LoginForm
    }
}
</script>

<style scoped>
    .login {
        display: flex;
        justify-content: center;
        margin-top: 250px;
    }
</style>