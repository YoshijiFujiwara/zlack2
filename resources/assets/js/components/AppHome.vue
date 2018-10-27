<template>
    <div>
        <navigation></navigation>
        <toolbar></toolbar>

        <v-content>
            <v-container fluid fill-height>
                <router-view></router-view>
            </v-container>
        </v-content>
    </div>
</template>

<script>
    import Navigation from './Navigation';
    import Toolbar from './Toolbar';

    export default {
      components: {Navigation, Toolbar},

    }
</script>

<style>

</style>