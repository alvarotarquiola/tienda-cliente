<p class="payment_module">
	<a href="javascript:$('#lacaixa_form').submit();" title="{l s='Conectar con el TPV' mod='lacaixa'}">
		<img src="{$module_dir}visa.png" alt="{l s='Conectar con el TPV' mod='lacaixa'}" />
		{l s='Pago con tarjeta (conexi&oacute;n segura con LaCaixa)' mod='lacaixa'}
	</a>
</p>

<form action="{$urltpv}" method="post" id="lacaixa_form" class="hidden">	
	<input type="hidden" name="Ds_Merchant_Amount" value="{$cantidad}" />
    <input type="hidden" name="Ds_Merchant_Currency" value="{$moneda}" />
	<input type="hidden" name="Ds_Merchant_Order" value="{$pedido}" />
	<input type="hidden" name="Ds_Merchant_MerchantCode" value="{$codigo}" />
	<input type="hidden" name="Ds_Merchant_Terminal" value="{$terminal}" />
	<input type="hidden" name="Ds_Merchant_TransactionType" value="{$trans}" />
	<input type="hidden" name="Ds_Merchant_Titular" value="{$titular}" />
	<input type="hidden" name="Ds_Merchant_MerchantName" value="{$nombre}" />
	<input type="hidden" name="Ds_Merchant_MerchantURL" value="{$urltienda}" />
	<input type="hidden" name="Ds_Merchant_ProductDescription" value="{$productos}" />
	<input type="hidden" name="Ds_Merchant_UrlOK" value="{$UrlOk}" />
	<input type="hidden" name="Ds_Merchant_UrlKO" value="{$UrlKO}" />
	<input type="hidden" name="Ds_Merchant_MerchantSignature" value="{$firma}" />
</form>