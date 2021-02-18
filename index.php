<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bit</title>


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>
<body>


	<h1>Cambio de Bit</h1>



	<h4>BTC</h4>


	<h5>Precio <span class="btc"></span> <span class="btc_new" style="display: none;"></span> </h5>
	<h4>USD</h4>
	<h5>Precio <span class="usd"></span> <span class="usd_new" style="display: none;"></span></h5>
	<h4>EUR</h4>
	<h5>Precio <span class="eur"></span> <span class="eur_new" style="display: none;"></span></h5>






	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>



	<script>


	/*inicio();

	function inicio(){
		$.ajax({
			url     : "src/consume.php",
			type    : "get",
			dataType : "json",
			success : (function (data) {
				$('.btc').text(data.BTC).css('color', 'black');				
				$('.usd').text(data.USD).css('color', 'black');	
				$('.eur').text(data.EUR).css('color', 'black');	
			})
		});

	}*/

    setInterval(comprueba, 2000);

    function comprueba(){


    	$.ajax({
			url     : "consume.php",
			type    : "get",
			dataType : "json",
			success : (function (data) {
				//console.log(data);
					
				$('.btc_new').text(data.BTC);
				$('.usd_new').text(data.USD);
				$('.eur_new').text(data.EUR);
				

				if (parseFloat($('.btc').text()) == parseFloat($('.btc_new').text())) {
					$(".btc").css('color', 'black');
				}
				else if(parseFloat($('.btc').text()) < parseFloat($('.btc_new').text())){
					$(".btc").css('color', 'green');
				}
				else{
					$(".btc").css('color', 'red');
				}


				if (parseFloat($('.usd').text()) == parseFloat($('.usd_new').text())) {
					$(".usd").css('color', 'black');
				}
				else if(parseFloat($('.usd').text()) < parseFloat($('.usd_new').text())){
					$(".usd").css('color', 'green');
				}
				else{
					$(".usd").css('color', 'red');
				}

				if (parseFloat($('.eur').text()) == parseFloat($('.eur_new').text())) {
					$(".eur").css('color', 'black');
				}
				else if(parseFloat($('.eur').text()) < parseFloat($('.eur_new').text())){
					$(".eur").css('color', 'green');
				}
				else{
					$(".eur").css('color', 'red');
				}

				$('.btc').text(data.BTC);
				$('.usd').text(data.USD);
				$('.eur').text(data.EUR);

				console.log(data);

			})
		});
    }



		


    </script>
</body>
</html>



