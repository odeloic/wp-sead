<form role="search" method="get" class="search__form" action="<?php echo esc_url(home_url('/')); ?>">
    <input type="search" class="search__form__input" placeholder="Search 'something' on website..." value="<?php echo get_search_query(); ?>" name="s">
    <input type="submit" value="Search" class="search__form__submit">
</form>