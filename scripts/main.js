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
        console.log(this.genres);
        console.log(this.albums);
      }).catch(err => {
        console.log(err);
      })
    },
  },
  created(){
    this.getAPI();
    console.log('dioporco')
  }

});