
<!DOCTYPE html>
<html lang="<?php echo $this->lang->line('html_lang'); ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $this->lang->line('site_title'); ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">
  </head>
  <body>
    <nav class="navbar is-transparent">
      <div class="navbar-menu" id="navbarExampleTransparentExample">
        <div class="navbar-end">
          <div class="navbar-item">
            <div class="field is-grouped">
              <p class="control">
                <form action="change_language" method="POST">
                  <button type="submit" value="english" name="language" class="button is-link is-outlined"><?php echo $this->lang->line('language_english'); ?></button>
                  <button type="submit" value="german" name="language" class="button is-link is-outlined"><?php echo $this->lang->line('language_german'); ?></button>
                  <button type="submit" value="russian" name="language" class="button is-link is-outlined"><?php echo $this->lang->line('language_russian'); ?></button>
                </form>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-burger burger" onclick="document.querySelector('.navbar-menu').classList.toggle('is-active');">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </nav>
