import Home from "../views/Home";
import Blog from "../views/Blog";
import Video from "../views/Video";
import Serie from "../views/Serie";
import Topic from "../views/Topic";
export default {
    mode: "history",
    linkActiveClass: "active fw-bold",

    routes: [
        { path: "/", name: "home", component: Home, props: true },
        { path: "/blog", name: "blog", component: Blog, props: true },
        { path: "/video", name: "video", component: Video },
        { path: "/serie", name: "serie", component: Serie },
        { path: "/topic", name: "topic", component: Topic },
    ],
};
