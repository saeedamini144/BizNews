<?php
/*
Template Name: Search Page
*/
?>
<div role="search" class="position-relative ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;">
    <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
        <input type="search" name="s" class="form-control border-0 pr-5" placeholder="Keyword" value="<?php echo get_search_query(); ?>" style="width: 100%;">
        <button type="submit" class="position-absolute bg-primary text-dark border-0" style="top: 0; right: 0; height: 100%; width: 40px;">
            <i class="fa fa-search"></i>
        </button>
    </form>
</div>
