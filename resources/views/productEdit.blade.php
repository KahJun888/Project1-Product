<html>
<head>
</head>

<body>
<form action = "/product/<?php echo $editProductInfo[0]->id; ?>" method = "post">
@csrf
@method('PUT')
  <p style = "font-size:20px">
    <strong>Show Selected Product</strong>&nbsp;
    <button type="button" onclick="window.location='{{ url("product") }}'">Listing</button>&nbsp;
    <button type="button" onclick="window.location='{{ url("product/create") }}'">Create</button>
  </p>
  <table>
    <tr>
      <td>Code: <font color="red">*</font></td>
      <td><input id="code" type="text" name="code" value="{{$editProductInfo[0]->code}}" size="50" maxlength="9"></td> 
    </tr>
    <tr>
      <td>Name: <font color="red">*</font></td>
      <td><input id="name" type="text" name="name" value="{{$editProductInfo[0]->name}}" size="50" maxlength="90"></td> 
    </tr>
    <tr>
      <td>Category: <font color="red">*</font></td>
      <td><input id="category" type="text" name="category" value="{{$editProductInfo[0]->category}}" size="50" maxlength="28"></td> 
    </tr>
    <tr>
      <td>Brand:</td>
      <td><input id="brand" type="text" name="brand" value="{{$editProductInfo[0]->brand}}" size="50" maxlength="28"></td> 
    </tr>
    <tr>
      <td>Type:</td>
      <td><input id="type" type="text" name="type" value="{{$editProductInfo[0]->type}}" size="50" maxlength="21"></td> 
    </tr>
    <tr>
      <td>Description:</td>
      <td><textarea id="description" type="text" name="description" rows="3" cols="50">{{$editProductInfo[0]->description}}</textarea></td> 
    </tr>
    <tr align="center">
      <td colspan='2' style="text-align: 'center';"><input type='submit' value="Update"/></td>
    </tr>  
  </table>
</form>  
</body>
</html>




