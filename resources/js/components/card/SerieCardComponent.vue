<template>
    <div class="col-sm-12 col-md-6 col-lg-4">
        <a href="">
            <div class="card border-0 bg-transparent px-1 m-auto mb-4">
                <img
                    src=""
                    class="card-img-rounded"
                    width="100%"
                    height="201px"
                />
                <div class="card-body p-0 mt-1">
                    <span class="badge" style="background-color: red">
                        tag
                    </span>
                    <h4 class="card-title my-2 text-dark">{{ name }}</h4>
                    <div class="card-text d-flex justify-content-between">
                        <small class="text-muted">{{ created_at }}</small>
                        <small class="text-secondary">
                            Serie
                            <span class="text-success fw-bold">Complete</span>
                        </small>
                    </div>
                </div>
            </div>
        </a>
    </div>
</template>

<script>
export default {
    props: ["name", "created_at"],
};
</script>

<style></style>
