
    /* css variables */
    :root {
        --primary-clr: #740774;
        ;
        --light-text-color: #808891;
    }


    /*  */
    .header_wrapper {
        width: 90%;
        margin: 0 auto;
    }

    .o_main_nav {
        display: none;
    }

    .o_main_mobile_navbar {
        position: relative;
    }

    .o_main_mobile_navbar .o_mobile_navtab {
        padding: 0;
        list-style: none;
        line-height: 35px;
    }

    #o_nav_toggler>.fa-plus {
        transform: rotate(45deg);
        transition: transform .5s ease;
    }

    #o_nav_toggler>.fa-bars {
        transform: rotate(0deg);
        transition: transform .5s ease;
    }

    .o_main_mobile_navbar .o_nav_top {
        border-bottom: 1px solid #808891;
    }

    .o_main_mobile_navbar .o_nav_top_inner {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: .7em;
        padding-bottom: .7em;
    }

    .o_main_mobile_navbar .o_mobile_navtab li {
        border-bottom: 1px solid #808891;
        padding-top: .5em;
        padding-bottom: .5em;
    }

    .cart_badge {
        background-color: #740774;
        color: #fff;
    }


    .o_nav_dropdown a {
        color: #434343;
    }

    #o_mobile_nav_dropdown {
        background-color: #fff;
        position: absolute;
        transform: scaleY(0);
        transition: transform .5s ease;
        -webkit-transition: transform .5s ease;
        -moz-transition: transform .5s ease;
        -o-transition: transform .5s ease;
        transform-origin: top;
        width: 100%;
    }

    .o_entry_btn {
        display: flex;
        justify-content: space-around;
        margin: 1em;

    }

    .o_entry_btn a {
        width: 47%;
        background-color: #fff;
        border: 1px solid purple;
        color: purple;
        border-radius: 0;
    }

    @media(min-width: 768px) {

        /* 
        .o_main_mobile_navbar {
            display: none;
        }

        .o_main_nav {
            display: block;
        } */

        /* .o_contact_via_container {
            flex-basis: 30%;
        } */

        .o_brand_logo_container {
            flex-basis: 20%;
            text-align: center;
        }

        /* .o_navtab_container {
            flex-basis: 30%;
            display: grid;
            place-content: end;
        } */
    }

    @media(min-width: 700px) {


        .o_main_nav_top_inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .o_main_mobile_navbar {
            display: none;
        }

        .o_main_nav {
            display: block;
        }

        .o_navtab {
            list-style: none;
            padding: 0;
            display: flex;
            align-items: center;
            margin-top: unset;
            margin-bottom: unset;
            flex-wrap: wrap;
        }

        .o_navtab li {
            margin-left: 2em;
        }

        .o_navtab a {
            color: var(--light-text-color)
        }

        .o_navtab a::after {
            content: "";
            height: 3px;
            display: block;
            background-color: var(--light-text-color);
            width: 40%;
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 250ms ease-out;
            -moz-transition: transform 250ms ease-out;
            -o-ransition: transform 250ms ease-out;
            -webkit-transition: transform 250ms ease-out;
            -ms-transition: transform 250ms ease-in-out;
        }

        .o_navtab a:hover,
        .o_navtab:focus {
            text-decoration: none;
            transition: color 250ms ease-in-out;
            transition: font-weight 250ms ease-in-out;
            -moz-transition: color 250ms ease-in-out;
            -moz-transition: font-weight 250ms ease-in-out;
            -o-transition: color 250ms ease-in-out;
            -o-transition: font-weight 250ms ease-in-out;
            -webkit-transition: color 250ms ease-in-out;
            -webkit-transition: font-weight 250ms ease-in-out;
            -ms-transition: color 250ms ease-in-out;
            -ms-transition: font-weight 250ms ease-in-out;
            outline: 0;
        }

        .o_navtab a:hover::after,
        .o_navtab a:focus::after {
            transform: scaleX(1);
            transform-origin: left;
            transition: transform 250ms ease-in;
            -moz-transition: transform 250ms ease-in;
            -o-transition: transform 250ms ease-in;
            -webkit-transition: transform 250ms ease-in;
            -ms-transition: transform 250ms ease-in-out;
        }


        .o_contact_via_container {
            flex-basis: 40%;
        }

        .o_brand_logo_container {
            flex-basis: auto;
            text-align: center;
        }

        .o_navtab_container {
            flex-basis: 40%;
            display: grid;
            place-content: end;
        }

    }