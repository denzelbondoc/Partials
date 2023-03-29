<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
@include('partials.header')
@if(Session::has('success'))
      {{Session::get('success')}}
      @endif

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Description</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th></th>
      <th>

      </th>
    </tr>
  </thead>
  @foreach ($products as $product)
  <tbody>
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->description}}</td>
      <td>{{$product->quantity}}</td>
      <td>{{$product->price}}</td>
      <td><a class="btn btn-success" type="button" href="edit/{{$product->id}}">Edit</a></td>
      <td><a class="btn btn-danger" type="button" href="delete/{{$product->id}}">Delete</a></td>
    </tr>
  </tbody>
  @endforeach
</table>
@include('partials.footer')