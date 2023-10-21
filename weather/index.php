<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Team Project</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js" defer></script>
  </head>
  <body>
    <h1>Weather Dashboard</h1>
    <div class="container">
      <div class="weather-input">
        <h3>Enter a City Name</h3>
        <input class="city-input" type="text" placeholder="E.g., Nairobi, Nakuru, Kisumu">
        <button class="search-btn">Search</button>
        <div class="separator"></div>
        <button class="location-btn">Use Current Location</button><br><br>
        <a href="../activity/activity.php" style="color:white;text-decoration: none;padding:5px;background-color: rgba(17, 0, 255, 0.808);"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-back-up" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"/> <path d="M9 13l-4 -4l4 -4m-4 4h11a4 4 0 0 1 0 8h-1" /> </svg>Navigate back</a>
      </div>
      <div class="weather-data">
        <div class="current-weather">
          <div class="details">
            <h2>_______ ( ______ )</h2>
            <h6>Temperature: __°C</h6>
            <h6>Wind: __ M/S</h6>
            <h6>Humidity: __%</h6>
          </div>
        </div>
        <div class="days-forecast" style="margin-top:30px">
        <form action="" method="POST">
            <label>Prediction Period</label>
            <select class="city-input" name="period" style="width:35%;height:30px">
                <option value="month">Monthly</option>
                <option value="week">Weekly</option>
