<template>
    <div>
        <nav class="fixed-top navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <router-link to="/" class="navbar-brand" >MES STATS</router-link>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 me-5 mb-lg-0">
                        <li class="nav-item dropdown dropstart">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                Menu
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">MON EQUIPE</a></li>
                                <li><a class="dropdown-item" href="#">STATS D'EQUIPE</a></li>
                                <li><a class="dropdown-item" href="#">MES STATS</a></li>
                                <li><a class="dropdown-item" href="#">PROCHAINE RENCONTRE</a></li>
                                <li><a class="dropdown-item" href="#">DEFINIR LES ADVERDAIRES</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a @click="toTop" class="btn">BACK TO TOP</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
export default {
    name: "HeaderComponent",
    methods: {
        // defiler le scroll vers le haut
        toTop() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        }
    }
}
</script>

<style scoped>
ul.navbar-nav li.dropstart:hover ul.dropdown-menu {
    display: block;
}
.dropdown-item {
    font-size: 12px;
}
</style>
