<?php include("include/header.php") ?>


<div id="demo" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#demo" data-slide-to="0" class="active"></li>
		<li data-target="#demo" data-slide-to="1"></li>
		<li data-target="#demo" data-slide-to="2"></li>
	</ul>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="images/courasal1.jpg" alt="Los Angeles" style="width:100%; height:450px;" />

		</div>
		<div class="carousel-item">
			<img src="images/courasal2.jpg" alt="Chicago" style="width:100%; height:450px;" />

		</div>
		<div class="carousel-item">
			<img src="images/courasal3.jpg" alt="New York" style="width:100%; height:450px;" />

		</div>
	</div>
	<a class="carousel-control-prev" href="#demo" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
	</a>
	<a class="carousel-control-next" href="#demo" data-slide="next">
		<span class="carousel-control-next-icon"></span>
	</a>
</div>

<br>

<div class="container hotel-body" style="font-size: 20px;">
	<h1 class="hotel-head">Welcome To Hotel RohithPallavi</h1>
	<p>Welcome to RohithLakshmi Hotel, your urban sanctuary in the heart of New York City, conveniently nestled near the iconic Times Square. Our hotel offers a harmonious blend of contemporary elegance and unparalleled convenience, providing a haven for discerning travelers seeking an extraordinary experience. With luxurious accommodations, world-class amenities, and personalized service, we strive to exceed your every expectation. Whether you're here for business or leisure, our prime location puts you within easy reach of the city's most coveted attractions, dining establishments, and entertainment venues. From the moment you arrive, our dedicated staff is committed to ensuring that your stay with us is nothing short of exceptional. Indulge in a remarkable culinary journey at our on-site restaurant, unwind in stylish accommodations boasting breathtaking city views, and explore the vibrant energy of New York City right outside our doors. Welcome to RohithLakshmi Hotel, where every moment is crafted to perfection, and every stay is a cherished memory.</p>
	<p>At RohithPallavi Hotel, our dedication lies in delivering outstanding hospitality and crafting memorable moments for each of our guests. Reserve your accommodation with us today and uncover a harmonious fusion of opulence, convenience, and genuine warmth right in the heart of New Jersey.</p>
</div>

<div class="container text-center">
    <h1 class="hotel-head">Amenities</h1>
    <ul class="amenities-list">
        <li><img src="Icons/wifi.svg" alt="Gym" class="amenity-icon"> <span class="amenity-name">Gym</span></li>
        <li><img src="Icons/ac.svg" alt="Pool" class="amenity-icon"> <span class="amenity-name">Pool</span></li>
        <li><img src="Icons/food.svg" alt="Spa" class="amenity-icon"> <span class="amenity-name">Spa</span></li>
        <li><img src="Icons/laundry.svg" alt="Restaurant" class="amenity-icon"> <span class="amenity-name">Restaurant</span></li>
        <li><img src="Icons/parking.svg" alt="Wi-Fi" class="amenity-icon"> <span class="amenity-name">Wi-Fi</span></li>
		<li><img src="Icons/tv.svg" alt="Wi-Fi" class="amenity-icon"> <span class="amenity-name">Wi-Fi</span></li>
		<li><img src="Icons/wifi.svg" alt="Wi-Fi" class="amenity-icon"> <span class="amenity-name">Wi-Fi</span></li>
		<li><img src="Icons/wifi.svg" alt="Wi-Fi" class="amenity-icon"> <span class="amenity-name">Wi-Fi</span></li>
		<li><img src="Icons/wifi.svg" alt="Wi-Fi" class="amenity-icon"> <span class="amenity-name">Wi-Fi</span></li>
		<li><img src="Icons/wifi.svg" alt="Wi-Fi" class="amenity-icon"> <span class="amenity-name">Wi-Fi</span></li>
    </ul>
</div>



<!-- container to show address -->


<div class="container">
    <div class="row">
	<div class="col-md-6">
	<div class="container">
  
       
  <h4 class="address-color">Visit us at</h4>
  <address>
	  Hotel RohithPallavi <br>
	  167, columbia ave <br>
	  jersy city <br>
	  New Jersy <br>
	  USA <br>
  </address>


  <h4 class="address-color">Contact Us</h4>
  <address>
	  Mail : RohithPallavi@gmail.com <br>
	  Phone : 40862766972 <br>			
  </address>


</div>
	</div>
	<div class="col-md-6">
	<div class="container">
		
		<h1 class="hotel-head">Maps</h1>
		<div class="google-map">
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.364403794278!2d-74.05597272529953!3d40.75400927138725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2576d4a85d971%3A0x8c6e61d1193b83de!2s167%20Columbia%20Ave%2C%20Jersey%20City%2C%20NJ%2007307!5e0!3m2!1sen!2sus!4v1685255730524!5m2!1sen!2sus"
				width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy"
				referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>

  </div>
     </div>
	</div>
</div>

<br>
<!-- container to show maps -->
 

<script>
	$(document).ready(function () {
		$(".collapse.show").each(function () {
			$(this)
				.prev(".card-header")
				.find(".fa")
				.addClass("fa-minus")
				.removeClass("fa-plus");
		});

		$(".collapse")
			.on("show.bs.collapse", function () {
				$(this)
					.prev(".card-header")
					.find(".fa")
					.removeClass("fa-plus")
					.addClass("fa-minus");
			})
			.on("hide.bs.collapse", function () {
				$(this)
					.prev(".card-header")
					.find(".fa")
					.removeClass("fa-minus")
					.addClass("fa-plus");
			});


	});

</script>


<?php include("include/footer.php") ?>