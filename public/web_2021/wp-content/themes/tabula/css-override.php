<?php
if ( class_exists( 'BoldThemesFramework' ) && isset( BoldThemesFramework::$crush_vars ) ) {
	$boldthemes_crush_vars = BoldThemesFramework::$crush_vars;
}
if ( class_exists( 'BoldThemesFramework' ) && isset( BoldThemesFramework::$crush_vars_def ) ) {
	$boldthemes_crush_vars_def = BoldThemesFramework::$crush_vars_def;
}
if ( isset( $boldthemes_crush_vars['accentColor'] ) ) {
	$accentColor = $boldthemes_crush_vars['accentColor'];
} else {
	$accentColor = "#ee5b54";
}
if ( isset( $boldthemes_crush_vars['alternateColor'] ) ) {
	$alternateColor = $boldthemes_crush_vars['alternateColor'];
} else {
	$alternateColor = "#ffde39";
}
if ( isset( $boldthemes_crush_vars['bodyFont'] ) ) {
	$bodyFont = $boldthemes_crush_vars['bodyFont'];
} else {
	$bodyFont = "Roboto";
}
if ( isset( $boldthemes_crush_vars['menuFont'] ) ) {
	$menuFont = $boldthemes_crush_vars['menuFont'];
} else {
	$menuFont = "Montserrat";
}
if ( isset( $boldthemes_crush_vars['headingFont'] ) ) {
	$headingFont = $boldthemes_crush_vars['headingFont'];
} else {
	$headingFont = "Playfair Display";
}
if ( isset( $boldthemes_crush_vars['headingSuperTitleFont'] ) ) {
	$headingSuperTitleFont = $boldthemes_crush_vars['headingSuperTitleFont'];
} else {
	$headingSuperTitleFont = "Montserrat";
}
if ( isset( $boldthemes_crush_vars['headingSubTitleFont'] ) ) {
	$headingSubTitleFont = $boldthemes_crush_vars['headingSubTitleFont'];
} else {
	$headingSubTitleFont = "Roboto";
}
if ( isset( $boldthemes_crush_vars['crestWidth'] ) ) {
	$crestWidth = $boldthemes_crush_vars['crestWidth'];
} else {
	$crestWidth = "110";
}
$accentColorDark = CssCrush\fn__l_adjust( $accentColor." -15" );$accentColorVeryDark = CssCrush\fn__l_adjust( $accentColor." -35" );$accentColorVeryVeryDark = CssCrush\fn__l_adjust( $accentColor." -42" );$accentColorLight = CssCrush\fn__a_adjust( $accentColor." -30" );$alternateColorDark = CssCrush\fn__l_adjust( $alternateColor." -15" );$alternateColorVeryDark = CssCrush\fn__l_adjust( $alternateColor." -25" );$alternateColorLight = CssCrush\fn__a_adjust( $alternateColor." -40" );if ( isset( $boldthemes_crush_vars['logoHeight'] ) ) {
	$logoHeight = $boldthemes_crush_vars['logoHeight'];
} else {
	$logoHeight = "80";
}
$css_override = sanitize_text_field("select,
input{font-family: \"{$bodyFont}\",Arial,Helvetica,sans-serif;}
input[type='submit']{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;
    -webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
input[type='submit']:hover{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;
    color: {$accentColor};}
.fancy-select ul.options li:hover{color: {$accentColor};}
.btContent a{color: {$accentColor};}
a:hover{
    color: {$accentColor};}
.btText a{color: {$accentColor};}
body{font-family: \"{$bodyFont}\",Arial,Helvetica,sans-serif;}
h1,
h2,
h3,
h4,
h5,
h6{font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
blockquote{
    font-family: \"{$bodyFont}\",Arial,Helvetica,sans-serif;}
.btContentHolder table thead th{
    background-color: {$accentColor};}
.btAccentDarkHeader .btPreloader .animation > div:first-child,
.btLightAccentHeader .btPreloader .animation > div:first-child,
.btTransparentLightHeader .btPreloader .animation > div:first-child{
    background-color: {$accentColor};}
.btPreloader .animation .preloaderLogo{height: {$logoHeight}px;}
body.error404 .btErrorPage .port .bt_bb_icon{color: {$accentColor};}
body.error404 .btErrorPage .port .bt_bb_button.filled a{background: {$accentColor};}
body.error404 .btErrorPage .port .bt_bb_button.filled a:after{-webkit-box-shadow: 0 0 0 6px {$accentColor};
    box-shadow: 0 0 0 6px {$accentColor};}
body.error404 .btErrorPage .port .bt_bb_button.filled a:hover:after{-webkit-box-shadow: 0 0 0 0 {$accentColor};
    box-shadow: 0 0 0 0 {$accentColor};}
.btBreadCrumbs span a{color: {$accentColor};}
.btBreadCrumbs span:not(:last-child):after{
    background-color: {$accentColor};}
.btPageHeadline.bt_bb_background_image .btArticleAuthor a:hover,
.btPageHeadline.bt_bb_background_image .btArticleComments:hover{color: {$accentColor} !important;}
.btNoSearchResults .bt_bb_port #searchform input[type='submit']{
    -webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
.btNoSearchResults .bt_bb_port #searchform input[type='submit']:hover{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;
    color: {$accentColor};}
.btHasCrest.btMenuHorizontal:not(.btMenuCenter):not(.btStickyHeaderActive) .logo{
    padding-left: {$crestWidth}px;}
.rtl.btHasCrest.btMenuHorizontal:not(.btMenuCenter):not(.btStickyHeaderActive) .logo{
    padding-right: {$crestWidth}px;}
.btHasCrest.btMenuHorizontal:not(.btMenuCenter):not(.btStickyHeaderActive) .btTopToolsLeft{margin-left: {$crestWidth}px;}
.rtl.btHasCrest.btMenuHorizontal:not(.btMenuCenter):not(.btStickyHeaderActive) .btTopToolsLeft{margin-right: {$crestWidth}px;}
.btHasCrest.btMenuHorizontal:not(.btMenuCenter):not(.btStickyHeaderActive) .btBelowLogoArea .menuPort{margin-left: {$crestWidth}px;}
.rtl.btHasCrest.btMenuHorizontal:not(.btMenuCenter):not(.btStickyHeaderActive) .btBelowLogoArea .menuPort{margin-right: {$crestWidth}px;}
.btHasCrest.btMenuHorizontal:not(.btMenuCenter):not(.btStickyHeaderActive) .btCrest .btCrestImg{width: {$crestWidth}px;}
.btHasCrest.btMenuHorizontal.btMenuLeft.btNoLogo:not(.btStickyHeaderActive) .menuPort{margin-left: {$crestWidth}px;}
.rtl.btHasCrest.btMenuHorizontal.btMenuLeft.btNoLogo:not(.btStickyHeaderActive) .menuPort{margin-right: {$crestWidth}px;}
.btHasCrest.btMenuHorizontal.btMenuCenter.btNoLogo:not(.btStickyHeaderActive) .menuPort .rightNav{padding-left: {$crestWidth}px;}
.mainHeader{
    font-family: \"{$menuFont}\",Arial,Helvetica,sans-serif;}
.mainHeader a:hover{color: {$accentColor};}
.menuPort{font-family: \"{$menuFont}\",Arial,Helvetica,sans-serif;}
.menuPort nav ul li a:hover{color: {$accentColor};}
.menuPort nav > ul > li > a{line-height: {$logoHeight}px;}
.btTextLogo{font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;
    line-height: {$logoHeight}px;}
.btLogoArea .logo img{height: {$logoHeight}px;}
.btTransparentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btTransparentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btAccentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btAccentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btLightDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btHasAltLogo.btStickyHeaderActive .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btTransparentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:after,
.btTransparentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:after,
.btAccentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:after,
.btAccentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:after,
.btLightDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:after,
.btHasAltLogo.btStickyHeaderActive .btHorizontalMenuTrigger:hover .bt_bb_icon:after{border-top-color: {$accentColor};}
.btTransparentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btTransparentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btAccentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btAccentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btLightDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btHasAltLogo.btStickyHeaderActive .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before{border-top-color: {$accentColor};}
.btMenuHorizontal .menuPort nav > ul > li > a:after{
    background-color: {$accentColor};}
.btMenuHorizontal .menuPort nav > ul > li.on li.current-menu-ancestor > a,
.btMenuHorizontal .menuPort nav > ul > li.on li.current-menu-item > a,
.btMenuHorizontal .menuPort nav > ul > li.current-menu-ancestor li.current-menu-ancestor > a,
.btMenuHorizontal .menuPort nav > ul > li.current-menu-ancestor li.current-menu-item > a,
.btMenuHorizontal .menuPort nav > ul > li.current-menu-item li.current-menu-ancestor > a,
.btMenuHorizontal .menuPort nav > ul > li.current-menu-item li.current-menu-item > a{color: {$accentColor};}
.btMenuHorizontal .menuPort nav > ul > li:not(.btMenuWideDropdown) > ul > li.menu-item-has-children > a:before{
    background-color: {$accentColor};}
.btMenuHorizontal .menuPort ul ul li a:hover{color: {$accentColor};}
body.btMenuHorizontal .subToggler{
    line-height: {$logoHeight}px;}
html:not(.touch) body.btMenuHorizontal .menuPort > nav > ul > li.btMenuWideDropdown > ul > li > a:after{
    background-color: {$accentColor};}
.btMenuHorizontal .topBarInMenu{
    height: {$logoHeight}px;}
.btAccentLightHeader .btBelowLogoArea,
.btAccentLightHeader .topBar{background-color: {$accentColor};}
.btAccentLightHeader .btBelowLogoArea a:hover,
.btAccentLightHeader .topBar a:hover{color: {$alternateColor};}
.btAccentDarkHeader .btBelowLogoArea,
.btAccentDarkHeader .topBar{background-color: {$accentColor};}
.btAccentDarkHeader .btBelowLogoArea a:hover,
.btAccentDarkHeader .topBar a:hover{color: {$alternateColor};}
.btLightAccentHeader .btLogoArea,
.btLightAccentHeader .btVerticalHeaderTop{background-color: {$accentColor};}
.btLightAccentHeader .btLogoArea a:hover,
.btLightAccentHeader .btVerticalHeaderTop a:hover{color: {$alternateColor};}
.btLightAccentHeader.btMenuHorizontal.btBelowMenu .mainHeader .btLogoArea{background-color: {$accentColor};}
.btLightAccentHeader.btMenuHorizontal.btBelowMenu .mainHeader .btLogoArea a:hover{color: {$alternateColor};}
.btTransparentDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btTransparentLightHeader .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btAccentLightHeader .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btAccentDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btLightDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btHasAltLogo.btStickyHeaderActive .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btTransparentDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon:after,
.btTransparentLightHeader .btVerticalMenuTrigger:hover .bt_bb_icon:after,
.btAccentLightHeader .btVerticalMenuTrigger:hover .bt_bb_icon:after,
.btAccentDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon:after,
.btLightDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon:after,
.btHasAltLogo.btStickyHeaderActive .btVerticalMenuTrigger:hover .bt_bb_icon:after{border-top-color: {$accentColor};}
.btTransparentDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btTransparentLightHeader .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btAccentLightHeader .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btAccentDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btLightDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btHasAltLogo.btStickyHeaderActive .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before{border-top-color: {$accentColor};}
.btMenuVertical .mainHeader .btCloseVertical:before:hover{color: {$accentColor};}
.btMenuHorizontal .topBarInLogoArea{
    height: {$logoHeight}px;}
.btMenuHorizontal .topBarInLogoArea .topBarInLogoAreaCell{border: 0 solid {$accentColor};}
.btMenuVertical .mainHeader .btCloseVertical:before:hover{color: {$accentColor};}
.btDarkSkin .btSiteFooterCopyMenu .port:before,
.btLightSkin .btDarkSkin .btSiteFooterCopyMenu .port:before,
.btDarkSkin.btLightSkin .btDarkSkin .btSiteFooterCopyMenu .port:before{background-color: {$accentColor};}
.btContent .btArticleHeadline .bt_bb_headline a:hover{color: {$accentColor};}
.btPostSingleItemStandard .btArticleShareEtc > div.btReadMoreColumn .bt_bb_button a{
    color: {$accentColor};}
.btMediaBox.btQuote:before,
.btMediaBox.btLink:before{
    background-color: {$accentColor};}
.sticky.btArticleListItem .btArticleHeadline h1 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h2 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h3 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h4 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h5 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h6 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h7 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h8 .bt_bb_headline_content span a:after{
    color: {$accentColor};}
.post-password-form p:first-child{color: {$accentColor};}
.post-password-form p:nth-child(2) input[type=\"submit\"]{
    -webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
.post-password-form p:nth-child(2) input[type=\"submit\"]:hover{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;
    color: {$accentColor};}
.btPagination{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.btPagination .paging a:hover{color: {$accentColor};}
.btPagination .paging a:hover:after{color: {$accentColor};}
.btPrevNextNav .btPrevNext .btPrevNextItem .btPrevNextTitle{font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.btPrevNextNav .btPrevNext .btPrevNextItem .btPrevNextDir{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;
    color: {$accentColor};}
.btPrevNextNav .btPrevNext:hover .btPrevNextTitle{color: {$accentColor};}
.btArticleCategories a{color: {$accentColor};}
.btArticleCategories a:not(:first-child):before{
    background-color: {$accentColor};}
.btArticleAuthor a:hover{color: {$accentColor};}
.btArticleComments:hover{color: {$accentColor};}
.btCommentsBox .vcard .posted{
    font-family: \"{$bodyFont}\",Arial,Helvetica,sans-serif;}
.btCommentsBox .commentTxt p.edit-link,
.btCommentsBox .commentTxt p.reply{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.btCommentsBox .commentTxt p.edit-link:hover,
.btCommentsBox .commentTxt p.reply:hover{
    color: {$accentColor};}
.btCommentsBox .comment-navigation a,
.btCommentsBox .comment-navigation span{
    font-family: \"{$headingSubTitleFont}\",Arial,Helvetica,sans-serif;}
.comment-awaiting-moderation{color: {$accentColor};}
a#cancel-comment-reply-link{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
a#cancel-comment-reply-link:hover{
    color: {$accentColor};}
.btCommentSubmit{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;
    -webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
.btCommentSubmit:hover{color: {$accentColor};
    -webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;}
.btBox ul li.current-menu-item > a,
.btCustomMenu ul li.current-menu-item > a,
.btTopBox ul li.current-menu-item > a{color: {$accentColor};}
.btBox .quantity,
.btCustomMenu .quantity,
.btTopBox .quantity{
    font-family: \"{$headingSubTitleFont}\",Arial,Helvetica,sans-serif;}
.widget_calendar table caption{background: {$accentColor};
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.widget_calendar table tbody tr td#today{color: {$accentColor};}
.widget_rss li a.rsswidget{font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.widget_shopping_cart .total{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.widget_shopping_cart .total .amount{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.widget_shopping_cart .total strong{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.widget_shopping_cart .buttons .button{
    background: {$accentColor};}
.widget_shopping_cart .widget_shopping_cart_content .mini_cart_item .ppRemove a.remove{
    background-color: {$accentColor};}
.widget_shopping_cart .widget_shopping_cart_content .mini_cart_item .ppRemove a.remove:hover{background-color: {$alternateColor};}
.menuPort .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetIcon span.cart-contents,
.topTools .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetIcon span.cart-contents,
.topBarInLogoArea .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetIcon span.cart-contents{
    background-color: {$alternateColor};
    font: normal 10px/1 \"{$menuFont}\";}
.btMenuVertical .menuPort .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetInnerContent .verticalMenuCartToggler,
.btMenuVertical .topTools .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetInnerContent .verticalMenuCartToggler,
.btMenuVertical .topBarInLogoArea .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetInnerContent .verticalMenuCartToggler{
    background-color: {$accentColor};}
.widget_recent_reviews{font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.widget_price_filter .price_slider_wrapper .ui-slider .ui-slider-handle{
    background-color: {$accentColor};}
.btBox .tagcloud a,
.btTags ul a{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;
    -webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
.btAccentDarkHeader .topTools .btIconWidget:hover,
.btAccentDarkHeader .topBarInMenu .btIconWidget:hover{color: {$alternateColor};}
.topTools a.btIconWidget:hover,
.topBarInMenu a.btIconWidget:hover{color: {$accentColor};}
.btSidebar .btIconWidget .btIconWidgetIcon,
footer .btIconWidget .btIconWidgetIcon,
.topBarInLogoArea .btIconWidget .btIconWidgetIcon{
    color: {$accentColor};}
.btSidebar .btIconWidget .btIconWidgetContent .btIconWidgetTitle,
footer .btIconWidget .btIconWidgetContent .btIconWidgetTitle,
.topBarInLogoArea .btIconWidget .btIconWidgetContent .btIconWidgetTitle{
    color: {$accentColor};}
.btSidebar .btIconWidget .btIconWidgetContent .btIconWidgetText,
footer .btIconWidget .btIconWidgetContent .btIconWidgetText,
.topBarInLogoArea .btIconWidget .btIconWidgetContent .btIconWidgetText{
    font-family: \"{$headingSubTitleFont}\",Arial,Helvetica,sans-serif;}
.btAccentIconWidget.btIconWidget .btIconWidgetIcon{color: {$accentColor};}
a.btAccentIconWidget.btIconWidget:hover{color: {$accentColor};}
.btLightSkin .btSiteFooterWidgets .btSearch button:hover,
.btDarkSkin .btLightSkin .btSiteFooterWidgets .btSearch button:hover,
.btLightSkin .btDarkSkin .btLightSkin .btSiteFooterWidgets .btSearch button:hover,
.btDarkSkin .btSiteFooterWidgets .btSearch button:hover,
.btLightSkin .btDarkSkin .btSiteFooterWidgets .btSearch button:hover,
.btDarkSkin.btLightSkin .btDarkSkin .btSiteFooterWidgets .btSearch button:hover,
.btLightSkin .btSidebar .btSearch button:hover,
.btDarkSkin .btLightSkin .btSidebar .btSearch button:hover,
.btLightSkin .btDarkSkin .btLightSkin .btSidebar .btSearch button:hover,
.btDarkSkin .btSidebar .btSearch button:hover,
.btLightSkin .btDarkSkin .btSidebar .btSearch button:hover,
.btDarkSkin.btLightSkin .btDarkSkin .btSidebar .btSearch button:hover,
.btLightSkin .btSidebar .widget_product_search button:hover,
.btDarkSkin .btLightSkin .btSidebar .widget_product_search button:hover,
.btLightSkin .btDarkSkin .btLightSkin .btSidebar .widget_product_search button:hover,
.btDarkSkin .btSidebar .widget_product_search button:hover,
.btLightSkin .btDarkSkin .btSidebar .widget_product_search button:hover,
.btDarkSkin.btLightSkin .btDarkSkin .btSidebar .widget_product_search button:hover{background: {$accentColor} !important;
    border-color: {$accentColor} !important;}
.btSearchInner.btFromTopBox .btSearchInnerClose .bt_bb_icon a.bt_bb_icon_holder{color: {$accentColor};}
.btSearchInner.btFromTopBox .btSearchInnerClose .bt_bb_icon:hover a.bt_bb_icon_holder{color: {$accentColorDark};}
.btSearchInner.btFromTopBox button:hover:before{color: {$accentColor};}
div.btButtonWidget.btAccentLightButton a{color: {$accentColor};}
div.btButtonWidget.btLightAccentButton a{
    -webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
div.btButtonWidget.btLightAccentButton a:hover{color: {$accentColor};
    -webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;}
div.btButtonWidget.btDarkAccentButton a{
    -webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
div.btButtonWidget.btDarkAccentButton a:hover{color: {$accentColor};
    -webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;}
div.btButtonWidget.btAlternateLightButton a{color: {$alternateColor};}
div.btButtonWidget.btLightAlternateButton a{
    -webkit-box-shadow: 0 0 0 3em {$alternateColor} inset;
    box-shadow: 0 0 0 3em {$alternateColor} inset;}
div.btButtonWidget.btLightAlternateButton a:hover{color: {$alternateColor};
    -webkit-box-shadow: 0 0 0 1px {$alternateColor} inset;
    box-shadow: 0 0 0 1px {$alternateColor} inset;}
.bt_bb_headline .bt_bb_headline_superheadline{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_headline.bt_bb_subheadline .bt_bb_headline_subheadline{font-family: \"{$headingSubTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_headline h1 strong,
.bt_bb_headline h2 strong,
.bt_bb_headline h3 strong,
.bt_bb_headline h4 strong,
.bt_bb_headline h5 strong,
.bt_bb_headline h6 strong{color: {$accentColor};}
.bt_bb_dash_bottom.bt_bb_headline .bt_bb_headline_content:after,
.bt_bb_dash_top_bottom.bt_bb_headline .bt_bb_headline_content:after{
    color: {$accentColor};}
.bt_bb_button .bt_bb_button_text{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter_text{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_countdown.btCounterHolder .btCountdownHolder > span{font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_countdown.btCounterHolder .btCountdownHolder span[class$=\"_text\"] > span{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;
    color: {$accentColor};}
.bt_bb_countdown.btCounterHolder .btCountdownHolder span[class$=\"_text\"]{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_progress_bar span.bt_bb_progress_bar_text{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_latest_posts .bt_bb_latest_posts_item .bt_bb_latest_posts_item_content:before{
    color: {$accentColor};}
.btHeadingDash_circle .bt_bb_latest_posts .bt_bb_latest_posts_item .bt_bb_latest_posts_item_content:before{
    color: {$accentColor};}
.btHeadingDash_balloon .bt_bb_latest_posts .bt_bb_latest_posts_item .bt_bb_latest_posts_item_content:before{
    color: {$alternateColor};}
.bt_bb_latest_posts .bt_bb_latest_posts_item .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta .bt_bb_latest_posts_item_date,
.bt_bb_latest_posts .bt_bb_latest_posts_item .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta .bt_bb_latest_posts_item_author,
.bt_bb_latest_posts .bt_bb_latest_posts_item .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta .bt_bb_latest_posts_item_comments{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_latest_posts .bt_bb_latest_posts_item .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta .bt_bb_latest_posts_item_date a:hover,
.bt_bb_latest_posts .bt_bb_latest_posts_item .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta .bt_bb_latest_posts_item_author a:hover,
.bt_bb_latest_posts .bt_bb_latest_posts_item .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta .bt_bb_latest_posts_item_comments a:hover{color: {$accentColor};}
.bt_bb_latest_posts .bt_bb_latest_posts_item .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta .bt_bb_latest_posts_item_category ul.post-categories{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_latest_posts .bt_bb_latest_posts_item .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta .bt_bb_latest_posts_item_category ul.post-categories li a:hover{color: {$accentColor};}
.bt_bb_latest_posts .bt_bb_latest_posts_item .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta .bt_bb_latest_posts_item_author a:hover{color: {$accentColor};}
.bt_bb_latest_posts .bt_bb_latest_posts_item .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_title{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_latest_posts .bt_bb_latest_posts_item.btNoImage .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta .bt_bb_latest_posts_item_category ul.post-categories li a:hover{color: {$accentColor};}
.bt_bb_latest_posts .bt_bb_latest_posts_item.btNoImage .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta .bt_bb_latest_posts_item_author a:hover{color: {$accentColor};}
.bt_bb_masonry_post_grid .bt_bb_grid_item_post_content .bt_bb_grid_item_category .post-categories{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_masonry_post_grid .bt_bb_grid_item_post_content .bt_bb_grid_item_category .post-categories li a{color: {$accentColor};}
.bt_bb_masonry_post_grid .bt_bb_grid_item_post_content .bt_bb_grid_item_meta > span{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;
    color: {$accentColor};}
.bt_bb_masonry_post_grid .bt_bb_grid_item_post_content .bt_bb_grid_item_meta > span a{color: {$accentColor};}
.bt_bb_masonry_post_grid .bt_bb_grid_item_post_content .bt_bb_grid_item_post_title a:hover{color: {$accentColor};}
.bt_bb_post_grid_filter{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_post_grid_filter .bt_bb_post_grid_filter_item:hover,
.bt_bb_post_grid_filter .bt_bb_post_grid_filter_item.active{
    color: {$accentColor};}
.bt_bb_post_grid_loader{
    border-top: .4em solid {$accentColor};}
.bt_bb_service .bt_bb_service_content .bt_bb_service_content_title{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_service .bt_bb_service_content .bt_bb_service_content_button_text{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.slick-dots li.slick-active,
.slick-dots li:hover{background-color: {$accentColor};}
.bt_bb_layout_wide button.slick-arrow.slick-prev{
    color: {$accentColor};}
.bt_bb_layout_wide button.slick-arrow.slick-next{
    color: {$accentColor};}
.bt_bb_style_simple ul.bt_bb_tabs_header li.on{border-color: {$accentColor};}
.bt_bb_accordion .bt_bb_accordion_item .bt_bb_accordion_item_title_content .bt_bb_accordion_item_title{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_price_list .bt_bb_price_list_supertitle{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_price_list .bt_bb_price_list_price{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_price_list .bt_bb_price_list_title{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_schedule .bt_bb_schedule_title_flex{
    background-color: {$accentColor};}
.bt_bb_schedule .bt_bb_schedule_title_flex .bt_bb_schedule_supertitle{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_schedule .bt_bb_schedule_title_flex .bt_bb_schedule_title{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_day .bt_bb_schedule_week_day{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_day .bt_bb_schedule_inner_location:before{
    color: {$accentColor};}
.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_time .bt_bb_schedule_hours{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day .bt_bb_schedule_week_day{color: {$accentColor};}
.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day .bt_bb_schedule_week_day:before{
    color: {$accentColor};}
.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_time .bt_bb_schedule_hours{color: {$accentColor};}
.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_time .bt_bb_schedule_inner_desc:before{
    color: {$accentColor};}
.bt_bb_event .bt_bb_event_content .bt_bb_event_date{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;
    color: {$accentColor};}
.bt_bb_event .bt_bb_event_content .bt_bb_event_content_title{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_event .bt_bb_event_content .bt_bb_event_content_title a:hover{color: {$accentColor};}
@media (max-width: 480px){.bt_bb_event .bt_bb_event_content .bt_bb_event_date .bt_bb_event_date_month:after{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;
    color: {$accentColor};}
}.bt_bb_card .bt_bb_card_content .bt_bb_card_supertitle{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_image_position_top.bt_bb_card .bt_bb_card_content .bt_bb_card_supertitle{color: {$accentColor};}
.bt_bb_card .bt_bb_card_content .bt_bb_card_title{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_card .bt_bb_card_content .bt_bb_card_title:before{
    color: {$accentColor};}
.btHeadingDash_circle .bt_bb_card .bt_bb_card_content .bt_bb_card_title:before{
    color: {$accentColor};}
.btHeadingDash_guitar .bt_bb_card .bt_bb_card_content .bt_bb_card_title:before{
    color: {$alternateColor};}
.bt_bb_card .bt_bb_card_content .bt_bb_card_button_text{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_step_line .bt_bb_inner_step .bt_bb_inner_step_content .bt_bb_inner_step_content_holder:after{
    background: {$accentColor};}
.bt_bb_step_line .bt_bb_inner_step .bt_bb_inner_step_content:before{
    color: {$accentColor};
    -webkit-box-shadow: 0 0 0 2px {$accentColor} inset;
    box-shadow: 0 0 0 2px {$accentColor} inset;}
.bt_bb_step_line .bt_bb_inner_step .bt_bb_inner_step_content:after{
    background: {$accentColor};}
.bt_bb_step_line .bt_bb_inner_step .bt_bb_inner_step_content .bt_bb_inner_step_title{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
div.wpcf7-validation-errors,
div.wpcf7-acceptance-missing{border: 2px solid {$accentColor};}
span.wpcf7-not-valid-tip{color: {$accentColor};}
.btContact .btContactRow .icon_name:before{
    color: {$accentColor};}
.btContact .btContactRow .icon_email:before{
    color: {$accentColor};}
.btContact .btContactRow .icon_course:before{
    color: {$accentColor};}
.btContact .btContactRow .icon_message:before{
    color: {$accentColor};}
.btContact .btContactRow .btContactList .fancy-select .trigger:before{
    color: {$accentColor};}
.products ul li.product .btWooShopLoopItemInner .added:after,
.products ul li.product .btWooShopLoopItemInner .loading:after,
ul.products li.product .btWooShopLoopItemInner .added:after,
ul.products li.product .btWooShopLoopItemInner .loading:after{
    background-color: {$alternateColor};}
.products ul li.product .btWooShopLoopItemInner .added_to_cart,
ul.products li.product .btWooShopLoopItemInner .added_to_cart{
    color: {$accentColor};}
.products ul li.product .onsale,
ul.products li.product .onsale{
    background: {$alternateColor};}
nav.woocommerce-pagination ul li a,
nav.woocommerce-pagination ul li span{
    -webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;
    color: {$accentColor};}
nav.woocommerce-pagination ul li a:focus,
nav.woocommerce-pagination ul li a:hover,
nav.woocommerce-pagination ul li a.next,
nav.woocommerce-pagination ul li a.prev,
nav.woocommerce-pagination ul li span.current{-webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
div.product .onsale{
    background: {$alternateColor};}
div.product div.images .woocommerce-product-gallery__trigger:after{
    -webkit-box-shadow: 0 0 0 2em {$accentColor} inset,0 0 0 2em rgba(255,255,255,.5) inset;
    box-shadow: 0 0 0 2em {$accentColor} inset,0 0 0 2em rgba(255,255,255,.5) inset;}
div.product div.images .woocommerce-product-gallery__trigger:hover:after{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset,0 0 0 2em rgba(255,255,255,.5) inset;
    box-shadow: 0 0 0 1px {$accentColor} inset,0 0 0 2em rgba(255,255,255,.5) inset;
    color: {$accentColor};}
div.product div.summary .price{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
table.shop_table .coupon .input-text{
    color: {$accentColor};}
table.shop_table td.product-remove a.remove{
    color: {$accentColor};
    -webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;}
table.shop_table td.product-remove a.remove:hover{background-color: {$accentColor};}
ul.wc_payment_methods li .about_paypal{
    color: {$accentColor};}
.woocommerce-MyAccount-navigation ul li a{
    border-bottom: 2px solid {$accentColor};}
.btDarkSkin .woocommerce-error,
.btLightSkin .btDarkSkin .woocommerce-error,
.btDarkSkin.btLightSkin .btDarkSkin .woocommerce-error,
.btDarkSkin .woocommerce-info,
.btLightSkin .btDarkSkin .woocommerce-info,
.btDarkSkin.btLightSkin .btDarkSkin .woocommerce-info,
.btDarkSkin .woocommerce-message,
.btLightSkin .btDarkSkin .woocommerce-message,
.btDarkSkin.btLightSkin .btDarkSkin .woocommerce-message{border-top: 4px solid {$accentColor};}
.woocommerce-info a:not(.button),
.woocommerce-message a:not(.button){color: {$accentColor};}
.woocommerce-message:before,
.woocommerce-info:before{
    color: {$accentColor};}
.woocommerce .btSidebar a.button,
.woocommerce .btContent a.button,
.woocommerce-page .btSidebar a.button,
.woocommerce-page .btContent a.button,
.woocommerce .btSidebar input[type=\"submit\"],
.woocommerce .btContent input[type=\"submit\"],
.woocommerce-page .btSidebar input[type=\"submit\"],
.woocommerce-page .btContent input[type=\"submit\"],
.woocommerce .btSidebar button[type=\"submit\"],
.woocommerce .btContent button[type=\"submit\"],
.woocommerce-page .btSidebar button[type=\"submit\"],
.woocommerce-page .btContent button[type=\"submit\"],
.woocommerce .btSidebar input.button,
.woocommerce .btContent input.button,
.woocommerce-page .btSidebar input.button,
.woocommerce-page .btContent input.button,
.woocommerce .btSidebar input.alt:hover,
.woocommerce .btContent input.alt:hover,
.woocommerce-page .btSidebar input.alt:hover,
.woocommerce-page .btContent input.alt:hover,
.woocommerce .btSidebar a.button.alt:hover,
.woocommerce .btContent a.button.alt:hover,
.woocommerce-page .btSidebar a.button.alt:hover,
.woocommerce-page .btContent a.button.alt:hover,
.woocommerce .btSidebar .button.alt:hover,
.woocommerce .btContent .button.alt:hover,
.woocommerce-page .btSidebar .button.alt:hover,
.woocommerce-page .btContent .button.alt:hover,
.woocommerce .btSidebar button.alt:hover,
.woocommerce .btContent button.alt:hover,
.woocommerce-page .btSidebar button.alt:hover,
.woocommerce-page .btContent button.alt:hover,
div.woocommerce a.button,
div.woocommerce input[type=\"submit\"],
div.woocommerce button[type=\"submit\"],
div.woocommerce input.button,
div.woocommerce input.alt:hover,
div.woocommerce a.button.alt:hover,
div.woocommerce .button.alt:hover,
div.woocommerce button.alt:hover{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.woocommerce .btSidebar a.button,
.woocommerce .btContent a.button,
.woocommerce-page .btSidebar a.button,
.woocommerce-page .btContent a.button,
.woocommerce .btSidebar input[type=\"submit\"],
.woocommerce .btContent input[type=\"submit\"],
.woocommerce-page .btSidebar input[type=\"submit\"],
.woocommerce-page .btContent input[type=\"submit\"],
.woocommerce .btSidebar button[type=\"submit\"],
.woocommerce .btContent button[type=\"submit\"],
.woocommerce-page .btSidebar button[type=\"submit\"],
.woocommerce-page .btContent button[type=\"submit\"],
.woocommerce .btSidebar input.button,
.woocommerce .btContent input.button,
.woocommerce-page .btSidebar input.button,
.woocommerce-page .btContent input.button,
.woocommerce .btSidebar input.alt:hover,
.woocommerce .btContent input.alt:hover,
.woocommerce-page .btSidebar input.alt:hover,
.woocommerce-page .btContent input.alt:hover,
.woocommerce .btSidebar a.button.alt:hover,
.woocommerce .btContent a.button.alt:hover,
.woocommerce-page .btSidebar a.button.alt:hover,
.woocommerce-page .btContent a.button.alt:hover,
.woocommerce .btSidebar .button.alt:hover,
.woocommerce .btContent .button.alt:hover,
.woocommerce-page .btSidebar .button.alt:hover,
.woocommerce-page .btContent .button.alt:hover,
.woocommerce .btSidebar button.alt:hover,
.woocommerce .btContent button.alt:hover,
.woocommerce-page .btSidebar button.alt:hover,
.woocommerce-page .btContent button.alt:hover,
div.woocommerce a.button,
div.woocommerce input[type=\"submit\"],
div.woocommerce button[type=\"submit\"],
div.woocommerce input.button,
div.woocommerce input.alt:hover,
div.woocommerce a.button.alt:hover,
div.woocommerce .button.alt:hover,
div.woocommerce button.alt:hover{
    -webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
.woocommerce .btSidebar a.button:hover,
.woocommerce .btContent a.button:hover,
.woocommerce-page .btSidebar a.button:hover,
.woocommerce-page .btContent a.button:hover,
.woocommerce .btSidebar input[type=\"submit\"]:hover,
.woocommerce .btContent input[type=\"submit\"]:hover,
.woocommerce-page .btSidebar input[type=\"submit\"]:hover,
.woocommerce-page .btContent input[type=\"submit\"]:hover,
.woocommerce .btSidebar button[type=\"submit\"]:hover,
.woocommerce .btContent button[type=\"submit\"]:hover,
.woocommerce-page .btSidebar button[type=\"submit\"]:hover,
.woocommerce-page .btContent button[type=\"submit\"]:hover,
.woocommerce .btSidebar input.button:hover,
.woocommerce .btContent input.button:hover,
.woocommerce-page .btSidebar input.button:hover,
.woocommerce-page .btContent input.button:hover,
.woocommerce .btSidebar input.alt,
.woocommerce .btContent input.alt,
.woocommerce-page .btSidebar input.alt,
.woocommerce-page .btContent input.alt,
.woocommerce .btSidebar a.button.alt,
.woocommerce .btContent a.button.alt,
.woocommerce-page .btSidebar a.button.alt,
.woocommerce-page .btContent a.button.alt,
.woocommerce .btSidebar .button.alt,
.woocommerce .btContent .button.alt,
.woocommerce-page .btSidebar .button.alt,
.woocommerce-page .btContent .button.alt,
.woocommerce .btSidebar button.alt,
.woocommerce .btContent button.alt,
.woocommerce-page .btSidebar button.alt,
.woocommerce-page .btContent button.alt,
div.woocommerce a.button:hover,
div.woocommerce input[type=\"submit\"]:hover,
div.woocommerce button[type=\"submit\"]:hover,
div.woocommerce input.button:hover,
div.woocommerce input.alt,
div.woocommerce a.button.alt,
div.woocommerce .button.alt,
div.woocommerce button.alt{
    color: {$accentColor};
    -webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;}
.star-rating span:before{
    color: {$accentColor};}
p.stars a[class^=\"star-\"].active:after,
p.stars a[class^=\"star-\"]:hover:after{color: {$accentColor};}
.btDarkSkin .select2-container--default .select2-results__option[aria-selected=true],
.btLightSkin .btDarkSkin .select2-container--default .select2-results__option[aria-selected=true],
.btDarkSkin.btLightSkin .btDarkSkin .select2-container--default .select2-results__option[aria-selected=true],
.btDarkSkin .select2-container--default .select2-results__option[data-selected=true],
.btLightSkin .btDarkSkin .select2-container--default .select2-results__option[data-selected=true],
.btDarkSkin.btLightSkin .btDarkSkin .select2-container--default .select2-results__option[data-selected=true]{background-color: {$accentColor} !important;}
.select2-container--default .select2-results__option--highlighted[aria-selected],
.select2-container--default .select2-results__option--highlighted[data-selected]{background-color: {$accentColor};}
.btQuoteBooking .btContactNext{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;
    color: {$accentColor};
    -webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;}
.btQuoteBooking .btContactNext:hover{
    -webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
.btQuoteBooking .btQuoteSwitch.on .btQuoteSwitchInner{background: {$accentColor};}
.btQuoteBooking .btQuoteItem label{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.btQuoteBooking .ui-slider .ui-slider-handle{background: {$accentColor};}
.btQuoteBooking .btQuoteBookingForm .btQuoteTotal{
    background: {$accentColor};}
.btQuoteBooking .btContactFieldMandatory.btContactFieldError input,
.btQuoteBooking .btQuoteBooking .btContactFieldMandatory.btContactFieldError textarea{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset !important;
    box-shadow: 0 0 0 1px {$accentColor} inset !important;
    border-color: {$accentColor} !important;}
.btQuoteBooking .btQuoteContact .btQuoteItem.btContactFieldMandatory.btContactFieldError textarea.btContactMessage{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset !important;
    box-shadow: 0 0 0 1px {$accentColor} inset !important;
    border-color: {$accentColor} !important;}
.btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadius .ddTitleText{-webkit-box-shadow: 0 0 0 2px {$accentColor} inset;
    box-shadow: 0 0 0 2px {$accentColor} inset;}
.btQuoteBooking .btSubmitMessage{color: {$accentColor};}
.btQuoteBooking .btContactSubmit{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;
    -webkit-box-shadow: 0 0 0 3em {$accentColor} inset;
    box-shadow: 0 0 0 3em {$accentColor} inset;}
.btQuoteBooking .btContactSubmit:hover{color: {$accentColor};
    -webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;}
.bt_cc_email_confirmation_container [type=\"checkbox\"]:not(:checked) + label:before,
.bt_cc_email_confirmation_container [type=\"checkbox\"]:checked + label:before{border: 2px solid {$accentColor};}
.btDatePicker .ui-datepicker-header{background-color: {$accentColor};}
.bt_bb_cost_calculator .bt_bb_cost_calculator_total{background-color: {$accentColor};}
.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_text{background-color: {$accentColor};}
.bt_bb_organic_animation_fill.bt_bb_organic_animation .item .item__deco{fill: {$alternateColor};}
.bt_bb_organic_animation_fill_accent.bt_bb_organic_animation .item .item__deco{fill: {$accentColor};}
.bt_bb_organic_animation_stroke.bt_bb_organic_animation .item .item__deco{stroke: {$alternateColor};}
.bt_bb_organic_animation_stroke_accent.bt_bb_organic_animation .item .item__deco{stroke: {$accentColor};}
.bt_bb_organic_animation .item .item__meta .item__subtitle{
    font-family: \"{$headingSubTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_organic_animation .item .item__meta .item__button_text{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
@media (max-width: 480px){.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a{-webkit-box-shadow: 0 0 0 0 {$accentColor} inset !important;
    box-shadow: 0 0 0 0 {$accentColor} inset !important;}
}", array() );