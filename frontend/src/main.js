import { createApp } from 'vue'
import { createPinia } from 'pinia'

import App from './App.vue'
import router from './router'

import VueGoogleMaps from '@fawmi/vue-google-maps'

import './assets/main.css'

const app = createApp(App)

app.use(createPinia())
app.use(router)

app.use(VueGoogleMaps,{
    load: {
        key: 'AIzaSyDAAv0_V9FFSCoCdqnEwzKNjJQVHHMjz7E',
        libraries: "places",
    },
})

app.mount('#app')