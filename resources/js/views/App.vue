<template>
  <div>
    <BaseHeader/>
    <ul>
      <li v-for="post in posts" :key="post.slug">
        {{post.title}}
      </li>
    </ul>
  </div>
</template>

<script>
import BaseHeader from '../components/macro/BaseHeader.vue';

export default {
  components: { 
    BaseHeader, 
    },
    name: 'App',
    data() {
      return {
        posts: []
      };
    },
    created() {
      axios.get('http://localhost:8000/api/posts')
       .then((response) => {
        this.posts = response.data;
       })
       .catch((e) => {
        console.log(e);
       })
    },
}
</script>

<style>

</style>