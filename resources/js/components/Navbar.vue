<template>
  <div class="navbar">
    <ul class="nav">
      <li class="nav-item" v-for="category in categories">
        <a class="nav-link" href="./api/ads">
          {{ category.name }}
        </a>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  data: function () {
    return {
      categories: []
    }
  },
  mounted() {
    console.log("Navbar.")
    axios
    .get('./api/categories')
    .then(response => (
      this.categories = response.data,
      console.log(response.data)
    ))
  }
}
</script>

<style lang="scss" scoped>

.navbar {
  background: Lavender;
  width: 100vw;
  display: flex;

  ul {
    margin: auto;

    li {
      font-family: "Source Sans Pro";

      a {
        color: Black;
      }
    }
  }
}

</style>
