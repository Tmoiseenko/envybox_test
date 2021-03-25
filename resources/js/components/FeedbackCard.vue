<template>
    <div class="row justify-content-around">
        <div class="col-md-3 m-3" v-for="item in this.feedbacks">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{ item.name }}</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">{{ item.phone }}</h6>
                    <p class="card-text">{{ item.message }}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "FeedbackCard",
    props: ['feedbacks'],
    mounted() {

    }
}
</script>

<style scoped>

</style>