</select>
<input type="submit" value="View" name="view" style="width:5%;height:30px">
</form>
<?php
if(isset($_POST['view']))
{
    if($_POST['period']=="week")
    {
?>
          <h2>5-Day Forecast</h2>
          <ul class="weather-cards">
            <li class="card">
              <h3>( ______ )</h3>
              <h6>Temp: __C</h6>
              <h6>Wind: __ M/S</h6>
              <h6>Humidity: __%</h6>
            </li>
            <li class="card">
              <h3>( ______ )</h3>
              <h6>Temp: __C</h6>
              <h6>Wind: __ M/S</h6>
              <h6>Humidity: __%</h6>
            </li>
            <li class="card">
              <h3>( ______ )</h3>
              <h6>Temp: __C</h6>
              <h6>Wind: __ M/S</h6>
              <h6>Humidity: __%</h6>
            </li>
            <li class="card">
              <h3>( ______ )</h3>
              <h6>Temp: __C</h6>
              <h6>Wind: __ M/S</h6>
              <h6>Humidity: __%</h6>
            </li>
            <li class="card">
              <h3>( ______ )</h3>
              <h6>Temp: __C</h6>
              <h6>Wind: __ M/S</h6>
              <h6>Humidity: __%</h6>
            </li>
          </ul>
          <?php
    }
    else if($_POST['period']=="month")
    {?>
      <h2>Monthly Forecast</h2>
      <ul class="weather-cards">
        <li class="card">
          <h3>( ______ )</h3>
          <h6>Temp: __C</h6>
          <h6>Wind: __ M/S</h6>
          <h6>Humidity: __%</h6>
        </li>
        <li class="card">
          <h3>( ______ )</h3>
          <h6>Temp: __C</h6>
          <h6>Wind: __ M/S</h6>
          <h6>Humidity: __%</h6>
        </li>
        <li class="card">
          <h3>( ______ )</h3>
          <h6>Temp: __C</h6>
          <h6>Wind: __ M/S</h6>
          <h6>Humidity: __%</h6>
        </li>
        <li class="card">
          <h3>( ______ )</h3>
          <h6>Temp: __C</h6>
          <h6>Wind: __ M/S</h6>
          <h6>Humidity: __%</h6>
        </li>
        <li class="card">
          <h3>( ______ )</h3>
          <h6>Temp: __C</h6>
          <h6>Wind: __ M/S</h6>
          <h6>Humidity: __%</h6>
        </li>
        <li class="card">
        <h3>( ______ )</h3>
        <h6>Temp: __C</h6>
        <h6>Wind: __ M/S</h6>
        <h6>Humidity: __%</h6>
      </li>
      <li class="card">
        <h3>( ______ )</h3>
        <h6>Temp: __C</h6>
        <h6>Wind: __ M/S</h6>
        <h6>Humidity: __%</h6>
      </li>
      <li class="card">
        <h3>( ______ )</h3>
        <h6>Temp: __C</h6>
        <h6>Wind: __ M/S</h6>
        <h6>Humidity: __%</h6>
      </li>
      <li class="card">
        <h3>( ______ )</h3>
        <h6>Temp: __C</h6>
        <h6>Wind: __ M/S</h6>
        <h6>Humidity: __%</h6>
      </li>
      <li class="card">
        <h3>( ______ )</h3>
        <h6>Temp: __C</h6>
        <h6>Wind: __ M/S</h6>
        <h6>Humidity: __%</h6>
      </li>
      <li class="card">
      <h3>( ______ )</h3>
      <h6>Temp: __C</h6>
      <h6>Wind: __ M/S</h6>
      <h6>Humidity: __%</h6>
    </li>
    <li class="card">
      <h3>( ______ )</h3>
      <h6>Temp: __C</h6>
      <h6>Wind: __ M/S</h6>
      <h6>Humidity: __%</h6>
    </li>
    <li class="card">
      <h3>( ______ )</h3>
      <h6>Temp: __C</h6>
      <h6>Wind: __ M/S</h6>
      <h6>Humidity: __%</h6>
    </li>
    <li class="card">
      <h3>( ______ )</h3>
      <h6>Temp: __C</h6>
      <h6>Wind: __ M/S</h6>
      <h6>Humidity: __%</h6>
    </li>
    <li class="card">
      <h3>( ______ )</h3>
      <h6>Temp: __C</h6>
      <h6>Wind: __ M/S</h6>
      <h6>Humidity: __%</h6>
    </li>
    <li class="card">
    <h3>( ______ )</h3>
    <h6>Temp: __C</h6>
    <h6>Wind: __ M/S</h6>
    <h6>Humidity: __%</h6>
  </li>
  <li class="card">
    <h3>( ______ )</h3>
    <h6>Temp: __C</h6>
    <h6>Wind: __ M/S</h6>
    <h6>Humidity: __%</h6>
  </li>
  <li class="card">
    <h3>( ______ )</h3>
    <h6>Temp: __C</h6>
    <h6>Wind: __ M/S</h6>
    <h6>Humidity: __%</h6>
  </li>
  <li class="card">
    <h3>( ______ )</h3>
    <h6>Temp: __C</h6>
    <h6>Wind: __ M/S</h6>
    <h6>Humidity: __%</h6>
  </li>
  <li class="card">
    <h3>( ______ )</h3>
    <h6>Temp: __C</h6>
    <h6>Wind: __ M/S</h6>
    <h6>Humidity: __%</h6>
  </li>
  <li class="card">
  <h3>( ______ )</h3>
  <h6>Temp: __C</h6>
  <h6>Wind: __ M/S</h6>
  <h6>Humidity: __%</h6>
</li>
<li class="card">
  <h3>( ______ )</h3>
  <h6>Temp: __C</h6>
  <h6>Wind: __ M/S</h6>
  <h6>Humidity: __%</h6>
</li>
<li class="card">
  <h3>( ______ )</h3>
  <h6>Temp: __C</h6>
  <h6>Wind: __ M/S</h6>
  <h6>Humidity: __%</h6>
</li>
<li class="card">
  <h3>( ______ )</h3>
  <h6>Temp: __C</h6>
  <h6>Wind: __ M/S</h6>
  <h6>Humidity: __%</h6>
</li>
<li class="card">
  <h3>( ______ )</h3>
  <h6>Temp: __C</h6>
  <h6>Wind: __ M/S</h6>
  <h6>Humidity: __%</h6>
</li>
<li class="card">
<h3>( ______ )</h3>
<h6>Temp: __C</h6>
<h6>Wind: __ M/S</h6>
<h6>Humidity: __%</h6>
</li>
<li class="card">
<h3>( ______ )</h3>
<h6>Temp: __C</h6>
<h6>Wind: __ M/S</h6>
<h6>Humidity: __%</h6>
</li>
<li class="card">
<h3>( ______ )</h3>
<h6>Temp: __C</h6>
<h6>Wind: __ M/S</h6>
<h6>Humidity: __%</h6>
</li>
<li class="card">
<h3>( ______ )</h3>
<h6>Temp: __C</h6>
<h6>Wind: __ M/S</h6>
<h6>Humidity: __%</h6>
</li>
<li class="card">
<h3>( ______ )</h3>
<h6>Temp: __C</h6>
<h6>Wind: __ M/S</h6>
<h6>Humidity: __%</h6>
</li>
      </ul>
      <?php
    }

}
?>
        </div>
      </div>
    </div>
    
  </body>
</html>