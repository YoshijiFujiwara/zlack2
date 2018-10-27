<template>
    <v-toolbar color="amber" app absolute clipped-left>
        <v-toolbar-side-icon @click.native="drawer = !drawer"></v-toolbar-side-icon>
        <span class="title ml-3 mr-5"><router-link to="/" class="white--text">zlack&nbsp;</router-link></span>
        <v-text-field
                solo-inverted
                flat
                hide-details
                label="Search"
                prepend-inner-icon="search"
        ></v-text-field>
        <v-spacer></v-spacer>
        <router-link to="/login" class="white--text">ログイン</router-link>
        <router-link to="/search_workspace" class="white--text">ワークスペースを探す</router-link>
    </v-toolbar>
</template>

<script>
export default {

}
</script>

<style>

</style>
