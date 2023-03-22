<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

@include('partials.header')
<br>
<br>
<br>
<h1 class="text-center">Edit Customer</h1>
<!-- Wrapper container -->
<div class="container py-4">

  <!-- Bootstrap 5 starter form -->
  <form id="contactForm" action="/updateCustomer" method="POST">
    
    @csrf
    <!-- Name input -->
    <div class="mb-3">
    <input class="form-control" name="id" type="hidden" id="id" placeholder="First Name" value="{{$customer->id}}" />
    
    <label class="form-label" for="firstName">First Name</label>
      <input class="form-control" name="firstName" type="text" placeholder="First Name" value="{{$customer->firstName}}" />
    </div>

    <div class="mb-3">
      <label class="form-label" for="lastName">Last Name</label>
      <input class="form-control" name="lastName" type="text" placeholder="Last Name" value="{{$customer->lastName}}"/>
    </div>

    <!-- Email address input -->
    <div class="mb-3">
      <label class="form-label" for="emailAddress">Email Address</label>
      <input class="form-control" name="email" type="email" placeholder="Email Address" value="{{$customer->email}}"/>
    </div>

    <!-- Message input -->
    <div class="mb-3">
      <label class="form-label" for="address">Address</label>
      <input class="form-control" name="address" type="text" placeholder="Address" value="{{$customer->address}}"/>
    </div>

    <div class="mb-3">
      <label class="form-label" for="contactNumber">Contact Number</label>
      <input class="form-control" name="contactNumber" type="text" placeholder="Contact Number" value="{{$customer->contactNumber}}"/>
    </div>

    <!-- Form submit button -->
    <div class="d-grid">
      <input class="btn btn-primary btn-lg" type="submit" value="Save"/>
    </div>

  </form>

</div>