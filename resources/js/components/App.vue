<template>
    <div>
        <h1>Vue SPA</h1>

        <p>
            <router-link :to="{ name: 'login' }">Login</router-link> |
            <router-link :to="{ name: 'posts' }">Posts</router-link> |
            <router-link :to="{ name: 'create' }">Post Create</router-link> |
            <router-link :to="{ name: 'detail' }">Post Detail</router-link>
        </p>

        <div class="container">
            <router-view></router-view>
        </div>
    </div>
</template>
<script>
    export default {}
</script>
