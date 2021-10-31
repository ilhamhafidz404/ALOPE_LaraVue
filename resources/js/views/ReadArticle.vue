<template>
    <div>
        <section
            class="py-5 text-start header text-white position-relative"
            style="height: 400px"
        ></section>
        <div
            class="container-fluid position-relative"
            style="width: 90%; margin-top: -310px"
        >
            <div
                class="p-4 p-md-5 text-white rounded blog-thumb-header"
                style="
                    background-image: url(https://images.unsplash.com/photo-1593642532009-6ba71e22f468?ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1169&q=80);
                "
            ></div>
            <div class="row g-5 mt-4">
                <div class="col-md-8 mt-0">
                    <div class="card shadow-sm border-0 bg-white p-4">
                        <article class="blog-post">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h2 class="blog-post-title">judul</h2>
                                </div>
                                <div>
                                    <i class="fas fa-share text-muted me-3"></i>
                                    <a href="" class="text-danger fs-6">
                                        <i class="fas fa-heart"></i>
                                        4
                                    </a>
                                </div>
                            </div>
                            <ul class="p-0 d-flex">
                                <li class="me-2">
                                    <span
                                        class="badge"
                                        style="background-color: salmon"
                                    >
                                        <i class="fab fa-laravel me-1"></i>
                                        tag
                                    </span>
                                </li>
                            </ul>
                            <hr />
                            kontent blog Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Aperiam quae ab labore laudantium
                            quos eum, fuga cum mollitia veniam doloremque
                            dignissimos a ipsum, sed dolores consequatur porro
                            libero architecto optio.
                            <br /><br />
                            <hr />
                            <div class="article-footer">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img
                                            src=""
                                            alt="Profile penulis"
                                            class="w-100 rounded-circle mt-2"
                                        />
                                    </div>
                                    <div class="col-md-10">
                                        <h5 class="mb-1">Admin</h5>
                                        <small class="text-muted">
                                            Tentang penulis Lorem ipsum dolor
                                            sit amet, consectetur adipisicing
                                            elit. Dolore sequi similique
                                            consectetur pariat
                                        </small>
                                        <ul class="d-flex mb-0 p-0 mt-3">
                                            <li class="me-3">
                                                <a href="">
                                                    <small>
                                                        Profile Penulis
                                                    </small>
                                                </a>
                                            </li>
                                            <li class="me-3">
                                                <a href="">
                                                    <small>
                                                        Karya Lainnya
                                                    </small>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <hr />
                        <section class="comments" aria-labelledby="comment">
                            <Disqus />
                        </section>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="position-sticky" style="top: 2rem">
                        <div
                            class="
                                p-3
                                mb-3
                                shadow-sm
                                rounded
                                text-white
                                serie-blog-info
                            "
                        >
                            <h4 class="fst-italic">Category</h4>
                            <p class="mb-0">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Tenetur velit culpa provident
                                quae quisquam. Alias, culpa iusto. Quisquam
                                totam facilis quae similique vitae ullam, quod,
                                aspernatur debitis illo optio hic.
                            </p>
                        </div>

                        <div class="mt-4">
                            <h4 class="fst-italic">Blog Serupa</h4>
                            <div class="list-group mt-3">
                                <a
                                    href=""
                                    class="
                                        list-group-item list-group-item-action
                                    "
                                >
                                    <h5 class="mb-1">judul</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            article: [],
        };
    },

    mounted() {
        this.getArticle();
    },

    methods: {
        async getArticle() {
            let response = await axios.get(
                "/api/article/" + this.$route.params.articleSlug
            );
            this.article = response.data.data;
        },
    },
};
</script>

<style></style>
