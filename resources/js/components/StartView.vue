<template>
  <div class="articles">
    <div class="article" v-for="article in articles">
      <h2>{{ article.title }}</h2>
      <p>{{ article.text }}</p>
      <h3>{{ article.rank }} {{ categories[article.category_id].name }}</h3>
    </div>
  </div>
</template>

<script>
export default {
    data: function (){
        return {
            articles: [],
            categories: []
        }
    },
    mounted(){
        axios
        .get('./api/articles')
        .then(response => (
            this.articles = response.data
        )),
        axios
        .get('./api/categories')
        .then(response => (
            this.categories = response.data
        ))
    }
}
</script>

<style>

</style>
