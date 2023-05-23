import AppLayout from '@/layouts/AppLayout.vue'
import {default as DefaultLayout} from '@/layouts/default.vue'
import { createInertiaApp } from '@inertiajs/vue3'
import { createApp } from 'vue'
import { createPinia } from 'pinia'
import vuetify from '@/plugins/vuetify'
import { loadFonts } from '@/plugins/webfontloader'
import '@/styles/styles.scss'
import '@core/scss/index.scss'

loadFonts()
createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    console.log(pages);
    const page = pages[`./Pages/${name}.vue`]

    // eslint-disable-next-line @typescript-eslint/ban-ts-comment
    // @ts-expect-error
    page.default.layout = DefaultLayout

    return page
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(vuetify)
      .use(createPinia)
      .mount(el)
  },
})
