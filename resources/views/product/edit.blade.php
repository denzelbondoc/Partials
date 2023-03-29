<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

@include('partials.header')
<br>
<br>
<br>
<h1 class="text-center">Edit Product</h1>
<!-- Wrapper container -->
<div class="container py-4">

  <!-- Bootstrap 5 starter form -->
  <form id="contactForm" action="/updateProduct" method="POST">
    
    @csrf
    <div class="mb-3">
    <input class="form-control" name="id" type="hidden" id="id" placeholder="First Name" value="{{$product->id}}" />

    <!-- Name input -->
    <div class="mb-3">
      <label class="form-label" for="description">Description</label>
      <input class="form-control" name="description" type="text" placeholder="Description" />
    </div>

    <div class="mb-3">
      <label class="form-label" for="quantity">Quantity</label>
      <input class="form-control" name="quantity" type="text" placeholder="Quantity" />
    </div>

    <!-- Email address input -->
    <div class="mb-3">
      <label class="form-label" for="price">Price</label>
      <input class="form-control" name="price" type="number" placeholder="Price" step=".01" />
    </div>


    <!-- Form submit button -->
    <div class="d-grid">
      <input class="btn btn-primary btn-lg" type="submit" value="Save"/>
    </div>

  </form>

</div>