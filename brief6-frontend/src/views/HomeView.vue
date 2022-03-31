<template>
  <div class="home">
    <Sidebar />
  </div>
</template>

<script>
// @ is an alias to /src
import Sidebar from '@/components/Sidebar.vue'


export default {
  name: 'HomeView',
  components: {
    Sidebar
  }
}
</script>

