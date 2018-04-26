<template>
         
          <v-flex xs12 sm8 md4 >
            <v-card class="elevation-12">
              <v-toolbar dark color="info">
                <v-toolbar-title>Login</v-toolbar-title>
              </v-toolbar>
              <v-card-text>
                <v-form @submit.prevent="login">
                  <v-text-field prepend-icon="person" v-model="form.email" label="Login" type="text" required></v-text-field>
                  <v-text-field prepend-icon="lock" v-model="form.password" label="Password" id="password" type="password" required></v-text-field>
                  <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn type="submit" color="info">Login</v-btn>
                  </v-card-actions>
                </v-form>
              </v-card-text>
            </v-card>
          </v-flex>
</template>

<script>
  export default {
    data(){
        return {
          drawer: null,
            form : {
                emial: null,
                password: null
            }
        }
        
  },
    props: {
      source: String
    },
      methods: {
          login() {
              User.login(this.form);
          }
      }
  }
</script>


<style scoped>
    .flex {
        margin: auto;
    }
</style>