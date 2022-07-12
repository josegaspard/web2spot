<div class="lets-create">
    <div class="content">
        <div class="up">
            <h2 class="lets-create__text text">Comencemos a <span class="break-word"></span> crear algo especial</h2>
            <?php include('line.php'); ?>
        </div>
        <div class="middle">
            <?php include('arrow.php'); ?>

        </div>
        <div class="down">
            <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
  <div onclick="document.getElementById('id01').style.display='block'"><p class="lets-create__text">Cuéntanos acerca<span class="break-word"></span>de tu proyecto</p></div>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>

<div class="row">
  <div class="column">
  <img style="height:445px;" src="https://elspot.pe/wp-content/uploads/2022/04/fondo-popup.jpg">
  </div>
  <div class="column">
            <h3 style="font-size: 32px; line-height: 120%; color: #363485; font-weight: 700;">Cuéntanos sobre tu empresa y/o proyecto</h3>
            <div class="modal-cotizacion__content__form__content">
                <?php echo do_shortcode('[contact-form-7 id="198" title="Formulario de contacto 1"]'); ?>
            </div>
  </div>
</div>
      </div>
    </div>
  </div>
</div>
  
  <style>
    * {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  height: 450px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}

@media (min-width: 993px) {
.w3-modal-content {
    width: auto;
}
}

  </style>
        </div>
    </div>
</div>


<script>
document.addEventListener('DOMContentLoaded', function() {
    $('.btnModalInfo').click(function() {
        $('#contactForm').addClass('active')
    })
    $('.modal-cotizacion__close').click(function() {
        $('.modal-cotizacion').removeClass('active')
    })
    $('.btnCotiza').click(function() {
        $('#contactForm').addClass('active')
    })

})
</script>