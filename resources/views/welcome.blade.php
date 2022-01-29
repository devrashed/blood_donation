@extends('layouts.app')
@section('title', 'Welcome to Care life Bangladesh')

@section('content')

<div class="banner"> 

  <img src="././public/upload/banner-1.png">

</div> <!-- END THE BANNER -->


<div class="blood_doonar clr">    
    29999 Blood Donar Available
</div>


  <div class="row">     
  
  <div class="col-md-6"> <h3>Distric Wise</h3> <br> 

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Division Name</th>
      <th scope="col">Blood Donar</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Dhaka</td>
      <td>200</td>
    </tr>
    <tr>
      <td>Chittagong</td>
      <td>190</td>
    </tr>
    <tr>
      <td>Khulna</td>
      <td>169</td>
    </tr>
    <tr>
      <td>Rajshahi</td>
      <td>290</td>
    </tr> 

    <tr>
      <td>Brishal</td>
      <td>290</td>
    </tr> 
    <tr>
      <td>sylhet</td>
      <td>299</td>
    </tr>   
    
    <tr>
      <td>Rongpur</td>
      <td>276</td>
    </tr>

        </tbody>
     </table>
  </div> <!-- END THE DISTRICT -->


  <div class="col-md-6"> <h3>Blood Group</h3> <br> 

 <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Blood Group</th>
      <th scope="col">Total Donar</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>A+</td>
      <td>200</td>
    </tr>
    <tr>
      <td>A-</td>
      <td>190</td>
    </tr>
    <tr>
      <td>B+</td>
      <td>169</td>
    </tr>
    <tr>
      <td>B-</td>
      <td>290</td>
    </tr> 
    <tr>
      <td>AB+</td>
      <td>299</td>
    </tr>   
    
    <tr>
      <td>AB-</td>
      <td>276</td>
    </tr>
    <tr>
      <td>O+</td>
      <td>276</td>
    </tr>
     <tr>
      <td>O-</td>
      <td>276</td>
    </tr>


   </tbody>
</table>     

   </div> <!-- END THE Blood -->
</div> <!-- END THE ROW -->   
  

<h2><b>Our Activites</b></h2> <br><br>
 
<div class="row tgap"> 

 <div class="col-md-6" ><img src="././public/upload/winterch.png"> </div>
 <div class="col-md-6"> <h4><b>Winter Cloth Distribution</b></h4>
     'Winter Cloth Distribution' is a campaign organized every year by Duke of Edinburgh's International Award at IUB (DEA IUB) as an initiative to help the underprivileged. This year it successfully took place on December 19, 2018 at Lalmonirhat Upazila. This campaign started off by collecting funds, blankets, clothes for weeks, making it possible to help around 150 people at that place. The students, faculties, staffs of Independent University, Bangladesh contributed wholeheartedly with just one motive: to share the gift of warmth in this winter to those who are in need. DEA IUB is obliged to Independent University, Bangladesh for their keenness, immense generosity and to make this campaign a big success. DEA IUB is also thankful to Mr. Mehadi Hassan, Managing Director of Azad Jute Mills Limited and an ex-IUBian, for his heartiest support in organizing the winter.  

     </div>
</div> 




<div class="row tgap"> 
     <div class="col-md-6"> <h4><b>Home Construction Program</b></h4>
The Executive Committee of the National Economic Council (Ecnec) has approved a housing project for the middle- and low-income people in Dhaka, titled Uttara Flat Construction Project.
The project, among eight others, was approved at an Ecnec meeting chaired by Prime Minister Sheikh Hasina on Tuesday, Planning Minister AHM Mustafa Kamal told reporters during a post-meeting briefing.Under the project, which will be implemented by the Rajdhani Unnayan Kartripakkha (Rajuk) with support from Malaysia, a total of 131 buildings containing.
      </div>
     <div class="col-md-6"><img src="././public/upload/home.png"> </div>
</div> 

<div class="row tgap"> 
 <div class="col-md-6"> <img src="././public/upload/blood_donar.png"></div>

 <div class="col-md-6"> <h4><b>Blood Collection from Donar</b></h4>     
Across Bangladesh, every day there remains an urgent need for all types of blood groups. Especially donors with rare blood groups such as O Negative, B Negative and A Negative are in high demand. Your timely response is essential to the supply of healthy blood for the massive daily demand we face.
<br>
Your donation can save the lives of many, make a difference or simply make you feel great about your contribution to humanity. Whatever your reason, whatever your motivation we welcome you to learn more about eligibility and benefits of donating blood with a trusted organization like us.  


 </div>



</div> 






@endsection
