<?php
/*
Template Name: comp
*/
?>
<?php get_header(); ?>

<div class='main'>
  <div class='inside'>
    <div class='stars'></div>
    <p class='age'>Na nejlepší čeká řada cen a přidají se ke špičkám českého internetu. Soutěž je věkově omezena do 18 let (včetně).</p>
    <a href='http://souteze.juniorinternet.cz/register/' class='button'>Chci soutěžit</a>
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
  </div>
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class='inside'>
		<?php the_content(__('(celý článek...)')); ?>
	</div>

	<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
	
</div>

<?php get_footer(); ?>