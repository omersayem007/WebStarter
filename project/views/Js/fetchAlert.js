var proxy = 'https://cors-anywhere.herokuapp.com/';
  var apiLinkDS = "https://api.darksky.net/forecast/36dbe1ecdff037dca0b77db844b76346/23.8103,90.4125";

  $.ajax({
    url: proxy + apiLinkDS,
    success:function(data) {
         console.log(data);
         $("#hourlyUpdate").text(data.hourly.summary);
         $("#weeklyUpdate").text(data.daily.summary);
        
        
        
        }
  });

