</style><script language="JavaScript" src="js/gen_validatorv4.js"
    type="text/javascript" xml:space="preserve"></script>
  </head>
  <body>
    <form action="" name="myform" id="myform">
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
  frmvalidator.addValidation("FirstName","maxlen=20",	"Max length for FirstName is 20");
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