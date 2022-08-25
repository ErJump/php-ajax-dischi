const app = new Vue({
    el: '#app',
    data: {
        albums: [],
        selectedGenre: '',
    },
    methods: {
        getAlbums: function() {
            axios.get('http://localhost/php-ajax-dischi/SecondaVersione/controller.php')
                .then(response => {
                    this.albums = response.data;
                }).catch(error => {
                    console.log(error);
                }
            );
        },
        getFilteredAlbums: function() {
            axios.get('http://localhost/php-ajax-dischi/SecondaVersione/controller.php?genre=' + this.selectedGenre)
                .then(response => {
                    this.albums = response.data;
                }).catch(error => {
                    console.log(error);
                }
            );
        }   
    },
    created: function() {
        this.getAlbums();
    },
});