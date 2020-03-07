<template>
    <div>
        <h1>Post Details</h1>
            <h2>Title: {{posts.title}}</h2>
            <h1><router-link :to="{ name: 'detail' ,params: {post_id: posts.id}}">Edit</router-link></h1>
            <p>{{posts.excerpt}}</p>
    </div>
</template>

<script>
    export default {
        props:{
            post_id:{
                required: true,
            }
        },
        data(){
            return {
                posts: '',
                meta: null,
                links: null,
                url : `/api/v1/post/${this.post_id}`
            };
        },
        created() {
            axios.get(this.url).then(this.init_data_handler);
            console.log(this.$route.params.post_id)
        },
        methods: {
            init_data_handler (response) {
                this.posts = response.data.data;
                this.meta = response.data.meta;
                this.links = response.data.links;
            }
        }
    };
</script>

<style scoped>

</style>
