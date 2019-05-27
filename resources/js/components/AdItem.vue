<template>
    <div class="ad">
        <h3>{{ ads[index].title }}</h3>
        <img v-bind:src="ads[index].img" alt="pic">
    </div>
</template>

<script>
export default {
    data: function (){
        return {
            ads: [],
            index: null
        }
    },
    methods: {
        random(){
            var length = this.ads.length;
            var rand = Math.floor(Math.random() * length);
            this.index = rand;
        }
    },
    mounted(){
        axios
        .get('./api/ads')
        .then(response => (
            this.ads = response.data,
            this.random()
        ))
    }
}
</script>

<style lang="scss">

.ad {
  max-width: 300px;

  img {
    width: 100%;
  }
  h3 {
    font-size: 1.6rem;
    color: Gray;
  }
}
</style>
