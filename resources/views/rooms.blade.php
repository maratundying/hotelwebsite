@extends ('layouts/headerlayout')

@section('title')
    <title>Սենյակներ</title>
@endsection

@section('body')
    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Մեր սենյակները</h2>
                        <div class="bt-option">
                            <a href="{{URL::to('/')}}">Home</a>
                            <span>Rooms</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Rooms Section Begin -->
    <section class="rooms-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="img/room/room-1.jpg" alt="">
                        <div class="ri-text">
                            <h4>Երկու անձի</h4>
                            <h3>8000դ<span>/օր</span></h3>
                            <table>
                                <tbody>
                                    
                                    <tr>
                                        <td class="r-o">Քանակ:</td>
                                        <td>Առավելագույնը 3</td>
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
                            @if($rooms[0]['reserved']!=1)
                            <a href="/fortwo" class="primary-btn">Ամրագրել</a>
                            @else 
                                <p>Reserved</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="img/room/room-2.jpg" alt="">
                        <div class="ri-text">
                            <h4>Երեք անձի</h4>
                            <h3>12000դ<span>/օր</span></h3>
                            <table>
                                <tbody>
                                    
                                    <tr>
                                        <td class="r-o">Քանակ:</td>
                                        <td>Առավելագույնը 4</td>
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
                            @if($rooms[1]['reserved']!=1)
                            <a href="/forthree" class="primary-btn">Ամրագրել</a>
                            @else
                                <p>Reserved</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="img/room/room-3.jpg" alt="">
                        <div class="ri-text">
                            <h4>Չորս անձի</h4>
                            <h3>15000դ<span>/օր</span></h3>
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
                            @if($rooms[2]['reserved']!=1)
                            <a href="/forfour" class="primary-btn">Ամրագրել</a>
                            @else
                                <p>Reserved</p>
                            @endif
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="img/room/room-5.jpg" alt="">
                        <div class="ri-text">
                            <h4>Հինգ և ավելի անձի</h4>
                            <h3>20000դ<span>/օր</span></h3>
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
                            @if($rooms[3]['reserved']!=1)
                            <a href="/forfive" class="primary-btn">Ամրագրել</a>
                            @else
                                <p>Reserved</p>
                            @endif
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </section>
    <!-- Rooms Section End -->

    @endsection

