$("button").click(function(){

    $.get("https://api.openweathermap.org/data/2.5/forecast?q=Dhaka&appid=e106cc09123fb248672ad6d8a4e724ff", function(data, status){

        console.log(data);

        $("#currentDate").text(data.list[0].dt_txt);
        
        for(var i=0 ;i<data.list.length;i++){

            var date=data.list[i].dt_txt ;
            var temp=Math.floor(data.list[i].main.temp)-273+"'C" ;
            var cloud= data.list[i].weather[0].description;
            var pressure = data.list[i].main.pressure;
            var humidity =data.list[i].main.humidity ;

        $( "#row" ).append( "<td width='60px'>Time</td><td>&nbsp &nbsp </td><td>weather</td>" );
        $("#data").append("<td height='5px' width='50px'>"+date+
        "</td><td>&nbsp &nbsp </td><td height='5px' width='100px'><h3>"+temp+
        "</h3>"+cloud+"<br/>"+humidity+"</td>");

        }

    });
});