<template>
    <v-container fruid style="padding: 0; margin: 0;">
        <v-layout row>
            <!-- サイドバー -->
            <v-flex sm3>
                <!-- ワークスペース名 -->
                <v-list subheader>
                    <v-subheader>ワークスペース名</v-subheader>
                </v-list>

                <!-- チャンネル名 -->
                <v-list subheader>
                    <v-list-tile>
                        <v-subheader>チャンネル</v-subheader>
                        <v-icon>edit</v-icon>
                    </v-list-tile>

                    <!-- サンプルチャンネル -->
                    <v-list-tile>
                        <v-list-tile-avatar>
                            #
                        </v-list-tile-avatar>
                        <v-list-tile-content>
                            サンプルチャンネル
                        </v-list-tile-content>
                    </v-list-tile>

                    <!-- サンプルチャンネル -->
                    <v-list-tile>
                        <v-list-tile-avatar>
                            #
                        </v-list-tile-avatar>
                        <v-list-tile-content>
                            サンプルチャンネル2
                        </v-list-tile-content>
                    </v-list-tile>
                </v-list>

                <!-- ダイレクトメッセージ -->
                <v-list subheader>
                    <v-list-tile>
                        <v-subheader>ダイレクトメッセージ</v-subheader>
                        <v-icon>edit</v-icon>
                    </v-list-tile>
                </v-list>

                <!-- メンバーの招待 -->
                <v-list subheader>
                    <v-list-tile>
                        <v-subheader>メンバーを招待する</v-subheader>
                        <v-list-tile-content>
                            ⊕
                        </v-list-tile-content>
                    </v-list-tile>
                </v-list>

                <!-- App -->
                <v-list>
                    <v-list-tile>
                        <v-subheader>APP</v-subheader>
                        <v-list-tile-content>
                            s
                        </v-list-tile-content>
                    </v-list-tile>
                </v-list>
            </v-flex>

            <!-- コンテンツ -->
            <v-flex sm9>
                <v-toolbar>
                    <v-toolbar-side-icon></v-toolbar-side-icon>
                    <v-toolbar-title>Title</v-toolbar-title>
                    <v-spacer></v-spacer>
                    <v-toolbar-items class="hidden-sm-and-down">
                        <v-btn flat>Link One</v-btn>
                        <v-btn flat>Link Two</v-btn>
                        <v-btn flat>Link Three</v-btn>
                    </v-toolbar-items>
                </v-toolbar>
            </v-flex>
        </v-layout>
    </v-container>
</template>

<script>
  export default {
    data () {
      return {

      }
    }
  }
</script>

<style>

</style>
