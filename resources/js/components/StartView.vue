<template>
  <div class="articles">
    <div class="article" v-for="article in articles">
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
            categories: []
        }
    },
    methods: {
      // sortArticles() {
      //   // sorted articles after categories
      //   var arr = this.articles;
      //   var sort = [];
      //   for (var i = 0; i < arr.length; i++) {
      //     if (arr[i].category_id == "1") {
      //       sort.push(arr[i]);
      //     }
      //   }
      //   this.sortedArticles = sort;
      //   // sorting by rank
      //   var test = sort.sort(function(a,b){
      //     return b.rank - a.rank
      //   });
      //   this.sortedArticles = test;
      // }
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
