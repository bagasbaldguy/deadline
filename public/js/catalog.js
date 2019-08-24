// (function($){

    $.ajax({
        url: 'api/katalog',
        dataType: 'json',
        success: function(ambildata){
            $.each(ambildata.data.katalog, function(key, value){
                $(".katalog").append(
                    `
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card">
						<div class="card__cover">
							<img src="assets/img/artikel/${value.foto}" alt="">
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="/katalog/${value.slug}">${value.judul}</a></h3>
							<span class="card__category">
								<a href="#">${value.kategori.nama_kategori}</a>
							</span>
							<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
						</div>
					</div>
				    </div>
                    `
                );
            });
        }
    });


// })(JQuery);