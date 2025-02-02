<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
}

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Super Home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">

   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/bootstrap-slider.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.0/moment.min.js"></script>
</head>
<body>
   
<?php include 'components/user_header.php'; ?>



<section class="welcome-section">
   <div class="welcome-content">
      <h1>Hello!</h1>
      <p>Welcome to Super Home.</p>
   </div>
</section>

<style>
   .welcome-section {
   background-image: url('uploaded_img/background.png'); /* Add the path to your background image */
   background-size: cover;
   background-position: center;
   height: 100vh; /* Adjust the height as needed */
   display: flex;
   justify-content: center;
   align-items: center;
   text-align: center;
   color: white; /* Text color */
}

.welcome-content {
   max-width: 600px; /* Adjust the width as needed */
   padding: 20px;
   font-size: 20px;
   
   background: #e9e9ed;
}

.welcome-content h1 {
   font-size: 3em; /* Adjust the font size as needed */
   
}

.welcome-content p {
   font-size: 1.5em; /* Adjust the font size as needed */
   margin-top: 10px; /* Add spacing between heading and paragraph */
   color: black;
}

</style>

<section class="facilities-section">
   <h2 class="section-heading">Facilities</h2>
   <div class="facility">
      <img src="uploaded_img/no-image.svg" alt="Bed Image">
      <p>Personal Bed</p>
   </div>
   <div class="facility">
      <img src="uploaded_img/no-image.svg" alt="Locker Image">
      <p>Locker</p>
   </div>
   <div class="facility">
      <img src="uploaded_img/no-image.svg" alt="Reading Room Image">
      <p>Reading Room</p>
   </div>
   <div class="facility">
      <img src="uploaded_img/no-image.svg" alt="Meal Image">
      <p>Meal</p>
   </div>
   <div class="facility">
      <img src="uploaded_img/no-image.svg" alt="Playing Ground Image">
      <p>Playing Ground</p>
   </div>
   <div class="facility">
      <img src="uploaded_img/no-image.svg" alt="Gym Image">
      <p>GYM</p>
   </div>
</section>

<section class="special-packages" style="background: green;margin-bottom: 15px;">
   <h2 class="section-heading">Explore our Special and Comfortable Packages</h2>
   <div class="package-description">
      <p>Experience luxury and comfort like never before with our special packages tailored just for you. Whether you're planning a romantic getaway, a family vacation, or a solo adventure, we have the perfect package to suit your needs. Indulge in exquisite amenities, breathtaking views, and exceptional service as you create memories to last a lifetime.</p>
   </div>
</section>



<style>
   .special-packages {
   text-align: center; /* Center-align the content */
   padding: 50px 0; /* Add padding to the top and bottom */
   font-size: 20px;
}

.section-heading {
   font-size: 2.5em; /* Increase font size for heading */
   margin-bottom: 20px; /* Add some space below the heading */
}

.package-description {
   max-width: 800px; /* Limit the width of the description */
   margin: 0 auto; /* Center the description */
   line-height: 1.6; /* Increase line height for better readability */
}

.package-description p {
   margin-bottom: 20px; /* Add some space below each paragraph */
}

.package-description p:last-child {
   margin-bottom: 0; /* Remove space below the last paragraph */
}

</style>

<h2 class="section-heading">Day-Based Packages</h2>
<div class="all_container">
         
<section class="category">

   

   <div class="swiper category-slider">
  
   <div class="swiper-wrapper">
   
   
   <a href="#" onload='trigger()' class="swiper-slide slide"onClick="update_2()"  id="two">
   
      <h3><i class="fa-solid fa-xl">1 Day<span>1 Day</span></i></h3>
   </a>

   <a href="#" class="swiper-slide slide" onClick="update_3()"  id="three">
      
   <h3><i class="fa-solid fa-xl">3 Day<span>3 Day</span></i></h3>
   
   </a>

   <a href="#" class="swiper-slide slide" onClick="update_4()"  id="four">
      
   <h3><i class="fa-solid fa-xl">5 Day<span>5 Day</span></i></h3>
   </a>

   <a href="#" class="swiper-slide slide" onClick="update_5()"  id="five">
      
   <h3><i class="fa-solid fa-xl">7 Day<span>7 Day</span></i></h3>
   </a>

   <a href="#" class="swiper-slide slide" onClick="update_6()"  id="six">
      
   <h3><i class="fa-solid fa-xl">15 Day<span>15 Day</span></i></h3>
   
   </a>

    <a href="" class="swiper-slide slide" onClick="update_7()"  id="seven">
      
    <h3><i class="fa-solid fa-xl"> Month<span>1 Month</span></i></h3>
   
   </a>

   
   
   </div>
 
   </div>
   
