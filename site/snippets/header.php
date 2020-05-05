<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="<?= $page->mdescription()->html() ?>">

    <?php if($page->toggle()->toBool() === false): ?>
    <meta name="robots" content="noindex">
    <?php endif ?>

    <title><?= $page->mtitle() ?></title>

    <?= css(['assets/css/index.css', '@auto']) ?>
    <?= js('assets/js/script.js') ?>

    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '{your-pixel-id-goes-here}');
      fbq('track', 'PageView');
    </script>
    <noscript>
      <img height="1" width="1" style="display:none" 
          src="https://www.facebook.com/tr?id={your-pixel-id-goes-here}&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->

  </head>

  <body>
    <header class="header">
      <div class="logo">
        <a href="http://cdainterview.com/">
          <?php if($file = $page->file('bemo-logo2.png')): ?>
          <img src="<?= $file->url() ?>" alt="Site logo">
          <?php endif ?>
        </a>
      </div>

      <nav>
        <ul class="navbar">
          <li>
            <a href="home" rel="self">Main</a>
          </li>
          <li>
            <p>How To Prepare</p>
          </li>
          <li>
            <p>CDA Interview Questions</p>
          </li>
          <li>
            <a href="contact" rel="self">Contact Us</a>
          </li>
          <?php if ($user = $kirby->user()): ?>
            <li>
              <a href="<?= url('logout') ?>">Logout</a>
            </li>
          <?php endif ?>
        </ul>
      </nav>

      <div class="mobile-menu"></div>
    </header>