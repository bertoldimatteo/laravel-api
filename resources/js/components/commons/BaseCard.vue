<template>
  <div class="card">
    <h2>{{title}}</h2>
    <div class="card-content">
        <p>{{content}}</p>
    </div>
    <a href="#">Visualizza il post</a>
  </div>
</template>

<script>
export default {
    name: 'BaseCard',
    props: {
        title: {
            type: String
        },
        content: {
            type: String
        }
    }
}
</script>

<style lang="scss" scoped>
.card {
    background-color: white;
    padding: 10px;
    margin: 10px 0;
}
</style>