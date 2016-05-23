function track() {
  $.ajax({
    url: 'track',
    type: 'GET',
    data: {
      page: location.pathname.substring('/'),
      cid: getParameterByName('cid')
    },
    success: function(res) {
      
    }
  });

  $.ajax({
    url: 'track-page-ref',
    type: 'GET',
    data: {
      ref: getQueryParameter('ref')
    },
    success: function(res) {
      // console.log(res);
    }
  });

  return true;
}

function getParameterByName(name, url) {
  if(name){
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
  }
  return 0;
}

function getQueryParameter(queryParam) {
  var allQueryParam = location.search.substr(1).split("&");
  for(var i=0; i<allQueryParam.length; i++) {
    if(allQueryParam[i].split('=')[0]===queryParam) {
      return allQueryParam[i].split('=')[1];
    }
  }
  return '';
}