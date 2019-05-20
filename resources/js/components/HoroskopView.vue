<template>
  <!-- <div class="articles">
    <div class="article" v-for="article in sortedArticles">
      <h2>{{ article.title }}</h2>
      <p>{{ article.text }}</p>
      <h3>{{ article.rank }} {{ categories[article.category_id].name }}</h3>
    </div>
  </div> -->
</template>

<script>
export default {
  data: function (){
    return {
      articles: [],
      sortedArticles: [],
      categories: []
    }
  },
  methods: {
    sortArticles() {
      // sorted articles after categories
      // var arr = this.articles;
      // var sort = [];
      // for (var i = 0; i < arr.length; i++) {
      //   if (arr[i].category_id == "2") {
      //     sort.push(arr[i]);
      //   }
      // }
      // this.sortedArticles = sort;
      // sorting by rank
      var sort = this.articles;
      var test = sort.sort(function(a,b){
        return b.rank - a.rank
      });
      this.sortedArticles = test;
    }
  },
  mounted(){
    axios
    .get('./api/articles/horoskop')
    .then(response => (
      this.articles = response.data,
      console.log(response)
    )),
    axios
    .get('./api/categories')
    .then(response => (
        this.categories = response.data
    ))
  }
}
</script>

<style lang="scss">
</style>