<div class="container" id="data"></div>

</section>





</div>


<style>
.section-heading {
   text-align: center;
   font-size: 24px;
   margin-bottom: 20px;
   position: relative;
}

.section-heading::after {
   content: "";
   display: block;
   width: 60px; /* Adjust the width of the underline as needed */
   height: 2px; /* Adjust the height of the underline as needed */
   background-color: #000; /* Adjust the color of the underline as needed */
   position: absolute;
   bottom: -10px; /* Adjust the distance of the underline from the text as needed */
   left: 50%;
   transform: translateX(-50%);
}


.facilities-section {
   text-align: center; /* Align the facilities in the center */
}

.facility {
   display: inline-block; /* Display the facilities in a row */
   vertical-align: top; /* Align the elements to the top */
   width: 200px; /* Set a fixed width for each facility */
   margin: 0 20px; /* Add some spacing between the facilities */
   text-align: center; /* Center align the content within each facility */
   margin-bottom: 25px;
}

.facility img {
   width: 150px; /* Adjust image size as needed */
   height: 150px; /* Adjust image size as needed */
   object-fit: cover;
   border-radius: 50%; /* Makes the image round */
   margin-bottom: 10px;
}

.facility p {
   font-size: 15px;
}


</style>



<section class='data'>
         <h3 id='category_name'>Room</h3>
         <div id='load-data' ></div>
         <button class="btn" id="btn-load-more">Load more</button>
</section>






      <article id="modal-container">
			<section id="modal-section" class="filter">
				
            <div class='input-box'>
            <div class="reg">
               <div class="container-reg">
                  <div class="titlee">Filter
                  <button id="modal-close-button">X</button>
                  </div>
                  <div class="content-reg">
                  <form action="" method="post" autocomplete="on">
                     <div class="user-details-reg">
                         <div class="range">
                           <div class="range-slider">
                           <span class="range-selected"></span>
                           </div>
                           <div class="range-input">
                           <input type="range" class="min" min="0" id="range_min" max="60000" value="0" step="10">
                           <input type="range" class="max" min="0" id="range_max" max="60000" value="60000" step="10">
                           </div>
                           <div class="range-price">      
                           <label for="min">Min</label>
                           <input type="number" name="min" id="min" value="0">      
                           <label for="max">Max</label>
                           <input type="number" name="max" id="max" value="60000">      
                           </div>
                        </div> 
                        

                        <div class="input-box">
                        <span class="details-reg">Bedroom</span>
                        <input type="number" placeholder="Bedroom" id="bedroom" />
                        </div>
                        <div class="input-box">
                        <span class="details-reg">Beds</span>
                        <input type="number" placeholder="Bed" id="bed"/>
                        </div>
                        <div class="input-box">
                        <span class="details-reg">Bathroom</span>
                        <input type="number" placeholder="Bathroom"id="bath" />
                        </div>
                        <div class="input-box">
                        <span class="details-reg">Person</span>
                        <input type="number" placeholder="Person" id="person"/>
                        </div>
                        <div class="input-box">
                        <span class="details-reg">Checkin</span>
                        <input type="text" placeholder="Checkin" id="filter_checkin" autocomplete='off'/>
                        </div>
                        <div class="input-box">
                        <span class="details-reg">CheckOut</span>
                        <input type="text" placeholder="Checkout" id="filter_checkout" autocomplete='off'/>
                        </div>
                        
                        <div class="input-box">
                        <span class="details-reg">Country</span>
                        <select name='country' class="country" id="country"size="1"  onchange="loadStates();selectcountry(this);">
                              <option value="1"  selected="selected">-- Select Country --</option>
                        </select>
                        </div>
                        <div class="input-box">
                        <span class="details-reg">State</span>
                        <select name='state' class="state" size="1" id="state" onchange="loadCities();selectstate(this);">
                             <option value="1" selected="selected">-- Select State --</option>
                        </select>
                        </div>
                        <div class="input-box">
                        <span class="details-reg">City</span>
                        <select class="city" size="1" name="city" id="city" onchange='selectcity(this);'>
                              <option value="1" selected="selected" >-- Select City --</option>
                        </select>
                        </div>
                     </div>
                     <div class="button-reg">
                        <input type="submit" value="Apply" name="filter_submit" id="filter_submit"></button>
                     </div>
                     <button type='button' id="clear" class="btn">Clear all </button>

                  </form>
                  </div>
               </div>
               </div>
				</div>
				
				<p></p>
			</section>
		</article>
   </div>
      <script>
	       let X = document.getElementById('popbtn');
	let modal = document.getElementById('modal-container');
	let Y = document.getElementById('modal-close-button');

	X.onclick = function() {
	 modal.style.display = "block";
	}

	Y.onclick = function() {
	 modal.style.display = "none";
	}
   window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }

}

   

	</script>




