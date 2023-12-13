<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BNBL</title>
<!--

Template 2097 Pop

https://www.tooplate.com/view/2097-pop

-->
    <!-- load CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">                                  <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/fontawesome-all.min.css') }}">                <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>                       <!-- http://kenwheeler.github.io/slick/ -->
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/tooplate-style.css') }}">                               <!-- Templatemo style -->

    <script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this in a modern browser such as latest version of Chrome or Microsoft Edge.");</script>
    
</head>

<body>
    <div id="tm-bg"></div>
    <div id="tm-wrap">
        <div class="tm-main-content">
            <div class="container tm-site-header-container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-md-col-xl-6 mb-md-0 mb-sm-4 mb-4 tm-site-header-col">
                        <div class="tm-site-header">
                            <h1 class="mb-4">BNBL Acc. Update</h1>
                            <img src="{{ asset ('assets/img/underline.png') }}" class="img-fluid mb-4">
                            <p>Pleae verify yourself and get your newly reduced Account Number.</p>        
                        </div>                        
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="content">
                            <div class="grid">
                                <div class="grid__item" id="home-link">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-home fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Welcome</span>
                                            <div class="product__bg"></div>        
                                        </div>                                    
                                        <div class="product__description">
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <h2 class="tm-page-title">Welcome to Pop Design</h2>        
                                                </div>
                                            </div>                                        
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                    <img src="{{ asset ('assets/img/welcome-1.jpg') }}" class="img-fluid mb-3">
                                                    <p>You are allowed to download, modify and use this template for your commercial or business websites. </p>
                                                    <p>Please tell your friends about <a rel="nofollow" href="https://fb.com/tooplate" target="_parent">Tooplate</a>. That will be very helpful for us. Thank you.</p>    
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                    <p>You are NOT allowed to put this template ZIP file for a download purpose on any template collection website.</p>
                                                    <p>If you have any kind of question or comment, please feel free to <a rel="nofollow" href="https://www.tooplate.com/contact" target="_parent">contact us</a>. You are welcome.</p>
                                                    <img src="{{ asset('assets/img/welcome-2.jpg') }}" class="img-fluid">
                                                </div>                                        
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="grid__item">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-comments fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Get New Acc No.</span>
                                            <div class="product__bg"></div>             
                                        </div>                                                              
                                        <div class="product__description">
                                            <div class="pt-sm-4 pb-sm-4 pl-sm-5 pr-sm-5 pt-2 pb-2 pl-3 pr-3">
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <h2 class="tm-page-title">Get Now!!!</h2>        
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-12">
                                                        <p>Please enter your valid credentials in the given field below and get your new account number once Verified.</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <form  method="POST" action="{{ route('new_account.store') }}" class="contact-form">
                                                        @csrf
                                                            <div class="row">
                                                                <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                                                    <input type="text" id="account_number" name="account_number" class="form-control" placeholder="Account Number" required/>
                                                                    @error('account_number')
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group col-md-6 col-lg-6 col-xl-6" id="cidField" style="display: none;">
                                                                <input type="text" id="cid" name="cid" class="form-control" placeholder="CID" />
                                                                </div>
                                                                                                                    
                                                                  @error('cid')
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                                                    <input type="text" id="contact_name" name="village" class="form-control" placeholder="Village"  required/>
                                                                  </div>
                                                                  @error('village')
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                  <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                                                    <input type="text" id="contact_name" name="gewog" class="form-control" placeholder="Gewog"  required/>
                                                                  </div>
                                                                  @error('gewog')
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                  <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                                                    <input type="text" id="contact_name" name="dzongkhag" class="form-control" placeholder="Dzongkhag"  required/>
                                                                  </div>
                                                                  @error('dzongkhag')
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                  <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                                                    <input type="text" id="contact_name" name="household_number" class="form-control" placeholder="Household No."  required/>
                                                                  </div>
                                                                  @error('household_number')
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                  <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                                                    <input type="text" id="contact_name" name="phone_number" class="form-control" placeholder="Phone No."  required/>
                                                                  </div>
                                                                  @error('phone_number')
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                  <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                                                    <input type="file" id="contact_name" name="file_path" class="form-control" required/>
                                                                  </div>
                                                                  @error('file_path')
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                  <div class="form-group col-md-6 col-lg-6 col-xl-6 tm-col-email">
                                                                    <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                                                                  </div>
                                                            </div>                                                        
                                                            <!-- <div class="form-group">
                                                              <textarea id="contact_message" name="contact_message" class="form-control" rows="9" placeholder="Message" required></textarea>
                                                            </div> -->
                                                            <button type="submit" class="btn btn-primary tm-btn-submit">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>                       
                    </div>
                </div>                
            </div>
            <footer>
                <p class="small tm-copyright-text">Copyright &copy; <span class="tm-current-year">2020</span> BNBL. 
                
            </footer>
        </div> <!-- .tm-main-content -->  
    </div>
    <!-- load JS -->
    <script src="{{ asset('assets/js/jquery-3.2.1.slim.min.js') }}"></script>         <!-- https://jquery.com/ -->    
    <script src="{{ asset('assets/slick/slick.min.js') }} "></script>                  <!-- http://kenwheeler.github.io/slick/ -->  
    <script src="{{ asset('assets/js/anime.min.js') }}"></script>                     <!-- http://animejs.com/ -->
    <script src="{{ asset ('assets/js/main.js') }}"></script>  
    <script>      

        function setupFooter() {
            var pageHeight = $('.tm-site-header-container').height() + $('footer').height() + 100;

            var main = $('.tm-main-content');

            if($(window).height() < pageHeight) {
                main.addClass('tm-footer-relative');
            }
            else {
                main.removeClass('tm-footer-relative');   
            }
        }

        /* DOM is ready
        ------------------------------------------------*/
        $(function(){

            setupFooter();

            $(window).resize(function(){
                setupFooter();
            });

            $('.tm-current-year').text(new Date().getFullYear());  // Update year in copyright           
        });

    </script>  
    
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


    <script>
        $(document).ready(function() {
            // Add an event listener for the account_number input
            $('#account_number').on('input', function() {
                // Log a message to the console to check if the script is running
                console.log('Script function is running...');

                var accountNumber = $(this).val();

                // Make an AJAX request to check the existence of the account number
                $.ajax({
                    url: "{{ route('checkAccountNumber') }}",
                    method: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        account_number: accountNumber
                    },
                    success: function(response) {
                        if (response.exists) {
                            $('#cidField').show(); // Show the CID input field
                        } else {
                            $('#cidField').hide(); // Hide the CID input field
                        }
                    }
                });
            });
        });
    </script>

</body>
</html>