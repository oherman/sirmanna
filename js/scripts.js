var curPanel = 1;
function loadItems(itemUrl){
  $.getJSON(itemUrl, function(result){
    var panel = $('#panel-' + curPanel);
    panel.html('<h1>' + result.name + '</h1>');
    for(i in result.tasks){
      panel.append('<h2>' + i.label + '</h2>');
    }
  });
}