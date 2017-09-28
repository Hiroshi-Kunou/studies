var gameLayer;
var gameArray = [0,0,1,1,2,2,3,3,4,4,5,5,6,6,7,7];
var pickedTiles = [];
var scoreText;
var moves = 0;
var gameScene = cc.Scene.extend({
  onEnter: function(){
    gameArray = shuffle(gameArray);
    this._super();
    gameLayer = new game();
    gameLayer.init();
    this.addChild(gameLayer);
  }
});
var game = cc.Layer.extend({
  init: function(){
    this._super();
    var gradient = cc.LayerGradient.create(cc.color(50,50,50,255),
    cc.color(90,90,90,255));
    this.addChild(gradient);

scoreText = cc.LabelTTF.create("moves: 0","Arial","32",cc.TEXT_ALIGNMENT_CENTER);
this.addChild(scoreText);
scoreText.setPosition(90,50)

    for(i=0;i<16;i++){
      var tile = new MemoryTile();
      tile.pictureValue = gameArray[i];
      this.addChild(tile,0);
      tile.setPosition(49+i%4*74,400-Math.floor(i/4)*74);
    }
  }
});
var MemoryTile = cc.Sprite.extend({
  ctor: function() {
    this._super();
    this.initWithFile(res.cover_png);
    cc.eventManager.addListener(listener.clone(),this);
  }
});
var listener = cc.EventListener.create({
  event: cc.EventListener.TOUCH_ONE_BY_ONE,
  swallowTouches: true,
  onTouchBegan: function(touch, event) {
    if(pickedTiles.length<2){
      var target = event.getCurrentTarget();
      var location = target.convertToNodeSpace(touch.getLocation());
      var targetSize = target.getContentSize();
      var targetRectangle = cc.rect(0, 0, targetSize.width, targetSize.height);
      if(cc.rectContainsPoint(targetRectangle, location)) {
        target.initWithFile("res/tiles_"+target.pictureValue+".png");
        pickedTiles.push(target);
        if(pickedTiles.length==2){
          checkTiles();
        }
      }
    }
  }
});
function checkTiles(){
  moves++;
  scoreText.setString("moves: "+moves);
  var pause = setTimeout(function(){
    if(pickedTiles[0].pictureValue != pickedTiles[1].pictureValue){
      pickedTiles[0].initWithFile(res.cover_png);
      pickedTiles[1].initWithFile(res.cover_png);
    }else{
      gameLayer.removeChild(pickedTiles[0]);
      gameLayer.removeChild(pickedTiles[1]);
    }
    pickedTiles = [];
  },2000);
};
var shuffle = function(v){
  for(var j, x, i = v.length; i; j = parseInt(Math.random()*i), x = v[--i], v[i] = v[j], v[j] = x);
  return v;
};
