fetch('https://api.finage.co.uk/last/forex/GBPUSD?apikey=API_KEY1841XUOMY834JV622HPESR103JTUX76S')
  .then(function (response) {
    return response.json();
    })
    .then(function (fxdata) {
        appendData(fxdata);
    })
    .catch(function (err) {
      console.log('error: ' + err);
  });

function appendData(fxdata) {
    var forex = document.getElementsByClassName("forexApi");
    for (var i = 0; i < forex.length; i++) {
        var fxdataValue = fxdata.symbol + ": " + fxdata.bid;
        forex[i].innerHTML = fxdataValue;
    }
}