@extends('layouts.master')
@section('content')
<ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-bs-toggle="tab" href="#home">New Order</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" href="#profile">Order List</a>
    </li>
  </ul>
  <div id="myTabContent" class="tab-content">
    <div class="tab-pane fade active show" id="home">
        <form>
            <fieldset>
              <legend>Order Form</legend>
              <div class="form-group">
                <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="exampleSelect1" class="form-label mt-4">Example select</label>
                <select class="form-select" id="exampleSelect1">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
             <div class="form-group">
                <label for="exampleTextarea" class="form-label mt-4">Example textarea</label>
                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
              </div>
              <div class="form-group">
                <label for="formFile" class="form-label mt-4">Default file input example</label>
                <input class="form-control" type="file" id="formFile">
              </div>
              <button type="submit" class="btn btn-primary mt-3 mb-3">Submit</button>
            </fieldset>
          </form>
    </div>
    <div class="tab-pane fade" id="profile">
      <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
    </div>
  </div>
@endsection

