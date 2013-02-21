<!-- Start css3menu.com HEAD section -->
<link rel="stylesheet" href="index_files/css3menu1/style.css" type="text/css" />
<!-- End css3menu.com HEAD section -->

</head>

	<body>
		<article id="wrapper">
            <header>
          <h1 class="test">MACA-2800 Advance Web Page Design</h1>
        
           <nav class="sidebar">
              <ul id="css3menu1" class="topmenu">
                <li class="topfirst"><a href="home"  style="width:75px;">Home</a></li>
                <li class="topmenu"><a href="#" id="active" style="width:75px;"><span>Examples</span></a>
              <ul>
                 <li class="subfirst"><a href="examplecss">CSS</a></li>
                 <li><a href='exapmlejs'>JavaScript</a></li>
                 <li><a href="exampleanim">Animation</a></li>
              </ul></li>
            <li class="toplast"><a href="contactForm" style="width:75px;">Contact Me</a></li>
            </ul><p class="_css3m"><a href="http://css3menu.com/">CSS Submit Button Rollover Css3Menu.com</a></p>
             <!-- End css3menu.com BODY section -->
            </nav>
        </header>

            
<section>
        <div id="text">
      <p>Calculate your body mass index (BMI) by entering your weight and height in inches. Click on the calculate button to see your results. </p>
    </div>

    <div id="project1">
      
       <script type="text/javascript">
       /* <![CDATA[ */
                   
        function calcBMI() {
           var weight = parseInt(document.bmiIndex.weight.value);
           var height = parseInt(document.bmiIndex.height.value); 
           var bmi = (weight * 703) / (height * height);
          document.bmiIndex.bmi.value = parseInt(bmi);
           
       }      
              
       /*  ]]> */
     </script>
      <form action="post" name="bmiIndex">
        <table>
           <tr>   
                <td>
                Weight<br /></td>
               <td>
               <input type= "text" 
                  name="weight" size="3"/></td>
             </tr>
               <tr>     
                <td>Height (inches)<br /></td>
               <td>
                <input type= "text" 
                  name="height" size="3"/></td>
                </tr>
               
               <tr>     
                <td>BMI<br /></td>
               <td>
                <input type= "text" 
                  name="bmi" size="4"/></td>
                </tr>

                <tr>     
                 <td>
                <input type= "button" value ="Calculate" onclick="calcBMI()"/></td>
                </tr>
          </table>
        </form>
      </div>
         
     
 </section>
         

        <article class="banner">
                <img src="assets/images/banner.png" width ='130' height='130' alt='logo' />
                </article>    