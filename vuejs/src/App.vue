<script>
// import AppHeader from './components/AppHeader.vue'
// import AppFooter from './components/AppFooter.vue'
// import { store } from './store.js'

// importare axios
import axios from 'axios';

const apiUrl = "http://127.0.0.1:8000/api/v1/movie/all";

export default {
  // name: "App",

  // components: {
  //   AppHeader,
  //   AppFooter
  // },

  data() {
    return {
      movies: [],
    }
  },

  mounted() {
    axios.get(apiUrl)
      .then(res => {
        const data = res.data;
        const success = data.success;
        const movies_data = data.response;

        this.movies = movies_data;

        console.log(movies_data);
      })
      .catch(err => console.error(err));
  }
}
</script>

<template>
  <main class="container">
    <ul> fff
      <li v-for="(movie) in movies">{{ movie.title }} --- vote: {{ movie.vote }}</li>
    </ul>
  </main>
</template>

<style lang="scss">
// @use './style/general.scss'
</style>

