<template>
    <div id="app">
        <div class="latest-blog py-3 mt-5">
            <div class="container-fluid">
                <div
                    class="
                        m-auto
                        latest-blog-title
                        rounded
                        shadow
                        text-center
                        py-1
                        mb-4
                    "
                >
                    <h3 class="text-uppercase text-white m-0">Blog Terbaru</h3>
                </div>
                <vue-glide>
                    <vue-glide-slide v-for="i in 9" :key="i">
                        <articlecard-component></articlecard-component>
                    </vue-glide-slide>
                    <template slot="control">
                        <button data-glide-dir="<">prev</button>
                        <button data-glide-dir=">">next</button>
                    </template>
                </vue-glide>
            </div>
        </div>
    </div>
</template>

<script>
import { Glide, GlideSlide } from "vue-glide-js";

export default {
    components: {
        [Glide.name]: Glide,
        [GlideSlide.name]: GlideSlide,
    },
    data() {
        return {
            articles: [],
        };
    },
    mounted() {
        axios.get("/api/latest-article").then((response) => {
            this.articles = response.data.data;
        });
    },
};
</script>

<style></style>
