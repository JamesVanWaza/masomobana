<?php include_once 'nav-admin.php';?>

<div class="container-fluid">
	<div class="row">
		<h2 class="text-center">PHP TIPS AND TRICKS</h2>
		<section class="small-12 medium-6 large-6 columns">
			<?php echo "<p>The Current Version of PHP on this site is " . phpversion() . "</p>"; ?>
		</section>
		<section class="small-12 medium-6 large-6 columns">
		<h4>Find the definitions of the functions</h4>
		<input type="search" name="search">
			<?php
				/**
				add_query_arg();
				apply_filters( $tag, $value );
				array_key_exists();
				array_keys(input);
				array_merge();
				array_shift();
				array_values(input);
				asort();
				build_query( $data );
				ceil(number);
				check_admin_referer();
				class_exists(class_name); /** Checks whether the classname exists
				convert_smilies();
				current_user_can( $capability );
				current_time( $type, $gmt );
				default_password_nag();
				dirname(__FILE__);
				EMPTY_TRASH_DAYS
				ENT_QUOTES
				explode(delimiter, string);
				_e('');
				extract(var_array);
				esc_attr();
				esc_url( $url, $protocols, $_context );
				esc_url_raw();
				esc_html_x();
				feof();
				file_get_contents();
				filesize();
				floor(number);
				get_class();
				get_class_vars();
				get_current_blog_id();
				get_current_user_id();
				getcwd(); //Gets the current directory
				get_locale();
				get_option();
				get_post_type();
				get_queried_object();
				get_site_option( $option, $default, $use_cache );
				get_users();
				htmlentities();
				html_entity_decode();
				is_a();
				is_email( $email, $deprecated );
				is_feed( $feeds );
				is_home();
				is_main_site( $blog_id );
				is_page( $page );
				is_object();
				is_super_admin( $user_id );
				is_user_logged_in();
				join();
				locate_template( $template_names, $load, $require_once );
				load_plugin_textdomain();
				method_exists();
				ob_get_clean(oid);
				ord();
				network_admin_url();
				number_format();
				number_format_i18n();
				nl2br();
				parse_str();
				pre_option_;
				pre_update_option_;
				path_join( $base, $path );
				plugin_basename();
				plugins_url();
				posix_getpwuid();
				preg_match(pattern, subject);
				rand();
				register_activation_hook();
				sanitize_user();
				self::
				substr(string, start);
				stripslashes();
				strlen();
				str_replace();
				strstr(haystack, needle);
				sprintf();
				trailingslashit();
				unlink(); //Delete a file
				update_option( $option, $newvalue );
				update_user_option();
				update_user_meta();
				urlencode(str);
				validate_username();
				version_compare(version1, version2);
				wp_insert_user();
				wp_generate_password();
				wp_redirect();
				wp_kses_data( $data );
				wp_upload_dir( $time );
				wp_specialchars_decode();
				wp_verify_nonce()
				%s&#8211;%s
				**/
			?>
		</section>

		<section class="small-12 medium-6 large-6 columns">
			<ol>
				To Change the PHP Version instead of using the current version of MAMP
				<li>Go to <a href="http://php-osx.liip.ch">Brew PHP</a></li>
				<li>Install Specific Version</li>
				<li><code class="code-vim">nano .bash_profile</code></li>
				<li><code class="code-vim">export PATH="/Applications/MAMP/bin/CurrentPhPVersion"</code></li>
				<li><code class="code-vim">source ~/.bash_profile</code></li>
				<li><code>Control</code> + <code>X</code> To close the <code class="code-vim">.bash_profile</code></li>
			</ol>
				Resetting PHPmyadmin Password
				1. In the Command Line go to the <code>/etc/db-config-common/phpmyadmin.conf</code>
				2. View the permissions of the file 
				<code>stat -c "%a %n"</code> -filename
				<code>sudo chmod 777</code> -filename
				open filename `phpmyadmin.conf`
				search username under `dbc_user` and password under `dbc_dbpass`
				change back file permissions for phpmyadmin.conf to 655
		</section>
		</div>
	</div>
</div>

<?php include 'footer.php';?>