{capture name=path}{l s='Contact'}{/capture}
{include file=$tpl_dir./breadcrumb.tpl}

<h2>{l s='Contact us'}</h2>

{if isset($confirmation)}
	<p>{l s='Your message has been successfully sent to our team.'}</p>
	<ul class="footer_links">
		<li><a href="{$base_dir}"><img class="icon" alt="" src="{$img_dir}icon/home.gif"/></a><a href="{$base_dir}">{l s='Home'}</a></li>
	</ul>
{else}
	<p class="bold">{l s='For questions about an order or for information about our products'}.</p>
	{include file=$tpl_dir./errors.tpl}
	<form action="{$request_uri|escape:'htmlall':'UTF-8'}" method="post" class="std">
		<fieldset>
			<h3>{l s='Send a message'}</h3>
			<p class="select" style="display:none">
				<label for="id_contact">{l s='Subject'}</label>
				<select id="id_contact" name="id_contact" onchange="showElemFromSelect('id_contact', 'desc_contact')">
					<!--<option value="0">{l s='-- Choose --'}</option>-->
				{foreach from=$contacts item=contact}
					<option value="{$contact.id_contact|intval}" {if isset($smarty.post.id_contact) && $smarty.post.id_contact == $contact.id_contact}selected="selected"{/if}>{$contact.name|escape:'htmlall':'UTF-8'}</option>
				{/foreach}
				</select>
			</p>
			<p id="desc_contact0" class="desc_contact" style="display:none">&nbsp;</p>
		{foreach from=$contacts item=contact}
			<p id="desc_contact{$contact.id_contact|intval}" class="desc_contact" style="display:none;">
			<label>&nbsp;</label>{$contact.description|escape:'htmlall':'UTF-8'}</p>
		{/foreach}
		<p class="text">
			<label for="email">{l s='E-mail address'}</label>
			<input type="text" id="email" name="from" value="{$email}" />
		</p>
		<p class="textarea">
			<label for="message">{l s='Message'}</label>
			 <textarea id="message" name="message" rows="7" cols="35">{if isset($smarty.post.message)}{$smarty.post.message|escape:'htmlall':'UTF-8'|stripslashes}{/if}</textarea>
		</p>
		<p class="submit">
			<input type="submit" name="submitMessage" id="submitMessage" value="{l s='Send'}" class="button_large" onclick="$(this).hide();" />
		</p>
	</fieldset>
</form>
<div class="content-contact-information">
	<div class="contact-information" >
		<h3>{l s='Contact'}</h3>
		<p>Team-web.es <br>
		c/ Tolra 43-45 At-2 <br>
		Barcelona 08032 <br>
		España <br>
		Telf: 93-420-55-23 <br>
		Movil: 686-46-46-44<br>
		<a href="mailto:info@team-web.es">info@team-web.es</a> <br/>
		<a href="team-web.es" style="font-weight: bold">team-web.es</a>
		</p>
	</div>
	<div class="contact-map">
		<iframe width="480" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.bo/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=Carrer+Tolr%C3%A0,+45-46&amp;aq=&amp;sll=41.425384,2.157011&amp;sspn=0.008737,0.021136&amp;ie=UTF8&amp;hq=&amp;hnear=Carrer+Tolr%C3%A0,+45,+08032+Barcelona,+Espa%C3%B1a&amp;ll=41.425384,2.157011&amp;spn=0.008736,0.021136&amp;t=m&amp;z=14&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.bo/maps?f=q&amp;source=embed&amp;hl=es&amp;geocode=&amp;q=Carrer+Tolr%C3%A0,+45-46&amp;aq=&amp;sll=41.425384,2.157011&amp;sspn=0.008737,0.021136&amp;ie=UTF8&amp;hq=&amp;hnear=Carrer+Tolr%C3%A0,+45,+08032+Barcelona,+Espa%C3%B1a&amp;ll=41.425384,2.157011&amp;spn=0.008736,0.021136&amp;t=m&amp;z=14" style="color:#0000FF;text-align:left">Ver mapa más grande</a></small>
	</div>
</div>
{/if}
