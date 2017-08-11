
// グループでソート

var groupSort = function(){d3.csv('data.csv', function(error,data){
  d3.select('.sorttitle1').text(b1title);
  d3.select('.sorttitle2').text(b2title);
  d3.select('.info-text').text(binfo);

  d3.select('.content').remove();
  d3.select('body')
    .append('div')
    .classed('content',true)
  ;

  // データをグループごとに分ける
  var groupA=[];
  var groupB=[];
  var groupC=[];
  var groupD=[];

  for(i=0;i<data.length;i++){
    if(data[i]['所属']=='A'){
      groupA.push(data[i]);
    }
    if(data[i]['所属']=='B'){
      groupB.push(data[i]);
    }
    if(data[i]['所属']=='C'){
      groupC.push(data[i]);
    }
    if(data[i]['所属']=='D'){
      groupD.push(data[i]);
    }
  };

  // groupAのdivを追加
  d3.select('.content')
    .append('div')
    .classed('g1',true)
  ;

  // groupBのdivを追加
  d3.select('.content')
    .append('div')
    .classed('g2',true)
  ;

  // groupCのdivを追加
  d3.select('.content')
    .append('div')
    .classed('g3',true)
  ;

  // groupDのdivを追加
  d3.select('.content')
    .append('div')
    .classed('g4',true)
  ;

  // groupAの人物を追加
  d3.select('.g1')
    .selectAll('.g1person')
    .data(groupA)
    .enter()
    .append('div')
    .classed('g1person',true)
  ;
  // groupAの人物の内容を追加
  var g2p = d3.select('.g1').selectAll('.g1person');
  g2p.append('div')
    .classed('photo',true)
  ;
  g2p.append('p')
    .classed('name',true)
    .text(function(d,i){return d['名前']})
  ;
  g2p.append('p')
    .classed('group',true)
    .text(function(d,i){return d['所属']})
  ;

  // groupBの人物を追加
  d3.select('.g2')
    .selectAll('.g2person')
    .data(groupB)
    .enter()
    .append('div')
    .classed('g2person',true)
  ;
  // groupBの人物の内容を追加
  var g2p = d3.select('.g2').selectAll('.g2person');
  g2p.append('div')
    .classed('photo',true)
  ;
  g2p.append('p')
    .classed('name',true)
    .text(function(d,i){return d['名前']})
  ;
  g2p.append('p')
    .classed('group',true)
    .text(function(d,i){return d['所属']})
  ;

  // groupCの人物を追加
  d3.select('.g3')
    .selectAll('.g3person')
    .data(groupC)
    .enter()
    .append('div')
    .classed('g3person',true)
  ;
  // groupCの人物の内容を追加
  var g3p = d3.select('.g3').selectAll('.g3person');
  g3p.append('div')
    .classed('photo',true)
  ;
  g3p.append('p')
    .classed('name',true)
    .text(function(d,i){return d['名前']})
  ;
  g3p.append('p')
    .classed('group',true)
    .text(function(d,i){return d['所属']})
  ;

  // groupDの人物を追加
  d3.select('.g4')
    .selectAll('.g4person')
    .data(groupD)
    .enter()
    .append('div')
    .classed('g4person',true)
  ;
  // groupDの人物の内容を追加
  var g4p = d3.select('.g4').selectAll('.g4person');
  g4p.append('div')
    .classed('photo',true)
  ;
  g4p.append('p')
    .classed('name',true)
    .text(function(d,i){return d['名前']})
  ;
  g4p.append('p')
    .classed('group',true)
    .text(function(d,i){return d['所属']})
  ;

});
};
