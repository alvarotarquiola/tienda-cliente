<!-- Block informations module -->
<div id="informations_block_left" class="pagelinks">
	<ul><li><a href="{$base_dir}" title="{l s='Home'}"><img src="{$img_dir}icon/home.gif" alt="{l s='Home'}" class="icon" /></a><a href="{$base_dir}" title="{l s='Home'}">{l s='Home'}</a></li>
		{foreach from=$cmslinks item=cmslink}
			<li><a href="{$cmslink.link}" title="{$cmslink.meta_title|escape:html:'UTF-8'}">{$cmslink.meta_title|escape:html:'UTF-8'}</a></li>
		{/foreach}
        <li><a href="{$base_dir_ssl}sitemap.php" title="">{l s='Site map' mod='blockinfos'}</a></li>
        <li><a href="{$base_dir_ssl}contact-form.php" title="">{l s='Contact us' mod='blockinfos'}</a></li> 
	</ul>
</div>
<!-- /Block informations module -->
