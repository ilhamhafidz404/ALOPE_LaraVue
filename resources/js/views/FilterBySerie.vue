<template>
    <div>
        <h1 v-for="video in videos" :key="video.slug">{{ video.title }}</h1>
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
