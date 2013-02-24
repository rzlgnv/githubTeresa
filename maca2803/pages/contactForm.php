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
                <li class="topmenu"><a href="#"  style="width:75px;"><span>Examples</span></a>
              <ul>
                 <li class="subfirst"><a href="examplecss">CSS</a></li>
                 <li><a href='exapmlejs'>JavaScript</a></li>
                 <li><a href="exampleanim">Animation</a></li>
              </ul></li>
            <li class="toplast"><a href="contactForm" id="active" style="width:75px;">Contact Me</a></li>
            </ul><p class="_css3m"><a href="http://css3menu.com/">CSS Submit Button Rollover Css3Menu.com</a></p>
             <!-- End css3menu.com BODY section -->
            </nav>
        </header>

            
<section>
      </style><script language="JavaScript" src="js/gen_validatorv4.js"
    type="text/javascript" xml:space="preserve"></script>
  </head>
    <div id='contact'>
    <?php if (empty($_POST)): ?>
    <?php
          $myEmail = 'hutchteresa@gmail.com';
          $name = $_POST[ 'FirstName'] . 'contact submission';
          $message = $_POST['Address'] ;

          mail($myEmail, $name, $message);
     ?>    
    <form method='post' action="contactForm" name="myform" id="myform">
      <table cellspacing="2" cellpadding="2" border="0">
        <tr>
          <td align="right">
            First Name
          </td>
          <td>
            <input type="text" name="FirstName" />
          </td>
        </tr>
        <tr>
          <td align="right">
            Last Name
          </td>
          <td>
            <input type="text" name="LastName" />
          </td>
        </tr>
        <tr>
          <td align="right">
            EMail
          </td>
          <td>
            <input type="text" name="Email" />
          </td>
        </tr>
        <tr>
          <td align="right">
            Phone
          </td>
          <td>
            <input type="text" name="Phone" />
          </td>
        </tr>
        <tr>
          <td align="right">
            Address
          </td>
          <td>
            <textarea cols="20" rows="5" name="Address"></textarea>
          </td>
        </tr>
                <tr>
          <td align="right"></td>
          <td>
            <input type="submit" value="Submit" />
          </td>
        </tr>
      </table>
    </form><script language="JavaScript" type="text/javascript"
    xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("myform");
  frmvalidator.addValidation("FirstName","req","Please enter your First Name");
  frmvalidator.addValidation("FirstName","maxlen=20", "Max length for FirstName is 20");
  frmvalidator.addValidation("FirstName","alpha","Alphabetic chars only");
  
  frmvalidator.addValidation("LastName","req","Please enter your Last Name");
  frmvalidator.addValidation("LastName","maxlen=20","Max length is 20");
  
  frmvalidator.addValidation("Email","maxlen=50");
  frmvalidator.addValidation("Email","req");
  frmvalidator.addValidation("Email","email");
  
  frmvalidator.addValidation("Phone","maxlen=50");
  frmvalidator.addValidation("Phone","numeric");
  
  frmvalidator.addValidation("Address","maxlen=50");
  frmvalidator.addValidation("Country","dontselect=000");

//]]></script>
     <?php else: ?>
        <h1> Thank You </h1>
    <?php endif; ?>
     <div>

     </script>
<script src="js/contacts.js"> </script>
     
 </section>
         

        <article class="banner">
                <img src="assets/images/banner.png" width ='130' height='130' alt='logo' />
                </article>    