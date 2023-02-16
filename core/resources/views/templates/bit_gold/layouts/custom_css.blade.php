<style>
    :root {
        --gradiant-gold: linear-gradient(to right, #CD9F34, #CD9F34 5%, #CD9F34, #F6DB77, #F6DB77, #F6DB77, #CD9F34, #CD9F34 100%);
        --gradiant-gold-top: linear-gradient(to top, #CD9F34, #CD9F34 5%, #CD9F34, #F6DB77, #F6DB77, #F6DB77, #CD9F34, #CD9F34 100%);
    }

    :root {
        --main-color: #CD9F34;
        --main-color-two: #070500;
        --section-bg: #F8F6FF;
        --body-bg: #ffffff;

        --grad-one: #CD9F34;
        --grad-two: #F6DB77;
        --gradient-bg2: linear-gradient(to right, var(--grad-one), var(--grad-two));

        --gradient-bg: linear-gradient(to right, var(--grad-one), var(--grad-one) 5%, var(--grad-one), var(--grad-two), var(--grad-two), var(--grad-two), var(--grad-one), var(--grad-one) 100%);
    }

    .table {
        background-color: #ffffff !important;
        /* background-image: var(--gradiant-gold-top); */
    }
    @media (max-width: 991px){
        .table-responsive--md tbody tr:nth-child(odd) {
            background-color: #cd9f34;
        }
    }
    
    [data-label]::before {
        color: #000000;
    }

    .blog-card {
        background-color: #cd9f3454 !important;
    }

    .contact-wrapper {
        background-color: #f7c70b;
    }

    .table tbody tr td {
        color: #1b1b1b !important;
        /* background-color: #ffffff !important; */
        border-color: #ffc10736;
        /* background-image: var(--gradient-bg2); */
    }
    .form-control:focus {
        background: #ffffff !important;
    }
    .form-control:disabled, .form-control[readonly] {
        background-color: #ffffff !important;
        opacity: 1;
    }

    .card {
        box-shadow: 0 0 15px hsl(var(--base)/ 0.35);
        border: 1px solid #ffa800 !important;
        background-color: #fff !important;
    }
    .card .card-header {
        background-image: var(--gradient-bg) !important;
    }

    .btn--base {
        background-color: none;
        background-image: var(--gradiant-gold)
    }

    .base--bg {
        background-color: none;
        background-image: var(--gradiant-gold)
    }

    .account-menu .icon i {
        background-color: none;
        background-image: var(--gradiant-gold-top)
    }

    .table thead {
        background-color: none;
        background-image: var(--gradiant-gold)
    }

    .scroll-to-top {
        background-color: none;
        background-image: var(--gradiant-gold)
    }



    /* plan section css start */
    .plan-item {
        position: relative;
        padding: 30px;
        background-color: #fff;
        border-radius: 8px;
        border: 1px solid #e5e5e5;
        height: 100%;
        display: flex;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        z-index: 1;
        transition: all 0.3s;
        overflow: hidden;
        min-height: 200px;
    }

    .plan-el {
        position: absolute;
        top: 0;
        right: 0;
        z-index: -1;
        opacity: 0.15;
    }

    .plan-item::before {
        position: absolute;
        content: '';
        top: 0;
        left: 0;
        width: 200px;
        height: 100%;
        clip-path: polygon(65% 0, 100% 50%, 65% 100%, 0 100%, 0 0);
        background: var(--gradient-bg2);
        z-index: -1;
    }

    .plan-item::after {
        position: absolute;
        content: '';
        top: 0;
        left: 5px;
        width: 200px;
        height: 100%;
        clip-path: polygon(65% 0, 100% 50%, 65% 100%, 0 100%, 0 0);
        background: #d9ab3c;
        z-index: -2;
    }

    .plan-item:hover {
        transform: translateY(-10px);
    }

    .plan-name-area {
        display: flex;
        flex-flow: column;
        justify-content: center;
        width: 150px;
        text-align: center;
    }

    .plan-fatures {
        width: calc((100% / 3) - (150px / 3));
        display: flex;
        flex-flow: column;
        justify-content: center;
        padding-left: 55px;
        padding-right: 50px;
        position: relative;
        z-index: 1;
    }

    .plan-fatures::before,
    .plan-fatures::after {
        position: absolute;
        content: '';
        top: -30px;
        right: -20px;
        width: 200px;
        height: calc(100% + 60px);
        clip-path: polygon(65% 0, 100% 50%, 65% 100%, 0 100%, 0 0);
    }

    .plan-fatures::before {
        background: #fff;
        z-index: -1;
    }

    .plan-fatures::after {
        background: #d9ab3c;
        z-index: -2;
        right: -22px;
    }

    .plan-rio {
        display: flex;
        flex-flow: column;
        justify-content: center;
        width: calc((100% / 3) - (150px / 3));
        padding-left: 80px;
        position: relative;
        z-index: 1;
    }

    .plan-rio::before,
    .plan-rio::after {
        position: absolute;
        content: '';
        top: -30px;
        right: 0;
        width: 200px;
        height: calc(100% + 60px);
        clip-path: polygon(65% 0, 100% 50%, 65% 100%, 0 100%, 0 0);
    }

    .plan-rio::before {
        background: #fff;
        z-index: -1;
    }

    .plan-rio::after {
        background: #d9ab3c;
        z-index: -2;
        right: -2px;
    }

    .plan-action {
        width: calc((100% / 3) - (150px / 3));
        text-align: center;
        padding-left: 50px;
        display: flex;
        flex-flow: column;
        justify-content: center;
    }


    .plan-item .plan-name {
        text-align: center;
        font-size: 26px;
    }

    .plan-item .plan-percentage {
        text-align: center;
        font-family: var(--h-font);
    }

    .bg-transparent.plan-btn {
        font-size: 15px;
        position: relative;
        z-index: 1;
    }

    .bg-transparent.plan-btn::before,
    .bg-transparent.plan-btn::after {
        position: absolute;
        content: '';
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .bg-transparent.plan-btn::before {
        background-color: #fff;
        border-radius: 6px;
        z-index: -1;
        width: calc(100% - 2px);
        height: calc(100% - 2px);
        left: 1px;
        top: 1px;
    }

    .bg-transparent.plan-btn:hover::before {
        background: var(--gradient-bg);
    }

    .bg-transparent.plan-btn::after {
        background: var(--gradient-bg);
        border-radius: 6px;
        z-index: -2;
    }

    /* .plan-item .plan-percentage .plan-amount {
    font-size: 32px;
    font-weight: 600;
}

.plan-item .plan-percentage .plan-status {
    font-size: 18px;
} */

    .plan-item .plan-amount {
        font-family: var(--h-font);
        font-size: 26px;
        font-weight: 600;
    }

    .plan-list li+li {
        margin-top: 5px;
    }

    .plan-list li {
        position: relative;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        margin: -5px -10px;
        padding-left: 25px;
    }

    .plan-list li::before {
        position: absolute;
        left: 0;
        content: "\f00c";
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        width: 20px;
        height: 20px;
        background-color: var(--main-color);
        color: #000;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 11px;
    }

    .plan-list li .caption {
        padding: 5px 10px;
    }

    .plan-list li .details {
        padding: 5px 10px;
    }





    /* two */
    .plan-item.plan-item-two {
        flex-flow: column;
    }

    .plan-item.plan-item-two::before,
    .plan-item.plan-item-two::after {
        clip-path: polygon(100% 0, 100% 50%, 50% 100%, 0 50%, 0 0);
        width: 100%;
        height: 153px;
    }

    .plan-item.plan-item-two::after {
        left: 0;
        height: 135px;
    }

    .plan-item-two .plan-name-area {
        margin-bottom: 55px;
    }

    .plan-item-two .plan-name-area,
    .plan-item-two .plan-fatures,
    .plan-item-two .plan-rio,
    .plan-item-two .plan-action {
        width: 100%;
        padding: 0;
    }

    .plan-item-two .plan-fatures::before,
    .plan-item-two .plan-fatures::after {
        display: none;
    }

    .plan-item-two .plan-fatures {
        margin-bottom: 30px;
    }

    .plan-item-two .plan-rio {
        text-align: center;
        margin-bottom: 15px;
    }

    .plan-item-two .plan-rio::before,
    .plan-item-two .plan-rio::after {
        display: none;
    }

    @media (max-width: 1399px) {
        .plan-name-area {
            width: 106px;
            ;
        }

        .plan-fatures,
        .plan-rio,
        .plan-action {
            width: calc((100% / 3) - (150px / 3));
        }

        .plan-item::before {
            width: 160px;
        }

        .plan-item::after {
            width: 159px;
        }

        .plan-fatures {
            padding-left: 48px;
            padding-right: 35px;
        }

        .plan-list li {
            padding-left: 20px;
            font-size: 15px;
        }

        .plan-rio {
            padding-left: 55px;
        }
    }

    @media (max-width: 1199px) {
        .plan-item {
            flex-flow: column;
        }

        .plan-item::before,
        .plan-item::after {
            clip-path: polygon(100% 0, 100% 50%, 50% 100%, 0 50%, 0 0);
            width: 100%;
            height: 133px;
        }

        .plan-item::after {
            left: 0;
            height: 135px;
        }

        .plan-name-area {
            margin-bottom: 55px;
        }

        .plan-name-area,
        .plan-fatures,
        .plan-rio,
        .plan-action {
            width: 100%;
            padding: 0;
        }

        .plan-fatures::before,
        .plan-fatures::after {
            display: none;
        }

        .plan-fatures {
            margin-bottom: 30px;
        }

        .plan-rio {
            text-align: center;
            margin-bottom: 15px;
        }

        .plan-rio::before,
        .plan-rio::after {
            display: none;
        }
    }

    /* plan section css end */
</style>
<style>
    /* reset css start */
@import url("https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&family=Poppins:wght@400;500&display=swap");

:root {
    --main-color: #CD9F34;
    --main-color-two: #070500;
    --section-bg: #F8F6FF;
    --body-bg: #ffffff;

    --grad-one: #CD9F34;
    --grad-two: #F6DB77;
    --gradient-bg2: linear-gradient(to right, var(--grad-one), var(--grad-two));

    --gradient-bg: linear-gradient(to right, var(--grad-one), var(--grad-one) 5%, var(--grad-one), var(--grad-two), var(--grad-two), var(--grad-two), var(--grad-one), var(--grad-one) 100%);
}

html {
    scroll-behavior: smooth;
}

body {
    font-family: "Poppins", sans-serif;
    color: #3b3b3b;
    font-size: 1rem;
    padding: 0;
    margin: 0;
    font-weight: 400;
    position: relative;
    line-height: 1.7;
    background-color: #ffffff;
    -webkit-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
    overflow-x: hidden;
    display: flex;
    flex-flow: column;
    min-height: 100vh;
}

footer {
    margin-top: auto;
}

@-webkit-keyframes spinRoll {
    from {
        -webkit-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        transform: rotate(0deg);
    }

    to {
        -webkit-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}

@-moz-keyframes spinRoll {
    from {
        -webkit-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        transform: rotate(0deg);
    }

    to {
        -webkit-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}

@-ms-keyframes spinRoll {
    from {
        -webkit-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        transform: rotate(0deg);
    }

    to {
        -webkit-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}

@keyframes spinRoll {
    from {
        -webkit-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        transform: rotate(0deg);
    }

    to {
        -webkit-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}

img {
    max-width: 100%;
    height: auto;
    user-select: none;
}

select {
    cursor: pointer;
}

ul, ol {
    padding: 0;
    margin: 0;
    list-style: none;
}

button {
    cursor: pointer;
}

*:focus {
    outline: none;
}

button {
    border: none;
}

button:focus {
    outline: none;
}

span {
    display: inline-block;
}

a:hover {
    color: #F7C70B;
}

hr {
    background-color: #cbcbcb;
    opacity: 0.65;
}

/* reset css end */
/* global css strat */
.text-primary {
    color: #7367f0 !important;
}

.text-secondary {
    color: #868e96 !important;
}

.text-success {
    color: #28c76f !important;
}

.text-danger {
    color: #ea5455 !important;
}

.text-warning {
    color: #ff9f43 !important;
}

.text-info {
    color: #1e9ff2 !important;
}

.text-dark {
    color: #082032 !important;
}

.text-muted {
    color: #707070 !important;
}

.site-color {
    color: #F7C70B !important;
}

.site-color2 {
    color: #070500 !important;
}

/* background color css start */
.bg-primary {
    background-color: #7367f0 !important;
}

.bg-secondary {
    background-color: #868e96 !important;
}

.bg-success {
    background-color: #28c76f !important;
}

.bg-danger {
    background-color: #ea5455 !important;
}

.bg-warning {
    background-color: #ff9f43 !important;
}

.bg-info {
    background-color: #1e9ff2 !important;
}

.bg-dark {
    background-color: #082032 !important;
}

.bg-light {
    background-color: #bcc7da !important;
}

.bg-base {
    background-color: var(--gradient-bg) !important;
}

.gr-bg-1 {
    background-image:linear-gradient(to right,#1976d2 0,#64b5f6 100%)
}
.gr-bg-2 {
    background-image:linear-gradient(45deg,#f93a5a,#f7778c)!important
}
.gr-bg-3 {
    background-image:linear-gradient(to left,#48d6a8 0%,#029666 100%)!important
}
.gr-bg-4 {
    background-image:linear-gradient(to left,#efa65f,#f76a2d)!important
}
.gr-bg-5 {
    background-image:linear-gradient(to right,#4800c9 0%,#ba7bfb 100%)!important
}
.gr-bg-6 {
    background-image:linear-gradient(to right,#0296ce 0%,#38c6f7 100%)!important
}
.gr-bg-7 {
    background-image:linear-gradient(to right,#636f8e 0%,#acb8da 100%)!important
}
.gr-bg-8 {
    background-image:linear-gradient(to right,#f10075 0%,#f36eae 100%)!important
}
.gr-bg-9 {
    background-image:linear-gradient(to right,#4800c9 0%,#884af1 100%)!important
}
.gr-bg-10 {
    background-image:linear-gradient(to right,#00cccc 0%,#96e8e8 100%)!important
}   

/* background color css end */
.section-img {
    background-size: cover;
    background-repeat: no-repeat;
}

.z-index2 {
    z-index: 2;
}

.top-caption {
    padding: 0.3125rem 1.375rem;
    border-radius: 99px;
    -webkit-border-radius: 99px;
    -moz-border-radius: 99px;
    -ms-border-radius: 99px;
    -o-border-radius: 99px;
    background-color: var(--section-bg);
}

.top-caption i {
    margin-right: 0.625rem;
}

.top-caption i.las {
    font-size: 1.1875rem;
}

.list-group-item {
    color: #4d4d4d;
}

.section-bg .top-caption, .contact-item .top-caption, .blog-widget .top-caption, .referral-section .top-caption {
    background-color: #fff;
}

.section-title span {
    font-weight: 400;
}

@media (max-width: 1199px) {
    .section-title {
        font-size: 36px;
    }
}

@media (max-width: 991px) {
    .section-title {
        font-size: 32px;
    }
}

.lead-text {
    font-weight: 500;
}

.section-top {
    margin-bottom: 3.4375rem;
}

@media (max-width: 575px) {
    .section-top {
        margin-bottom: 2.1875rem;
    }
}

.section-bg, .contact-item, .blog-widget, .referral-section {
    background-color: #F8F6FF;
}

.items-wrapper div[class*=col-]:nth-child(1) {
    animation-delay: 0.3s;
}

.items-wrapper div[class*=col-]:nth-child(2) {
    animation-delay: 0.5s;
}

.items-wrapper div[class*=col-]:nth-child(3) {
    animation-delay: 0.7s;
}

.items-wrapper div[class*=col-]:nth-child(4) {
    animation-delay: 0.9s;
}

.items-wrapper div[class*=col-]:nth-child(5) {
    animation-delay: 1s;
}

.items-wrapper div[class*=col-]:nth-child(6) {
    animation-delay: 1.2s;
}

.preloader-holder {
    position: fixed;
    left: 0px;
    top: 0px;
    bottom: 0px;
    right: 0px;
    height: 100vh;
    z-index: 9999;
}

.preloader-holder::after {
    content: "";
    top: 0;
    left: 0;
    background-color: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(10px);
    z-index: -1;
}

.preloader-holder .preloader {
    width: 140px;
    height: 140px;
}

.preloader-holder .preloader img {
    max-width: 80px;
    max-height: 80px;
}

.preloader-holder .preloader .preloader-spiner {
    content: "";
    top: -3px;
    left: -3px;
    width: calc(100% + 6px);
    height: calc(100% + 6px);
    border: 3px solid transparent;
    border-top: 3px solid #F7C70B;
    border-right: 3px solid #F7C70B;
    -webkit-animation: spiner 2s linear infinite;
    animation: spiner 2s linear infinite;
}

.preloader-holder .preloader .preloader-spiner::after {
    content: "";
    bottom: 7px;
    right: 12px;
    width: 20px;
    height: 20px;
    box-shadow: 0 0 5px 1px rgba(247, 199, 11, 0.7);
}

@-webkit-keyframes spiner {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }

    100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}

@-moz-keyframes spiner {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }

    100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}

@-ms-keyframes spiner {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }

    100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}

@keyframes spiner {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }

    100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}
/* global css end */
.pt-50 {
    padding-top: 50px;
}

.pb-50 {
    padding-bottom: 50px;
}

.pt-80 {
    padding-top: 80px;
}

@media (max-width: 767px) {
    .pt-80 {
        padding-top: 70px;
    }
}

@media (max-width: 575px) {
    .pt-80 {
        padding-top: 50px;
    }
}

.pb-80 {
    padding-bottom: 80px;
}

@media (max-width: 767px) {
    .pb-80 {
        padding-bottom: 70px;
    }
}

@media (max-width: 575px) {
    .pb-80 {
        padding-bottom: 50px;
    }
}

.pt-100 {
    padding-top: 100px;
}

@media (max-width: 991px) {
    .pt-100 {
        padding-top: 80px;
    }
}

@media (max-width: 767px) {
    .pt-100 {
        padding-top: 70px;
    }
}

@media (max-width: 575px) {
    .pt-100 {
        padding-top: 50px;
    }
}

.pb-100 {
    padding-bottom: 100px;
}

@media (max-width: 991px) {
    .pb-100 {
        padding-bottom: 80px;
    }
}

@media (max-width: 767px) {
    .pb-100 {
        padding-bottom: 70px;
    }
}

@media (max-width: 575px) {
    .pb-100 {
        padding-bottom: 50px;
    }
}

.pt-120 {
    padding-top: 120px;
}

@media (max-width: 991px) {
    .pt-120 {
        padding-top: 100px;
    }
}

@media (max-width: 767px) {
    .pt-120 {
        padding-top: 80px;
    }
}

@media (max-width: 575px) {
    .pt-120 {
        padding-top: 70px;
    }
}

.pb-120 {
    padding-bottom: 120px;
}

@media (max-width: 991px) {
    .pb-120 {
        padding-bottom: 100px;
    }
}

@media (max-width: 767px) {
    .pb-120 {
        padding-bottom: 80px;
    }
}

@media (max-width: 575px) {
    .pb-120 {
        padding-bottom: 70px;
    }
}

.d-card, .testimonial-item, .testimonial-section, .transaction-section, .investor-item .investor-content, .investor-section, .work-section, .plan-section, .counter-item, .counter-wrapper div[class*=col], .counter-section, .referral-item, .referral-section, .benefit-item .benefit-icon, .about-thumb, .about-section, .page-breadcrumb li, .page-banner, .banner-section, .subscription-form, .footer-top, .about-content ul li, body, .preloader-holder .preloader {
    position: relative;
}

.d-card i, .testimonial-item::after, .transaction-section .transaction-el, .investor-item .investor-content::after, .investor-section::before, .accordion-item .accordion-button::before, .work-section .man-with-dollar, .work-section::before, .plan-section .plan-el, .plan-section .top-dollar, .plan-section .dollar-right, .counter-item::before, .counter-wrapper div[class*=col]::after, .counter-section::before, .referral-item .referral-content, .referral-item::after, .referral-section .referral-img, .benefit-item .benefit-icon i, .about-thumb .line.one::after, .about-thumb .line.one::before, .about-thumb .line, .about-section::before, .page-breadcrumb li::after, .page-banner::before, .banner-section .banner-lady, .banner-section::before, .subscription-form button, .header,.about-content ul li::before, .preloader-holder::after, .preloader-holder .preloader .preloader-spiner, .preloader-holder .preloader .preloader-spiner::after {
    position: absolute;
}

.transaction-section, .investor-item .investor-content, .investor-section::before, .investor-section, .work-section, .plan-section, .counter-section, .referral-section, .about-thumb, .about-section, .page-banner, .banner-section {
    z-index: 1;
}

.transaction-section .transaction-el, .investor-item .investor-content::after, .investor-section::before, .work-section .man-with-dollar, .work-section::before, .plan-section .plan-el, .plan-section .top-dollar, .counter-section::before, .referral-section .referral-img, .about-thumb .line, .about-section::before, .page-banner::before {
    z-index: -1;
}

.d-card, .sidebar-menu li a, .user-sidebar, .contact-item, .investor-item .investor-content::after, .investor-item .investor-content, .investor-item .investor-thumb, .accordion-item .accordion-button::before, .referral-item::after, .referral-item, .benefit-item .benefit-icon, .social-links li a, .header .main-menu li .sub-menu li a, .header .main-menu li .sub-menu, .header .main-menu li.has_children > a::before, body .header,
body .main-wrapper, .site-checkbox label::before, .form-control, body {
    -webkit-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
}

.contact-item .icon, .investor-item .investor-thumb-inner, .work-item .work-number, .counter-section::before, .benefit-item .benefit-icon .benefit-icon-inner, .about-thumb .line.one::after, .about-thumb .line.one::before, .social-links li a:hover, .subscription-form button, .main-btn, .preloader-holder .preloader .preloader-spiner::after {
    background: var(--gradient-bg);
}

.user-sidebar, .dropdown-menu, .user-header, .counter-section, .page-banner::before, .page-banner, .header .main-menu li .sub-menu, .header.header-fixed .header-bottom, .header, .main-btn2, .preloader-holder .preloader {
    background-color: var(--main-color-two);
}

.d-card, .account-wrapper, .blog-item, .testimonial-item, .transaction-wrapper, .investor-item, .accordion-item, .work-item, .pagination .page-item .page-link, .accordion-item .accordion-header .accordion-button:not(.collapsed), .site-card .card-header, .site-card, textarea, .select, .form-control {
    background-color: #fff;
}

.sidebar-menu li a:hover, .contact-item .content a:hover, .blog-meta li i, .counter-item .counter-title, .referral-item .referral-content .referral-amount, .page-breadcrumb li a, .banner-content .banner-title span, .footer-menu li a:hover, .social-icons li a:hover, .hc-list > li > a i, .hc-list > li > a:hover, .header .main-menu li .sub-menu li a:hover, .header .main-menu li a:hover, .header .main-menu li a:focus, .header .main-menu li.has_children:hover > a, .header .site-logo.site-title, .custom-icon-field .form-control:focus ~ i, .about-content ul li::before, .top-caption i, .top-caption i.las, .section-title span {
    color: var(--main-color);
}

.dropdown-menu .dropdown-item, .user-dropdown .user-btn span, .counter-item .caption, .referral-item .referral-content .referral-caption, .page-breadcrumb li, .banner-content .check-list li, .banner-content .banner-title, .subscription-form button, .subscription-form .form-control:focus, .subscription-form .form-control, .footer-section h2, .footer-section h3, .footer-section h6, .menu-toggle, .social-icons li a, .hc-list > li > a, .header .main-menu li .sub-menu li a, .header .main-menu li a, .header .main-menu li.has_children > a::before, .view-btn:hover, .view-btn, .main-btn2:hover, .main-btn2 {
    color: #fff;
}

.sidebar-menu li a.active, .contact-item .icon, .social-links li a:hover i, .subscription-form button i, .accordion-item .accordion-header .accordion-button:not(.collapsed), .accordion-item .accordion-header .accordion-button, .select, .form-control:focus, .form-control, [data-caption]::before, .main-btn:hover, .main-btn, .caption-list li .caption {
    color: #0f0f0f;
}

.d-card i, .contact-item .content a, .blog-btn, .investor-item .investor-content ul li a, .site-nav-tabs .nav-item .nav-link, .ratings i.far, .text-p {
    color: #3b3b3b;
}

.user-dropdown .user-btn img, .short-post .thumb img, .blog-item .blog-thumb img, .testimonial-item .testimonial-client .thumb img, .investor-item .investor-thumb-inner img {
    object-fit: cover;
    -o-object-fit: cover;
    object-position: center;
    -o-object-position: center;
}

.sidebar-menu li a, .user-header, .short-post, .blog-btn, .blog-meta, .testimonial-item .testimonial-client, .transaction-wrapper-top, .investor-item .investor-content ul, .accordion-item .accordion-button::before, .referral-wrapper, .benefit-item, .page-breadcrumb, .social-links li a, .social-links, .social-icons, .hc-list, .btn-close, .custom-icon-field i {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}

.contact-item .icon, .investor-item .investor-content ul, .accordion-item .accordion-button::before, .work-item .work-number, .social-links li a, .btn-close, .custom-icon-field i, .view-btn, .main-btn {
    justify-content: center;
}

.sidebar-menu li a, .user-header, .contact-item .icon, .blog-btn, .blog-meta, .testimonial-item .testimonial-client, .transaction-wrapper-top, .investor-item .investor-content ul, .accordion-item .accordion-button::before, .work-item .work-number, .page-breadcrumb, .social-links li a, .social-links, .header .main-menu, .btn-close, .custom-icon-field i, .table-user, .view-btn, .main-btn2, .main-btn, .top-caption {
    align-items: center;
}

.preloader-holder, .preloader-holder .preloader {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}

.contact-item .icon, .work-item .work-number, .table-user, .view-btn, .main-btn2, .main-btn, .top-caption {
    display: inline-flex;
}

.d-card, .short-post .thumb, .blog-details-img, .blog-item .blog-thumb, .testimonial-item .testimonial-client .thumb, .transaction-section, .investor-section, .counter-section, .about-section, .banner-section {
    overflow: hidden;
}

.user-header, .short-post .thumb img, .blog-details-img img, .blog-item .blog-thumb img, .testimonial-item .testimonial-client .thumb img, .investor-item .investor-thumb-inner img, .plan-section .top-dollar, .counter-item::before, .page-banner::before, .header, .site-nav-tabs .nav-item .nav-link, .preloader-holder, .preloader-holder::after {
    width: 100%;
}

.contact-item, .short-post .thumb img, .blog-details-img img, .blog-item .blog-thumb img, .testimonial-item .testimonial-client .thumb img, .investor-item .investor-thumb-inner img, .counter-item::before, .counter-wrapper div[class*=col]::after, .page-banner::before, .custom-icon-field i, .preloader-holder::after {
    height: 100%;
}

.d-card:hover, .contact-item:hover, .investor-item:hover .investor-thumb, .referral-item:hover {
    -webkit-transform: translateY(-5px);
    -ms-transform: translateY(-5px);
    transform: translateY(-5px);
}

.contact-item, .investor-item, .work-item, .plan-section .top-dollar, .counter-item, .referral-item .referral-content {
    text-align: center;
}

.blog-item .blog-thumb, .social-links li a, .subscription-form button, .header .main-menu li .sub-menu, .site-nav-tabs .nav-item .nav-link, .site-checkbox label::before, .form-control, .view-btn, .btn {
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
}

.d-card, .contact-item, .blog-widget, .blog-item, .testimonial-item, .site-card {
    border-radius: 8px;
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    -ms-border-radius: 8px;
    -o-border-radius: 8px;
}

.account-wrapper, .blog-details-img, .transaction-wrapper {
    border-radius: 10px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    -ms-border-radius: 10px;
    -o-border-radius: 10px;
}

.user-dropdown .user-btn img, .contact-item .icon, .testimonial-item .testimonial-client .thumb, .investor-item .investor-content::after, .accordion-item .accordion-button::before, .work-item .work-number, .referral-item::after, .about-thumb .line.one::after, .about-thumb .line.one::before, .about-thumb .line, .table-user img, .preloader-holder .preloader, .preloader-holder .preloader .preloader-spiner, .preloader-holder .preloader .preloader-spiner::after {
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
}

.about-content ul li {
    margin-top: 0.625rem;
}

.about-content ul li {
    font-size: 1.125rem;
    padding-left: 1.875rem;
}

.about-content ul li::before {
    content: "\f00c";
    top: 2px;
    left: 0;
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    font-size: 1rem;
    width: 25px;
    height: 25px;
}

.number-list {
    list-style: decimal;
    padding-left: 1.125rem;
}

.number-list li + li {
    margin-top: 0.625rem;
}

.disc-list li + li {
    margin-top: 0.625rem;
}

.disc-list li {
    position: relative;
    padding-left: 0.9375rem;
}

.disc-list li::before {
    position: absolute;
    content: "";
    top: 50%;
    left: 0;
    width: 0.375rem;
    height: 0.375rem;
    margin-top: -0.1875rem;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    background-color: #575757;
}

.caption-list li {
    display: flex;
    flex-wrap: wrap;
    padding: 0.625rem 0;
    font-size: 0.9375rem;
    border-bottom: 1px dashed #cbcbcb;
}

.caption-list li:first-child {
    padding-top: 0;
}

.caption-list li:last-child {
    padding-bottom: 0;
    border-bottom: none;
}

.caption-list li .caption {
    width: 40%;
    font-family: "Jost", sans-serif;
    font-weight: 700;
    font-size: 0.875rem;
    position: relative;
}

.caption-list li .caption::after {
    position: absolute;
    content: ":";
    top: 0;
    right: 0;
}

.caption-list li .value {
    width: 60%;
    padding-left: 0.9375rem;
}

.caption-list-two {
    padding: 0.625rem 0.9375rem;
    background-color: rgba(247, 199, 11, 0.1);
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
}

.caption-list-two li {
    font-family: "Jost", sans-serif;
    font-weight: 500;
    color: #0f0f0f;
    font-size: 0.875rem;
    padding: 0.5rem 0;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    border-bottom: 1px dashed #b2b2b2;
}

.caption-list-two li:first-child {
    padding-top: 0;
}

.caption-list-two li:last-child {
    padding-bottom: 0;
    border-bottom: none;
}

.caption-list-two li .caption {
    width: 20%;
    position: relative;
    font-weight: 700;
    padding-right: 10px;
}

.caption-list-two li .caption::after {
    position: absolute;
    content: ":";
    top: 0;
    right: 0;
}

.caption-list-two li .value {
    width: 80%;
    padding-left: 20px;
}

.shake {
    animation: shake 0.5s 1 linear;
}

@-webkit-keyframes shake {
    0%, 100% {
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0);
    }

    10%, 30%, 50%, 70%, 90% {
        -webkit-transform: translateX(-10px);
        -ms-transform: translateX(-10px);
        transform: translateX(-10px);
    }

    20%, 40%, 60%, 80% {
        -webkit-transform: translateX(10px);
        -ms-transform: translateX(10px);
        transform: translateX(10px);
    }
}

@-moz-keyframes shake {
    0%, 100% {
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0);
    }

    10%, 30%, 50%, 70%, 90% {
        -webkit-transform: translateX(-10px);
        -ms-transform: translateX(-10px);
        transform: translateX(-10px);
    }

    20%, 40%, 60%, 80% {
        -webkit-transform: translateX(10px);
        -ms-transform: translateX(10px);
        transform: translateX(10px);
    }
}

@-ms-keyframes shake {
    0%, 100% {
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0);
    }

    10%, 30%, 50%, 70%, 90% {
        -webkit-transform: translateX(-10px);
        -ms-transform: translateX(-10px);
        transform: translateX(-10px);
    }

    20%, 40%, 60%, 80% {
        -webkit-transform: translateX(10px);
        -ms-transform: translateX(10px);
        transform: translateX(10px);
    }
}

@keyframes shake {
    0%, 100% {
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0);
    }

    10%, 30%, 50%, 70%, 90% {
        -webkit-transform: translateX(-10px);
        -ms-transform: translateX(-10px);
        transform: translateX(-10px);
    }

    20%, 40%, 60%, 80% {
        -webkit-transform: translateX(10px);
        -ms-transform: translateX(10px);
        transform: translateX(10px);
    }
}

.fadeInUp {
    -webkit-animation-name: fadeInUp;
    animation-name: fadeInUp;
}

@-webkit-keyframes fadeInUp {
    0% {
        opacity: 0;
        -webkit-transform: translateY(20px);
        -ms-transform: translateY(20px);
        transform: translateY(20px);
    }

    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0);
    }
}

@-moz-keyframes fadeInUp {
    0% {
        opacity: 0;
        -webkit-transform: translateY(20px);
        -ms-transform: translateY(20px);
        transform: translateY(20px);
    }

    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0);
    }
}

@-ms-keyframes fadeInUp {
    0% {
        opacity: 0;
        -webkit-transform: translateY(20px);
        -ms-transform: translateY(20px);
        transform: translateY(20px);
    }

    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0);
    }
}

@keyframes fadeInUp {
    0% {
        opacity: 0;
        -webkit-transform: translateY(20px);
        -ms-transform: translateY(20px);
        transform: translateY(20px);
    }

    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0);
    }
}

.fadeInLeft {
    -webkit-animation-name: fadeInLeft;
    animation-name: fadeInLeft;
}

@-webkit-keyframes fadeInLeft {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-20px);
        -ms-transform: translateX(-20px);
        transform: translateX(-20px);
    }

    100% {
        opacity: 1;
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0);
    }
}

