@extends('main')

@section('content')

<div class="panel panel-primary">
    <div class="panel-heading">Create Pro</div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-8">
              <form method="post" action="/products/{{ $product->id }}" class="form-horizontal main-form">


                    @method('PATCH')
                		@csrf

                        <!--Name-->
                        <div class="form-group form-group-lg">
                            <label class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-10 col-md-9">
                                <input
                                       pattern=".{4,}"
                                       title="This Field Require At Least 4 Chars"
                                       type="text" name="name"
                                       class="form-control"
                                       value="{{$product->name}}"
                                        required>
                            </div>
                        </div>
                        <!--Description-->
                        <div class="form-group form-group-lg">
                            <label class="col-sm-3 control-label">Description</label>
                            <div class="col-sm-10 col-md-9">
                                <input
                                        pattern=".{10,}"
                                        title="This Field Require At Least 10 Chars"
                                       type="text" name="description"
                                       class="form-control live"
                                       value="{{$product->description}}"
                                       required >
                            </div>
                        </div>
                        <!--Price-->
                        <div class="form-group form-group-lg">
                            <label class="col-sm-3 control-label">Price</label>
                            <div class="col-sm-10 col-md-9">
                                <input type="text" name="price"
                                       class="form-control live"
                                      value="{{$product->price}}"
                                       required >
                            </div>
                        </div>
                        <!--Country-->
                        <div class="form-group form-group-lg">
                            <label class="col-sm-3 control-label">Country</label>
                            <div class="col-sm-10 col-md-9">
                                <input type="text" name="country_made"
                                       class="form-control"
                                       value="{{$product->country_made}}"
                                       required >
                            </div>
                        </div>
                        <!--Status-->
                        <div class="form-group form-group-lg">
                            <label class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-10 col-md-9">
                                <select name="status" required class="form-control">

                                  option value="">...</option>
                                  <option value="1">New</option>
                                  <option value="2">Like New</option>
                                  <option value="3">Used</option>
                                  <option value="4">Very old</option>

                                </select>
                            </div>
                        </div>




                        <!--submit-->
                        <div class="form-group form-group-lg">
                            <div class="col-sm-offset-3 col-sm-9">
                                <input type="submit" value="Add Item" class="btn btn-primary btn-lg">
                            </div>
                        </div>
                    </form>
            </div>
            <!-- <div class="col-md-4">
                <div class="thumbnail item-box">
                    <span class="price-tag">
                        $<span class="live-price"></span>
                    </span>
                    <img class="img-responsive" src="images%20(6).jpg" alt="not found">
                    <div class="caption">
                        <h3>Title</h3>
                        <p>Description</p>
                    </div>
                  </div>
            </div> -->
        </div>

    </div>
</div>


@endsection
