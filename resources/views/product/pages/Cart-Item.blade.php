@if(Session::has("Cart") != null)
<div class="select-items">
    <table>
        <tbody>
            @foreach(Session::get('Cart')->products as $value)
            <tr>
                <td class="si-pic"><img src="img/{{$value['productInfo']->image}}" width="70px" alt=""></td>
                <td class="si-text">
                    <div class="product-selected">
                        <p>{{number_format($value['productInfo']->price)}} ₫ x {{$value['quanty']}}</p>
                        <h6>{{$value['productInfo']->nameProduct}}</h6>
                    </div>
                </td>
                <td class="si-close">
                    <i class="ti-close" data-id="{{$value['productInfo']->product_id}}"></i>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="select-total">
    <span>total:</span>
    <h5>{{number_format(Session::get('Cart')->totalPrice)}}₫</h5>
    <input hidden id="totalQuantyCart" type="number" value="{{Session::get('Cart')->totalQuanty}}">
</div>
@endif