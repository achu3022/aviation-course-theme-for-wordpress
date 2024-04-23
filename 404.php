<?php
// Initialize the global variable
global $imgroot;
$imgroot = dirname(get_template_directory_uri()) . '/astra-child-airport';
?>

<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Astra
 * @since 2.0.0
 */

get_header();
?>

<!--  Hero Start -->
<style>
    #hero1 {
        width: 100%;
        height: 100vh;
        background-size: cover;
        background-position: top;
        position: relative;
    }
  
    #hero1:before {
        content: "";
        background: rgba(0, 0, 0, 0.6);
        position: absolute;
        bottom: 0;
        top: 0;
        left: 0;
        right: 0;
    }

    #hero1 .hero-container {
        position: absolute;
        bottom: 0;
        top: 0;
        left: 0;
        right: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        text-align: center;
        padding: 0 15px;
    }

    #hero1 h1 {
        margin: 0 0 10px 0;
        font-size: 48px;
        font-weight: 700;
        line-height: 56px;
        text-transform: uppercase;
        color: #fff;
    }

    #hero1 h2 {
        color: #eee;
        margin-bottom: 40px;
        font-size: 24px;
    }

    #hero1 .btn-get-started {
        font-family: "Poppins", sans-serif;
        text-transform: uppercase;
        font-weight: 400;
        font-size: 13px;
        letter-spacing: 1px;
        display: inline-block;
        padding: 8px 30px 9px 30px;
        border-radius: 50px;
        transition: 0.5s;
        border: 2px solid #fff;
        color: #fff;
    }

    #hero1 .btn-get-started:hover {
        background: #e43c5c;
        border: 2px solid #e43c5c;
    }

    @media (max-width: 768px) {
        #hero1 h1 {
            font-size: 28px;
            line-height: 36px;
        }

        #hero1 h2 {
            font-size: 18px;
            line-height: 24px;
            margin-bottom: 30px;
        }
    }

    @media (max-height: 500px) {
        #hero1 {
            height: 150vh;
        }
    }
</style>

<section id="hero1" class="hero1" style="background-image: url('<?php echo $imgroot; ?>/assets/img/404.png');">
    <div class="hero-container">
        <h1>Oops! <strong style="color:#e43c5c;">Page Not Found</strong></h1>
        <h2>404 Error</h2>
        <h2>Sorry, the page you're looking for cannot be found.<br> Please check the URL or use the search function below to find what you're looking for.</h2>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-get-started scrollto">Home</a>


    </div>
</section><!-- End Hero -->
 
