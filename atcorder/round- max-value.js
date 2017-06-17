function main(data){
var x=data;
var y;
var log=[x];
function roundVal(value){
     var n=String(value);
     var nums=n.split("");
     var hits=[];
     for(i=0;i<nums.length;i++){
          if(nums[i]>4){
               hits.unshift(i);
          }
     }
     var float=Math.pow(10,nums.length-hits[0]);
     var floated=parseInt(n)/float;
     var rounded=Math.round(floated)*float;
     y=rounded;
     log.unshift(y);
}

roundVal(x);

var cycle=false;

while(cycle!=true){
     if(y>log[1]){
          roundVal(y)
     }else{
          cycle=true;
          console.log(log[1]);
     }
}

}
main(123123532235)
