<template>
    <v-layout>
        <v-flex xs12 sm6 offset-sm3>
            <!-- ログインするワークスペースがまだ発見していない -->
            <div v-if="targetWorkspace === null">
                <v-form @submit.prevent="selectWorkspace">
                    <v-card>
                        <v-card-title primary-title>
                            <div>
                                <h3 class="headline mb-3">ワークスペースにサインインする</h3>
                                <p>​参⁠加⁠し⁠て⁠い⁠る⁠ワ⁠ー⁠ク⁠ス⁠ペ⁠ー⁠ス⁠の​Slack URL を入力してください。</p>

                                <v-layout>
                                    <v-text-field
                                            v-model="form.workspaceUrl"
                                            type="text"
                                            required
                                            placeholder="your-workspace-url"
                                            outline
                                    ></v-text-field>
                                    <span id="zlackcom">.zlack.com</span>
                                </v-layout>
                            </div>
                        </v-card-title>

                        <v-card-actions>
                            <v-btn
                                    block
                                    color="success"
                                    dark
                                    type="submit"
                            >続行する&nbsp;<v-icon>arrow_right_alt</v-icon></v-btn>
                        </v-card-actions>
                    </v-card>
                </v-form>
            </div>

            <!-- ログインするワークスペースが発見済み -->
            <div v-else>
                <v-form @submit.prevent="login">
                    <h2>ワークスペース : {{ targetWorkspace.name }}にログインする</h2>

                    <v-text-field
                            v-model="loginForm.email"
                            type="email"
                            label="メールアドレス"
                            required
                    ></v-text-field>

                    <v-text-field
                        v-model="loginForm.password"
                        type="password"
                        label="パスワード"
                        required
                    ></v-text-field>

                    <v-btn
                        block
                        color="green"
                        type="submit"
                    >ログイン</v-btn>
                </v-form>
            </div>
        </v-flex>
    </v-layout>
</template>

<script>
export default {
  data(){
    return {
      form: {
        workspaceUrl: null,
      },
      targetWorkspace: null,
      errors: {},

      // ログイン用
      loginForm: {
        email: null,
        password: null
      }
    }
  },
    methods: {
        selectWorkspace() {
            axios.post('/api/auth/selectWorkspace', this.form)
              .then(res => this.targetWorkspace = res.data.data)
              .catch(error => console.log(error));
        },
        login() {
            axios.post('/api/auth/login', this.loginForm)
                .then(res => console.log(res.data))
                .error(error => console.log(error.response.data))
        }
    }
}
</script>

<style>
#zlackcom {
    font-size: 30px;
    padding-bottom: 0px;
}
</style>
