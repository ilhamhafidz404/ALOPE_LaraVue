<template>
    <main>
        <header-component></header-component>
        <main class="mt-5">
            <div class="album py-5">
                <div class="container-fluid">
                    <h3 class="mb-4 text-center text-uppercase">Serie</h3>
                    <div class="row">
                        <seriecard-component
                            v-for="serie in series"
                            :key="serie.slug"
                            :name="serie.name"
                            :status="serie.status"
                            :tags="serie.tag"
                            :created_at="serie.created_at"
                        ></seriecard-component>
                    </div>
                </div>
            </div>
            <glider-component></glider-component>
            <testimoni-component></testimoni-component>

            <div id="pricing" class="m-auto container-fluid">
                <h3 class="text-center fw-bold">ALOPE PREMIUM ACCESS</h3>
                <p class="text-center m-auto text-muted" style="width: 60%">
                    Beli akses Premium untuk mendapatkan Full Akses ke tutorial
                    yang lebih keren dan Menyenangkan.
                </p>
                <div class="row justify-content-center align-items-center mt-4">
                    <div class="col-md-5 col-xl-3 col-lg-4 p-0 mb-3">
                        <div
                            class="
                                card
                                border-0
                                shadow-sm
                                p-3
                                text-center
                                gold
                                bg-white
                                py-5
                            "
                        >
                            <h5>Gold</h5>
                            <h3 class="mt-4">
                                <sup>Rp.</sup>
                                <span class="fw-bold" style="font-size: 50px">
                                    100
                                </span>
                                <sub class="fw-bold mb-2"> .000 </sub>
                            </h3>
                            <ul class="mt-4 mb-2">
                                <li class="mb-2">
                                    <i
                                        class="fas fa-check me-2 text-success"
                                    ></i>
                                    Akses Alope Journey
                                </li>
                                <li class="mb-2">
                                    <i
                                        class="fas fa-check me-2 text-success"
                                    ></i>
                                    Berbagi Cerita di Alope Journey
                                </li>
                                <li class="mb-2">
                                    <i
                                        class="fas fa-check me-2 text-success"
                                    ></i>
                                    Premium selama 3 Bulan
                                </li>
                                <li class="mb-2">
                                    <i
                                        class="fas fa-check me-2 text-success"
                                    ></i>
                                    Buat Post di Alope Circle
                                </li>
                                <li class="mb-2">
                                    <i
                                        class="fas fa-check me-2 text-success"
                                    ></i>
                                    Source Code Gratis
                                </li>
                                <li class="mb-2">
                                    <i
                                        class="fas fa-check me-2 text-success"
                                    ></i>
                                    Claim Ebook Alope secara Gratis
                                </li>
                            </ul>
                            <a
                                href=""
                                class="
                                    btn btn-primary
                                    text-white
                                    mt-4
                                    btn_price
                                "
                            >
                                Beli Akses
                            </a>
                        </div>
                    </div>
                    <div class="col-md-5 col-xl-3 col-lg-4 p-0 mb-3">
                        <div
                            class="
                                card
                                border-0
                                shadow-sm
                                p-3
                                text-center
                                platinum
                                py-5
                                text-white
                            "
                        >
                            <h5>Platinum</h5>
                            <h3 class="mt-4">
                                <sup>Rp.</sup>
                                <span class="fw-bold" style="font-size: 50px">
                                    170
                                </span>
                                <sub class="fw-bold mb-2"> .000 </sub>
                            </h3>
                            <ul class="mt-4 mb-2">
                                <li class="mb-2">
                                    <i
                                        class="fas fa-check me-2 text-success"
                                    ></i>
                                    Akses Alope Journey
                                </li>
                                <li class="mb-2">
                                    <i
                                        class="fas fa-check me-2 text-success"
                                    ></i>
                                    Berbagi cerita di Alope Journey
                                </li>
                                <li class="mb-2">
                                    <i
                                        class="fas fa-check me-2 text-success"
                                    ></i>
                                    Premium selama 6 bulan
                                </li>
                                <li class="mb-2">
                                    <i
                                        class="fas fa-check me-2 text-success"
                                    ></i>
                                    Buat Post di Alope Circle
                                </li>
                                <li class="mb-2">
                                    <i
                                        class="fas fa-check me-2 text-success"
                                    ></i>
                                    Source Code
                                </li>
                                <li class="mb-2">
                                    <i
                                        class="fas fa-check me-2 text-success"
                                    ></i>
                                    Latihan tambahan
                                </li>
                                <li class="mb-2">
                                    <i
                                        class="fas fa-check me-2 text-success"
                                    ></i>
                                    Claim Ebook Alope secara Gratis
                                </li>
                            </ul>
                            <a
                                href="https://api.whatsapp.com/send?phone=6283871352030&text=Hai%20Saya%20Ingin%20Berlangganan%20di%20ALOPE"
                                class="
                                    btn btn-primary
                                    text-white
                                    mt-4
                                    btn_price
                                "
                            >
                                Beli Akses
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mx-auto" style="width: 50%">
                    <a href="" class="mt-2 d-block text-end">
                        Lihat Paket lainnya
                    </a>
                </div>
            </div>

            <br /><br />
            <div id="faq" class="mt-5">
                <div class="container-fluid">
                    <h3 class="text-center fw-bold mb-0">FAQ</h3>
                    <p class="text-center text-muted">
                        Yang sering ditanyakan tentang ALOPE
                    </p>
                    <div class="qna row mt-5">
                        <div class="col-md-6 mb-3">
                            <div>
                                <p class="fw-bold" style="color: #36275d">
                                    <i class="fas fa-question me-2"></i>
                                    Kenapa saya harus gabung ALOPE?
                                </p>
                                <p class="text-muted">
                                    ALOPE di rekomendasikan oleh beberapa
                                    Programming enthusiast khususnya yang masih
                                    pemula karena ALOPE menyenangkan dengan
                                    tutorial Beginner Friendly.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div>
                                <p class="fw-bold" style="color: #36275d">
                                    <i class="fas fa-question me-2"></i>
                                    Bagaimana cara saya membayar Akses Premium?
                                </p>
                                <p class="text-muted">
                                    Pembayaran bisa dilakukan dengan membayar
                                    via
                                    <b>E-Wallet</b> berupa
                                    <b>Gopay, Link Aja</b> atau lewat
                                    <b>OVO</b>. Bisa juga via Trasferbank, bisa
                                    ke <b>BCA, Mandiri</b> dan <b>BRI</b>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div>
                                <p class="fw-bold" style="color: #36275d">
                                    <i class="fas fa-question me-2"></i>
                                    Siapa yang menjadi Tutor di ALOPE?
                                </p>
                                <p class="text-muted">
                                    Ilham Hafidz, siswa SMK yang mengenal Web
                                    Programming sejak SMP dan sudah
                                    menyumbangkan beberapa Piala Perlombaan
                                    Programming di sekolahnya.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div>
                                <p class="fw-bold" style="color: #36275d">
                                    <i class="fas fa-question me-2"></i>
                                    Apakah tutorial Gratis tersedia?
                                </p>
                                <p class="text-muted">
                                    Yap, tentu. Bahkan 75% tutorial di ALOPE itu
                                    <b>Gratis</b>, tpi bagi kalian yang mau
                                    support silahkan Upgrade ke versi
                                    <b>Premium</b> atau bisa <b>Donate</b> di
                                    Saweria.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- GROUP -->
            <div id="group" class="mt-5">
                <div class="container-fluid">
                    <h3 class="mb-0">Gabung dengan ALOPE</h3>
                    <span>Jadi bagian dari Team??</span>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div
                                class="
                                    facebook
                                    d-flex
                                    align-items-center
                                    sosmed
                                "
                            >
                                <div class="i">
                                    <i class="fs-1 fab fa-facebook"></i>
                                </div>
                                <div class="text">
                                    <h5>Facebook</h5>
                                    <p class="text-muted">
                                        Sukai Halaman Facebook kami untuk
                                        mendapatkan update terbaru
                                    </p>
                                </div>
                            </div>
                            <div
                                class="twitter d-flex align-items-center sosmed"
                            >
                                <div class="i">
                                    <i class="fs-1 fab fa-twitter"></i>
                                </div>
                                <div class="text">
                                    <h5>Twitter</h5>
                                    <p class="text-muted">
                                        Ikuti Twitter kami untuk mendapatkan
                                        update terbaru
                                    </p>
                                </div>
                            </div>
                            <div
                                class="
                                    instagram
                                    d-flex
                                    align-items-center
                                    sosmed
                                "
                            >
                                <div class="i">
                                    <i class="fs-1 fab fa-instagram"></i>
                                </div>
                                <div class="text">
                                    <h5>Instagram</h5>
                                    <p class="text-muted">
                                        Ikuti Instagram kami untuk mendapatkan
                                        update terbaru seputar event-event dan
                                        aktifitas kami
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div
                                class="discord d-flex align-items-center sosmed"
                            >
                                <div class="i">
                                    <i class="fs-1 fab fa-discord"></i>
                                </div>
                                <div class="text">
                                    <h5>Discord</h5>
                                    <p class="text-muted">
                                        Gabung dengan grup Discord kami untuk
                                        mendapatkan solusi koding dari mentor
                                        resmi Alope
                                    </p>
                                </div>
                            </div>
                            <div
                                class="youtube d-flex align-items-center sosmed"
                            >
                                <div class="i">
                                    <i class="fs-1 fab fa-youtube"></i>
                                </div>
                                <div class="text">
                                    <h5>Youtube</h5>
                                    <p class="text-muted">
                                        Ikuti Youtube supaya tidak ketinggalan
                                        video tutorial dari kami
                                    </p>
                                </div>
                            </div>
                            <div
                                class="
                                    telegram
                                    d-flex
                                    align-items-center
                                    sosmed
                                "
                            >
                                <div class="i">
                                    <i class="fs-1 fab fa-telegram"></i>
                                </div>
                                <div class="text">
                                    <h5>Telegram</h5>
                                    <p class="text-muted">
                                        Gabung dengan grup Telegram kami untuk
                                        Mengobrol dengan team Alope yang lain
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <br />
        <br />
        <br />
        <br />
        <br />
    </main>
</template>

<script>
export default {
    data() {
        return {
            series: [],
        };
    },

    mounted() {
        axios.get("/api/serie").then((response) => {
            this.series = response.data.data;
        });
    },
};
</script>

<style></style>
