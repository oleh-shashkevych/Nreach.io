<?php 

/**

 * Template Name: Template - HOME NEW

 */



get_header(); 



global $theme;



// --------------------------------

// CONTENT GOES BELOW THIS SECTION. Should contain all the content from <main> tag

// --------------------------------

?>

<style>
    /* Standart */
    *, *::before, *::after{
        box-sizing: border-box;
    }

    :root {
        --transition: all .2s ease-in;
    }

    html {
        overflow-x: hidden;
    }

    .container {
        max-width: 1024px;
        margin: 0 auto;
        padding: 0 32px;
    }

    /* Header */
    header {
        padding: 15px 0;
    }

    .boxHeader {
        max-width: 1280px;
        padding: 0 32px;
        margin: 0 auto;
    }

    .boxLogo {
        width: 90px;
    }

    .menuTop>ul>li {
        margin: 0 35px;
    }

    .menuTop>ul>li>a {
        font-size: 15px;
    }

    .boxHeader_sign a,
    .sectionTop_link a {
        padding: 12px 18px;
        font-size: 15px;
        border-radius: 12px;
        margin-left: 12px !important;
    }

    .sectionTop_link a {
        background-color: #fff;
    }

    /* Hero */
    .n-hero {
        background: linear-gradient(180deg, #0F0068 40%, #3834DA 100%);
        padding-top: 100px;
        min-height: 920px; 
        position: relative;       
    }

    .n-hero .container {
        position: relative;
        z-index: 2;
    }

    .n-hero__inner h1 {
        font-size: 51px;
        color: #ffffff;
        font-weight: 700;
        line-height: 1.2;
        text-align: center;
        margin-bottom: 24px;
    }
    
    .n-hero__inner p {
        max-width: 630px;
        margin: 0 auto;
        color: #fff;
        text-align: center;
        font-size: 22.5px;
        line-height: 1.4;
        margin-bottom: 24px;
    }

    .n-hero__inner > div {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .n-hero__inner a {
        padding: 16px 30px;
        background: #D1FF66;
        border-radius: 16px;
        font-weight: 700;
        font-size: 18px;
        text-align: center;
        color: #000000;
        text-decoration: none;
        transition: var(--transition);
    }

    .n-hero__inner a:hover {
        transform: scale(1.1);
    }

    /* Marquee */
    .marquee {
        display: flex;
        width: 100%;
        overflow: hidden;
        mask-image: linear-gradient(to right, transparent, black 25%, black 75%, transparent);
        padding: 30px 0;
    }

    .marquee__list {
        display: flex;
        animation: marquee 35s linear infinite;
    }

    .marquee:hover .marquee__list {
        animation-play-state: paused;
    }

    @keyframes marquee {
        100% {
            transform: translate(-100%);
        }
    }

    .marquee__item {
        position: relative;
        margin-inline-end: 2rem;
        padding: 0;
        height: 100%;
        width: 10rem;
        max-width: 80vw;
        flex: 0 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Benefits */
    .n-benefits {
        background-color: rgba(241, 239, 255, 1);
        padding: 120px 0;
        margin-bottom: 120px;
    }

    .n-benefits__heading {
        margin-bottom: 40px;
    }

    .n-benefits__heading h2 {
        font-size: 40.5px;
        line-height: 1.15;
        font-weight: 700;
        color: #000;
        max-width: 630px;
        margin: 0 auto 18px 0;
    }

    .n-benefits__heading p {
        font-size: 21px;
        line-height: 1.4;
        font-weight: 500;
    }

    .n-benefits__grid {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        gap: 30px;
    }

    .n-benefits__item-icon {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 18px;
    }

    .n-benefits__item-text {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .n-benefits__item-text h3 {
        font-size: 24px;
        line-height: 1.2;
        font-weight: 700;
        color: #000;
    }

    .n-benefits__item-text p {
        font-size: 13.5px;
        line-height: 1.4;
    }

    /* Platform */
    .n-platform {
        margin-bottom: 120px;
    }

    .n-platform__heading {
        margin-bottom: 60px;
    }

    .n-platform__heading h2 {
        font-size: 40.5px;
        line-height: 1.15;
        font-weight: 700;
        color: #000;
    }

    .n-platform__grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
        align-items: center;
    }

    .n-platform__info {
        display: flex;
        flex-direction: column;
        gap: 30px;
    }

    .n-platform__info-inner {
        padding: 24px 0;
        display: grid;
        grid-template-columns: 160px 1fr;
        gap: 18px;
        align-items: center;
    }

    .n-platform__info-inner h3 {
        font-size: 24px;
        line-height: 1.2;
        font-weight: 700;
        color: #000;
    }

    .n-platform__info-inner p {
        font-size: 13.5px;
        line-height: 1.4;
    }

    /* CTA */
    .n-cta {
        margin-bottom: 120px;
    }

    .n-cta--mb0 {
        margin-bottom: 0;
    }

    .n-cta__inner {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 30px;
        background-color: rgba(56, 52, 218, 1);
        padding: 75px 45px;
        border-radius: 22.5px;
        position: relative;
    }

    .n-cta__inner::before {
        content: '';
        width: 72px;
        height: 72px;
        border-radius: 50%;
        background-color: rgba(251, 175, 11, 1);
        position: absolute;
        right: 46px;
        top: -36px;
        transition: all .6s ease-in-out;
    }

    .n-cta__inner:hover::before {
        right: 80%;
        top: -17px;
        width: 35px;
        height: 35px;
        background-color: rgba(236, 0, 106, 1);
    }

    .n-cta__inner::after {
        content: '';
        width: 35px;
        height: 35px;
        border-radius: 50%;
        background-color: rgba(236, 0, 106, 1);
        position: absolute;
        left: 192px;
        bottom: -12px;
        transition: all .6s ease-in-out;
    }

    .n-cta__inner:hover::after {
        left: 90%;
        bottom: -36px;
        width: 72px;
        height: 72px;
        background-color: rgba(251, 175, 11, 1);
    }

    .n-cta__heading h2 {
        font-size: 40.5px;
        line-height: 1.15;
        font-weight: 700;
        color: #fff;
        text-align: center;
    }

    .n-cta__button {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .n-cta__button a {
        padding: 16px 30px;
        background: #D1FF66;
        border-radius: 16px;
        font-weight: 700;
        font-size: 18px;
        text-align: center;
        color: #000000;
        text-decoration: none;
        transition: var(--transition);
    }

    .n-cta__button a:hover {
        transform: scale(1.1);
    }

    /* Product */
    .n-product {
        background-color: rgba(15, 0, 104, 1);
        padding: 150px 0;
        margin-bottom: 120px;
    }

    .n-product__heading {
        margin-bottom: 24px;
    }

    .n-product__heading h2 {
        font-size: 40.5px;
        line-height: 1.15;
        font-weight: 700;
        color: #fff;
        margin-bottom: 40px;
        text-align: center;
    }

    .n-product__heading p {
        font-size: 19.5px;
        line-height: 1.4;
        font-weight: 400;
        color: #fff;
        max-width: 720px;
        margin: 0 auto;
        text-align: center;
    }

    .n-product__tabs {
        margin-bottom: 60px;
    }    

    .n-product__grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
        align-items: center;
    }

    .n-product__info {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        gap: 50px;
    }

    .n-product__info-inner {
        display: flex;
        flex-direction: column;
        gap: 18px;
    }

    .n-product__info-inner h3 {
        font-size: 24px;
        line-height: 1.2;
        font-weight: 700;
        color: #fff;
    }

    .n-product__info-inner p {
        font-size: 13.5px;
        line-height: 1.4;
        color: #fff;
    }

    /* n-tabs */
    .n-tabs {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .n-tabs__list {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .n-tabs__item {
        margin: 0;
        padding: 0;
    }

    .n-tabs__button {
        display: block;
        padding: 12px 25px;
        color: rgba(255, 255, 255, 0.7);
        font-size: 19px;
        font-weight: 700;
        line-height: 1.2;
        border-radius: 9px;
        transition: var(--transition);
        background-color: transparent;
        border: none;
    }

    .n-tabs__button:hover,
    .n-tabs__button.active {
        background-color: rgba(209, 255, 102, 1);
        color: #000;
    }

    .n-tab {
        display: none;
    }

    .n-tab.active {
        display: block;
    }

    /* News */
    .n-news {
        margin-bottom: 120px;
    }

    .n-news__heading {
        margin-bottom: 45px;
    }

    .n-news__heading h2 {
        font-size: 40.5px;
        line-height: 1.15;
        font-weight: 700;
        color: #000;
        text-align: center;
    }

    .n-news__inner {
        display: flex;
        flex-direction: column;
        gap: 45px;
    }

    .n-news__item {
        display: grid;
        grid-template-columns: 412px 1fr;
        align-items: center;
        gap: 60px;
        text-decoration: none;
        color: #000;
    }

    .n-news__item-img {
        width: 100%;
        height: 100%;
        border-radius: 22.5px;
        overflow: hidden
    }

    .n-news__item-img > img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .n-news__item-data {
        display: flex;
        flex-direction: column;
        gap: 24px;
    }

    .n-news__item-title {
        font-size: 28.5px;
        line-height: 1.2;
        font-weight: 700;
    }

    .n-news__item-author {
        display: flex;
        align-items: center;
        gap: 18px;
    }

    .n-news__item-author > img {
        width: 75px;
        height: 75px;
        border-radius: 50%;
    }

    .n-news__item-author-info {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .n-news__item-author-info > h4 {
        font-size: 25.5px;
        font-weight: 700;
    }

    .n-news__item-author-info > p {
        font-size: 15px;
        font-weight: 500;
        color: rgba(86, 101, 108, 1);
    }

    .n-news__item-author-info > date {
        font-size: 13.5px;
        color: rgba(86, 101, 108, 1);
    }

    /* Globe */
    .n-globe {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
    }

    .n-globe > img {
        width: 100%;
        height: auto;
    }

    /* Footer */
    footer {
        display: none;
    }

    footer.n-footer {
        display: block;
        background-color: rgba(15, 0, 104, 1);
        padding: 120px 0 40px;
        position: relative;
        overflow: hidden;
    }

    footer.n-footer::before {
        content: '';
        width: 295px;
        height: 295px;
        border-radius: 50%;
        background-color: rgba(56, 52, 218, 1);
        display: block;
        position: absolute;
        bottom: -13px;
        left: -139px;
    }

    footer.n-footer::after {
        content: '';
        width: 264px;
        height: 264px;
        border-radius: 50%;
        background-color: rgba(236, 0, 106, 1);
        display: block;
        position: absolute;
        top: -110px;
        right: -102px;
    }

    .n-footer__circle {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background-color: rgba(251, 175, 11, 1);
        display: block;
        position: absolute;
        top: 116px;
        right: 75px;
        z-index: 1;
    }

    footer.n-footer .container {
        position: relative;
        z-index: 2;
    }

    .n-footer__top {
        display: flex;
        justify-content: space-between;
        gap: 40px;
        margin-bottom: 30px;
    }

    .n-footer__top-left {
        display: flex;
        flex-direction: column;
        gap: 24px;
    }

    .n-footer__top-left a {
        width: 135px;
        height: auto;
    }

    .n-footer__top-left a img {
        width: 100%;
        height: auto;
    }

    .n-footer__top-left p {
        font-size: 13.5px;
        line-height: 1.4;
        color: #fff;
        opacity: .7;
    }

    .n-footer__top-right ul {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        gap: 60px;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .n-footer__top-right ul li {
        margin: 0;
        padding: 0;
    }

    .n-footer__top-right ul li a {
        padding: 20px 0;
        display: block;
        font-size: 18px;
        text-decoration: none;
        color: rgba(255, 255, 255, 0.5);
        font-weight: 500;
        transition: var(--transition);
    }

    .n-footer__top-right ul li a:hover {
        color: #fff;
    }

    .n-footer__middle {
        width: 100%;
        max-width: 478px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 30px;
        margin-bottom: 140px;
    }

    .n-footer__middle h2 {
        font-size: 40.5px;
        line-height: 1.15;
        font-weight: 700;
        color: #fff;
        text-align: center;
    }

    .n-footer__middle form {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        border: .75px solid rgba(251, 204, 246, 0.15);
        border-radius: 15px;
        background-color: rgba(237, 242, 247, 0.09);
    }    

    .n-footer__middle form button {
        flex-shrink: 0;
        padding: 16px 30px;
        background: #D1FF66;
        border-radius: 16px;
        font-weight: 700;
        font-size: 18px;
        text-align: center;
        color: #000000;
        text-decoration: none;
        transition: var(--transition);
    }

    .n-footer__middle form button:hover {
        background-color: #fff;
    }

    .n-footer__middle form input {
        width: 100%;
        background: transparent;
        border: none;
        outline: none;
        caret-color: #fff;
        padding: 8px 20px;
        font-size: 15px;
        color: #fff;
    }

    .n-footer__middle form input::placeholder {
        color: rgba(255, 255, 255, 0.6);
    }

    .n-footer__bottom {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .n-footer__bottom-left ul {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        gap: 40px;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .n-footer__bottom-left ul li {
        margin: 0;
        padding: 0;
    }

    .n-footer__bottom-left ul li a {
        padding: 20px 0;
        display: block;
        font-size: 13.5px;
        text-decoration: none;
        color: rgba(255, 255, 255, 0.5);
        transition: var(--transition);
    }

    .n-footer__bottom-left ul li a:hover {
        color: #fff;
    }

    .n-footer__bottom-right {
        display: flex;
        align-items: center;
        gap: 18px;
    }

    .n-footer__bottom-right a {
        display: block;
        line-height: 0;
        text-decoration: none;
    }

    .n-footer__bottom-right a .transition {
        transition: var(--transition);
    }

    .n-footer__bottom-right a:hover .transition {
        fill: #D1FF66;
    }

    /* Animation */
    .n-appear {
        opacity: 0;
        transform: translateY(20px);
        transition: var(--transition);
    }

    .n-appear.animate {
        opacity: 1;
        transform: translateY(0);
    }

    .n-title > div {
        overflow: hidden;
    }

    .n-title > div > div {
        transform: translateY(100%);
        transition: var(--transition);
    }

    .n-title.active > div > div {
        transform: translateY(0);
    }

    /* Lottie */
    #hero-lottie{
        background-color: transparent;
        max-width: 1440px;
        margin: 0 auto;
        width: 100%;
        height: auto;
        aspect-ratio: 1440 / 903;
        display: block;
        overflow: hidden;
        transform: translate3d(0,0,0);
        text-align: center;
        opacity: 1;
        line-height: 0;

        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
    }
</style>


<section class="part n-hero">
    <div class="inner-wrapper container">
        <div class="n-hero__inner">
            <h1 class="n-title"><div><div>Reach, Convert and Grow Your</div></div><div><div>Web3 Customer Base at Scale</div></div></h1>
            <p class="n-appear">Engage your Web3 prospects and customers leveraging blockchain data and native Web3 communication channels</p>
            <div class="n-appear">
                <a href="/request-a-demo/">Request a Demo</a>
            </div>
        </div>
    </div>
    <div id="hero-lottie"></div>
</section>

<div class="marquee">
    <ul class="marquee__list">
        <li class="marquee__item">
            <img src="/wp-content/uploads/2024/06/1inch-1inch-logo-1.svg" alt="">
        </li>        
        <li class="marquee__item">
            <img src="/wp-content/uploads/2024/06/LI_FI_Service_Logo-1.png" alt="">
        </li>
        <li class="marquee__item">
            <img src="/wp-content/uploads/2024/06/643e7c52ca8c2bb44593ff87_Logo-Kmon-1.svg" alt="">
        </li>
        <li class="marquee__item">
            <img src="/wp-content/uploads/2024/06/Group-318.png" alt="">
        </li>
        <li class="marquee__item">
            <img src="/wp-content/uploads/2024/06/617813387e39a03a47f40ed8_enjinstarter-1.png" alt="">
        </li>
        <li class="marquee__item">
            <img src="/wp-content/uploads/2024/06/64105c69fecab405ed476f61_Logos-1.png" alt="">
        </li>
        <li class="marquee__item">
            <img src="/wp-content/uploads/2024/06/1inch-1inch-logo-1.svg" alt="">
        </li>        
        <li class="marquee__item">
            <img src="/wp-content/uploads/2024/06/LI_FI_Service_Logo-1.png" alt="">
        </li>
        <li class="marquee__item">
            <img src="/wp-content/uploads/2024/06/643e7c52ca8c2bb44593ff87_Logo-Kmon-1.svg" alt="">
        </li>
        <li class="marquee__item">
            <img src="/wp-content/uploads/2024/06/Group-318.png" alt="">
        </li>
        <li class="marquee__item">
            <img src="/wp-content/uploads/2024/06/617813387e39a03a47f40ed8_enjinstarter-1.png" alt="">
        </li>
        <li class="marquee__item">
            <img src="/wp-content/uploads/2024/06/64105c69fecab405ed476f61_Logos-1.png" alt="">
        </li>
    </ul>
    <ul aria-hidden="true" class="marquee__list">        
        <li class="marquee__item">
            <img src="/wp-content/uploads/2024/06/1inch-1inch-logo-1.svg" alt="">
        </li>        
        <li class="marquee__item">
            <img src="/wp-content/uploads/2024/06/LI_FI_Service_Logo-1.png" alt="">
        </li>
        <li class="marquee__item">
            <img src="/wp-content/uploads/2024/06/643e7c52ca8c2bb44593ff87_Logo-Kmon-1.svg" alt="">
        </li>
        <li class="marquee__item">
            <img src="/wp-content/uploads/2024/06/Group-318.png" alt="">
        </li>
        <li class="marquee__item">
            <img src="/wp-content/uploads/2024/06/617813387e39a03a47f40ed8_enjinstarter-1.png" alt="">
        </li>
        <li class="marquee__item">
            <img src="/wp-content/uploads/2024/06/64105c69fecab405ed476f61_Logos-1.png" alt="">
        </li>
        <li class="marquee__item">
            <img src="/wp-content/uploads/2024/06/1inch-1inch-logo-1.svg" alt="">
        </li>        
        <li class="marquee__item">
            <img src="/wp-content/uploads/2024/06/LI_FI_Service_Logo-1.png" alt="">
        </li>
        <li class="marquee__item">
            <img src="/wp-content/uploads/2024/06/643e7c52ca8c2bb44593ff87_Logo-Kmon-1.svg" alt="">
        </li>
        <li class="marquee__item">
            <img src="/wp-content/uploads/2024/06/Group-318.png" alt="">
        </li>
        <li class="marquee__item">
            <img src="/wp-content/uploads/2024/06/617813387e39a03a47f40ed8_enjinstarter-1.png" alt="">
        </li>
        <li class="marquee__item">
            <img src="/wp-content/uploads/2024/06/64105c69fecab405ed476f61_Logos-1.png" alt="">
        </li>
    </ul>
</div>

<section class="part n-benefits">
    <div class="inner-wrapper container">
        <div class="n-benefits__heading">
            <h2 class="n-title"><div><div>Why do <span style="color: rgba(56, 52, 218, 1);">Web3</span> companies</div></div><div><div>choose nReach?</div></div></h2>
            <p class="n-appear">Sales and customer retention in the Web3 space are challenging with existing tools falling short. This is where we come in 🚀</p>
        </div>
        <div class="n-benefits__grid n-appear__parent">
            <div class="n-benefits__item n-appear">
                <div class="n-benefits__item-icon">
                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1984_1257)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.13724 14.8325C2.63513 15.3346 1.82106 15.3346 1.31896 14.8325C0.816857 14.3303 0.816857 13.5163 1.31896 13.0142L5.60355 8.7296L5.61267 8.72054C5.96274 8.37743 6.43336 8.18524 6.92352 8.18524C7.4137 8.18524 7.88433 8.37743 8.23437 8.72054L8.24352 8.7296L10.4307 10.9168L13.4479 7.72509L12.111 6.38814C11.8352 6.11236 11.7527 5.6976 11.9019 5.33728C12.0512 4.97694 12.4028 4.742 12.7928 4.742H17.4883C18.0208 4.742 18.4525 5.17373 18.4525 5.70629V10.4017C18.4525 10.7917 18.2176 11.1434 17.8573 11.2926C17.497 11.4419 17.0822 11.3594 16.8064 11.0836L15.2669 9.54408L11.7903 13.2218C11.7791 13.2337 11.7676 13.2454 11.756 13.2568C11.4059 13.5999 10.9353 13.7921 10.4451 13.7921C9.95493 13.7921 9.48431 13.5999 9.13426 13.2568L9.12512 13.2477L6.92352 11.0462L3.13724 14.8325Z" fill="#3834DA"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_1984_1257">
                    <rect width="18" height="18" fill="white" transform="translate(0.697266 0.975464)"/>
                    </clipPath>
                    </defs>
                    </svg>
                </div>
                <div class="n-benefits__item-text">
                    <h3>Scale Prospects By 5x</h3>
                    <p>Access our extensive database of over 5Ok real-time Web3 companies to identify key leads. Launch large-scale outreach campaigns with our tools to enhance your prospecting and engagement, allowing you to scale effectively.</p>
                </div>
            </div>
            <div class="n-benefits__item n-appear">
                <div class="n-benefits__item-icon">
                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1743_40109)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.355469 8.15361V10.3432C0.355469 11.5877 2.34833 12.6343 5.01875 12.8657V9.60775L5.02261 9.45346C3.54018 9.34803 2.19018 9.03304 1.13204 8.56118C0.864455 8.44264 0.605029 8.30649 0.355469 8.15361ZM11.9269 3.54689V5.43689C10.3378 5.48961 8.84504 5.79689 7.66733 6.32146C7.0219 6.60818 6.39961 6.99261 5.91618 7.49918C5.8069 7.61489 5.70018 7.74089 5.60247 7.87589C4.07633 7.81932 2.74433 7.51975 1.78775 7.09289C1.2529 6.85504 0.869754 6.59146 0.631897 6.34075C0.503698 6.21714 0.40864 6.06328 0.355469 5.89332V3.54689C0.355469 2.12618 2.9449 0.975464 6.14118 0.975464C9.33618 0.975464 11.9269 2.12618 11.9269 3.54689ZM6.14118 4.74389C8.3719 4.74389 10.1809 4.22446 10.1809 3.58289C10.1809 2.94004 8.3719 2.42061 6.1399 2.42061C3.90918 2.42061 2.10018 2.94132 2.10018 3.58289C2.10018 4.22446 3.91047 4.74389 6.14118 4.74389ZM6.6259 16.404V14.2145C6.86761 14.3636 7.12861 14.4999 7.40375 14.622C8.72161 15.2109 10.4895 15.5542 12.4116 15.5542C14.3325 15.5542 16.1016 15.2109 17.4195 14.622C17.6946 14.4999 17.9556 14.3649 18.1973 14.2145V16.404C18.1973 17.8183 15.6259 18.9755 12.4116 18.9755C9.19733 18.9755 6.6259 17.8183 6.6259 16.404ZM6.90361 12.4016C6.77513 12.2785 6.67963 12.1251 6.6259 11.9555V9.60775C6.6259 8.18832 9.21661 7.03632 12.4116 7.03632C15.6066 7.03632 18.1973 8.18832 18.1973 9.60775V11.9555C18.1438 12.1256 18.0483 12.2795 17.9196 12.4029C17.6818 12.6536 17.2999 12.9172 16.765 13.1563C15.6979 13.632 14.1615 13.9483 12.4116 13.9483C10.6618 13.9483 9.12661 13.632 8.05818 13.1563C7.52333 12.9172 7.14147 12.6536 6.90361 12.4016ZM16.4513 9.64375C16.4513 10.2866 14.6423 10.806 12.4116 10.806C10.1796 10.806 8.3719 10.2853 8.3719 9.64375C8.3719 9.00218 10.1796 8.48146 12.4116 8.48146C14.6423 8.48146 16.4513 9.00218 16.4513 9.64375Z" fill="#EC006A"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_1743_40109">
                    <rect width="18" height="18" fill="white" transform="translate(0.197266 0.975464)"/>
                    </clipPath>
                    </defs>
                    </svg>
                </div>
                <div class="n-benefits__item-text">
                    <h3>Increase Conversion Rates</h3>
                    <p>Start personalized outreach campaigns to reach prospects and customers through automated sequences on channels they use every day, like Telegram, email, and X. This targeted approach helps increase response rates and close more deals efficiently.</p>
                </div>
            </div>
            <div class="n-benefits__item n-appear">
                <div class="n-benefits__item-icon">
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.3034 0.421566C12.5615 0.162595 12.9503 0.0849834 13.2881 0.225033L15.8481 1.28653C16.3066 1.47666 16.5255 2.00144 16.3379 2.46103L15.2934 5.02033C15.1554 5.35848 14.8271 5.58008 14.462 5.58171C14.0967 5.58334 13.7665 5.36466 13.6255 5.02776L13.2123 4.04035L2.81982 8.48216C2.36157 8.67802 1.8313 8.46532 1.63544 8.00705C1.43958 7.5488 1.65228 7.01854 2.11055 6.82267L12.5155 2.37552L12.1101 1.40696C11.9689 1.06967 12.0452 0.680538 12.3034 0.421566ZM15.6154 6.74882C15.9345 6.74882 16.2406 6.87557 16.4661 7.10121C16.6917 7.32685 16.8185 7.63286 16.8185 7.95196V16.3739C16.8185 16.7062 16.5492 16.9755 16.217 16.9755H13.2091C12.8769 16.9755 12.6076 16.7062 12.6076 16.3739V7.95196C12.6076 7.63286 12.7344 7.32685 12.96 7.10121C13.1855 6.87557 13.4916 6.74882 13.8107 6.74882H15.6154ZM10.4505 8.90592C10.2248 8.68028 9.91881 8.55353 9.59971 8.55353H7.795C7.47591 8.55353 7.16989 8.68028 6.94425 8.90592C6.71863 9.13155 6.59186 9.43757 6.59186 9.75667V16.3739C6.59186 16.7062 6.8612 16.9755 7.19343 16.9755H10.2013C10.5335 16.9755 10.8028 16.7062 10.8028 16.3739V9.75667C10.8028 9.43757 10.6761 9.13155 10.4505 8.90592ZM3.58402 10.3582C3.90311 10.3582 4.20913 10.485 4.43477 10.7106C4.66039 10.9363 4.78716 11.2423 4.78716 11.5614V16.3739C4.78716 16.7062 4.51782 16.9755 4.18559 16.9755H1.17774C0.845504 16.9755 0.576172 16.7062 0.576172 16.3739V11.5614C0.576172 11.2423 0.70293 10.9363 0.928563 10.7106C1.1542 10.485 1.46022 10.3582 1.77931 10.3582H3.58402Z" fill="#3834DA"/>
                    </svg>
                </div>
                <div class="n-benefits__item-text">
                    <h3>Automate Growth Opportunities</h3>
                    <p>Automate the detection of leads and upsell opportunities by analyzing real-time on-chain and off-chain data. Set up instant outreach campaigns to seize every growth opportunity as soon as it appears.</p>
                </div>
            </div>
            <div class="n-benefits__item n-appear">
                <div class="n-benefits__item-icon">
                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1835_10303)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0653 2.16913C12.5198 1.33026 13.7498 1.33026 14.2043 2.16913L14.9869 3.61288L16.6534 3.92676C17.5515 4.09588 17.9775 5.18263 17.3156 5.88688L16.1295 7.14913L16.347 8.83401C16.4734 9.81613 15.4331 10.4353 14.6145 10.0441L13.1348 9.33726L11.655 10.0441C10.8368 10.4349 9.79614 9.81613 9.92289 8.83401L10.1404 7.14913L8.95389 5.88688C8.29202 5.18263 8.71764 4.09588 9.61614 3.92676L11.2826 3.61288L12.0653 2.16913ZM1.43589 10.6798C1.23991 10.7407 1.06633 10.8583 0.936952 11.0176C0.807578 11.1769 0.72819 11.3709 0.708766 11.5753C0.647641 12.1918 0.572266 13.1473 0.572266 14.1028C0.572266 14.99 0.637516 15.8776 0.696016 16.4934C0.718609 16.7296 0.819305 16.9514 0.982174 17.124C1.14504 17.2965 1.36078 17.4098 1.59527 17.4459C3.18302 17.7013 6.76951 18.2278 9.30376 18.2278C11.2223 18.2278 15.0608 16.9363 16.8555 16.2924C17.4401 16.0824 17.8699 15.5098 17.6801 14.9188C17.4255 14.1275 16.8851 13.8275 16.5116 13.7139C16.2566 13.6363 15.9893 13.6678 15.7268 13.7131C14.4986 13.9265 10.7213 14.561 9.30376 14.561C8.63514 14.561 7.72239 14.4388 7.18802 14.3574C7.06485 14.3382 6.95268 14.2753 6.87195 14.1803C6.79121 14.0854 6.74728 13.9645 6.74814 13.8399C6.74814 13.5286 7.01364 13.2841 7.32377 13.3093L10.2169 13.5455C10.872 13.5988 11.4484 13.0741 11.2984 12.434C11.2181 12.0901 11.1109 11.804 11.0044 11.5753C10.7816 11.0979 10.317 10.8118 9.80664 10.6805C8.75289 10.4094 6.79839 9.97776 5.04414 9.97776C3.87602 9.97776 2.30664 10.409 1.43589 10.6798Z" fill="#FBAF0B"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_1835_10303">
                    <rect width="18" height="18" fill="white" transform="translate(0.197266 0.977783)"/>
                    </clipPath>
                    </defs>
                    </svg>
                </div>
                <div class="n-benefits__item-text">
                    <h3>Boost<br>Retention</h3>
                    <p>Stay on top of your customer health with real-time insights from on-chain data. Manage your outreach and handle inbound requests efficiently at scale, ensuring you maintain robust customer relationships.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="part n-platform">
    <div class="inner-wrapper container">
        <div class="n-platform__heading">
            <h2 class="n-title"><div><div>Use <span style="color: rgba(56, 52, 218, 1);">one</span> platform</div></div><div><div>developed for Web3 companies</div></div></h2>
        </div>
        <div class="n-platform__grid">
            <div class="n-platform__info">
                <div class="n-platform__info-inner n-appear">
                    <h3>Data Driven Prospects</h3>
                    <p>Explore our database of Web3 projects. Use dynamic filtering options to precisely tailor the data to your needs, ensuring you find exactly what you're looking for.</p>
                </div>
                <div class="n-platform__info-inner n-appear">
                    <h3>Key Contact Details</h3>
                    <p>Access key contact details like job titles, Telegram usernames, X handles, emails, and LinkedIn profiles for precise and targeted outreach.</p>
                </div>
                <div class="n-platform__info-inner n-appear">
                    <h3>Automated Outreach</h3>
                    <p>Launch high-volume outreach campaigns with A/B testing and automated sequences to boost your scale and response rates.</p>
                </div>
                <div class="n-platform__info-inner n-appear">
                    <h3>Engagement Management</h3>
                    <p>Use our integrated chat and smart tracking to keep tabs on conversations and unread messages, aiming to close more deals and upsell opportunities.</p>
                </div>
            </div>
            <div class="n-platform__animation"></div>
        </div>
    </div>
</section>

<section class="part n-cta">
    <div class="inner-wrapper container">
        <div class="n-cta__inner">
            <div class="n-cta__heading">
                <h2>Reach, Convert and Grow your Web3 Customers with nReach</h2>
            </div>
            <div class="n-cta__button">
                <a href="/request-a-demo/">Request a Demo</a>
            </div>
        </div>
    </div>
</section>

<section class="part n-product">
    <div class="inner-wrapper container">
        <div class="n-product__heading">
            <h2 class="n-title"><div><div>Build Stronger Web3 Relationships</div></div><div><div>Powered by <span style="color: rgba(209, 255, 102, 1);">Big Data and AI</span></div></div></h2>
            <p class="n-appear">Boost sales by leveraging data-driven lead generation, key decision makers, contact details, and automated outreach on Telegram, X, and email.</p>
        </div>
        <div class="n-product__tabs n-tabs">
            <ul class="n-appear n-tabs__list">
                <li class="n-tabs__item">
                    <button class="n-tabs__button active" data-tab-target="tab1">For Sales</button>
                </li>
                <li class="n-tabs__item">
                    <button class="n-tabs__button" data-tab-target="tab2">For CSMs</button>
                </li>
            </ul>
        </div>
        <div class="n-tabs__content">
            <div class="n-tab active" data-tab="tab1">
                <div class="n-product__grid">
                    <div class="n-product__info">
                        <div class="n-product__info-inner n-appear">
                            <h3>It shouldn’t take weeks to find relevant high intent leads in the Web3 space</h3>
                            <p>Access over 50k Web3 companies with real-time on-chain and off-chain data, eliminating the need for manual searches. Quickly filter leads and get contact details for key decision-makers on Telegram, email, and LinkedIn, ensuring timely outreach.</p>
                        </div>
                        <div class="n-product__info-inner n-appear">
                            <h3>Don't miss opportunities by manually managing Telegram outreach and responses</h3>
                            <p>Set up automated, high-volume outreach sequences on Telegram, email, and X to expand your reach. Efficiently handle responses to capture every lead and increase your conversion rates.</p>
                        </div>
                    </div>
                    <div class="n-product__animation n-appear"></div>
                </div>
            </div>
            <div class="n-tab" data-tab="tab2">
                <div class="n-product__grid">
                    <div class="n-product__info">
                        <div class="n-product__info-inner n-appear">
                            <h3>Don’t hassle to identify customer health and upsell opportunities</h3>
                            <p>Leverage on-chain and off-chain data analytics and automated workflows to monitor customer health in real-time and capture upsell opportunities.</p>
                        </div>
                        <div class="n-product__info-inner n-appear">
                            <h3>Managing Telegram communication shouldn't be a manual process</h3>
                            <p>Utilize nReach’s Telegram outreach and inbound requests management to streamline and track communication, ensuring optimized interactions with your customers.</p>
                        </div>
                    </div>
                    <div class="n-product__animation n-appear"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="part n-news">
    <div class="inner-wrapper container">
        <div class="n-news__heading">
            <h2 class="n-title"><div><div>nReach Web3 News & Insights</div></div></h2>
        </div>
        <div class="n-news__inner">
            <a href="#" class="n-news__item n-appear">
                <div class="n-news__item-img">
                    <img src="/wp-content/uploads/2024/06/Group-332.png" alt="">
                </div>
                <div class="n-news__item-data">
                    <h3 class="n-news__item-title">nReach: Revolutionizing B2B Engagement in the Decentralized Era</h3>
                    <div class="n-news__item-author">
                        <img src="/wp-content/uploads/2024/06/815839c1a8174d04b653ea4d72889257.jpeg" alt="">
                        <div class="n-news__item-author-info">
                            <h4>Yaniv Azar</h4>
                            <p>CEO and Cofounder</p>
                            <date>May 2, 2023</date>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="n-news__item n-appear">
                <div class="n-news__item-img">
                    <img src="/wp-content/uploads/2024/06/Group-332-1.png" alt="">
                </div>
                <div class="n-news__item-data">
                    <h3 class="n-news__item-title">Web3 Outreach Strategy: Where to Start?</h3>
                    <div class="n-news__item-author">
                        <img src="/wp-content/uploads/2024/06/815839c1a8174d04b653ea4d72889257.jpeg" alt="">
                        <div class="n-news__item-author-info">
                            <h4>Yaniv Azar</h4>
                            <p>CEO and Cofounder</p>
                            <date>May 2, 2023</date>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<section class="part n-cta n-cta--mb0">
    <div class="inner-wrapper container">
        <div class="n-cta__inner">
            <div class="n-cta__heading">
                <h2>Reach, Convert and Grow your Web3 Customer Base with nReach</h2>
            </div>
            <div class="n-cta__button">
                <a href="/request-a-demo/">Request a Demo</a>
            </div>
        </div>
    </div>
</section>

<div class="n-globe">
    <img src="/wp-content/uploads/2024/06/Frame-312.svg" alt="">
</div>

<footer class="n-footer">
    <div class="n-footer__circle"></div>
    <div class="inner-wrapper container">
        <div class="n-footer__inner">
            <div class="n-footer__top">
                <div class="n-footer__top-left">
                    <a href="/">
                        <img src="/wp-content/uploads/2024/03/white_logo.svg" alt="">
                    </a>
                    <p>nReach © 2024</p>
                </div>
                <nav class="n-footer__top-right">
                    <ul>
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Knowledge Hub</a></li>
                        <li><a href="#">Web3 Database</a></li>
                    </ul>
                </nav>
            </div>
            <div class="n-footer__middle">
                <h2>Stay up to date on the latest news in Web3</h2>
                <form>
                    <input type="email" placeholder="Enter your Email">
                    <button>Subscribe</button>
                </form>
            </div>
            <div class="n-footer__bottom">
                <nav class="n-footer__bottom-left">
                    <ul>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Referral Program</a></li>
                    </ul>
                </nav>
                <div class="n-footer__bottom-right">
                    <a href="https://www.linkedin.com/company/nreach-io" target="_blank">
                        <svg width="45" height="46" viewBox="0 0 45 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="transition" fill-rule="evenodd" clip-rule="evenodd" d="M22.5 45.6343C34.9264 45.6343 45 35.5607 45 23.1343C45 10.7079 34.9264 0.634277 22.5 0.634277C10.0736 0.634277 0 10.7079 0 23.1343C0 35.5607 10.0736 45.6343 22.5 45.6343ZM16.2266 12.34C16.2266 13.7507 15.185 14.8944 13.4707 14.8944C11.8585 14.8944 10.8169 13.7507 10.8169 12.34C10.8169 10.9294 11.8926 9.78564 13.5388 9.78564C15.185 9.78564 16.1926 10.8953 16.2266 12.34ZM10.9504 33.3404V16.9096H16.0565V33.3404H10.9504ZM18.9827 16.9069C19.0481 18.3856 19.1161 20.0998 19.1161 22.1491H19.1214V33.3376H24.2275V23.8634C24.2275 23.3923 24.2615 22.9212 24.395 22.5862C24.764 21.644 25.6042 20.6704 27.0148 20.6704C28.8626 20.6704 29.6032 22.1151 29.6032 24.2324V33.3376H34.7094V23.6278C34.7094 18.7886 32.189 16.5378 28.8285 16.5378C26.0726 16.5378 24.4264 18.116 23.7538 19.1917H23.6544L23.4188 16.9069H18.9827Z" fill="white"/>
                        </svg>
                    </a>
                    <a href="https://x.com/nreach_io" target="_blank">
                        <svg width="45" height="46" viewBox="0 0 45 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect class="transition" y="0.634277" width="45" height="45" rx="22.5" fill="white"/>
                            <path d="M32.2425 13.1401L15.4971 32.983H12.2061L28.8547 13.1401H32.2425Z" fill="#0F0068"/>
                            <path class="transition" d="M17.5932 14.1817L31.0862 31.9414H26.9727L13.3714 14.1817H17.5932Z" fill="white" stroke="#0F0068" stroke-width="2.08316"/>
                        </svg>
                    </a>
                    <a href="https://web.telegram.org/a/#7150524886" target="_blank">
                        <svg width="46" height="45" viewBox="0 0 46 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1743_40142)">
                                <path class="transition" d="M45.9561 22.7016C45.9561 34.8938 35.8873 44.7689 23.4561 44.7689C11.0248 44.7689 0.956055 34.8938 0.956055 22.7016C0.956055 10.5094 11.0248 0.634277 23.4561 0.634277C35.8873 0.634277 45.9561 10.5094 45.9561 22.7016Z" fill="white"/>
                                <path d="M19.7062 27.1889L28.7812 33.7539C29.8124 34.3056 30.5624 34.0298 30.8249 32.8161L34.5187 15.7507C34.8937 14.2611 33.9374 13.5991 32.9437 14.0405L11.2687 22.2421C9.78743 22.8306 9.80618 23.6397 11.0062 23.9891L16.5749 25.6994L29.4562 17.7367C30.0562 17.3689 30.6187 17.5712 30.1687 17.9758L19.7062 27.1889Z" fill="#0F0068"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_1743_40142">
                                    <rect class="transition" width="45" height="44.1346" fill="white" transform="translate(0.956055 0.634277)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        let tabs = document.querySelectorAll('.n-tabs__button');
        let tabContent = document.querySelectorAll('.n-tab');

        tabs.forEach(function(tab) {
            tab.addEventListener('click', function() {
                tabs.forEach(function(tab) {
                    tab.classList.remove('active');
                });

                tabContent.forEach(function(content) {
                    content.classList.remove('active');
                });

                this.classList.add('active');

                let target = this.dataset.tabTarget;

                let targetContent = Array.from(tabContent).find(function(content) {
                    return content.dataset.tab === target;
                });

                if (targetContent) {
                    targetContent.classList.add('active');
                }
            });
        });
    });
</script>

<!-- build:scripto --><script src="/wp-content/themes/wpstack-child/page-templates/animation/lottie.js"></script><!-- endbuild -->
<script>
    // Создаем экземпляр анимации
    var animation = lottie.loadAnimation({
        container: document.getElementById('hero-lottie'),
        renderer: 'svg',
        loop: false,
        autoplay: false,
        path: '/wp-content/themes/wpstack-child/page-templates/animation/hero/data.json' // Путь к вашему файлу анимации
    });

    // Функция для обновления прогресса анимации в зависимости от скролла
    function updateAnimationProgressHero() {
        var scrollPercent = window.scrollY / window.innerHeight;
        if (scrollPercent >= 0 && scrollPercent <= 1) {
            animation.goToAndStop(scrollPercent * animation.totalFrames, true);
        }
    }

    // Обновляем прогресс анимации при скролле
    window.addEventListener('scroll', updateAnimationProgressHero);
</script>

<script>
    var animation1 = lottie.loadAnimation({
        container: document.querySelector('.n-tab[data-tab="tab1"] .n-product__animation'),
        renderer: 'svg',
        loop: false,
        autoplay: false,
        path: '/wp-content/themes/wpstack-child/page-templates/animation/product/data-1.json'
    });

    var animation2 = lottie.loadAnimation({
        container: document.querySelector('.n-tab[data-tab="tab2"] .n-product__animation'),
        renderer: 'svg',
        loop: false,
        autoplay: false,
        path: '/wp-content/themes/wpstack-child/page-templates/animation/product/data-2.json'
    });

    var section = document.querySelector('.part.n-product');

    function updateAnimationProgress() {
        var sectionTop = section.getBoundingClientRect().top;
        var sectionHeight = section.offsetHeight;
        var windowHeight = window.innerHeight;

        if (sectionTop <= 0 && sectionTop + sectionHeight >= 0) {
            var scrollPercent = -sectionTop / sectionHeight;
            animation1.goToAndStop(scrollPercent * animation1.totalFrames, true);
            animation2.goToAndStop(scrollPercent * animation2.totalFrames, true);
        }
    }

    window.addEventListener('scroll', updateAnimationProgress);
</script>

<script>
    var animation3 = lottie.loadAnimation({
        container: document.querySelector('.n-platform__animation'),
        renderer: 'svg',
        loop: false,
        autoplay: false,
        path: '/wp-content/themes/wpstack-child/page-templates/animation/platform/data.json' // Путь к вашему файлу анимации
    });

    function updateAnimationProgress2() {
        var scrollPercent = window.scrollY / (document.body.offsetHeight - window.innerHeight);
        animation3.goToAndStop(scrollPercent * animation3.totalFrames, true);
    }

    window.addEventListener('scroll', updateAnimationProgress2);
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
            if (entry.isIntersecting) {
                let delay = parseInt(entry.target.getAttribute('data-delay'));
                setTimeout(() => {
                entry.target.classList.add("animate");
                }, delay);
            }
            });
        });

        let parentElements = document.querySelectorAll('.n-appear__parent');

        parentElements.forEach((parent) => {
            let items = parent.querySelectorAll('.n-appear');
            items.forEach((item, index) => {
            item.setAttribute('data-delay', index * 200);
            observer.observe(item);
            });
        });

        let standaloneItems = document.querySelectorAll('.n-appear:not(.n-appear__parent .n-appear)');
        standaloneItems.forEach((item) => {
            observer.observe(item);
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("active");
            }
            });
        }, {
            rootMargin: "-200px 0px"
        });

        let titleElements = document.querySelectorAll(".n-title");
        titleElements.forEach((element) => {
            observer.observe(element);
        });
    });
</script>

<?php

// --------------------------------

// END CONTENT SECTION

// --------------------------------



get_footer(); 



?>