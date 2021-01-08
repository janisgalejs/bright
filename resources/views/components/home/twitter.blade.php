<div class="col-md-8">
    <div class="row">
        <div class="col-4">
            <div class="row">
                <div class="col">
                    <img src="{{ asset('images/wind.jpg') }}" alt="Wind" class="me-1"> 19&deg;, 6 m/s
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="twitter-post my-3">
                        <h5>Twitter account 1, 30.07.2020</h5>
                        <img src="{{ asset('images/twitter.jpg') }}" alt="Twitter" class="float-start m-3">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="twitter-post my-3">
                        <h5>Twitter account 2, 30.07.2020</h5>
                        <img src="{{ asset('images/twitter.jpg') }}" alt="Twitter" class="float-start m-3">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    </div>
                    <div class="twitter-post my-3">
                        <h5>Twitter account 3, 30.07.2020</h5>
                        <img src="{{ asset('images/twitter.jpg') }}" alt="Twitter" class="float-start m-3">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="row">
                <div class="col text-end">
                    <h2>{{ date('l, d.m.Y') }}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/img1.jpg') }}" alt="Img 1">
                        <div class="card-body">
                            <div class="card-text">
                                <p>
                                    <span class="sia-thumbnail yellow"></span>
                                    <strong>SIA Pēteris</strong><br>05.08.2020
                                </p>
                                <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/img2.jpg') }}" alt="Img 2">
                        <div class="card-body">
                            <div class="card-text">
                                <p>
                                    <span class="sia-thumbnail green"></span>
                                    <strong>SIA Liepu kalns</strong><br>10.08.2020
                                </p>
                                <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
