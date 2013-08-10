        {if $MENU != ''}
        </div>
				<!-- Menu -->
        <div class="sf-contener">
         <ul class="sf-menu">
            {$MENU}
            {if $MENU_SEARCH}
            <li class="sf-search noBack" style="float:right">
             <form id="searchbox" action="search.php" method="get">
                 <div><input type="hidden" value="position" name="orderby"/>
                <input type="hidden" value="desc" name="orderway"/>
                <input type="text" class="textfield" name="search_query" value="{if isset($smarty.get.search_query)}{$smarty.get.search_query}{/if}" />
                 <input name="submit_search" type="image" value="" src="{$content_dir}modules/blocktopmenu/img/buttonSearch.png"/>
              </div></form>
            </li>
            {/if}
          </ul>
          
        <script type="text/javascript" src="{$this_path}js/hoverIntent.js"></script>
        <script type="text/javascript" src="{$this_path}js/superfish-modified.js"></script>
        <link rel="stylesheet" type="text/css" href="{$this_path}css/superfish-modified.css" media="screen" />
				<!--/ Menu -->
        {/if}	