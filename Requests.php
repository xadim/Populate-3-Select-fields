<!--=====Requests page
Script by Khadim DIAKHATE
CTO Marchesdusenegal.com
www.sayfdev.com
last update: 02-08-2014=====-->
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
// --------------------------Get Brands--------------------------  
if (isset($_GET['Country']) && $_GET['Country']=="Japan"){
?>
<select name='Country' onchange="htmlData2('Requests.php', 'Founder='+this.value)">
    <option selected="selected" value="">Select a brand</option>
    <option value="Nissan">Nissan</option>
    <option value="Toyota">Toyota</option>
    <option value="Mazda">Mazda</option>
    <option value="Honda">Honda</option>
</select>
	<? }
if (isset($_GET['Country']) && $_GET['Country']=="USA"){
?>
<select name='Country' onchange="htmlData2('Requests.php', 'Founder='+this.value)">
    <option selected="selected" value="">Select a brand</option>
    <option value="Dodge">Dodge</option>
    <option value="Ford">Ford</option>
    <option value="Chevrolet">Chevrolet</option>
    <option value="Cadillac">Cadillac</option>
</select>
	<?  }
	
// --------------------------Founders--------------------------

if (isset($_GET['Founder']) && $_GET['Founder']=="Ford"){
?>
<select name='Founder'>
    <option value="Henry Ford">Henry Ford</option>
</select>
<? }
if (isset($_GET['Founder']) && $_GET['Founder']=="Dodge"){
?>
<select name='Founder'>
    <option value="John Francis Dodge">John Francis Dodge</option>
</select>
	<? }
if (isset($_GET['Founder']) && $_GET['Founder']=="Chevrolet"){
?>
<select name='Founder'>
    <option value="Louis Chevrolet">Louis Chevrolet</option>
</select>
<? }
if (isset($_GET['Founder']) && $_GET['Founder']=="Cadillac"){
?>
<select name='Founder'>
    <option value="William Murphy">William Murphy</option>
</select>
	<? }
if (isset($_GET['Founder']) && $_GET['Founder']=="Nissan"){
?>
<select name='Founder'>
    <option value="Masujiro Hashimoto">Masujiro Hashimoto</option>
</select>
<? }
if (isset($_GET['Founder']) && $_GET['Founder']=="Toyota"){
?>
<select name='Founder'>
    <option value="Kiichiro Toyoda">Kiichiro Toyoda</option>
</select>
	<? }
if (isset($_GET['Founder']) && $_GET['Founder']=="Mazda"){
?>
<select name='Founder'>
    <option value="Jujiro Matsuda">Jujiro Matsuda</option>
</select>
<? }
if (isset($_GET['Founder']) && $_GET['Founder']=="Honda"){
?>
<select name='Founder'>
    <option value="Takeo Fujisawa">Takeo Fujisawa</option>
</select>
	<? }?>
