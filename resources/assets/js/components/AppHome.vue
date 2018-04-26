
<template>
  <v-layout style=" padding: 15px;padding-top: 70px;">
    
    <side-navbar></side-navbar>
    
    <div>
        <h1>Header one two</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis tenetur dicta repellendus quo enim, alias mollitia provident quaerat nemo quod dolorem. Mollitia porro debitis, magni accusantium, cumque dolores repudiandae quaerat! ipsum dolor sit amet, consectetur adipisicing elit. At eaque necessitatibus nesciunt harum praesentium nisi deserunt fugit delectus quibusdam numquam ad, similique inventore, dolore commodi cum cupiditate consectetur ab facilis.</p>
    </div>    
    

    <app-footer></app-footer>
    
            
  </v-layout>
  
  
</template>



<script>
    
    import SideNavbar from './includes/SideNavbar'
    import AppFooter from './includes/AppFooter'
    
  export default {
    components: {
      SideNavbar,
      AppFooter
    }
  }
</script>
