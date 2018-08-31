function Unix_timestamp(t)
{
var dt = new Date(t*1000);
var hr = dt.getHours();
var m = "0" + dt.getMinutes();
var s = "0" + dt.getSeconds();
return hr+ ':' + m.substr(-2) + ':' + s.substr(-2);  
}

    $("#searchButton").click(function(){
        var value = $("#fetch").val();

        $.get("https://api.openweathermap.org/data/2.5/weather?q="+value+"&appid=e106cc09123fb248672ad6d8a4e724ff", function(data, status){
    
            console.log(data);
    
            $("#location").text(data.name);
            $("#currentTemparature").text(Math.floor(data.main.temp)-273+"'C");
            $("#windSpeed").text(data.wind.speed);
            $("#cloudiness").text(data.weather[0].description);
            $("#pressure").text(data.main.pressure);
            $("#humidity").text(data.main.humidity);
            $("#sunrise").text(Unix_timestamp(data.sys.sunrise));
            $("#sunset").text(Unix_timestamp(data.sys.sunset));
        });
    });

