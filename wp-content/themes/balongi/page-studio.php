<?php get_header();

//Récuperation des champs acf

$studio = get_fields();
// echo '<pre>';
// print_r($studio);
// echo '</pre>';
?>

<main id="studio">

    <div class="wrapper">

        <section id="presentation">
            <div>
                <h1><?php echo $studio['titre'] ?></h1>
                <p><?php echo $studio['paragraphe_presentation'] ?></p>

            </div>

            <div>
                <img src="<?php echo $studio['image_presentation']['sizes']['medium_large'] ?>" alt="">
            </div>
        </section>

        <section id="prestation">
            <h2><?php echo $studio['titre_prestation'] ?></h2>

            <div class="wrap-Prestation">
                <div class="presation-1">
                    <h3><?php echo $studio['prestations']['titre_prestation_1'] ?></h3>
                    <img src="<?php echo $studio['prestations']['picto_prestation_1']['url'] ?>" alt="">
                    <p><?php echo  $studio['prestations']['descriptif_prestation_1'] ?></p>

                </div>
                <div class="presation-2">
                    <h3><?php echo $studio['prestations']['titre_prestation_2'] ?></h3>
                    <img src="<?php echo $studio['prestations']['picto_prestation_2']['url'] ?>" alt="">
                    <p><?php echo  $studio['prestations']['descriptif_prestation_2'] ?></p>

                </div>
                <div class="presation-3">
                    <h3><?php echo $studio['prestations']['titre_prestation_3'] ?></h3>
                    <img src="<?php echo $studio['prestations']['picto_prestation_3']['url'] ?>" alt="">
                    <p><?php echo  $studio['prestations']['descriptif_prestation_3'] ?></p>

                </div>
            </div>
        </section>
        <section id="contact-studio" class="bandeau-rs">
            <h2>LOGO</h2>
            <?php echo get_template_part('template-parts/content-rs'); ?>

        </section>
    </div>
</main>

<?php get_footer(); ?>