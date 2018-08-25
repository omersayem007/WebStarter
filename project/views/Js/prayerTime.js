$("button").click(function(){

    $.get("http://muslimsalat.com/dhaka.json?key=65696d011744289394fa30ef7808406c", function(data, status){


    console.log(data.split(","));

        for (var i=24 ;i<=29;i++){

            var time = data.split(",")[i];

            $("#data").append("<td align='left' valign='top'>"+time+"</td>");

        }

    });
});