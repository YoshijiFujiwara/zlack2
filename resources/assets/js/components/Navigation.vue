<template>
    <v-navigation-drawer
                v-model="drawer"
                fixed
                clipped
                class="grey lighten-4"
                app
        >
            <v-list
                    dense
                    class="grey lighten-4"
            >
                <template v-for="(item, i) in items">
                    <v-layout
                            v-if="item.heading"
                            :key="i"
                            row
                            align-center
                    >
                        <v-flex xs6>
                            <v-subheader v-if="item.heading">
                                {{ item.heading }}
                            </v-subheader>
                        </v-flex>
                        <v-flex xs6 class="text-xs-right">
                            <v-btn small flat>edit</v-btn>
                        </v-flex>
                    </v-layout>
                    <v-divider
                            v-else-if="item.divider"
                            :key="i"
                            dark
                            class="my-3"
                    ></v-divider>
                    <v-list-tile
                            v-else
                            :key="i"
                            @click=""
                    >
                        <v-list-tile-action>
                            <v-icon>{{ item.icon }}</v-icon>
                        </v-list-tile-action>
                        <v-list-tile-content>
                            <v-list-tile-title class="grey--text">
                                {{ item.text }}
                            </v-list-tile-title>
                        </v-list-tile-content>
                    </v-list-tile>
                </template>
            </v-list>
        </v-navigation-drawer>
</template>

<script>
  export default {
    data: () => ({
      drawer: null,
      items: [
        { icon: 'lightbulb_outline', text: '全スレッド' },
        { divider: true },
        { heading: 'チャンネル' },
        { icon: 'message', text: 'チャンネル1' },
        { icon: 'message', text: 'チャンネル2' },
        { divider: true },
        { heading: 'ダイレクトメッセージ' },
        { icon: 'sentiment_satisfied_alt', text: 'タナカ' },
        { icon: 'sentiment_satisfied_alt', text: 'フジワラ' },
        { divider: true },
        { icon: 'add', text: 'メンバーを招待する' },
        { icon: 'apps', text: 'APP' },
      ]
    }),
    props: {
      source: String
    }
  }
</script>

<style>

</style>
