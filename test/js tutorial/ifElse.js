// Q1. Find if the value is EVEN or ODD?
// Q2. Find whether the number is positive or negative or 0?
// Q3. Find if a number is positive and even?

document.write("<h2>If else control Statement 1</h2>")
var x =15;//change the umber to check the results
if (x%2==0) {
    document.write("Even Number");
} else {
    document.write("Odd Number");   
}

document.write("<h2>If else control Statement 2</h2>")
var y =-9;//change the umber to check the results
if (y>0) {
    document.write("Number is Positive");
} else if (y<0){
    document.write("Number is Negative");   
  }  else {
        document.write("Number is zero ");   
     }

document.write("<h2>If else control Statement 3</h2>")
var z =16;//change the umber to check the results
if (z>0 && z%2==0) {
    document.write("Positive Even Number");
} else {
         document.write("Not a Positive Even Number");   
        }     
