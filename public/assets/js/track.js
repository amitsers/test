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