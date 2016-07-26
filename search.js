  $('#loading').hide();
$('#go').click(function() {
console.log('search clicked');
  var search = $('#searchBox').val
  getSerach(search)
});


function getSerach(search) {

// show the loader
  $('#loading').show();


  $.ajax({
    type: "GET",
    dataType: "json",
    url: searchUrl + search,
    success: function(data) {

console.log(data);

  $('#loading').hide();

    }
  });

}
