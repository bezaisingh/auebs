<!DOCTYPE html>
<html>
<head>

<style type="text/css">
body{ width: 800px;
    font-family: calibri;
    padding: 0;
    margin: 0 auto;
}

.frm{
    border:1px solid #7ddaff;
    background-colou: #b4c8d0;
    margin: 0px auto;
    padding: 40px;
    border-radius: 4px;

}
.inputBox{
    padding:10px;
    border:#bdbdbd 1px solid;
    border-radius: 4px;
    background-colou: #fff;
    width: 50%;
}
.row{
    padding-bottom: 15px;
    padding-left: 150px;
    border-radius: 4px;
}
</style>

<title>
<body>
<div class="frm">
<h2>Dependent drop down list</h2>
<div class="row"> 
    <label>Country</label>
    <Select name="country" id="country_list" class="InputBox">
        <option value disabled>select country</option>
    </select>


    <div class="row"> 
    <label>State</label>
    <Select name="state" id="state_list" class="InputBox">
        <option value disabled>select state</option>
    </select>


    <div class="row"> 
    <label>city</label>
    <Select name="city" id="city_list" class="InputBox">
        <option value disabled>select city</option>
    </select>
 
</div>
</div>

</body>

</title>

</head>

</html>