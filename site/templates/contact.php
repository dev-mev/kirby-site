<?php if (!$kirby->user()) go('/login') ?>
<?php snippet('header') ?>
  <main class="inner">

    <?php if($file = $page->file('contact-us.png')): ?>
    <img class="banner-image" src="<?= $file->url() ?>" alt="">
    <?php endif ?>

    <h2>BeMo Academic Consulting Inc.</h2>
    <?php if ($page->phone()->isNotEmpty()): ?>
      <p><span class="underline">Toll Free:</span <?= Html::tel($page->phone()) ?></p>
    <?php endif ?>
    <p><span class="underline">Email:</span> <?= Html::email($page->email()) ?></p>

    <?php if($success): ?>
    <div class="alert success">
      <p><?= $success ?></p>
    </div>
    <?php else: ?>
    <?php if (isset($alert['error'])): ?>
      <div><?= $alert['error'] ?></div>
    <?php endif ?>
    <form method="post" action="<?= $page->url() ?>">
      <div class="honeypot">
        <label for="website">Website <abbr title="required">*</abbr></label>
        <input type="website" id="website" name="website">
      </div>
      <div class="field">
        <label for="name">
          Name <abbr title="required">*</abbr>
        </label>
        <input type="text" id="name" name="name" value="<?= $data['name'] ?? '' ?>" required>
        <?= isset($alert['name']) ? '<span class="alert error">' . html($alert['name']) . '</span>' : '' ?>
      </div>
      <div class="field">
        <label for="email">
          Email Address <abbr title="required">*</abbr>
        </label>
        <input type="email" id="email" name="email" value="<?= $data['email'] ?? '' ?>" required>
        <?= isset($alert['email']) ? '<span class="alert error">' . html($alert['email']) . '</span>' : '' ?>
      </div>
      <div class="field">
        <label for="text">
          How can we help you? <abbr title="required">*</abbr>
        </label>
        <textarea id="text" name="text" required>
          <?= $data['text']?? '' ?>
        </textarea>
        <?= isset($alert['text']) ? '<span class="alert error">' . html($alert['text']) . '</span>' : '' ?>
      </div>
      <div class="button-container">
        <input type="submit" name="submit" value="Submit">
        <input type="reset" name="reset" value="Reset">
      </div>
    </form>
    <?php endif ?>

    <p>
    <span class="underline">Note:</span>
      If you are having difficulties with our contact us form above, send us an email to 
      info@bemoacademicconsulting.com (copy & paste the email address)
    </p>
  </main>

<?php snippet('footer') ?>