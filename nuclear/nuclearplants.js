//difine

var svgHeight=5000;
var offsetX=30;
var offsetY=20;
var barElements;

//dataSet

d3.csv("set.csv",function(error,data){
var dataSet=[];
var labelName=[];
for(var i=0; i<data.length; i++){
	dataSet.push(data[i].CapacityMWe);
	labelName.push(data[i].PowerStation);
}

//draw

barElements = d3.select("#myGraph")
.selectAll("rect")
.data(dataSet)

barElements.enter()
.append("rect")
.attr("x",200)
.attr("y", function(d,i){
	return i*25;
})

.attr("height","10px")
.attr("width", function(d,i){
	return d/10+"px";
})

//scale

var xScale = d3.scale.linear()
.domain([0, 800])
.range([0, 800]);

d3.select("#myGraph")
.append("g")
.attr("class","axis")
.attr("transform","translate(200,"+((1+dataSet.length)*25)+")")

.call(d3.svg.axis()
	.scale(xScale)
	.orient("bottom")
)

//label

barElements.enter()
.append("text")
.attr("class", "barName")
.attr("y", function(d,i){
	return i * 25 + offsetY/2;
})
.attr("x", offsetX-15)
.text(function(d ,i){
return labelName[i];
})

console.log(labelName)

});
