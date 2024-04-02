<script setup>
  import { Head } from '@inertiajs/vue3'
  import { Link } from '@inertiajs/vue3'
  import Menu from '../../Layout/Menu.vue'
  //import Pagination from '../../Layout/Pagination.vue'

  defineProps({ data: Object })
  let locale = localStorage.getItem('langCode')
</script>

<template>
  <Menu>
    <Head>
      <title>This is portfolio list page</title>
      <meta name="description" content="Your page description">
    </Head>
    
    <div class="list">
      <div class="list-box" v-for="item in data" :key="item.ID">
        <Link :href="'/'+locale+'/item/'+item.OriginalText+'/'+item.ID+'/'">
          <img :src="item.Icon" />
        </Link>
      </div>
    </div>
  </Menu>
</template>

<style scoped lang="scss">
.list {
  display:flex;
  justify-content: space-between;
  flex-wrap: wrap;
  .list-box {
    width: 405px;
    height: 405px;
    margin: 30px;
    object-fit: cover;
    border: #cccccc 1px solid;
    a {
      width: 100%;
      height: 100%;
      display: block;
      img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
    }
  }
}
</style>