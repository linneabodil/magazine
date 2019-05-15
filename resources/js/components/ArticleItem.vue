<template>
    <div class="article">
    <h2>{{ articles[4].title }}</h2>
    <p>{{ articles[4].text }}</p>
    <h3>{{ articles[4].rank }} {{ categories[articles[4].category_id].name }}</h3>

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