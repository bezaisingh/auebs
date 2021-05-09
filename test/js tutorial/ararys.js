document.write("<h2>Arrays in JS</h2>");

var cars= ["BMW", "Mercedes", "Nano"];
cars.push(2);
cars.push("Bolero")

for(var i=0; i<cars.length;i++)
{
    document.write("<h3>"+cars[i]+"</h3>")
}
