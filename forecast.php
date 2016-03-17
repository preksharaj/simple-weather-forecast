
<html>
<head>
    <title>Forecast Search</title>
    <style>
         .header 
      {
        height:100%;
          left:20%;
          top:5%;
        width:900px;
        margin:auto;
        position:relative;
        text-align:left;
        }
         .heade 
      {
        height:400px;
          left:38%;
          top:75%;
        width:300px;
        margin:auto;
        position:absolute;
        text-align:left;
          padding-top:10px;
       padding-left:80px;
        border-style: solid;
        border-width: 1px;
      }
        .headi
        {
             height:300px;
             width:400px;
            
          top:10%;
            margin:auto;
            position:absolute;
            padding-top:10px;
            padding-left:35px;
             border-style: solid;
        border-width: 1px;
        }
        h1
        {
            position:absolute;
            left:10%;
        }
    </style>
<script>
function validateForm() {

    var x = document.getElementById("address").value.trim();
    var y = document.forms["myForm"]["city"].value.trim();
    var z=document.forms["myForm"]["state"].value.trim();
    
    
if((x == "" || x==null) && (y == ""|| y==null) && (z==0)){
     alert("enter these values to proceed");
        document.getElementById("address").focus();
     return false;
}
 else if (x == null || x == ""|| x.length==0) {
        alert("address must be filled out");
         document.getElementById("address").focus();
        return false;
       }
    
 else if(y == null||y == ""|| y.length==0){
    alert("city must be filled");
       document.getElementById("city").focus();
    return false;
    }
  
else if(z==0){
    alert("choose a state");
    document.getElementById("state").focus();
    return false;
    }
    
    return true;
}    
    function clearForm() {
			if(document.getElementById('address').value != null) document.getElementById('address').value = "";
			if(document.getElementById('city').value != null) document.getElementById('city').value = "";
			if(document.getElementById('state').selectedIndex != 0) document.getElementById('state').selectedIndex = 0;
			if(!document.getElementById('Far').checked) document.getElementById('Far').checked = true;
			if(document.getElementById('Cel').checked) document.getElementById('Cel').checked = false;
			if(document.getElementById('searchResult'))	document.getElementById('searchResult').remove();
		}

