function searchMovie() {
    //pertama kali di klik kosongkan dulu html tampilan awal baru request
    $('#movie-list').html('');

    $.ajax({
        url: 'http://omdbapi.com',
        type: 'get',
        dataType: 'json',
        data: {
            'apikey' : '1b740c2c',
            's' : $('#search-input').val()
        },

        // jika sukses lakukan dibawah ini
        success: function(result) {
            //jika Response == true maka
            if (result.Response == "True") {
                //agar langsung menjadi object kita keluarkan dulu searchnya
                let movies = result.Search;
                
                //cara looping jangan lupa memakai div class col md 4 agar max 3 gambar dalam 1 baris
                $.each(movies, function (i, data) {
                    $('#movie-list').append(`
                    <div class="col-md-4">
                    <div class="card mb-3">
                <img src="`+ data.Poster +`" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">`+ data.Title +`</h5>
                    <h6 class="card-subtitle mb-2 text-muted">`+ data.Year +`</h6>
                    <a href="#" class="card-link see-detail" data-toggle="modal" data-target="#exampleModal" data-id="`+ data.imdbID +`">See Detail</a>
                </div>
                </div>
            </div>  
                    `);
                });
                //jika sudah menampilkan hasil yang di cari
                //hilangkan kembali value/ketikan di kolom search
                $('#search-input').val('');

            } else {
                $('#movie-list').html(`
            <div class="col">
                <h1 class="text-center">` + result.Error + `</h1>
            </div>              
            `)} 
        }
    });
}

//jquery cari id search-button jika di klik jalankan fungsi dibawah ini
$('#search-button').on('click', function () {
    searchMovie();

});

//jika didalam colom search input enter di tekan maka jalankan fungsi search movive
$('#search-input').on('keyup', function(event) {
    //13 adalah key code untuk enter, ingin tahu lebih lanjut check keycode.info
    if(event.keyCode === 13) {
        searchMovie();
    }
});

//pada saat see detail di klik
/*
jquery cari element yang nama idnya movie-list, 
ketika di click sebuah element yang classnya see-detail
walapun munculnya awal atau akhir
jalankan fungsi dibawahnya

*/
$('#movie-list').on('click', '.see-detail', function() {
    //consol log ambil tombol ini, lalu ambil datanya id
    // console.log($(this).data('id'));

    $.ajax({
        url: 'http://omdbapi.com',
        type: 'get',
        dataType: 'json',
        data: {
            'apikey' : '1b740c2c',
            'i' : $(this).data('id') //this adalag tombol see detail yang di klik
        },

        //jika sukse
        success: function (movie) {
            if (movie.Response === "True") {
                //maka isi yang di dalam modal ganti
                $('.modal-body').html(`
                <div class="container-fluid">
                <div class="row">
                <div class="col-md-4">
                <img src="` + movie.Poster +`" class="img-fluid">
                </div>

                <div class="col-md-8>
                <ul class="list-group">
                <li class="list-group-item"><h4>`+ movie.Title +`</h4></li>
                <li class="list-group-item">Released :`+ movie.Released +`</li>
                <li class="list-group-item">Genre :`+ movie.Genre +`</li>
                <li class="list-group-item">Director :`+ movie.Director +`</li>
                <li class="list-group-item">Actors :`+ movie.Actors +`</li>
              </ul>
                </div>
                `);
            }
        }
    });
});