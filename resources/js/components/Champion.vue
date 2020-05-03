<template>
    <div class="center-champion-search">
    </div>
</template>

<script>
    import champions from 'lol-champions';

    export default {
        name: "Champion.vue",
        props: ['champname'],
        data() {
            return {
                championArray: champions,
                champName: this.champname,
            }
        },
    }
</script>

<style scoped>

</style>
