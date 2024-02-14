import { createApp, h } from "vue"
import { createInertiaApp } from '@inertiajs/vue3'
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers"
import { createI18n } from 'vue-i18n'
import messages from '@/lang/messages.js'

  createInertiaApp({
    title: (title) => 'Natalia Sioridze',
    progress: false,
    resolve: (name) =>
      resolvePageComponent(
        `./Pages/${name}.vue`,
        import.meta.glob("./Pages/**/*.vue")
      ),
    setup({ el, App, props, plugin }) {

      let pathSegment = window.location.pathname.split('/')
      if(pathSegment[1].length == 2) {
        //localStorage.setItem('langCode', pathSegment[1])
      }
      localStorage.setItem('langCode', pathSegment[1])
      localStorage.langCode ? '' : localStorage.setItem('langCode', 'en')      
      //localStorage.clear();

      const i18n = createI18n({
        locale: localStorage.getItem('langCode') || 'en',
        legacy: false,
        fallbackLocale: localStorage.getItem('langCode') || 'en',
        messages,
      })
      

      return createApp({ render: () => h(App, props) })
        .use(plugin)
        .use(i18n)
        //.mixin({ methods: { route } })
        .mount(el);
    },
  });