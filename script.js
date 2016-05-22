var url = 'http://search.kolbeck.dk/sinclair/game/',
  imagesUrl = 'https://wos.meulie.net',
  id = getUrlParameter('id');
settings = {
  "settings": [{
    "title": "fulltitle",
    "label": "Full Title",
    "type": "setContentWithDivName",
    "debug": "0"
  }, {
    "title": "machinetype",
    "label": "Machine Type",
    "type": "setContentWithDivName",
    "debug": "0"
  }, {
    "title": "yearofrelease",
    "label": "Year Of Release",
    "type": "setContentWithDivName",
    "debug": "0"
  }, {
    "title": "othersystems",
    "label": "Other Systems",
    "type": "setContentWithDivName",
    "debug": "0"
  }, {
    "title": "publisher",
    "label": "Publisher",
    "type": "setSimpleTable",
    "debug": "0"
  }, {
    "title": "rereleasedby",
    "label": "Re Released By",
    "type": "setMultiRowTable",
    "debug": "0"
  }, {
    "title": "additional",
    "label": "Additional",
    "type": "setMultiRowTable",
    "debug": "0"
  }, {
    "title": "additionals",
    "label": "Additionals",
    "type": "setMultiRowTableAdditionals",
    "debug": "0"
  }, {
    "title": "authors",
    "label": "Authors",
    "type": "setString",
    "debug": "0"
  }, {
    "title": "availability",
    "label": "Availability",
    "type": "setContentWithDivName",
    "debug": "0"
  }, {
    "title": "budgetprice",
    "label": "Budget Price",
    "type": "setMultiRowTable",
    "debug": "0"
  }, {
    "title": "controls",
    "label": "Controls",
    "type": "setString",
    "debug": "0"
  }, {
    "title": "downloads",
    "label": "Downloads",
    "type": "setMultiRowTableDownloads",
    "debug": "0"
  }, {
    "title": "magazine_0",
    "label": "Magazine 0",
    "type": "setMultiRowTableMagazine",
    "debug": "0"
  }, {
    "title": "magazine_1",
    "label": "Magazine 1",
    "type": "setMultiRowTableMagazine",
    "debug": "0"
  }, {
    "title": "messagelanguage",
    "label": "Message Language",
    "type": "setContentWithDivName",
    "debug": "0"
  }, {
    "title": "numberofplayers",
    "label": "Number of Players",
    "type": "setContentWithDivName",
    "debug": "0"
  }, {
    "title": "originalprice",
    "label": "Original Price",
    "type": "setMultiRowTable",
    "debug": "0"
  }, {
    "title": "originalpublication",
    "label": "Original Publication",
    "type": "setContentWithDivName",
    "debug": "0"
  }, {
    "title": "othersystems",
    "label": "Other Systems",
    "type": "setContentWithDivName",
    "debug": "0"
  }, {
    "title": "protectionscheme",
    "label": "Protection Scheme",
    "type": "setContentWithDivName",
    "debug": "0"
  }, {
    "title": "pageinfo",
    "label": "Page Info",
    "type": "setSimpleTable",
    "debug": "0"
  }, {
    "title": "score",
    "label": "Score",
    "type": "setSimpleTable",
    "debug": "0"
  }, {
    "title": "series",
    "label": "Series",
    "type": "setContentWithDivName",
    "debug": "0"
  }, {
    "title": "tieinlicence",
    "label": "Tie in Licence",
    "type": "setContentWithDivName",
    "debug": "0"
  }, {
    "title": "type",
    "label": "Type",
    "type": "setContentWithDivName",
    "debug": "0"
  }],
};

console.log(id);

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
        console.log(index2);
        console.log('value2');
        console.log(value2);
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
