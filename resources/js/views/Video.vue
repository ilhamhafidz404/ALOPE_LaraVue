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
                                >Video Tutorial</span
                            >
                        </h1>

                        <small class="lead text-white mt-5">
                            Tutorial dalam bentuk video yang akan membuat anda
                            lebih mengerti tentang solusi dari permasalahan yang
                            ada. Dengan penjelasan yang singkat dan mudah
                            dimengerti pasti akan membuat anda mudah memahami.
                        </small>
                    </div>
                </div>
            </div>
        </section>
        <div class="container-fluid series-content">
            <div class="card p-4 shadow position-relative">
                <div class="row mt-4">
                    <videocard-component
                        v-for="video in videos"
                        :key="video.slug"
                        :title="video.title"
                        :slug="video.slug"
                        :thumbnail="video.thumbnail"
                        :episode="video.episode"
                        :duration="video.duration"
                        :isPremium="video.isPremium"
                    ></videocard-component>
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
        axios.get("api/video").then((response) => {
            this.videos = response.data.data;
        });
    },
};
</script>

<style></style>
