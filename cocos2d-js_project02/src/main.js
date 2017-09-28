window.onload = function(){
  cc.game.onStart = function(){
    if(!cc.sys.isNative && document.getElementById("cocosLoading"))
    document.body.removeChild(document.getElementById("cocosLoading"));
    cc.view.enableRetina(false);
    cc.view.adjustViewPort(true);
    cc.view.setDesignResolutionSize(320, 480, cc.ResolutionPolicy.SHOW_ALL);
    cc.LoaderScene.preload(g_resources, function(){
      cc.director.runScene(new gameScene());
    }, this);
  };
  cc.game.run()
};
