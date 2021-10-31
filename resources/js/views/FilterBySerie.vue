<template>
    <div>
        <section class="py-5 text-start header text-white position-relative">
            <div class="container-fluid">
                <a
                    class="
                        py-1
                        px-3
                        mt-5
                        header-hot
                        d-flex
                        justify-content-between
                        align-items-center
                        text-white
                        mb-4
                        overflow-auto
                    "
                >
                    <div>
                        <ul class="d-flex">
                            <li class="me-3">
                                <span
                                    class="badge"
                                    style="background-color: salmon"
                                >
                                    <i class="fab fa-laravel"></i>
                                    tag
                                </span>
                            </li>
                        </ul>
                    </div>
                    <i class="fas fa-chevron-right"></i>
                </a>
                <h1 class="fw-light text-uppercase mt-3">
                    Explore Serie
                    <span class="fw-bold serie-name position-relative"
                        >Laravel</span
                    >
                </h1>
                <small class="lead text-white mt-4">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Perferendis eos explicabo corporis. Pariatur veniam optio
                    veritatis eveniet error labore incidunt, amet quaerat
                    repellat id voluptatum tempora rerum, eligendi reprehenderit
                    quas?
                </small>
                <ul class="d-flex align-items-center mt-4">
                    <li class="me-4">
                        <i class="fas fa-clock me-1"></i>
                        12 Januari 2021
                    </li>
                    <li class="me-4">
                        <i class="fas fa-play me-1"></i>
                        13
                        <span class="ms-1"> Episode </span>
                    </li>
                    <li class="me-4">
                        <i class="fas fa-door-open me-1"></i>
                        <span class="text-warning text-uppercase fw-bold">
                            development
                        </span>
                    </li>
                    <li class="me-4">
                        <i class="fas fa-users me-1"></i>
                        beginer
                    </li>
                </ul>
            </div>
            <br /><br /><br />
        </section>
        <div class="container-fluid series-content">
            <div class="card shadow">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingVideo">
                            <button
                                class="accordion-button"
                                data-bs-toggle="collapse"
                                data-bs-target="#video"
                            >
                                Video
                            </button>
                        </h2>
                        <div
                            id="video"
                            class="accordion-collapse collapse show"
                        >
                            <div class="accordion-body">
                                <div class="row">
                                    <div
                                        class="col-sm-12 col-md-6 col-lg-4"
                                        v-for="video in videos"
                                        :key="video.slug"
                                    >
                                        <a href="">
                                            <div
                                                class="
                                                    card
                                                    border-0
                                                    bg-transparent
                                                    position-relative
                                                    m-auto
                                                    mb-4
                                                "
                                                style="width: 90% !important"
                                            >
                                                <span
                                                    class="
                                                        badge
                                                        bg-danger
                                                        position-absolute
                                                    "
                                                    style="top-0"
                                                >
                                                    Video
                                                </span>
                                                <div
                                                    class="
                                                        rounded
                                                        video-thumb
                                                        w-100
                                                    "
                                                    style="
                                                        background-image: url(https://images.unsplash.com/photo-1593642632559-0c6d3fc62b89?ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1169&q=80);
                                                    "
                                                ></div>
                                                <div class="card-body">
                                                    <h4
                                                        class="
                                                            card-title
                                                            my-1
                                                            text-dark
                                                        "
                                                    >
                                                        title
                                                    </h4>
                                                    <div
                                                        class="
                                                            d-flex
                                                            justify-content-between
                                                        "
                                                    >
                                                        <div>
                                                            <small href="">
                                                                #{category
                                                            </small>
                                                        </div>
                                                        <div>
                                                            <span
                                                                class="
                                                                    badge
                                                                    bg-secondary
                                                                "
                                                            >
                                                                Episode 10
                                                            </span>
                                                            <span
                                                                class="
                                                                    badge
                                                                    bg-secondary
                                                                "
                                                            >
                                                                45min
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headerBlog">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#blog"
                            >
                                Blog
                            </button>
                        </h2>
                        <div id="blog" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-4 mb-4">
                                        <a href="">
                                            <div
                                                class="
                                                    position-relative
                                                    card
                                                    shadow-sm
                                                "
                                            >
                                                <span
                                                    class="
                                                        badge
                                                        bg-warning
                                                        text-dark
                                                        position-absolute
                                                    "
                                                    style="top-0"
                                                >
                                                    Blog
                                                </span>
                                                <div
                                                    class="blog-serie w-100"
                                                    style="
                                                        background-image: url(https://images.unsplash.com/photo-1593642632559-0c6d3fc62b89?ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1169&q=80);
                                                    "
                                                ></div>
                                                <div class="card-body pt-1">
                                                    <h5
                                                        class="
                                                            card-title
                                                            mb-4
                                                            text-dark
                                                        "
                                                    >
                                                        judul
                                                    </h5>
                                                    <div
                                                        class="
                                                            d-flex
                                                            align-items-center
                                                            justify-content-between
                                                        "
                                                    >
                                                        <div>
                                                            <img
                                                                src=""
                                                                alt="profile"
                                                                class="
                                                                    rounded-circle
                                                                    writer-img
                                                                "
                                                            />
                                                            <small
                                                                class="
                                                                    text-muted
                                                                    ms-2
                                                                "
                                                            >
                                                                admin
                                                            </small>
                                                        </div>
                                                        <small
                                                            class="text-muted"
                                                        >
                                                            14 jan
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
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
            videos: [],
        };
    },

    mounted() {
        this.getVideos();
    },

    methods: {
        async getVideos() {
            let response = await axios.get(
                "/api/serie/" + this.$route.params.serieSlug
            );
            this.videos = response.data.data;
        },
    },
};
</script>

<style></style>
