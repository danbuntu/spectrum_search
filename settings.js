var url = 'http://search.kolbeck.dk/sinclair/game/',
searchUrl = 'http://search.kolbeck.dk/_search?',
  imagesUrl = 'https://wos.meulie.net',
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
    }]
},

    images = {"images": [{
      "title": "Loading screen",
      "label": "Loading Screen",
      "div": "loadingScreen",
      "type": "setImageInDiv",
      "debug": "0"
    }, {
      "title": "Cassette inlay",
      "label": "Cassette Inlay",
      "div": "inGame",
      "type": "setImageInDiv",
      "debug": "0"
    }, {
      "title": "In-game screen",
      "label": "In-game screen",
      "div": "cassetteInlay",
      "type": "setImageInDiv",
      "debug": "0"
    }],
  };
