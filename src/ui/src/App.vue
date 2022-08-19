<script setup>
</script>

<template>
  <div>
    <div id="nav">
      <router-link to="/">Home</router-link> |
      <router-link to="/signup">Signup</router-link> | 
      <router-link to="/login">Login</router-link> | 
      <router-link to="/todonotes">TODO Notes</router-link>
      <!-- Should only show if still logged in -->
      | <a href="#" onclick="console.log('logging out....todo'); return false;">Logout</a>
    </div>
    <router-view></router-view>
  </div>
</template>

<style>
.alignLeft {
  text-align: left;
}
</style>
