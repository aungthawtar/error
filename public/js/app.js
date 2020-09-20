var app = new Vue({
    el: '#app',
    data: {
        newPost: { title : "" , content : "" },
        posts : [],
    },
    methods : {
        addPost(){
            var title = this.newPost.title;
            var content = this.newPost.content;
            if(title && content){
                this.posts.push({title : title , content : content});
                this.newPost = { title : '' , content : ''};
            }
        }
    }
  })