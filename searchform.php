<form role="search" method="get" action="<?php esc_url(home_url('/')) ?>">
    <input type="search" name="s" placeholder="vsv" value="<?php esc_attr(get_search_query()); ?>"/>
    <button type="submit">🔍</button>
</form>