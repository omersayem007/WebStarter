
$("button").click(function(){

    $.get("https://api.openweathermap.org/data/2.5/forecast?q=Dhaka&appid=e106cc09123fb248672ad6d8a4e724ff", function(data, status){

        console.log(data);
        
        for(var i=0 ;i<=32 ;){
            var date=data.list[i].dt_txt ;
            var temp=Math.floor(data.list[i].main.temp)-273+"'C" ;
            var cloud= data.list[i].weather[0].description;
            var pressure = data.list[i].main.pressure;
            var humidity =data.list[i].main.humidity ;
        $( "#row" ).append( "<td height='90px'>"+date+"</td>" );
        $("#data").append("<td><p>temperature:</p><span>"+temp+
        "</span><p>cloudiness:</p><span>"+cloud+
        "</span><p>pressure:</p><span>"+pressure+ 
        "</span><p>humidity:</p><span>"+humidity+" </span> </td>");
           
           
            i=i+8;

        }

    });
});