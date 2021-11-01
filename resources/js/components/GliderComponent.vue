<template>
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
            <div data-name="Multiple Item" class="glider-contain multiple">
                <div class="gradient-border-bottom">
                    <div class="gradient-border">
                        <div class="glider" id="blog-series">
                            <div
                                class="mx-2"
                                v-for="article in articles"
                                :key="article.slug"
                            >
                                <articlecard-component
                                    :title="article.title"
                                    :thumbnail="article.thumbnail"
                                ></articlecard-component>
                            </div>
                        </div>
                    </div>
                </div>
                <button
                    role="button"
                    aria-label="Previous"
                    class="glider-prev"
                    id="glider-prev-2"
                >
                    <i class="fa fa-chevron-left text-white"></i>
                </button>
                <button
                    role="button"
                    aria-label="Next"
                    class="glider-next"
                    id="glider-next-2"
                >
                    <i class="fa fa-chevron-right text-white"></i>
                </button>
                <div id="dots2"></div>
            </div>
        </div>
    </div>
</template>

<script>
import BlogCardComponent from "./card/ArticleCardComponent.vue";
export default {
    components: { BlogCardComponent },
    data() {
        return {
            articles: [],
        };
    },
    mounted() {
        axios.get("api/latest-article").then((response) => {
            this.articles = response.data.data;
        });
    },
};
</script>

<style>
.glider-track {
    width: 2000px !important;
}
.glider-slide {
    width: 300px !important;
}
</style>
