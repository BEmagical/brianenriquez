(function(a){a(function(){var h=a("#wp_rp_plugin_static_base_url").val();platforms={mobile:{wrap:a("#wp_rp_mobile_theme_options_wrap"),theme_area:a("#wp_rp_mobile_theme_area"),current_theme:a("#wp_rp_mobile_theme_selected").val()},desktop:{wrap:a("#wp_rp_desktop_theme_options_wrap"),theme_area:a("#wp_rp_desktop_theme_area"),current_theme:a("#wp_rp_desktop_theme_selected").val()}};themes={mobile:[{name:"Modern",location:"m-modern.css"},{name:"Infinite Stream (experimental)",location:"m-stream.css"},
{name:"Plain (your own css)",location:"m-plain.css"}],desktop:[{name:"Momma",location:"momma.css"},{name:"Modern",location:"modern.css"},{name:"Vertical (Large)",location:"vertical.css"},{name:"Vertical (Medium)",location:"vertical-m.css"},{name:"Vertical (Small)",location:"vertical-s.css"},{name:"Pinterest Inspired",location:"pinterest.css"},{name:"Two Columns",location:"twocolumns.css"},{name:"Plain (your own css)",location:"plain.css"}]};update_themes=function(){a.each(platforms,function(b,e){var d=
e.wrap.find("div.theme-list"),f=e.wrap.find("div.theme-screenshot"),g=function(b){if(b.val()){var b=h+"img/themes/"+b.val().replace(/\.css$/,".jpg"),c=f.find("img");if(c.length){if(c.attr("src")===b)return}else c=a("<img />"),f.html(c);c.attr("src",b)}else f.html("")};d.empty();a.each(themes[b],function(a,c){"custom.css"!=c.location&&d.append('<label class="theme-label"><input '+(c.location===e.current_theme?'checked="checked"':"")+' class="theme-option" type="radio" name="wp_rp_'+b+'_theme_name" value="'+
c.location+'" /> '+c.name+"</label><br />")});d.on("hover","label.theme-label",function(){g(a("input",this))});d.on("mouseleave",function(){g(d.find("input:checked"))});g(d.find("input:checked"));e.theme_area.show()})};update_custom_css_area=function(b){var e=a("#wp_rp_"+b+"_custom_theme_enabled:checked"),d=a("#wp_rp_"+b+"_theme_custom_css_wrap");e.length?(d.show(),e.closest("label").addClass("wp_rp_settings_button_disabled")):(d.hide(),a("#wp_rp_"+b+"_custom_theme_enabled").closest("label").removeClass("wp_rp_settings_button_disabled"))};
a.each(platforms,function(b){update_custom_css_area(b);a("#wp_rp_"+b+"_custom_theme_enabled").on("change",function(){update_custom_css_area(b)})});a("#wp_rp_enable_themes:checked").length&&(update_themes(),a("#wp_rp_theme_options_wrap").show());a("#wp_rp_enable_themes").change(function(){a("#wp_rp_enable_themes:checked").length?append_get_themes_script():a("#wp_rp_theme_options_wrap").hide()})})})(jQuery);
