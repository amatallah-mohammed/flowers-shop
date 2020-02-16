<?php include "nav.php"; 
  

?>
<style>
  .badge-notify{
    background:red;
    position:relative;
    top: -20px;
    right: 10px;
  }
  .my-cart-icon-affix {
    position: fixed;
    z-index: 999;
  }
  </style>	
<section class="category">
	<div class="container">
  <div class="row">
  <div class="col-lg-12 ">
		<h1 style="" id="product" style="position:absolute;">Products</h1>
		</div></div>
		<div class="items">
		<div class="row">
  
  <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="shop-item ">
            <img data-toggle="modal" data-target="#myModal" class="shop-item-image" src="images\2.gif" alt="item"></img>
	
            <img src="images\41.gif" style="display: none;width: 91%; margin-top: -75%;margin-bottom: -99%;margin-left: -5%; position: absolute;" id='img' alt="item" />
            <span class="shop-item-title">Item 1</span>

            <p class="shop-item-price" ><em>449$</em>
            </p>
            <button class="shop-item-button" onclick="document.getElementById('img').style.display= 'block'" type="button" data-id="1" data-name="item 1" data-summary="summary 1" data-price="20" data-quantity="1" data-image="images\2.gif">Add to cart</button>
            <button class="sbutton" type="button">Detail</button>
        </div>
        </div>
				<!-- Modal -->
  <div id="myModal" class="modal fade"  role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background: #8f51ee70;">
        
          <h4 class="modal-title">Detail</h4>
        </div>
        <div class="modal-body">
		<img class="shop-item-image" src="images\2.gif" alt="item" style="margin: 2% 34%;"/>
          <p style="margin: 1% 26%;">Some text in the modal</p>
        </div>
        
      </div>
      
    </div>
  </div>
 
	
		<div class="col-lg-4 col-md-6 col-sm-12 ">
		<div class="shop-item">
            <img  class="shop-item-image" src="images\2.gif" alt="item" />
			<img src="images\41.gif" style=" display: none; width: 91%; margin-top: -75%; margin-bottom: -99%; margin-left: -5%; position: absolute;" id='img1' alt="item" />
             <span  class="shop-item-title">Item 2</span>

            <p class="shop-item-price"><em>449$</em>
            </p>
            <button class="shop-item-button" onclick="document.getElementById('img1').style.display= 'block'" type="button"  data-id="2" data-name="item 2" data-summary="summary 2" data-price="20" data-quantity="1" data-image="images\2.gif">Add to cart</button>
        </div>
        </div>
		
		
		
		<div class="col-lg-4 col-md-6 col-sm-12 ">
			<div class="shop-item">
            <img class="shop-item-image" src="images\1.gif" alt="item" />
			<img src="images\41.gif" style=" display: none;width: 91%; margin-top: -75%; margin-bottom: -99%; margin-left: -5%; position: absolute;" id='img3' alt="item" />
             <span  class="shop-item-title">Item 3</span>

            <p class="shop-item-price"><em>449$</em>
            </p>
            <button class="shop-item-button" onclick="document.getElementById('img3').style.display= 'block'" type="button"  data-id="3" data-name="item 3" data-summary="summary 3" data-price="20" data-quantity="1" data-image="images\1.gif">Add to cart</button>
        </div>
        </div>
        
        

		<div class="col-lg-4 col-md-6 col-sm-12 ">
		<div class="shop-item">
            <img class="shop-item-image" src="images\2.gif" alt="item" />
			<img src="images\41.gif" style="display: none; width: 91%; margin-top: -75%; margin-bottom: -99%; margin-left: -5%; position: absolute;" id='img4' alt="item" />
             <span class="shop-item-title" >Item 4</span>

            <p class="shop-item-price"><em>449$</em>
            </p>
            <button class="shop-item-button" onclick="document.getElementById('img4').style.display= 'block'" type="button"  data-id="4" data-name="item 4" data-summary="summary 4" data-price="20" data-quantity="1" data-image="images\2.gif">Add to cart</button>
        </div>
        </div>
		
		
		<div class="col-lg-4 col-md-6 col-sm-12">
			<div class="shop-item">
            <img class="shop-item-image" src="images\2.gif" alt="item" />
			<img src="images\41.gif" style=" display: none; width: 91%; margin-top: -75%; margin-bottom: -99%;margin-left: -5%;position: absolute;" id='img5' alt="item" />
             <span class="shop-item-title">Item 5</span>

            <p class="shop-item-price"><em>449$</em></p>
			
            
            <button class="shop-item-button" onclick="document.getElementById('img5').style.display= 'block'" type="button"  data-id="5" data-name="item 5" data-summary="summary 5" data-price="20" data-quantity="1" data-image="images\2.gif">Add to cart</button>
        </div>
        </div>
		<div class="col-lg-4 col-md-6 col-sm-12 ">
		<div class="shop-item" >
            <img class="shop-item-image" src="images\2.gif" alt="item" />
			<img src="images\41.gif" style=" display: none; width: 91%; margin-top: -75%; margin-bottom: -99%; margin-left: -5%; position: absolute;" id='img6' alt="item" />
             <span class="shop-item-title">Item 6</span>

            <p class="shop-item-price"><em>449$</em>
            </p>
            <button class="shop-item-button" onclick="document.getElementById('img6').style.display= 'block'" type="button" data-id="6" data-name="item 6" data-summary="summary 6" data-price="20" data-quantity="1" data-image="images\2.gif">Add to cart</button>
        </div>
        
        </div>
		
        </div>
		 </div>
		 <div>
        <a href="" class="load-more">Load More</a>
		
		</div>
		</div>
		</section>
		
		
		

		
		
		
	
		
		
	
