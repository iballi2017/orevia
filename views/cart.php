<?php
include_once '../components/header.php'; ?>

<main id="cart_page">

    <div class="page-title py-5 d-none d-md-block">
        <div class="container d-flex" style="position: relative">

            <nav aria-label="breadcrumb" class="d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">cart</li>
                </ol>
            </nav>
            <h3 class="text-center"
                style="position: absolute; width: 100%; top: 0; bottom: 0; right:0; left: 0; height: 100%; display: grid; place-content: center">
                Cart (1 Item)
            </h3>
        </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <button class="bo_back_history border-0" onclick="goBack()">
                    <i class="fas fa-long-arrow-alt-left fa-2x"></i></button>
            </div>
        </div>
        <div class="row d-block d-md-none">
            <div class="col">
                <h4 class="text-center"> Cart (1 Item)</h4>
            </div>
        </div>
    </div>

    <section class="empty_cart_message_container">
        <div class="container">
            <div class="text-center">
                <div class="mx-auto mt-5 cart_icon_wrapper">
                    <i class="fas fa-shopping-cart fa-4x"></i>
                    <div class="plus_icon_wrapper bg-danger text-white">
                        <i class="fas fa-plus"></i>
                    </div>
                </div>

                <h5 class="mt-4">Cart empty</h5>
                <h6><a href="#" class="customLink mt-4">CONTINUE SHOPPING</a></h6>
            </div>
        </div>
    </section>

    <section id="cart">
        <div class="container top-content my-5">
            <div class="row">
                <div class="col p-0">

                    <!-- cart item list header -->
                    <div class="cart_layout_container">
                        <div class="cart_header_layout_grid table-header">
                            <div class="g_item1">
                                <h6>ITEM</h6>
                            </div>
                            <div class="g_item2">
                                <h6>Quantity</h6>
                            </div>
                            <div class="g_item3">
                                <h6>PRICE</h6>
                            </div>
                            <div class="g_item4">
                                <h6>SUB-TOTAL</h6>
                            </div>
                        </div>
                        <!-- ## -->

                        <!-- A single cart item -->
                        <div class="cart_item_grid">
                            <div class="comp_1 p-2">
                                <img src="../assets/images/orevia-fluid.png" class="img-fluid" alt="product item image">

                            </div>
                            <div class="comp_2">
                                <h4>Orevia Body butter 150g</h4>
                                <h6 style="color: #740774"><i>Almond oil</i></h6>
                            </div>
                            <div class="comp_3">
                                <button class="cart_btn wishlist mr-md-5">
                                    <i class="fas fa-heart mr-1"></i>Move to Wishlist</button>
                                <button class="cart_btn remove">
                                    <i class="fas fa-trash mr-1"></i>
                                    Remove</button></div>
                            <div class="comp_4">
                                <div>
                                    <button class="dec_btn">
                                        <i class=" fas fa-minus"></i></button>
                                </div>
                                <div class="qty_value">2</div>
                                <div>
                                    <button class="inc_btn">
                                        <i class="fas fa-plus"></i></button>
                                </div>
                            </div>
                            <div class="comp_5">2000</div>
                            <div class="comp_6 p-2">
                                <span>2000</span>
                                <small class="d-block d-sm-none"><span>2000</span><span>X 1
                                        Item</span></small></div>
                        </div>
                        <!--  -->


                        <!-- A single cart item -->
                        <div class="cart_item_grid">
                            <div class="comp_1 p-2">
                                <img src="../assets/images/orevia-fluid.png" class="img-fluid" alt="product item image">

                            </div>
                            <div class="comp_2">
                                <h4>Orevia Body butter 150g</h4>
                                <h6 style="color: #740774"><i>Almond oil</i></h6>
                            </div>
                            <div class="comp_3">
                                <button class="cart_btn wishlist mr-md-5">
                                    <i class="fas fa-heart mr-1"></i>Move to Wishlist</button>
                                <button class="cart_btn remove">
                                    <i class="fas fa-trash mr-1"></i>
                                    Remove</button></div>
                            <div class="comp_4">
                                <div>
                                    <button class="dec_btn">
                                        <i class=" fas fa-minus"></i></button>
                                </div>
                                <div class="qty_value">2</div>
                                <div>
                                    <button class="inc_btn">
                                        <i class="fas fa-plus"></i></button>
                                </div>
                            </div>
                            <div class="comp_5">2000</div>
                            <div class="comp_6 p-2">
                                <span>2000</span>
                                <small class="d-block d-sm-none"><span>2000</span><span>X 1
                                        Item</span></small></div>
                        </div>
                        <!--  -->
                    </div>


                </div>
            </div>

            <div class="row py-3">
                <div class="col text-right">
                    <div class="float-right">
                        <h6 class="text-left">TOTAL: <span>#2,000.00</span></h6>
                        <div class="text-left"><i>Without Shipping Fee</i></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container bottom-content">
            <div class="row">
                <div class="col text-center py-3">
                    <div class="next_action_cart_btn_wrapper"
                        style="display: flex; justify-content: center; flex-wrap: wrap">
                        <a href=" #" class="btn-lg border-0 white_btn shadow m-2 continue_shopping_link_btn">CONTINUE
                            SHOPPING</a>
                        <a href="#" class="btn-lg border-0 primary_btn shadow m-2 proceed_to_checkout_link_btn">PROCEED
                            TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<?php include_once '../components/footer.php'; ?>