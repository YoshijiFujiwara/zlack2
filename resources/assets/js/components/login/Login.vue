<template>
    <div>
        <v-form @submit.prevent="login">
            <v-text-field
                    v-model="form.email"
                    type="email"
                    label="メールアドレス"
                    required
            ></v-text-field>

            <v-text-field
                    v-model="form.password"
                    type="password"
                    label="パスワード"
                    required
            ></v-text-field>

            <v-btn
                    color="green"
                    type="submit"
            >ログイン</v-btn>

            <router-link to="/signup">
                <v-btn color="blue">サインアップ</v-btn>
            </router-link>
        </v-form>
    </div>
</template>

<script>
export default {
  data(){
    return {
      form: {
        email: null,
        password: null
      }
    }
  },
  created() {

  },
  methods: {

  }
}
</script>

<style>

</style>
