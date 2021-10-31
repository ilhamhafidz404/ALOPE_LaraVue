<template>
    <div>
        <h1>{{ article.title }}</h1>

        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
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
