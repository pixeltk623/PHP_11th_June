	<div class="banner wow fadeInUp" data-wow-delay="0.4s" id="Home">
		    <div class="container">
				<div class="banner-info">
					<div class="banner-info-head text-center wow fadeInLeft" data-wow-delay="0.5s">
						<h1>Network of over 5000 Restaurants</h1>
						<div class="line">
							<h2> To Order Online</h2>
						</div>
					</div>
					<div class="form-list wow fadeInRight" data-wow-delay="0.5s">
						<form>
						  <ul class="navmain">
							<li><span>Location Name</span>
							 <input type="text" class="text" value="Secunderabad" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Secunderabad';}">
							</li>
							<li><span>Restaurant Name</span>
							 <input type="text" class="text" value="Swagath Grand" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Swagath Grand';}">
							</li>
							<li><span>Cuisine Name</span>
							 <input type="text" class="text" value="Chicken Biriyani" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Chicken Biriyani';}">
						    </li>
						  </ul>
						</form>
						</div>
					<!-- start search-->
		 <div class="main-search">
	        <form action="search.html">
	           <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text"/>
	            <input type="submit" value=""/>
	        </form>
	        <div class="close"><img src="images/cross.png" /></div>
	    </div>
	    <div class="srch"><button></button></div>
		<script type="text/javascript">
	         $('.main-search').hide();
	        $('button').click(function (){
	            $('.main-search').show();
	            $('.main-search text').focus();
	        }
	        );
	        $('.close').click(function(){
	            $('.main-search').hide();
	        });
	    </script>
					
				</div>
			</div>
		</div>
	</div>
	