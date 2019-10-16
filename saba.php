<!DOCTYPE html>
<html lang="en">
<head>
  <title>SANP AUTO BACKUP APPLICATION</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <link rel="stylesheet" type="text/css" href="style.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>

.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #ccc;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>

</head>
<body style="background-color:powderblue;">
  
  



  <h2></h2>
  
  
  
   <center><h1 type="text">SNAP AUTO BACKUP APPLICATION</h1><center>

  
  <button type="button" class="btn btn-primary btn-lg btn-block"onclick="location.href='/run-backup.php';" />BACKUP</button>
  <button type="button" class="btn btn-default btn-lg btn-block"onclick="location.href='?';" />RESTORE</button>
 



<center><h3>DAILY|WEEK</h3><center>

<center><label class="switch">
  <input type="checkbox">
  <span class="slider"></span>
</label><center>


</div>

</body>
</html>
