<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LandingPage</title>
    <link rel="stylesheet" href="style.css">

    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</head>
<body class="bg-dark">
             <?php   include "navbar.php";?>
</section>
              <section id="header"  class="row container-fluid header" > 
                       <div class="col container illustration d-flex justify-content-center align-items-center" id="cont-illust">
                           
                              <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512" id="svg">
                                  <path fill="#3F5EAB" d="M449.972 402.198L49.137 352.01c-11.646-1.458-19.904-12.081-18.446-23.728l28.33-226.272c1.458-11.646 12.081-19.905 23.728-18.447l400.835 50.188c11.646 1.458 19.904 12.082 18.446 23.728l-28.331 226.272c-1.458 11.646-12.081 19.905-23.727 18.447z"/>
                                     <linearGradient id="a" x1="60.149" x2="406.206" y1="466.36" y2="120.304" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" stop-color="#0FF"/><stop offset="1" stop-color="#FF7BAC"/>
                                     </linearGradient>
                                    <path fill="url(#a)" d="M435.159 428.604H31.195c-11.737 0-21.252-9.516-21.252-21.252v-228.04c0-11.737 9.515-21.251 21.252-21.251h403.964c11.737 0 21.252 9.515 21.252 21.251v228.04c0 11.736-9.515 21.252-21.252 21.252z"/>
                                    <path fill="#FFF" d="M172.403 360.501c12.869 0 12.891-20 0-20H52.569c-12.869 0-12.89 20 0 20h119.834zM207.07 360.501h24.592c12.869 0 12.891-20 0-20H207.07c-12.869 0-12.89 20 0 20z"/>
                                    <linearGradient id="b" x1="287.932" x2="362.64" y1="354.056" y2="354.056" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#B3B3B3"/>
                                        <stop offset=".016" stop-color="#B7B7B7"/>
                                        <stop offset=".152" stop-color="#D1D1D1"/>
                                        <stop offset=".302" stop-color="#E5E5E5"/>
                                        <stop offset=".47" stop-color="#F4F4F4"/>
                                        <stop offset=".672" stop-color="#FCFCFC"/>
                                        <stop offset="1" stop-color="#FFF"/>
                                    </linearGradient>
                                    <circle cx="325.286" cy="354.056" r="37.354" fill="url(#b)"/>
                                    <circle cx="385.619" cy="354.056" r="37.354" fill="#3F5EAB"/>
                                    <path fill="#FFF" d="M9.943 249.209c14.844 0 444.285.621 445.717 0 .177-.077.546 0 .751 0 .184 0 .19-25 0-25-14.843 0-444.284-.621-445.716 0-.178.077-.547 0-.752 0-.183 0-.19 25 0 25z"/>
                                </svg>
                       </div>
                       <div class="col container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="text-white text-center pt-2">
                                Best credit card providers
                            </h1>
                            <p class="text-white">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas excepturi culpa ipsa. Cupiditate illum dignissimos ipsum distinctio. Voluptatum, at rem?  
                                <br>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam rerum, aspernatur animi rem qui pariatur.
                            </p>


                                <button type="button" class="btn btn-success text-white buy-now">
                                    <!-- <span class="spinner-grow spinner-grow-sm"></span> -->
                                       Buy Now
                                 </button>

                       </div>
              </section>
              <section id="about" class="container-fluid row bg-light text-dark p-3 plans"> 
                  <h3 class="text-center">
                      Our plans
                  </h3>
                                <div class="container col border border-3 border-success p-1 me-1 d-flex flex-column justify-content-center align-items-center">
                                    <h4 class="text-center">
                                        Basic
                                    </h4>
                                    <p class="bg-success p-2 text-white text-center">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus, doloribus molestiae officiis ad aspernatur voluptates hic voluptas, porro perspiciatis dignissimos consequuntur commodi rem in.
                                    </p>
                                    <form action="">

                                        <div class="form-check container d-flex flex-column justify-content-center align-items-center">
                                            <label for="option">
                                            <input class="form-check-input" type="checkbox" id="check1" name="option" value="something">
                                                <label class="form-check-label">Cashbacks</label>
                                              <br>
                                            <label for="option3" class="form-check-label">Offers</label>
                                            <input class="form-check-input" type="checkbox" id="check2" name="option" value="something">
                                            <br>
                                            <label for="option2" class="form-check-label">Cashbacks</label>
                                            <input class="form-check-input" type="checkbox" id="check3" name="option" value="something">
                                              <br>
                                            <label for="option2" class="form-check-label">Offers</label>
                                            <input class="form-check-input" type="checkbox" id="check4" name="option" value="something">
                                        
                                          </div>

                                    </form>
                                    <button class="btn btn-warning pt-2">
                                        Check Out
                                    </button>
                                </div>
                                <div class="container col border border-3 border-danger p-1 me-1 d-flex flex-column justify-content-center align-items-center" >
                                    <h4 class="text-center">
                                        Intermediate
                                    </h4>
                                    <p class="bg-danger p-2 text-white text-center">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus, doloribus molestiae officiis ad aspernatur voluptates hic voluptas, porro perspiciatis dignissimos consequuntur commodi rem in.
                                    </p>
                                    <form action="">

                                        <div class="form-check container d-flex flex-column justify-content-center align-items-center">
                                            <label for="option">
                                            <input class="form-check-input" type="checkbox" id="check12" name="option" value="something" checked>
                                                <label class="form-check-label">Cashbacks</label>
                                              <br>
                                            <label for="option3" class="form-check-label">Offers</label>
                                            <input class="form-check-input" type="checkbox" id="check22" name="option" value="something" checked>
                                            <br>
                                            <label for="option2" class="form-check-label">Cashbacks</label>
                                            <input class="form-check-input" type="checkbox" id="check32" name="option" value="something">
                                              <br>
                                            <label for="option2" class="form-check-label">Offers</label>
                                            <input class="form-check-input" type="checkbox" id="check42" name="option" value="something">
                                        
                                          </div>

                                    </form>
                                    <button class="btn btn-warning pt-2">
                                        Check Out
                                    </button>
                                </div>
                                <div class="container col border border-3 border-primary p-1 me-1 d-flex flex-column justify-content-center align-items-center">
                                    <h4 class="text-center">
                                        Premium
                                    </h4>
                                    <p class="bg-primary p-2 text-white text-center">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus, doloribus molestiae officiis ad aspernatur voluptates hic voluptas, porro perspiciatis dignissimos consequuntur commodi rem in.
                                    </p>
                                    <form action="">

                                        <div class="form-check container d-flex flex-column justify-content-center align-items-center">
                                            <label for="option">
                                            <input class="form-check-input" type="checkbox" id="check13" name="option" value="something" checked>
                                                <label class="form-check-label">Cashbacks</label>
                                              <br>
                                            <label for="option3" class="form-check-label">Offers</label>
                                            <input class="form-check-input" type="checkbox" id="check23" name="option" value="something" checked>
                                            <br>
                                            <label for="option2" class="form-check-label">Cashbacks</label>
                                            <input class="form-check-input" type="checkbox" id="check33" name="option" value="something" checked>
                                              <br>
                                            <label for="option2" class="form-check-label">Offers</label>
                                            <input class="form-check-input" type="checkbox" id="check43" name="option" value="something" checked>
                                        
                                          </div>

                                    </form>
                                    <button class="btn btn-warning pt-2">
                                        Check Out
                                    </button>
                                </div>
              </section>
              <section class="footer">

              </section>
</body>
</html>