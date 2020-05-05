<template>
    <div>
        <img :src="this.champData.icon" style="width: 50px"> {{this.champData.title}} <img :src="this.champData.icon" style="width: 50px">
        <div>
            <br>
            <h6 class="fun-font">Champion description</h6>
            {{this.champData.description}}
        </div>
        <br>
        <div>
            <h6 class="fun-font">Champion Stats</h6>
            <div class="row">
                <div class="col-sm-6">
                    <b>Armor:</b> {{this.champData.stats.armor}} <br>
                    <b>Armor per level:</b> {{this.champData.stats.armorperlevel}} <br>
                    <b>Attack damage:</b> {{this.champData.stats.attackdamage}} <br>
                    <b>Attack damage per level:</b> {{this.champData.stats.attackdamageperlevel}} <br>
                    <b>Attack range:</b> {{this.champData.stats.attackrange}} <br>
                    <b>Attack speed off set:</b> {{this.champData.stats.attackspeedoffset}} <br>
                    <b>Attack speed per level:</b> {{this.champData.stats.attackspeedperlevel}} <br>
                    <b>Critical strike chance:</b> {{this.champData.stats.crit}} <br>
                    <b>Critical strike chance per level:</b> {{this.champData.stats.critperlevel}} <br>
                    <b>Hit points (hp):</b> {{this.champData.stats.hp}} <br>
                </div>
                <div class="col-sm-6">
                    <b>Hit points per level:</b> {{this.champData.stats.hpperlevel}}<br>
                    <b>Hit points regen:</b> {{this.champData.stats.hpregen}}<br>
                    <b>Hit points regen per level:</b> {{this.champData.stats.hpregenperlevel}}<br>
                    <b>Movement speed:</b> {{this.champData.stats.movespeed}}<br>
                    <b>Magic penetration:</b> {{this.champData.stats.mp}}<br>
                    <b>Magic penetration per level:</b> {{this.champData.stats.mpperlevel}}<br>
                    <b>Magic pen regen:</b> {{this.champData.stats.mpregen}}<br>
                    <b>Magic pen regen per level:</b> {{this.champData.stats.mpregenperlevel}}<br>
                    <b>Spell block:</b> {{this.champData.stats.spellblock}} <br>
                    <b>Spell block per level:</b> {{this.champData.stats.spellblockperlevel}} <br>
                </div>
            </div>
        </div>
        <br>
        <button class="btn btn-dark" @click="home">Home</button>
        <button class="btn btn-dark" @click="generateRandomChampion">Random champion</button>
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
            },
            generateRandomChampion() {
                var randomNumber = Math.floor(Math.random() * 142);
                var randomChamp = this.championArray[randomNumber].name;
                window.location.href = '/champion/' + randomChamp;
            },
            home() {
                window.location.href = '/';
            }
        }
    }
</script>

<style scoped>

</style>
