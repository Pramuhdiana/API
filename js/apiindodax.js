$.getJSON('https://indodax.com/api/pairs', function(result) {
//pengulangan di jquery
//looping terhadap menu
$.each(result, function(i, data) {
    $('#coin-list').append(`
    <div class="col-md-2">
    <div class="card mb-3">
        <img src="` + data.url_logo_png +`" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title">` + data.symbol +`</h5>
            <a href="" class="card-link see-detail" data-toggle="modal" data-target="#exampleModal" data-id="` + data.id +`">See Detail</a>
        </div>
    </div>
</div>
    `);
});

});

/*
pada saat see detail di klik
jquery cari element yang nama idnya coin-list, 
ketika di click sebuah element yang classnya see-detail
walapun munculnya awal atau akhir
jalankan fungsi dibawahnya
*/
$('#coin-list').on('click', '.see-detail', function() {
    //consol log ambil tombol ini, lalu ambil datanya id
    // console.log($(this).data('id'));
    var $id = $(this).data('id');
    $.ajax({
        url: 'https://indodax.com/api/ticker/'+$id,
        type: 'get',
        dataType: 'json',
  
        success: function (coin)
         {
            let coinid = coin.ticker
            console.log(coinid);
                //maka isi yang di dalam modal ganti
                $('.modal-body').html(`
                <div class="container-fluid">
                <div class="row">
                <div class="col-md-8>
                <ul class="list-group">
                <li class="list-group-item"><h4>High Price : `+ coinid.high +`</h4></li>
                <li class="list-group-item">Last Price : `+ coinid.last +`</li>
                <li class="list-group-item">Low Price : `+ coinid.low +`</li>
              </ul>
                </div>
                `);
         }
    });
});