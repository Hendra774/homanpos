<?php include 'Template/Header.php';?>
<?php include 'Template/NavBar.php';?>


<link rel='stylesheet' id='elementor-post-5239-css''
    href='assets/wp-content/uploads/elementor/css/post-52396c29.css?ver=1642489977' type='text/css' media='all' />

<link rel='stylesheet' id='elementor-post-5285-css''
    href=' assets/wp-content/uploads/elementor/css/post-5285c0a4.css?ver=1642490080' type='text/css' media='all' />


<div class="wraper_inner_banner">

    <div class="wraper_inner_banner_main">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="inner_banner_main">
                        <p class="title">
                            Product </p>
                    </div>

                </div>
            </div>

        </div>
    </div>


    <div class="wraper_inner_banner_breadcrumb">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="inner_banner_breadcrumb">
                        <div id="crumbs"><a href="index">Home</a> <span class="gap"><i
                                    class="el el-chevron-right"></i></span> <span class="current">Product</span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>


<div id="page" class="site">

    <div id="content" class="site-content">
        <div data-elementor-type="wp-post" data-elementor-id="5239" class="elementor elementor-5239"
            data-elementor-settings="[]">

            <div class="elementor-inner">
                <div class="elementor-section-wrap">


                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-7e3eb1cd elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="7e3eb1cd" data-element_type="section"
                        data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-77048d9b"
                                    data-id="77048d9b" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <section
                                                class="elementor-section elementor-inner-section elementor-element elementor-element-332b6711 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                data-id="332b6711" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-22ae5ac4"
                                                            data-id="22ae5ac4" data-element_type="column">
                                                            <div class="elementor-column-wrap">
                                                                <div class="elementor-widget-wrap">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1b3f0920"
                                                            data-id="1b3f0920" data-element_type="column">
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-373a6ce0 elementor-widget elementor-widget-heading"
                                                                        data-id="373a6ce0" data-element_type="widget"
                                                                        data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <h1
                                                                                class="elementor-heading-title elementor-size-default">
                                                                                PRODUCT</h1>
                                                                            <b style="color:red">The benefits provided
                                                                                are just for you.
                                                                                Make it easy for you to provide
                                                                                accounting and business accounting
                                                                                solutions.</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-1adb5405 elementor-widget elementor-widget-radiant-separator"
                                                                        data-id="1adb5405" data-element_type="widget"
                                                                        data-widget_type="radiant-separator.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div
                                                                                class="radiantthemes-separator element-one text-center">
                                                                                <div class="radiantthemes-separator-block"
                                                                                    style="width: 50px; height: 4px;">
                                                                                    <div
                                                                                        class="radiantthemes-separator-block-gap">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7d090791"
                                                            data-id="7d090791" data-element_type="column">
                                                            <div class="elementor-column-wrap">
                                                                <div class="elementor-widget-wrap">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-353ba890 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="353ba890" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="row">


                                <?php
 $Product = file_get_contents('Data/Product.json');
 $Product = json_decode($Product, true);
 $Product = $Product['ProductList'];
 ?>

                                <?php foreach ($Product as $itemData) { ?>

                                <div class="elementor-column col-lg-4 col-md-4 col-sm-4 col-xs-12 elementor-top-column elementor-element elementor-element-ad417d6"
                                    data-id="ad417d6" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-64caa6a elementor-widget elementor-widget-image"
                                                data-id="64caa6a" data-element_type="widget"
                                                data-widget_type="image.default">

                                                <div class="elementor-widget-container">
                                                    <div class="elementor-image">
                                                        <img src='<?php echo $itemData['image'] ?>'
                                                            style="width:370px;height:280px" title="" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <section
                                                class="elementor-section elementor-inner-section elementor-element elementor-element-21fec86d element-service-box-item-one elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                data-id="21fec86d" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3802405e"
                                                            data-id="3802405e" data-element_type="column"
                                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-77cb94c6 elementor-widget elementor-widget-heading"
                                                                        data-id="77cb94c6" data-element_type="widget"
                                                                        data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <h1
                                                                                class="elementor-heading-title elementor-size-default">
                                                                                <?php echo $itemData['title'] ?></h1>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-3cd80fd1 elementor-widget elementor-widget-text-editor"
                                                                        data-id="3cd80fd1" data-element_type="widget"
                                                                        data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div
                                                                                class="elementor-text-editor elementor-clearfix">
                                                                                <p> <?php echo $itemData['description'] ?>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section
                                                class="elementor-section elementor-inner-section elementor-element elementor-element-4a0526d8 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                data-id="4a0526d8" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3fc4efff"
                                                            data-id="3fc4efff" data-element_type="column">
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-732f5073 elementor-view-framed element-service-box-item-one-arrow-icon elementor-shape-circle elementor-widget elementor-widget-icon"
                                                                        data-id="732f5073" data-element_type="widget"
                                                                        data-widget_type="icon.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-wrapper">
                                                                                <a class="elementor-icon"
                                                                                    href="https://api.whatsapp.com/send?phone=6281374819762&text=Hallo Saya Ingin Bertanya Mengenai">
                                                                                    <i class="fa fa-long-arrow-right"
                                                                                        aria-hidden="true"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>


                                        </div>
                                    </div>
                                </div>

                                <?php } ?>




                    </section>


                </div>
            </div>
        </div>

    </div>
</div>

<div id="content" class="site-content">
    <div data-elementor-type="wp-post" data-elementor-id="5285" class="elementor elementor-5285"
        data-elementor-settings="[]">

        <div class="elementor-inner">
            <div class="elementor-section-wrap">
                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-3aa1f2aa"
                    data-id="3aa1f2aa" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-6d1317f6 elementor-widget elementor-widget-radiant-custom-button"
                                data-id="6d1317f6" data-element_type="widget"
                                data-widget_type="radiant-custom-button.default">
                                <div class="elementor-widget-container">
                                    <div class="radiantthemes-custom-button element-one hover-style-six  "
                                        data-button-direction="center" data-button-fullwidth="false"><a
                                            class="radiantthemes-custom-button-main"
                                            href="https://api.whatsapp.com/send?phone=" target="_blank" rel="nofollow">
                                            <div class="placeholder">
                                                Contact Us</div>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><br>

<?php include 'Template/Footer.php';?>