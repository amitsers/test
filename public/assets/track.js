function track() {
  $.ajax({
      url: 'track',
      type: 'GET',
      data: {
        page: location.pathname.substring('/')
      },
      success: function(res) {
                
      }
    });

  return true;
}