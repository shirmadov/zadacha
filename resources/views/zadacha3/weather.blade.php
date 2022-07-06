<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>

    <script src="/js/weather.js"></script>
    <link rel="stylesheet" href="/css/weather.css?v={{ Config::get('app.media_files_version') }}">
</head>
<body>


<div class="main">
    <div class="container">
        <div class="weather">
            <div class="form-group col-md-2" style="margin: 0 auto;">
                <label for="inputState">Города</label>
                <select id="inputState" onchange="getWeatherInfo()" class="form-control">
                    <option selected>Cities</option>
                    <option>Москва</option>
                    <option>Санкт-Петербург</option>
                    <option>Новосибирск</option>
                    <option>Екатеринбург</option>
                    <option>Казань</option>
                    <option selected>Иваново</option>
                    <option>Нижний Новгород</option>
                    <option>Челябинск</option>
                    <option>Омск</option>
                    <option>Самара</option>
                    <option>Ростов-на-Дону</option>
                    <option>Уфа</option>
                    <option>Красноярск</option>
                </select>
            </div>




            <div class="card" style="width: 18rem; margin: 0 auto; float: none; margin-top: 10px">
                <span class="js__weather__icon" style="text-align: center"></span>
                <div class="card-body">
                    <h3 class="card-title js__weather__degree" style="text-align: center">10 &deg;</h3>
                    <h5 class="card-title js__city__name"></h5>
                    <h6 class="card-title js__weather__main"></h6>
                </div>
            </div>
        </div>
    </div>

</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
