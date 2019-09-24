require("./bootstrap");

window.Vue = require("vue");

Vue.component("dashboard", require("./components/Dashboard.vue").default);
Vue.component("pacientes", require("./components/Pacientes.vue").default);

const app = new Vue({
    el: "#app",
    data: {
        menu: 0
    }
});
