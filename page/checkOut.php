<?php
  include '../process/db.php'
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CheckOut Page</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"
    />
    

    <!-- Tambahan Untuk Sheets -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />
    <link
      rel="styleseet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"
    />
    <link
      rel="styleseet"
      href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
    />

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="screen" />
    <!-- Habis -->


    <link rel="stylesheet" href="../assets/css/style.css" />
  </head>

  <body>
    <br><br> 

    <!-- Tambahan Buat CheckOut nya -->
    <div class="container rounded bg-white">
        <div class="row d-flex justify-content-center pb-5">
            <div class="col-sm-5 col-md-5 ml-1">
                <div class="py-4 d-flex flex-row">
                    <h5><span class="fa fa-check-square-o"></span><b>AganTravel</b> | </h5><span class="pl-2">Pay Portal</span>
                </div>
                <h4 class="green">Rp 1.850.000.00</h4>
                <h4> <img src="https://ik.imagekit.io/tvlk/image/imageResource/2019/12/12/1576140134467-906ded3638e9045d664adc40caa8ec47.png?tr=q-75,w-28">
                    Garuda Indonesia</h4>
                <p>Economy Class</p>
                <div class="col-8">
                    <p>Economy Class</p>
                    <p>1 Adult</p>
                    <span><i class="fa fa-suitcase "> 20 Kg</i> </span> 
                </div>
                <div class="d-flex pt-2">
                    <div>
                        <p><b>Biaya Asuransi. </b><span class="green">Rp 20.000.00</span></p>
                    </div>
                    <!-- <div class="ml-auto">
                        <p class="text-primary"><i class="fa fa-plus-circle text-primary"></i>Tambahkan Kartu Asuransi</p>
                    </div> -->
                </div>
                <!-- <p>Klaim asuransi dan semua yang diperlukan akan diserahkan kepada perusahaan asuransi Anda untuk bagian tertanggung dari pesanan ini</p>
                <div class="rounded bg-light d-flex">
                    <div class="p-2">Prudential</div>
                    <div class="ml-auto p-2">Diamond</div>
                </div> -->
                <hr>
                <div class="pt-2">
                    <div class="d-flex">
                        <div>
                            <p><b>Balance. </b><span class="green">Rp 50.000.00</span></p>
                        </div>
                        <div class="ml-auto p-2">
                            <p class="text-primary"><i class="fa fa-plus-circle text-primary"></i>Tambahkan Kartu</p>
                        </div>
                    </div>
                    <p> AganTravel akan melakukan praotorisasi kartu menggunakan biaya setara dengan tarik kamar untuk mengamankan pemesanan. </p>
                    <strong>Metode Pembayaran : </strong>
                    <br>
                    
                    <div class="d-flex flex-column"> 
                        <label class="radio"> <input type="radio" name="bank" value="VISA" checked>
                        <div class="d-flex justify-content-between"> 
                            <span>
                                <!-- <i class="fa fa-cc-visa pr-2"></i> -->
                                <img src="https://ik.imagekit.io/tvlk/image/imageResource/2019/05/20/1558336157462-2cdb1a639427a49e80060bb6e293d50f.png?tr=q-75,h-20" alt="">
                                VISA</span> 
                            <span>**** 1111</span> 
                        </div>
                    </label> 
                    <label class="radio"> <input type="radio" name="bank" value="BRI">
                        <div class="d-flex justify-content-between"> 
                            <span>
                                <!-- <i class="fa fa-cc-mastercard pr-2"></i> -->
                                <img src="https://ik.imagekit.io/tvlk/image/imageResource/2019/05/20/1558336152817-f0ef4ea005ad461b4b2cd0a8fdec6628.png?tr=q-75,h-20" alt="">
                                Bank BRI</span> 
                            <span>**** 2222</span> 
                        </div>
                    </label>
                    <label class="radio"> <input type="radio" name="bank" value="BCA">
                        <div class="d-flex justify-content-between"> 
                            <span>
                                <!-- <i class="fa fa-cc-paypal pr-2"></i> -->
                                <img src="https://ik.imagekit.io/tvlk/image/imageResource/2019/05/20/1558336144166-e6e7ce40ff72a97e6e0eeeabda7595d7.png?tr=q-75,h-20" alt="">
                                Bank BCA</span> 
                            <span>**** 2222</span> 
                        </div>
                    </label> 
                </div>
                    
                    <div> <input type="button" value="Bayar" class="btn btn-primary btn-block"> </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-4 offset-md-1 mobile">
                <div class="py-4 d-flex justify-content-end">
                    <!-- href nya index.html -->
                    <h6><a href="index.html">Cancel and return to website</a></h6>
                </div>
                <div class="bg-light rounded d-flex flex-column">
                    <div class="p-2 ml-3">
                        <h4>Order Recap</h4>
                    </div>
                    <div class="p-2 d-flex">
                        <div class="col-8">Garuda Indonesia</div>
                        <div class="ml-auto">Rp 1.850.000.00</div>
                    </div>
                    <div class="p-2 d-flex">
                        <div class="col-8">Aganinsurance( 0% )</div>
                        <div class="ml-auto">+ Rp 20.000.00</div>
                    </div>
                    
                    <div class="border-top px-4 mx-3"> </div>

                    <!-- <div class="border-top px-4 mx-3"></div> -->
                    
                    <div class="p-2 d-flex pt-3">
                        <div class="col-8"><b>Total</b></div>
                        <div class="ml-auto"><b class="green">Rp 1.870.000.00</b></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <br><br>
    <footer class="mastfoot mt-auto d-flex justify-content-center">
      <div class="inner">
        <p>Tubes PAW <b>@2021</b></p>
      </div>
    </footer>



  </body>
  
</html>
