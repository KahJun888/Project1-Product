<html>
<head>
<script>
  function editButtonOnclick(){ //call to edit page
    window.location='<?php echo $selectedProductInfo[0]->id; ?>/edit';
  }
</script>
</head>

<body>
@if (session('status'))
<div class="alert alert-success" role="alert">
	{{ session('status') }}
</div>
@endif

  <p style = "font-size:20px">
    <strong>Show Selected Product</strong>&nbsp;
    <button type="button" onclick="window.location='{{ url("product") }}'">Listing</button>&nbsp;
    <button type="button" onclick="window.location='{{ url("product/create") }}'">Create</button>
  </p>
  <table>
    <tr>
      <td>Code: <font color="red">*</font></td>
      <td><input id="code" type="text" name="code" value="{{$selectedProductInfo[0]->code}}" size="50" maxlength="9" disabled></td> 
    </tr>
    <tr>
      <td>Name: <font color="red">*</font></td>
      <td><input id="name" type="text" name="name" value="{{$selectedProductInfo[0]->name}}" size="50" maxlength="90" disabled></td> 
    </tr>
    <tr>
      <td>Category: <font color="red">*</font></td>
      <td><input id="category" type="text" name="category" value="{{$selectedProductInfo[0]->category}}" size="50" maxlength="28" disabled></td> 
    </tr>
    <tr>
      <td>Brand:</td>
      <td><input id="brand" type="text" name="brand" value="{{$selectedProductInfo[0]->brand}}" size="50" maxlength="28" disabled></td> 
    </tr>
    <tr>
      <td>Type:</td>
      <td><input id="type" type="text" name="type" value="{{$selectedProductInfo[0]->type}}" size="50" maxlength="21" disabled></td> 
    </tr>
    <tr>
      <td>Description:</td>
      <td><textarea id="description" type="text" name="description" rows="3" cols="50" disabled>{{$selectedProductInfo[0]->description}}</textarea></td> 
    </tr>
    <tr align="center">
      <td colspan='2' style="text-align: 'center';">
        <button type="button" onclick="editButtonOnclick();">Edit</button>
      </td>
    </tr>  
  </table>
</body>
</html>




