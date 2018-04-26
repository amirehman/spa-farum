
<template>
  <v-layout style=" padding: 15px;padding-top: 70px;">
    
    <side-navbar></side-navbar>
    
     <router-view></router-view>
    

    <app-footer></app-footer>
    
            
  </v-layout>
  
  
</template>



<script>
    
    import SideNavbar from './includes/SideNavbar'
    import AppFooter from './includes/AppFooter'
    import Login from './login/Login'
    import Dashboard from './Dashboard'
    
  export default {
    components: {
        SideNavbar,
        AppFooter,
        Login,
        Dashboard
    }
  }
</script>