@-moz-keyframes fadeInLeft {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-20px);
        -ms-transform: translateX(-20px);
        transform: translateX(-20px);
    }

    100% {
        opacity: 1;
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0);
    }
}

@-ms-keyframes fadeInLeft {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-20px);
        -ms-transform: translateX(-20px);
        transform: translateX(-20px);
    }

    100% {
        opacity: 1;
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0);
    }
}

@keyframes fadeInLeft {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-20px);
        -ms-transform: translateX(-20px);
        transform: translateX(-20px);
    }

    100% {
        opacity: 1;
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0);
    }
}

.fadeInRight {
    -webkit-animation-name: fadeInRight;
    animation-name: fadeInRight;
}

@-webkit-keyframes fadeInRight {
    0% {
        opacity: 0;
        -webkit-transform: translateX(20px);
        -ms-transform: translateX(20px);
        transform: translateX(20px);
    }

    100% {
        opacity: 1;
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0);
    }
}

@-moz-keyframes fadeInRight {
    0% {
        opacity: 0;
        -webkit-transform: translateX(20px);
        -ms-transform: translateX(20px);
        transform: translateX(20px);
    }

    100% {
        opacity: 1;
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0);
    }
}

@-ms-keyframes fadeInRight {
    0% {
        opacity: 0;
        -webkit-transform: translateX(20px);
        -ms-transform: translateX(20px);
        transform: translateX(20px);
    }

    100% {
        opacity: 1;
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0);
    }
}

