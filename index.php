<!--=====index page
Script by Khadim DIAKHATE
CTO Marchesdusenegal.com
www.sayfdev.com
last update: 02-08-2014=====-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>The easiest way to populate 3 fields</title>
<script src="AjaxRequest.js" type="text/javascript"></script>
</head>

<body>
<h1>The easiest way to populate three selects fields with javascript+Ajax+PHP</h1>

<select name="Country" onchange="htmlData('Requests.php', 'Country='+this.value)">
    <option selected="selected" value="">---Choose a country----</option>
    <option value="Japan">---Japan----</option>
    <option value="USA">---USA----</option>
    <option value=""></option>
</select>
  
  <div id="txtResult" style='display:inline'>
  <select name="Brand">
    <option selected="selected" value="nochoice">Choose a brand</option>
  </select>
  </div>
  
<div id="txtResult2" style='display:inline'>
  <select name="Founder">
    <option selected="selected" value="nochoice">Founders</option>
  </select>
</div>
 
</body>
</html>
