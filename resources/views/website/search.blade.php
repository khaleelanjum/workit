<div class="container main_inner_search_block margin-top-50">
    <div class="main_input_search_part">
        <div class="main_input_search_part_item">
            <input type="text" placeholder="What are you looking for?" value=""/>
        </div>
        <div class="main_input_search_part_item location">
            <input id="current_location" type="text" placeholder="Search Location..." value=""/>
            <a href="#"><i class="sl sl-icon-location"></i></a>
        </div>
        <div class="main_input_search_part_item intro-search-field">
            <select data-placeholder="All Categories" class="selectpicker default"
                    title="All Categories" data-selected-text-format="count" data-size="4">
                @foreach($featured_categories as $categories)
                    <option value="{{$categories->id}}">{{json_decode($categories->name)->en}}</option>
                @endforeach
            </select>
        </div>
        <button class="button" onclick="">Search</button>
    </div>
</div>