@keyframes fadeInRight {
    0% {
        opacity: 0;
        -webkit-transform: translateX(20px);
        -ms-transform: translateX(20px);
        transform: translateX(20px);
    }

    100% {
        opacity: 1;
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0);
    }
}

.slideInLeft {
    -webkit-animation-name: slideInLeft;
    animation-name: slideInLeft;
}

@-webkit-keyframes slideInLeft {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-2000px);
        transform: translateX(-2000px);
    }

    100% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
}

@-moz-keyframes slideInLeft {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-2000px);
        transform: translateX(-2000px);
    }

    100% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
}

@-ms-keyframes slideInLeft {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-2000px);
        transform: translateX(-2000px);
    }

    100% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
}

@keyframes slideInLeft {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-2000px);
        transform: translateX(-2000px);
    }

    100% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
}

.slideInRight {
    -webkit-animation-name: slideInRight;
    animation-name: slideInRight;
}

@-webkit-keyframes slideInRight {
    from {
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0);
        visibility: visible;
    }

    to {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
}

@-moz-keyframes slideInRight {
    from {
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0);
        visibility: visible;
    }

    to {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
}

@-ms-keyframes slideInRight {
    from {
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0);
        visibility: visible;
    }

    to {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
}

@keyframes slideInRight {
    from {
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0);
        visibility: visible;
    }

    to {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
}

.slideInUp {
    -webkit-animation-name: slideInUp;
    animation-name: slideInUp;
}

