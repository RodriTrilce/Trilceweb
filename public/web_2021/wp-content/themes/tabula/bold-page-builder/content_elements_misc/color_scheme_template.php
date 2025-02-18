<?php

$custom_css = "

	/* Section */
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_section {
		color: {$color_scheme[1]};
		background-color: {$color_scheme[2]};
	}

	/* Row */
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_row,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_row_inner {
		color: {$color_scheme[1]};
		background-color: {$color_scheme[2]};
	}


	/* Headline */
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_headline {
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_headline .bt_bb_headline_superheadline {
		color: {$color_scheme[2]};
	}

	.bt_bb_dash_color_scheme_{$scheme_id}.bt_bb_headline.bt_bb_dash_bottom .bt_bb_headline_content:after, 
	.bt_bb_dash_color_scheme_{$scheme_id}.bt_bb_headline.bt_bb_dash_top_bottom .bt_bb_headline_content:after {
		color: {$color_scheme[1]};
	}
	.bt_bb_dash_color_scheme_{$scheme_id}.bt_bb_headline.bt_bb_dash_top .bt_bb_headline_content:before, 
	.bt_bb_dash_color_scheme_{$scheme_id}.bt_bb_headline.bt_bb_dash_top_bottom .bt_bb_headline_content:before {
		color: {$color_scheme[2]};
	}


	/* Icons */
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon a {
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon:hover a {
		color: {$color_scheme[2]};
	}
	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
		background-color: transparent;
		box-shadow: 0 0 0 1px {$color_scheme[1]} inset;
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_outline:hover .bt_bb_icon_holder:before {
		background-color: {$color_scheme[1]};
		box-shadow: 0 0 0 1em {$color_scheme[1]} inset;
		color: {$color_scheme[2]};
	}
	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
		box-shadow: 0 0 0 1em {$color_scheme[2]} inset;
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_filled:hover .bt_bb_icon_holder:before {
		box-shadow: 0 0 0 1px {$color_scheme[2]} inset;
		background-color: {$color_scheme[1]};
		color: {$color_scheme[2]};
	}
	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_borderless:hover .bt_bb_icon_holder:before {
		color: {$color_scheme[2]};
	}
	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon .bt_bb_icon_holder span {
		color: {$color_scheme[2]};
	}


	/* Counter */
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_counter_holder .bt_bb_counter_icon {
		color: {$color_scheme[2]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter_text {
		color: {$color_scheme[2]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter {
		color: {$color_scheme[1]};
	}

	/* Buttons */
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_outline a {
		box-shadow: 0 0 0 1px {$color_scheme[1]} inset;
		color: {$color_scheme[1]};
		background-color: transparent;
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_outline:hover a {
		box-shadow: 0 0 0 3em {$color_scheme[1]} inset;
		color: {$color_scheme[2]};		
	}

	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_filled a {
		box-shadow: 0 0 0 3em {$color_scheme[2]} inset;
		color: {$color_scheme[1]};		
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_filled a:hover {
		color: {$color_scheme[2]};	
		box-shadow: 0 0 0 1px {$color_scheme[2]} inset;
		background-color: transparent;	
	}

	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_clean a,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_borderless a {
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_clean a:hover,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_borderless:hover a {
		color: {$color_scheme[2]};
	}


	/* Services */
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder	{
		box-shadow: 0 0 0 1px {$color_scheme[1]} inset;
		color: {$color_scheme[1]};
		background-color: transparent;
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
		box-shadow: 0 0 0 1em {$color_scheme[1]} inset;
		background-color: {$color_scheme[1]};
		color: {$color_scheme[2]};
	}	
	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder {
		box-shadow: 0 0 0 1em {$color_scheme[2]} inset;
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder	{
		box-shadow: 0 0 0 1px {$color_scheme[2]} inset;
		background-color: {$color_scheme[1]};
		color: {$color_scheme[2]};
	}
	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder {
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_borderless.bt_bb_service .bt_bb_service_content_title,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_borderless.bt_bb_service .bt_bb_service_content_title a {
		color: {$color_scheme[2]};
	}

	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
		color: {$color_scheme[2]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_service_content_title,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_service_content_title a {
		color: {$color_scheme[1]};
	}

	.bt_bb_color_scheme_{$scheme_id}.bt_bb_service .bt_bb_service_content_button_text a {
		color: {$color_scheme[2]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_service:hover .bt_bb_service_content_button_text a {
		color: {$color_scheme[1]};
	}


	/* Tabs */
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline .bt_bb_tabs_header,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled .bt_bb_tabs_header {
		border-color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline .bt_bb_tabs_header li,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled .bt_bb_tabs_header li:hover,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled .bt_bb_tabs_header li.on {
		border-color: {$color_scheme[1]};
		color: {$color_scheme[1]};
		background-color: transparent;
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline .bt_bb_tabs_header li:hover,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline .bt_bb_tabs_header li.on,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled .bt_bb_tabs_header li {
		background-color: {$color_scheme[1]};
		color: {$color_scheme[2]};
		border-color: {$color_scheme[1]};		
	}

	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_simple .bt_bb_tabs_header li {
		color: {$color_scheme[2]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_simple .bt_bb_tabs_header li.on {
		color: {$color_scheme[1]};
		border-color: {$color_scheme[1]};
	}


	/* Accordion */
	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id} .bt_bb_accordion_item {
		border-color: {$color_scheme[1]};
	}
	
	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline .bt_bb_accordion_item_title {
		border-color: {$color_scheme[1]};
		color: {$color_scheme[1]};
		background-color: transparent;
	}
	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content,
	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline .bt_bb_accordion_item:hover .bt_bb_accordion_item_title_content {
		color: {$color_scheme[2]};
		background-color: {$color_scheme[1]};
	}

	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline .bt_bb_accordion_item:not(.on):hover:before {
		box-shadow: 0 0 0 1px {$color_scheme[2]};
		color: {$color_scheme[2]};
	}

	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline .bt_bb_accordion_item:hover .bt_bb_accordion_item_title {
		color: {$color_scheme[2]};
	}
	
	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content {
		color: {$color_scheme[2]};
		background-color: {$color_scheme[1]};
	}
	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content,
	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content:hover {
		color: {$color_scheme[1]};
		background-color: transparent;
	}
	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content .bt_bb_accordion_item_title,
	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content:hover .bt_bb_accordion_item_title {
		color: {$color_scheme[1]};
	}

	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled .bt_bb_accordion_item:before {
		box-shadow: 0 0 0 1px {$color_scheme[2]};
		color: {$color_scheme[2]};
	}
	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled .bt_bb_accordion_item:hover:before {
		box-shadow: 0 0 0 1px {$color_scheme[1]};
		color: {$color_scheme[1]};
	}
	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled .bt_bb_accordion_item.on:hover:before {
		box-shadow: 0 0 0 1px {$color_scheme[1]};
		color: {$color_scheme[1]};
	}
	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled .bt_bb_accordion_item.on:before {
		box-shadow: 0 0 0 1px {$color_scheme[1]};
		color: {$color_scheme[1]};
	}

	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_icon_holder {
		color: {$color_scheme[2]};
	}
	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_simple .bt_bb_accordion_item:hover .bt_bb_icon_holder {
		color: {$color_scheme[1]};
	}
	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title {
		color: {$color_scheme[1]};
	}
	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
	.bt_bb_accordion.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title {
		color: {$color_scheme[1]};
	}


	/* Price List */
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_price_list .bt_bb_price_list_price {
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_price_list .bt_bb_price_list_title,
	.bt_bb_price_list.bt_bb_color_scheme_{$scheme_id} .bt_bb_price_list_supertitle {
		color: {$color_scheme[2]};
	}

	.bt_bb_color_scheme_{$scheme_id}.bt_bb_price_list.bt_bb_style_outline {
		border-color: {$color_scheme[1]};
	}
	


	/* Schedule*/
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_schedule .bt_bb_schedule_title_flex {
		background-color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_schedule .bt_bb_schedule_content {
		background-color: {$color_scheme[2]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_schedule .bt_bb_schedule_title_flex {
		background-color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day span:not(.bt_bb_schedule_inner_location),
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day span:not(.bt_bb_schedule_inner_location):before,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_time span:not(.bt_bb_schedule_inner_desc),
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_time span.bt_bb_schedule_inner_desc:before,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_day span.bt_bb_schedule_inner_location:before {
		color: {$color_scheme[1]};
	}

	/* Timetable */
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content .bt_bb_timetable_item_title {
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_timetable .bt_bb_timetable_item:nth-child(odd) .bt_bb_timetable_item_content,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_timetable .bt_bb_timetable_item:nth-child(even) .bt_bb_timetable_item_image {
		border-color: {$color_scheme[2]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content:before {
		border-color: {$color_scheme[2]};
		color: {$color_scheme[2]};
	}


	/* Slider */

	.bt_bb_color_scheme_{$scheme_id}.bt_bb_content_slider .slick-dots li {
		background-color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_content_slider .slick-dots li.slick-active,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_content_slider .slick-dots li:hover {
		background-color: {$color_scheme[2]};
	}

	/* Progress Bar */
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_progress_bar .bt_bb_progress_bar_bg {
		background-color: {$color_scheme[2]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_progress_bar .bt_bb_progress_bar_inner {
		background-color: {$color_scheme[1]};
		color: {$color_scheme[2]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_progress_bar .bt_bb_progress_bar_inner .bt_bb_progress_bar_icon .bt_bb_icon_holder {
		color: {$color_scheme[1]};
	}

	/* Card */
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_card .bt_bb_card_content .bt_bb_card_content_inner .bt_bb_card_title:before {
		color: {$color_scheme[2]};
	}

	/* Simple Cost Calculator */
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_text {
		background: {$color_scheme[2]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_amount {
		background: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_cost_calculator .bt_bb_widget_switch.on {
		background: {$color_scheme[2]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_cost_calculator .bt_bb_widget_switch {
		background: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_cost_calculator .bt_bb_widget_switch > div {
		border-color: {$color_scheme[2]};
	}

	/* Organic Animation */
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_organic_animation .item .item__meta .item__button_text a {
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
		color: {$color_scheme[2]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_organic_animation .item .item__meta .item__button_text a:hover:after {
		color: {$color_scheme[2]};
	}

	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a {
		color: {$color_scheme[1]};
		box-shadow: 0 0 0 1px {$color_scheme[1]} inset;
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
		color: {$color_scheme[1]};
		box-shadow: 0 0 0 3em {$color_scheme[2]} inset;
	}

	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a {
		color: {$color_scheme[1]};
		box-shadow: 0 0 0 3em {$color_scheme[2]} inset;
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
		color: {$color_scheme[2]};
		box-shadow: 0 0 0 1px {$color_scheme[2]} inset;
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:hover:after {
		color: {$color_scheme[2]};
	}

";