<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
<script src="js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js" integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.0/themes/base/jquery-ui.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- country  -->

<script src='js/country.js'></script>



<!-- Pagination  -->


<script >
 


const one = document.getElementById("one");
const two = document.getElementById("two");
const three = document.getElementById("three");
const four = document.getElementById("four");
const five = document.getElementById("five");
const six = document.getElementById("six");
const seven = document.getElementById("seven");
const eight = document.getElementById("eight");
const nine = document.getElementById("nine");
const ten = document.getElementById("ten");
const eleven = document.getElementById("eleven");

function trigger(){
   document.getElementById("two").click();
}

window.addEventListener('load', function () {
  document.getElementById("two").click();})

 


var categoryselect='beach';

function update_1() {
  reset();
  $('.icon_select1').css('display', 'flex');
  $('#category_name').html('Room');
  categoryselect='room';
  
}

function update_2() {
  reset();
  $('.icon_select2').css('display', 'flex');
  $('#category_name').html('1 Day');
  categoryselect='beach';
 }
 function update_3() {
  reset();
  $('.icon_select3').css('display', 'flex');
  $('#category_name').html('3 Day');
  categoryselect='city';
 }
 function update_4() {
  reset();
  $('.icon_select4').css('display', 'flex');
  $('#category_name').html('5 Day');
  categoryselect='camping';
 }
 function update_5() {
  reset();
  $('.icon_select5').css('display', 'flex');
  $('#category_name').html('7 Day');
  categoryselect='hill';
 }
 function update_6() {
  reset();
  $('.icon_select6').css('display', 'flex');
  $('#category_name').html('15 Day');
  categoryselect='forest';
 }
 function update_7() {
  reset();
  $('.icon_select7').css('display', 'flex');
  $('#category_name').html('1 Month');
  categoryselect='boat';
 }
 function update_8() {
  reset();
  $('.icon_select8').css('display', 'flex');
  $('#category_name').html('Castle');
  categoryselect='castle';
 }
 function update_9() {
  reset();
  $('.icon_select9').css('display', 'flex');
  $('#category_name').html('Golf');
  categoryselect='golf';
  
 }
 function update_10() {
  reset();
  $('.icon_select10').css('display', 'flex');
  $('#category_name').html('Apartment');
  categoryselect='apartment';
 }
 function update_11() {
  reset();
  $('.icon_select11').css('display', 'flex');
  $('#category_name').html('Tower');
  categoryselect='tower';
 }
 
function reset() {
   $('.icon_select1').css('display', 'none');
   $('.icon_select2').css('display', 'none');
   $('.icon_select3').css('display', 'none');
   $('.icon_select4').css('display', 'none');
   $('.icon_select5').css('display', 'none');
   $('.icon_select6').css('display', 'none');
   $('.icon_select7').css('display', 'none');
   $('.icon_select8').css('display', 'none');
   $('.icon_select9').css('display', 'none');
   $('.icon_select10').css('display', 'none');
   $('.icon_select11').css('display', 'none');
}


