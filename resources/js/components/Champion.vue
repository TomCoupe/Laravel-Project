<template>
    <div>
        <img :src="this.champData.icon" style="width: 50px"> {{this.champData.title}} <img :src="this.champData.icon" style="width: 50px">
        <div>
            {{this.champData.description}}
        </div>
        <div class="center-champion-search">
            <div class="row">
                <div class="col-sm-6">
                    Armor: {{this.champData.stats.armor}} <br>
                    Armor per level: {{this.champData.stats.armorperlevel}} <br>
                    Attack damage: {{this.champData.stats.attackdamage}} <br>
                    Attack damage per level: {{this.champData.stats.attackdamageperlevel}} <br>
                    Attack range: {{this.champData.stats.attackrange}} <br>
                    Attack speed off set: {{this.champData.stats.attackspeedoffset}} <br>
                    Attack speed per level: {{this.champData.stats.attackspeedperlevel}} <br>
                    Critical strike chance: {{this.champData.stats.crit}} <br>
                    Critical strike chance per level: {{this.champData.stats.critperlevel}} <br>
                    Hit points (hp): {{this.champData.stats.hp}} <br>
                </div>
                <div class="col-sm-6">
                    Hit points per level: {{this.champData.stats.hpperlevel}} <br>
                    Hit points regen: {{this.champData.stats.hpregen}} <br>
                    Hit points regen per level: {{this.champData.stats.hpregenperlevel}} <br>
                    Movement speed: {{this.champData.stats.movespeed}} <br>
                    Magic penetration: {{this.champData.stats.mp}} <br>
                    Magic penetration per level: {{this.champData.stats.mpperlevel}} <br>
                    Magic penetration regen: {{this.champData.stats.mpregen}} <br>
                    Magic penetration regen per level: {{this.champData.stats.mpregenperlevel}} <br>
                    Spell block: {{this.champData.stats.spellblock}} <br>
                    Spell block per level: {{this.champData.stats.spellblockperlevel}} <br>
                </div>
            </div>
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
