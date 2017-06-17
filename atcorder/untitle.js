dataSet="1,2,4,2,4,3,3,6,8"

function main(data){
     var array = data.split(",")
     search1obj = "4"
     var search1 = array.indexOf(search1obj);
     if(search1!=-1){
          console.log("Search num is " + search1obj+ ".");
          console.log("Found it " + search1+ " nd.");
          var search2obj = array[search1+1];
          var search2 = array[search1+1];
          console.log("Next num is " + search2obj + ".");
     } else {
          console.log("Not found");
     }
};

main(dataSet);
