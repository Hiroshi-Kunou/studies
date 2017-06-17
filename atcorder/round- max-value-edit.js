function main(data){
     var n=String(data);
     var nums=n.split("");
     var hits=[];
     for(i=0;i<nums.length;i++){
          if(nums[i]>4){
               hits.unshift(i);
          }
     }
     var floatpoint=nums.length-hits[0];
     var float=Math.pow(10,floatpoint);
     var floated=parseInt(n)/float;
     var rounded=Math.round(floated)*float;
     var answer=String(rounded);
     console.log(answer);

     var answers=answer.split("");
     for(i=0;i<answers.length;i++){
          if(answers[i]>4){
               hits.unshift(i);
               floatpoint=answers.length-hits[0];
               float=Math.pow(10,floatpoint);
               floated=parseInt(n)/float;
               console.log(floated)
               rounded=Math.round(floated)*float;
               answer=rounded;
               console.log(answer);
          }
     }

}
main(24735);
