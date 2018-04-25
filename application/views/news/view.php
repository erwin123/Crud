<?php
echo '<h2>'.$news_item['title'].'</h2>';
echo $news_item['text'];
?>
<div class="blocks-promo">
    <a class="block-promo home-main" href="{{store url=""}}collections/yoga-new.html">
        <img src="{{media url="wysiwyg/home/home-main.jpg"}}" alt="" />
        <span class="content bg-white">
            <span class="info">New Luma Yoga Collection</span>
            <strong class="title">Get fit and look fab in new seasonal styles</strong>
            <span class="action more button">Shop New Yoga</span>
        </span>
    </a>
    <div class="block-promo-wrapper block-promo-hp">
        <a class="block-promo home-pants" href="{{store url=""}}promotions/pants-all.html">
            <img src="{{media url="wysiwyg/home/home-pants.jpg"}}" alt="" />
            <span class="content">
                <strong class="title">20% OFF</strong>
                <span class="info">Luma pants when you shop today*</span>
                <span class="action more icon">Shop Pants</span>
            </span>
        </a>
        <a class="block-promo home-t-shirts" href="{{store url=""}}promotions/tees-all.html">
            <span class="image">
                <img src="{{media url="wysiwyg/home/home-t-shirts.png"}}" alt="" />
            </span>
            <span class="content">
                <strong class="title">Even more ways to mix and match</strong>
                <span class="info">Buy 3 Luma tees get a 4th free</span>
                <span class="action more icon">Shop Tees</span>
            </span>
        </a>
        <a class="block-promo home-erin" href="{{store url=""}}collections/erin-recommends.html">
        <img src="{{media url="wysiwyg/home/home-erin.jpg"}}" alt="" />
        <span class="content">
            <strong class="title">Take it from Erin</strong>
            <span class="info">Luma founder Erin Renny shares her favorites!</span>
            <span class="action more icon">Shop Erin Recommends</span>
        </span>
        </a>
        <a class="block-promo home-performance" href="{{store url=""}}collections/performance-fabrics.html">
            <img src="{{media url="wysiwyg/home/home-performance.jpg"}}" alt="" />
            <span class="content bg-white">
                <strong class="title">Science meets performance</strong>
                <span class="info">Wicking to raingear, Luma covers you</span>
                <span class="action more icon">Shop Performance</span>
            </span>
        </a>
        <a class="block-promo home-eco" href="{{store url=""}}collections/eco-friendly.html">
            <img src="{{media url="wysiwyg/home/home-eco.jpg"}}" alt="" />
            <span class="content bg-white">
                <strong class="title">Twice around, twice as nice</strong>
                <span class="info">Find conscientious, comfy clothing in our eco-friendly collection</span>
                <span class="action more icon">Shop Eco-Friendly</span>
            </span>
        </a>
    </div>
</div>
<div class="content-heading">
    <h2 class="title">Hot Sellers</h2>
    <p class="info">Here is what`s trending on Luma right now</p>
</div>
<p>{{widget type="Magento\CatalogWidget\Block\Product\ProductsList" products_per_page="8" products_count="8" template="product/widget/content/grid.phtml" conditions_encoded="^[`1`:^[`type`:`Magento||CatalogWidget||Model||Rule||Condition||Combine`,`aggregator`:`all`,`value`:`1`,`new_child`:``^],`1--1`:^[`type`:`Magento||CatalogWidget||Model||Rule||Condition||Product`,`attribute`:`sku`,`operator`:`()`,`value`:`WS12, WT09, MT07, MH07, 24-MB02, 24-WB04, 241-MB08, 240-LV05`^]^]"}}</p>