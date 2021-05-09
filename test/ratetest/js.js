function calculateTotal()
{
  let unit_price={
    slab1: 3.5,
    slab2: 5,
    slab3: 6.5,
    slab4:7.20    
  };
  let item_price={}

  var total_units=($("#total_units").val());

 
  if($("#slab1_units").val(total_units-100>0)){
    $("#slab1_units").val(total_units-100);
  }
  else{
    $("#slab1_units").val(0.00);
  }
  item_price.slab1 = ($("#slab1_units").val() * unit_price.slab1 )
  $("#slab1_price").val(item_price.slab1);
  
  item_price.slab2 = ($("#slab2_units").val() * unit_price.slab2 )
  $("#slab2_price").val(item_price.slab2);
  
  item_price.slab3 = ($("#slab3_units").val() * unit_price.slab3 )
  $("#slab3_price").val(item_price.slab3);  
  
  item_price.slab4 = ($("#slab4_units").val() * unit_price.slab4 )
  $("#slab4_price").val(item_price.slab4);    
  
  let total = item_price.slab1 + item_price.slab2 + item_price.slab3 + item_price.slab4;

  $("#total_value").text(total);


  //Original codes 07th May 2021
  // item_price.slab1 = ($("#slab1_units").val() * unit_price.slab1 )
  // $("#slab1_price").val(item_price.slab1);
  
  // item_price.slab2 = ($("#slab2_units").val() * unit_price.slab2 )
  // $("#slab2_price").val(item_price.slab2);
  
  // item_price.slab3 = ($("#slab3_units").val() * unit_price.slab3 )
  // $("#slab3_price").val(item_price.slab3);  
  
  // item_price.slab4 = ($("#slab4_units").val() * unit_price.slab4 )
  // $("#slab4_price").val(item_price.slab4);    
  
  // let total = item_price.slab1 + item_price.slab2 + item_price.slab3 + item_price.slab4;

  // $("#total_value").text(total);
   //Original codes ends here
}

$(function()
 {
    $(".qty").on("change keyup",calculateTotal)
})
