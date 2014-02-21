<?php
/*
Template Name: comp
*/
?>
<?php get_header(); ?>

<div class='main section'>
  <div class='inside'>
    <div class='stars'></div>
    <p class='age'>Na nejlepší čeká řada cen a přidají se ke špičkám českého internetu. Soutěž je věkově omezena do 18 let (včetně).</p>
    <a href='http://souteze.juniorinternet.cz/register/' class='button'>Chci soutěžit</a>
    <p class='comp-closing'>Přihlášky prodlouženy do 24. 2. 2014</p>
    <div class='line'></div>
    <div class='orange'>Soutěžní disciplíny a ceny</div>
  </div>
  <div class='between'>
    <div class='awards'>
      <div class='categories'>
        <div class='category junior-web'>
          <h2>Junior Web</h2>
          <p class='about'>Webové stránky, internetové služby a projekty umístěné na Internetu.</p>
          <p class='older'>mladší / starší</p>
        </div>
        <div class='category internet-veci'>
          <h2>Internet Věcí</h2>
          <p class='about'>Soutěž pro týmy. 3D Modely či fyzické věci, které spojují fyzický svět a internet.</p>
        </div>
        <div class='category junior-web'>
          <h2>Junior Design</h2>
          <p class='about'>Design webových stránek či jiné elektronické grafické práce.</p>
          <p class='older'>mladší / starší</p>
        </div>
        <div class='category junior-text'>
          <h2>Junior text</h2>
          <p class='about'>Slohová práce na téma “svoboda na internetu”.</p>
        </div>
      </div>
      <div class='icons'>
        <div class='icon icon1'></div>
        <div class='icon icon2'></div>
        <div class='icon icon3'></div>
        <div class='icon icon4'></div>
        <div class='icon icon5'></div>
      </div>
    </div>
    <div class="special-awards" id="special-awards">
      <h3 class="orange">Speciální ceny</h3>
      <div class="special-row">
        <div>
          <h4>Nadace Vodafone</h4>
          <p>Speciální cena pro web prospěšný místu vašeho bydliště. V rámci této speciální ceny probíhají i krajská kola a vyhlašují se první tři místa. (<a href="#junioerb-rules">Podrobná pravidla</a> <a href="http://www.juniorinternet.cz/wp-content/uploads/2014/02/2014_juniorerb_reditele.pdf">Informace pro učitele a ředitele v PDF</a>)</p>
          <p class="special-note">V minulých letech ji vyhrál například projekt Drahomíra Hanáka <a href="http://www.schoolhelper.eu" target="_blank">SchoolHelper.eu</a> nebo Matěj Polák a projekt <a href="http://g-one.tv">studentské televize Gymnázia Dačice</a>.</p>
        </div>
        <div>
          <h4>JuniorErb</h4>
          <p>Speciální cena pro web prospěšný místu vašeho bydliště. V rámci této speciální ceny probíhají i krajská kola a vyhlašují se první tři místa. (<a href="#junioerb-rules">Podrobná pravidla</a> <a href="http://www.juniorinternet.cz/wp-content/uploads/2014/02/2014_juniorerb_reditele.pdf">Informace pro učitele a ředitele v PDF</a>)</p>
        </div>
      </div>
      <div class="special-row">
        <div>
          <h4>Cena veřejnosti</h4>
          <p>Veřejnost uděluje cenu díky internetovému hlasování, které probíhá až do 10.&nbsp;3.</p>
        </div>
        <div>
          <h4>Cena za uživatelský zážitek na mobilech</h4>
          <p>Doba je mobilní a udělujeme proto speciální cenu projektu, který je nejlépe optimalizován pro mobilní zařízení.</p>
        </div>
      </div>
    </div>
  </div>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <div class='inside'>
    <?php the_content(__('(celý článek...)')); ?>
  </div>

  <?php endwhile; else: ?>

  <div class='inside'>
    <p><?php _e('Tato stránka zde bohužel není :('); ?></p>
  </div>

  <?php endif; ?>
</div>

<div class='partners-section section'>
  <div class='inside'>
    <?php include 'sponsors.php'; ?>
  </div>
</div>

<?php get_footer(); ?>
