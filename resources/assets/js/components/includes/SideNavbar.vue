<template>
<div>
   
        
     <v-toolbar app fixed clipped-left>
      <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
      <v-toolbar-title>Icon Advertising LLC.</v-toolbar-title>
      
<v-spacer></v-spacer>
      <v-btn icon>
        <v-icon>search</v-icon>
      </v-btn>
      <v-btn icon>
        <v-icon>favorite</v-icon>
      </v-btn>
      
    <v-menu transition="slide-y-transition" bottom>      
        <v-btn icon slot="activator" >
            <v-icon>more_vert</v-icon>
        </v-btn>
        <v-list>
         <v-list-tile @click="">
           <v-list-tile-title> Profile </v-list-tile-title>
          </v-list-tile>
         <v-list-tile @click="">
           <v-list-tile-title> Create New Project </v-list-tile-title>
          </v-list-tile>
         <v-list-tile @click="">
           <v-list-tile-title> Logout </v-list-tile-title>
          </v-list-tile>
        </v-list>
    </v-menu>      
      
    </v-toolbar>
           
    <v-navigation-drawer v-model="drawer" absolute >
     
      <v-list class="pa-1">
        <v-list-tile avatar>
          <v-list-tile-avatar>
            <img src="https://randomuser.me/api/portraits/men/85.jpg" >
          </v-list-tile-avatar>
          <v-list-tile-content>
            <v-list-tile-title>John Leider</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
      </v-list>
      
      <v-list class="pt-0" dense>
        <v-divider></v-divider>
        
         <v-list-tile>
          <v-list-tile-action>
            <v-icon>dashboard</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>Dashboard</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
        
         <v-list-tile>
          <v-list-tile-action>
            <v-icon>dashboard</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>Projects</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
        
         <v-list-tile>
          <v-list-tile-action>
            <v-icon>dashboard</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>Iconers</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
        
        
         <v-list-tile>
          <v-list-tile-action>
            <v-icon>dashboard</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>Announcments</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
        
<!--
         <v-list-tile v-for="item in items" :key="item.title" @click="">
          <v-list-tile-action>
            <v-icon>{{ item.icon }}</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>{{ item.title }}</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
        
-->
      </v-list>
    </v-navigation-drawer>     
</div>   
</template>
        
       


<script>
    
  export default {
    data () {
      return {
        drawer: null
//        items: [
//          { title: 'Home', icon: 'dashboard' },
//          { title: 'About', icon: 'question_answer' }
//        ]
      }
    }
  }
</script>
      