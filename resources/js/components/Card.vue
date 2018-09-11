<template>
    <card class="flex flex-col items-center justify-center">
        <div class="text-center text-primary" v-if="routesCached">
            <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zM6.5 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm7 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm2.16 3H4.34a6 6 0 0 0 11.32 0z"/></svg>
            <h1 class="text-xl">
                Routes Cached
            </h1>
        </div>

        <div class="text-center text-danger" v-else>
            <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zM9 11v4h2V9H9v2zm0-6v2h2V5H9z"/></svg>
            <h1 class="text-xl">
                Routes Not Cached
            </h1>
        </div>
    </card>
</template>

<script>
export default {
    props: ['card'],

    data() {
        return {
            routesCached: false,
        }
    },

    mounted() {
        this.checkRouteCached();
    },

    methods: {
        checkRouteCached() {
            Nova.request().get('/nova-vendor/routes-cached/endpoint')
                .then(response => {
                    this.routesCached = response.data.routesAreCached;
                });
        },
    }
}
</script>
