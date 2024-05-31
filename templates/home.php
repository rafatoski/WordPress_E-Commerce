<?php
/*
Template Name: Home Page
*/
?>
<?php get_template_part( 'parts/header' ); ?>
<!-- Hero Principal -->
<div class="px-md-4 pt-5 text-center bg-light rounded-5 rounded-top-0">
      <h1 class="mt-5 display-4 fw-bold text-body-emphasis">Diseños web que impulsan tu éxito online</h1>
      <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">¡Bienvenido a WooMasters! Encuentra la colección más amplia de temas premium diseñados específicamente para WordPress y WooCommerce. Nuestros temas no solo son estéticamente atractivos, sino que también están optimizados para una conversión máxima y una experiencia de usuario excepcional. Impulsa tu proyecto en línea con WooMasters y lleva tu presencia web al siguiente nivel.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
          <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3">Empieza gratis ahora</button>        
        </div>
      </div>
      <div class="overflow-hidden" style="max-height: 30vh;">
        <div class="container ">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/woocommerce-website-example.jpg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Ejemplo de Temas Bootstrap" width="700" height="500" >
        </div>
      </div>
    </div>
</div>
<main class="container py-5">
    <div class="container col-xxl-8 mx-auto text-dark">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/multiples-websites.png" class="d-block img-fluid" alt="Example of Bootstrap Themes" >
        </div>
        <div class="col-lg-6">
          <h3 class="display-5 fw-bold lh-1 mb-3">Potencia tu Presencia Web con Nuestros Temas Exclusivos</h3>
          <p class="lead">Descubre una selección de temas premium diseñados para potenciar tu presencia en línea. Nuestros diseños están optimizados para WordPress y WooCommerce, ofreciendo una combinación perfecta de estética y funcionalidad. Convierte visitantes en clientes y lleva tu sitio web al siguiente nivel con nosotros.</p>        
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">          
            <button type="button" class="btn btn-outline-info btn-lg px-4">Ver Plantillas</button>
            <a href="#" class="btn btn-link">Ver Planes</a>
          </div>
        </div>
      </div>
    </div> 
</main>
  <!-- Planes de Membresía -->
  <section class=" bg-dark rounded-5 p-5" id="planes">
    <div class="container">
        <div class="row">
        <div class="col">
            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
            <h1 class="display-4 fw-bold text-white-50">Planes de Membresía</h1>
            <p class="fs-5 text-light">Explora nuestros planes diseñados para impulsar tu presencia en línea. Convierte tu sitio web en una obra maestra con acceso exclusivo a nuestra colección de temas premium. Desde soporte prioritario hasta actualizaciones regulares, cada plan está diseñado para brindarte la mejor experiencia posible. ¡Descubre el plan ideal para ti y desbloquea un mundo de posibilidades para tu negocio en línea!</p>
            </div>
        </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-start">
        <div class="col">
            <div class="card border-0 bg-transparent mb-4 rounded-0 text-white">
            <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Básico</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">$0<small class="text-white-50 fw-light">/mes</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                <li>Acceso a 12 temas gratuitos al año (uno al mes)</li>
                <li>Soporte básico</li>
                <li>Actualizaciones regulares</li>
                <li>Compatibilidad con los últimos plugins</li>
                <li>Documentación detallada</li>
                </ul>
                <button type="button" class="w-100 btn btn-lg btn-outline-info">Registrarse Gratis</button>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4 rounded-0 border-0 border-start bg-transparent text-white ">
            <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Mensual</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">$15<small class="text-body-secondary fw-light">/mes</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                <li>Acceso ilimitado a todos los temas</li>
                <li>Soporte prioritario</li>
                <li>Actualizaciones regulares</li>
                <li>Compatibilidad con los últimos plugins</li>
                <li>Documentación detallada</li>
                </ul>
                <button type="button" class="w-100 btn btn-lg btn-outline-info">Obtener Premium</button>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm border-info">
            <div class="card-header py-3 text-bg-info border-info">
                <h4 class="my-0 fw-normal text-white">Anual</h4>
            </div>
            <div class="card-body bg-white bg-gradient">
                <h1 class="card-title pricing-card-title">$150<small class="text-body-secondary fw-light">/año</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                <li><i class="bi bi-check text-success"></i>Acceso ilimitado a todos los temas</li>
                <li><i class="bi bi-check text-success"></i>Soporte prioritario 24/7</li>
                <li><i class="bi bi-check text-success"></i>Consultoría personalizada</li>
                <li><i class="bi bi-check text-success"></i>Actualizaciones regulares</li>
                <li><i class="bi bi-check text-success"></i>Compatibilidad con los últimos plugins</li>
                </ul>
                <button type="button" class="w-100 btn btn-lg btn-info text-white"><i class="bi bi-person-video3"></i> Contactar</button>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>


    <?php get_template_part( 'parts/footer' ); ?>