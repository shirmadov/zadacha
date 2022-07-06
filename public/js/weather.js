

const getWeatherInfo = async ()=>{
    let city_name = document.querySelector("#inputState").value;
    let url = 'http://api.openweathermap.org/data/2.5/weather?q='+city_name+'&appid=9682d953b6025383546b329598febfd9&lang=ru'
    try{
        const response = await fetch(url)
            .then(res => res.json())
            .then((data) => {
                document.querySelector('.js__weather__degree').innerHTML = Math.round(data.main.temp-273)+'&deg;';
                document.querySelector('.js__city__name').textContent = data.name;
                document.querySelector('.js__weather__main').textContent = data.weather[0]['description'];
                document.querySelector('.js__weather__icon').innerHTML = '<img src="http://openweathermap.org/img/wn/'+data.weather[0]['icon']+'.png">'
            });


    }catch (error){
        console.log('Error:', error);
    }

}


document.addEventListener('DOMContentLoaded', function(){
    getWeatherInfo();
})
