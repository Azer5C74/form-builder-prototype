import { createApp } from 'vue'
import { createPinia } from 'pinia'
import { plugin as FormKit, defaultConfig } from '@formkit/vue'
import BootstrapVue3 from 'bootstrap-vue-3'
import App from './App.vue'

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue-3/dist/bootstrap-vue-3.css'

const formKitConfig = defaultConfig({
  theme: 'genesis'
})

const app = createApp(App)
  .use(createPinia())
  .use(FormKit, formKitConfig)
  .use(BootstrapVue3)

app.mount('#app')
