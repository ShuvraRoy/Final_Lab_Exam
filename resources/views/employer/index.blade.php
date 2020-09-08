<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

 
</head>
<body>
	 <div style="height: 500px;"></div>
     <div class="full-nav">
        <div class="logo"><a href=""><img
         src="assets/img/logo.png" alt=""></a></div>
         @if (Session::has('username'))
		 <h1>Welcome {{{ Session::get('username') }}}</h1>
     @endif
         <nav class="nav2">
             <ul>

                 <li><a href="/"><span>01.</span>Home</a></li>
                 <li><a href="/student/profile"><span>02.</span>View Profile</a></li>
                 <li><a href="/student/alltutor"><span>03.</span>POst Job</a></li>
                
                 <li><a href="/logout"><span>09.</span>Logout</a></li>
             </ul>


         </nav>

        


     </div>







   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.js"></script>
   <script src="assets/js/main.js"></script>

</body>

</html>
