<template>
    <div class="center-champion-search">
        <h2 class="card-title fun-font">Champion Search</h2>
        <input list="champion" class="form-control" placeholder="Please input a champion name" v-model="champName">
        <datalist id="champion">
            <option v-for="champ in championArray" :value="champ.name"></option>
        </datalist>
        <button class="btn btn-dark" @click="showChampion">Search</button>
        <button class="btn btn-dark" @click="generateRandomChampion">Random champion</button>

    </div>
</template>

<script>
    import champions from 'lol-champions';

export default {
    name: 'Homepage.vue',
    data() {
        return {
            championArray: champions,
            champName: '',
        }
    },
    methods: {
      showChampion() {
          window.location.href = '/champion/' + this.champName;
      },
        generateRandomChampion() {
          var randomNumber = Math.floor(Math.random() * 142);
          var randomChamp = this.championArray[randomNumber].name;
          window.location.href = '/champion/' + randomChamp;
          },
    },
}
</script>
