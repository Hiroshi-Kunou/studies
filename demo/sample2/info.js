var A1 = 'ヒエラルキーの構成';
var A2 = '階級別の顔ぶれ';
var Ainfo = 'ヒエラルキーの解説';

var B1 = '派閥の割合';
var B2 = '各派閥の顔ぶれ';
var Binfo = '派閥の解説'

var reset = function(txt){
  var t1;
  var t2;
  var info;
  if(txt=='a'){
    t1 = A1;
    t2 = A2;
    info = Ainfo;
  }else if(txt=='b'){
    t1 = B1;
    t2 = B2;
    info = Binfo;
  }
  d3.select('.content').remove();
  d3.select('body').append('div').classed('content',true);
  d3.select('.sorttitle1').text(t1);
  d3.select('.sorttitle2').text(t2);
  d3.select('.info-text').text(info);
}
