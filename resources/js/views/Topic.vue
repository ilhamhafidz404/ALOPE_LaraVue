<template>
    <div>
        <section class="py-5 text-start header text-white position-relative">
            <div class="container-fluid pb-5">
                <div class="row">
                    <div class="col-lg-8">
                        <br />

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
                            "
                            href=""
                        >
                            <div>
                                <span class="badge bg-danger me-2">
                                    <i class="fas fa-fire me-1"></i> HOT
                                </span>
                                <small>
                                    Reedem untuk membuka seluruh tutorial
                                </small>
                            </div>
                            <i class="fas fa-chevron-right"></i>
                        </a>

                        <h1 class="fw-light text-uppercase mt-3">
                            <span class="fw-bold serie-name position-relative"
                                >Explore Topic Laravel</span
                            >
                        </h1>

                        <small class="lead text-white mt-5">
                            Ikuti tutorial dengan topic yang sesuai dengan
                            bahasa pemrogramman/Framework yang sedang ingin anda
                            pelajari. Ini membantu anda supaya anda bisa fokus
                            untuk mempelajari teknologi tertentu secara
                            bertahap. @endif
                        </small>
                        <form action="" class="mt-5">
                            <ul class="d-flex p-0">
                                <li
                                    class="me-2"
                                    v-for="tag in tags"
                                    :key="tag.slug"
                                >
                                    <button
                                        class="
                                            btn btn-transparent btn-lg
                                            px-4
                                            py-3
                                            d-flex
                                            align-items-center
                                            justify-content-center
                                            shadow-sm
                                        "
                                        :value="tag.slug"
                                        :style="'background-color:' + tag.color"
                                        name="tag"
                                    >
                                        <i
                                            class="fab fs-2 fw-bold text-white"
                                            :class="'fa-' + tag.icon"
                                        ></i>
                                    </button>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <div class="container-fluid series-content">
            <div class="card p-4 shadow position-relative">
                <div class="row mt-4">
                    <seriecard-component
                        v-for="serie in series"
                        :key="serie.slug"
                        :name="serie.name"
                        :slug="serie.slug"
                        :thumbnail="serie.thumbnail"
                        :status="serie.status"
                        :tags="serie.tag"
                        :created_at="serie.created_at"
                    ></seriecard-component>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            series: [],
            tags: [],
        };
    },
    mounted() {
        axios.get("api/serie").then((response) => {
            this.series = response.data.data;
        });
        axios.get("api/tag").then((response) => {
            this.tags = response.data.data;
        });
    },
};
</script>

<style></style>
