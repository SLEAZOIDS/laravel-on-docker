<template>
    <div class="container">
        <div class="row">
        これはショップ
        </div>

        <div v-for="result in results">
          <div>
          ********
          {{result.name}}
          ========
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
