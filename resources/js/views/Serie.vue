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
                                >Explore Serie</span
                            >
                        </h1>

                        <small class="lead text-white mt-5">
                            Ikuti tutorial khusus mengenai suatu
                            serie/pembahasan tertentu.Jika anda kebingungan
                            karena merasa video yang anda tonton serasa kurang
                            nyambung/acak. Ini bisa membuat anda lebih mudah
                            mengikuti alur pengerjaannya secara bertahap.
                        </small>
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
                        :tags="serie.tag"
                        :status="serie.status"
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
        };
    },
    mounted() {
        axios.get("api/serie").then((response) => {
            this.series = response.data.data;
        });
    },
};
</script>

<style></style>
