<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 5px;
}
</style>
</head>

<body>
  <div>
    <p style = "font-size:20px">
      <strong>Product Listing</strong>&nbsp;
      <button type="button" onclick="window.location='{{ url("product") }}'">Listing</button>&nbsp;
      <button type="button" onclick="window.location='{{ url("product/create") }}'">Create</button>
    </p>
    <table>
      <thead>
        <tr>
          <td></td>
          <td><strong>ID</strong></td>
          <td><strong>Code</strong></td>
          <td><strong>Name</strong></td>
          <td><strong>Category</strong></td>
          <td><strong>Brand</strong></td>
          <td><strong>Type</strong></td>
          <td><strong>Description</strong></td>
        </tr>
      </thead>

      <tbody>
        @foreach($allProductInfo as $data)
        <tr>
          <td>
            <form method="post" action="{{route('product.destroy', $data->id)}}">
              @method('delete')
              @csrf
              <button type="submit">Delete</button>
            </form>
          </td> 
          <td>{{$data->id}}</td>
          <td><a href = 'product/{{$data->id}}'>{{$data->code}}</a></td>
          <td>{{$data->name}}</td>
          <td>{{$data->category}}</td>
          <td>{{$data->brand}}</td>
          <td>{{$data->type}}</td>
          <td>{{$data->description}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <div>
      {{$allProductInfo->links()}}
    </div>
  </div>
</body>
</html>




