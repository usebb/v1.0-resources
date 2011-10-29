<?php

/*
	UseBB 1.0 translation helper ACP module 1.1
	Copyright (C) 2006 Dietrich Moerman
	
	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

	Version 1.1 (Jan 2011)
		* Show percentages
		* Nicer layout
*/

$usebb_module_info = array(
	'short_name' => 'translate',
	'long_name' => 'Translation Helper',
	'acp_category' => 'various',
);

if ( defined('RUN_MODULE') ) {
	
	class usebb_module {
		
		function load_translation($name, $section) {
			
			if ( file_exists(ROOT_PATH.'languages/'.$section.'_'.$name.'.php') )
				require(ROOT_PATH.'languages/'.$section.'_'.$name.'.php');
			else
				$lang = array();
			return $lang;
			
		}
		
		function list_keys($name, $section) {
			
			$English = array_keys($this->load_translation('English', $section));
			$translation = array_keys($this->load_translation($name, $section));
			$changes = array_diff($English, $translation);
			sort($changes);
			$perc = round((count($English) - count($changes)) / count($English) * 100, 2);

			$out = '<h2><code>'.$section.'_'.$name.'.php</code>: '.$perc.'%</h2>';
			$out .= '<p>Missing keys: '.count($changes).' of '.count($English).' total.</p>';
			$out .= '<ul>';
			foreach ( $changes as $key )
				$out .= '<li><code>'.$key.'</code></li>';
			$out .= '</ul>';
			
			return $out;
			
		}
		
		function run_module() {
			
			global $functions;
			
			if ( !in_array('English', $functions->get_language_packs()) )
				return '<h2>Error</h2><p>No English language pack found. This is necessary to check translations.</p>';
			
			if ( !empty($_GET['check']) && in_array($_GET['check'], $functions->get_language_packs()) ) {
				
				$out = '';
				$out .= $this->list_keys($_GET['check'], 'lang');
				$out .= $this->list_keys($_GET['check'], 'admin');
				return $out;
				
			} else {
				
				$out = '<p>Giving a language, this will list untranslated string keys and a general percentage of translated strings.</p>';
				$out .= '<h2>Select translation to check</h2>';
				$out .= '<form action="'.$functions->make_url('admin.php', array('act' => 'mod_translate')).'" method="get"><p><input type="hidden" name="act" value="mod_translate" /><select name="check">';
				foreach ( $functions->get_language_packs() as $translation ) {
					
					if ( $translation == 'English' )
						continue;
					
					$out .= '<option value="'.$translation.'">'.$translation.'</option>';
					
				}
				$out .= '</select> <input type="submit" value="Check" /></p></form>';
				
				return $out;
				
			}
			
		}
		
	}
	
	$usebb_module = new usebb_module;
	
}

?>
