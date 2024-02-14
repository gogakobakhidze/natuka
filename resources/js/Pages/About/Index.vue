<script setup>
  import { Head } from '@inertiajs/vue3'
  import Menu from '../../Layout/Menu.vue'

  defineProps({ data: Object }) 
</script>

<template>
  <Menu>
    <Head>
      <title>This is about us page</title>
      <meta name="description" content="Your page description">
    </Head>

    <div class="container">
      <div class="text">{{ data.Text }}</div>
      <div class="img"><img :src="data.Image" /></div>
    </div>

  </Menu>
</template>

<style scoped lang="scss">
.container {
  width: calc(100% - 380px);
  max-width: 820px;
  position: relative;
  .text {
    color: #343434;
    font-size: 14px;
    line-height: 21px;
    padding-top: 195px;
  }
  .img {
    width: 525px;
    height: 525px;
    position: absolute;
    z-index: 10; 
    top: 0;
    left: 525px;
    img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
  }
}
</style>