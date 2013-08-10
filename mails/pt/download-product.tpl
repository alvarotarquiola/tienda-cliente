<ul><br />
{foreach from=$virtualProducts item=product}<br />
<li><br />
<a href="{$product.link}">{$product.name}</a><br />
{if isset($product.deadline)}<br />
expira a {$product.deadline}<br />
{/if}<br />
{if isset($product.downloadable)}<br />
pode ser descarregado {$product.downloadable} vez(es).<br />
{/if}<br />
</li><br />
{/foreach}<br />
</ul>