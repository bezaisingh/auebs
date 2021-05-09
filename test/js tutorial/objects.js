document.write("<h2>Objects in JS Type 1</h2>");

var car={
    brand: "Tesla",
    model: "V1",
    price: "35000",

//below is a function which is called a method as it is declared inside a class
    teslaAutopilot: function() //Method created and named teslaAutopilot
    {

       // return "This car has Auto Pilot";

        //or

        return document.write("<h3>This car has Auto Pilot</h3>");
    }

}

//document.write(car.teslaAutopilot());
// or
car.teslaAutopilot();


//Type 2 Ends
document.write("<h2>Objects in JS Type 2</h2>");

function Car(brand, model, price) {
    this.brand= brand;
    this.model=model;
    this.price;
    this.teslaAutopilot2= function () {
        document.write("<h3>This car has Auto Pilot</h3>");
    }

}
var car1=new Car("Tesla", "Lura", "₹50000");
car1.teslaAutopilot2();

var car2=new Car("Tesla", "Skoda", "₹34000");
document.write("<h3>"+car2.model+"</h3")
//Type 2 Ends Ends here