</script>     
    </head>
    <body>
    
    

        <div class="header">
            <h1>Forecast Search</h1>
            <div class="headi">
        <form name="myForm" method="POST" action=" " onsubmit="return validateForm();">
            <label>Street Address:*</label>
        <input type="text" name="address" length="30" id="address" value="<?php if(isset ($_POST["submit"])) {echo $_POST['address'];}?>" /><br>
            <br>
            
            <label>City:*</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="city" length="30" id="city" value="<?php if(isset ($_POST["submit"])) {echo $_POST['city'];}?>"/><br><br>
            <label>State:*</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select name="state"  id="state" >
                <option value="0">Select your state</option><br>
                <option value="AL" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="AL")echo "selected";} ?>>Alabama</option><br>
                <option value="AK" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="AK")echo "selected";} ?>>Alaska</option><br>
                <option value="AZ" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="AZ")echo "selected";} ?>>Arizona</option><br>
                
                <option value="AR" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="AR")echo "selected";} ?>>Arkansas</option><br>
                <option value="CA" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="CA")echo "selected";} ?>>California</option><br>                

                <option value="CO" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="CO")echo "selected";} ?>>Colorado</option><br>
                
                <option value="CT" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="CT")echo "selected";} ?>>Connecticut</option><br>
                
                <option value="DE" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="DE")echo "selected";} ?>>Delaware</option><br>
                <option value="DC" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="DC")echo "selected";} ?>>District Of Columbia</option><br>
                <option value="FL" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="FL")echo "selected";} ?>>Florida</option><br>
                <option value="GA" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="GA")echo "selected";} ?>>Georgia</option><br>
                <option value="HI" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="HI")echo "selected";} ?>>Hawaii</option><br>
                <option value="ID" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="ID")echo "selected";} ?>>Idaho</option><br>
                <option value="IL" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="IL")echo "selected";} ?>>Illinois</option><br>
                
                <option value="IN" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="IN")echo "selected";} ?>>Indiana</option><br>
                <option value="IA" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="IA")echo "selected";} ?>>Iowa</option><br>
                <option value="KS" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="KS")echo "selected";} ?>>Kansas</option><br>
                <option value="KY" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="KY")echo "selected";} ?>>Kentucky</option><br>
                <option value="LA" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="LA")echo "selected";} ?>>Louisiana</option><br>
                <option value="ME" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="ME")echo "selected";} ?>>Maine</option><br>
                <option value="MD" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="MD")echo "selected";} ?>>Maryland</option><br>
                <option value="MA" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="MA")echo "selected";} ?>>Massachusetts</option><br>
                <option value="MI" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="MI")echo "selected";} ?>>Michigan</option><br>
                
                <option value="MN" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="MN")echo "selected";} ?>>Minnesota</option><br>
                
                <option value="MS" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="MS")echo "selected";} ?>>Mississippi</option><br>
                <option value="MO" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="MO")echo "selected";} ?>>Missouri</option><br>
                <option value="MT" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="MT")echo "selected";} ?>>Montana</option><br>
                <option value="NE" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="NE")echo "selected";} ?>>Nebraska</option><br>
                <option value="NV" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="NV")echo "selected";} ?>>Nevada</option><br>
                <option value="NH" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="NH")echo "selected";} ?>>New Hampshire</option><br>
                <option value="NJ" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="NJ")echo "selected";} ?>>New Jersey</option><br>
                <option value="NM" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="NM")echo "selected";} ?>>New Mexico</option><br>
                <option value="NY" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="NY")echo "selected";} ?>>New York</option><br>
                <option value="NC" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="NC")echo "selected";} ?>>North Carolina</option><br>
                <option value="ND" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="ND")echo "selected";} ?>>North Dakota</option><br>
                <option value="OH" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="OH")echo "selected";} ?>>Ohio</option><br>
                <option value="OK" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="OK")echo "selected";} ?>>Oklahoma</option><br>
                <option value="OR" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="OR")echo "selected";} ?>>Oregon</option><br>
                <option value="PA" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="PA")echo "selected";} ?>>Pennsylvania</option><br>
                <option value="RI" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="RT")echo "selected";} ?>>Rhode Island</option><br>
                <option value="SC" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="SC")echo "selected";} ?>>South Carolina</option><br>
                <option value="SD" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="SD")echo "selected";} ?>>South Dakota</option><br>
                <option value="TN" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="TN")echo "selected";} ?>>Tennessee</option><br>
                <option value="TX" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="TX")echo "selected";} ?>>Texas</option><br>
                <option value="UT" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="UT")echo "selected";} ?>>Utah</option><br>
                <option value="VT" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="VT")echo "selected";} ?>>Vermont</option><br>
                <option value="VA" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="VA")echo "selected";} ?>>Virginia</option><br>
                <option value="WA" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="WA")echo "selected";} ?>>Washington</option><br>
                <option value="WV" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="WV")echo "selected";} ?>>West Virginia</option><br>
                <option value="WI" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="WI")echo "selected";} ?>>Wisconsin</option><br>
                <option value="WY" <?php if (isset($_POST['state']) && !empty($_POST['state'])){if($_POST['state']=="WY")echo "selected";} ?>>Wyoming</option><br>
                </select><br>
            <br>
            
            <label>Degree:*</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="degree" id="Far" value="Farenheit" <?php if (isset($_POST['degree']) && $_POST['degree']=="Farenheit") {echo "checked";} else echo "checked"; ?>/>Farenheit
  			<input type="radio" name="degree" id="Cel" value="Celsius" <?php if (isset($_POST['degree']) && $_POST['degree']=="Celsius") echo "checked";?>/>Celsius
            <br>
            <br>
        
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" value="search" name="submit" />
                 <input type="button" name="clear" value="Clear" onclick="clearForm()" /><br>
            <br>
            
            <label>*- Mandatory fields</label><br><br><br>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://forecast.io/">Powered by Forecast.io</a>
            <br></form></div></div>
        

<?php 


