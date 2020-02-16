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

	<div class="container">
	<section class="category">
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
		</section>
		</div>
		
		