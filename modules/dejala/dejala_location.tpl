		<form action="{$formAction}" method="post">
			<input type="hidden" name="method" value="location"/>
			<fieldset>
				<h4 class="clear">{l s='Please specify the address of your stock' mod='dejala'} {if ($djl_mode=='PROD')}{l s='(readonly)' mod='dejala'}{/if}: <a href="http://maps.google.com/maps?f=q&hl=fr&geocode=&q={$address},%20{$zipcode}%20{$city}" target="_blank"><img src='{$module_dir}google.gif'/>{l s='Locate' mod='dejala'}</a></h4>
				<label class="clear">{l s='Company' mod='dejala'}:</label>
				<div class="margin-form"><input size="25" type="text" name="company" value="{$company}" {$disabled}/></div>
				<label class="clear">{l s='Address' mod='dejala'}:</label>
				<div class="margin-form"><input type="text" name="address" value="{$address}" style="width: 300px;" {$disabled}/></div>
				<label class="clear">{l s='Address (2)' mod='dejala'}:</label>
				<div class="margin-form"><input type="text" name="address2" value="{$address2}" style="width: 300px;" {$disabled}/></div>
				<label class="clear">{l s='Postal code / Zip code' mod='dejala'}:</label>
				<div class="margin-form"><input size="5" type="text" name="zipcode" value="{$zipcode}" {$disabled}/></div>
				<label class="clear">{l s='City' mod='dejala'}:</label>
				<div class="margin-form"><input size="22" type="text" name="city" value="{$city}" {$disabled}/></div>
				<label class="clear">{l s='Phone' mod='dejala'}:</label>
				<div class="margin-form"><input size="14" type="text" name="phone" value="{$phone}" {$disabled}/></div>
				<label class="clear">{l s='Cellphone' mod='dejala'}:</label>
				<div class="margin-form"><input size="14" type="text" name="cellphone" value="{$cellphone}" {$disabled}/></div>
				<label class="clear">{l s='Comments' mod='dejala'}:</label>
				<div class="margin-form"><textarea rows="4" cols="45" name="comments" {$disabled}>{$comments}</textarea></div>
				<div class="margin-form"><input type="submit" name="btnSubmit" value="{l s='Update settings' mod='dejala'}" class="button" {$disabled}/></div>
			</fieldset>
		</form>
		