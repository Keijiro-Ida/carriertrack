import './bootstrap';
import { createApp } from 'vue';

const app = createApp({});

import ApplicationList from './components/ApplicationList.vue';
app.component('application-list', ApplicationList);

app.mount('#app');
