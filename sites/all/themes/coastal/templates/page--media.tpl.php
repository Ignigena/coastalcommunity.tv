<div id="mobile-navbar" role="banner" class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="nav-collapse collapse">
        <nav role="navigation">
          <ul class="nav">
          <?php
            foreach ($main_menu as $class => $menu) {
          ?>
            <li<?php if (strstr($class, 'active')) { ?> class="active"<?php } ?>><a href="/<?php print drupal_get_path_alias($menu['href']); ?>"><?php print $menu['title']; ?></a></li>
          <?php
            }
          ?>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>

<header id="header" role="banner">
  <div class="container">
    <?php print render($page['header_top']); ?>
  
    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
    <?php endif; ?>
  
    <?php if ($site_name || $site_slogan): ?>
      <hgroup id="name-and-slogan">
        <?php if ($site_slogan): ?>
          <h2 id="site-slogan"><?php print $site_slogan; ?></h2>
        <?php endif; ?>
      </hgroup>
    <?php endif; ?>
  
    <?php print render($page['header']); ?>
  </div>
</header>

<div id="main">
  <div class="titlewrap">
    <div class="container">
      <?php print render($tabs); ?>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
    </div>
  </div>

  <div id="main-content" role="main" class="container">
    <?php print render($page['highlighted']); ?>
    <a id="main-content-anchor"></a>
    <?php print render($title_suffix); ?>
    <div class="row-fluid">
      <?php
        $spancount = 12;
        if (render($page['sidebar_first'])):
          $spancount -= 4;
      ?>
      <div class="sidebar span4">
        <?php print render($page['sidebar_first']); ?>
      </div>
      <?php
        endif;
        
        if (render($page['sidebar_second'])) $spancount -= 4;
      ?>
      <div class="span<?php print $spancount; ?>">
        <?php if ($action_links): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        <?php print $messages; ?>
        <?php print render($page['help']); ?>
        <?php print render($page['content']); ?>
      </div>
      <?php if (render($page['sidebar_second'])): ?>
      <div class="sidebar span4">
        <?php print render($page['sidebar_second']); ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
</div>
<div id="below">
  <div id="below-content" class="container">
    <div class="row-fluid">
      <?php print render($page['below_content']); ?>
    </div>
  </div>
</div>
<?php if (render($page['navigation'])): ?>
  <div id="navigation">
    <?php print render($page['navigation']); ?>
  </div>
<?php endif; ?>

<?php print render($page['footer']); ?>
<?php print render($page['bottom']); ?>
