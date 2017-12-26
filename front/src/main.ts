import Vue from 'vue'
import App from './App';

new Vue({
    el: document.querySelector('#app') as Element,
    components: {App},
    render : h => h(App)
});