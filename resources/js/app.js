import axios from "axios";
window.axios = axios;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

try {
    window.Popper = require("popper.js").default;
    window.$ = window.jQuery = require("jquery");

    require("bootstrap");
} catch (e) {}

// window.Vue = require('vue').default;
import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);
import routes from "./routes/routes";

Vue.component(
    "navbar-component",
    require("./components/NavbarComponent.vue").default
);
Vue.component(
    "header-component",
    require("./components/HeaderComponent.vue").default
);
Vue.component(
    "footer-component",
    require("./components/FooterComponent.vue").default
);

const app = new Vue({
    el: "#app",
    router: new VueRouter(routes),
});
