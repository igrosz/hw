<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<link href="/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">-->  
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">  
  
    <title>Document</title>
    <style>
/*table
{
border-style:solid;
border-width:2px;
border-color:black;
border-collapse: collapse;
}
td {
            border: 2px solid black;
        }*/
</style>
</head>
<body>
    <?php 
$name= "Donald Trump";
$name2="Barak Obama";
$name3="Bill Clinton";
$x= 2017;
$y=2009;
$z=2001;
echo "<table class=table table-bordered table-striped>
       <tr>
       <td> $name</td>
       <td>$x</td>
     </tr>
     <tr>
      <td>$name2</td>
      <td>$y</td>
    </tr>
    <tr>
      <td>$name3</td>
      <td>$z</td>
    </tr>
    </table>";
 ?>
 </body>

 </html>