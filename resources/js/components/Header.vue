<template>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">


            <router-link class="navbar-brand" :to="{name:'home'}">Logo</router-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <router-link class="nav-link" :to="{name:'home'}">Home </router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" :to="{name:'category-list'}">Product Category</router-link>
                </li>
                        <li class="nav-item" v-if="!authenticated">
                    <router-link class="nav-link" :to="{name:'login'}">Login</router-link>
                </li>

                <li class="nav-item" v-else>
                 <a href="#" @click.prevent="signOut">Sign out</a>
                </li>



                </ul>

            </div>

        </div>
</nav>
</template>

<script>
export default {
    mounted() {
            console.log('Header mounted.')
        }
}
</script>

<style>

</style>
