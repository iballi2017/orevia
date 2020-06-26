<?php
include_once '../components/header_update.php'; ?>

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
                    <!-- <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col column-1">ITEM</th>
                                    <th scope="col column-2">QUANTITY</th>
                                    <th scope="col column-3">PRICE</th>
                                    <th scope="col column-4">SUB-TOTAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white">
                                    <td class="column-1">
                                        <div class="row">
                                            <div class="col-12 col-md-2">
                                                <img src="../assets/images/orevia-fluid.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="col-12 col-md-10">
                                                <div class="row">
                                                    <div class="col">
                                                        <b>Orevia Body butter </b>
                                                        <div><i>Almond</i></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <button class="btn-sm cart_item_btn move_to_wishlish_btn"><i
                                                                class="fas fa-heart mr-2"></i><span
                                                                class="d-none d-sm-block">MOVE TO
                                                                WISLIST</span></button>
                                                        <button class="btn-sm cart_item_btn remove_btn"><i
                                                                class="fas fa-trash mr-2"></i>
                                                            <span class="d-none d-sm-block">REMOVE</span></button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </td>
                                    <td class="column-2">
                                        <button class="px-4 qty-btn minus border-0 clr-primary">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <span class="mx-2">4</span>
                                        <button class="px-4 qty-btn add border-0 clr-primary"><i
                                                class="fas fa-plus"></i></button>
                                    </td>
                                    <td class="column-3">#2000.00</td>
                                    <td class="column-4">#2000.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div> -->

                    <!-- cart grid item -->


                    <style>
                    body {
                        font-size: 13px;
                    }

                    #cart_page #cart>.top-content {
                        background-color: #fbf4fb;
                        width: 90%;
                    }

                    h4,
                    h6 {
                        margin: 0;
                    }

                    h4 {
                        font-size: 1.3rem;
                    }

                    h4 {
                        font-size: 1rem;
                    }

                    .cart_btn {
                        text-transform: capitalize;
                    }

                    .qty {
                        border: 1px solid #ccc;
                    }

                    /*  */

                    .cart_item_grid_container {
                        border: 1px solid #ccc;
                        background-color: #fff;
                        display: grid;
                        /* grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); */
                        grid-template-columns: repeat(12, 1fr);
                        grid-template-rows: repeat(4, 1fr);
                        /* grid-gap: 20px; */
                    }

                    .cart_item_grid_container>div {
                        border: unset;
                    }

                    .item_1,
                    .item_2,
                    .item_3,
                    .item_4,
                    .price {
                        display: none;
                    }

                    .grid_container div:nth-child(even) {
                        /* background-color: aquamarine; */
                    }

                    .item_5 {
                        grid-column: 1/5;
                        grid-row: 1/3;
                        display: grid;
                        place-content: center;
                    }

                    .item_6 {
                        grid-column: 5/-1;
                        grid-row: 1/3;
                        display: flex;
                        justify-content: center;
                        flex-direction: column;
                    }

                    .qty_btns {
                        grid-column: 1/5;
                        grid-row: 3/4;
                        display: flex;
                        justify-content: space-evenly;
                        align-items: center;
                    }

                    .qty_btns>div {
                        border: 1px solid #ccc;
                        height: 100%;
                        width: 100%;
                        display: grid;
                        place-content: center;
                    }

                    /* .qty_btns>div {
                        height: 100%;
                        width: 33%;
                    } */

                    .sub_total {
                        grid-column: 5/-1;
                        grid-row: 3/4;
                        /* background-color: darkgray; */
                    }

                    .item_7 {
                        grid-column: 1/-1;
                        grid-row: 4/5;
                        border: 1px solid #ccc !important;
                    }

                    .dec_btn,
                    .inc_btn {
                        /* border: 2px solid #ccc; */
                        border: 0;
                        /* height: 100%;
                        width: 100%; */
                        background-color: unset;
                    }

                    .qty_value {
                        /* border-right: 2px solid #ccc;
                        border-left: 2px solid #ccc; */
                    }

                    .cart_btn {
                        background: none;
                        transition: background-color 350ms ease-in-out;
                        border: none;
                        font-weight: bold;
                        padding: .7em;
                        margin: .5em;
                        width: 48%;
                    }


                    .cart_btn.wishlist {
                        color: #740774;
                        background: #ccc;
                    }

                    .cart_btn.wishlist:focus {
                        background-color: #fff;
                        border: 1px solid #ccc;
                    }

                    .cart_btn.remove {
                        color: #FE5F55;
                        border: 1px solid #FE5F55;
                    }

                    .cart_btn.remove:focus {
                        background-color: #FE5F55;
                        color: #fff;
                    }

                    .qty_value {
                        display: grid;
                        justify-content: center;
                    }


                    .item_7 {
                        display: flex;
                        align-items: center;
                        font-weight: 600;
                    }

                    .next_action_cart_btn_wrapper a {
                        width: 100%;
                        font-size: 1.1rem
                    }


                    @media (min-width: 600px) {
                        body {
                            font-size: 16px;
                        }

                        #cart_page #cart>.top-content {
                            width: 100%;
                        }

                        .cart_item_grid_container {
                            border: none;
                            padding: unset;
                            display: grid;
                            grid-template-columns: repeat(12, 1fr);
                            grid-template-rows: repeat(3, 1fr);
                        }

                        .cart_item_grid_container>div {
                            border: 1px solid #ccc;
                        }

                        .item_1,
                        .item_2,
                        .item_3,
                        .item_4,
                        .price,
                        .sub_total,
                        .item_5,
                        .item_6 {
                            padding: 0.5em;
                        }

                        .item_1,
                        .item_2,
                        .item_3,
                        .item_4 {
                            display: flex;
                            align-items: center;
                            color: #fff;
                        }


                        .item_1 {
                            grid-column: 1/8;
                            background-color: #6a4653;
                        }

                        .item_2 {
                            grid-column: 8/10;
                            grid-row: 1/2;
                            background-color: #9a637e;
                        }

                        .item_3 {
                            grid-column: 10/11;
                            grid-row: 1/2;
                            background-color: #2b2225;
                        }

                        .item_4 {
                            grid-column: 11/-1;
                            grid-row: 1/2;
                            background-color: #552335;
                        }

                        .item_5 {
                            grid-column: 1/3;
                            grid-row: 2/4;
                        }

                        .item_6 {
                            grid-column: 3/8;
                            grid-row: 2/3;
                        }

                        .item_7 {
                            grid-column: 3/-1;
                            grid-row: 3/4;
                        }

                        .qty_btns {
                            grid-column: 8/10;
                            grid-row: 2/3;
                        }

                        .price {
                            grid-column: 10/11;
                            grid-row: 2/3;
                            display: flex;
                            align-items: center;
                        }

                        .sub_total {
                            grid-column: 11/-1;
                            grid-row: 2/3;
                        }

                        .cart_btn.wishlist,
                        .cart_btn.remove {
                            background: none;
                            transition: background-color 350ms ease-in-out;
                            border: none;
                            width: auto;
                        }

                        .cart_btn:hover,
                        .cart_btn:focus {
                            background-color: #ccc;
                            transition: background-color 350ms ease-in-out;
                        }

                        .dec_btn,
                        .inc_btn {
                            border: 0;
                            height: 100%;
                            width: 100%;
                            background-color: unset;
                        }

                        .qty_value {
                            display: grid;
                            place-content: center;
                        }

                        .qty_btns>div {
                            height: 100%;
                            width: 33%;
                        }

                        .sub_total {
                            display: flex;
                            align-items: center;
                            font-weight: 600;
                        }

                        .next_action_cart_btn_wrapper a {
                            width: 35%;
                            font-size: 1.25rem
                        }
                    }
                    </style>
                    <div class="cart_item_grid_container">
                        <div class="item_1">
                            <h6>ITEM</h6>
                        </div>
                        <div class="item_2">
                            <h6>Quantity</h6>
                        </div>
                        <div class="item_3">
                            <h6>PRICE</h6>
                        </div>
                        <div class="item_4">
                            <h6>SUB-TOTAL</h6>
                        </div>
                        <div class="item_5">
                            <img src="../assets/images/orevia-fluid.png" class="img-fluid" alt="product item image">
                        </div>
                        <div class="item_6 p-2">
                            <h4>Orevia Body butter 150g</h4>
                            <h6 style="color: #740774"><i>Almond oil</i></h6>
                        </div>
                        <div class="item_7">
                            <button class="cart_btn wishlist mr-md-5">
                                <i class="fas fa-heart mr-1"></i>Move to Wishlist</button>
                            <button class="cart_btn remove">
                                <i class="fas fa-trash mr-1"></i>
                                Remove</button>
                        </div>
                        <div class="qty_btns">
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
                        <div class="price">2000
                        </div>
                        <div class="sub_total p-2">
                            <span>2000</span>
                            <small class="price-alt d-block d-md-none"><span>2000</span><span>X 1
                                    Item</span></small>
                        </div>
                    </div>
                    <!-- ### -->

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
                    <!-- <button class="btn-lg border-0 white_btn shadow m-2">CONTINUE SHOPPING</button>
                    <button class="btn-lg border-0 primary_btn shadow m-2">PROCEED TO CHECKOUT</button> -->

                    <div class="next_action_cart_btn_wrapper"
                        style="display: flex; justify-content: center; flex-wrap: wrap">
                        <a href=" #" class="btn-lg border-0 white_btn shadow m-2">CONTINUE SHOPPING</a>
                        <a href="#" class="btn-lg border-0 primary_btn shadow m-2">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<?php include_once '../components/footer.php'; ?>