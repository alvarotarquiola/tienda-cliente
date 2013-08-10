{include file=$tpl_dir./breadcrumb.tpl}

<!-- logo -->
					<div>    
                        {assign var="url_image_manu" value=$img_manu_dir|cat:$manufacturer->id|cat:'-medium.jpg'}
                        {if file_exists($url_image_manu)}
                    	   <img src="{$img_manu_dir}{$manufacturer->id|escape:'htmlall':'UTF-8'}-medium.jpg" alt="" width="{$mediumSize.width}" height="{$mediumSize.height}" style="float:left;margin:5px;" />
                        {/if}
                        
						{$manufacturer->description}
					
					</div>
                    
                    {assign var="url_image_manu" value=$img_manu_dir|cat:$manufacturer->id|cat:'-medium.jpg'}
    {if file_exists($url_image_manu)}
	   <img src="{$img_manu_dir}{$manufacturer->id|escape:'htmlall':'UTF-8'}-medium.jpg" alt="" width="{$mediumSize.width}" height="{$mediumSize.height}" style="float:left;margin:5px;" />
    {/if}
					
<div style="width:90%;clear:both;"></div>					
					
<h2>{l s='List of products by manufacturer:'}&nbsp;{$manufacturer->name|escape:'htmlall':'UTF-8'}</h2>

{include file=$tpl_dir./errors.tpl}

{if $products}
	{include file=$tpl_dir./product-sort.tpl}
	{include file=$tpl_dir./product-list.tpl products=$products}
	{include file=$tpl_dir./pagination.tpl}
{else}
	<p class="warning">{l s='No products for this manufacturer.'}</p>
{/if}
