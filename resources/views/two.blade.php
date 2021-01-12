@extends ('layouts/headerlayout')
    @section('title')
        <title>Երկու անձի - ԶՈՐԱՎԱՆ</title>
    @endsection
    
    @section('body')
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Երկու անձի</h2>
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

    <!-- Room Details Section Begin -->
    <section class="room-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="room-details-item">
                        <img src="img/room/room-details.jpg" alt="">
                        <div class="rd-text">
                            <div class="rd-title">
                                <h3>Երկու անձի</h3>
                                
                            </div>
                            <h2>8000դ<span>/օր</span></h2>
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
                        </div>
                    </div>
                    <div class="rd-reviews">
                        
                    </div>
                    <div class="review-add">
                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="room-booking">
                        <h3>Ամրագրում</h3>
                        <form id="reservation_form" method="POST" action="/reservation">
                            @csrf
                            <input type="hidden" name="rooms" value="fortwo">
                            <div class="check-date">
                                <label for="name">Ձեր անունը:</label>
                                <input type="text" name="name" id='name'>
                            </div>

                            <div class="check-date">
                                <label for="phone">Ձեր հեռախոսահամարը:</label>
                                <input type="text" placeholder="374XXXXXXXX" name="phone" id="phone">
                            </div>

                            <div class="check-date">
                                <label for="date-in">Ամսաթիվ:</label>
                                <input type="text" name="checkin" class="date-input" id="date-in">
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="check-date">
                                <label for="date-out">Օրերի քանակ:</label>
                                <input type="text" value='1' name="days" min="1" id="date-out">
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="select-option">
                                <label for="guest">Հյուրերի քանակ:</label>
                                <select id="guest" disabled="">
                                    <option value="">2 անձի</option>
                                </select>
                            </div>
                            <div id="reservation_errors"></div>
                            @if($room[0]->reserved!=1)
                            <button id='reservation' type="submit">Զբաղեցնել հիմա</button>
                            @else 
                            <p>Reserved</p>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @endsection