<?php include "nav.php"; 
  

?>	
	<div class="container">
  <div class="row">
  <div class="col-lg-12 ">
		<h1 style="" id="product" style="position:absolute;">Products</h1>
		</div></div>
		<div class="row">
  
  <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="shop-item ">
            <img data-toggle="modal" data-target="#myModal" class="shop-item-image" src="images\2.gif" alt="item"></img>
	
            <img src="images\41.gif" style="display: none;width: 91%; margin-top: -75%;margin-bottom: -99%;margin-left: -5%; position: absolute;" id='img' alt="item" />
            <span class="shop-item-title">منتج 1</span>

            <p class="shop-item-price" ><em>449$</em>
            </p>
            <button class="shop-item-button" onclick="document.getElementById('img').style.display= 'block'" type="button">Add to cart</button>
            <button class="sbutton" type="button">تفاصيل</button>
        </div>
        </div>
				<!-- Modal -->
  <div id="myModal" class="modal fade"  role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background: #8f51ee70;">
        
          <h4 class="modal-title">تفاصيل</h4>
        </div>
        <div class="modal-body">
		<img class="shop-item-image" src="images\2.gif" alt="item" style="margin: 2% 34%;"/>
          <p style="margin: 1% 26%;">تففففففاصيل</p>
        </div>
        
      </div>
      
    </div>
  </div>
 
	
		<div class="col-lg-4 col-md-6 col-sm-12 ">
		<div class="shop-item">
            <img  class="shop-item-image" src="images\2.gif" alt="item" />
			<img src="images\41.gif" style=" display: none; width: 91%; margin-top: -75%; margin-bottom: -99%; margin-left: -5%; position: absolute;" id='img1' alt="item" />
             <span  class="shop-item-title">منتج 2</span>

            <p class="shop-item-price"><em>449$</em>
            </p>
            <button class="shop-item-button" onclick="document.getElementById('img1').style.display= 'block'" type="button">Add to cart</button>
        </div>
        </div>
		
		
		
		<div class="col-lg-4 col-md-6 col-sm-12 ">
			<div class="shop-item">
            <img class="shop-item-image" src="images\1.gif" alt="item" />
			<img src="images\41.gif" style=" display: none;width: 91%; margin-top: -75%; margin-bottom: -99%; margin-left: -5%; position: absolute;" id='img3' alt="item" />
             <span  class="shop-item-title">منتج 3</span>

            <p class="shop-item-price"><em>449$</em>
            </p>
            <button class="shop-item-button" onclick="document.getElementById('img3').style.display= 'block'" type="button">Add to cart</button>
        </div>
        </div>
        
        

		<div class="col-lg-4 col-md-6 col-sm-12 ">
		<div class="shop-item">
            <img class="shop-item-image" src="images\2.gif" alt="item" />
			<img src="images\41.gif" style="display: none; width: 91%; margin-top: -75%; margin-bottom: -99%; margin-left: -5%; position: absolute;" id='img4' alt="item" />
             <span class="shop-item-title" >منتج 4</span>

            <p class="shop-item-price"><em>449$</em>
            </p>
            <button class="shop-item-button" onclick="document.getElementById('img4').style.display= 'block'" type="button">Add to cart</button>
        </div>
        </div>
		
		
		<div class="col-lg-4 col-md-6 col-sm-12">
			<div class="shop-item">
            <img class="shop-item-image" src="images\2.gif" alt="item" />
			<img src="images\41.gif" style=" display: none; width: 91%; margin-top: -75%; margin-bottom: -99%;margin-left: -5%;position: absolute;" id='img5' alt="item" />
             <span class="shop-item-title">منتج 5</span>

            <p class="shop-item-price"><em>449$</em></p>
			
            
            <button class="shop-item-button" onclick="document.getElementById('img5').style.display= 'block'" type="button">Add to cart</button>
        </div>
        </div>
		<div class="col-lg-4 col-md-6 col-sm-12 ">
		<div class="shop-item" >
            <img class="shop-item-image" src="images\2.gif" alt="item" />
			<img src="images\41.gif" style=" display: none; width: 91%; margin-top: -75%; margin-bottom: -99%; margin-left: -5%; position: absolute;" id='img6' alt="item" />
             <span class="shop-item-title">منتج 6</span>

            <p class="shop-item-price"><em>449$</em>
            </p>
            <button class="shop-item-button" onclick="document.getElementById('img6').style.display= 'block'" type="button">Add to cart</button>
        </div>
        
        </div>
		
        </div>
		 
        <a href="" class="load-more">Load More</a>
		</div>
		
		
		

		
		
		
	
		
		
	
<script>
$(function () {
		$(".shop-item").slice(0, 3).show();
		$("body").on('click touchstart', '.load-more', function (e) {
			e.preventDefault();
			$(".shop-item:hidden").slice(0, 3).slideDown();
			if ($(".shop-item:hidden").length == 0) {
				$(".load-more").css('visibility', 'hidden');
			}
			$('html,body').animate({
				scrollTop: $(this).offset().top
			}, 1000);
		});
	});
	


		/*$(.shop-item-button).onclick(){
	//var btn=document.getElementById('shop-item-button');
	document.getElementById('img').style.display="block";
	this.setAttribute('disabled','disabled');
	
}*/
var itemCount = 0;

$('.shop-item-button').click(function (){
  itemCount ++;
  $('#itemCount').html(itemCount).css('display', 'block');
  	//document.getElementById('img').style.display="block";
	this.setAttribute('disabled','disabled');
}); 

$('.clear').click(function() {
  itemCount = 0;
  $('#itemCount').html('').css('display', 'none');
  $('#cartItems').html('');
}); 
/*fly*/
$('.shop-item-button').on('click', function () {
        var cart = $('.shopping-cart');
        var imgtodrag = $(this).parent('.shop-item').find("img").eq(0);
        if (imgtodrag) {
            var imgclone = imgtodrag.clone()
                .offset({
                top: imgtodrag.offset().top,
                left: imgtodrag.offset().left
            })
                .css({
                'opacity': '0.5',
                    'position': 'absolute',
                    'height': '150px',
                    'width': '150px',
                    'z-index': '100'
            })
                .appendTo($('body'))
                .animate({
                'top': cart.offset().top + 20,
                    'left': cart.offset().left + 20,
                    'width': 75,
                    'height': 75
            }, 1000, 'easeInOutExpo');
            
            setTimeout(function () {
                cart.effect("shake", {
                    times: 2
                }, 200);
            }, 1500);

            imgclone.animate({
                'width': 0,
                    'height': 0
            }, function () {
                $(this).detach()
            });
        }
    });
/*fly*/
	
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script>

</script>
<?php  
 include "design/footer.php"; 

?>

