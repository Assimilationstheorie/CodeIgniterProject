<!DOCTYPE html>
<html lang="<?php echo $this->lang->line('html_lang'); ?>">
  <head>
    <title><?php echo $this->lang->line('site_title'); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
    <nav>
      <form action="change_language" method="POST">
      	<button type="submit" value="english" name="language"><?php echo $this->lang->line('language_english'); ?></button>
      	<button type="submit" value="german" name="language"><?php echo $this->lang->line('language_german'); ?></button>
      	<button type="submit" value="russian" name="language"><?php echo $this->lang->line('language_russian'); ?></button>
      </form>
    </nav>
