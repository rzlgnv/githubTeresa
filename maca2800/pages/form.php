<script language="JavaScript" >
    type="text/javascript" xml:space="preserve"></script>
  </head>
  <body>
    <div id='contact'>
    <?php if (empty($_POST)): ?>
    <?php
          $myEmail = 'hutchteresa@gmial.com';
          $name = $_POST[ 'FirstName'] . 'contact submission';
          $message = $_POST['Address'] ;

          mail($myEmail, $name, $message);
     ?>    


    <form method= 'post' action="form" name="myform" id="myform">
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
    </form><script language="JavaScript" type="text/javascript">
    

    <?php else: ?>
        <h1> Thank You </h1>
        <p> I will contact you as soon as possible</p>
    <?php endif; ?>
     <div>

     </script>
<script src="js/contacts.js"> </script>