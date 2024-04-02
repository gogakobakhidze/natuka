<template>
    <!-- Locale Selector -->
    <div class="space-y-1">
        <button @click="responsiveSettingsLanguage = !responsiveSettingsLanguage">
            {{ $t("nav.language_full") }}
        </button>
        <button v-if="responsiveSettingsLanguage" @click="setLocale('en')">
            <p class="ml-4">English</p>
        </button>
        <button v-if="responsiveSettingsLanguage" @click="setLocale('ge')">
            <p class="ml-4">Georgia</p>
        </button>
        <button v-if="responsiveSettingsLanguage" @click="setLocale('de')">
            <p class="ml-4">Deutsche</p>
        </button>
    </div>
</template>

<script>
  import { ref } from 'vue'
//   import { router } from '@inertiajs/vue3'

export default {
    setup() {
        return {
            responsiveSettingsLanguage: ref(false)
        }
    },
    methods: {
        setLocale(locale) {
            // router.post("/api/locale", {
            //   'language': locale,
            // })
            this.$i18n.locale = locale
            this.responsiveSettingsLanguage = false

            try { 
                window.location = window.location.toString().replace('/'+localStorage.langCode, '/'+locale)   
            } catch(e) {  
                console.log(e)
            }           
            
            localStorage.setItem('langCode', locale)
        }
    }
}
</script>