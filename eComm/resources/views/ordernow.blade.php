@extends('master')

@section('content')
    <div class="custom-product">
        <div class="row">
            <div class="col-sm-10">
                <table class="table">

                    <tbody>
                        <tr>

                            <td>Ammount:</td>
                            <td>$ {{ $total }}</td>
                        </tr>
                        <tr>

                            <td>Tax:</td>
                            <td>$ 0</td>
                        </tr>
                        <tr>

                            <td>Delivery:</td>
                            <td>$ 10</td>
                        </tr>
                        <tr>

                            <td>Total ammount:</td>
                            <td>$ {{ $total + 10 }}</td>
                        </tr>

                    </tbody>
                </table>
                <div>
                    <form action="/order_place" method="POST">
                        @csrf

                        <div class="form-group ">
                            <label for="exampleFormControlTextarea1" class="form-label">Delivery address</label>
                            <textarea name="address" class="form-control" id="exampleFormControlTextarea1"
                                rows="3"></textarea>
                        </div>



                        <div class="form-group ">
                            <label for="" class="form-label">Payment method</label>




                        </div>
                        <div class="form-check">
                            <input class="form-check-input" value="1" type="radio" name="payment" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Online payment
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" value="2" type="radio" name="payment" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                EMI payment
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" value="3" type="radio" name="payment" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Payment on delivery
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Order Now</button>
                    </form>
                </div>
            </div>
        </div>




    </div>

@endsection
