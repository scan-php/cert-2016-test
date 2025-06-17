<?php 
	  error_reporting(E_ERROR);
	  include('session_chk.php');
	  include("includes/config_db.php");
	  
 

if (!isset($_SERVER['HTTP_REFERER'])){ 

echo "you cannot access this page directly!"; } 
else{

?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php
    //header('Location: ',$_SERVER['QUERY_STRING']);
  
?>
<title>Add Items</title>
<style>

body {
    background-image: url("bgfin.jpg");
}

table {
    border-collapse: separate;
    empty-cells: show;
	color: #61210B;
	font-size: 18px;
	font-family:Monotype Corsiva;
}
</style>
</head>

<body>


<form  name="myform" method="post"  action="adddisplay1.php">
<?php
$con = mysql_connect('localhost','root','');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db('ems', $con);
//$rowsql=mysql_query("SELECT MAX(Equipment_No) AS max FROM insertitems");
//$row=mysql_fetch_array($rowsql);
//$largest=$row['max'];
//$increment1=(int)$largest;
//echo $increment1;
//$increment=$increment1+1;
//echo $increment;
//$test=mysql_query("SELECT item_group FROM item");

   
$count=0;
$result = mysql_query("SELECT Equipment_No FROM insertitems");
$trows = mysql_num_rows($result); 
		if($trows==0)
		$info=1;
    
	//$count=0;
$store = array();
	while($data=mysql_fetch_array($result))
		{
			array_push($store,$data['Equipment_No']);
	   }
for ($i=0; $i < 10; $i++) { 
      // echo $store[$i];
    }
	//echo $store[0];
	//while($data=mysql_fetch_array($result))
	//{
		
	for ($i = 0; $i <$trows; $i++) {
      for ($j = 0; $j <$trows - 1; $j++) {
         if ((int)$store[$j] > (int)$store[$j + 1]) {
           $temp = $store[$j];
            $store[$j]= $store[$j + 1];
            $store[$j + 1] = $temp;
         }
      }
		}
	//}
		//echo ' ';
	//for ($i=0; $i < $trows; $i++) { 
      // echo $store[$i];
	   //echo ' ';
   //}
	
	
	
	//$store = array();

   // while ($row = mysql_fetch_array($result)) {
     //     array_push($store,$row['parentproduct_id']);
    //}

    //for ($i=0; $i < 10; $i++) { 
    //    echo $store[i];
    //}

    //echo sizeof($store);
   // print_r($store); //to see array data

	for($i=0;$i<$trows;$i++)
		{	
			
			$count++; //2
						
			if($count==$trows)
			{
				$info1=(int)$store[$i];
				
				$info=$info1+1;
				
			}
			//$info=count($data)+1;
		}
		
		
//$y=$_POST['quantity'];
//$eq=$_POST['eqpno'];

//$c=$eq+$y;
$test=mysql_query("SELECT * FROM item");
$test1=mysql_query("SELECT * FROM supplier");

//for ($x = 1; $x <=$y && $eq!=$c; $x++) 
//{
  //if(($_POST[itemgrp]=="others")&&($_POST[suppgrp]=="others"))
  //{
	//  $new=strtoupper($_POST[new_textbox]);
	 // $new1=strtoupper($_POST[new_textbox1]);
	  //$loc3=strtoupper($_POST[loc3]);
  //$sql="INSERT INTO insertitems(Equipment_No,Item_Group,Supplier,Description_of_item,Purchase_order,Installation_date,Warranty_period,Warranty_exp_date,Location_1,Location_2,Location_3,Remarks)
//VALUES
//('$eq','$new','$new1','$_POST[doi]','$_POST[purorder]','$_POST[Day]/$_POST[Month]/$_POST[Year]',
//'$_POST[warrp]','$_POST[warexpdate]','$_POST[loc1]','$_POST[loc2]','$loc3','$_POST[remarks]')";
  //}
  //if($_POST[suppgrp]=="")
  //{
	//  alert("Item not selected");
  //}
//else if(($_POST[itemgrp]!="others")&&($_POST[suppgrp]!="others"))
//{	
//echo $_POST['new_textbox'];
//$loc3=strtoupper($_POST[loc3]);
//$sql="INSERT INTO insertitems(Equipment_No,item_Group,Supplier,Description_of_item,Purchase_order,
//Installation_date,Warranty_period,Warranty_exp_date,Location_1,Location_2,Location_3,Remarks)
//VALUES
//('$eq','$_POST[itemgrp]','$_POST[suppgrp]','$_POST[doi]','$_POST[purorder]','$_POST[Day]/$_POST[Month]/$_POST[Year]',
//'$_POST[warrp]','$_POST[warexpdate]','$_POST[loc1]','$_POST[loc2]','$loc3','$_POST[remarks]')";
//}
//else if(($_POST[itemgrp]=="others")&&($_POST[suppgrp]!="others"))
//{
	//echo $_POST['itemgrp'];
	//$loc3=strtoupper($_POST[loc3]);
	//$new=strtoupper($_POST[new_textbox]);
	//$sql="INSERT INTO insertitems(Equipment_No,item_Group,Supplier,Description_of_item,Purchase_order,Installation_date,
	//Warranty_period,Warranty_exp_date,Location_1,Location_2,Location_3,Remarks)
//VALUES
//('$eq','$new','$_POST[suppgrp]','$_POST[doi]','$_POST[purorder]','$_POST[Day]/$_POST[Month]/$_POST[Year]',
//'$_POST[warrp]','$_POST[warexpdate]','$_POST[loc1]','$_POST[loc2]','$loc3','$_POST[remarks]')";

//}
//else if(($_POST[itemgrp]!="others")&&($_POST[suppgrp]=="others"))
//{
	//echo $_POST['itemgrp'];
	//$loc3=strtoupper($_POST[loc3]);
	//$new1=strtoupper($_POST[new_textbox1]);
	//$sql="INSERT INTO insertitems(Equipment_No,Item_Group,Supplier,Description_of_item,Purchase_order,Installation_date,
	//Warranty_period,Warranty_exp_date,Location_1,Location_2,Location_3,Remarks)
//VALUES
//('$eq','$_POST[itemgrp]','$new1','$_POST[doi]','$_POST[purorder]','$_POST[Day]/$_POST[Month]/$_POST[Year]',
//'$_POST[warrp]','$_POST[warexpdate]','$_POST[loc1]','$_POST[loc2]','$loc3','$_POST[remarks]')";

//}
//else 
//{
	//echo $_POST['itemgrp'];
	//alert("item not selected");

//}

	


//if (!mysql_query($sql,$con))
 //{
  //die('Error: ' . mysql_error());
  //} 
 //$eq++;
//}



//if (isset($_POST['add']) && $_POST['add'] == 'Add')
//{
	
  //if($_POST[itemgrp]=="others")
	//{
       //$data2=mysql_fetch_array($test) ;
		
			//$rows=mysql_num_rows($data2) ;
			//if($rows==0)
			//{
             //               $st=strtoupper($_POST[new_textbox]);
				//				$sql=mysql_query("INSERT INTO item (item_group) VALUES('$st')");
			//}
			//else
			//{	
			//for($i=1;$i<=$rows;$i++)
			//{	
		     // if($_POST[new_textbox]!=$data2[item_group])
			//{
				//$st=strtoupper($_POST[new_textbox]);
				//$sql=mysql_query("INSERT INTO item (item_group) VALUES('$st')");
				
		//	}
			//}
			//}
		
	//}	
		   
	//$sql=mysql_query("INSERT INTO item (item_group) VALUES('$_POST[new_textbox]')");

      //if($_POST[suppgrp]=="others")
	  //{
      //$data1=mysql_fetch_array($test1) ;
		
	//		$rows1=mysql_num_rows($data1) ;
		//	if($rows1==0)
			//{
              //              $st1=strtoupper($_POST[new_textbox1]);
				//				$sql1=mysql_query("INSERT INTO supplier (supplier_group) VALUES('$st1')");
			//}
    	//else
		//{			
			//for($i=1;$i<=$rows1;$i++)
			//{	
		      // if($_POST[new_textbox1]!=$data1[supplier_group])
				//{  
					//$st1=strtoupper($_POST[new_textbox1]);
					
				//$sql1=mysql_query("INSERT INTO supplier (supplier_group) VALUES('$st1')");
				//}
			//}
		//}
	//}	
   
				
				
			
	 
	//echo "<meta http-equiv=Refresh content=1;url=adddisplay.php>";
//}
    



  
mysql_close($con);
?>


<table width="100%" align="center" border="0" cellpadding="0" cellspacing="1">

<tr>
<td align ="center"> <font color="#61210B" size="7"><b>Add Equipment </b></font> 
</td>
</tr>
</table>
<table cellspacing="50" align="center">
<tr>

<th align="left">Asset No./ Equipment No.</th><td>
<input type="text" name="eqpno" id="eqpno"  readonly value="<?php echo $info?>" />&nbsp; 
<!--onChange="eqpOnchange(this)"--> 
<b>Subseries</b><input type="checkbox" name="Subseries1" id="subseries" onclick="toggleReadonly(this)"/></td>
<td></td>
<th align="left">Installation Date</th>
<td>	
<input type="text" id="datepicker" name="datepicker"/> 
</td>
</tr>
<tr>

	<th align="left">Quantity</th><td><input type="text"  id="quantity" name="quantity"  value=1 /> </td>
	
<td></td>
<th align="left">Warranty Period<br>(in months) </th><td><input type="text" name="warrp" id="warrp" value=12 maxlength=2/></td>
</tr>

<tr>
<th align="left">Amount</th><td><input type="text" name="amount" /> </td>
<td></td>
<th align="left">Warranty Expiry Date</th><td><input type="text" name="warexpdate" id="warexpdate" onfocus="setDate()"/></td>
</tr>
<tr>
<th align="left">Item Group</th>
			<td><select name="itemgrp" id="itemgrp" onChange="itemOnchange();">
			<option value="">Select...</option>
					<option value="others">others</option>
					<?php
					 while($data=mysql_fetch_array($test)){?>
					<option> <?php echo $data[item_group] ?> </option>
					<?php }
					?>
				</select>
				
			<input type="text" name="new_textbox" id="new_textbox" maxlength=20 style="display:none;">
			</td>
<td></td>
<th align="left">Location 1 (Room)</th><td><input type="text" name="loc1" maxlength=3/></td>
</tr>

<tr>
<th align="left">Supplier/Vendor</th>
<td><select name="suppgrp" id="suppgrp" onChange="itemOnchange1();">
			<option value="">Select...</option>
					<option value="others">others</option>
					<?php
					 while($data1=mysql_fetch_array($test1)){?>
					<option> <?php echo $data1[supplier_group] ?> </option>
					<?php }
					?>
				</select>
				
			<input type="text" name="new_textbox1" id="new_textbox1" maxlength=20 style="display:none;">
			</td>
<td></td>
<th align="left">Location 2</th>
<td><select name="loc2">
	<option value=' '>--Location 2-- </option>
	<option value="Basement">Basement</option>
	<option value="Ground_Floor">Ground Floor</option>
	<option value="First_Floor">First Floor</option>
	<option value="Second_Floor">Second Floor</option>
	<option value="Third_Floor">Third Floor</option>
	<option value="Fourth_Floor">Fourth Floor</option>
	
</select>
</td>
</tr>

<tr>
<th align="left">Description of item</th><td rowspan="2"><textarea rows="4" cols="50" name="doi" maxlength=25></textarea> </td>
<td></td>
<th align="left">Location 3</th>
<td><select name="loc3" id="loc3">
	<option value=' '>--Location 3-- </option>
	<option value="WRITEOFF">Writeoff</option>
	<option value="TRANSFERRED">Transferred</option>
	

					
				</select>
</td>
</tr>
<tr>
<th align="left"></th>
 <td></td>
 <td></td>
 </tr>

	
<tr>
<th align="left">Purchase Order</th><td><input type="text" name="purorder" maxlength=5/></td>
<td></td>
<th align="left">Remarks</th><td><textarea rows="4" cols="50" name="remarks"></textarea>
</td>
</tr>
</table>

<br/>
<table align="center">
<tr>
<td></td>
<td><input type="submit" value="Add" name="add"></input>
</td>&nbsp;&nbsp;&nbsp;&nbsp;<td><input type="reset" value="Clear" name="clear"></td>
</tr>
</table>

</form>

</body>
</html>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script type="text/javascript">
  $(function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
	    yearRange: "1950:2150",
        dateFormat: 'yy-mm-dd'	
    })
  });

 function toggleReadonly(element) {
    var inputName = document.getElementById('eqpno');
	
    if(element.checked) {
				inputName.removeAttribute('readonly');
	inputName.onchange=function(){eqpOnchange(eqpno);};
			
	    }
    else {
       
		 inputName.setAttribute('readonly', true);
    }
			
		
}

