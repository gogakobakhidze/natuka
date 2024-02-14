<script setup>
  import { Head } from '@inertiajs/vue3'
  import Menu from '../../Layout/Menu.vue'

  defineProps({ data: Object })
</script>

<template>
  <Menu>
    <Head>
      <title>This is portfolio detail page</title>
      <meta name="description" content="Your page description">
    </Head>
    
    <div class="container">
      <div class="title">{{ data.Name }}</div>
      <div class="text">{{ data.Description }}</div>
      <div class="icon"><img :src="data.Icon" /></div>
      <div class="image"><img :src="data.Image" /></div>
    </div>
  </Menu>
</template>

<style scoped lang="scss">
.container {
  margin-top: 185px;
  .title {
    font-size: 24px;
    color: #343434;
  }
  .text {
    font-size: 18px;
    margin-top: 30px;
  }
  .icon {
    width: 325px;
    display: inline-block;
    margin-top: 30px;
    img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
  }
  .image {
    width: 325px;
    display: inline-block;
    margin-top: 30px;
    img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
  }
}
</style>