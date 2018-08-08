<template>
    <div class="container">
        <div class="row">
        これはショップ
        </div>

        <div v-for="result in results">
          <div>
            <a v-bind:href="'/stores/' + result.id">{{result.name}}</a>
          </div>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
          return {
            results: []
          }
        },
        mounted() {
           axios.get("/api/stores")
           .then(response => {
             console.log(response.data)
             this.results = response.data
            })
         }
    }
</script>
