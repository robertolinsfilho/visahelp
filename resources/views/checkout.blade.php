<html>
@include('head')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
    .container {
  max-width: 960px;
}

.border-top { border-top: 1px solid #e5e5e5; }
.border-bottom { border-bottom: 1px solid #e5e5e5; }
.border-top-gray { border-top-color: #adb5bd; }

.box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }

.lh-condensed { line-height: 1.25; }
.navbar{
    background: linear-gradient(90deg, #0000CD 20%, #FF0000 100%);
}
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="pl-4 flex items-center">
          <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="/">
            <!--Icon from: http://www.potlabicons.com/ -->
            <svg class="h-8 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.005 512.005">
              <rect fill="#2a2a31" x="16.539" y="425.626" width="479.767" height="50.502" transform="matrix(1,0,0,1,0,0)" />
              <path
                class="plane-take-off"
                d=" M 510.7 189.151 C 505.271 168.95 484.565 156.956 464.365 162.385 L 330.156 198.367 L 155.924 35.878 L 107.19 49.008 L 211.729 230.183 L 86.232 263.767 L 36.614 224.754 L 0 234.603 L 45.957 314.27 L 65.274 347.727 L 105.802 336.869 L 240.011 300.886 L 349.726 271.469 L 483.935 235.486 C 504.134 230.057 516.129 209.352 510.7 189.151 Z "
              />
            </svg>
            VisaHelp
          </a>
        </div>
 

  <div  class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul style="margin-top:1%"class="list-reset lg:flex justify-end flex-1 items-center">
     
     
            <li class="mr-2">
              <a class="inline-block py-2 px-4 text-black font-bold no-underline" href="/login">Área Restrita</a>
            </li>
            <li class="mr-2">
              <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#">link</a>
            </li>
            <li class="mr-2">
              <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#">link</a>
            </li>
          </ul>
          <button style="margin-top: 0% !important;    margin-right: 2% !important; "
            id="navAction"
            class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-3 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
          >
            Action
          </button>  
       
      
    </ul>
   
  </div>
</nav>
<body class="bg-light">

    <div style="margin-top:5%"class="container">
      

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Seu Carrinho</span>
           
          </h4>
          @if($id == 1)
          <?php 
          $valor = "199.90";
          $nome = 'Intermediário';
          ?>
          @endif
          @if($id == 2)
          <?php 
          $valor = "149.90";
          $nome = 'Básico';
          ?>
          @endif
          @if($id == 3)
          <?php 
          $valor = "249.90";
          $nome = 'Express';
          ?>
          @endif
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0"><?php echo $nome?></h6>
               
              </div>
              <span class="text-muted">R$<?php echo $valor?></span>
            </li>       
                      
            <li class="list-group-item d-flex justify-content-between">
              <span>Total </span>
              <strong>R$ <?php echo $valor?></strong>
            </li>
          </ul>

         
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Dados Cadastrais</h4>
          <form action="/checkout" method="post" class="needs-validation" novalidate>
          @csrf
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Primeiro Nome</label>
                <input type="text" class="form-control" name="primeironome"id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Primeiro nome valido


                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Ultimo Nome</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Ultimo nome valido
                </div>
              </div>
            </div>

           

            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="voce@exemplo.com">
              <div class="invalid-feedback">
                Por favor insira um email valído
              </div>
            </div>

           

         

         
           

            <h4 class="mb-3">Pagamento</h4>

           <!-- <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credit">Cartão de Credito</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">Boleto</label>
              </div> 
             
            </div>-->
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Nome no Cartão</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                <small class="text-muted">Nome completo igual ao cartão</small>
                <div class="invalid-feedback">
                  O nome do cartão não  e válido
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Número do cartão de credito</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                <div class="invalid-feedback">
                 Número do cartão não e válido
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Data de Expiração</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="mm/aa" required>
                <div class="invalid-feedback">
                  Data de expiração inválida
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                <div class="invalid-feedback">
                  Código de segurança inválido
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar</button>
          </form>
        </div>
      </div>

     
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <link href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css" />
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();

      $( document ).ready(function() {
        $('#cc-expiration').mask("00/00");
          });
        
    </script>
    
  </body>