@-webkit-keyframes slideInUp {
    from {
        -webkit-transform: translate3d(0, 100%, 0);
        transform: translate3d(0, 100%, 0);
        visibility: visible;
    }

    to {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
}

@-moz-keyframes slideInUp {
    from {
        -webkit-transform: translate3d(0, 100%, 0);
        transform: translate3d(0, 100%, 0);
        visibility: visible;
    }

    to {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
}

@-ms-keyframes slideInUp {
    from {
        -webkit-transform: translate3d(0, 100%, 0);
        transform: translate3d(0, 100%, 0);
        visibility: visible;
    }

    to {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
}

@keyframes slideInUp {
    from {
        -webkit-transform: translate3d(0, 100%, 0);
        transform: translate3d(0, 100%, 0);
        visibility: visible;
    }

    to {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
}

h1 {
    font-size: 4.125rem;
}

h2 {
    font-size: 3.125rem;
}

@media (max-width: 991px) {
    h2 {
        font-size: 2.25rem;
    }
}

@media (max-width: 575px) {
    h2 {
        font-size: 2rem;
    }
}

h3 {
    font-size: 2.375rem;
}

@media (max-width: 1199px) {
    h3 {
        font-size: 2rem;
    }
}

@media (max-width: 767px) {
    h3 {
        font-size: 1.75rem;
    }
}

@media (max-width: 575px) {
    h3 {
        font-size: 1.5rem;
    }
}

h4 {
    font-size: 1.75rem;
}

@media (max-width: 767px) {
    h4 {
        font-size: 1.5rem;
    }
}

@media (max-width: 767px) {
    h4 {
        font-size: 1.375rem;
    }
}

h5 {
    font-size: 1.375rem;
}

@media (max-width: 767px) {
    h5 {
        font-size: 1.25rem;
    }
}

h6 {
    font-size: 1rem;
}

h1, h2, h3, h4, h5, h6 {
    font-family: "Jost", sans-serif;
    color: #0f0f0f;
    font-weight: 500;
    margin: 0;
    line-height: 1.3;
    word-break: break-word;
}

h1 > a, h2 > a, h3 > a, h4 > a, h5 > a, h6 > a {
    font-family: "Jost", sans-serif;
    color: #0f0f0f;
    font-weight: 500;
    -webkit-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
    line-height: 1.3;
    word-break: break-word;
}

p, li, span {
    margin: 0;
}

a {
    text-decoration: none;
    display: inline-block;
    font-weight: 400;
}

a:hover {
    text-decoration: none;
}

strong {
    font-weight: 500;
}

.fs--18px {
    font-size: 1.125rem !important;
}

.fs--16px {
    font-size: 1rem !important;
}

.fs--15px {
    font-size: 0.9375rem !important;
}

.fs--14px {
    font-size: 0.875rem !important;
}

.fs--12px {
    font-size: 0.75rem !important;
}

.fw-medium {
    font-weight: 600 !important;
}

.btn {
    padding: 0.625rem 1.875rem;
    font-weight: 500;
}

@media (max-width: 575px) {
    .btn {
        padding: 0.5625rem 1.25rem;
    }
}

.btn.btn-md {
    padding: 0.625rem 1.25rem;
}

.btn.btn-sm {
    padding: 6px 1.25rem;
}

.main-btn i.las {
    font-size: 1.125rem;
}

.main-btn2 i.las {
    font-size: 1.125rem;
}

.view-btn {
    width: 30px;
    height: 30px;
    background-color: #6777ef47;
    border-radius: 3px;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    color: #6777ef !important;
    border: 1px solid #6777ef;
    font-size: 14px;
    transition: all 0.3s;
}
.view-btn:hover {
    background-color: #6777ef;
    color: #fff !important;
}

.view-btn-primary {
    color: #6777ef !important;
    border: 1px solid #6777ef;
    background-color: #6777ef47;
}
.view-btn-primary:hover {
    background-color: #6777ef;
}

.view-btn-info {
    color: #0bb2d4 !important;
    border: 1px solid #0bb2d4;
    background-color: #0bb2d447;
}
.view-btn-info:hover {
    background-color: #0bb2d4;
}

.view-btn-warning {
    color: #eb6709 !important;
    border: 1px solid #eb6709;
    background-color: #eb670947;
}
.view-btn-warning:hover {
    background-color: #eb6709;
}

.view-btn-danger {
    color: #ff4c52 !important;
    border: 1px solid #ff4c52;
    background-color: #ff4c5247;
}
.view-btn-danger:hover {
    background-color: #ff4c52;
}

.view-btn-success {
    color: #11c26d !important;
    border: 1px solid #11c26d;
    background-color: #11c26d47;
}
.view-btn-success:hover {
    background-color: #11c26d;
}

.rotate-arrow {
    -webkit-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    transform: rotate(-45deg);
}

.default-btn {
    z-index: 1;
    font-weight: 500;
    font-size: 16px;
    color: var(--h-color);
    padding: 15px 30px 16px;
    line-height: 1;
    -webkit-transition: all ease 0.5s;
    transition: all ease 0.5s;
    text-align: center;
    background-color: var(--main-color);
    position: relative;
    overflow: hidden;
}

.default-btn2 {
    z-index: 1;
    font-weight: 500;
    font-size: 16px;
    color: #ffffff;
    padding: 15px 30px 16px;
    line-height: 1;
    -webkit-transition: all ease 0.5s;
    transition: all ease 0.5s;
    text-align: center;
    background-color: var(--main-color-two);
    position: relative;
    overflow: hidden;
}

.default-btn2.bg-white span::before {
    background: -webkit-gradient(linear, left top, left bottom, from(var(--main-color)), to(transparent));
    background: linear-gradient(top, #ffffff, transparent);
}

.default-btn2 span::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 2px;
    height: 100%;
    background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(transparent));
    background: linear-gradient(top, #ffffff, transparent);
    -webkit-animation: top 2s linear infinite;
    animation: top 2s linear infinite;
    -webkit-animation-delay: 1s;
    animation-delay: 1s;
}

.default-btn::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background: -webkit-gradient(linear, right top, left top, from(#ffffff), to(transparent));
    background: linear-gradient(right, #ffffff, transparent);
    -webkit-animation: right 2s linear infinite;
    animation: right 2s linear infinite;
}

.default-btn::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background: -webkit-gradient(linear, left top, right top, from(#ffffff), to(transparent));
    background: linear-gradient(left, #ffffff, transparent);
    -webkit-animation: left 2s linear infinite;
    animation: left 2s linear infinite;
}

.default-btn span::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 2px;
    height: 100%;
    background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(transparent));
    background: linear-gradient(top, #ffffff, transparent);
    -webkit-animation: top 2s linear infinite;
    animation: top 2s linear infinite;
    -webkit-animation-delay: 1s;
    animation-delay: 1s;
}

.default-btn span::after {
    content: "";
    position: absolute;
    bottom: 0;
    right: 0;
    width: 2px;
    height: 100%;
    background: -webkit-gradient(linear, left bottom, left top, from(#ffffff), to(transparent));
    background: linear-gradient(bottom, #ffffff, transparent);
    -webkit-animation: bottom 2s linear infinite;
    animation: bottom 2s linear infinite;
    -webkit-animation-delay: 1s;
    animation-delay: 1s;
}

.default-btn:hover {
    background-color: #ff5a00;
    color: #ffffff;
}

@-webkit-keyframes left {
    0% {
        -webkit-transform: translateX(100%);
        transform: translateX(100%);
    }

    100% {
        -webkit-transform: translateX(-100%);
        transform: translateX(-100%);
    }
}

@keyframes left {
    0% {
        -webkit-transform: translateX(100%);
        transform: translateX(100%);
    }

    100% {
        -webkit-transform: translateX(-100%);
        transform: translateX(-100%);
    }
}

@-webkit-keyframes right {
    0% {
        -webkit-transform: translateX(-100%);
        transform: translateX(-100%);
    }

    100% {
        -webkit-transform: translateX(100%);
        transform: translateX(100%);
    }
}

@keyframes right {
    0% {
        -webkit-transform: translateX(-100%);
        transform: translateX(-100%);
    }

    100% {
        -webkit-transform: translateX(100%);
        transform: translateX(100%);
    }
}

@-webkit-keyframes top {
    0% {
        -webkit-transform: translateY(100%);
        transform: translateY(100%);
    }

    100% {
        -webkit-transform: translateY(-100%);
        transform: translateY(-100%);
    }
}

@keyframes top {
    0% {
        -webkit-transform: translateY(100%);
        transform: translateY(100%);
    }

    100% {
        -webkit-transform: translateY(-100%);
        transform: translateY(-100%);
    }
}

@-webkit-keyframes bottom {
    0% {
        -webkit-transform: translateY(-100%);
        transform: translateY(-100%);
    }

    100% {
        -webkit-transform: translateY(100%);
        transform: translateY(100%);
    }
}

@keyframes bottom {
    0% {
        -webkit-transform: translateY(-100%);
        transform: translateY(-100%);
    }

    100% {
        -webkit-transform: translateY(100%);
        transform: translateY(100%);
    }
}

.badge {
    padding: 0 0 0 15px;
    position: relative;
    color: #052554;
    background-color: transparent;
    font-size: 14px;
}
.badge::before {
    position: absolute;
    content: '';
    top: 50%;
    left: 0;
    width: 10px;
    height: 10px;
    background-color: #052554;
    border-radius: 50%;
    margin-top: -5px;
}

.badge-primary {
    color: #6777EF;
}
.badge-primary::before {
    background-color: #6777EF;
}

.badge-info {
    color: #0bb2d4;
}
.badge-info::before {
    background-color: #0bb2d4;
}

.badge-warning {
    color: #eb6709;
}
.badge-warning::before {
    background-color: #eb6709;
}

.badge-danger {
    color: #ff4c52;
}
.badge-danger::before {
    background-color: #ff4c52;
}

.badge-success {
    color: #11c26d;
}
.badge-success::before {
    background-color: #11c26d;
}

/* table css start */
.site-table {
    margin-bottom: 0;
}

.table>:not(:first-child) {
    border-top: none;
}

.site-table thead {
    background: var(--gradient-bg);
}

.site-table thead th {
    border: none !important;
    padding: 0.75rem 1.25rem;
    font-size: 0.875rem;
    text-transform: uppercase;
    font-weight: 500;
    vertical-align: middle;
    color: #000;
}

.site-table thead th:first-child {
    text-align: left;
    border-radius: 8px 0 0 8px;
    -webkit-border-radius: 8px 0 0 8px;
    -moz-border-radius: 8px 0 0 8px;
    -ms-border-radius: 8px 0 0 8px;
    -o-border-radius: 8px 0 0 8px;
}

.site-table thead th:last-child {
    text-align: right;
    border-radius: 0 8px 8px 0;
    -webkit-border-radius: 0 8px 8px 0;
    -moz-border-radius: 0 8px 8px 0;
    -ms-border-radius: 0 8px 8px 0;
    -o-border-radius: 0 8px 8px 0;
}

.site-table tbody td {
    border-top: none;
    border-bottom: 1px solid rgba(0, 0, 0, 0.11);
    padding: 15px 0;
    color: #3b3b3b;
    vertical-align: middle;
    font-size: 15px;
}

.site-table tbody td:first-child {
    text-align: left;
}

.site-table tbody td:last-child {
    text-align: right;
}

.site-table tbody tr:last-child td {
    border-bottom: none;
}

.ratings {
    font-size: 0.875rem;
}

.ratings i.fas {
    color: #FAB005;
}

.table-user img {
    width: 45px;
    height: 45px;
}

.table-user .name {
    padding-left: 0.9375rem;
}

[data-caption] {
    position: relative;
}

[data-caption]::before {
    position: absolute;
    content: attr(data-caption);
    font-weight: 700;
    top: 0;
    left: 0;
    padding: 0.8125rem 0;
    display: none;
    font-size: 0.875rem;
}

@media (max-width: 991px) {
    .site-table thead {
        display: none;
    }

    .site-table tbody tr:nth-child(odd) {
        background-color: #fcfcfc;
    }

    .site-table tbody tr:last-child td {
        border-top: 1px solid rgba(0, 0, 0, 0.08);
    }

    .site-table tbody tr td {
        padding-right: 0;
    }

    .site-table tbody tr td:last-child {
        padding-right: 0;
    }

    .site-table tr th, .site-table tr td {
        display: block;
        padding-left: 45% !important;
        text-align: right !important;
    }

    .site-table tr th:first-child, .site-table tr td:first-child {
        border-top: none !important;
    }

    .site-table [data-caption]::before {
        display: block;
    }
}
/* table css end */
/* form css start */
.form-group {
    margin-bottom: 0.9375rem;
}

.form-control {
    padding: 0.625rem 0.9375rem;
    border: 1px solid #cbcbcb;
    width: 100%;
    height: 3.125rem;
}

.form-control::-webkit-input-placeholder {
    color: #7c7c7c;
}

.form-control::-moz-placeholder {
    color: #7c7c7c;
}

.form-control:-ms-input-placeholder {
    color: #7c7c7c;
}

.form-control:-moz-placeholder {
    color: #7c7c7c;
}

.form-control:focus {
    background-color: #fff;
    border-color: #F7C70B !important;
    box-shadow: 0 0 5px rgba(247, 199, 11, 0.35);
}

.form-control:focus::-webkit-input-placeholder {
    color: transparent;
}

.form-control:focus::-moz-placeholder {
    color: transparent;
}

.form-control:focus:-ms-input-placeholder {
    color: transparent;
}

.form-control:focus:-moz-placeholder {
    color: transparent;
}

.form-control[readonly] {
    background-color: #f1f1f1;
}

.form-control.form-control-md {
    height: 45px;
}

.form-control.form-control-sm {
    height: 35px;
}

input:-webkit-autofill,
input:-webkit-autofill:hover,
input:-webkit-autofill:focus,
textarea:-webkit-autofill,
textarea:-webkit-autofill:hover,
textarea:-webkit-autofill:focus,
select:-webkit-autofill,
select:-webkit-autofill:hover,
select:-webkit-autofill:focus {
    -webkit-text-fill-color: #0f0f0f;
    transition: background-color 5000s ease-in-out 0s;
}

.custom-icon-field {
    position: relative;
}

.custom-icon-field i {
    position: absolute;
    top: 0;
    left: 0;
    width: 45px;
}

.custom-icon-field i[class*=la-] {
    font-size: 1.5rem;
    color: #a1a1a1;
}

.custom-icon-field .form-control {
    padding-left: 2.8125rem;
}

.custom-icon-field .form-control:focus ~ i {
    border-color: #F7C70B;
}

.select {
    padding: 0.625rem 0.9375rem;
    width: 100%;
    border: 1px solid #bebebe;
    cursor: pointer;
    color: #3b3b3b;
    height: 3.125rem;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    -o-border-radius: 4px;
}

.select option {
    padding: 0.625rem 0;
    display: block;
    border-top: 1px solid #cbcbcb;
}

.select.select--sm {
    height: 2.1875rem;
    font-size: 0.875rem;
    padding: 0.3125rem;
}

textarea {
    min-height: 9.375rem !important;
    resize: none;
    width: 100%;
}

label {
    color: #4d4d4d;
    margin-bottom: 0.5rem;
    font-size: 16px;
}

.input-group > .form--control,
.input-group > .select {
    position: relative;
    flex: 1 1 auto;
    width: 1%;
    min-width: 0;
}

.input-group select {
    background-color: transparent;
    border: none;
}

.site-radio {
    position: relative;
    padding-left: 0;
}

.site-radio input[type=radio] {
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    visibility: hidden;
    cursor: pointer;
}

.site-radio input[type=radio]:checked ~ label::before {
    border-width: 2px;
    border-color: #F7C70B;
}

.site-radio input[type=radio]:checked ~ label::after {
    opacity: 1;
}

.site-radio label {
    margin-bottom: 0;
    position: relative;
    padding-left: 20px;
    font-size: 0.875rem;
    font-weight: 400;
}

.site-radio label::before {
    position: absolute;
    content: "";
    top: 4px;
    left: 0;
    width: 15px;
    height: 15px;
    border: 1px solid #888888;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    -webkit-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
}

.site-radio label::after {
    position: absolute;
    content: "";
    top: 8px;
    left: 4px;
    width: 7px;
    height: 7px;
    background-color: #F7C70B;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    opacity: 0;
    -webkit-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
}

.site-checkbox {
    padding-left: 1.5625rem;
}

.site-checkbox input {
    display: none;
}

.site-checkbox input:checked ~ label::before {
    content: "\f14a";
    color: #F7C70B;
    border-color: transparent;
}

.site-checkbox label {
    position: relative;
    font-size: 0.9375rem;
    font-weight: 400;
    cursor: pointer;
    margin-bottom: 0;
}

.site-checkbox label::before {
    position: absolute;
    content: "\f0c8";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    top: 3px;
    left: -1.5625rem;
    width: 18px;
    height: 18px;
    font-size: 1.125rem;
    line-height: 1;
    color: transparent;
    border: 1px solid #cbcbcb;
}

/* form css end*/
/* card css start */
.site-card {
    border: 1px solid #e7e7e7;
    overflow: hidden;
}

.site-card .card-header {
    padding: 0.9375rem 1.25rem;
    border-color: #e7e7e7;
}

.site-card .card-body {
    padding: 1.25rem;
}

@media (max-width: 575px) {
    .site-card .card-body {
        padding: 0.9375rem;
    }
}
/* card css end */
/* modal css start */
.modal {
    z-index: 999999;
}

.modal-open {
    overflow: hidden;
    overflow-y: auto;
    padding-right: 0 !important;
}

.btn-close {
    width: 13px;
    height: 12px;
    background-size: 13px;
    background-color: #ea5455;
    opacity: 1;
}

.btn-close:hover {
    opacity: 1;
}

.btn-close:focus {
    box-shadow: none;
}

.modal-content {
    background-color: #F8F6FF;
}

.modal-header {
    border-bottom-color: #cbcbcb;
}

.modal-footer {
    border-top-color: #cbcbcb;
}

.modal.fade .modal-dialog {
    transform: scale(0.85, 0.85) translate(0);
}

.modal.show .modal-dialog {
    transform: scale(1, 1) translate(0);
}

body.modal-open .header,
body.modal-open .main-wrapper {
    -webkit-filter: blur(10px);
    -moz-filter: blur(10px);
    -o-filter: blur(10px);
    -ms-filter: blur(10px);
    filter: blur(10px);
}

/* modal css end */
.accordion-item {
    border: none;
}

.accordion-item:last-child {
    border-bottom: none;
}

.accordion-item .accordion-header .accordion-button {
    font-size: 1.25rem;
    font-weight: 500;
    box-shadow: none;
    padding: 1.25rem 0;
}

.accordion-item .accordion-body {
    padding: 0 0 1.125rem 0;
}

.site-nav-tabs {
    border-bottom: none;
}

.site-nav-tabs .nav-item .nav-link {
    background-color: #fff;
    border: none;
    padding: 0.5rem 1.25rem;
    font-weight: 500;
}

.site-nav-tabs .nav-item .nav-link.active {
    background-color: #F7C70B;
    color: #000;
}

.pagination {
    margin: -0.3125rem -0.4375rem;
    flex-wrap: wrap;
    margin-top: 1.25rem;
    justify-content: flex-end;
}

.pagination .page-item {
    margin: 0.3125rem 0.4375rem;
}

.pagination .page-item.active .page-link {
    background-color: #F7C70B;
    color: #fff;
    border-color: #F7C70B;
}

.pagination .page-item .page-link {
    width: 2.375rem;
    height: 2.375rem;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
    border: 1px solid rgba(0, 0, 0, 0.15);
    color: #3b3b3b;
}

.pagination .page-item .page-link:hover {
    background-color: #F7C70B;
    border-color: #F7C70B;
    color: #fff;
}

@-webkit-keyframes spin {
    0% {
        -webkit-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        transform: rotate(0deg);
    }

    100% {
        -webkit-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}

@-moz-keyframes spin {
    0% {
        -webkit-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        transform: rotate(0deg);
    }

    100% {
        -webkit-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}

@-ms-keyframes spin {
    0% {
        -webkit-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        transform: rotate(0deg);
    }

    100% {
        -webkit-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}

@keyframes spin {
    0% {
        -webkit-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        transform: rotate(0deg);
    }

    100% {
        -webkit-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}

@-webkit-keyframes upDown {
    0% {
        top: 0%;
    }

    25% {
        top: 50%;
    }

    50% {
        top: 100%;
    }

    75% {
        top: 50%;
    }

    100% {
        top: 0%;
    }
}

@-moz-keyframes upDown {
    0% {
        top: 0%;
    }

    25% {
        top: 50%;
    }

    50% {
        top: 100%;
    }

    75% {
        top: 50%;
    }

    100% {
        top: 0%;
    }
}

@-ms-keyframes upDown {
    0% {
        top: 0%;
    }

    25% {
        top: 50%;
    }

    50% {
        top: 100%;
    }

    75% {
        top: 50%;
    }

    100% {
        top: 0%;
    }
}

@keyframes upDown {
    0% {
        top: 0%;
    }

    25% {
        top: 50%;
    }

    50% {
        top: 100%;
    }

    75% {
        top: 50%;
    }

    100% {
        top: 0%;
    }
}

@-webkit-keyframes downUp {
    0% {
        bottom: 0%;
    }

    25% {
        bottom: 50%;
    }

    50% {
        bottom: 100%;
    }

    75% {
        bottom: 50%;
    }

    100% {
        bottom: 0%;
    }
}

@-moz-keyframes downUp {
    0% {
        bottom: 0%;
    }

    25% {
        bottom: 50%;
    }

    50% {
        bottom: 100%;
    }

    75% {
        bottom: 50%;
    }

    100% {
        bottom: 0%;
    }
}

@-ms-keyframes downUp {
    0% {
        bottom: 0%;
    }

    25% {
        bottom: 50%;
    }

    50% {
        bottom: 100%;
    }

    75% {
        bottom: 50%;
    }

    100% {
        bottom: 0%;
    }
}

@keyframes downUp {
    0% {
        bottom: 0%;
    }

    25% {
        bottom: 50%;
    }

    50% {
        bottom: 100%;
    }

    75% {
        bottom: 50%;
    }

    100% {
        bottom: 0%;
    }
}
/* header start */
.header {
    top: 0;
    left: 0;
    z-index: 2;
}

.header.header-fixed {
    position: fixed;
    z-index: 3;
}

.header.header-fixed .header-top {
    display: none;
}

.header.header-fixed .header-bottom {
    box-shadow: 0 3px 5px rgba(0, 0, 0, 0.03);
}

.header-bottom {
    background-color: transparent;
    padding: 0 30px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.05);
}

@media (max-width: 1199px) {
    .header-bottom {
        padding: 0.625rem 0;
    }
}

.header .site-logo img {
    max-width: 13.4375rem;
    max-height: 4.0625rem;
}

@media (max-width: 1199px) {
    .header .site-logo img {
        max-width: 9.375rem;
        max-height: 3.4375rem;
    }
}

.header .site-logo.site-title {
    font-size: 1.5rem;
}

.header .main-menu {
    margin-left: 4.375rem;
}

@media (max-width: 1199px) {
    .header .main-menu {
        margin-left: 0;
        padding: 0.9375rem 0;
    }
}

.header .main-menu li {
    position: relative;
}

@media (max-width: 1199px) {
    .header .main-menu li {
        width: 100%;
        border-bottom: 1px solid rgba(255, 255, 255, 0.15);
    }
}

.header .main-menu li:last-child a {
    padding-right: 0;
}

.header .main-menu li.has_children {
    position: relative;
}

.header .main-menu li.has_children.active {
    border-bottom: none;
}

.header .main-menu li.has_children.open > .sub-menu {
    display: block;
}

.header .main-menu li.has_children > a {
    padding-right: 1.5625rem;
}

@media (max-width: 1199px) {
    .header .main-menu li.has_children > a {
        display: block;
    }
}

.header .main-menu li.has_children > a::before {
    position: absolute;
    content: "\f067";
    font-family: "Line Awesome Free";
    font-weight: 900;
    top: 1.9375rem;
    right: 5px;
    font-size: 0.875rem;
}

@media (max-width: 1199px) {
    .header .main-menu li.has_children > a::before {
        display: block;
        top: 0.5625rem;
        color: #fff;
    }
}

.header .main-menu li.has_children:hover > a::before {
    content: "\f068";
    color: #F7C70B;
}

.header .main-menu li a {
    font-weight: 500;
    padding: 1.75rem 0.9375rem 1.75rem 0;
}

@media (max-width: 1199px) {
    .header .main-menu li a {
        color: #fff;
        padding: 0.5rem 0;
        display: block;
    }
}

.header .main-menu li .sub-menu {
    position: absolute;
    width: 220px;
    top: 105%;
    left: 0;
    z-index: 9999;
    padding: 0.3125rem 0;
    box-shadow: 0px 5px 15px 0 rgba(0, 0, 0, 0.1);
    opacity: 0;
    visibility: hidden;
    border: 1px solid #cbcbcb;
}

.header .main-menu li .sub-menu.active {
    display: block;
}

@media (max-width: 1199px) {
    .header .main-menu li .sub-menu {
        opacity: 1;
        visibility: visible;
        display: none;
        position: static;
        -webkit-transition: none;
        -o-transition: none;
        transition: none;
        width: 100%;
        background-color: #ffffff;
        border: none;
        padding: 0.9375rem;
    }
}

.header .main-menu li .sub-menu li {
    border-bottom: 1px solid #cbcbcb;
}

@media (max-width: 1199px) {
    .header .main-menu li .sub-menu li {
        border-color: rgba(255, 255, 255, 0.15);
    }
}

.header .main-menu li .sub-menu li:last-child {
    border-bottom: none;
}

.header .main-menu li .sub-menu li a {
    padding: 0.5rem 1.25rem;
    display: block;
    position: relative;
    font-size: 0.875rem;
}

@media (max-width: 1199px) {
    .header .main-menu li .sub-menu li a {
        color: #fff;
        padding: 0.5rem 0;
    }
}

.header .main-menu li .sub-menu li + li {
    margin-left: 0;
}

.header .main-menu li:hover > .sub-menu {
    top: 100%;
    opacity: 1;
    visibility: visible;
}

.header .main-menu li + li {
    margin-left: 1.25rem;
}

@media (max-width: 1199px) {
    .header .main-menu li + li {
        margin-left: 0;
    }
}

.header .main-menu .sub-menu li.has_children > a::before {
    top: 9px;
    right: 8px;
}

.header .main-menu .sub-menu li.has_children > .sub-menu {
    left: 100%;
    top: 0;
}

@media (max-width: 1199px) {
    .header .main-menu .sub-menu li.has_children > .sub-menu {
        padding-left: 15px;
    }
}

.header-top {
    border-bottom: 1px solid rgba(255, 255, 255, 0.15);
}

.hc-list > li {
    padding: 0.625rem 1.25rem;
    border-right: 1px solid rgba(255, 255, 255, 0.15);
    font-size: 14px;
}

@media (max-width: 991px) {
    .hc-list > li {
        border-right: none;
    }
}

.hc-list > li:first-child {
    padding-left: 0;
}

.hc-list > li > a i {
    margin-right: 4px;
}

.social-icons li {
    padding: 0 0.75rem;
}

.social-icons li:first-child {
    padding-left: 0;
}

.social-icons li:last-child {
    padding-right: 0;
}

.h-get-btn {
    color: #F7C70B !important;
    font-weight: 500;
}

@media (max-width: 1199px) {
    .navbar-collapse {
        margin-top: 20px !important;
        background-color: #070500;
        padding: 0 1.875rem 1.25rem 1.875rem;
    }
}

@media (max-width: 767px) {
    .navbar-collapse {
        max-height: 20rem;
        overflow: auto;
    }
}

.navbar-toggler {
    padding: 0;
    border: none;
}

.navbar-toggler:focus {
    outline: none;
    box-shadow: none;
}

.menu-toggle {
    margin: 10px 0;
    position: relative;
    display: block;
    width: 2.1875rem;
    height: 1.25rem;
    cursor: pointer;
    background: transparent;
    border-top: 2px solid;
    border-bottom: 2px solid;
    font-size: 0;
    -webkit-transition: all 0.25s ease-in-out;
    -o-transition: all 0.25s ease-in-out;
    transition: all 0.25s ease-in-out;
    cursor: pointer;
}

.menu-toggle:before, .menu-toggle:after {
    content: "";
    display: block;
    width: 100%;
    height: 2px;
    position: absolute;
    top: 50%;
    left: 50%;
    background: currentColor;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    transition: -webkit-transform 0.25s ease-in-out;
    -webkit-transition: -webkit-transform 0.25s ease-in-out;
    -o-transition: -webkit-transform 0.25s ease-in-out;
    transition: transform 0.25s ease-in-out;
    -moz-transition: -webkit-transform 0.25s ease-in-out;
    -ms-transition: -webkit-transform 0.25s ease-in-out;
}

@media (max-width: 1199px) {
    .menu-toggle:before, .menu-toggle:after {
        background-color: #fff;
    }
}

.animated {
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
}

.fadeInDown {
    -webkit-animation-name: fadeInDown;
    animation-name: fadeInDown;
}

@-webkit-keyframes fadeInDown {
    0% {
        opacity: 0;
        -webkit-transform: translateY(-20px);
        transform: translateY(-20px);
    }

    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
}

@-moz-keyframes fadeInDown {
    0% {
        opacity: 0;
        -webkit-transform: translateY(-20px);
        transform: translateY(-20px);
    }

    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
}

@-ms-keyframes fadeInDown {
    0% {
        opacity: 0;
        -webkit-transform: translateY(-20px);
        transform: translateY(-20px);
    }

    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
}

@keyframes fadeInDown {
    0% {
        opacity: 0;
        -webkit-transform: translateY(-20px);
        transform: translateY(-20px);
    }

    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
}
/* header end */

/* footer css start */

.footer-site-name {
    font-size: 36px;
}

.footer-section {
    position: relative;
    z-index: 1;
    margin-top: auto;
}
.footer-top {
    padding: 100px 0;
    position: relative;
    background-color: #F8F6FF;
    z-index: 1;
}
.map-el {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);
    -moz-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    -o-transform: translate(-50%, -50%);
    opacity: 0.1;
    z-index: -1;
}
.map-el img {
    max-height: 300px;
}
.footer-bottom {
    padding: 25px 0;
    background-color: var(--body-bg);
    border-top: 1px solid #e5e5e5;
}
.social-links {
    display: flex;
    flex-wrap: wrap;
    margin: -3px -5px;
}
.social-links li {
    padding: 3px 5px;
}
.social-links li a {
    color: #777;
    width: 35px;
    height: 35px;
    border: 1px solid rgba(0,0,0,0.15);
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    -o-border-radius: 3px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    -ms-transition: all 0.3s;
    -o-transition: all 0.3s;
}
.social-links li a:hover {
    background-color: var(--main-color);
    border-color: var(--main-color);
    color: #fff;
}
.footer-box .title {
    margin-bottom: 25px;
    font-size: 24px;
    position: relative;
    padding-bottom: 10px;
}
.footer-box .title::after {
    position: absolute;
    content: '';
    bottom: 0;
    left: 0;
    width: 40px;
    height: 2px;
    background-color: var(--main-color);
}
.footer-link-list li {
    position: relative;
    padding-left: 15px;
}
.footer-link-list li::before {
    position: absolute;
    content: "\f105";
    top: 0;
    left: 0;
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    color: var(--main-color);
}
.footer-link-list li:not(:first-child)::before {
    top: 5px;
}
.footer-link-list li a {
    padding: 5px 0;
    color: #282828;
    font-weight: 500;
}
.footer-link-list li:first-child a {
    padding-top: 0;
}
.footer-link-list li:last-child a {
    padding-bottom: 0;
}

#btn-back-to-top {
    position: fixed;
    bottom: 20px;
    right: 8px;
    display: none;
    z-index: 999;
    background-color: #080600;
}

/* end */

.back-to-top {
    position: fixed;
    visibility: hidden;
    opacity: 0;
    right: 15px;
    bottom: 15px;
    z-index: 996;
    background: #ffc451;
    width: 40px;
    height: 40px;
    border-radius: 4px;
    transition: all 0.4s;
}

.back-to-top i {
    font-size: 28px;
    color: #151515;
    line-height: 0;
}

.back-to-top:hover {
background: #151515;
}

.back-to-top:hover i {
color: #ffc451;
}
.back-to-top.active {
visibility: visible;
opacity: 1;
}

.pointer {
cursor: context-menu !important;
}
/* footer css end */

/* banner section css start */
.banner-section {
    padding-top: 19.375rem;
    padding-bottom: 11.875rem;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

@media (max-width: 1199px) {
    .banner-section {
        padding-top: 12.5rem;
        padding-bottom: 6.25rem;
        background-position-x: 20%;
    }
}

.banner-section::before {
    content: "";
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #000428;
    background: -webkit-linear-gradient(to right, rgba(0, 0, 0, 0.65) 34%, rgba(0, 78, 146, 0) 68%);
    background: linear-gradient(to right, rgba(0, 0, 0, 0.65) 34%, rgba(0, 78, 146, 0) 68%);
    z-index: -1;
}

.banner-section .banner-lady {
    bottom: -100px;
    right: 12%;
}

@media (max-width: 991px) {
    .banner-section .banner-lady {
        display: none;
    }
}

.banner-section .banner-lady img {
    max-width: 540px;
}

@media (max-width: 1399px) {
    .banner-section .banner-lady img {
        max-width: 500px;
    }
}

@media (max-width: 1199px) {
    .banner-section .banner-lady img {
        max-width: 400px;
    }
}

.banner-content .banner-title {
    font-size: 4.125rem;
}

@media (max-width: 1399px) {
    .banner-content .banner-title {
        font-size: 3.5rem;
    }
}

@media (max-width: 1199px) {
    .banner-content .banner-title {
        font-size: 3rem;
    }
}

@media (max-width: 575px) {
    .banner-content .banner-title {
        font-size: 2.25rem;
    }
}

.banner-content .banner-title span {
    font-weight: 400;
}

.banner-content .banner-description {
    font-size: 1.125rem;
    color: #e6e6e6;
}

@media (max-width: 1199px) {
    .banner-content .check-list li {
        font-size: 1rem;
    }
}

.overview-box {
    position: relative;
}

.overview-box::after {
    position: absolute;
    content: "";
    top: 50%;
    right: 0;
    height: 50px;
    width: 1px;
    background-color: rgba(255, 255, 255, 0.25);
    transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
}

.overview-wrapper div[class*=col]:last-child .overview-box::after {
    display: none;
}

.overview-box-amount {
    font-family: var(--h-font);
    font-weight: 700;
    color: var(--main-color);
    font-size: 36px;
    line-height: 1;
}

.overview-box p {
    color: #fff;
    margin-bottom: 0;
    margin-top: 8px;
}

/* banner section css end */
/* page banner css start */
.page-banner {
    padding-top: 11.25rem;
    padding-bottom: 3.75rem;
}

.page-banner::before {
    content: "";
    top: 0;
    left: 0;
    opacity: 0.75;
}

.page-breadcrumb li {
    padding: 0 0.625rem;
}

.page-breadcrumb li:last-child::after {
    display: none;
}

.page-breadcrumb li::after {
    content: "/";
    top: 0;
    right: -0.1875rem;
}

/* page banner css end */
/* about section css start */
.about-section::before {
    content: "";
    top: -15%;
    right: -18%;
    width: 35%;
    height: 100%;
    background: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.015));
    border-radius: 20px;
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    -ms-border-radius: 20px;
    -o-border-radius: 20px;
    -webkit-transform: rotate(-41deg);
    -ms-transform: rotate(-41deg);
    transform: rotate(-41deg);
}

.about-thumb .line {
    left: 50%;
    top: 50%;
    border: 1px solid rgba(203, 203, 203, 0.3);
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
}

.about-thumb .line.one {
    width: 540px;
    height: 540px;
}

.about-thumb .line.one::before {
    content: "";
    top: 18px;
    left: 137px;
    width: 20px;
    height: 20px;
    filter: blur(2px);
}

.about-thumb .line.one::after {
    content: "";
    bottom: 18px;
    right: 137px;
    width: 20px;
    height: 20px;
    filter: blur(2px);
}

.about-thumb .line.two {
    width: 460px;
    height: 460px;
}

.about-thumb .line.three {
    width: 380px;
    height: 380px;
}

/* about section css end */

/* calculate-area css start */
.calculate-area {
    padding: 65px 0;
    position: relative;
    overflow: hidden;
    z-index: 1;
    background-color: var(--main-color-two);
}
.calculate-area::before {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    width: 230px;
    height: 100%;
    background-color: var(--main-color);
    z-index: -1;
}
.calculate-area .calculator {
    position: absolute;
    top: 50%;
    left: 50px;
    transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    z-index: -1;
}

.calculate-area .calculator img {
    max-height: 120px;
}

.calculate-area [class*="shape-"] {
    position: absolute;
    opacity: 0.15;
    z-index: -2;
}
.calculate-area [class*="shape-"] img {
    max-height: 80px;
}
.calculate-area .shape-1 {
    top: -10px;
    left: -20px;
}
.calculate-area .shape-2 {
    left: 120px;
    bottom: -10px
}
.calculate-area .shape-3 {
    top: -10px;
    right: -10px;
}
.calculate-area .shape-4 {
    right: 120px;
    bottom: -15px;
}

.calculate-area .form-control:focus {
    background-color: #fff;
}

@media (max-width: 1800px) {
    .calculate-area .container {
        padding-left: 150px;
    }
}

@media (max-width: 1500px) {
    .calculate-area .container {
        padding-left: 280px;
    }
}

@media (max-width: 1199px) {
    .calculate-area .container {
        padding-left: 150px;
    }
    .calculate-area .cmn-btn {
        padding: 12px 20px;
    } 
}

@media (max-width: 1150px) {
    .calculate-area::before,
    .calculate-area .calculator {
        display: none;
    }
    .calculate-area .container {
        padding-left: var(--bs-gutter-x,.75rem);
    }
}
/* calculate-area css end */

/* benefit section css start */
.benefit-thumb {
    width: 100%;
}

.benefit-item {
    align-items: flex-start;
}

@media (max-width: 991px) {
    .benefit-item {
        padding: 1.5625rem;
        background-color: #f8f6ff;
        border: 1px solid #e3e3e3;
        border-radius: 8px;
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
        -ms-border-radius: 8px;
        -o-border-radius: 8px;
        height: 100%;
        justify-content: center;
        text-align: center;
    }
}

.benefit-item:hover .benefit-icon {
    animation: fadeInUp 0.7s 1 linear;
}

.benefit-item .benefit-icon {
    width: 70px;
    height: 79px;
    overflow: hidden;
    display: inline-block;
    -webkit-mask-repeat: no-repeat;
    mask-repeat: no-repeat;
    -webkit-mask-size: 100% 100%;
    mask-size: 100% 100%;
    -webkit-mask-image: url(../../images/hex-shape.png);
    mask-image: url(../../images/hex-shape.png);
    -webkit-mask-position: center center;
    mask-position: center center;
    -webkit-mask-repeat: no-repeat;
    mask-repeat: no-repeat;
    margin-left: auto;
    margin-right: auto;
}

.benefit-item .benefit-icon .benefit-icon-inner {
    width: 70px;
    height: 79px;
}

.benefit-item .benefit-icon i {
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    line-height: 1;
    font-size: 1.75rem;
    color: #000;
}

.benefit-item .benefit-content {
    width: calc(100% - 70px);
    padding-left: 1.6875rem;
}

@media (max-width: 1399px) {
    .benefit-item .benefit-content .title {
        font-size: 24px;
    }
}

@media (max-width: 991px) {
    .benefit-item .benefit-content {
        width: 100%;
        padding-left: 0;
        margin-top: 1.5625rem;
    }
    .benefit-item .benefit-content .title {
        font-size: 1.375rem;
    }
}

.benefit-item + .benefit-item {
    margin-top: 40px;
}

/* benefit section css end */
/* referral section css start */
.referral-section {
    padding: 2.125rem 0;
} 

.referral-section::before {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #fff;
    opacity: 0.6;
    z-index: -1;
}

@media (max-width: 767px) {
    .referral-wrapper {
        justify-content: center;
    }
}

.referral-wrapper .referral-item {
    width: 20%;
    padding: 10px 13px;
}

@media (max-width: 767px) {
    .referral-wrapper .referral-item {
        padding: 15px;
        width: 33.3333333333%;
    }
}

@media (max-width: 460px) {
    .referral-wrapper .referral-item {
        width: 50%;
    }
}

.referral-item:hover::after {
    opacity: 1;
    bottom: -18px;
}

.referral-item::after {
    content: "";
    bottom: -18px;
    left: 50%;
    width: 80px;
    height: 12px;
    background: radial-gradient(#ddd, #ffffff);
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);
    opacity: 0;
}

.referral-item .referral-content {
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
}

.referral-item .referral-content .referral-amount {
    font-size: 2.625rem;
    line-height: 1;
    font-weight: 700;
}

@media (max-width: 991px) {
    .referral-item .referral-content .referral-amount {
        font-size: 2.25rem;
    }
}

.referral-item .referral-content .referral-caption {
    font-size: 1.125rem;
    font-weight: 5005;
    margin-top: 10px;
}

@media (max-width: 991px) {
    .referral-item .referral-content .referral-caption {
        font-size: 1rem;
        margin-top: 0.3125rem;
    }
}
/* referral section css end */
/* counter section css start */
@media (max-width: 991px) {
    .counter-section {
        padding-top: 1.875rem;
        padding-bottom: 0.3125rem;
    }
}

@media (max-width: 767px) {
    .counter-section {
        padding-bottom: 0.9375rem;
    }
}

.counter-section::before {
    content: "";
    left: 0;
    top: 0;
    height: calc(100% + 2px);
    width: 30%;
    clip-path: polygon(0 0, 100% 0, 90% 100%, 0% 100%);
}

@media (max-width: 1865px) {
    .counter-section::before {
        width: 30%;
    }
}

@media (max-width: 1710px) {
    .counter-section::before {
        width: 28%;
    }
}

@media (max-width: 1530px) {
    .counter-section::before {
        width: 25%;
    }
}

@media (max-width: 991px) {
    .counter-section::before {
        display: none;
    }
}

@media (max-width: 1399px) {
    .counter-section .title {
        font-size: 1.875rem;
    }
}

@media (max-width: 1199px) {
    .counter-section .title {
        font-size: 1.75rem;
    }
}

@media (max-width: 991px) {
    .counter-section .title {
        color: #fff;
    }
}

.counter-wrapper div[class*=col]:last-child::after {
    display: none;
}

.counter-wrapper div[class*=col]::after {
    content: "";
    top: 0;
    right: 0;
    width: 1px;
    opacity: 0.15;
}

@media (max-width: 767px) {
    .counter-wrapper div[class*=col]::after {
        display: none;
    }
}

.counter-wrapper div[class*=col]:nth-child(odd)::after {
    top: 0;
    background: linear-gradient(to bottom, #fff, rgba(255, 255, 255, 0.137));
}

.counter-wrapper div[class*=col]:nth-child(even)::after {
    bottom: 0;
    background: linear-gradient(to top, #fff, rgba(255, 255, 255, 0.137));
}

.counter-item {
    padding: 1.875rem 0;
    z-index: 1;
}

@media (max-width: 767px) {
    .counter-item {
        padding: 0.625rem 0;
    }
}

.counter-item::before {
    content: "";
    top: 0;
    left: 0;
    z-index: -1;
}

.counter-item .counter-title {
    font-size: 2rem;
}

@media (max-width: 1399px) {
    .counter-item .counter-title {
        font-size: 1.5rem;
    }
}

@media (max-width: 1199px) {
    .counter-item .caption {
        font-size: 14px;
    }
}

@media (max-width: 991px) {
    .counter-item .caption {
        font-size: 0.875rem;
    }
}
/* counter section css end */


/* plan section css start */
.plan-item {
    position: relative;
    padding: 30px;
    background-color: #fff;
    border-radius: 8px;
    border: 1px solid #e5e5e5;
    height: 100%;
    display: flex;
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    z-index: 1;
    transition: all 0.3s;
    overflow: hidden;
    min-height: 200px;
}

.plan-el {
    position: absolute;
    top: 0;
    right: 0;
    z-index: -1;
    opacity: 0.15;
}

.plan-item::before {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    width: 200px;
    height: 100%;
    clip-path: polygon(65% 0, 100% 50%, 65% 100%, 0 100%, 0 0);
    background: var(--gradient-bg2);
    z-index: -1;
}

.plan-item::after {
    position: absolute;
    content: '';
    top: 0;
    left: 5px;
    width: 200px;
    height: 100%;
    clip-path: polygon(65% 0, 100% 50%, 65% 100%, 0 100%, 0 0);
    background: #d9ab3c;
    z-index: -2;
}

.plan-item:hover {
    transform: translateY(-10px);
}

.plan-name-area {
    display: flex;
    flex-flow: column;
    justify-content: center;
    width: 150px;
    text-align: center;
}

.plan-fatures {
    width: calc((100% / 3) - (150px / 3));
    display: flex;
    flex-flow: column;
    justify-content: center;
    padding-left: 55px;
    padding-right: 50px;
    position: relative;
    z-index: 1;
}

.plan-fatures::before,
.plan-fatures::after {
    position: absolute;
    content: '';
    top: -30px;
    right: -20px;
    width: 200px;
    height: calc(100% + 60px);
    clip-path: polygon(65% 0, 100% 50%, 65% 100%, 0 100%, 0 0);
}

.plan-fatures::before {
    background: #fff;
    z-index: -1;
}
.plan-fatures::after {
    background: #d9ab3c;
    z-index: -2;
    right: -22px;
}

.plan-rio {
    display: flex;
    flex-flow: column;
    justify-content: center;
    width: calc((100% / 3) - (150px / 3));
    padding-left: 80px;
    position: relative;
    z-index: 1;
}

.plan-rio::before,
.plan-rio::after {
    position: absolute;
    content: '';
    top: -30px;
    right: 0;
    width: 200px;
    height: calc(100% + 60px);
    clip-path: polygon(65% 0, 100% 50%, 65% 100%, 0 100%, 0 0);
}

.plan-rio::before {
    background: #fff;
    z-index: -1;
}
.plan-rio::after {
    background: #d9ab3c;
    z-index: -2;
    right: -2px;
}

.plan-action {
    width: calc((100% / 3) - (150px / 3));
    text-align: center;
    padding-left: 50px;
    display: flex;
    flex-flow: column;
    justify-content: center;
}


.plan-item .plan-name {
    text-align: center;
    font-size: 26px;
}

.plan-item .plan-percentage {
    text-align: center;
    font-family: var(--h-font);
}

.bg-transparent.plan-btn {
    font-size: 15px;
    position: relative;
    z-index: 1;
}

.bg-transparent.plan-btn::before,
.bg-transparent.plan-btn::after {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.bg-transparent.plan-btn::before {
    background-color: #fff;
    border-radius: 6px;
    z-index: -1;
    width: calc(100% - 2px);
    height: calc(100% - 2px);
    left: 1px;
    top: 1px;
}

.bg-transparent.plan-btn:hover::before {
    background: var(--gradient-bg);
}

.bg-transparent.plan-btn::after {
    background: var(--gradient-bg);
    border-radius: 6px;
    z-index: -2;
}

/* .plan-item .plan-percentage .plan-amount {
    font-size: 32px;
    font-weight: 600; 
}

.plan-item .plan-percentage .plan-status {
    font-size: 18px;
} */

.plan-item .plan-amount {
    font-family: var(--h-font);
    font-size: 26px;
    font-weight: 600; 
}

.plan-list li + li {
    margin-top: 5px;
}

.plan-list li {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    margin: -5px -10px;
    padding-left: 25px;
}

.plan-list li::before {
    position: absolute;
    left: 0;
    content: "\f00c";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    width: 20px;
    height: 20px;
    background-color: var(--main-color);
    color: #000;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 11px;
}

.plan-list li .caption {
    padding: 5px 10px;
}

.plan-list li .details {
    padding: 5px 10px;
}





/* two */
.plan-item.plan-item-two {
    flex-flow: column;
}

.plan-item.plan-item-two::before,
.plan-item.plan-item-two::after {
    clip-path: polygon(100% 0, 100% 50%, 50% 100%, 0 50%, 0 0);
    width: 100%;
    height: 153px;
}

.plan-item.plan-item-two::after {
    left: 0;
    height: 135px;
}

.plan-item-two .plan-name-area {
    margin-bottom: 55px;
}

.plan-item-two .plan-name-area,
.plan-item-two .plan-fatures,
.plan-item-two .plan-rio,
.plan-item-two .plan-action {
    width: 100%;
    padding: 0;
}

.plan-item-two .plan-fatures::before,
.plan-item-two .plan-fatures::after {
    display: none;
}

.plan-item-two .plan-fatures {
    margin-bottom: 30px;
}

.plan-item-two .plan-rio {
    text-align: center;
    margin-bottom: 15px;
}

.plan-item-two .plan-rio::before,
.plan-item-two .plan-rio::after {
    display: none;
}

@media (max-width: 1399px) {
    .plan-name-area {
        width: 106px;;
    }

    .plan-fatures,
    .plan-rio,
    .plan-action {
        width: calc((100% / 3) - (150px / 3));
    }

    .plan-item::before {
        width: 160px;
    }
    .plan-item::after {
        width: 159px;
    }

    .plan-fatures {
        padding-left: 48px;
        padding-right: 35px;
    }
    .plan-list li {
        padding-left: 20px;
        font-size: 15px;
    }

    .plan-rio {
        padding-left: 55px;
    }
}

@media (max-width: 1199px) {
    .plan-item {
        flex-flow: column;
    }
    
    .plan-item::before,
    .plan-item::after {
        clip-path: polygon(100% 0, 100% 50%, 50% 100%, 0 50%, 0 0);
        width: 100%;
        height: 133px;
    }

    .plan-item::after {
        left: 0;
        height: 135px;
    }
    
    .plan-name-area {
        margin-bottom: 55px;
    }

    .plan-name-area,
    .plan-fatures,
    .plan-rio,
    .plan-action {
        width: 100%;
        padding: 0;
    }

    .plan-fatures::before,
    .plan-fatures::after {
        display: none;
    }

    .plan-fatures {
        margin-bottom: 30px;
    }

    .plan-rio {
        text-align: center;
        margin-bottom: 15px;
    }
    
    .plan-rio::before,
    .plan-rio::after {
        display: none;
    }
}
/* plan section css end */


/* how work section css start */

@media (max-width: 991px) {
    .work-section {
        overflow: hidden;
    }
}

.work-section {
    z-index: 1;
}

.work-section::before {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #fff;
    opacity: 0.8;
    z-index: -1;
}

.work-section .man-with-dollar {
    bottom: 0;
    left: 0;
}

.work-section .man-with-dollar img {
    max-height: 300px;
}

.work-item {
    padding: 2.5rem 1.875rem;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
}

@media (max-width: 991px) {
    .work-item {
        padding: 1.5625rem;
        background-color: #fff;
        border: 1px solid #cbcbcb;
        border-radius: 8px;
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
        -ms-border-radius: 8px;
        -o-border-radius: 8px;
    }
}

.work-item .work-number {
    width: 55px;
    height: 55px;
    font-weight: 500;
    font-size: 1.5rem;
}

.work-item .work-content {
    margin-top: 1.5625rem;
}

/* how work section css end */
/* faq section css start */
.faq-section {
    position: relative;
    z-index: 1;
}

.faq-section::before {
    position: absolute;
    content: '';
    inset: 0;
    background-color: #fff;
    opacity: 0.85;
    z-index: -1;
}

.accordion-item + .accordion-item {
    margin-top: 1.25rem;
}

.accordion-item {
    box-shadow: 0 5px 20px rgba(7, 5, 0, 0.1);
    border-radius: 5px !important;
    -webkit-border-radius: 5px !important;
    -moz-border-radius: 5px !important;
    -ms-border-radius: 5px !important;
    -o-border-radius: 5px !important;
}

.accordion-item .accordion-header {
    padding: 0 1.25rem;
}

.accordion-item .accordion-button {
    border-bottom: 1px solid transparent;
    padding-left: 35px !important;
}

.accordion-item .accordion-button::after {
    display: none;
}

.accordion-item .accordion-button::before {
    content: "\f067";
    top: 21px;
    left: 0;
    width: 25px;
    height: 25px;
    background-color: #E6F0F8;
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    font-size: 0.875rem;
}

.accordion-item .accordion-button[aria-expanded=true] {
    border-bottom-color: rgba(203, 203, 203, 0.45);
}

.accordion-item .accordion-button[aria-expanded=true]::before {
    content: "\f068";
}

.accordion-item .accordion-body {
    padding: 1.25rem 1.25rem 1.25rem 3.4375rem;
}

.faq-thumb img {
    max-height: 500px;
}

/* faq section css end */
/* investor section css start */
.investor-section::before {
    content: "";
    top: 0;
    right: -18%;
    width: 35%;
    height: 100%;
    background: linear-gradient(to right, rgba(0, 0, 0, 0.02), rgba(0, 0, 0, 0.04));
    border-radius: 20px;
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    -ms-border-radius: 20px;
    -o-border-radius: 20px;
    -webkit-transform: rotate(-30deg);
    -ms-transform: rotate(-30deg);
    transform: rotate(-30deg);
}

.investor-item:hover .investor-content::after {
    top: -25px;
    opacity: 0.25;
}

.investor-item .investor-thumb {
    width: 178px;
    height: 200px;
    overflow: hidden;
    display: inline-block;
    -webkit-mask-repeat: no-repeat;
    mask-repeat: no-repeat;
    -webkit-mask-size: 100% 100%;
    mask-size: 100% 100%;
    -webkit-mask-image: url(../../images/hex-shape.png);
    mask-image: url(../../images/hex-shape.png);
    -webkit-mask-position: center center;
    mask-position: center center;
    -webkit-mask-repeat: no-repeat;
    mask-repeat: no-repeat;
    margin-left: auto;
    margin-right: auto;
}

.investor-item .investor-thumb-inner {
    width: 178px;
    height: 200px;
}

.investor-item .investor-content {
    margin-top: 0.9375rem;
}

.investor-item .investor-content::after {
    content: "";
    top: -20px;
    left: 50%;
    width: 100px;
    height: 15px;
    margin-left: -50px;
    background: radial-gradient(circle, var(--main-color) 0%, rgba(28, 142, 106, 0) 70%, rgba(0, 212, 255, 0) 100%);
    filter: blur(5px);
    opacity: 0;
}

.investor-item .investor-content ul li a {
    padding: 0 8px;
}

.investor-slider .slick-list {
    margin: -0.9375rem;
}

.investor-slider .single-slide {
    padding: 0.9375rem;
}

/* investor section css end */
/* transaction section css start */

.transaction-section {
    z-index: 1;
}

.transaction-section::before {
    position: absolute;
    content: '';
    inset: 0;
    background-color: #fff;
    opacity: 0.85;
    z-index: -2;
}

.transaction-wrapper {
    padding: 1.875rem;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
}

.transaction-wrapper-top {
    justify-content: space-between;
}

.transaction-tabs {
    background-color: transparent;
    border: 1px solid #e5e5e5;
    border-radius: 8px;
    overflow: hidden;
    padding: 3px;
}

.transaction-tabs .nav-item .nav-link {
    background-color: transparent;
    border-radius: 6px;
    color: #777;
    font-size: 14px;
    padding: 5px 15px;
}

.transaction-tabs .nav-item .nav-link.active {
    background-color: var(--main-color);
    color: #000;
}

@media (max-width: 575px) {
    .transaction-tabs {
        margin-top: 10px;
    }
    .transaction-wrapper {
        padding: 20px;
    }
    .transaction-tabs .nav-item .nav-link {
        padding: 5px 12px;
    }
}

/* transaction section css end */

/* testimonial section css start */
.testimonial-section {
    overflow: hidden;
}

.testimonial-item {
    padding: 4.0625rem 1.875rem 1.875rem 1.875rem;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.testimonial-item::after {
    content: "";
    top: 23px;
    left: 31px;
    width: 32px;
    height: 32px;
    background-image: url("../../images/quote.png");
    background-size: 32px;
}

.testimonial-item .testimonial-client {
    margin-top: 1.25rem;
}

.testimonial-item .testimonial-client .thumb {
    width: 50px;
    height: 50px;
}

.testimonial-item .testimonial-client .content {
    width: calc(100% - 50px);
    padding-left: 1.25rem;
}

.testimonial-item .testimonial-client .content .name {
    font-size: 1.1875rem;
}

.testimonial-item .testimonial-client .content p {
    font-size: 0.875rem;
}

.testimonial-slider .slick-list {
    margin: -1.5625rem -1.25rem;
}

.testimonial-slider .single-slide {
    padding: 1.5625rem 1.25rem;
}

/* testimonial section css end */
/* blog section css start */
.blog-section {
    position: relative;
    z-index: 1;
}

.blog-section::before {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #fff;
    opacity: 0.8;
    z-index: -1;
}

.blog-item {
    padding: 0.625rem;
    border: 1px solid rgba(203, 203, 203, 0.35);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
}

.blog-item .blog-thumb {
    height: 275px;
}

.blog-item .blog-content {
    padding: 1.25rem;
}

.blog-item .blog-title a {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
}

.blog-meta {
    margin: -0.3125rem -0.625rem;
}

.blog-meta li {
    font-size: 0.9375rem;
    padding: 0.3125rem 0.625rem;
}

.blog-btn {
    justify-content: space-between;
    padding-top: 0.9375rem;
    margin-top: 1.5625rem;
    border-top: 1px solid rgba(0, 0, 0, 0.1);
}

/* blog section css end */
/* blog details section css start */
.blog-details-img {
    max-height: 500px;
}

.social-links-btn {
    color: #777;
}

.single-comment {
    display: flex;
    flex-wrap: wrap;
}

.single-comment + .single-comment {
    margin-top: 25px;
}

.comment-thumb {
    width: 80px;
    height: 80px;
    background-color: #ddd;
    border-radius: 6px;
    overflow: hidden;
    transform: translateY(8px);
}

.comment-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    -o-object-fit: cover;
}

.comment-content {
    width: calc(100% - 80px);
    padding-left: 25px;
}

.blog-widget {
    padding: 1.5625rem;
}

.blog-widget .blog-widget-title {
    margin-bottom: 0.9375rem;
}

.short-post-wrapper .short-post {
    padding: 1.25rem 0;
    border-bottom: 1px solid rgba(203, 203, 203, 0.35);
}

.short-post-wrapper .short-post:last-child {
    padding-bottom: 0;
    border-bottom: none;
}

.short-post .thumb {
    width: 80px;
    height: 55px;
}

@media (max-width: 1199px) {
    .short-post .thumb {
        width: 65px;
        height: 50px;
    }
}

.short-post .content {
    width: calc(100% - 80px);
    padding-left: 1.25rem;
}

@media (max-width: 1199px) {
    .short-post .content {
        width: calc(100% - 65px);
    }
}

.short-post .content .title a {
    font-size: 1.125rem;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
}

/* blog details section css end */

/* subscribe section start */
.subscribe-section {
    padding: 50px 0;
    position: relative;
    z-index: 1;
}

.subscribe-section::before {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #fff;
    opacity: 0.65;
    z-index: -1;
}

.subscribe-form {
    display: flex;
}
.subscribe-form .form-control {
    height: 55px;
}
.subscribe-form button {
    width: 180px;
    border: none;
    padding: 10px;
    background-color: var(--main-color);
    color: #000;
    border-radius: 0 5px 5px 0;
    -webkit-border-radius: 0 5px 5px 0;
    -moz-border-radius: 0 5px 5px 0;
    -ms-border-radius: 0 5px 5px 0;
    -o-border-radius: 0 5px 5px 0;
    margin-left: -2px;
}

@media (max-width: 1199px) {
    .subscribe-el {
        left: 0;
    }
}

@media (max-width: 991px) {
    .subscribe-el img {
        max-height: 265px;
    }
}

@media (max-width: 767px) {
    .subscribe-el img {
        max-height: 120px;
    }
}
/* subscribe section end */

/* contact section css start */
.contact-item {
    padding: 1.5625rem;
    border: 1px solid #cbcbcb;
}

.contact-item:hover {
    box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
}

.contact-item .icon {
    width: 75px;
    height: 75px;
    font-size: 1.75rem;
}

.contact-item .content {
    margin-top: 1.25rem;
}

.contact-item .content .caption {
    color: #b3b3b3;
}

.map-area {
    filter: grayscale(1);
}

.map-area iframe {
    width: 100%;
    height: 500px;
}

/* contact section css end */



/* auth section css start */
.auth-section {
    display: flex;
    flex-wrap: wrap;
    min-height: 100vh;
}
.auth-wrapper {
    min-height: 100vh;
    width: 650px;
    display: flex;
    flex-flow: column;
    justify-content: space-between;
    padding: 30px 70px;
    position: relative;
    z-index: 1;
}
.auth-wrapper::before {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: var(--body-bg);
    z-index: -1;
}

.auth-top-part {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
}
.auth-logo img {
    max-width: 175px;
    max-height: 65px;
}
.auth-body-part {
    padding: 50px 0;
}

.auth-thumb-area {
    min-height: 100vh;
    padding: 50px;
    width: calc(100% - 650px);
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: var(--secondary-color);
}
.auth-thumb img {
    max-height: 750px;
}
.auth-section-two .auth-wrapper {
    width: 750px;
    padding: 30px 50px;
}
.auth-section-two .auth-thumb-area {
    width: calc(100% - 750px);
}

@media (max-width: 1199px) {
    .auth-wrapper {
        width: 600px;
    }
    .auth-thumb-area {
        width: calc(100% - 600px);
    }
    .auth-thumb img {
        max-height: 550px;
    }
    .auth-section-two .auth-wrapper {
        width: 565px;
        padding: 30px;
    }
    .auth-section-two .auth-thumb-area {
        width: calc(100% - 565px);
    }
}

@media (max-width: 991px) {
    .auth-wrapper {
        width: 400px;
    }
    .auth-thumb-area {
        width: calc(100% - 400px);
    }
    .auth-thumb img {
        max-height: 400px;
    }
    .auth-section-two .auth-wrapper {
        width: 100%;
    }
    .auth-section-two .auth-thumb-area {
        display: none;
    }
    .auth-wrapper {
        padding: 30px;
    }
}

@media (max-width: 767px) {
    .auth-wrapper {
        width: 100%;
        padding: 30px;
    }
    .auth-thumb-area {
        display: none;
    }
}

@media (max-width: 1199px) {}

@media (max-width: 1199px) {}

@media (max-width: 1199px) {}
/* auth section css end */


/* account section css start */
.account-wrapper {
    padding: 2.5rem;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

.account-wrapper .title {
    font-size: 2rem;
    margin-bottom: 1.25rem;
}

/* account section css end */
/* user header css start */
.user-header {
    position: fixed;
    top: 0;
    left: 0;
    justify-content: space-between;
    padding: 0.625rem 1.875rem;
    z-index: 2;
}

.user-header .site-logo {
    opacity: 0;
    visibility: hidden;
}

@media (max-width: 1199px) {
    .user-header .site-logo {
        opacity: 1;
        visibility: visible;
    }
}

.sidebar-toggeler {
    display: none;
}

@media (max-width: 1199px) {
    .sidebar-toggeler {
        display: inline-flex;
        background-color: #ffffff;
        color: #fff;
        border: 1px solid #cbcbcb;
        width: 40px;
        height: 35px;
        justify-content: center;
        align-items: center;
        font-size: 1.25rem;
    }
}

@media (max-width: 1199px) {
    .user-dropdown {
        display: none;
    }
}

.user-dropdown .user-btn {
    background-color: transparent;
}

.user-dropdown .user-btn::after {
    border-top-color: #fff;
}

.user-dropdown .user-btn img {
    width: 35px;
    height: 35px;
    margin-right: 0.375rem;
}

.dropdown-menu {
    border: 1px solid #cbcbcb;
}

.dropdown-menu .dropdown-item {
    font-size: 0.9375rem;
}

.dropdown-menu .dropdown-item:hover {
    background-color: #ffffff;
}

/* user header css end */
/* user sidebar css start */
.user-sidebar {
    position: fixed;
    top: 0;
    left: 0;
    width: 270px;
    height: 100vh;
    z-index: 3;
}

.user-sidebar.active {
    left: 0;
}

@media (max-width: 1199px) {
    .user-sidebar {
        left: -100%;
        border-right: 1px solid #cbcbcb;
    }
}

.user-sidebar .site-logo {
    padding: 0.625rem 1.25rem;
    margin-bottom: 1.875rem;
}

.sidebar-menu {
    max-height: calc(100vh - 150px);
    overflow-y: auto;
}

.sidebar-menu .menu-caption {
    font-size: 0.875rem;
    color: #9d9d9d;
    padding: 0.375rem 1.25rem;
    font-weight: 500;
}

.sidebar-menu .menu-caption.border-top {
    border-top-color: rgba(255, 255, 255, 0.1) !important;
    padding-top: 1.25rem;
    margin-top: 0.9375rem;
}

.sidebar-menu li a {
    color: #c0c0c0;
    padding: 0.625rem 1.5625rem;
    border-left: 3px solid transparent;
    font-size: 0.9375rem;
}

.sidebar-menu li a i {
    font-size: 1.1875rem;
}

.sidebar-menu li a.active {
    background-color: #F7C70B;
    border-left-color: #F7C70B;
}

.sidebar-menu {
    scrollbar-width: thin;
    scrollbar-color: rgba(255, 255, 255, 0.05) #070500;
}

.sidebar-menu::-webkit-scrollbar {
    width: 12px;
}

.sidebar-menu::-webkit-scrollbar-track {
    background: #070500;
}

.sidebar-menu::-webkit-scrollbar-thumb {
    background-color: rgba(255, 255, 255, 0.05);
    border-radius: 20px;
    border: 3px solid #070500;
}

/* dashboard main css start */
.dashbaord-main {
    padding: 6.25rem 1.875rem 1.875rem 18.75rem;
}

@media (max-width: 1199px) {
    .dashbaord-main {
        padding-left: 1.875rem;
    }
}

@media (max-width: 575px) {
    .dashbaord-main {
        padding: 6.25rem 1.25rem 1.25rem 1.25rem;
    }
}

.dashboard-top {
    margin-bottom: 2.5rem;
}

.d-card {
    padding: 1.5625rem;
    border: 1px solid #cbcbcb;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
}

.d-card:hover {
    border-color: #F7C70B;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

.d-card i {
    bottom: -18px;
    right: -18px;
    font-size: 90px;
    line-height: 1;
    opacity: 0.1;
}

.d-card .d-card-amount {
    margin-top: 0.9375rem;
}

@media (max-width: 1550px) {
    .d-card .d-card-amount {
        font-size: 1.5rem;
    }
}

.user-account-number {
    position: relative;
    padding: 30px;
    border-radius: 10px;
    background: linear-gradient(to right, #4272C7, #70a1f5);
    z-index: 1;
}
.card-dot [class*="dot-"] {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    /* background-color: var(--main-color); */
    background-color: #fff;
    opacity: 0.45;
}
.card-dot .dot-2 {
    background-color: #fff;
    opacity: 0.1;
    transform: translateX(-15px);

}
.user-account-number i {
    position: absolute;
    top: 0;
    right: 0;
    z-index: -1;
    color: #fff;
    opacity: 0.1;
    font-size: 150px;
    line-height: 1;
}
.user-account-number .caption {
    color: #fff;
}
.user-account-number .acc-number {
    color: #fff;
    font-size: 32px;
    margin: 0;
}

.d-box-one {
    background-color: var(--body-bg);
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);
    position: relative;
    overflow: hidden;
    z-index: 1;
}

.d-box-one i {
    position: absolute;
    bottom: 10px;
    right: 10px;
    z-index: -1;
    font-size: 56px;
    opacity: 0.05;
}

.d-box-one .top {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
}
.d-box-one .top span {
    font-weight: 500;
}

.d-box-one-amount {
    margin-top: 30px;
    margin-bottom: 0;
}

.d-box-two {
    padding: 25px;
    background-color: var(--body-bg);
    border-radius: 8px;
    position: relative;
}

.d-box-two-icon {
    width: 55px;
    height: 55px;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(to left, #FF9D7A, #fdbda5);
    box-shadow: 0 5px 20px rgba(255, 157, 122, 0.5);
    border-radius: 10px;
    color: #fff;
    font-size: 22px;
    margin-bottom: 35px;
}
.d-box-two-amount {
    margin-top: 5px;
    margin-bottom: 0;
    font-size: 22px;
}

.d-box-two .link-btn {
    position: absolute;
    bottom: 15px;
    right: 18px;
    transform: rotate(45deg);
    color: #777;
}

.d-box-two .link-btn:hover {
    color: var(--main-color);
}

.d-box-two-wrapper div[class*="col"]:nth-of-type(4n + 2) .d-box-two-icon {
    background: linear-gradient(to left, #5ecbdf, #96e2f0);
    box-shadow: 0 5px 20px rgba(151, 223, 235, 0.5);
}

.d-box-two-wrapper div[class*="col"]:nth-of-type(4n + 3) .d-box-two-icon {
    background: linear-gradient(to left, #4272C7, #70a1f5);
    box-shadow: 0 5px 20px rgba(66, 114, 199, 0.5);
}

.d-box-two-wrapper div[class*="col"]:nth-of-type(4n + 4) .d-box-two-icon {
    background: linear-gradient(to left, #66CB7F, #8bf5a5);
    box-shadow: 0 5px 20px rgba(102, 203, 127, 0.5);
}

.d-box-three {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
}

@media (max-width: 767px) {
    .d-box-three {
        padding: 15px;
    }
}

.d-box-three .icon {
    width: 55px;
    height: 55px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 5px;
    font-size: 24px;
    position: relative;
    color: var(--main-color);
}

.d-box-three .icon::before {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #fff;
    opacity: 0.2;
    border-radius: 5px;
}

.d-box-three .content {
    width: calc(100% - 55px);
    padding-left: 20px;
}

.d-box-three .content .title {
    font-size: 22px;
}

.text-small {
    font-size: 14px;
}

.d-plan-notice {
    padding: 15px;
    background-color: #E5EAF0;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
    text-align: center;
}

.d-plan-notice p,
.d-plan-notice a {
    font-size: 14px;
}
.d-plan-notice a {
    color: #000 !important;
    font-weight: 500;
}

.single-reply {
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
}

.single-reply + .single-reply {
    margin-top: 20px;
}
/* dashboard main css end */


/* dashboard-section css start */

.dashboard-main {
    min-height: 100vh;
    background-color: #E5EAF0;
}

.user-toggle-menu {
    display: flex;
    align-items: center;
    padding: 5px 10px;
    background-color: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.15);
    border-radius: 5px;
}

.header-inner-pages .user-toggle-menu {
    background-color: rgba(0, 0, 0, 0.05);
    border: 1px solid rgba(0, 0, 0, 0.15);
    font-size: 15px;
}

.dropdown-toggle::after {
    border-top-color: var(--p-color);
}

.dropdown-menu {
    background-color: var(--secondary-color);
    border: 1px solid rgba(255, 255, 255, 0.15);
    box-shadow: 0 10px 10px rgba(0,0,0,0.1);
}

.dropdown-menu li a {
    color: #fff;
}

.header-inner-pages .user-menu li a {
    color: var(--p-color);
}

.header-inner-pages .dropdown-menu {
    background-color: #fff;
}
.header-inner-pages .dropdown-menu li a {
    color: var(--p-color);
}

.user-toggle-menu img {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    border: 2px solid #fff;
}

@media (max-width: 575px) {
    .user-toggle-menu img {
        display: none;
    }
    .user-toggle-menu span {
        margin: 0 !important;
    }
}

.dashboard-body-part {
    padding: 100px 20px 50px 335px;
}

.d-sidebar {
    position: fixed;
    min-height: calc(100vh - 75px);
    max-height: calc(100vh - 75px);
    display: flex;
    flex-flow: column;
    justify-content: space-between;
    top: 75px;
    left: 0;
    width: 310px;
    padding: 20px 0;
    background-color: #fff;
    overflow: hidden;
    z-index: 1;
    overflow: auto;
}

.sidebar-open-btn {
    border: none;
    background-color: var(--secondary-color);
    font-size: 22px;
    padding: 0;
    width: 35px;
    height: 35px;
    display: none;
    align-items: center;
    justify-content: center;
    margin-right: 20px;
}

.sidebar-open-btn i.bi-arrow-bar-left {
    display: none;
}

.sidebar-open-btn.active i.bi-arrow-bar-left {
    display: inline-block;
}

.sidebar-open-btn.active i.bi-arrow-bar-right {
    display: none;
}

@media (max-width: 991px) {
    .sidebar-open-btn {
        display: flex;
    }
}

* {
    scrollbar-width: thin;
    scrollbar-color: rgba(255,255,255, 0.1) var(--secondary-color);
  }
  *::-webkit-scrollbar {
    width: 12px;
  }
  
  *::-webkit-scrollbar-track {
    background: var(--secondary-color);
  }
  
  *::-webkit-scrollbar-thumb {
    background-color: rgba(255,255,255, 0.1);
    border-radius: 20px;
    border: 3px solid var(--secondary-color);
  }


.d-sidebar-menu li:last-child a { 
    border-bottom: none;
    padding-bottom: 0;
}

.d-sidebar-menu li.active > a {
    background: #e5eaf0;
    color: #242424;
    border-bottom: none;
}

.d-sidebar-menu li a svg {
    margin-right: 15px;
    width: 22px;
}

.d-sidebar-menu li a svg path,
.d-sidebar-menu li a svg rect,
.d-sidebar-menu li a svg polygon {
    fill: #00000012;
}

.d-sidebar-menu li a.active svg path,
.d-sidebar-menu li a.active svg rect,
.d-sidebar-menu li a.active svg polygon {
    fill: #4c4c4c1a;
}

.d-sidebar-menu li a svg {
    margin-right: 15px;
    width: 22px;
}

.d-sidebar-menu li a svg {
    margin-right: 10px;
}

.submenu {
    display: none;
    background-color: #f1f1f1;
}

.d-sidebar-menu .submenu li a {
    padding-left: 49px !important;
}

.d-sidebar-menu li a {
    display: block;
    padding: 12px 20px !important;
    color: #777;
}

.d-plan-notice {
    padding: 15px;
    background-color: #E5EAF0;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
    text-align: center;
}

.d-plan-notice p,
.d-plan-notice a {
    font-size: 14px;
}
.d-plan-notice a {
    color: var(--main-color);
}

.has_submenu {
    position: relative;
}
.has_submenu::after {
    position: absolute;
    content: "\f078";
    top: 16px;
    right: 20px;
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    font-size: 12px;
}

.has_submenu.active .submenu {
    display: block;
}

#header.header-inner-pages {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background: #fff;
    box-shadow: 0 3px 4px rgba(0,0,0,0.05);
}

#header.header-inner-pages {
    padding: 10px 0;
    background: #fff !important;
    box-shadow: none;
}
.header-inner-pages .changeLang {
    color: var(--p-color);
    border: 1px solid rgba(0,0,0,0.15);
}

@media (max-width: 575px) {
    .header-inner-pages .changeLang {
        display: none;
    }
}
#header .logo img {
    max-height: 55px;
}

.mobile-bottom-menu-wrapper {
    display: none;
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: #fff;
    box-shadow: 0 -10px 5px rgba(0,0,0,0.06);
    z-index: 9999;
}

.mobile-bottom-menu {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
}

.mobile-bottom-menu li {
    width: 20%;
}

.mobile-bottom-menu li a {
    padding: 12px 6px;
    text-align: center;
    display: block;
    color: #777;
}

.mobile-bottom-menu li a.active {
    color: #000;
}

.mobile-bottom-menu li a.active i::after {
    opacity: 1;
}

.mobile-bottom-menu li a i {
    position: relative;
    z-index: 1;
}

.mobile-bottom-menu li a i::after {
    position: absolute;
    content: '';
    top: -5px;
    left: -7px;
    width: 30px;
    height: 30px;
    background-color: var(--main-color);
    border-radius: 50%;
    z-index: -1;
    opacity: 0;
}

.mobile-bottom-menu li a span {
    display: block;
    font-size: 12px;
    font-weight: 500;
}

.mobile-box {
    text-align: center;
}

.mobile-box .title {
    font-size: 13px;
}

.mobile-box i {
    width: 55px;
    height: 55px;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(to left, #FF9D7A, #fdbda5);
    box-shadow: 0 5px 20px rgba(255, 157, 122, 0.5);
    border-radius: 50%;
    color: #fff;
    font-size: 18px;
    margin-bottom: 10px;
}

.mobile-box-wrapper div[class*="col"]:nth-of-type(4n + 2) .mobile-box i {
    background: linear-gradient(to left, #5ecbdf, #96e2f0);
    box-shadow: 0 5px 20px rgba(151, 223, 235, 0.5);
}

.mobile-box-wrapper div[class*="col"]:nth-of-type(4n + 3) .mobile-box i {
    background: linear-gradient(to left, #4272C7, #70a1f5);
    box-shadow: 0 5px 20px rgba(66, 114, 199, 0.5);
}

.mobile-box-wrapper div[class*="col"]:nth-of-type(4n + 4) .mobile-box i {
    background: linear-gradient(to left, #66CB7F, #8bf5a5);
    box-shadow: 0 5px 20px rgba(102, 203, 127, 0.5);
}

.link-item {
    position: relative;
}

.item-link {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}

.tab-btn-group {
    display: inline-flex;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    flex-wrap: wrap;
}
.tab-btn {
    padding: 10px 20px;
    border-bottom: 1px solid transparent;
    margin-bottom: -1px;
    color: #777;
}
.tab-btn.active {
    border-color: var(--main-color);
    color: var(--main-color);
}

.tab-btn .num {
    padding: 3px 5px;
    background-color: var(--main-color);
    color: var(--body-bg);
    font-size: 14px;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    -o-border-radius: 3px;
    line-height: 1;
}

.payment-box {
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    height: 100%;
    display: flex;
    flex-flow: column;
}

.payment-box-thumb img {
    max-height: 150px;
}

.payment-box-content {
    margin-top: auto;
    padding-top: 20px;
}

.btn-primary {
    background-color: #6777ef;
    border-color: #6777ef;
}
.btn-primary:hover {
    background-color: #4759df;
    border-color: #4759df;
}

.btn-info {
    background-color: #0bb2d4;
    border-color: #0bb2d4;
}
.btn-info:hover {
    background-color: #0a9ebc;
    border-color: #0a9ebc;
}

.btn-warning {
    background-color: #eb6709;
    border-color: #eb6709;
}
.btn-warning:hover {
    background-color: #dd6008;
    border-color: #dd6008;
}

.btn-danger {
    background-color: #ff4c52;
    border-color: #ff4c52;
}
.btn-danger:hover {
    background-color: #f63d43;
    border-color: #f63d43;
}

.btn-success {
    background-color: #11c26d;
    border-color: #11c26d;
}
.btn-success:hover {
    background-color: #0da65c;
    border-color: #0da65c;
}

.modal button.close {
    width: 30px;
    height: 30px;
    background-color: #f63d43;
    color: #fff;
    opacity: 1;
    padding: 0;
}

.mobile-page-header {
    display: none;
}

.changeLang {
    background-color: transparent;
    border: none;
    border-left: 1px solid rgba(255,255,255, 0.1);
    color: #fff;
    padding-left: 10px;
    font-size: 14px;
}

.changeLang option {
    color: #363636;
}
/* dashboard-section css end */


/* responsive dashboard css start */
@media (max-width: 991px) {

    .mobile-page-header {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        margin: -5px -10px;
        padding-bottom: 20px;
    }

    .mobile-page-header .title {
        padding: 5px 10px;
        font-size: 17px;
    }

    .mobile-page-header .back-btn {
        padding: 5px 10px;
        color: #777;
        font-size: 14px;
    }

    #header.header-inner-pages {
        padding: 0;
        display: none;
    }
    .d-sidebar {
        display: none;
    }
    .dashboard-body-part {
        padding-top: 20px;
        padding-left: 15px;
        padding-bottom: 100px;
    }

    .user-account-number {
        padding: 20px;
    }

    .card-dot [class*="dot-"] {
        width: 25px;
        height: 25px;
    }

    .user-account-number .caption {
        font-size: 13px;
    }

    .user-account-number .acc-number {
        font-size: 22px;
    }

    .d-box-three {
        padding: 13px;
    }

    .d-box-three .icon {
        width: auto;
        height: auto;
        line-height: 1;
        background-color: transparent;
        margin-bottom: 12px;
    }
    
    .d-box-three .icon::before {
        background-color: transparent;
    }

    .d-box-three .content {
        width: 100%;
        padding-left: 0;
    }

    .d-box-three .content p {
        font-size: 12px;
    }

    .d-box-three .content .title {
        font-size: 16px;
    }

    .mobile-bottom-menu-wrapper {
        display: block;
    }

    .header-inner-pages .user-toggle-menu {
        color: #fff;
        border: 1px solid rgba(255,255,255,0.1);
        font-size: 14px;
    }

    .user-toggle-menu span {
        color: #fff;
    }

    .payment-box {
        padding: 12px;
    }

    .payment-box-content .btn {
        padding: 6px 10px !important;
    }

    .form-control.form-control-sm {
        font-size: 12px;
        padding: 5px 10px;
    }

    .table .no-data-table {
        padding: 10px 15px !important;
        text-align: center !important;
    }
}

@media (max-width: 575px) {
    .tab-btn {
        padding: 4px 15px;
        font-size: 14px;
    }
    .site-table tbody tr td,
    .list-group-item {
        font-size: 14px;
    }
}
/* responsive dashboard css end */
</style>