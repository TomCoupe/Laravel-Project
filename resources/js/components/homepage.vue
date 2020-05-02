<template>
    <div class="center-champion-search">
        <h2 class="card-title fun-font">Champion Search</h2>
        <input list="champion" class="form-control" placeholder="Please input a champion name">
        <datalist id="champion">
            <option v-for="champ in championArray" :value="champ.name"></option>
        </datalist>
        <button class="btn btn-dark">Search</button>
    </div>
</template>

<script>
    import champions from 'lol-champions';

export default {
    name: 'Homepage.vue',
    data() {
        return {
            championArray: champions,
        }
    },
    mounted() {
        console.log(champions);
    }
}
</script>
