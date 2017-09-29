var cart;
var itemLayer;
var gameLayer;
var gameScene = cc.Scene.extend({
  onEnter: function(){
    this._super();
    gameLayer = new game();
    gameLayer.init();
    this.addChild(gameLayer);
  }
});
var game = cc.Layer.extend({
  init: function(){
    this._super();
    var backgroundLayer = cc.LayerGradient.create(cc.color(0,0,0,255), cc.color(50,50,50,255));
    this.addChild(backgroundLayer);
    itemLayer = cc.Layer.create();
    this.addChild(topLayer);
    cart = cc.Sprite.create(res.cart_png);
    topLayer.addChild(cart,0);
    cart.setPosition(240,24);
    this.schedule(this.addItem,1);
  },
  addItem: function(){
    var asteroid = new Item();
    itemLayer.addChild(item,1);
  },
  removeAsteroid: function(){
    itemLayer.removeChild(item);
  }
});
var Item = cc.Sprite.extend({
  // ctor: function(){
  //   this._super();
  //   this.initWithFile(res.ship_png);
  //   this.ySpeed = 0;
  //   this.engineOn = false;
  // },
  // onEnter: function(){
  //   this.setPosition(60,160);
  // },
  // updateY:function(){
  //   if(this.engineOn){
  //     this.ySpeed += gameThrust;
  //     emitter.setPosition(this.getPosition().x-25,this.getPosition().y);
  //   }else{
  //     emitter.setPosition(this.getPosition().x-250,this.getPosition().y);
  //   }
  //   this.setPosition(this.getPosition().x,this.getPosition().y+this.ySpeed);
  //   this.ySpeed += gameGravity;
  //   if(this.getPosition().y<0||this.getPosition().y>320){
  //     restartGame();
  //   }
  // }
});
