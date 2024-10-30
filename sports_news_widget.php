<?php
/*
Plugin Name: Blitzcorner Sports News Widget
Plugin URI: http://www.blitzcorner.com/website/create_widget/11
Description: Sports News Widget for Sports Blogs
Version: 1.0
Author: Blitzcorner
Author URI: http://www.blitzcorner.com
License: GPL2

Copyright 2012 Blitzcorner (email: info@blitzcorner.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/* Add our function to the widgets_init hook. */
add_action('widgets_init', 'bc_sports_widget');

/* Function that registers our widget. */
function bc_sports_widget()
{
    register_widget('Bc_Sports_Widget');
}

class Bc_Sports_Widget extends WP_Widget
{
    function Bc_Sports_Widget()
    {
        /* Widget settings. */
        $widget_ops = array('classname' => 'BcSportsWidget', 'description' => 'Sports news widget for sports blogs');

        /* Widget control settings. */
        //$control_ops = array('width' => 300, 'height' => 350, 'id_base' => 'sports-BC-news-widget');
        $control_ops = array('id_base' => 'bc-sports-widget');

        /* Create the widget. */
        $this->WP_Widget('bc-sports-widget', 'Sports News Widget', $widget_ops, $control_ops);
    }

    function widget($args, $instance)
    {
        extract($args);

        /* User-selected settings. */
        //$title = apply_filters('widget_title', $instance['title']);
        $title= "Sports News Widget";

        /* Before widget (defined by themes). */
        echo $before_widget;

        /* Title of widget (before and after defined by themes). */
        /*
        if ($title)
            echo $before_title.$title.$after_title;
        */

        /* Display the widget. */
        echo '<iframe scrolling=no width="300" frameborder="0" height="375" style="max-width:300px; margin-left:-50px;" src="http://www.blitzcorner.com/widget/0/1/4/75/300/000000/ffffff/1/show_multi_widget"></iframe>';

        /* After widget (defined by themes). */
        echo $after_widget;
    }

    function update($new_instance, $old_instance)
    {
        $instance = $old_instance;

        /* Strip tags (if needed) and update the widget settings. */

        return $instance;
    }

    function form($instance)
    {
        /* Set up some default widget settings. */
        $defaults = array();
        $instance = wp_parse_args((array)$instance, $defaults);
    }
}
?>