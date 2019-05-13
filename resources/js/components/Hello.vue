<template>
  <article class="main">
    <h1>Scarlet Magazine</h1>
  </article>
</template>

<script>
    export default {
      data: function () {
        return {
          res: null
        }
      },
      mounted() {
        console.log('Component mounted.')
      /*  axios
        .get('./api/horoscope')
        .then(response => (
          this.res = response.data[0],
          console.log(response.data)
        )) */
      }
    }
</script>

<style lang="scss">

  h1 {
    text-align: center;
    font-family: 'Source Sans Pro', sans-serif;
    font-weight: 300;
    font-size: 3rem;
  }

</style>
