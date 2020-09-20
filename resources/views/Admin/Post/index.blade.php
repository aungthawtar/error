<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <div id="app">
      <div class="container-fluid">
          <div class="row">
              <div class="col-4">
                  <input class="form-control" type="text" v-model="post.title" >
                  <textarea class="form-control" cols="30" rows="10" v-model="post.content"></textarea>
                  <button @click="store" class="btn btn-primary">Add</button>
              </div>
              <div class="col-8">
                  <table>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Action</th>
                      </tr>
                      <tr v-for="post in posts" :key="post.id">
                          <td>@ {{post.id}} </td>
                          <td> @{{post.name}} </td>
                          <td> @ {{post.price}} </td>
                      </tr>
                  </table>
              </div>
          </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
      new Vue({
          el: '#app',
          data: {
              posts : [],
              post:{
                title : '',
                content: ''
              }
          },
          created(){
            this.index();
          },
          methods : {
             index(){
                axios.get('api/product')
                .then(res => this.posts = res.data.products)
             }  
          }
        })
    </script>
  </body>
</html>