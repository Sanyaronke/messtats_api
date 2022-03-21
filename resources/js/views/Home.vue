<template>
<div>
    <h1>LIST</h1>
    <pre>{{ users }}</pre>
</div>
</template>

<script>
export default {
    name: "Home",
    data() {
        return {
            users: [],
        };
    },
    methods: {
        async getAllUsers() {
            await axios.get('/api/users').then((res) => {
                this.users = res.data;
            }).catch((err) => {
                console.log(err)
            })
        }
    },
    mounted() {
        this.getAllUsers();
    }
}
</script>

<style scoped>

</style>