function eqpOnchange(element)
{
	var inputName1 = document.getElementById('quantity');
	if(isInteger(element.value)==false)
	inputName1.setAttribute('readonly', true);
else
	inputName1.removeAttribute('readonly');
        
    }
	
	function isInteger(element) {
        return element % 1 == 0;
	}
function itemOnchange(){
    var itemgrp = document.getElementById('itemgrp').value 
    if(itemgrp == "others")
        document.getElementById("new_textbox").style.display="block";
	    else
        document.getElementById("new_textbox").style.display="none";
}
function itemOnchange1(){
    var suppgrp = document.getElementById('suppgrp').value 
    if(suppgrp == "others")
        document.getElementById("new_textbox1").style.display="block";
	    else
        document.getElementById("new_textbox1").style.display="none";
}
//$(function() {
	  

  //      $("#datepicker").datepicker({ 
	//	dateFormat: 'yy-mm-dd' 
	//	})
    
	
  //});
  
function setDate() { 
 var s=document.myform.datepicker.value ;
//var s=$( "#datepicker" ).datepicker({dateFormat: 'm/d/Y'}).val();

var months=document.getElementById('warrp').value; 


 var odate = new Date(s);
var year=odate.getFullYear(); 
var month=odate.getMonth()+1;

var month1=parseInt(month) + parseInt(months);
var date=odate.getDate();
//document.write(year);
//document.write(month);
//document.write(months);
//document.write(month1);

// document.write(date);

if(month==12)
{
if(months<12)
{
	month1=months;	
var add1=(month1/12)+1;
year=year+parseInt(add1);
if(month1==2 && date>29)
	{
		
		if(year%400==0 || year%4==0)
		date=29;
	  else
		  date=28;
		
		}	
else
if(date==31)
        {
	if(month1==1 || month1==3 || month1==5 || month1==7 || month1==8 || month1==10 || month1==12)
		date=date;
	else if(month1==4 || month1==6 || month1==9 || month1==11)
		date=date-1;
      }
	  else
		  if(date==30)
         {
	if(month1==1 || month1==3 || month1==5 || month1==7 || month1==8 || month1==10 || month1==12)
		date=date+1;
	else if(month1==4 || month1==6 || month1==9 || month1==11)
		date=date;
         }
	
//date=date;

}
else if(months%12==0)
{	
month1=12;
var add1=(months/12);
year=year+parseInt(add1);
date=date;
}
else
{
	month1=months%12;
var add1=(months/12);
year=year+parseInt(add1)+1;

if(month1==2 && date>29)
	{
		
		if(year%400==0 || year%4==0)
		date=29;
	  else
		  date=28;
		
		}	
else
if(date==31)
        {
	if(month1==1 || month1==3 || month1==5 || month1==7 || month1==8 || month1==10 || month1==12)
		date=date;
	else if(month1==4 || month1==6 || month1==9 || month1==11)
		date=date-1;
      }
	  else
		  if(date==30)
         {
	if(month1==1 || month1==3 || month1==5 || month1==7 || month1==8 || month1==10 || month1==12)
		date=date+1;
	else if(month1==4 || month1==6 || month1==9 || month1==11)
		date=date;
         }

//date=date;
}

}
else	
	 if(month1<12 && month1%12==2 && date>29)
	{
		
		month1=month1;
		 var add1=month1/12;
		 year=year+parseInt(add1);
		if(year%400==0 || year%4==0)
		date=29;
	  else
		  date=28;
	}
	
else if(month1>12 && month1%12==2 && date>29)
	{
		
		var add1=(parseInt(month1))/12;
	month1=parseInt(month1)%12;
    year=year+parseInt(add1);
	if(year%400==0 || year%4==0)
		date=29;
	  else
		  date=28;
		
		}	
		
		else if(month1<12 && month1%12==2 && date==28)
		{
			
			month1=month1;
			var add1=month1/12;
		 year=year+parseInt(add1);
		if(year%400==0 || year%4==0)
		date=29;
	  else
		  date=28;
		
		}
      else if(month1>12 && month1%12==2 && date==28)
		{
			
			var add1=month1/12;
	month1=month1%12;
    year=year+parseInt(add1);
	if(year%400==0 || year%4==0)
		date=29;
	else
		date=28;
			
		}
		else if(month1<12 && month1%12==2 && date==29)
		{
			
			month1=month1;
			var add1=month1/12;
		 year=year+parseInt(add1);
		if(year%400==0 || year%4==0)
		date=date;
	  else
		  date=28;
		
		}
      else if(month1>12 && month1%12==2 && date==29)
		{
			
			var add1=month1/12;
	month1=month1%12;
    year=year+parseInt(add1);
	if(year%400==0 || year%4==0)
		date=date;
	else
		date=28;
			
		}
	else if(month1>12 && month1%12!=0)
 {
	 var add1=month1/12;
	month1=month1%12;
    year=year+parseInt(add1);
if(date==31)
        {
	if(month1==1 || month1==3 || month1==5 || month1==7 || month1==8 || month1==10 || month1==12)
		date=date;
	else if(month1==4 || month1==6 || month1==9 || month1==11)
		date=date-1;
      }
	  else
		  if(date==30)
         {
	if(month1==1 || month1==3 || month1==5 || month1==7 || month1==8 || month1==10 || month1==12)
		date=date+1;
	else if(month1==4 || month1==6 || month1==9 || month1==11)
		date=date;
         }
 }
    else if(month1>12 && month1%12==0)
	{
		
	    var add=(month1/12)-1;
        year=year+parseInt(add);
		month1=12;
	}
	else if(month1<12 && month1%12!=0)
	{
		month1=month1;
		year=year;
		if(date==29)
        {
	if(month1==1 || month1==3 || month1==5 || month1==7 || month1==8 || month1==10 || month1==12)
		date=31;
	else if(month1==4 || month1==6 || month1==9 || month1==11)
		date=30;
      }
	  else
		  if(date==28)
         {
	if(month1==1 || month1==3 || month1==5 || month1==7 || month1==8 || month1==10 || month1==12)
		date=31;
	else if(month1==4 || month1==6 || month1==9 || month1==11)
		date=30;
         }
		 if(date==31)
        {
	if(month1==1 || month1==3 || month1==5 || month1==7 || month1==8 || month1==10 || month1==12)
		date=date;
	else if(month1==4 || month1==6 || month1==9 || month1==11)
		date=date-1;
      }
	  else
		  if(date==30)
         {
	if(month1==1 || month1==3 || month1==5 || month1==7 || month1==8 || month1==10 || month1==12)
		date=date+1;
	else if(month1==4 || month1==6 || month1==9 || month1==11)
		date=date;
         }
	}
	  else
	  {
		  month1=month1;
	      year=year;
		  if(date==31)
        {
	if(month1==1 || month1==3 || month1==5 || month1==7 || month1==8 || month1==10 || month1==12)
		date=date;
	else if(month1==4 || month1==6 || month1==9 || month1==11)
		date=date-1;
      }
	  else
		  if(date==30)
         {
	if(month1==1 || month1==3 || month1==5 || month1==7 || month1==8 || month1==10 || month1==12)
		date=date+1;
	else if(month1==4 || month1==6 || month1==9 || month1==11)
		date=date;
         }


	  }
	  
	  
	  
	  
	  
	  
	  
	  
    

document.getElementById('warexpdate').value=year+'-'+month1+'-'+date ;
}

function stopRKey(evt) { 
  var evt = (evt) ? evt : ((event) ? event : null); 
  var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null); 
  if ((evt.keyCode == 13) && (node.type=="text"))  {return false;} 
} 

document.onkeypress = stopRKey; 

 
		  document.oncontextmenu = function() {return false;}
		  document.onkeydown = function () {if(event.keyCode == 123){event.returnValue = false;}}
		
          function openNewpage() {window.open ('foobar.html', '', 'toolbar=no,menubar=no,location=no');}
		  



	</script>
<?php
}
?>
	