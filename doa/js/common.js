var cbAccountId = 'c6bkr396';
var cbAppKeyPrefix = 'D83C9000';

var cbDomain = 'https://' + cbAccountId + '.caspio.com';
var cbDataPagePrefix = cbDomain + '/dp/' + cbAppKeyPrefix;
// function - set iframe height on load
function iframeLoaded( elementId ){
  setTimeout( function() {
  
  var $iframe = $('#'+ elementId ).length ? $('#'+ elementId ) : window.parent.$('#'+ elementId );
  var padding = -12;
    
  $iframe.css( 'height', '0px' );  
  var height = $iframe.get(0).contentWindow.document.body.scrollHeight + padding;
  $iframe.css( 'height', height + 'px' );
  
  }, 50 );
}
// function - deploy DP asyncrhonously
function deployDP(containerID, appKey, params) {
  var params = params || '';
  var dataPageScript = document.createElement("script");
  var container = document.getElementById(containerID);
  dataPageScript.src = cbDataPagePrefix + appKey + '/emb' + params;
  
  container.innerHTML = '';
  container.appendChild(dataPageScript);
}
// function - refresh DP
function refreshDP(appKey) {
  for (var key in window.dataPageManagerObj.dataPages) {
    if (key.search(cbAppKeyPrefix + appKey) != -1) {
      window.dataPageManagerObj.dataPages[key].refresh();
    }
  }
}
// function - deploy DP in modal
function openModal(modalTitle, appKey, params) {
  $('#cb-modal-body').html('');
  deployDP('cb-modal-body', appKey, params);

  $('#cb-modal-title').html(modalTitle);
  $('#cb-modal').modal({
    backdrop: 'static',
    keyboard: false
  });
  // draggable modal
  $(".modal-header").on("mousedown", function(mousedownEvt) {
    var $draggable = $(this);
    var x = mousedownEvt.pageX - $draggable.offset().left,
        y = mousedownEvt.pageY - $draggable.offset().top;
    $("body").on("mousemove.draggable", function(mousemoveEvt) {
        $draggable.closest(".modal-content").offset({
            "left": mousemoveEvt.pageX - x,
            "top": mousemoveEvt.pageY - y
        });
    });
    $("body").one("mouseup", function() {
        $("body").off("mousemove.draggable");
    });
    $draggable.closest(".modal").one("bs.modal.hide", function() {
        $("body").off("mousemove.draggable");
    });
  });
}
// function - get URL Vars
function getUrlVars()
  {
      var vars = [], hash;
      var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
   
      for(var i = 0; i < hashes.length; i++)
      {
          hash = hashes[i].split('=');
      hash[1] = unescape(hash[1]);
      vars.push(hash[0]);
          vars[hash[0]] = hash[1];
      }
   
      return vars;
  }
var urlVars = getUrlVars();

// hide default submit button row at the bottom of inline forms
document.addEventListener('DataPageReady', function (event) {
  $( '.cb-hide-submit input.cbSearchButton' ).closest( 'tr' ).remove();
  $( '.cb-btn-reset' ).bind( 'click', function() {
    $( this ).closest( 'form' ).find( 'select, input[type="text"]' ).val( '' );
    $( this ).closest( 'form' ).submit();
  });
});

// function - deploy DP in modal
function openModal(modalTitle, appKey, params, size) {
  
  $('#cb-modal-body').html('');
  if(size) $('#cb-modal-dialog').addClass('modal-lg')
  else $('#cb-modal-dialog').removeClass('modal-lg');
  deployDP('cb-modal-body', appKey, params);
  $('#cb-modal-title').html(modalTitle);
  $('#cb-modal').modal({
      backdrop: 'static',
      keyboard: false
  });
}