let flag=0;

      $(document).ready(function(){
        
  

         $('#load-data').html('loading');
         $('#load-data').css('justify-content','center');
                     $('#load-data').css('font-size','5rem');
                     $('#load-data').css('color','grey');
                     $('#load-data').css('min-height','50vh');
                   
                  
         const limit=10;
         let start =0;
         function load_data_ajax(limit, start, categoryselect) {
    $.ajax({
        url: 'fetch_data.php',
        type: 'get',
        data: {
            limit: limit,
            start: start,
            categoryselect: categoryselect
        },
        dataType: 'json',
        success: function (result) {
            if (result.status == 1) {

                document.getElementById("btn-load-more").disabled = false;
                document.querySelector('#btn-load-more').textContent = 'Load More';
                document.getElementById("btn-load-more").style.cursor = "pointer";
                const data = result.data;
                let html = '';
                $.each(data, function (index, product) {

                    html += `
                    <section class='products' ">
                       <div class="box-container">
                             <div class="box" >
                    <form action=""  method="post" >
                          <input type="hidden" name="pid" value="${product['id']}">
                          <input type="hidden" name="name" value="${product['name']}">
                          <input type="hidden" name="city" value="${product['city']}">
                          <input type="hidden" name="country" value="${product['country']}">
                          <input type="hidden" name="price" value="${product['price']}">
                          <input type="hidden" name="image" value="${product['image_01']}">
                          <input type="hidden" name="seller" value="${product['seller']}">
                          <input type="hidden" name="seller_id" value="${product['seller_id']}">
                         
                          
                          <swiper-container class="mySwiper" pagination='true' pagination-clickable='true'style="--swiper-pagination-color: white;--swiper-pagination-bullet-size: 5px; --swiper-pagination-bullet-horizontal-gap: 3px;" >

                         
                                <swiper-slide>
                                <a href="quick_view.php?pid=${product['id']} " target="_blank">
                                   <img src="uploaded_img/${product['image_01']}  "  alt="">
                                   <button id='wish' class="fa-regular fa-heart" type="submit" name="add_to_wishlist"></button>
                                </a>
                                </swiper-slide>
                                
                                
                                <swiper-slide>
                                <a href="quick_view.php?pid=${product['id']} "target="_blank" >
                                   <img src="uploaded_img/${product['image_02']}  "  alt="">
                                   <button id='wish' class="fa-regular fa-heart" type="submit" name="add_to_wishlist"></button>
                                </a>
                                </swiper-slide>
                                <swiper-slide>
                                <a href="quick_view.php?pid=${product['id']} " target="_blank">
                                   <img src="uploaded_img/${product['image_03']}  "  alt="">
                                   <button id='wish' class="fa-regular fa-heart" type="submit" name="add_to_wishlist"></button>
                                </a>
                                </swiper-slide>
                          </swiper-container >
                          <a href="quick_view.php?pid=${product['id']} "target="_blank" >
                          <div class="name"><b>${product['city']}, ${product['country']} </b></div>
                             <div class="flex">
                             <div class="card">
                                <div class="flex-btn title">
                                <span class='date-title'>Place</span>
                                <span class='price-title'>Per 1 Day</span>
                                </div>    

                                <div class="flex-btn ">
                                <p class="grid-item date"><span id='checkin'>${product['name']}</span></p>
                                <p class="grid-item price"><span id='price'>TK ${product['price']}</span><span></span></p>
                             </div>
                              </div>                           
                             </a>
                              

         

      </div>

                          </div>
                     </form>
                       </div>
                       </div>
                         
                    </section>
                    `;


                });
                if (start == 0) {
                    $('#load-data').html(html);
                } else {
                    $('#load-data').append(html);
                }
            } else {

                document.querySelector('#btn-load-more').textContent = 'No more results';
                document.getElementById("btn-load-more").style.cursor = "no-drop";
                document.getElementById("btn-load-more").disabled = true;
            }
        },
        error: function (xhr, status, error) {
            console.error("Error:", error);
            //console.error("Status:", status);
            console.error("Response:", xhr.responseText);
            // You can log errors to the console or send them to a logging service
            // for more detailed error handling
        }
    });
}



         $("#btn-load-more").click(function(){
               start= start+limit;
               if(flag==0)
               {
               load_data_ajax(limit,start,categoryselect);
               }
               else{
                  load_filter_data_ajax(limit,start,categoryselect);

               }

         })

         
         $("#one").click(function($e){
            start=0;
            

            let clean=document.querySelector('#load-data');
                  clean.replaceChildren();
            $e.preventDefault();


            categoryselect='room';
               
            if(flag==0)
               {
               load_data_ajax(limit,start,categoryselect);
               }
               else{
                  load_filter_data_ajax(limit,start,categoryselect);

               }

         })
         $("#two").click(function($e){
            start=0;
            let clean=document.querySelector('#load-data');
                  clean.replaceChildren();
            $e.preventDefault();
            categoryselect='beach';

            if(flag==0)
               {
               load_data_ajax(limit,start,categoryselect);
               }
               else{
                  load_filter_data_ajax(limit,start,categoryselect);

               }

         })
         $("#three").click(function($e){
            start=0;
            let clean=document.querySelector('#load-data');
                  clean.replaceChildren();
            $e.preventDefault();
            categoryselect='city';
               

            if(flag==0)
               {
               load_data_ajax(limit,start,categoryselect);
               }
               else{
                  load_filter_data_ajax(limit,start,categoryselect);

               }

         })
         $("#four").click(function($e){
            start=0;
            let clean=document.querySelector('#load-data');
                  clean.replaceChildren();
            categoryselect='camping';
            $e.preventDefault();

            if(flag==0)
               {
               load_data_ajax(limit,start,categoryselect);
               }
               else{
                  load_filter_data_ajax(limit,start,categoryselect);

               }

         })
         $("#five").click(function($e){
            start=0;
            let clean=document.querySelector('#load-data');
                  clean.replaceChildren();
            categoryselect='hill';
            $e.preventDefault();

            if(flag==0)
               {
               load_data_ajax(limit,start,categoryselect);
               }
               else{
                  load_filter_data_ajax(limit,start,categoryselect);

               }

         })
         $("#six").click(function($e){
            start=0;
            let clean=document.querySelector('#load-data');
                  clean.replaceChildren();
            categoryselect='forest';
            $e.preventDefault();

            if(flag==0)
               {
               load_data_ajax(limit,start,categoryselect);
               }
               else{
                  load_filter_data_ajax(limit,start,categoryselect);

               }

         })
         $("#seven").click(function($e){
            start=0;
            let clean=document.querySelector('#load-data');
                  clean.replaceChildren();
            categoryselect='boat';
            $e.preventDefault();

            if(flag==0)
               {
               load_data_ajax(limit,start,categoryselect);
               }
               else{
                  load_filter_data_ajax(limit,start,categoryselect);

               }
         })
         $("#eight").click(function($e){
            start=0;
            let clean=document.querySelector('#load-data');
                  clean.replaceChildren();
            categoryselect='castle';
            $e.preventDefault();

            if(flag==0)
               {
               load_data_ajax(limit,start,categoryselect);
               }
               else{
                  load_filter_data_ajax(limit,start,categoryselect);

               }

         })
         $("#nine").click(function($e){
            start=0;
            let clean=document.querySelector('#load-data');
                  clean.replaceChildren();
            categoryselect='golf';
               
            $e.preventDefault();
            if(flag==0)
               {
               load_data_ajax(limit,start,categoryselect);
               }
               else{
                  load_filter_data_ajax(limit,start,categoryselect);

               }

         })
         $("#ten").click(function($e){
            start=0;
            let clean=document.querySelector('#load-data');
                  clean.replaceChildren();
            categoryselect='apartment';
            $e.preventDefault();

            if(flag==0)
               {
               load_data_ajax(limit,start,categoryselect);
               }
               else{
                  load_filter_data_ajax(limit,start,categoryselect);

               }

         })
         $("#eleven").click(function($e){
            start=0;
            let clean=document.querySelector('#load-data');
                  clean.replaceChildren();
            categoryselect='tower';
            $e.preventDefault();

            if(flag==0)
               {
               load_data_ajax(limit,start,categoryselect);
               }
               else{
                  load_filter_data_ajax(limit,start,categoryselect);

               }

         })
       
         function load_filter_data_ajax(limit,start,categoryselect){
          
               
            
            $.ajax({
               url: 'filter_data.php',
               type:'get',
               data : {
                  limit:limit,
                  start:start,
                  categoryselect:categoryselect,
                  min:$("#min").val(),
                  max:$("#max").val(),
                  bedroom:$("#bedroom").val(),
                  bed:$("#bed").val(),
                  bath:$("#bath").val(),
                  person:$("#person").val(),
                  country:$("#country option:selected").text(),
                  state:$("#state option:selected").text(),
                  city:$("#city option:selected").text(),
                  checkin: $('#filter_checkin').val(),
                  checkout: $('#filter_checkout').val()
                  
               },
               
               dataType:'json',
               success:function(result){
                  if(result.status==1)
                  {
                     document.getElementById("btn-load-more").disabled = false;
                     document.querySelector('#btn-load-more').textContent='Load More';
                     document.getElementById("btn-load-more").style.cursor = "pointer";
                     const data=result.data;
                     let html='';
                     $.each(data,function(index,product){
                        html+=`
                        <section class='products' ">
                           <div class="box-container">
                                 <div class="box" >
                        <form action=""  method="post" >
                              <input type="hidden" name="pid" value="${product['id']}">
                              <input type="hidden" name="name" value="${product['name']}">
                              <input type="hidden" name="city" value="${product['city']}">
                              <input type="hidden" name="country" value="${product['country']}">
                              <input type="hidden" name="price" value="${product['price']}">
                              <input type="hidden" name="image" value="${product['image_01']}">
                              <input type="hidden" name="seller" value="${product['seller']}">
                              <input type="hidden" name="seller_id" value="${product['seller_id']}">
                             
                              
                              <swiper-container class="mySwiper" pagination='true' pagination-clickable='true'style="--swiper-pagination-color: white;--swiper-pagination-bullet-size: 5px; --swiper-pagination-bullet-horizontal-gap: 3px;" >

                             
                                    <swiper-slide>
                                    <a href="quick_view.php?pid=${product['id']} " target="_blank">
                                       <img src="uploaded_img/${product['image_01']}  "  alt="">
                                       <button id='wish' class="fa-regular fa-heart" type="submit" name="add_to_wishlist"></button>
                                    </a>
                                    </swiper-slide>
                                    
                                    
                                    <swiper-slide>
                                    <a href="quick_view.php?pid=${product['id']} "target="_blank" >
                                       <img src="uploaded_img/${product['image_02']}  "  alt="">
                                       <button id='wish' class="fa-regular fa-heart" type="submit" name="add_to_wishlist"></button>
                                    </a>
                                    </swiper-slide>
                                    <swiper-slide>
                                    <a href="quick_view.php?pid=${product['id']} " target="_blank">
                                       <img src="uploaded_img/${product['image_03']}  "  alt="">
                                       <button id='wish' class="fa-regular fa-heart" type="submit" name="add_to_wishlist"></button>
                                    </a>
                                    </swiper-slide>
                              </swiper-container >
                              <a href="quick_view.php?pid=${product['id']} " target="_blank" >
                              <div class="name"><b>${product['city']}, ${product['country']} </b></div>
                                 <div class="flex">
                                 <div class="card">
                                    <div class="flex-btn title">
                                    <span class='date-title'>Place</span>
                                    <span class='price-title'>Per 1 Day</span>
                                    </div>    

                                    <div class="flex-btn ">
                                    <p class="grid-item date"><span id='checkin'>${product['name']}</span></p>
                                    <p class="grid-item price"><span id='price'>TK ${product['price']}</span><span></span></p>
                                 </div>
                                  </div>                           
                                 </a>
                                  
                 
                       

              </div>

                              </div>
                         </form>
                           </div>
                           </div>
                             
                        </section>
                        `;
                     });
                    if(start==0)
                    {
                     $('#load-data').html(html);
                    }
                    else
                    {
                     $('#load-data').append(html);
                    }
                  }
                  else{
                     if(start==0)
                    {
                     $('#load-data').html('No result');
                     $('#load-data').css('font-size','5rem');
                     $('#load-data').css('min-height','80vh');
                     $('#load-data').css('margin-top','5rem');
                     $('#load-data').css('color','grey');
                    }
                    else
                    {
                     $('#load-data').append('');
                     document.querySelector('#btn-load-more').textContent='No more results';
                     document.getElementById("btn-load-more").style.cursor = "no-drop";
                     document.getElementById("btn-load-more").disabled = true;
                    }
                     
                     document.querySelector('#btn-load-more').textContent='No more results';
                     document.getElementById("btn-load-more").style.cursor = "no-drop";
                     document.getElementById("btn-load-more").disabled = true;
                  }
               }
            })
         }
   
         var dates= $("#filter_checkin,#filter_checkout").datepicker({
   dateFormat: 'dd-mm-yy',
   gotoCurrent: true,
   defaultDate:"1+w",
   maxDate: "3m+",
   changeMonth:true,
   numberOfMonths:1,
   minDate:new Date(),
   onSelect:function(selectedDate){
      var option=this.id=="filter_checkin" ? "minDate" :"maxDate",
      instance= $(this).data("datepicker"),
    date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
    date.setDate(date.getDate() + 1);
         dates.not(this).datepicker("option",option,date);   
      
   }
   
});
         
         $("#clear").click(function(){

            
            $('#max').val(60000);
            $('#min').val(0);
            $('.range-selected').css( 'left', '0%' );
            $('.range-selected').css( 'right', '0%' );
            $('#range_min').val(0);
            $('#range_max').val(60000);
            $('#bedroom').val(null);
            $('#bed').val(null);
            $('#bath').val(null);
            $('#filter_checkin').val(null);
            $('#filter_checkout').val(null);
            $('#country').val(1);
            $('#state').val("-- Select State --");
            $('#city').val("-- Select City --");
            $('#state').attr('disabled', 'disabled');
            $('#city').attr('disabled', 'disabled');
            $('.icon_num').css('display', 'none');
            flag=0;
         load_data_ajax(limit,start,categoryselect);

        })
      
         $("#filter_submit").click(function($e){
            $('.icon_num').css('display', 'flex');
            start=0;
            $e.preventDefault();
            flag=1;
            load_filter_data_ajax(limit,start,categoryselect);

         })

        

      });

