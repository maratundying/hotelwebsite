@extends('layouts/headerlayout')
    <!-- Hero Section Begin -->
    @section('title')
        <title>ԶՈՐԱՎԱՆ հյուրանոցային համալիր</title>
    @endsection
    @section('body')
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-text">
                        <h1>ԶՈՐԱՎԱՆ ՀՅՈՒՐԱՆՈՑ</h1>
                        <p>Միշտ հաճելի և մատչելի</p>
                        <a href="#sec1" class="primary-btn">Բացահայտիր հենց հիմա</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1" >
                    
                    <!-- empty space -->
                </div>
            </div>
        </div>
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/hero/hero-1.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-2.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-3.jpg"></div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Us Section Begin -->
    <section class="aboutus-section spad" id="sec1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-title">
                            <span>Մեր մասին</span>
                            <h2>ԶՈՐԱՎԱՆ <br />Հյուրանոցային համալիր</h2>
                        </div>
                        <p class="f-para">Ողջու՛յն<br />Միշտ ուրախ ենք Ձեզ հյուրընկալել մեր հարմարավետ հյուրանոցւմ</p>
                        <p class="s-para">
                            Մենք գտնվում ենք Արցախի Հանրապետության Մարտունի քաղաքից 7կմ հեռավորության վրա։ Հյուրանոցը հարմար է զինվորների տեսակցության համար: Շենքում կա մթերային,հագուստի խանութներ,ավտոլվացման կետ,գարեջրատուն,ավտոկայանատեղի։</p>
                        <a href="#" class="primary-btn about-btn">Կարդալ ավելին</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-pic">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="img/about/about-1.jpg" alt="">
                            </div>
                            <div class="col-sm-6">
                                <img src="img/about/about-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section End -->

    <!-- Services Section End -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Բարի գալուստ</span>
                        <h2>Ծանոթացեք մեր ծառայություններին</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-036-parking"></i>
                        <h4>Ավտոկայանատեղի</h4>
                        <p>
                            Մեծ ավտոկայանատեղին տեղ կգտնի Ձեր ավտոմեքենայի ապահով կայանման համար։
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-033-dinner"></i>
                        <h4>Ճաշարան</h4>
                        <p>
                            ԸՆդարձակ ճաշարանը պատրաստ է հյուրընկալել բոլորին։
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-026-bed"></i>
                        <h4>Հարմարավետ սենյակներ</h4>
                        <p>
                            Կահավորված սենյակները պատրաստ են ըդունել անգամ մեծ քանակությամբ հյուրերի։ <br /> Ունենք երկու,երեք,չորս և ավել տեղանոց սենյակներ։
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-024-towel"></i>
                        <h4>Բաղնիք և լվացարան</h4>
                        <p>
                            Երկար ճանապարհից հետո լոգանք ընդունելը իսկակա՜ն փրկություն է<br /> Այդպե՞ս չէ
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-044-clock-1"></i>
                        <h4>Շուրջօրյա սպասարկում</h4>
                        <p>
                            Մենք պատրաստ ենք Ձեզ ընդունել տարվա և օրվա ցանկացած պահի։ 
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-012-cocktail"></i>
                        <h4>Բար</h4>
                        <p>
                            Ունենք բացօդյա գարեջրատուն և մի՜շտ շատ սառը գարեջուր։
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Home Room Section Begin -->
    <section class="hp-room-section">
        <div class="container-fluid">
            <div class="hp-room-items">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="img/room/room-b1.jpg">
                            <div class="hr-text">
                                <h3>Երկու անձի</h3>
                                <h2>8000դ<span>/օր</span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Քանակ:</td>
                                            <td>Առավելագույնը 3 հոգի</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Անկողիններ:</td>
                                            <td>King Beds</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Ծառայություններ:</td>
                                            <td>Wifi, Television, Բաղնիք,...</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="/fortwo" class="primary-btn">Իմանալ ավելին</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="img/room/room-b2.jpg">
                            <div class="hr-text">
                                <h3>Երեք անձի</h3>
                                <h2>12000դ<span>/օր</span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Քանակ:</td>
                                            <td>Առավելագույնը 4 հոգի</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Անկողիններ:</td>
                                            <td>King Beds</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Ծառայություններ:</td>
                                            <td>Wifi, Television, Բաղնիք,...</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="/forthree" class="primary-btn">Իմանալ ավելին</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="img/room/room-b3.jpg">
                            <div class="hr-text">
                                <h3>Չորս անձի</h3>
                                <h2>15000դ<span>/օր</span></h2>
                                <table>
                                    <tbody>
                                       <tr>
                                            <td class="r-o">Քանակ:</td>
                                            <td>Առավելագույնը 5</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Անկողիններ:</td>
                                            <td>King Beds</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Ծառայություններ:</td>
                                            <td>Wifi, Television, Բաղնիք,...</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="/forfour" class="primary-btn">Իմանալ ավելին</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="img/room/room-b4.jpg">
                            <div class="hr-text">
                                <h3>Հինգ և ավելի անձի</h3>
                                <h2>20000դ<span>/օր</span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Քանակ:</td>
                                            <td>5-7 անձի</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Անկողիններ:</td>
                                            <td>King Beds</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Ծառայություններ:</td>
                                            <td>Wifi, Television, Բաղնիք,...</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="/forfive" class="primary-btn">Իմանալ ավելին</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Room Section End -->

    
    
    <!-- Footer Section Begin -->
   

    
    @endsection