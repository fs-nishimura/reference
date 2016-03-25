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

$(".sp-menu").click(function() {
  var _root=new demo();
  _root.openspmenu();
});


function interaction(){
  interaction.prototype.openModal=function(_){
    $(_).find(".modal").fadeIn(500,"easeInOutSine");
  } 
}


function demo(){
   demo.prototype.openspmenu=function(){
    $(".sp-menu").toggleClass('show');
  } 
}