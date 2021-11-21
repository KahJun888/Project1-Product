<html>
<head>
</head>

<body>
@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

@if (session('status'))
<div class="alert alert-success" role="alert">
	{{ session('status') }}
</div>
@elseif(session('failed'))
<div class="alert alert-danger" role="alert">
	{{ session('failed') }}
</div>
@endif

<form action = "/product" method = "post">
@csrf
  <p style = "font-size:20px">
    <strong>Create New Product</strong>&nbsp;
    <button type="button" onclick="window.location='{{ url("product") }}'">Listing</button>&nbsp;
    <button type="button" onclick="window.location='{{ url("product/create") }}'">Create</button>
  </p>
  <table>
    <tr>
      <td>Code: <font color="red">*</font></td>
      <td><input id="code" type="text" name="code" size="50" maxlength="9"></td> 
    </tr>
    <tr>
      <td>Name: <font color="red">*</font></td>
      <td><input id="name" type="text" name="name" size="50" maxlength="90"></td> 
    </tr>
    <tr>
      <td>Category: <font color="red">*</font></td>
      <td><input id="category" type="text" name="category" size="50" maxlength="28"></td> 
    </tr>
    <tr>
      <td>Brand:</td>
      <td><input id="brand" type="text" name="brand" size="50" maxlength="28"></td> 
    </tr>
    <tr>
      <td>Type:</td>
      <td><input id="type" type="text" name="type" size="50" maxlength="21"></td> 
    </tr>
    <tr>
      <td>Description:</td>
      <td><textarea id="description" type="text" name="description" rows="3" cols="50"></textarea></td> 
    </tr>
    <tr align="center">
	    <td colspan='2' style="text-align: 'center';"><input type='submit' value="Save"/></td>
    </tr>  
  </table>
</form>
</body>
</html>




