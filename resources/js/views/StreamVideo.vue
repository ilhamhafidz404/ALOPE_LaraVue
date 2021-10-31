<template>
    <div>
        <section
            class="py-5 text-start header text-white position-relative"
            style="height: 400px"
        ></section>
        <div class="container-fluid" style="width: 90%; margin-top: -260px">
            <div class="card p-2">
                <!-- @if($video->isPremium) @if(auth()->user()->hasRole('premium'))
            <iframe width="100%" height="350px" src="{{$video->link}}"></iframe>
            @else -->
                <!-- <div class="p-4 bg-light">
                <h3>OOPS!!</h3>
                <p class="text-muted">
                    Video ini termasuk dalam list premium, <br />
                    Anda harus berlangganan jika ingin tonton video ini.
                </p>
                <a
                    href="https://api.whatsapp.com/send?phone=6283871352030&text=Hai%20saya%20ingin%20berlangganan%20di%20ALOPE"
                    class="btn btn-primary px-5 mt-4"
                >
                    <i class="fas fa-rocket me-2"></i>
                    Mulai Berlangganan
                </a>
            </div>
            @endif @else -->
                <iframe
                    width="100%"
                    height="350px"
                    src="https://www.youtube.com/embed/N7iY-jNWeFc"
                ></iframe>
            </div>
            <div class="mt-4">
                <div class="row">
                    <div class="col-md-7">
                        <div class="card mb-3 p-3 position-relative">
                            <div class="text-center">
                                <small>Serie Pembelajaran</small>
                                <h3 class="fw-bold mt-0 mb-1">kategory</h3>
                                <ul class="d-flex justify-content-center p-0">
                                    <li>
                                        <button
                                            class="
                                                btn btn-transparent
                                                text-primary
                                                px-1
                                                py-1
                                            "
                                            data-bs-toggle="popover"
                                            title="tag"
                                            data-bs-trigger="focus"
                                            data-bs-content="lorem  "
                                        >
                                            #tag
                                        </button>
                                    </li>
                                </ul>
                                <div
                                    class="
                                        d-flex
                                        align-items-center
                                        justify-content-center
                                        rounded
                                        py-4
                                        top-50
                                        position-absolute
                                    "
                                    style="
                                        width: 25px;
                                        height: 30px;
                                        right: -3px;
                                        transform: translateY(-50%);
                                        background-color: #36275d;
                                    "
                                >
                                    <a href="" class="text-white">
                                        <i
                                            class="
                                                fas
                                                fa-chevron-right
                                                py-3
                                                px-2
                                            "
                                        ></i>
                                    </a>
                                </div>
                                <div
                                    class="
                                        d-flex
                                        align-items-center
                                        justify-content-center
                                        rounded
                                        py-4
                                        top-50
                                        position-absolute
                                    "
                                    style="
                                        width: 25px;
                                        height: 30px;
                                        left: -3px;
                                        transform: translateY(-50%);
                                        background-color: #36275d;
                                    "
                                >
                                    <a href="" class="text-white">
                                        <i
                                            class="
                                                fas
                                                fa-chevron-left
                                                py-3
                                                px-2
                                            "
                                        ></i>
                                    </a>
                                </div>
                            </div>
                            <p
                                class="text-dark mt-3 mx-auto"
                                style="width: 90%"
                            >
                                deskripsi Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Atque, asperiores saepe amet
                                laudantium fugit ipsam assumenda dolorum
                                voluptate a soluta, recusandae officia. Fugit
                                reprehenderit sit maxime est tempora assumenda?
                                Sed.
                            </p>
                        </div>

                        <div
                            class="accordion position-relative"
                            id="accordionExample"
                        >
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button
                                        class="accordion-button"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#description"
                                    >
                                        Deskripsi
                                    </button>
                                </h2>
                                <div
                                    id="description"
                                    class="accordion-collapse collapse show"
                                >
                                    <div class="accordion-body">
                                        deskripsi video Lorem ipsum dolor sit,
                                        amet consectetur adipisicing elit. Autem
                                        nemo necessitatibus, veritatis aut
                                        deleniti voluptate placeat, perferendis
                                        dignissimos at ad provident sit
                                        repellat, nobis id optio mollitia
                                        commodi rem illo!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div
                            class="card p-3 mb-4 text-center position-relative"
                        >
                            <a
                                href=""
                                class="
                                    position-absolute
                                    start-0
                                    fs-5
                                    top-50
                                    text-muted
                                    ms-3
                                "
                                style="transform: translateY(-50%)"
                            >
                                <i class="fas fa-chevron-left"></i>
                            </a>
                            <h4 class="mt-2 mx-auto" style="max-width: 90%">
                                Judul video
                            </h4>
                            <a
                                href=""
                                class="
                                    position-absolute
                                    end-0
                                    fs-5
                                    top-50
                                    text-muted
                                    me-3
                                "
                                style="transform: translateY(-50%)"
                            >
                                <i class="fas fa-chevron-right"></i>
                            </a>
                            <small>Episode 1/10</small>
                        </div>
                        <div class="card shadow-sm p-0">
                            <div class="list-group p-0">
                                <a
                                    href="#"
                                    class="
                                        list-group-item list-group-item-action
                                        active
                                        d-flex
                                        justify-content-between
                                    "
                                    style="
                                        background: linear-gradient(
                                            -45deg,
                                            #821fc8,
                                            #23add1
                                        );
                                    "
                                    aria-current="true"
                                >
                                    <div
                                        style="width: 15%"
                                        class="
                                            d-flex
                                            align-items-center
                                            justify-content-center
                                        "
                                    >
                                        <div
                                            class="
                                                border
                                                rounded-circle
                                                d-flex
                                                align-items-center
                                                justify-content-center
                                            "
                                            style="width: 30px; height: 30px"
                                        >
                                            10
                                        </div>
                                    </div>
                                    <div class="ms-2" style="width: 85%">
                                        <h6 class="mb-1">Judul</h6>
                                        <small>
                                            <i class="fas fa-play me-1"></i>
                                            <span class="fw-bold">
                                                Diputar
                                            </span>
                                        </small>
                                    </div>
                                    <i class="fas fa-crown text-warning"></i>
                                </a>
                                <a
                                    href=""
                                    class="
                                        list-group-item list-group-item-action
                                        d-flex
                                        justify-content-between
                                    "
                                    aria-current="true"
                                >
                                    <div
                                        style="width: 15%"
                                        class="
                                            d-flex
                                            justify-content-center
                                            align-items-center
                                        "
                                    >
                                        <div
                                            class="
                                                border
                                                rounded-circle
                                                d-flex
                                                align-items-center
                                                justify-content-center
                                            "
                                            style="width: 30px; height: 30px"
                                        >
                                            10
                                        </div>
                                    </div>
                                    <div class="ms-2" style="width: 85%">
                                        <h6 class="mb-1">Judul Video</h6>
                                        <small>26 Min</small>
                                    </div>
                                    <i class="fas fa-crown text-warning"></i>
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
            video: [],
        };
    },

    mounted() {
        this.getVideo();
    },

    methods: {
        async getVideo() {
            let response = await axios.get(
                "/api/video/" + this.$route.params.videoSlug
            );
            this.video = response.data.data;
        },
    },
};
</script>

<style></style>
