var proxy = 'https://cors-anywhere.herokuapp.com/';
var apiLinkDS = "http://muslimsalat.com/dhaka/weekly.json?key=65696d011744289394fa30ef7808406c";

  $.ajax({
    url: proxy + apiLinkDS,
    success:function(data) {

        var obj = JSON.parse(data);


        console.log(obj.items);

        var i=0;


                $("#data").append("<th>"+obj.items[i].date_for+"</th><td>"+obj.items[i].fajr+"</td><td>"+obj.items[i].shurooq+"</td><td>"+obj.items[i].dhuhr+"</td><td>"+obj.items[i].asr+"</td><td>"+obj.items[i].maghrib
        +"</td><td>"+obj.items[i].isha+"</td></tr><br></br>");

    

        }
  });