@extends('layouts.myapp')

@section('title', 'Home page')

@section('content')
    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="ogani/img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="ogani/img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="#">Fresh Meat</a></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="ogani/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($productOrders)
                                @foreach ($productOrders as $productOrder)
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="{{ asset('ogani/img/cart/cart-3.jpg') }}" alt="">
                                        <h5>{{ $productOrder->product->name }}</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        ${{ $productOrder->price }}
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" class="product-quantity" value="{{ $productOrder->quantity }}">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total total-product-price">
                                        ${{ $productOrder->price * $productOrder->quantity }}
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_close delete-product" data-product_order_id="{{ $productOrder->id }}"></span>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    Gio hang trong
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="#" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Upadate Cart</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Subtotal <span class="total-price">$454.98</span></li>
                            <li>Total <span class="total-price">$454.98</span></li>
                        </ul>
                        <a href="#" class="primary-btn cart-checkout">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->

@endsection

@section('script')
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.delete-product').click(function(event) {
            event.preventDefault();
            var productElement = $(this).parent().parent();
            var productOrderId = $(this).data('product_order_id');
            var url = '/orders/' + productOrderId;
            $.ajax(url, {
                type: 'DELETE',
                success: function (result) {
                    var resultObj = JSON.parse(result);
                    if (resultObj.status) {
                        alert(resultObj.msg);
                        productElement.remove();
                    } else {
                        alert(resultObj.msg);
                        location.reload();
                    }
                },
                error: function () {
                    alert('Something went wrong!');
                }
            });
        });
        $('.qtybtn').addClass('update-quantity');
        $('.update-quantity').click(function(event) {
            event.preventDefault();
            var quantity = parseInt($(this).parent().find('input').val());
            if ($(this).hasClass('inc')) {
                quantity++;
                $(this).parent().find('.dec').css('display', '');
            } else {
                if (quantity <= 1) {
                    $(this).css('display', 'none');
                    alert('The quantity has been great than 0');
                    return false;
                }
                quantity--;
                if (quantity <= 1) {
                    $(this).css('display', 'none');
                }
            }
            var totalProductPrice = $(this).closest('tr').find('.total-product-price');
            var productOrderId = $(this).closest('tr').find('.delete-product').data('product_order_id');
            var url = '/orders/' + productOrderId;
            $.ajax(url, {
                type: 'PUT',
                data: {
                    quantity: quantity
                },
                success: function (result) {
                    var resultObj = JSON.parse(result);
                    if (!resultObj.status) {
                        alert(resultObj.msg);
                        location.reload();
                    }
                    totalProductPrice.text('$' + resultObj.price);
                    calculatePrice();
                },
                error: function () {
                    alert('Something went wrong!');
                }
            });
        });
        $('.cart-checkout').click(function(event) {
            event.preventDefault();
            var url = '/orders/checkout';
            $.ajax(url, {
                type: 'POST',
                success: function (result) {
                    var resultObj = JSON.parse(result);
                    alert(resultObj.msg);
                    location.reload();
                },
                error: function () {
                    alert('Something went wrong!');
                }
            });
        });
        calculatePrice();
        function calculatePrice()
        {
            var totalPrice = 0;
            $('.total-product-price').each(function() {
                var price = parseInt($(this).text().replace('$', ''));
                totalPrice += price;
            });
            $('.total-price').text('$' + totalPrice);
            var totalQuantity = 0;
            $('.product-quantity').each(function() {
                totalQuantity += parseInt($(this).val());
            });
            $('#cart-number').text(totalQuantity);
        }
    });
</script>
@endsection