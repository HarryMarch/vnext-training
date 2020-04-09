<form action="/" method="get">
    <label for="search">Search</label>
    <input type="hidden" name="category" value="10" >
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" required>
    <button type="submit">Search</button>
</form>