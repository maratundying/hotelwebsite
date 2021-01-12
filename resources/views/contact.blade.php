@extends ('layouts/headerlayout')

    @section ('title')
        <title>Հետադարձ կապ</title>
    @endsection

    @section('body')
    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-text">
                        <h2>Հետադարձ կապ</h2>
                        <p>
                            Բողոքների,հարցերի կամ առաջարկների համար կարող եք կապ հաստատել,մենք Ձեզ կպատասխանենք հնարավորինս շուտ։
                        </p>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="c-o">Հաասցե:</td>
                                    <td>Արցախ,Ք․Ճարտար</td>
                                </tr>
                                <tr>
                                    <td class="c-o">Հեռախոսահամար:</td>
                                    <td>(+374) 97 282809</td>
                                </tr>
                                <tr>
                                    <td class="c-o">Email:</td>
                                    <td>zoravan_hotel@gmail.com</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1">
                    <form action="#" class="contact-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name='name' placeholder="Ձեր անունը">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name='email' placeholder="Ձեր Email հասցեն">
                            </div>
                            <div class="col-lg-12">
                                <textarea name='message' placeholder="Ձեր նամակը"></textarea>
                                <button type="submit">ՈՒՂՂԱՐԿԵԼ ՀԻՄԱ</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24544.151897344564!2d47.10539457395991!3d39.73922434597189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x403c2ce6d867f667%3A0xbcb7d233b869eff5!2sZoravan!5e0!3m2!1sru!2s!4v1595267594384!5m2!1sru!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"
                    height="470" style="border:0;" allowfullscreen=""></iframe>

            </div>
        </div>
    </section>
    <!-- Contact Section End -->
    
    @endsection

