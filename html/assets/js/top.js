/////////////////////////////////////////////////////////////////////////////////////////////////////
//
// top.js
//
/////////////////////////////////////////////////////////////////////////////////////////////////////

var myelement={
  clickablelist:".clickablelist>li"
}
$(myelement.clickablelist).click(function() {
  var _root=new interaction();
  if($(this).hasClass('open')){
    _root.closeModal(this);
  }else{
      _root.openModal(this);
  }
});


function interaction(){
  interaction.prototype.openModal=function(_){
    $(_).find(".modal").fadeIn(500,"easeInOutSine");
  }
  
}