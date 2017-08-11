
// 階級でソート

var levelSort = function(){d3.csv('data.csv', function(error,data){
  d3.select('.sorttitle1').text(a1title);
  d3.select('.sorttitle2').text(a2title);
  d3.select('.info-text').text(ainfo);

  // 初期化するため.contentを削除して追加
  d3.select('.content').remove();
  d3.select('body')
    .append('div')
    .classed('content',true)
  ;

  // データをレベルごとに分ける
  var level1=[];
  var level2=[];
  var level3=[];
  for(i=0;i<data.length;i++){
    if(data[i]['役職']=='役職1'){
      level1.push(data[i]);
    }
    if(data[i]['役職']=='役職2'){
      level2.push(data[i]);
    }
    if(data[i]['役職']=='役職3'){
      level3.push(data[i]);
    }
  };

  // level3のdivを追加
  d3.select('.content')
    .append('div')
    .classed('l3',true)
  ;

  // level2のdivを追加
  d3.select('.l3')
    .append('div')
    .classed('l2',true)
  ;

  // level1のdivを追加
  d3.select('.l2')
    .append('div')
    .classed('l1',true)
  ;

  // level1の人物を追加
  d3.select('.l1')
    .selectAll('.l1person')
    .data(level1)
    .enter()
    .append('div')
    .classed('l1person',true)
  ;
  // level1の人物の内容を追加
  var l1p = d3.select('.l1').selectAll('.l1person');
  l1p.append('div')
    .classed('photo',true)
  ;
  l1p.append('p')
    .classed('name',true)
    .text(function(d,i){return d['名前']})
  ;
  l1p.append('p')
    .classed('group',true)
    .text(function(d,i){return d['所属']})
  ;

  // level2の人物を追加
  d3.select('.l2')
    .selectAll('.l2person')
    .data(level2)
    .enter()
    .append('div')
    .classed('l2person',true)
  ;
  // level2の人物の内容を追加
  var l2p = d3.select('.l2').selectAll('.l2person');
  l2p.append('div')
    .classed('photo',true)
  ;
  l2p.append('p')
    .classed('name',true)
    .text(function(d,i){return d['名前']})
  ;
  l2p.append('p')
    .classed('group',true)
    .text(function(d,i){return d['所属']})
  ;

  // level3の人物を追加
  d3.select('.l3')
    .selectAll('.l3person')
    .data(level3)
    .enter()
    .append('div')
    .classed('l3person',true)
  ;
  // level3の人物の内容を追加
  var l3p = d3.select('.l3').selectAll('.l3person');
  l3p.append('div')
    .classed('photo',true)
  ;
  l3p.append('p')
    .classed('name',true)
    .text(function(d,i){return d['名前']})
  ;
  l3p.append('p')
    .classed('group',true)
    .text(function(d,i){return d['所属']})
  ;

});
};

levelSort();