</script>



<!-- swiper  -->

<script>



 var swiper = new Swiper(".category-slider", {
   loop:false,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 1,
       },
       230:{
         slidesPerView: 2
       },
       
      650: {
        slidesPerView: 3,
      },
      1224: {
        slidesPerView: 5,
      },
      1424: {
        slidesPerView: 6,
      },
      1624: {
        slidesPerView: 7,
      },
      1824: {
        slidesPerView: 8,
      },
      1924: {
        slidesPerView: 10,
      },
     
   },
   navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});





</script>


<script>
   function selectcountry(sel){
      $countryOption = sel.options[sel.selectedIndex].text;
      document.cookie='countryoption='+$countryOption;
   }
   function selectstate(sel){
      $stateOption = sel.options[sel.selectedIndex].text;
      document.cookie='stateoption='+$stateOption;
   }
   function selectcity(sel){
      $cityOption = sel.options[sel.selectedIndex].text;
      document.cookie='cityoption='+$cityOption;
      
   }
</script>


<script src='../js/country.js'></script>



<script>
   let rangeMin = 0;
const range = document.querySelector(".range-selected");
const rangeInput = document.querySelectorAll(".range-input input");
const rangePrice = document.querySelectorAll(".range-price input");
rangeInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minRange = parseInt(rangeInput[0].value);
    let maxRange = parseInt(rangeInput[1].value);
    if (maxRange - minRange < rangeMin) {     
      if (e.target.className === "min") {
        rangeInput[0].value = maxRange - rangeMin;        
      } else {
        rangeInput[1].value = minRange + rangeMin;        
      }
    } else {
      rangePrice[0].value = minRange;
      rangePrice[1].value = maxRange;
      range.style.left = (minRange / rangeInput[0].max) * 100 + "%";
      range.style.right = 100 - (maxRange / rangeInput[1].max) * 100 + "%";
    }
  });
});
rangePrice.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minPrice = rangePrice[0].value;
    let maxPrice = rangePrice[1].value;
    if (maxPrice - minPrice >= rangeMin && maxPrice <= rangeInput[1].max) {
      if (e.target.className === "min") {
        rangeInput[0].value = minPrice;
        range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
      } else {
        rangeInput[1].value = maxPrice;
        range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
      }
    }
  });
});
</script>


</body>
</html>