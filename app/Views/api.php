<?php

// $data=file_get_contents('https://api.covid19api.com/summary');
// $json=json_decode($data);
// print_r("<pre>");
// print_r($json);
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<br>
<a style="float:right;width:200px;" href="<?php echo base_url();?>/home/insert"  class="btn btn-primary">Add</a>
<br>
<br>
<?php $session=session(); echo "Welcome ".$session->get("fname");?>
<table class="table table-dark">
  <thead>
    <tr>
     <td colspan="2"><h2>Global Data</h2></td>
    </tr>
  </thead>
  <tbody id="global_data">
  
  </tbody>
</table>
<table class="table table-dark">
  <thead style="background: crimson;">
    <tr>
     <td colspan="2"><h2>Corona Virus Api Country Wise Data</h2></td>
    </tr>
    <tr>
     <th>No.</th>
     <th>Contry Name</th>
     <th>Contry Code</th>
     <th>NewConfirmed</th>
     <th>NewDeaths</th>
     <th>NewRecovered</th>
     <th>TotalConfirmed</th>
     <th>TotalDeaths</th>
     <th>TotalRecovered</th>

    </tr>
  </thead>
  <tbody id="country_data">
  
  </tbody>
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){

 $.ajax(
     {
         type:"get",
         url:"https://api.covid19api.com/summary",
         dataType:"json",
         success:function(data)
         {
            console.log(data);
            console.log(data.Global);
            console.log(data.Countries);
            $.each(data.Global,function(key,value)
            {
                console.log(key+":"+value);
                $("#global_data").append("<tr><td>"+key+"</td><td>"+value+"</td></tr>");

            });
            $.each(data.Countries,function(key,value)
            {
                console.log(key+":"+value);
                $("#country_data").append("<tr><td style='background:#33cc00'>"+key+"</td><td style='background:#003366'>"+value.Country+"</td><td style='background:#1a1aff'>"+value.CountryCode+"</td><td style='background:#e6e600'>"+value.NewConfirmed+"</td><td style='background:#ff3300'>"+value.NewDeaths+"</td><td style='background:#6e466b'>"+value.NewRecovered+"</td><td style='background:#ff9900'>"+value.TotalConfirmed+"</td><td style='background:red'>"+value.TotalDeaths+"</td><td style='background:#40343b94'>"+value.TotalRecovered+"</td></tr>");

            });
         }

     });
});

</script>
