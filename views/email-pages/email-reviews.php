<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orevia</title>
    <style>
    /* font family */

    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,500;0,700;0,900;1,300&display=swap');

    body {
        font-family: 'Roboto', sans-serif;
    }

    .wrapper {
        max-width: 500px;
        margin: 0 auto;
    }

    table {
        width: 100%;
    }

    .table-head {
        background-color: #4d063d;
        color: #fff;
    }

    .mt-5 {
        margin-top: 5em;
    }

    .product-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
        grid-gap: 10px;
    }

    .product-column {
        display: flex;
    }

    img {
        width: 100%;
    }
    </style>
</head>

<body>

    <div class="wrapper">
        <table>
            <thead>
                <tr>

                    <th class="table-head" colspan="4">
                        <h1 class="company-name">Orevia</h1>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="mt-5">

                            Dear AKIN ADE,

                            <p>Thank you for stopping by Orevia.</p>
                            <p>
                                Please help us improve our service and give all Orevia customers a better understanding
                                about the product(s) you ordered!</p>
                        </div>
                    </td>
                </tr>
                <tr>

                    <td>
                        <div class="product-grid">
                            <div class="product-column">
                                <img src="../../assets/images/orevia-cup-thumbnail.png" alt="">
                                <div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, praesentium?
                                </div>
                            </div>
                            <div>2</div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>