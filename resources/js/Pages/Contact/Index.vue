<script setup>
  import { Head } from '@inertiajs/vue3'
  import Menu from '../../../js/Layout/Menu.vue'

  defineProps({ data: Object })
</script>

<template>
  <Menu>
    <Head>
      <title>This is contact page</title>
      <meta name="description" content="Your page description">
    </Head>
    
    
    <div class="container">
      <div class="soc-icons">
        <div class="soc-icon"><a :href="data.Fb" target="_blank">Facebook</a></div>
        <div class="soc-icon"><a :href="data.Ins" target="_blank">Instagram</a></div>
        <div class="soc-icon"><a :href="data.Ln" target="_blank">Linkedin</a></div>
        <div class="soc-icon"><a :href="data.Be" target="_blank">Behance</a></div>
      </div>

      <div class="phone-icons">
        <div class="phone"><span>{{ data.Phone }}</span></div>
        <div class="email"><span>{{ data.Email }}</span></div>
      </div>
    </div>
  </Menu>
</template>

<style scoped lang="scss">
.container {
  margin-top: 185px;
  .soc-icons {
    font-size: 24px;
    .soc-icon {
      margin-top: 30px;
      a {}
    }
  }  
  .phone-icons {
    margin-top: 50px;
    .phone {}
    .email {}
  }
}
</style>