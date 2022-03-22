<template>
    <div>
        <HeaderComponent />
        <div style="height: 200vh"></div>
        <FooterComponent />
        <router-view />
    </div>
</template>

<script>
import FooterComponent from "./components/Layouts/FooterComponent";
import HeaderComponent from "./components/Layouts/HeaderComponent";
export default {
    name: "App",
    components: {HeaderComponent, FooterComponent}
}
</script>

<style scoped>

</style>
