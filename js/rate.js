function calculateTotal()
{
  let unit_price={
    slab1: 5.40,
    slab2: 6.65,
    slab3: 7.65,
    //slab4:7.20   
    fixedCharges: 40 
  };
  let item_price={}

  var total_units=document.getElementById("total_units").value;
 
  if(total_units>120){
    $("#slab1_units").val(120);
  }
  else{
    $("#slab1_units").val(total_units);
  }
  item_price.slab1 = ($("#slab1_units").val() * unit_price.slab1 )
  $("#slab1_price").val(item_price.slab1);


  if (total_units>120 && total_units<240) {
        $("#slab2_units").val(total_units-120);
  } else if(total_units<120) {
        $("#slab2_units").val(0);
  } else {
        $("#slab2_units").val(120);
  }
  item_price.slab2 = ($("#slab2_units").val() * unit_price.slab2 )
  $("#slab2_price").val(item_price.slab2);


  if (total_units>240) {
      $("#slab3_units").val(total_units-240);
  } else {
      $("#slab3_units").val(0);
  }
  item_price.slab3 = ($("#slab3_units").val() * unit_price.slab3 )
  $("#slab3_price").val(item_price.slab3);  
  
  //item_price.slab4 = ($("#slab4_units").val() * unit_price.slab4 )
  //$("#slab4_price").val(item_price.slab4);  
  
  item_price.fixedCharges = ($("#fixedChargesUnits").val() * unit_price.fixedCharges )
  $("#fixedChargesPrice").val(item_price.fixedCharges); 

  let total =  item_price.slab1 +
               item_price.slab2 + 
               item_price.slab3 +
               item_price.fixedCharges; //+ item_price.slab4;

  $("#total_value").text(total);

}

$(function()
 {
    $(".qty").on("change keyup",calculateTotal)
})
