<?php
include_once '../components/header.php'; ?>

<main id="cart_page">

    <div class="page-title py-5">

        <h1 class="text-center">Cart (1 Item)</h1>

    </div>



    <section id="cart">
        <div class="container my-5">
            <div class="row">
                <div class="col p-0">
                    <div class="table-responsive">
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
                                <tr class="bg-white shadow">
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
                                                    </div>
                                                    <div class="col">
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
                                                class="fas fa-plus"></i></button></td>
                                    <td class="column-3">#2000.00</td>
                                    <td class="column-4">#2000.00</td>
                                </tr>
                            </tbody>
                        </table>
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
    </section>

</main>
<?php include_once '../components/footer.php'; ?>