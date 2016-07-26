$(document).ready(function() {
  id = getUrlParameter('id');

  $.ajax({
    type: "GET",
    dataType: "json",
    url: url + id,
    success: function(data) {
      // console.log(data);

      $('#loading').hide();
      // start looping the _source object that contians everything
      $.each(data['_source'], function(name, value) {
        // search the settings for the right one

        result = $.grep(settings.settings, function(element, index) {
          return element.title == name;
        });

        // check if the array is empty so we don't try and output it
        if (result.length != 0) {
          if (result[0].debug == 1) {
            console.log(result);
            console.log(value);

          }
          // call the correct function and pass it data
          functions[result[0].type](result[0].title, result[0].label, value, result[0].debug);
        }
      });
    }
  });
});

// a method that contains the various functions we need to output
var functions = {

  // sets the content in a div
  setContentWithDivName: function(name, label, value, debug) {
    $('#' + name).html(value);
    $('#' + name + 'Label').html(label);
  },

  // builds a simple one row table
  setSimpleTable: function(name, label, value, debug) {
    var tableSettings = functions.tableSettings(name);

    $.each([value][0], function(index, value) {
      tableSettings.tableHeader += '<th>' + index + '</th>';
      tableSettings.tableRow += '<td>' + value + '</td>';
    });

    table = tableSettings.tablestart + tableSettings.tableHead + tableSettings.rowStart + tableSettings.tableHeader + tableSettings.rowEnd + tableSettings.tableHeadEnd + tableSettings.tableBody + tableSettings.rowStart + tableSettings.tableRow + tableSettings.rowEnd + tableSettings.tableBodyEnd + tableSettings.tableEnd;

    $('#' + name + 'Label').html(label);
    $('#' + name).html(table);
  },

  //builds a table with multple rows from the data
  setMultiRowTable: function(name, label, value, debug) {
    var tableSettings = functions.tableSettings(name);

    $.each([value][0], function(index, value) {
      if (debug == 1) {
        console.log(tableSettings);
        console.log('mutlirow table');
        console.log(index);
        console.log(value);
      }

      // only build the header row on the first pass
      if (tableSettings.i == 0) {
        $.each([value][0], function(index2, value2) {
          tableSettings.tableHeader += '<th>' + index2 + '</th>';
        });
      }
      tableSettings.i++;
      tableSettings.tableRow += tableSettings.rowStart;
      $.each([value][0], function(index2, value2) {
        if (debug == 1) {
          console.log('index2');
          console.log(index2);
          console.log('value2');
          console.log(value2);
        }
        tableSettings.tableRow += '<td>' + value2 + '</td>';
      });
      tableSettings.tableRow += tableSettings.rowEnd;
    });

    table = tableSettings.tablestart + tableSettings.tableHead + tableSettings.rowStart + tableSettings.tableHeader + tableSettings.rowEnd + tableSettings.tableHeadEnd + tableSettings.tableBody + tableSettings.rowStart + tableSettings.tableRow + tableSettings.rowEnd + tableSettings.tableBodyEnd + tableSettings.tableEnd;
    if (debug == 1) {
      console.log(table);
      console.log(name);
    }
    $('#' + name + 'Label').html(label);
    $('#' + name).html(table);
  },

  // builds a table for the additonals
  setMultiRowTableAdditionals: function(name, label, value, debug) {
    var tableSettings = functions.tableSettings(name),
      filename = '',
      linkurl = '',
      size = '',
      type = '';
    // hardcode the header row
    tableSettings.tableHeader += '<th>Filename</th><th>Size</th><th>Type</th>';

    $.each([value][0], function(index, value) {
      if (debug == 1) {
        console.log('mutlirow table');
        console.log(index);
        console.log(value);
      }

      // check the images array
      resultImage = $.grep(images.images, function(element, index) {
      if (debug == 1) {
        console.log('search for: ' + element.title);
        console.log(element)
        console.log('name:' + value.type);
      }
        return element.title == value.type;
      });


      // check if the array is empty so we don't try and output it
      if (resultImage.length != 0) {
        if (result[0].debug == 1) {
          console.log('image found');
          console.log('image found');
          console.log(result);
          console.log(value);
        }
        // call the correct function and pass it data
        functions[resultImage[0].type](resultImage[0].title, resultImage[0].label, value, resultImage[0].debug, resultImage[0].div);
      }

      tableSettings.tableRow += tableSettings.rowStart;


      //reset the filename value
      filename = '';
      linkurl = '';
      size = '';
      type = '';

      linkurl = '<a href="' + imagesUrl + value.url + '">' + value.filename + '</a>';
      // build the row
      tableSettings.tableRow += '<td>' + linkurl + '</td><td>' + value.size + '</td><td>' + value.type + '</td>' + tableSettings.rowEnd;
    });

    table = tableSettings.tablestart + tableSettings.tableHead + tableSettings.rowStart + tableSettings.tableHeader + tableSettings.rowEnd + tableSettings.tableHeadEnd + tableSettings.tableBody + tableSettings.rowStart + tableSettings.tableRow + tableSettings.rowEnd + tableSettings.tableBodyEnd + tableSettings.tableEnd;
    if (debug == 1) {
      console.log(table);
      console.log(name);
    }
    $('#' + name + 'Label').html(label);
    $('#' + name).html(table);
  },


  setMultiRowTableDownloads: function(name, label, value, debug) {
    var tableSettings = functions.tableSettings(name),
      filename = '',
      linkurl = '',
      size = '',
      type = '';

    // hardcode the header row
    tableSettings.tableHeader += '<th>Barcode</th><th>Code</th><th>dl</th><th>Origin</th><th>Filename</th><th>Size</th><th>Type</th><th>Year</th>';

    $.each([value][0], function(index, value) {
      if (debug == 1) {
        console.log('mutlirow table');
        console.log(index);
        console.log(value);
      }

      tableSettings.tableRow += tableSettings.rowStart;

      //reset the filename value
      filename = '';
      linkurl = '';
      size = '';
      type = '';

      // $.each([value][0], function(index2, value2) {
      if (debug == 1) {
        console.log('index2');
        console.log('value2');
      }

      linkurl = '<a href="' + imagesUrl + value.url + '">' + value.filename + '</a>';
      // build the row
      tableSettings.tableRow += '<td>' + functions.checkEmpty(value.barcode) + '</td><td>' + functions.checkEmpty(value.code) + '</td><td>' + functions.checkEmpty(value.dl) + '</td><td>' + functions.checkEmpty(value.origin) + '</td><td>' + linkurl + '</td><td>' + value.size + '</td><td>' + functions.checkEmpty(value.type) + '</td><td>' + functions.checkEmpty(value.year) + '</td>' + tableSettings.rowEnd;
    });

    table = tableSettings.tablestart + tableSettings.tableHead + tableSettings.rowStart + tableSettings.tableHeader + tableSettings.rowEnd + tableSettings.tableHeadEnd + tableSettings.tableBody + tableSettings.rowStart + tableSettings.tableRow + tableSettings.rowEnd + tableSettings.tableBodyEnd + tableSettings.tableEnd;
    if (debug == 1) {
      console.log(table);
      console.log(name);
    }
    $('#' + name + 'Label').html(label);
    $('#' + name).html(table);
  },


  setMultiRowTableMagazine: function(name, label, value, debug) {
    var tableSettings = functions.tableSettings(name),
      filename = '',
      linkurl = '',
      size = '',
      type = '';

    // hardcode the header row
    tableSettings.tableHeader += '<th>Issue</th><th>Magazine</th><th>Magazine Type</th><th>Page</th>';

    $.each([value][0], function(index, value) {
      if (debug == 1) {
        console.log('mutlirow table');
        console.log(index);
        console.log(value);
      }

      tableSettings.tableRow += tableSettings.rowStart;

      //reset the filename value
      filename = '';
      linkurl = '';
      size = '';
      type = '';

      // $.each([value][0], function(index2, value2) {
      if (debug == 1) {
        console.log('index2');
        console.log(index2);
        console.log('value2');
        console.log(value2);
      }

      linkurl = '<a href="' + imagesUrl + value.url + '">' + value.page + '</a>';
      // build the row
      tableSettings.tableRow += '<td>' + functions.checkEmpty(value.issue) + '</td><td>' + functions.checkEmpty(value.magazine) + '</td><td>' + functions.checkEmpty(value.magazine_type) + '</td><td>' + linkurl + '</td>' + tableSettings.rowEnd;
    });

    table = tableSettings.tablestart + tableSettings.tableHead + tableSettings.rowStart + tableSettings.tableHeader + tableSettings.rowEnd + tableSettings.tableHeadEnd + tableSettings.tableBody + tableSettings.rowStart + tableSettings.tableRow + tableSettings.rowEnd + tableSettings.tableBodyEnd + tableSettings.tableEnd;
    if (debug == 1) {
      console.log(table);
      console.log(name);
    }
    $('#' + name + 'Label').html(label);
    $('#' + name).html(table);
  },

  setString: function(name, label, value, debug) {

    if (debug == 1) {
      console.log('set authors called');
      console.log(name);
      console.log(label);
    }

    var authors = '';
    $.each([value][0], function(index, value) {
      authors += value + ', ';
    });

    $('#' + name + 'Label').html(label);
    $('#' + name).html(authors);
  },


  tableSettings: function(name) {
    // used to reset the table on each run
    var tableSettings = {
      table: '',
      tablestart: '<table class="table ' + name + 'Table">',
      tableEnd: '</table>',
      rowStart: '<tr>',
      rowEnd: '<tr>',
      tableHead: '<thead>',
      tableHeadEnd: '</thead>',
      tableBody: '<tbody>',
      tableBodyEnd: '</tbody>',
      tableRow: '',
      tableHeader: '',
      i: 0
    };
    return tableSettings;
  },


  checkEmpty: function(check) {

    if (check) {
      if (check.length > 0) {
        check = check;
      } else {
        check = 'N/A';
      }
    }
    return check
  },


  setImageInDiv: function(name, label, value, debug, div) {
    if (debug == 1) {
      console.log('call the images function');
      console.log(value);
      console.log(label);
      console.log(img);
      console.log(div);
    }
    //make the img link
    var img = '<img src="' + imagesUrl + value.url + '">';
    // stick the image in the div
    $('#' + div).html(img);
    $('#' + div + 'Label').html(label);

  }



}

function getUrlParameter(sParam) {
  var sPageURL = decodeURIComponent(window.location.search.substring(1)),
    sURLVariables = sPageURL.split('&'),
    sParameterName,
    i;

  for (i = 0; i < sURLVariables.length; i++) {
    sParameterName = sURLVariables[i].split('=');

    if (sParameterName[0] === sParam) {
      return sParameterName[1] === undefined ? true : sParameterName[1];
    }
  }
};
