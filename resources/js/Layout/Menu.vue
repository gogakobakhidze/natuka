<script setup>
  import { Head } from '@inertiajs/vue3'
  import { Link } from '@inertiajs/vue3'
  import LangSwitch from './LangSwitch.vue'

let locale = localStorage.getItem('langCode')
  
</script>

<template>
  <Head>
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
  </Head>
  <main>    
    
    <div class="menu-container">

      <div class="menu-name">
        <Link :href="'/'+locale">NATALIA SIORIDZE</Link>
      </div>

      <div class="menu-links">
        <header>
          <!-- <Link :href="'/'+locale">Home</Link> <br /> -->
          <Link :href="'/'+locale+'/about'">{{ $t("menu.about") }}</Link> <br />
          <Link :href="'/'+locale+'/portfolio/1/'">{{ $t("menu.portfolio") }}</Link> <br />
          <!-- <Link :href="'/'+locale+'/item/this-is-name/1/'">{{ $t("menu.portfolio") }}</Link> <br /> -->
          <Link :href="'/'+locale+'/contact'">{{ $t("menu.contact") }}</Link>
        </header>
      </div>

      <div class="lang-switcher">
        <LangSwitch></LangSwitch>
      </div>

      <div class="menu-logo">DO IT</div>

    </div>
    
    <div class="wrapper">
      <article>
        <slot />
      </article>
    </div>
  </main>
</template>

<style scoped lang="scss">
main {
  display:flex;
  justify-content: flex-start;
  flex-wrap: nowrap;
  .menu-container{
    width: 380px;
    padding-right: 50px;
    text-align: right;
    .menu-name {
      margin-top: 100px;
      a {
        text-decoration: none;
        color: #343434;
        font-size: 44px;
      }
    }
    .menu-links {
      margin-top: 65px;
      a {
        font-size: 18px;
        text-decoration: none;
        color: #000000;
        display: inline-block;
        margin-top: 30px;
      }
    }
    .lang-switcher {
      margin-top: 50px;
      div {
        button:first-child {}
        button:not(:first-child) {}
      }
    }
    .menu-logo {
      margin-top: 20px;
      text-align: center;
    }
  }
  .wrapper {
    width: calc(100% - 430px);
  }
}
</style>