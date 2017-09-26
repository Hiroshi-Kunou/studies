
// 階級でソート

var levelSort = function(){
  d3.csv('data_china.csv', function(error,data){
  reset('a');

  // データをレベルごとに分ける
  var level1=[];
  var level2=[];
  var level3=[];
  for(i=0;i<data.length;i++){
    if(data[i]['階級']=='a'){
      level1.push(data[i]);
    }
    if(data[i]['階級']=='b'){
      level2.push(data[i]);
    }
    if(data[i]['階級']=='c'){
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
  l1p.append('img')
    .attr('src',function(d,i){return 'images/img_' + d['番号'] + '.png'})
    .classed('photo',true)
  ;
  l1p.append('p')
    .classed('name',true)
    .text(function(d,i){return d['氏名']})
  ;
  l1p.append('p')
    .classed('group',true)
    .text(function(d,i){return d['派閥']})
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
  l2p.append('img')
    .attr('src',function(d,i){return 'images/img_' + d['番号'] + '.png'})
    .classed('photo',true)
  ;
  l2p.append('p')
    .classed('name',true)
    .text(function(d,i){return d['氏名']})
  ;
  l2p.append('p')
    .classed('group',true)
    .text(function(d,i){return d['派閥']})
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
  l3p.append('img')
    .attr('src',function(d,i){return 'images/img_' + d['番号'] + '.png'})
    .classed('photo',true)
  ;
  l3p.append('p')
    .classed('name',true)
    .text(function(d,i){return d['氏名']})
  ;
  l3p.append('p')
    .classed('group',true)
    .text(function(d,i){return d['派閥']})
  ;

  d3.select('.l2')
    .append('div')
    .classed('clear',true)
  ;

  d3.select('.l3')
    .append('div')
    .classed('clear',true)
  ;

});
};

levelSort();
