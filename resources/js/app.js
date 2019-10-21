require("./bootstrap");
window.Vue = require("vue");

Vue.component("dashboard", require("./components/Dashboard.vue").default);
Vue.component("pacientes", require("./components/Pacientes.vue").default);
Vue.component("modal", require("./components/ModalCreaUsuario.vue").default);
Vue.component("spinner", require("./components/Spinner.vue").default);
const app = new Vue({
    el: "#app",
    data: {
        menu: 0,
        showModal: false
    }
});
