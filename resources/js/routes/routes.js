import Home from "../views/Home";
import Article from "../views/Article";
import readArticle from "../views/ReadArticle";
import Video from "../views/Video";
import Serie from "../views/Serie";
import Topic from "../views/Topic";
export default {
    mode: "history",
    linkActiveClass: "active fw-bold",

    routes: [
        { path: "/", name: "home", component: Home, props: true },
        { path: "/article", name: "article", component: Article, props: true },
        {
            path: "/article/:articleSlug",
            name: "read.article",
            component: readArticle,
        },
        { path: "/video", name: "video", component: Video, props: true },
        { path: "/serie", name: "serie", component: Serie },
        { path: "/topic", name: "topic", component: Topic },
    ],
};
