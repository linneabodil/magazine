<template>
  <div class="articles">
    <div class="article" v-for="article in sortedArticles">
      <h4>{{ categories[article.category_id].name }}</h4>
      <h2>{{ article.title }}</h2>
      <h3>{{ article.ingress }}</h3>
      <p>{{ article.text }}</p>
    </div>
  </div>
</template>

<script>
export default {
    data: function (){
        return {
            articles: [],
            categories: [],
            sortedArticles: []
        }
    },
    methods: {
      sortArticles() {
        // sorted articles after categories
        // var arr = this.articles;
        // var sort = [];
        // for (var i = 0; i < arr.length; i++) {
        //   if (arr[i].category_id == "1") {
        //     sort.push(arr[i]);
        //   }
        // }
        // this.sortedArticles = sort;
        // // sorting by rank
        // var test = sort.sort(function(a,b){
        //   return b.rank - a.rank
        // });
        // this.sortedArticles = test;
        var articles = this.articles;
        var sorted = [];
        for (var i = 0; i < articles.length; i++) {
          if (articles[i].rank > "4") {
            sorted.push(articles[i]);
          }
        }
        this.sortedArticles = sorted;
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
            this.categories = response.data,
            this.sortArticles()
        ))
    }
}
</script>
<style lang="scss" scoped>
  .article {
    position: relative;

    h4 {
      position: absolute;
      top: 0;
      right: 0;
      font-size: .8rem;
      padding: .5rem;
      background: rgba($color: Burlywood, $alpha: .5);
      color: White;
    }
    h2 {
      margin-top: 1rem;
    }
  }
</style>
