@extends("layouts.apps")

@section('content')
 <!--== Slider Area Start ==-->
 <section id="slider-area">
        <!--== slide Item One ==-->
        
        <div class="home-slider-item slider-bg-1" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="book-a-car">
                            <form action="http://localhost:83/laravel2018/cars/public/success">
                                <!--== Pick Up Location ==-->
                                <div class="form-group">
              <label class="col-md-12 control-label" for="name">Jūsų vardas</label>
              <div class="col-md-9">
                <input id="name" name="subject" type="text" placeholder="Vardas" class="form-control">
              </div>
            </div>

    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-12 control-label" for="email">AUTONUOMA</label>
              <div class="col-md-9">
                <input id="email" name="to_email" type="text" placeholder="autonuoma@gmail.com" class="form-control">
              </div>
            </div>


            <!-- From Email input-->
            <div class="form-group">
              <label class="col-md-12 control-label" for="email">Jūsų el. paštas</label>
              <div class="col-md-9">
                <input id="email" name="from_email" type="text" placeholder="el. paštas" class="form-control">
              </div>
            </div>

    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-12 control-label" for="message">Jūsų žinutė</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Prašome rašyti čia..." rows="5"></textarea>
              </div>
            </div>

    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg" href="http://localhost:83/laravel2018/cars/public/success">Siusti</button>
              </div>
            </div>
                            
                                   
                        
    </section>
    <!--== Slider Area End ==-->

    @endsection

   