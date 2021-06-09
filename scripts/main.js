const app = new Vue({
  el: '#app',
  data:{
    albums:[],
    genres:[],
    authors:[],
    authorToSearch: 'all',
    genreToSearch: 'all',
    apiURL: 'http://localhost/Boolean/php-ajax-dischi/api.php'

  },
  methods:{

    getAPI(){
      axios.get(this.apiURL,{
        params:{
          genre: this.genreToSearch,
          author: this.authorToSearch
        }
      })
      .then(res => {
        this.albums = res.data.albums;
        this.genres = res.data.genres;
        this.authors = res.data.authors;

        if (this.albums.length === 0){
          this.albums.push(
            {
              'title' : 'No song',
              'poster' : 'https://i.pinimg.com/236x/fc/7e/ce/fc7ece8e8ee1f5db97577a4622f33975--photo-icon-sad.jpg',
              'author' : 'No Author'
            }
          )
        }



        console.log(this.genres);
        console.log(this.albums);
      }).catch(err => {
        console.log(err);
      })
    },
  },
  created(){
    this.getAPI();
    console.log('')
  },
  mounted(){

  }

});