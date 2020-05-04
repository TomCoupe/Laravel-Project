<template>
    <div>
        <img :src="this.champData.icon" style="width: 50px"> {{this.champData.title}} <img :src="this.champData.icon" style="width: 50px">
        <div class="center-champion-search">
        </div>
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
                champData: [],
            }
        },
        mounted() {
          this.findChampionByName();
        },
        methods:  {
            findChampionByName() {
                for (let champ in this.championArray) {
                    if(this.championArray[champ].name == this.champName) {
                        this.champData = this.championArray[champ];
                        return;
                    }
                }
            }
        }
    }
</script>

<style scoped>

</style>