if (isset($_POST["submit"]))
{

$address=$city=$state=$unit=" ";
	$address = $_POST["streetAddress"];
    $city = $_POST["city"];
	$state = $_POST["state"];
	$degree = $_POST["degree"];
$url=$address.",".$city.",".$state;
$addressstr=urlencode($url);
$add=file_get_contents("https://maps.googleapis.com/maps/api/geocode/xml?address=.$addressstr.&key=AIzaSyDrDxYFB5G4AXNJBUDfoLNrW5PA1ADEWhs");
    
$xml=simplexml_load_string("$add") or die("error not found");
    if($xml->status=="OK")
    {
$lat=$xml->result->geometry->location[0]->lat;
$lng=$xml->result->geometry->location[0]->lng;
    If($degree=="Celsius")
        $unit="si";
    else
        $unit="us";
    
 $fore=file_get_contents("https://api.forecast.io/forecast/446c19f937799a04c95bf3fbbf216006/$lat,$lng?units=$unit&exclude=flags");
  
    $f = json_decode($fore);
     
    
    switch($f->currently->icon)
    {
    case 'clear-day':
    $icon="clear.png";
    break;
    
    case 'clear-night':
    $icon="clear_night.png";
    break;
    
        case 'rain':
    $icon="rain.png";
        break;
    
        case 'snow':
    $icon="snow.png";
            break;
    
        case 'sleet':
    $icon="sleet.png";
            break;
    
        case 'wind':
    $icon="wind.png";
            break;
    
        case 'fog':
    $icon="fog.png";
            break;
    
        case 'cloudy':
    $icon="cloudy.png";
            break;
    
        case 'partly-cloudy-day':
    $icon="cloud_day.png";
            break;
    
        case 'partly-cloudy-night':
    $icon="cloud_night.png";
    break;
             case 'storm':
    $icon="storm.png";
    break;
    }
    
    $temp=round($f->currently->temperature).'&deg';
    $precipitation=$f->currently->precipIntensity ;
    if($unit=="si"){
    $precipitation=$precipitation/25.4;
    }
    
    switch($precipitation)
    {
        case ($precipitation ==0):
                $precip="None";
                break;
        case ($precipitation > 0.000 && $precipitation < 0.002):
                $precip="None";
                break;
        case ($precipitation >=0.002 && $precipitation <  0.017):
                $precip="Very Light";
                break;
        case ($precipitation >=0.017 && $precipitation <  0.1):
                $precip="Light";
                break;
        case ($precipitation >=0.1 && $precipitation <  0.4):
                $precip="Moderate";
                break;
        case ($precipitation >=0.4):
                $precip="Heavy";
                break;
    }

    
    $summary=$f->currently->summary;
    $chancerain=$f->currently->precipProbability * 100;
    $windSpeed=$f->currently->windSpeed;
    $dewPoint=$f->currently->dewPoint;
    $humidity=$f->currently->humidity * 100;
    $visibility= $f->currently->visibility;
    $cloudcover=$f->currently->cloudCover * 100;
    if($unit=="si")
    {
        $temp=$temp.' C';
        $windSpeed=round($windSpeed).'  mps';
        $dewPoint=round($dewPoint).'&deg'.'C';
        $visibility=round($visibility).' Km';
    }
    else
    {
        $temp=$temp.' F';
        $windSpeed=round($windSpeed).'  mph';
        $dewPoint=round($dewPoint).'&deg'.'F';
        $visibility=round($visibility).' mi';
    }
    
    $daily=$f->daily;
    $data=$daily->data;
    $time=$data[0];
    
    $timezone=$f->timezone;
    date_default_timezone_set($timezone);
    $sunrise= date('h:i A',$time->sunriseTime);
    
    date_default_timezone_set($timezone);
    $sunset= date('h:i A',$time->sunsetTime);

    ?>
    
  <div class="heade" id="searchResult">
      <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $summary?></b><br>
      <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $temp; ?></b>
      <br/>
      
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo $icon ?>" alt="<?php echo $icon;?>" title="<?php echo $f->currently->summary;?>" /><br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<table border=0 style="width:auto">
        <tr>
            <td>Precipitation:&nbsp;&nbsp;&nbsp;&nbsp;</td><td><?php echo $precip; ?></td></tr>
        <tr>
            <td>Chance Of Rain:&nbsp;&nbsp;&nbsp;&nbsp;</td><td><?php echo $chancerain.'%'; ?> </td></tr>
        <tr>
            <td>Wind Speed:&nbsp;&nbsp;&nbsp;&nbsp;</td><td><?php echo $windSpeed; ?></td></tr>
        <tr>
            <td>Dew Point:&nbsp;&nbsp;&nbsp;&nbsp;</td><td><?php echo $dewPoint; ?></td></tr>
        <tr>
            <td>Humidity:&nbsp;&nbsp;&nbsp;&nbsp;</td><td><?php echo $humidity.'%'; ?></td></tr>
        <tr>
            <td>Visibility:&nbsp;&nbsp;&nbsp;&nbsp;</td><td><?php echo $visibility; ?></td></tr>
          <tr>  <td>Sunrise Time:&nbsp;&nbsp;&nbsp;&nbsp;</td><td><?php echo $sunrise;?></td></tr>
            <tr>  <td>Sunset Time:&nbsp;&nbsp;&nbsp;&nbsp;</td><td><?php echo $sunset;?></td></tr>
       <?php }
    else {  
                    echo "
                        <script type=\"text/javascript\">
                            alert('Please enter a valid address.');
                        </script>
                    ";
                }
}?> </table> 
        </div>

<noscript>
</body>
</html>
