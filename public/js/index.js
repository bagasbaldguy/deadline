(function ($) {
    // Ulasan
    var alamat = 'api/ulasanberita'
    $.ajax({
        url: alamat,
        dataType: 'json',
        success: function(ambildata){
            $.each(ambildata.data.ulasan, function(key, value){
                $(".ulasan-terbaru").append(
                    `
                    <div class="col-6 col-sm-12 col-lg-6">
                    <div class="card card--list">
                    <div class="row">
						<div class="col-12 col-sm-4">
							<div class="card__cover">
                                <img class="img-fluid" src="assets/img/artikel/${value.foto}" alt="">
							    </div>
						    </div>

						        <div class="col-12 col-sm-8">
							        <div class="card__content">
								        <h3 class="card__title"><a href="/katalog/${value.slug}">${value.judul}</a></h3>
									        <span class="card__category">
										        <a>${value.kategori.nama_kategori}</a>
									        </span>

							    <div class="card__wrap">
								    <span class="card__rate"><i class="icon ion-ios-star"></i>${value.created_at}</span>

									    <ul class="card__list">
										    <li>HD</li>
										    <li>16+</li>
									    </ul>
							        </div>

							    <div class="card__description">
								    <h6>${value.konten}</h6>
							    </div>
							</div>
						</div>
                    </div>
                    </div>
                    </div>
                    `
                );
            });
        },
        error: function(gagal){
            console.log(gagal)
        }
    });
})(jQuery);
