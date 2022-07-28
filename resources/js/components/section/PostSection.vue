<template>
  <section class="posts">
    <div class="container">
        <ul>
            <li v-for="post in posts" :key="post.slug">
                <BaseCard :title="post.title" :content="post.content"/>
            </li>
        </ul>
    </div>
  </section>
</template>

<script>
import BaseCard from '../commons/BaseCard.vue';
export default {
  components: { BaseCard },
    name: 'PostSection',
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

<style lang="scss" scoped>
.posts {
    background-color: lightblue;
    padding: 10px 0;
}
a {
    text-decoration: none;
}
ul {
    list-style-type: none;
}
</style>