<script>
/* load more*/
$(function () {
		$(".shop-item").slice(0, 3).show();
		$("body").on('click touchstart', '.load-more', function (e) {
			e.preventDefault();
			$(".shop-item:hidden").slice(0, 3).slideDown();
			if ($(".shop-item:hidden").length == 0) {
				$(".load-more").css('visibility', 'visibile');
			}
			$('html,body').animate({
				scrollTop: $(this).offset().top
			}, 1000);
		});
	});
/*end load more*/	
</script>

<script type='text/javascript' src="js/jquery.mycart.js"></script>

  <script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.shop-item-button').myCart({
      currencySymbol: '$',
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      classProductQuantity: 'my-product-quantity',
      classProductRemove: 'my-product-remove',
      classCheckoutCart: 'my-cart-checkout',
      affixCartIcon: true,
      showCheckoutModal: true,
      numberOfDecimals: 2,
   
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      afterAddOnCart: function(products, totalPrice, totalQuantity) {
        console.log("afterAddOnCart", products, totalPrice, totalQuantity);
      },
      clickOnCartIcon: function($cartIcon, products, totalPrice, totalQuantity) {
        console.log("cart icon clicked", $cartIcon, products, totalPrice, totalQuantity);
      },
      checkoutCart: function(products, totalPrice, totalQuantity) {
        var checkoutString = "Total Price: " + totalPrice + "\nTotal Quantity: " + totalQuantity;
        checkoutString += "\n\n id \t name \t summary \t price \t quantity \t image path";
        $.each(products, function(){
          checkoutString += ("\n " + this.id + " \t " + this.name + " \t " + this.summary + " \t " + this.price + " \t " + this.quantity + " \t " + this.image);
        });
        alert(checkoutString)
        console.log("checking out", products, totalPrice, totalQuantity);
      },
      getDiscountPrice: function(products, totalPrice, totalQuantity) {
        console.log("calculating discount", products, totalPrice, totalQuantity);
        return totalPrice * 0.5;
      }
    });

    $("#addNewProduct").click(function(event) {
      var currentElementNo = $(".row").children().length + 1;
      $(".row").append('<div class="col-md-3 text-center"><img src="images/img_empty.png" width="150px" height="150px"><br>product ' + currentElementNo + ' - <strong>$' + currentElementNo + '</strong><br><button class="btn btn-danger my-cart-btn" data-id="' + currentElementNo + '" data-name="product ' + currentElementNo + '" data-summary="summary ' + currentElementNo + '" data-price="' + currentElementNo + '" data-quantity="1" data-image="images/img_empty.png">Add to Cart</button><a href="#" class="btn btn-info">Details</a></div>')
    });
  });
  </script>
  <script>


		/*$(.shop-item-button).onclick(){
	//var btn=document.getElementById('shop-item-button');
	document.getElementById('img').style.display="block";
	this.setAttribute('disabled','disabled');
	
}*/
/*var itemCount = 0;

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
    });*/

	
/* Get the modal
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
}*/
</script>
<script>

function getData(){
				
			
				$.getJSON("flowers.json",function(value){
					 var output ;
					/*var img="images/1.gif";*/
					$.each(value.flowerlist,function (index, val) {
					output+=('<div class="col-lg-4 col-sm-12 col-md-6" style="visibility:visibile"><div class="shop-item"><img  class="shop-item-image" src="'+val.photo+'" alt="item" data-toggle="modal" data-target="#bd-example-modal-xl" data-title="title1" data-content="title1"/><h3 class="shop-item-title">'+val.name+'</h3><p class="shop-item-price">Price: <em>'+val.price+'</em></p><button class="shop-item-button " data-image-role="trigger"  type="button" >Add to cart</button></div></div>');
					})
					
					$(".category .items .row").append(output);
				})
				
}
getData();			
	
</script>
<?php  
 include "design/footer.php"; 

?>

