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
import VueDisqus from "vue-disqus";

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
    "glider-component",
    require("./components/GliderComponent.vue").default
);
Vue.component(
    "testimoni-component",
    require("./components/TestimoniComponent.vue").default
);
Vue.component(
    "articlecard-component",
    require("./components/card/ArticleCardComponent.vue").default
);
Vue.component(
    "videocard-component",
    require("./components/card/VideoCardComponent.vue").default
);
Vue.component(
    "seriecard-component",
    require("./components/card/SerieCardComponent.vue").default
);

Vue.component(
    "footer-component",
    require("./components/FooterComponent.vue").default
);

Vue.use(VueDisqus, {
    shortname: "alope-com",
});

const app = new Vue({
    el: "#app",
    router: new VueRouter(routes),
});
