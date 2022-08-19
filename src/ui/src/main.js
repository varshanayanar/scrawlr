import { createApp, h } from 'vue'
import './style.css'
import App from './App.vue'
import router from '@/router'


// 5. Create and mount the root instance.
const app = createApp(App)

app.use(router)

app.mount('#app')

// Now the app has started!