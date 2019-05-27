<template>
  <div class="navbar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="./inredning">
          {{ categories[0].name }}
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./mode">
          {{ categories[1].name }}
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./horoskop">
          {{ categories[2].name }}
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./traning">
          {{ categories[3].name }}
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./kost">
          {{ categories[4].name }}
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
    axios
    .get('./api/categories')
    .then(response => (
      this.categories = response.data
    ))
  }
}
</script>

<style lang="scss" scoped>

.navbar {
  width: 100vw;
  display: flex;
  margin: 0 0 1rem 0;

  ul {
    margin: auto;

    li {
      font-family: "Source Sans Pro";

      a {
        color: Black;
        transition: all ease .15s;
        &:hover {
          font-weight: bold;
        }
      }
    }
  }
}

</style>
