
<div class="slider-container">

 <div class="c">
    <img class="mySlides" src="images/banner1.jpg">
    <img class="mySlides" src="images/banner2.jpg">
    <img class="mySlides" src="images/banner3.jpg">
 </div>

 
</div>
<div class="dots">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>
<div class="clearfix"></div>
<script>
var myIndex = 0;
var slideInterval;
carousel();

function carousel() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > slides.length) {myIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[myIndex-1].style.display = "block";  
  dots[myIndex-1].className += " active";
  slideInterval = setTimeout(carousel, 2000); 
}

function currentSlide(n) {
  clearTimeout(slideInterval); 
  showSlide(n);
  slideInterval = setTimeout(carousel, 2000); 
}

function showSlide(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  myIndex = n;
  slides[n-1].style.display = "block";  
  dots[n-1].className += " active";
}
</script>
<!-- <div class="hom-slider">
   <div class="container">
      <div id="sequence">
         <div class="sequence-prev"><i class="fa fa-angle-left"></i></div>
         <div class="sequence-next"><i class="fa fa-angle-right"></i></div>
         <ul class="sequence-canvas">
            <li class="animate-in">
               <div class="flat-caption caption1 formLeft delay300 text-center"><span class="suphead">YourStyle</span></div>
               <div class="flat-caption caption2 formLeft delay400 text-center">
                  <h2><br />Khám phá vẻ đẹp, <br>Phong cách riêng của bạn</h2><br>
               </div>
               <div class="flat-caption caption3 formLeft delay500 text-center">
               </div>
               <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="#">Chi Tiết Hơn</a></div>
               <div class="flat-image formBottom delay200" data-duration="5" data-bottom="true"><img src="../images/banner1.jpg" alt=""></div>
            </li>
            <li>
               <div class="flat-caption caption2 formLeft delay400">
                  <h1>YourStyle</h1>
               </div>
               <div class="flat-caption caption3 formLeft delay500"> 
                  <h2><br>Nơi phong cách bắt đầu</h2>
               </div>
               <div class="flat-button caption5 formLeft delay600"><a class="more" href="#">Chi Tiết Hơn</a></div>
               <div class="flat-image formBottom delay200" data-bottom="true"><img src="../images/banner2.jpg" alt=""></div>
            </li>
            <li>
               <div class="flat-caption caption2 formLeft delay400 text-center">
                  <h1>YourStyle</h1>
               </div>
               <div class="flat-caption caption3 formLeft delay500 text-center">
                  <p><br>Đơn giản tạo sự sang trọng</p>
               </div>
               <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="#">Chi Tiết Hơn</a></div>
               <div class="flat-image formBottom delay200" data-bottom="true"><img src="../images/banner3.jpg" alt=""></div>
            </li>
         </ul>
      </div>
   </div> -->
   <!--  -->
<!-- </div> -->
   <!-- <script>
      document.querySelector('.dropdown-toggle').addEventListener('click', function(event) {
         event.preventDefault();
         window.location.href = this.href;
      });
   </script> -->